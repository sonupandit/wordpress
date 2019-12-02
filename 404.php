<?php
error_reporting(0);
session_start(); 
 
include("library_kb/class.pdo.php");
include("library_kb/class.pagination_refresh_based.php");
include("library_kb/class.inputfilter.php");
include("library_kb/function.php");
include("global_functions.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>404! You Lost?</title>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">

<link href="<?php echo SITE_IMAGES; ?>favicon.png" rel="shortcut icon" type="image/png">

<link rel="stylesheet" type="text/css" href="<?php echo SITE_CSS; ?>font-awesome.min.css">
<link href="<?php echo SITE_CSS; ?>mainstyle.css" rel="stylesheet" type="text/css">
<link href="<?php echo SITE_CSS; ?>bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo SITE_CSS; ?>responsive.css" rel="stylesheet" type="text/css">
<script src="<?php echo SITE_JS; ?>jquery.min.js"></script>

</head>
<body>
<div class="outerWrap topsocialBar">
    <div class="container text-right topBar">
        <ul>
            <li>Follow Us</li>
            <li><a href="https://www.facebook.com/kadenborissglobal/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/Kaden_Boriss" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.linkedin.com/company/324760?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A324760%2Cidx%3A3-1-6%2CtarId%3A1480422004310%2Ctas%3Akaden" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>
<?php include "menu.php" ?>


<div class="outerWrap innerbanner-careers">
    <h1 class="innerHead">404! You Lost?</h1>
    <div class="bedcrum">
		<div class="container text-right">
			<a href="index.php">home</a> 
		</div>
	</div>
</div>



<div class="outerWrap innerBody" style="border-bottom:5px solid #d5d5d5;">
	<div class="container">
    	<div class="row">  	  
        	<div class="col-md-12 text-center" style="font-weight: 400; min-height:40vh;">
                <img src="kb-images/404.svg" style="width: 100%; max-width: 180px; opacity: 0.6;" alt="">
				<p class="font16">The page you are looking for doesn't exist.</p>
                <a href="./" class="btn btn-primary" title="">Go to homepage.</a>

            </div>
        </div>
    </div>
</div>



<div class="outerWrap footer">
    <div class="container">
        <div class="row">         
            <div class="col-md-12"> 
                <div class="pull-left social">
                    <a href="https://www.facebook.com/kadenborissglobal/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;
                    <a href="https://twitter.com/Kaden_Boriss" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;
                    <a href="https://www.linkedin.com/company/324760?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A324760%2Cidx%3A3-1-6%2CtarId%3A1480422004310%2Ctas%3Akaden" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
                <span class="font14">&copy; <?php echo date("Y") ?> Kaden Boriss Global.</span><br>
                <span class="ytxt">Website Designed by <a href="http://www.infomediawebsolutions.com" target="_blank">Infomedia Web Solutions</a>.</span>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo SITE_JS; ?>script.js" type="text/javascript"></script>
<script src="<?php echo SITE_JS; ?>bootstrap.js" type="text/javascript"></script>
</body>
</html>