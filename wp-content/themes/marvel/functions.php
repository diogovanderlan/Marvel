<?php
	//funcoes do tema 
	add_theme_support('description');
	add_theme_support('title-tag');

	//adicionar suporte a thumbnail
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(825,510);

	//logo customizado
	add_theme_support('custom-logo',
		array(
			'width'=>300,
			'height'=>75,
			'flex-height'=>true)
);
	register_nav_menus(
		array(
			'primary'=>_('Menu Primary'),
			'menu_id'=>'principal','menu_class'=>'collapse navbar-collapse')
	);

	//adicionar as areas de widgets 
	function iniciar_widgets(){
		register_sidebar(
			array(
				"name" => "Barra Lateral 1",
				"id" => "lateral1",
				"before_widget" => "<div class='lateral'>",
				"after_widget" => "</div>",
				"before_title" => "<h2>",
				"after_title" => "</h2",
			)
		);
	}
	//iniciar o widges
	add_action("widgets_init","iniciar_widgets");

?>