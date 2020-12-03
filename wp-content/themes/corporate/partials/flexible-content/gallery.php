<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="masonry-thumbs grid-container grid-5" data-big="1" data-lightbox="gallery">
                <?php $images = get_sub_field('gallery_repeater');
//                                var_dump($images);
//                                exit();
                foreach ($images as $image):
                ?>
                <a class="grid-item" href="<?= $image['url'] ?>" data-lightbox="gallery-item"><img
                            src="<?= $image['url'] ?>" alt="Gallery Thumb 1">
                </a>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section><!-- #content end -->

<script>
    $(document).ready(function () {
        $(".d-readmore").dReadmore({
            beforeToggle: function ($element, expanded) {
                if (!expanded) {
                    //console.log("true")
                }
            },
            afterToggle: function ($element, expanded) {
                if (expanded) {
                    //console.log("true")
                }
            }
        });
    })
 </script>
