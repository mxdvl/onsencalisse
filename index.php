<?php

if($_SERVER['SERVER_NAME'] == "onsencalisse.com")
  $baseUrl = "";
else $baseUrl = "/onsencalisse.com";

$affaires = array('1812', 'loi78', 'jeux');

if(isset($_GET['q']))
{ 
  $calisse = htmlspecialchars($_GET['q']);

  if(!in_array($calisse, $affaires) && $calisse != "404") {
    if($calisse == "jo") header("Location: ".$baseUrl."/jeux");
    else header("Location: ".$baseUrl."/404");
    exit;
  }

  if($calisse == '404')
    header("HTTP/1.0 404 Not Found");
  else
    header("HTTP/1.0 200 Ok");
}

else header("Location: ".$baseUrl."/".$affaires[array_rand($affaires)] );

?><!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8">
<title>on s'en câlisse</title>
<meta name="description" content="Un site pour les choses dont on se câlisse de.">
<meta name="author" content="Madeck & Domachie">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />

<!-- OpenGraph -->
<meta property="og:title" content="on s'en câlisse" /> 
<meta property="og:image" content="http://onsencalisse.com/de/<?php echo $calisse; ?>-fb.png" /> 
<meta property="og:description" content="Un site pour les choses dont on se câlisse de." /> 
<meta property="og:url" content="http://onsencalisse.com<?php echo $_SERVER['REQUEST_URI']; ?>">

<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/main.css">

<link href='http://fonts.googleapis.com/css?family=Arvo:400' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<script src="js/libs/modernizr.custom.57181.js"></script>

</head>
<body style="top:0; background-position-y:0;" >

	<!-- <div id="test"><?php if(isset($_GET['q'])) echo "true" ; else echo "false"; ?></div> -->

	<img id="minui34" src="img/minui34.png" />

	<div id="stampTool"></div>

  <?php $calisseSize = getimagesize("de/".$calisse.".png") ?>

	<img id="calisse" src="de/<?php echo $calisse; ?>.png" data-width="<?php echo $calisseSize[0]; ?>" data-height="<?php echo $calisseSize[1]; ?>" />	

<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="js/app.js"></script>

<!-- Google Analytics -->
  <script>
    window._gaq = [['_setAccount','UA-8146166-10'],['_setDomainName','onsencalisse.com'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>