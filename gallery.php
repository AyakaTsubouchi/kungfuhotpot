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

        <div class="photo-gallery" id="gallery" data-toggle="modal" data-target="#exampleModal">

            <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/30.jpg" alt="First slide" data-target="#carouselExample" data-slide-to="0">
                </div>
            </div>
            <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/32.png" alt="First slide" data-target="#carouselExample" data-slide-to="1">
                </div>
            </div>

            <!-- data-slike-to=2 doesn't work properly -->
            <!-- <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/33.png" alt="First slide" data-target="#carouselExample" data-slide-to="2">
                </div>
            </div> -->

            <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/33.png" alt="First slide" data-target="#carouselExample" data-slide-to="3">
                </div>
            </div>
            <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/35.png" alt="First slide" data-target="#carouselExample" data-slide-to="4">
                </div>
            </div>
            <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/36.png" alt="First slide" data-target="#carouselExample" data-slide-to="5">
                </div>
            </div>
            <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/45.png" alt="First slide" data-target="#carouselExample" data-slide-to="6">
                </div>
            </div>
            <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/34.png" alt="First slide" data-target="#carouselExample" data-slide-to="7">
                </div>
            </div>
            <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/47.png" alt="First slide" data-target="#carouselExample" data-slide-to="8">
                </div>
            </div>
            <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/31.png" alt="First slide" data-target="#carouselExample" data-slide-to="9">
                </div>
            </div>
            <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/42.png" alt="First slide" data-target="#carouselExample" data-slide-to="10">
                </div>
            </div>
            <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/41.png" alt="First slide" data-target="#carouselExample" data-slide-to="11">
                </div>
            </div>
            <div class="square">
                <div class="img-wrapper">
                    <img src="http://www.kungfuhotpot.us/wp-content/uploads/photo-gallery/37.png" alt="First slide" data-target="#carouselExample" data-slide-to="12">
                </div>
            </div>

        </div>
    </div>

</section>

<?php include('inc/modal.php'); ?>

<a href="#">
    <div class="back-to-top">
        <i class="fa fa-angle-up"></i>
    </div>
</a>

<?php get_footer(); ?>