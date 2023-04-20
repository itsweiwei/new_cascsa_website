<?php get_header(); ?>

<main class="main-content">
<h1 class="title">All Events</h1>
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
</main>

<?php get_footer(); ?>