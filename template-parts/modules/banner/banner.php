
<?php // var_dump($media); ?>

<!-- CARRUSEL -->
<div class="carrusel">

	<!-- CARRUSEL BOTON -->
	<!-- <a href="#" data-toggle="modal" data-target="#modalGallery" class="carrusel_button"><?php _e('VER GALERÍA', 'gloria') ?></a> -->

	<!-- BANNER SCROLL -->
	<div class="carrusel_scroll">
		<div class="c-text">scroll</div>
		<div class="c-scrolldown">
		    <div class="c-line"></div>
		 </div>
	</div>

	<!-- BANNER TITULO -->
	<div class="carrusel__title animated_letters">
		<?php echo $content['title']; ?>
	</div>

    <!-- CARRUSEL OWL -->
	<div class="owl-carousel">
		<?php $m = 1; foreach ($media['gallery'] as $image) { ?>
			<div class="item" data-position="<?php echo $m; ?>">
		    	<img src="<?php echo $image['url']; ?>" >
	  		</div>
		<?php $m++; }  ?>
	</div>

    <?php /*

	<!-- CARRUSEL NAVIGATION -->
	<div class="carrusel__navigation">
		<div class="carrusel__navigation__bar">
			<div class="carrusel__navigation__bar_number carrusel__navigation__bar__current">
				<div class="current_0">00</div>
				<?php $n = 1; foreach ($carrusel['imagenes'] as $imagen) {
					if($n == 1): $active = 'active'; else: $active = ''; endif; ?>
					<div class="current_item current_<?php echo $n; ?> <?php echo $active; ?>">0<?php echo $n; ?></div>
				<?php $n++; }  ?>
			</div>
			<div class="carrusel__navigation__bar_progress">
				<?php $n = 1; foreach ($carrusel['imagenes'] as $imagen) { ?>
					<div class="carrusel__navigation__bar_progress_item" data-position="<?php echo $n; ?>"></div>
				<?php $n++; }  ?>
			</div>
			<div class="carrusel__navigation__bar_number carrusel__navigation__bar__total">
				0<?php echo count($carrusel['imagenes']); ?>
			</div>
		</div>
	</div>

	<!-- CARRUSEL OWL -->
	<div class="owl-carousel">
		<?php $m = 1; foreach ($carrusel['imagenes'] as $imagen) { ?>
			<div class="item" data-position="<?php echo $m; ?>">
		    	<div class="caption"><?php echo $imagen['titulo']; ?></div>
		    	<img src="<?php echo $imagen['imagen_vertical']; ?>" class="img-portrtait">
		    	<img src="<?php echo $imagen['imagen']; ?>" class="img-landscape">
	  		</div>
		<?php $m++; }  ?>
	</div>

    */ ?>

</div>