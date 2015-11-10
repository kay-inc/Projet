<?php
	session_start();
	include('includes/config.php');
	if(isset($_SESSION['id'])) {
	$id=$_SESSION['id'];
	
	
	
	}
	
?>
<!DOCTYPE Html>


<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="includes/style.css" type="text/css" />
		<title> Ben Aissa Ouadie</title>
		<!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
	</head>
	<!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
    <!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
    <!--[if IE 8 ]><body class="ie8"><![endif]-->
    <!--[if IE 9 ]><body class="ie9"><![endif]-->
    <!--[if !IE]><!--><body><!--<![endif]-->
		<div id="corp_page">
		
			<?php include("includes/header.php"); ?>
			
			<?php include("includes/section.php"); ?>
			<?php include("includes/footer.php"); ?><br/>
		</div>

	</body>

</html>
