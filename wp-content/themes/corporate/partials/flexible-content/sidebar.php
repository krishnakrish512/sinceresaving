<!-- Sidebar
                    ============================================= -->
<div class="sidebar col-lg-3">
    <?php $contact = get_field('contact', 'option'); ?>
    <!--    --><?php //$social = get_field('social', 'option'); ?>

    <address>
        <?= $contact['head_address'] ?>
    </address>
    <?php if ($contact['head_number']) { ?>
        <abbr title="Phone Number"> <strong>Phone:</strong></abbr>
        <a href="tel:+977-01-4229538"><?= $contact['head_number'] ?></a>/
        <a href="tel:+977-01-4229539"><?= $contact['number_1'] ?></a>/
        <a href="tel:+977-01-4229540"><?= $contact['number_2'] ?></a><br>
    <?php } ?>
    <abbr title="Email Address"><strong>Email:</strong></abbr><a
            href="mailto:sincere.scc@gmail.com"><?= $contact['head_email'] ?></a>


</div><!-- .sidebar end -->
</div>

</div>
</div>
</section><!-- #content end -->

