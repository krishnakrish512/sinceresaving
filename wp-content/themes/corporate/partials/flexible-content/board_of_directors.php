<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="member-block">
                <div class="heading-block center border-bottom-0">
                    <h2 class="ls2 font-weight-bold"><?php the_sub_field('title'); ?></h2>
                </div>
                <div class="row mb-0 justify-content-center">
                    <?php while (have_rows('directors_details')):
                        the_row();
                        $image = get_sub_field('image_url');
//                    var_dump($image);
//                    exit();
                        ?>
                        <div class="col-lg-2 col-md-6">
                            <div class="team">
                                <div class="team-image">
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                         alt="<?php echo esc_attr($image['title']); ?>">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title"><h4><?php the_sub_field('directors_name'); ?></h4>
                                        <span><?php the_sub_field('directors_post'); ?></span></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>


