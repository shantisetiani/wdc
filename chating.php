<div style ="overflow:auto; width:30%;height320px;margin-left:35%;margin-right:35%;">
	<tabel class="art-article" border="0" cellspacing ="0" cellpadding="0" style="margin:0;width:100%;">
		<tbody>
			<?php

			$Open = mysql_connect("localhost","root","");
				if(!$Open){
					die("MySQL E!");	

				}

			$Koneksi = mysql_select_db("wdchimsisfo");
				if(!$Koneksi){
					die("DBase E!");	

				}

			$Tampil="Select * FROM chat ORDER BY waktu DESC LIMIT 99;";
			$query = mysql_query($Tampil);
			while ($hasil=mysql_fetch_array($query)) {
				$konten= stripslashes($hasil['konten']);
				$waktu = stripslashes($hasil['waktu']);
			?>	
			}