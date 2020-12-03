<!-- Content

  ============================================= -->

<section id="content">

    <div class="content-wrap pt-0 clearfix">



        <div class="section mt-0 clearfix" style="padding: 80px 0">

            <div class="container clearfix">



                <div class="mx-auto" style="max-width: 960px">

                    <div class="row clearfix">

                        <div class="col-12 col-md-4 center customers-count">

                            <div class="counter center counter-large font-primary"><span data-from="100"

                                                                                         data-to="<?php the_sub_field('data_to'); ?>"

                                                                                         data-refresh-interval="100"

                                                                                         data-speed="2000"

                                                                                         data-comma="true"></span>

                            </div>

                            <p><?php the_sub_field('title');?></p>

                        </div>

                        <div class="col-12 col-md-7 offset-md-1">

                            <blockquote class="quote mb-0 text-center text-md-left">

                                <p><?php the_sub_field('description');?></p>

                                <footer class="color"><?php the_sub_field('author_name');?></footer>

                            </blockquote>

                        </div>

                    </div>

                </div>



            </div>

        </div>

