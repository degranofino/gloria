<!-- CONTACTO -->
<div class="section contacto" id="contacto">
	<div class="section_wrap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-xl-5">
					<!-- ANIMATION HEAD > number, section y title -->
					<div class="animated_head">
						<div class="animated_head__content">
							<div class="animated_head__content__top">
								<div class="module__section"><span><?php echo $content['section']; ?></span></div>
							</div>
							<div class="animated_head__title animated_letters"><?php echo $content['title']; ?></div>
							<div class="animated_head__slogan"><?php echo $content['subtitle']; ?></div>
							<div class="normal__animation">
								<p class="h5 mt-5 pt-3">Managed by</p>
								<a href="https://asg-homes.com/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/ASG_logo.svg" alt=""></a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-lg-6 col-xl-7">
					<div class="normal__animation2 pt-5 mt-5">
						<?php echo do_shortcode('[contact-form-7 id="6" title="Formulario de contacto 1"]') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>