<?php
/*
Template name: Contact
*/
?>
<?php get_header(); ?>
<?php
if (have_posts()) :

	while (have_posts()) : the_post();
?>

<section class="header-banner">
	<div style="background-image:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover;
  background-repeat: no-repeat;
  background-position: center top;
  height: 300px;">

	</div>
</section>


<section class="contact-section">
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
			<div class="container my-container">


				<div class="row">
					<div class="col-md-7">
						<div class="google-map">
							<?php echo get_field("embed_googld_map", 533); ?>

						</div>
					</div>

					<div class="col-md-5 text-container">
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
								<i class="fas fa-mobile-alt"></i><?php echo get_field("phone", 533); ?> </div>
							<div class="opening-hours">
								<p class="opening-hours-title"><i class="far fa-clock"></i>Opening Hours</p>
								<?php echo do_shortcode('[mbhi_hours location="Vancouver"]'); ?>
								
							</div>

						</address>

					</div>

				</div>
			</div>
			</div>
	<?php
		endforeach;
		wp_reset_postdata();
	}
	?>
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