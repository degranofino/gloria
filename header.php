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
    <div class="loading">
    	<div class="loading__brand">
    		<img src="<?php bloginfo( 'template_url' ); ?>/img/loading.png" class="img-fluid">
			<div class="progress__bar">
				<div class="bar"></div>
			</div>
    	</div>
    </div>

	<!-- HEADER -->
	<header>

		<!-- BRAND -->
		<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">

			<?php if(is_front_page()): ?>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/brand.png" alt="" class="d-none d-md-block">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/brand-mobile.png" alt="" class="d-md-none">
			<?php else: ?>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/brand-white.png" alt="" class="d-none d-md-block">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/brand-mobile-white.png" alt="" class="d-md-none">
			<?php endif; ?>

		</a>

		<?php if(is_front_page()): ?>
			<a href="#contacto" class="btn btn-primary btn_ancla_contact"><?php _e('REGÍSTRATE AQUÍ','queens'); ?></a>
		<?php else: ?>
			<a href="<?php bloginfo('url'); ?>/#contacto" class="btn btn-primary"><?php _e('REGÍSTRATE AQUÍ','queens'); ?></a>
		<?php endif; ?>

		<?php /*
		<ul class="lang_selector">
			<?php echo my_language_switcher(); ?>
		</ul>	*/ ?>

	</header>

	<!-- CONTAINER -->
	<div id="wrapper">