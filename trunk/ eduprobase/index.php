<?php
session_start();

if (!isset($_SESSION['userlog']))
{
	header('Location: login.php');
	exit;
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administraci&oacute;n Escolar</title>
<link rel="stylesheet" type="text/css" href="./style.css" />
<script src="./ff.js" type="text/javascript"></script>
<script src="./jquery.js" type="text/javascript"></script>
<script src="./tmenu.js" type="text/javascript"></script>


</head>

<body>

<div id="content">
<div id="content2">
		<div id="cuadro">
			<div id="ini"><img src="images/inicio.jpg" /></div>
			<div id="men"><img src="images/menu.jpg" /></div>
			<div id="exit"><a href="exit.php"><img src="images/exit.jpg" /></a></div>
		</div><!-- fin del cuadro-->
	<?php
	
	$toproot = './';
	include("menu.php");
	
	?>
	
	<br />
	<div align="center">
	 <iframe name="graficas" src="grafica.php" width="650px" height="450px;" frameborder="0" ></iframe>
	  <p>&nbsp;</p>
	</div>
	<br />
	
</div>
</div>

</body>
</html>
