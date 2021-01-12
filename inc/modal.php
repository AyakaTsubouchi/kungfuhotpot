<script>

    
   </script>
<section class="gallery-modal">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body my-modal-body">
                    <div id="carouselExample" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner" role="listbox">

                            <div id="first-item" class="carousel-item carousel_one active">
                                <!-- the image url comes from gallery.php -->
                                <img id="modal-image" alt="nice dishes">
                                <p id="discription"></p>
                                <p id="postid"></p>

                            </div>

                            <?php
                            global $post;
                            $offset = 2;
                            $gallery_post = get_posts(array(
                                'post_type' => 'gallery',
                                'posts_per_page' => 9,
                                // 'offset' => $offset,
                                'exclude' =>   $obj.post_id

                            ));

                            if ($gallery_post) {
                                foreach ($gallery_post as $post) :
                                    setup_postdata($post);

                            ?>
                                    <div class="carousel-item carousel_one">
                                        <img class="" src='<?php echo get_the_post_thumbnail_url(); ?>' alt="nice dishes">
                                        <p><?php echo get_the_title(); ?></p>
                                        <p><?php echo $offset; ?></p>
                                     
                                    </div>
                            <?php
                                endforeach;
                                wp_reset_postdata();
                            }
                            ?>
                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
