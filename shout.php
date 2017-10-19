<?php
$db_username = 'root';
$db_password = '';
$db_name = 'wdchimsisfo';
$db_host = 'localhost';

if($_POST)
{
	$sql_con = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
	
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    } 
	
	if(isset($_POST["message"]) &&  strlen($_POST["message"])>0)
	{
		$username = "";
		$message = filter_var(trim($_POST["message"]),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
		$user_ip = $_SERVER['REMOTE_ADDR'];
		
		if(mysqli_query($sql_con,"INSERT INTO shout_box(user, message, ip_address) value('$username','$message','$user_ip')"))
		{
			$msg_time = date('h:i A M d',time()); // current time
			echo '<div class="shout_msg"><time>'.$msg_time.'</time><span class="username">'.$username.'</span><span class="message">'.$message.'</span></div>';
		}
		
		mysqli_query($sql_con,"DELETE FROM shout_box WHERE id NOT IN (SELECT * FROM (SELECT id FROM shout_box ORDER BY id DESC LIMIT 0, 10) as sb)");
	}
	elseif($_POST["fetch"]==1)
	{
		$results = mysqli_query($sql_con,"SELECT user, message, date_time FROM (select * from shout_box ORDER BY id DESC LIMIT 10) shout_box ORDER BY shout_box.id ASC");
		while($row = mysqli_fetch_array($results))
		{
			$msg_time = date('h:i A M d',strtotime($row["date_time"])); 
			echo '<div class="shout_msg"><time>'.$msg_time.'</time><span class="username">'.$row["user"].'</span> <span class="message">'.$row["message"].'</span></div>';
		}
	}
	else
	{
		header('HTTP/1.1 500 Tolong masukkan pesan untuk counselor');
    	exit();
	}
}