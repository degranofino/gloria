	</div>

	<footer id="footer">
		<div class="footer_left">	
			<ul class="menu_footer">
				<li><a href="<?php echo get_permalink(3); ?>"><?php _e('Política de privacidad','west_beach'); ?> </a></li>
				<li><a href="<?php echo get_permalink(13); ?>"><?php _e('Política de Cookies','west_beach'); ?></a></li> 
				<li><a href="<?php echo get_permalink(12); ?>"><?php _e('Aviso Legal','west_beach'); ?></a></li>
			</ul>	
		</div>
		<div class="footer_right mt-3 mt-md-0 md-ml-5">
			<a href="https://weplan.global/" target="_blank">
				Marketing & Design,
				<img src="<?php bloginfo( 'template_url' ); ?>/img/logo_weplan.svg" alt="" class="ml-2">
			</a>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>