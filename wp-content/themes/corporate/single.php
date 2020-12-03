<?php get_header(); ?>

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <!-- Posts
                ============================================= -->
                <div class="postcontent col-lg-9">

                    <div class="single-post mb-0">

                        <!-- Single Post
                        ============================================= -->
                        <div class="entry clearfix">

                            <!-- Entry Title
                            ============================================= -->
                            <div class="entry-title">
                                <h2><?php the_title(); ?></h2>
                            </div><!-- .entry-title end -->

                            <!-- Entry Meta
                            ============================================= -->
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> <?php the_time('jS F Y'); ?></li>
                                </ul>
                            </div><!-- .entry-meta end -->

                            <!-- Entry Image
                            ============================================= -->
                            <div class="entry-image">
                                <?php
                                $image = get_field('image_url');
                                //                                                    var_dump($image);
                                //                                                    exit();
                                ?>
                                <a href="#"><img src="<?php echo esc_url($image['url']); ?>"
                                                 alt="<?php echo esc_attr($image['title']); ?>"></a>
                            </div><!-- .entry-image end -->

                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content mt-0">
                                <?php the_content(); ?>
                                <!-- Post Single - Content End -->
                                <div class="clear"></div>
                            </div>
                        </div><!-- .entry end -->

                        <!-- Post Navigation
                        ============================================= -->
                        <div class="row justify-content-between col-mb-30 post-navigation">
                            <div class="col-12 col-md-auto text-center">
                                <a href="#">⇐ This is a Standard post with a Slider Gallery</a>
                            </div>

                            <div class="col-12 col-md-auto text-center">
                                <a href="#">This is an Embedded Audio Post ⇒</a>
                            </div>
                        </div><!-- .post-navigation end -->


                    </div>

                </div>

                <!-- Sidebar
============================================= -->
                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">
                        <div class="widget clearfix">
                            <h4><?php the_field('title'); ?></h4>
                            <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">

                                <?php while (have_rows('popular_post')):
                                    the_row();
                                    $image = get_sub_field('image_url');
//                                                        var_dump($image);
//                                                        exit();
                                    ?>
                                    <div class="entry col-12">
                                        <div class="grid-inner row no-gutters">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="<?php the_sub_field('image_link'); ?>"><img
                                                                class="rounded-circle"
                                                                src="<?php echo esc_url($image['url']); ?>"
                                                                alt="<?php echo esc_attr($image['title']); ?>"></a>
                                                </div>
                                            </div>
                                            <div class="col pl-3">
                                                <div class="entry-title">
                                                    <h4>
                                                        <a href="<?php the_sub_field('description_link'); ?>"><?php the_sub_field('description'); ?></a>
                                                    </h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <!--                                                    <li><i class="icon-comments-alt"></i> 35 Comments</li>-->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>

                        </div>

                    </div>
                </div><!-- .sidebar end -->

            </div>

        </div>
    </div>
</section><!-- #content end -->


<?php get_footer(); ?>
