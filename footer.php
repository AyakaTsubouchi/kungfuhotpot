<footer class="site-footer">
   <div class="container">

      <div class="row">
         <div class="col-md-4  col-sm-12">
            <h5 class="footer-title">PHOTO GALLERY</h5>
            <div class="row photo-gallery">

               <?php
               global $post;

               $gallery_post = get_posts(array(
                  'post_type' => 'gallery',
                  'posts_per_page' => 100,
                  // 'img' => ''

               ));


               // $obj=array(
               //     'content' => $post->post_content,
               //     'title' => esc_html( get_the_title() ),
               //     'img' => esc_html(  get_the_post_thumbnail() ),
               // );

               if ($gallery_post) {
                  foreach ($gallery_post as $post) :
                     setup_postdata($post);

               ?>

                     <a href="#" class="flex-box get_button_more_info square" data-toggle="modal" data-target="#exampleModal" value='<?= json_encode($post) ?>'> <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                     </a>
                 

               <?php
                  endforeach;
                  wp_reset_postdata();
               }
               ?>
            </div>
         </div>
         <div class="col-md-4 col-sm-12 location">
            <h5 class="footer-title">OUR LOCATION</h5>
            <div class="google-map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3051.4768247673737!2d-88.2330548843003!3d40.10937608219787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880cd73f2696216b%3A0xe1b544e62f61f14e!2sKung%20Fu%20BBQ!5e0!3m2!1sen!2sca!4v1609804226267!5m2!1sen!2sca" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>

         </div>
         <div class="col-md-4 col-sm-12 business-hours">
            <h5 class="footer-title">OUR BUSINESS HOURS</h5>
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
         </div>
      </div>
      <!-- <?php wp_nav_menu(array('theme_location' => 'footer_menu1')); ?> -->


      <div class="copyright_txt">
         <p></p>
         <p>© 2016-<?php
                     echo date("Y")
                     ?> All rights reserved, Powered by <a href="https://www.goopter.com/">Goopter</a></p>

      </div>
</footer>

<!-- .site-footer -->
<?php wp_footer(); ?>

</div>

</body>

</html>