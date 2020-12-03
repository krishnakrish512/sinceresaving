<div class="heading-block center">
    <h2><?php the_sub_field('features_title'); ?></h2>
</div>
<div class="row justify-content-center col-mb-50">
    <?php while (have_rows('features_block')):
        the_row(); ?>
        <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-center fbox-plain">
                <div class="fbox-icon">
                    <i class="<?php the_sub_field('icons');?>"></i>
                </div>
                <div class="fbox-content">
                    <h3 class="ls0 font-weight-normal nott" style="font-size: 20px;"><?php the_sub_field('title');?></h3>
                    <p style="font-size: 16px;"><?php the_sub_field('description');?></p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>

</div>
</div>
</section><!-- #content end -->

