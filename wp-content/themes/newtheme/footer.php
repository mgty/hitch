<?php wp_footer();?>

<div class="wide-container container">
	<div class="footer-bg row">

		<div class="d-flex justify-content-center col-sm-12 col-md-6 col-lg-6">
			<div class="row">
				<div class="content-row">
					<a href="https://www.advancedcustomfields.com/resources/">
						<img 
						id="footer-logo" 
						role="banner" 
						src="<?php echo get_field('logo_image')['url'];?>">
					</a>
				</div>

				<div class="content-row">
					<p id="footer-copyright">Copyright 2020. All Right Reserved.</p>
				</div>
			</div>
		</div>


		<div class="d-flex justify-content-center col-sm-12 col-md-6 col-lg-6">
			<a href="https://www.advancedcustomfields.com/resources/">
				<img 
				class="social-icon" 
				role="banner" 
				src="<?php echo get_field('facebook_social_media')['url'];?>"	
				>
			</a>

			<a href="https://www.advancedcustomfields.com/resources/">
				<img 
				class="social-icon" 
				role="banner" 
				src="<?php echo get_field('pinterest_social_media')['url'];?>"	
				>
			</a>

			<a href="https://www.advancedcustomfields.com/resources/">
				<img 
				class="social-icon" 
				role="banner" 
				src="<?php echo get_field('instagram_social_media')['url'];?>"	
				>
			</a>

		</div>
	</div>
</div>

</body>
</html>