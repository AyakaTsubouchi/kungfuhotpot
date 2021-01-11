<?php
/*
Template name: Home
*/
?>
<?php get_header(); ?>

<?php
if (have_posts()) :

	while (have_posts()) : the_post();
?>
		<section class="top">
			<?php
			$image = get_field('hero_image');
			if (!empty($image)) : ?>

				<div class="parallax" style="z-index:-2;
	background-image:url(<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>);
	background-repeat:no-repeat;
	background-position:center top;">
				<?php endif; ?>

				</div>
				<div class="slide-inner centering">
					<div class="text-slider">
						<h2 class="main-title"><?php echo get_field('main_title'); ?></h2>
						<p class="subtitle">
							<?php echo get_field('sub_title'); ?>
						</p>
					</div>
					<a href="<?php echo get_field('button_link'); ?>" class="btn slider-button" target="_blank">
						<?php echo get_field('button_name'); ?>
					</a>

				</div>

		</section>


		<section class="slider">
			<div class="container my-container">


				<div class="row">
					<div class="col-md-8">

						<?php
						include('inc/slider.php');
						?>
					</div>
					<div class="col-md-4 text-container">
						<?php
						global $post;

						$businessInfo_post = get_posts(array(
							'post_type' => 'businessInfo',
							'posts_per_page' => 1,


						));


						if ($businessInfo_post) {
							foreach ($businessInfo_post as $post) :
								setup_postdata($post);

						?>
								<h3 class="title">Contact Us</h3>
								<address class="contact-card">
									<div class="name" itemprop="name">
										<?php echo get_field("name", 533); ?></div>
									<div class="address">
										<?php echo get_field("address", 533); ?></div>

									<div class="directions">
										<a href="<?php echo get_field("google_map_link", 533); ?>" target="_blank"><i class="fas fa-map-marker-alt"></i>Get directions</a>
									</div>

									<div class="phone">
										<i class="fas fa-mobile-alt"></i><?php echo get_field("phone", 533); ?>
									</div>
									<div class="opening-hours">
										<p class="opening-hours-title"><i class="far fa-clock"></i>Opening Hours</p>
										<?php echo do_shortcode('[mbhi_hours location="Vancouver"]'); ?>

									</div>

								</address>

					</div>

				</div>
			</div>

	<?php
							endforeach;
							wp_reset_postdata();
						}
	?>
	</div>
		</section>
		<a href="#">
			<div class="back-to-top">
				<i class="fa fa-angle-up"></i>
			</div>
		</a>

<?php
	endwhile;

else :
	_e('Sorry, no posts matched your criteria.', 'textdomain');

endif;

?>


<?php get_footer(); ?>