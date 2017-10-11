<html>
    <head>
        <title><?php
$sql = mysql_query("SELECT * FROM jc_setting WHERE set_id=1");
if(mysql_num_rows($sql) != 0){
    while($data = mysql_fetch_assoc($sql)){
        echo ''.$data['set_content'].'';
    }
}
?> 
 
- 
 
<?php
$sql = mysql_query("SELECT * FROM jc_setting WHERE set_id=2");
if(mysql_num_rows($sql) != 0){
    while($data = mysql_fetch_assoc($sql)){
        echo ''.$data['set_content'].'';
    }
}
?></title>
</head>
<body>
<h1>welcome to <?php
$sql = mysql_query("SELECT * FROM jc_setting WHERE set_id=1");
if(mysql_num_rows($sql) != 0){
    while($data = mysql_fetch_assoc($sql)){
        echo ''.$data['set_content'].'';
    }
}
?> </h1>
</body>
</html>