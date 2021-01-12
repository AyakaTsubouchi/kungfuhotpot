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

               ));


               if ($gallery_post) {
                  foreach ($gallery_post as $post) :
                     setup_postdata($post);

               ?>

                     <a href="#" class="flex-box square"> <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                     </a>
                     <?php
                 do_shortcode('sc_form_post');
               
               ?>



               <?php
                  endforeach;
                  wp_reset_postdata();
               }
               ?>
            </div>
         </div>

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

               <div class="col-md-4 col-sm-12 location">
                  <h5 class="footer-title">OUR LOCATION</h5>
                  <div class="google-map">
                  <?php echo get_field("embed_googld_map", 533); ?>

                  </div>

               </div>
               <div class="col-md-4 col-sm-12 business-hours">
                  <h5 class="footer-title">OUR BUSINESS HOURS</h5>
                  <div class="opening-hours">
                     <p class="opening-hours-title"><i class="far fa-clock"></i>Opening Hours</p>
                     <?php echo do_shortcode('[mbhi_hours location="Vancouver"]'); ?>
                     <!-- <table class="opening-hours">



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
                     </table> -->
                  </div>
               </div>

         <?php
            endforeach;
            wp_reset_postdata();
         }
         ?>


      </div>



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