<?php
/*
Template name: Home
*/
?>
<?php get_header(); ?>
<!-- <?php
		if (have_posts()) :

			while (have_posts()) : the_post();
				the_content();
			endwhile;

		else :
			_e('Sorry, no posts matched your criteria.', 'textdomain');

		endif;
		?> -->
<section class="top">

	<div class="parallax" style="z-index:-2;
	background-image:url(http://www.kungfuhotpot.us/wp-content/uploads/2020/05/22.jpg);
	background-repeat:no-repeat;
	background-position:center top;">


	</div>
	<div class="slide-inner centering">
		<div class="text-slider">
			<h2 class="main-title">Welcome to our restaurant !</h2>
			<p class="subtitle">
				Come and try our delicious cuisines! You won't regret it!
			</p>
		</div>
		<a href="#" class="btn slider-button">
			ONLINE ORDER!
		</a>

	</div>

</section>

<section class="slider">
	<div class="container my-container">


		<div class="row">
			<div class="col-md-7">

				<?php
				include('inc/slider.php');
				?>
			</div>
			<div class="col-md-5 text-container">
				<h3 class="title">Contact Us</h3>
				<address class="contact-card">
					<div class="name" itemprop="name">
						KUNGFU BBQ 功夫火锅 </div>
					<div class="address">
						510 E. John St., Champaign IL 61820 </div>

					<div class="directions">
						<a href="//maps.google.com/maps?saddr=current+location&amp;daddr=510+E.+John+St.%2C++Champaign+IL+61820" target="_blank"><i class="fas fa-map-marker-alt"></i>Get directions</a>
					</div>

					<div class="phone">
						<i class="fas fa-mobile-alt"></i>217-355-1888 </div>
					<div class="opening-hours">
						<p class="opening-hours-title"><i class="far fa-clock"></i>Opening Hours</p>
						<table class="opening-hours">
							<tbody>
								<tr>
									<th class="weekday-name weekday-monday">Monday</th>
									<td class="time">11:00 am – 9:00 pm</td>
								</tr>
								<tr>
									<th class="weekday-name weekday-monday">Tuesday</th>
									<td class="time">11:00 am – 9:00 pm</td>
								</tr>
								<tr>
									<th class="weekday-name weekday-monday">Wednesday</th>
									<td class="time">11:00 am – 9:00 pm</td>
								</tr>
								<tr>
									<th class="weekday-name weekday-monday">Thursday</th>
									<td class="time">11:00 am – 9:00 pm</td>
								</tr>
								<tr>
									<th class="weekday-name weekday-monday">Friday</th>
									<td class="time">11:00 am – 9:00 pm</td>
								</tr>
								<tr>
									<th class="weekday-name weekday-monday">Saturday</th>
									<td class="time">11:00 am – 9:00 pm</td>
								</tr>
								<tr>
									<th class="weekday-name weekday-monday">Sunday</th>
									<td class="time">Closed</td>
								</tr>
							</tbody>
						</table>
					</div>

				</address>

			</div>

		</div>
	</div>
	</div>
</section>
<a href="#">
	<div class="back-to-top">
		<i class="fa fa-angle-up"></i>
	</div>
</a>


<?php get_footer(); ?>