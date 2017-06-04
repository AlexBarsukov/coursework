<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<?php 
		require_once "../functions/functions.php";
		$news = getNewsPublic(10,``);
	 ?>
	
	<title>Современные интерьеры</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="../libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="../libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="../css/fonts.css" />
	<link rel="stylesheet" href="../css/main.css" />
	<link rel="stylesheet" href="../css/sled.css" />
	<link rel="stylesheet" href="../css/media.css" />
	<script type="text/javascript" src="../libs/jquery/jquery.1.7.1.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.topside_btn').click(function(event) {
				$('.sidebar').toggleClass('active');
			});
		});
	</script>
</head>
<body>
	<header class = "top_header">
		<div class="header_topline">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<button class="unfold hidden-md hidden-lg">
							<i class="fa fa-mobile" aria-hidden="true"></i>
						</button>
						<div class="top_links">
							<a href="#callback" class="fancybox">Заказать обратный звонок</a>	
						</div>
						<div class="hidden">
							<form id="callback" class="pop_form">
								<h3>Заказать обратный звонок</h3>
								<input type="text" name="name" placeholder="Ваше имя..." required />
								<input type="text" name="phone" placeholder="Ваш телефон..." required />
								<button class="button_left" type="submit">Заказать</button>
							</form>
						</div>

						<div class="soc_buttons">
							<a href="http://vk.com/id0"><i class="fa fa-vk" aria-hidden="true"></i></a>
							<a href="https://www.instagram.com/instagram/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="https://ru-ru.facebook.com/zuck"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"></a>
						</div>	
						
					</div>
				</div>
			</div>
		</div>

		<div class="container">
				<div class="col-md-12">
					<div class="row">
						<a href="../index.html" class="logo">archiTech</a>
					</div>
				</div>
		</div>

		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<nav class="maian_mnu clearfix">
					<button class="main_menu_button hidden-md hidden-lg">
					<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
							<ul>
								<li><a href="about.html">О нас</a></li>
								<li><a href="uslugi.html">Услуги</a></li>
								<li><a href="project.html">Проекты</a></li>
								<li><a href="styles.html">Стили</a></li>
								<li><a href="contact.html">Контакты</a></li>
							</ul>
							<div class="top_contacts"><i class="fa fa-phone" aria-hidden="true"></i>        8-800-111-55-11</div>
						</nav>
						
						
				</div>
			</div>
		</div>	
	</header>
	<!-- кнопки -->
	<section class="buttons">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<center>
					<a href="../download.php?file=dogovor.doc" class="button_left">
					Типовой договор
					</a>
					</center>					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
<center> 
<a href="#calc" class="button_left fancybox"> 
Калькулятор 
</a> 
</center> 
</div> 
</div> 
</div> 
</section> 
<div class="hidden"> 
<form id="calc"> 
<div id="widget_container30965" class="ucalc-div"></div> 
<script> 
var widgetOptions30965 = { 
bg_color: "transparent" 
}; 
(function () { 
var a = document.createElement("script"); 
a.async = true; 
a.src = (document.location.protocol == "https:" ? "https:" : "http:") + "//ucalc.pro/api/widget.js?id=30965&t=" + Math.floor(new Date() / 3600000); 
document.getElementsByTagName("head")[0].appendChild(a) 
})(); 

</script> 
</form> 
</div>
			</div>
		</div>
	</section>
		<div class="container clearfix hidden-lg hidden-md">
			<div class="topside_btn">
				<i class="fa fa-toggle-on" aria-hidden="true"></i>

			</div>
		</div>
		<h1 class="stat_text">Современные интерьеры</h1>
		<div class="container clearfix" style="overflow: hidden;">
			<div class="sidebar">
			<nav class="maian_mnuu clearfix">
			<ul>
			  <li><a href="pr1.php">Современные интерьеры</a></li>
			  <li><a href="pr2.php">Классические интерьеры</a></li>
			  <li><a href="pr3.php">Публичные интерьеры</a></li>
			  <li><a href="pr4.php">Архитектура</a></li>
			</ul>
			</nav>
			</div>
			<div class="side_content">
					<?php 
					
					for ($i = 0; $i < count($news); $i++){
						if($i == 0)
							echo "<div class=\"service\">";
						else
							echo "<div class=\"service\">";
						echo '<img src="../images/archi/'.$news[$i]["id"].'.jpg" class="img_pr">
							<br>
							<b class="service_heading">'.$news[$i]["title"].'</b>
							<br>
							<!-- Место для текста -->
							'.$news[$i]["intro_text"].'
							<br>
							<a href="article4.php?id='.$news[$i]["id"].'" class="php_btn">Подробнее</a>
						</div>';
						if($i == 0)
							echo "<div class=\"clear\"><br></div>";

					}
					?>
				

			</div>
		</div>
	
	<footer class = "top_header">
			<div class="header_topline">
			<h6>Сайт разработан в качестве курсового проекта. Не имеет ничего общего с действительностью. 2017г</h6>			
			</div>
	</footer>
	

				
					

	<script src="../libs/jquery/jquery.spincrement.js"></script>
	<script src="../libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="../libs/countdown/jquery.plugin.js"></script>
	<script src="../libs/countdown/jquery.countdown.min.js"></script>
	<script src="../libs/countdown/jquery.countdown-ru.js"></script>
	
	<script src="../js/common.js"></script>
</body>
</html>