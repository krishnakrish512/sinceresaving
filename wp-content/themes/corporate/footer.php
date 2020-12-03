<!-- Footer

		============================================= -->

<footer id="footer" class="border-0" style="background-color: #F5F5F5;">

    <div class="container clearfix">



        <!-- Footer Widgets

        ============================================= -->

        <div class="footer-widgets-wrap">

            <?php $contact = get_field('contact', 'option'); ?>

            <div class="row col-mb-50">

                <div class="col-12">

                    <div class="widget clearfix text-center">

                        <div class="font-weight-normal text-lowercase mb-3 d-none" style="font-size: 36px; letter-spacing: -1px">

                            <img src="<?= $contact['footer_logo'] ?>" alt="" width="250">

                        </div>

                        <ul class="list-unstyled mb-0">

                        	<li class="mb-1">
									<h1 class="mb-0"><a href="<?= $contact['title_url'] ?>" class="h4 font-weight-bold" style="color: #8b0304;"><?= $contact['footer_title'] ?></a></h1>
								</li>

                            <li class="mb-1">

                                <strong class="d-none">Address :</strong>

                                <span><?= $contact['address'] ?></span>

                            </li>

                            <li class="mb-1">

                                <strong class="d-none">Phone :</strong>

                                <a href="tel:+977-01-4229538"> <span><?= $contact['phone_number'] ?></span></a>/
                                <a href="tel:+977-01-4229539"> <span><?= $contact['number_1'] ?></span></a>/
                                <a href="tel:+977-01-4229540"> <span><?= $contact['number_2'] ?></span></a>

                            </li>

                            <li class="mb-1">

                                <strong class="d-none">Email :</strong>

                                <a href="mailto:sincere.scc@gmail.com"><span><?= $contact['email'] ?></span></a>

                            </li>

                        </ul>



                    </div>

                </div>

            </div>



        </div><!-- .footer-widgets-wrap end -->



    </div>



    <div class="line m-0"></div>



    <!-- Copyrights

    ============================================= -->

    <div id="copyrights" style="background-color: #FFF">

        <div class="container clearfix">



            <div class="w-100 m-0 d-md-flex justify-content-between align-items-center text-center">

                <span>Copyrights &copy; <?php echo date('Y'); ?> All Rights Reserved by sincere.</span>
                <span>Developed By <a href="https://nirvan.studio/" target="_blank">Nirvan Studio</a></span>

            </div>



        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->



</div><!-- #wrapper end -->



<!-- Go To Top

============================================= -->

<div id="gotoTop" class="icon-angle-up rounded-circle"></div>

<?php wp_footer(); ?>



</body>

</html>





