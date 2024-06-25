<div class="tab-content" id="myTabContent">
    <?php $n = 1; foreach ($icons as $icon) {
        $icon_class = ($n==1) ? 'show active' : '';
        ?>
        <div class="tab-pane fade <?php echo $icon_class; ?>" id="<?php echo slugify($icon['title']) ?>" role="tabpanel" aria-labelledby="<?php echo slugify($icon['title']) ?>-tab">
             <!-- MAPA -->
            <div class="section skills">
                <div class="section_wrap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="skills__item">
                                    <?php foreach ($icon['icon'] as $item) { ?>
                                        <li>
                                            <img src="<?php echo $item['image']['url']; ?>" alt="">
                                            <?php echo $item['title']; ?>
                                        </li>
                                    <?php }  ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <?php $n++; } ?>
</div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <?php $n = 1; foreach ($icons as $icon) {
        $icon_class = ($n==1) ? 'active' : '';
        ?>
        <li class="nav-item" role="presentation">
            <button class="nav-link <?php echo $icon_class; ?>" id="<?php echo slugify($icon['title']) ?>-tab" data-toggle="tab" data-target="#<?php echo slugify($icon['title']) ?>" type="button" role="tab" aria-controls="<?php echo slugify($icon['title']) ?>" aria-selected="false"><?php echo $icon['title']; ?></button>
        </li>
  <?php $n++; } ?>
</ul>