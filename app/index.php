<!--
Author: Oriks Design
Author URL: http://doma.pl.ua
-->
<?php 
	$title = 'Изготовление мебели Белгород, мягкая мебель, корпусная мебель, обивка, не дорого';
	$meta_keywords = 'Изготовление мебели, корпусная мебель, мягкая мебель,  перетяжка мебели Белгород, обивка, мягкой, мебели, в Белгороде, дивана, стульев, кресла, кожаной, дому, цена, недорого';
	$meta_descriptions ='Изготовление мебели, корпусная мебель, мягкая мебель, перетяжка, Белгород, обивка, дивана, стульев, кресла, кожаной, цена, недорого';
	require_once 'meta.php';
?> 

<body>

<!-- //preloader -->
<!-- 	<div class="preloader">
		<div class="pulse"></div>
	</div> -->
<!--//header-->
<header class="header">
<?php 
require_once 'header-logo.php';
// social and recived call
$twitter_url = 'https://twitter.com/mebel31ru';
$facebook_url = 'https://www.facebook.com/mebel31/';
$vk_url = 'https://vk.com/mebel31ru';
$instagram_url = '#';
require_once 'header-top.php';
//nav - soft and cabinet menu
require_once 'container-head-top.php';
?>
</header>
<!--//end header-->
<?php 
//flexslider script and banner
//require_once 'slider.php';
?>
<div class="title-head"><h1 class="">Изготовление корпусной и мягкой мебели в Белгороде</h1></div>

<?php
//content
require_once 'content.php';
?>
<!--//content-->
<!--//pop up contact-->
<?php 
require_once 'pop-up-contact.php';
?>
<!-- //end pop up contact-->
<!--//pop up call-->
<?php 
require_once 'pop-up-call.php';
?>
<!-- //end pop up call-->
<!--//footer-->
<?php 
require_once 'footer.php';
?>
<!--//end footer-->
<!--//start scripts-->
<?php 
require_once 'scripts.php';
?>
<!--//end scripts -->	
	<link rel="stylesheet" href="css/main.min.css">
	</body>
</html>