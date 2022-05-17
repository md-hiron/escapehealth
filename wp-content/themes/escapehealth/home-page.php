<?php

/*
 * Template Name: Home
*/

get_header(); ?>
  <section class="hero-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="hero-content">
                    <h1><?php echo get_field('hero_left_title'); ?></h1>
                    <a href="#" class="upload-popup">Upload a Story <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="hero-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-star.png" alt="" class="img-fluid star-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-star2.png" alt="" class="img-fluid star-img2">
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-vactor.png" alt="" class="img-fluid video-vactor">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-wave.png" alt="" class="img-fluid video-wave">
                    <a href="https://www.youtube.com/watch?v=XyR1gm6OYMk" class="d-block popup-youtube"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/frame.png" alt="" class="img-fluid frame-img"></a>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>