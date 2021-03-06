<!--
Author: Oriks Design
Author URL: http://doma.pl.ua
-->
<?php 
	$title = 'Кровати, Белгород';
	$meta_keywords = 'Изготовление мебели, кровати, мягкая мебель, перетяжка мебели Белгород, обивка, мягкой, мебели, в Белгороде, обивка кровати, перетяжка кровати, купить кровать, кожаной, кровать купить в Белгороде, сделать кровать, изготовить кровать, дому, цена, недорого';
	$meta_descriptions ='Изготовление мебели, кровати, мягкая мебель, перетяжка мебели Белгород, обивка, мягкой, мебели, в Белгороде, обивка кровати, перетяжка кровати, купить кровать, кожаной, дому, цена, недорого';
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
<!--//banner -->
<div class="banner-top">
	<div class="container">
		<h1>Мебель</h1>
		<em></em>
		<h2><a href="index.php">Главная</a><label>/</label>Мягкая мебель</h2>
	</div>
</div>
<!-- //end banner-->
	<!--content-->
	<div class="content">
		<div class="container">
			<div class="col-md-9">
				<div class="mid-popular">
					<div class="col-md-4 item-grid1 simpleCart_shelfItem">
						<div class=" mid-pop">
							<div class="pro-img">
								<img src="images/soft/krovati/6.2.jpg" class="img-responsive" alt="Кровати Модель: 6.2">
								<div class="zoom-icon ">
									<a class="picture" href="images/soft/krovati/6.2.jpg" rel="Кровати Модель: 6.2" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
								</div>
							</div>
							<div class="mid-1">
								<div class="women">
									<div class="women-top">
										<span>Кровати</span>
										<h6>Модель: 6.2</h6>
									</div>
									<div class="float-right">
										<a  href="#call-popup" class="open-popup-link"><div class="btn btn-danger">Заказать</div></a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="mid-2">
									<p>Описание</p>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>				
					<div class="col-md-4 item-grid1 simpleCart_shelfItem">
						<div class=" mid-pop">
							<div class="pro-img">
								<img src="images/soft/krovati/6.3.jpg" class="img-responsive" alt="Кровати Модель: 6.3">
								<div class="zoom-icon ">
									<a class="picture" href="images/soft/krovati/6.3.jpg" rel="Кровати Модель: 6.3" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
								</div>
							</div>
							<div class="mid-1">
								<div class="women">
									<div class="women-top">
										<span>Кровати</span>
										<h6>Модель: 6.3</h6>
									</div>
									<div class="float-right">
										<a  href="#call-popup" class="open-popup-link"><div class="btn btn-danger">Заказать</div></a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="mid-2">
									<p>Описание</p>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
<!--//categories soft-->
<?php  
require_once 'categories-soft.php';
?>
<!--//end categories soft-->			
			<div class="clearfix"></div>			
		</div>
	</div>
<!--// end content-->
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