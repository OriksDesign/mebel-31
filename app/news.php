<!--
Author: Oriks Design
Author URL: http://doma.pl.ua
-->
<?php 
	$title = 'Заказываем угловой шкаф.';
	$meta_keywords = 'Угловой шкаф, заказ шкаф, купить шкаф, угловой шкаф, заказать шкаф белгород, заказать угловой шкаф Белгород, изготовление мебели Белгород';
	$meta_descriptions ='Заказ углового шкафа. Что нужно знать, раскрываем все серкеты. Изготовление мебели Белгород';
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
require_once 'slider.php';
?>
<div class="title-head"><h1 class="">Заказываем угловой шкаф.</h1></div>

<?php
//article
require_once 'zakaz-uglovogo-shkafa.php';
?>
<!--//article-->
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