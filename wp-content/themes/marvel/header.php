<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name');?></title>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="description" content="<?php bloginfo('description');?>">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<?php 
			$pasta = esc_url(get_template_directory_uri());
		 ?>
		 <link rel="stylesheet" type="text/css" href="<?php echo $pasta;?>/css/bootstrap.min.css">
		 <link rel="stylesheet" type="text/css" href="<?php echo $pasta;?>/css/fontawesome-all.min.css">
		 <link rel="stylesheet" type="text/css" href="<?php echo $pasta;?>/style.css">
		 <script type="text/javascript" src="<?php echo $pasta;?>/js/jquery-3.3.1.min.js"></script>
		 <script type="text/javascript" src="<?php echo $pasta;?>/js/bootstrap.min.js"></script>
	</head>
	<body>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a href="index.php" class="navbar-brand">
				<?php the_custom_logo();?>	
			</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php 
				//carregar menu principal
				//verificar se o menu existe
				if ( has_nav_menu('primary') ) {
					//funcao do wp mostrar o menu
					wp_nav_menu(
						array(
							'theme_location'=>'primary','menu_class'=>'navbar-nav ml-auto','container'=>'div','container_class'=>'collapse navbar-collapse','container_id'=>'menu'	
						)	
					);
				}
			?>
		</nav>

		