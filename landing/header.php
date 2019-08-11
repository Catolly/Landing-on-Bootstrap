<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<title>Заголовок</title>
	<meta content="" name="description" />
	<meta content="" property="og:image" />
	<meta content="" property="og:description" />
	<meta content="" property="og:site_name" />
	<meta content="website" property="og:type" />

	<meta content="telephone=no" name="format-detection" />
	<meta http-equiv="x-rim-auto-match" content="none">

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/favicon.png" />

	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/countdown/jquery.countdown.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/media.css" />
</head>
<body>
	<header>
		<div class="top_line">
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<div class="top_addr">
							<strong>Москва</strong>
							<a class="fancybox" href="#map">ул. Верейская 29, стр. 35</a>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="logo_wrap">
							<a href="#" class="logo"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="Автосервис в Москве АВТО ХОЛЛ" /></a>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="top_addr ta_right">
							<strong>+7 (499) <span>391-71-53</span></strong>
							<a class="fancybox" href="#callback">Заказать обратный звонок</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php bloginfo('description'); ?></h1>
				</div>
			</div>
		</div>
		<div class="buttons_top">
			<div class="container">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<a href="#" class="button spec_button">Оценить стоимость <br>ремонта по фото</a>
						<a href="#" class="button">Прайс</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<nav class="top_mnu" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-lg-push-10 col-md-push-9 col-sm-3 col-xs-6 col-push-9">
					<div class="warranty-wrap">
						<div class="warranty">
							<div class="w_left">
								1
							</div>
							<div class="w_middle">
								год
							</div>
							<div class="w_right">
								Гарантия <br>на все работы
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-10 col-lg-pull-2 col-md-pull-3 col-sm-9 col-xs-6 col-pull-3">
					<div class="top_mnu-wrap">
						<div class="top_mnu-list__main-wrap">
							<?php  wp_nav_menu( array(
								'theme_location'  => '',
								'menu'            => '',
								'container'       => 'ul',
								'container_class' => 'top_mnu-list__main',
								'container_id'    => '',
								'menu_class'      => 'top_mnu-list__main',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							) );?>
						</div>
						<div class="top_mnu-btn">
							<span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>