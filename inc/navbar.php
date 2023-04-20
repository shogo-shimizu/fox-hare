<!-- navbar.css必要 -->
<!-- navbar.js必要 -->

<div class="menunavigation borderTopAnime borderBottomAnime">
        <nav>
            <div class="logo">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/fox-hare2.png" alt="">
                <h4><?php bloginfo('name'); ?></h4>
            </div>
            <div class="navLinksContainer">
                <ul class="navLinks">
                    <li><a href="<?php echo home_url() ?>">Home</a></li>
                    <!-- <li><a href="#">Category</a></li> -->
                    <!-- <li><a href="#">Note</a></li> -->
                    <!-- <li><a href="#">Contact</a></li> -->
                </ul>
                <div class="blogInfo">
                    <hr>
                    <p><?php bloginfo('name'); ?></p>
                    <p><?php bloginfo('description'); ?></p>
                    <div class="snsButton">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>

    </div>