<?php get_header(); ?>

<main class="main-content">
    <h1 class="title"><?php the_title(); ?></h1>
    <?php the_post_thumbnail("medium_large"); ?>   
    <div class="single-program-content">
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>  