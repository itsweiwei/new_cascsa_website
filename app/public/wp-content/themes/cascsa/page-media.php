<?php get_header(); ?>

<main class="main-content">
    <h1 class="title">All Media</h1>
    <?php 
        while(have_posts()) {
            the_post();
        }
    ?> 
    <p class="media-content">
        <?php 
            the_content();  
        ?>
    </p>
</main>

<?php get_footer(); ?>  