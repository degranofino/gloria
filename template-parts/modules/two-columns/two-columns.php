<!-- INTRO -->
<div class="section intro">
	<div class="section_wrap">

		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-5">

					<!-- ANIMATION HEAD > number, section y title -->
					<div class="animated_head">

						<div class="animated_head__content">
							<div class="animated_head__content__top">
								<div class="module__section"><span><?php echo $content['section']; ?></span></div>
							</div>

							<div class="animated_head__title animated_letters"><?php echo $content['title']; ?></div>
							<a href="#" data-toggle="modal" data-target="#modalGallery" class="btn btn_white mt-4 d-none d-lg-inline-block">VER GALERÍA</a>
						</div>

					</div>

				</div>

				<div class="col-lg-5 offset-lg-2">
					<div class="normal__animation">
						<div class="intro__slogan"><?php echo $content['pre-content']; ?></div>
						<a href="#" data-toggle="modal" data-target="#modalGallery" class="btn btn_white mb-5 d-lg-none">VER GALERÍA</a>
						<div class="mb-4"><?php echo $content['content']; ?></div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>