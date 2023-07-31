<?php /* Template Name: Home */ ?>
<?php get_header();
?>

<section class="banner-section" id="contact">
    <?php getImage(get_field('banner_background_image'), 'full-image bg'); ?>
    <div class="container" id="schedule">

        <div class="row">
            <div class="col-sm-12 col-lg-7">
                <div class="content-wrapper">
                    <?php the_field('banner_content'); ?>
                </div>
            </div>
            <?php if ($formID = get_field('banner_form')) : ?>
                <div class="col-sm-12 col-lg-5 col">
                <div class="content-wrapper">
                    <?php the_field('banner_form_title'); ?>
                </div>
                    <div class="contact-form">
                        <?php echo do_shortcode('[forminator_form id="' . $formID . '"]'); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="back-img">
    <?php getImage(get_field('banner_image_')); ?>
    </div> 
</section>

<!-- about us section -->

<?php if (get_field('about_content')) : ?>
    <section class="about-section" id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <a data-fancybox data-width="640" data-height="360" href= http://download.blender.org/peach/bigbuckbunny_movies/BigBuckBunny_320x180.mp4 >
 
                    <div class="about-vimage">
                            <?php getImage(get_field('about_image')); ?>
                        </div>
                    </a>
                    
                    
                </div>
                
                
                <div class="col-lg-6">
                    <div class="content-wrapper"><?php the_field('about_content'); ?></div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- package section -->

<?php if (have_rows('packages')) : ?>
    <section class="steps-section" id="our-prices">
    <?php getImage(get_field('package_background'),'full-image bg'); ?>
        <div class="container">
            <?php if (get_field('packages_title')) : ?>
                <div class="content-wrapper"><?php the_field('packages_title'); ?></div>
            <?php endif; ?>

            <div class="grid-container"> 
                <?php while (have_rows('packages')) : the_row(); ?>                       
                    <div class="box_content">
                        <?php the_sub_field('step_content'); ?>
                    </div>                     
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('contact_content')) : ?>
    <section class="schedule-section">
        <?php getImage(get_field('contact_background_image'), 'full-image'); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-7"></div>
                <div class="col-lg-5">
                    <div class="content-wrapper">
                        <?php the_field('contact_content'); ?>
                        <?php if (get_field('contact_button_text')) : ?>
                            <a href="#footer" class="theme-btn">
                                <?php the_field('contact_button_text'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (have_rows('testimonials')) : ?>
    <section class="testimonials-section" id="what-they-say">
    <?php getImage(get_field('background_image_testimonial'), 'full-image'); ?>

        <div class="container">
            <?php if (get_field('testimonials_title')) : ?>
                <div class="content-wrapper"><?php the_field('testimonials_title'); ?></div>
            <?php endif; ?>

            <div class="galary-wrapper">
            <?php while (have_rows('testimonial_gallery')) : the_row(); ?>
                <div class="galary-image">                                      
                    <?php getImage(get_sub_field('images_gallery')); ?>                                               
                </div>
            <?php endwhile; ?>
            </div>

            <div class="swiper" id="testimonialsSwiper">
                <div class="swiper-wrapper">
                    <?php while (have_rows('testimonials')) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="card-stars">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="item">
                                <div><?php the_sub_field('swiper_content'); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


    <section class="areas-section">
        <div class="container">
            <?php if (get_field('areas_title')) : ?>
                <div class="content-wrapper"><?php the_field('areas_title'); ?></div>
            <?php endif; ?>


            <div class="faq-para">
            <?php while (have_rows('faq_areas')) : the_row(); ?>
                <div class="drop-questons">
                    <h6><?php the_sub_field('question'); ?><i class="fa fa-plus" aria-hidden="true"></i></h6>
                    <a href="#" class="faq-hover"></a>
                </div>  
                <div class="drop-answers">
                    <?php the_sub_field('answer'); ?>
                </div>                     
            <?php endwhile; ?> 
        </div>
    </section>


<?php get_footer(); ?>