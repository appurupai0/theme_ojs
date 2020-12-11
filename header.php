<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ojt</title>

	<!-- css　ファイル -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

</head>

<body>
	<!-- header -->
	<header>
		<div class="fixed">
			<li class="menucontent"><?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?></li>
		</div>
		<!-- <div class="fixed">
			<ul class="menulist">
				
				<!-- <li class="menucontent">Menu02</li>
				<li class="menucontent">Menu03</li>
				<li class="menucontent">Menu04</li> -->
			<!-- </ul>
		</div>  -->

		<!-- ドロワー -->
		<div id="drower-bg">
			<li class="js-1"><?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?></li>
				
					<!-- <li class="js-2">Menu02</li>
					<li class="js-3">Menu03</li>
					<li class="js-4">Menu04</li> -->
				<!-- </ul> -->
		</div>
		
		

	</header>
	<!-- header ここまで -->