<?php
include 'baglan.php';

if($_POST['device_id']==1)
{
	
	$md=mysql_query("update md1 set value='".$_POST['value']."'where id='".$_POST['device_id']."'");
	
}



?>