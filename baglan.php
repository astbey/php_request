<?php
$username="root";
$password="root";
$sunucu"localhost";
$database="md1";


$baglan=mysql_connect($sunucu,$usarname,$password);
mysql_query("SET NAMES UTF8");
if(!$baglan)
{
	echo"veritabanı hatası";
	mysql_close($baglan);
}
$db=mysql_select_db($database);
if(!$db){ echo"veritabanı hatası:".mysql_error();echo"<br>";
	
	
	
	
}




?>