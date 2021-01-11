<?php
/*
Template name: Gallery
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

<section class="photo-gallery-section home">
    <div class="container">

        <div class="photo-gallery" id="gallery" data-toggle="modal" data-target="#exampleModal">

        <?php
            global $post;

            $gallery_post = get_posts(array(
                'post_type' => 'gallery',
                'posts_per_page' => 100,


            ));
            

            if ($gallery_post) {
                foreach ($gallery_post as $post) :
                    setup_postdata($post);
                    $obj=array(
                        'content' => $post->post_content,
                        'title' => esc_html( get_the_title() ),
                        'img' => get_the_post_thumbnail_url(),
                        'discription'=> get_the_title(),
                    );
                    

            ?>


                    <button href="#" class="flex-box get_button_more_info square img-wrapper" data-toggle="modal" data-target="#exampleModal" value='<?= json_encode($obj) ?>'> <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                    </button>


            <?php
                endforeach;
                wp_reset_postdata();
            }
            ?>

        </div>
    </div>

</section>

<?php include('inc/modal.php'); ?>

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