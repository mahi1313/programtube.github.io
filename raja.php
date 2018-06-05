<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Happy Raja</title>
<style type="text/css">
#fromtext{
         position:absolute;
		 top: 60px;
         left: 614px;
		 color:#FF0000;
		 animation:anim 5s infinite;
		 }
@keyframes anim{
          0%{color:#FFFFFF; }
		  25%{color:#00FF00;transform:scale(1.5)}
		  50%{color:#FF00FF;transform:scale(0.5)}
		  75%{color:#000000; transform:scale(1.5)}
		  100%{color:#FFFF00;transform:scale(1)}
}

</style>
</head>

<body background="img/raja5.jpg" style="background-size:1366px 760px;">
<h1 id="fromtext">Mr./Ms./Mrs. <?php echo $_GET ['name']; ?> </h1>
<canvas id="canvas"></canvas>
<script type="text/javascript" src="crackers.js"></script>
</body>
</html>
