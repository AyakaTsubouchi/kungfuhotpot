<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="robots" content="noindex,nofollow">
   <meta name="description" content="">
   <meta name="keywords" content="HTML,CSS,JavaScript">
   <meta name="author" content="">

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <div class="overflow">
      <header class="sticky header1 first-header">
         <div class="row">

            <div class="col-md-3 col-sm-12">
               <div class="logo-wrapper">
                  <!-- TODO change the link -->

                  <?php
                  $custom_logo_id = get_theme_mod('custom_logo');
                  $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                  if (has_custom_logo()) {
                     echo '<a class="logo" href="http://localhost:8888/" 
        style="background-image:url( ' . esc_url($logo[0]) . ')"></a>';
                  } else {
                     echo '<h1>' . get_bloginfo('name') . '</h1>';
                  }
                  ?>
                  <!-- <a class="logo" href="http://localhost:8888/" style="background-image:url( 'http://www.kungfuhotpot.us/wp-content/uploads/2020/05/14.jpeg')"></a> -->

               </div>
            </div>
            <div class="col-md-9 col-sm-12 no-padding-on-mobile">
               <nav class="navbar navbar-expand-lg nav-toggler-right no-padding-on-mobile">
                  <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="fas fa-bars"></i>
                  </button>
                  <?php
                  wp_nav_menu(array(
                     'theme_location'  => 'primary_menu',
                     'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                     'container'       => 'div',
                     'container_class' => 'collapse navbar-collapse nav-contents',
                     'container_id'    => 'navbarNavAltMarkup',
                     'menu_class'      => 'navbar-nav',
                     'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                     'walker'          => new WP_Bootstrap_Navwalker(),
                  ));
                  ?>
               </nav>
            </div>


         </div>
      </header>