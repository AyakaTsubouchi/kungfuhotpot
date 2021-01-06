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

<section class="photo-gallery-section home">
    <div class="container">

        <div class="row photo-gallery">

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


                    <button href="#" class="flex-box get_button_more_info square" data-toggle="modal" data-target="#exampleModal" value='<?= json_encode($obj) ?>'> <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                    </button>


            <?php
                endforeach;
                wp_reset_postdata();
            }
            ?>

        </div>
    </div>

</section>
<?php include('inc/modal-test.php'); ?>
<!-- <?php include('inc/modal.php'); ?> -->


<a href="#">
    <div class="back-to-top">
        <i class="fa fa-angle-up"></i>
    </div>
</a>

<?php get_footer(); ?>