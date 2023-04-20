<?php get_header(); ?>

<!--Due to limitations of the site design, when you update a new program, you must manually update the sidebar here as well-->
<!--To do so, simply, copy one of the <li> elements and replace the text and site_url with the appropriate replacements for the new program (path can be found 
    in the page description on the WP Admin page)-->

<main class="main-content about-page">
    <div class="about-left-col program-sidebar">
        <h2>Programs</h2>
        <ul>
            <li><a href="<?php echo site_url('/program/basketball'); ?>">Basketball</a></li>
            <li><a href="<?php echo site_url('/program/volleyball'); ?>">Volleyball</a></li>
            <li><a href="<?php echo site_url('/program/pingpong'); ?>">Ping Poing</a></li>
            <li><a href="<?php echo site_url('/program/soccer'); ?>">Soccer</a></li>
            <li><a href="<?php echo site_url('/program/taichi'); ?>">Tai Chi</a></li>
            <li><a href="<?php echo site_url('/program/zumba'); ?>">ZUMBA</a></li>
        </ul>
    </div>
    <div class="about-right-col">
    <h1 class="title">Sports Programs</h1>
    <?php
        while(have_posts()) {
            the_post();
        ?>
        <div class="two-column">
            <a href="<?php the_permalink(); ?>">
                <h2 class="title"><?php the_title(); ?></h2>
            </a>
            <div class="program-content">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" /></a>
                <div class="program-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
        <?php
        }
    ?>
    </div>

</main>

<?php get_footer(); ?>