</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="download-container">
                <h3 class="text-center"><?php the_sub_field('title');?></h3>
                <ul class="download-list list-unstyled mb-0 list-group">
                    <?php while (have_rows('download_repeater')):
                        the_row(); ?>
                        <li class="list-group-item">
                            <h5 class="mb-0"><?php the_sub_field('file_name');?></h5>
                            <a href="<?php the_sub_field('file_url');?>"  class="font-weight-light button ml-0 button-rounded button-small" target="_blank" >Download <i
                                           class="icon-line-download ml-2"></i></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>

        </div>
    </div>
</section><!-- #content end -->

