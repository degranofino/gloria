<?php $icons = $icons[0]; ?>

<!-- MAPA -->
<div class="section skills">
	<div class="section_wrap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<ul class="skills__item">
						<?php foreach ($icons['icon'] as $item) { ?>
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
