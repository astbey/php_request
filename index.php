<?php
include'baglan.php';
$mdsor=mysql_query("select * from md1");
$medcek=mysql_fetch_assoc($mdsor);


?>
<!DOCTYPE html>
<html>
<head>
<title>page title</title>
<meta http-equiv="refresh"content="120">

</head>
<body>

<button type="button" style ="width:100px;height:100px;"><?php echo($mdcek['value']);?></button>
</body>




</html>