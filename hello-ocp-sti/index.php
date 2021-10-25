<html>
	<head>
		<title> hello-ocp-sti </title>
	</head>


<h1>hello-ocp-sti</h1>
<br>
Pod hostname: <?php echo getenv('HOSTNAME')?>
<br>
Pod ip: <?php echo $_SERVER['SERVER_ADDR']?>
<br>
<br>
phpinfo: <?php phpinfo()?>
<?php console.log("php log message test")?>
</html>
