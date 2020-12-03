<div class="section dark mb-0"
     style="background: url('demos/interior-design/images/section/1.jpg') center 80%; background-size: cover; padding: 180px 0">
    <div class="container clearfix">
        <div class="mx-auto" style="max-width: 960px">
            <div class="row clearfix">
                <div class="col-12 col-md-4">
                    <?php $image=get_sub_field('image_url');
                    //                    var_dump($image);
                    //                    exit();
                    ?>

                    <figure>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['title']); ?>">
                    </figure>
                </div>
                <div class="col-12 col-md-7 offset-md-1">
                    <h2 class="ls2 font-weight-bold"><?php the_sub_field('title');?></h2>
                    <blockquote class="quote mb-0">
                        <p><?php the_sub_field('description');?></p>
                        <footer class="font-weight-bold"><?php the_sub_field('client_name');?></footer>
                    </blockquote>
                </div>
            </div>
        </div>

    </div>
    <div class="video-overlay" style="background: #1a2849; z-index: 1"></div>
</div>

