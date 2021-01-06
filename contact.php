<?php
/*
Template name: Gallery
*/
?>
<?php get_header(); ?>
<section class="header-banner">
    <div style="background-image:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(http://www.kungfuhotpot.us/wp-content/uploads/2020/05/22.jpg); background-size: cover;
  background-repeat: no-repeat;
  background-position: center top;
  height: 300px;">

    </div>
</section>

<!-- <?php
        if (have_posts()) :

            while (have_posts()) : the_post();
                the_content();
            endwhile;

        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');

        endif;
        ?> -->
<section class="contact-section">
	<div class="container my-container">


		<div class="row">
			<div class="col-md-7">

            <div class="google-map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3051.4768247673737!2d-88.2330548843003!3d40.10937608219787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880cd73f2696216b%3A0xe1b544e62f61f14e!2sKung%20Fu%20BBQ!5e0!3m2!1sen!2sca!4v1609804226267!5m2!1sen!2sca" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
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