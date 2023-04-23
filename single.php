<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header() ?>
</head>

<body>
    <header>
        <div class="headerBackImage"></div>
        <?php include(get_template_directory() . '/inc/navbar.php'); ?>
    </header>

    <main>
        <div class="content">
            <h1 class="borderAnime"><?php the_title(); ?></h1>
            <p><?php the_time(get_option('date_format')); ?></p>
            <span class="categoryLinks">
                <?php the_category('&nbsp'); ?>
            </span>
            <span class="tagLinks">
                <?php the_tags('', '', ''); ?>
            </span>
            <div class="singleThumbnail">
            <?php 
                if(has_post_thumbnail()){
                    the_post_thumbnail();
                }
             ?>
            </div>
            <?php the_content(); ?>
        </div>
        <?php get_sidebar(); ?>
    </main>
    <?php get_footer(); ?>
</body>

</html>