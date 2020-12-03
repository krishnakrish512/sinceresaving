<?php get_header(); ?>


<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts" class="post-grid row grid-container gutter-50">
                <?php while (have_posts()):
                    the_post();
                    ?>
                    <div class="entry col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <a href="<?php the_permalink(); ?>"><img
                                            src="<?php the_post_thumbnail_url('category-thumb'); ?>"
                                            alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i><?php the_time('jS F Y'); ?></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <?php $Brief = get_field('brief');
                                ?>
                                <p><?= $Brief; ?></p>
                                <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div><!-- #posts end -->

        </div>
    </div>
</section><!-- #content end -->


<?php get_footer(); ?>
