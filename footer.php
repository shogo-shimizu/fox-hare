<footer>
    <div class="footerTitle">
        <h2><?php bloginfo('name'); ?></h2>
        <div class="snsFooter">
            <a href="https://twitter.com/fox_hare_/">
                <i class="fa-brands fa-twitter fa-size"></i>
            </a>
            <a href="https://www.instagram.com/fox_hare_/">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <!-- <i class="fa-brands fa-youtube"></i> -->
        </div>
    </div>
    <div class="footerInfo">
        <h2>Blog Infomation</h2>
        <p>お問合せ</p>
        <a href="mailto:<?php bloginfo('admin_email') ?>">
            <p><?php bloginfo('admin_email') ?></p>
        </a>
        <p></p>
    </div>
    <!-- <div class="footerContact">
        <h2>Contact</h2>
        <p>お問合せ</p>
    </div> -->
</footer>
<?php wp_footer(); ?>