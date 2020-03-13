<?php 

//Use for testing only
// echo '<pre>';
// 	print_r(get_field('background_image'));
// echo '</pre>';
// die();

get_header();?>

<div class="full-width-img front-hero container" 
	role="banner" 
	style="background-image: url('<?php echo get_field('background_image')['url'];?>')">

		<div>
			<h1 class="hero-text"><?php the_field('title');?></h1>
			<!--<p><?php the_field('subtitle_1');?></p>
				<?php
					$button = get_field('button');
				?>
				<a 
				role="button" class="button"
				href="<?php echo $button['url']; ?>"
				target="<?php echo $button['target'];?>" >
				
				<?php echo $button['title'];?>

				</a> -->
		</div>
			<!-- <h1><?php the_title();?></h1>

				-<?php if (have_posts()) : while(have_posts()) : the_post();?>

					<?php the_content();?>

			<?php endwhile; endif;?> -->
</div>


<div id="description" class="section-container container">
	<div class="row">
		<div class="desc-section-left section-col col-sm-12 col-md-6 col-lg-6">
			<h1 class="section-title"><?php the_field('subtitle_1');?></h1>
			<p class="section-text"><?php the_field('main_description');?></p>
		</div>

		<div class="desc-section-right section-col col-sm-12 col-md-6 col-lg-6">
			<div class="section-img" 
				role="banner" 
				style="background-image: url('<?php echo get_field('section_image_1')['url'];?>')">	
			</div>
				
			<div class="row">
				<div class="overlap-img1 col-sm-6 col-md-6 col-lg-6" 
					role="banner" 
					style="background-image: url('<?php echo get_field('overlap_image_1')['url'];?>')">
				</div>
					
				<div class="overlap-img2 col-sm-6 col-md-6 col-lg-6" 
					role="banner" 
					style="background-image: url('<?php echo get_field('overlap_image_2')['url'];?>')"
					>
				</div>
			</div>

		</div>

	</div>
</div>


 <!-- <div class="extended-container section-container container">
	<div class="row">
		<div class="overlap-col1 col-sm-12 col-md-4 col-lg-4">
			<div class=" quote-img" 
				role="banner" 
				style="background-image: url('<?php echo get_field('quote_image_1')['url'];?>')"
				>	
			</div>
		</div>

		<div class="overlap-col2 col-sm-12 col-md-8 col-lg-8">
			
			<p class="vertical section-text-colored"><?php the_field('quote');?></p>
		</div>
	</div>
</div>
 -->

<div id="testimonial" class="extended-container section-container container">
	<div class="extended-container quote-bg-img" 
		role="banner" 
		style="background-image: url('<?php echo get_field('quote_image_1')['url'];?>')"> 
		<div class="row">
			<div class="col-sm-12 col-md-4 col-lg-4"></div>

			<div class="col-sm-12 col-md-8 col-lg-8">
				<div class="vertical section-text-colored">
					<h6>
						<span class="quote-mark">"</span>
						<?php the_field('quote');?>	
					</h6>
					<p class="author-light-text"><?php the_field('testimonial_author');?></p>
				</div> 
			</div> 
		</div>
	</div>
</div>



<div class="section-container container">
	<div class="row">
		<div class="section-col col-sm-12 col-md-4 col-lg-4">
			<h2 class="section-title"><?php the_field('subtitle_1');?></h2>
			<p class="section-text"><?php the_field('quote');?></p>
		</div>

		<div class="section-col col-sm-12 col-md-4 col-lg-4">
			<h2 class="section-title"><?php the_field('subtitle_1');?></h2>
			<p class="section-text"><?php the_field('quote');?></p>
		</div>

		<div class="section-col col-sm-12 col-md-4 col-lg-4">
			<h2 class="section-title"><?php the_field('subtitle_1');?></h2>
			<p class="section-text"><?php the_field('quote');?></p>
		</div>
	</div>
</div>




<div class="destination-container section-container container">
	<div class="colored-bg row">
		<div class="col-img-center col-sm-12 col-md-12 col-lg-4">
			<img 
			class="dest-img" 
			role="banner" 
			src="<?php echo get_field('destination_image_left')['url'];?>"	
			>
		</div>

		<div class="col-img-center col-sm-12 col-md-12 col-lg-4">
			<div class="row">
				<div class="col">
					<img 
						class="dest-img-center dest-top" 
						role="banner" 
						src="<?php echo get_field('destination_image_top')['url'];?>">
				</div>
			</div>

			<div class="row">
				<div class="col">
					<img 
						class="dest-img-center dest-bottom" 
						role="banner" 
						src="<?php echo get_field('destination_image_bottom')['url'];?>">
				</div>
			</div>
				
		</div>

		<div class="col-img-center col-sm-12 col-md-12 col-lg-4">
			<img 
			class="dest-img" 
			role="banner" 
			src="<?php echo get_field('destination_image_right')['url'];?>"	
			>
		</div>
	</div>
</div>


<div id="trip-features" class="section-container container">
	<div class="row"> 
		<div class="section-col col-sm-12 col-md-4 col-lg-4">
			<h2 class="section-title"><?php the_field('subtitle_1');?></h2>
			<p class="section-text"><?php the_field('quote_2');?></p>
		</div>	

		<div class="trip-feature-col section-col col-sm-12 col-md-4 col-lg-4">
			<p class="section-text"><?php the_field('trip_features_left');?></p>
		</div>	

		<div class="trip-feature-col section-col col-sm-12 col-md-4 col-lg-4">
			<p class="section-text"><?php the_field('trip_features_right');?></p>
		</div>	
	</div>
</div>

<div class="quote-container section-container container">
	<div class="full-width-img" 
		role="banner" 
		style="background-image: url('<?php echo get_field('quote_image_2')['url'];?>')"> 
		<div class="row">
			<div class="section-col col-sm-12 col-md-4 col-lg-4">
			</div>

			<div class="white-bg section-col col-sm-12 col-md-8 col-lg-8">
				<div class="white-quote-bg">
					<h6>
						<span class="quote-mark">"</span>
						<?php the_field('quote_2');?>
					</h6>
					<p class="author-light-text"><?php the_field('testimonial_author');?></p>
				</div>
			</div> 
		</div>
	</div>
</div>


<div class="section-container container">
	<div class="dark-bg row">

		<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="newsletter-img" 
				role="banner" 
				style="background-image: url('<?php echo get_field('newsletter_image')['url'];?>')"> 
			</div>
		</div>

		<div class="dark-bg-col col-sm-12 col-md-6 col-lg-6">
			<p class="newsletter-title"><?php the_field('newsletter_title');?></p>
			<p class="newsletter-text"><?php the_field('newsletter_text');?></p><br><br>
			<form class="form-text">
				<!-- Setup MailChimp -->
			  <label for="email">Email:</label>
			  <input type="text" id="email" name="email" value=""><br>
			</form>
		</div>

	</div>
</div>

<?php get_footer();?>