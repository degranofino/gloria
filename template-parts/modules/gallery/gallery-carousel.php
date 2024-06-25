include lightgallery

<!-- CARRUSEL OWL -->
<div class="owl-carousel">
    <?php $m = 1; foreach ($media as $image) { ?>
        <div class="item" data-position="<?php echo $m; ?>">
            <img src="<?php echo $image['url']; ?>" >
        </div>
    <?php $m++; }  ?>
</div>
