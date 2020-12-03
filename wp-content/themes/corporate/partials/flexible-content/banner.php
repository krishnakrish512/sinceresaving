<section id="slider" class="slider-element swiper_wrapper min-vh-75 min-vh-md-100" data-loop="true">

    <div class="slider-inner">



        <div class="swiper-container swiper-parent">



            <div class="swiper-wrapper">

                <?php while (have_rows('block')):

                    the_row();

                    $image = get_sub_field('image_url');

                    //                var_dump($image);

                    //                exit();

                    ?>

                    <div class="swiper-slide dark">

                        <div class="container">

                            <div class="slider-caption">

                                <h2 data-animate="fadeInUp" class="font-secondary"><?php the_sub_field('title'); ?></h2>

                                <p class="" data-animate="fadeInUp"

                                   data-delay="200"><?php the_sub_field('description'); ?></p>

                            </div>

                        </div>

                        <div class="swiper-slide-bg"

                             style="background-image: url('<?php echo $image ?>'); background-position: center top;"></div>



                    </div>

                <?php endwhile; ?>

            </div>



            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>

            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>

            <div class="slide-number">

                <div class="slide-number-current"></div>

                <span>/</span>

                <div class="slide-number-total"></div>

            </div>

        </div>



    </div>

</section>