<div class="container topmargin-lg bottommargin-lg clearfix">

    <div class="mx-auto" style="max-width: 960px">
        <div class="heading-block center border-bottom-0">
            <h2 class="ls2 font-weight-bold"><?php the_sub_field('title'); ?></h2>
            <?php the_sub_field('description'); ?>
        </div>
        <div class="tabs tabs-alt tabs-responsive tabs-justify clearfix" id="tab">

            <ul class="tab-nav clearfix">

                <?php while (have_rows('schemes_type')):
                    the_row(); ?>
                    <li><a href="<?php the_sub_field('tabs'); ?>"><i
                                    class="<?php the_sub_field('icons'); ?>"></i><?php the_sub_field('title'); ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>

            <div class="tab-container">
                <?php $count = 1; ?>
                <?php while (have_rows('schemes_details')):
                    the_row();
                    $image = get_sub_field('image_url');
//                    var_dump($image);
//                    exit();
                    ?>
                    <div class="tab-content clearfix" id="tabs-<?php echo $count ?>">
                        <div class="story-box description-left clearfix">
                            <div class="story-box-image">
                                <img src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['title']); ?>">
                            </div>
                            <div class="story-box-info">
                                <h3 class="story-title"><?php the_sub_field('title'); ?></h3>
                                <div class="story-box-content">
                                    <p><?php the_sub_field('description'); ?></p>
<!--                                    <button class="font-weight-light button ml-0 button-rounded">Read More-->
<!--                                    </button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $count++; endwhile; ?>

            </div>

        </div>
    </div>

</div>

