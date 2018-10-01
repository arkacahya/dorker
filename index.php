<html>
<head>
<title>Leonardo Private Checker</title>
<?php
date_default_timezone_set("Asia/Jakarta");
set_time_limit(0);
error_reporting(0);
?>
<link rel="shortcut icon" href="images/logo.ico">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/layout.css">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/z-console.js"></script>
</head>
<body>
	<div class="container">
		<center><img src="images/slc.png"></center>
		<!-- <center><br><div class="title">Dork Extrapper</div></center> -->
		<div class="row" id="mainpage">
			<div class="col-md-5">
				Count: <span id="keywords-count">0</span><br>
				<textarea name="keywords" style="width: 100%; height: 200px; background-color: rgba(0, 0, 0, 0.4);" placeholder="Keywords Here..." wrap="off"></textarea>
			</div>
			<div class="col-md-1">
				<br>
				<center><button id="submit" class="btt" style="width: 100%">Submit</button></center>
				<br>
				<center><button id="mix" class="btt" style="width: 100%">Mix</button></center>
			</div>
			<div class="col-md-5">
				Count: <span id="afterchk-count">0</span><br>
				<textarea name="afterchk" style="width: 100%; height: 200px; background-color: rgba(0, 0, 0, 0.4);" wrap="off"></textarea>
			</div>
		</div>
	</div>
</body>
</html>