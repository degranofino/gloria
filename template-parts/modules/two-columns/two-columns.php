<?php $gallery = get_sub_field('gallery'); $rand = rand(); ?>

<div class="section_wrap">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-5">

				<!-- ANIMATION HEAD > number, section y title -->
				<div class="animated_head">
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-section.php'); ?>
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-title.php'); ?>
					<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-subtitle.php'); ?>
					<?php if(!empty($gallery)): ?>
                        <a class="btn__gallery btn btn-outline-primary d-none d-lg-inline-block" data-gallery="gallery_<?php echo $rand; ?>"><?php _e('VER GALERÍA','nubay') ?></a>
                    <?php endif; ?>
				</div>

			</div>

			<div class="col-lg-6 offset-lg-1 normal__animation">
				<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-precontent.php'); ?>
				<?php if(!empty($gallery)): ?>
                    <a class="btn__gallery btn btn-outline-primary d-lg-none" data-gallery="gallery_<?php echo $rand; ?>"><?php _e('VER GALERÍA','nubay') ?></a>
                <?php endif; ?>
				<?php include( TEMPLATEPATH . '/template-parts/modules/commons/module-content.php'); ?>
			</div>

		</div>
	</div>
</div>

<?php if(!empty($gallery)): ?>
    <div class="lg__gallery" id="gallery_<?php echo $rand; ?>">
        <?php foreach ($gallery as $image) { ?>
            <a href="<?php echo $image['url'] ?>">image</a>
        <?php } ?>        
    </div>
<?php endif; ?>