<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title><?php 
    wp_title();
    ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(). '/style.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(). '/css/font-awesome.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(). '/css/bootstrap.css' ?>">
    <script src="<?php echo get_template_directory_uri(). '/js/jquery.js'?>"></script>
    <?php 
    wp_head();
    ?>
</head>

<body>

	<div id="wrap">


		<header id="header">
       
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="index.html">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
							<?php 
							dynamic_sidebar('search'); //sökfält
                            ?>
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
						<?php 
							dynamic_sidebar('search');
                            ?>
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							<li class="current-menu-item">
                            <?php 
                            wp_nav_menu();
                            ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
