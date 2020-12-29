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
<section>

	<div class="parallax" style="z-index:-2;
	background-image:url(http://www.kungfuhotpot.us/wp-content/uploads/2020/05/22.jpg);
	background-repeat:no-repeat;
	background-position:center top;">


	</div>
</section>
<section style="height:100vh;">
	<div class="row">
		<div class="col-md-9">

			<?php
			include('inc/slider.php');
			?>
		</div>
		<div class=" col-md-3">
			hohohohoo
		</div>

	</div>
	</div>
</section>

<div class="back-to-top" style="position:fixed; bottom:50px; right:50px">
	<a href="#">TOP</a>
</div>


<?php get_footer(); ?>