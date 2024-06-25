<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- BOTON TO TOP -->
	<a class="back-to-top" href="#" title="Ir a arriba"></a>

	<!-- LOADING -->
    <div class="cargador">
    	<div class="brand">
    		<img src="<?php bloginfo( 'template_url' ); ?>/img/queens_loading.png" class="img-fluid">
    	</div>
    </div> 

	<!-- HEADER -->
	<header>
		<!-- BRAND -->
		<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
		  	<img src="<?php bloginfo( 'template_url' ); ?>/img/queens_brand.svg" alt="" class="d-none d-md-block">
		  	<img src="<?php bloginfo( 'template_url' ); ?>/img/q.svg" alt="" class="d-md-none">
		</a>

		<?php if(is_front_page()): ?>
			<a href="#contacto" class="btn btn_ancla_contact"><?php _e('REGÍSTRATE AQUÍ','queens'); ?></a>
		<?php else: ?>
			<a href="<?php bloginfo('url'); ?>/#contacto" class="btn"><?php _e('REGÍSTRATE AQUÍ','queens'); ?></a>
		<?php endif; ?>
		
		<?php /*
		<ul class="lang_selector">
			<?php echo my_language_switcher(); ?>	
		</ul>	*/ ?>
	</header>

	<!-- CONTAINER -->
	<div id="wrapper">