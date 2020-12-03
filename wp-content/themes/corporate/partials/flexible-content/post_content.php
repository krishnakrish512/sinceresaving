<div class="topmargin-lg bottommargin-lg">
    <div class="container">
        <div class="heading-block center border-bottom-0">
            <h2 class="ls2 font-weight-bold"><?php the_sub_field('title'); ?></h2>
            <span><?php the_sub_field('description'); ?></span>
        </div>
        <div class="grid-inner">
            <div class="row posts-md col-mb-30">
                <?php $condition = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => '3'
                );
                $query = new WP_Query($condition);
                if ($query->have_posts()) {
                    while ($query->have_posts()) :
                        $query->the_post(); ?>

                        <div class="entry col-md-4">
                            <div class="entry-image">
                                <?php if (has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>"><img
                                                src="<?php the_post_thumbnail_url('category-thumb'); ?>"
                                                alt="Image"></a>
                                <?php endif; ?>
                            </div>
                            <div class="entry-title title-sm nott">
                                <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> <?php the_time('jS F Y'); ?></li>
                                    <!--                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a>-->
                                    <!--                                    </li>-->
                                </ul>
                            </div>
                            <div class="entry-content">
                                <?php $Brief = get_field('brief');
                                ?>
                                <p> <?= $Brief; ?></p>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
    </div>
</div>


</div>
</section ><!-- #content end -->

