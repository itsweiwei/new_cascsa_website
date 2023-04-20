<?php get_header(); ?>

<main class="main-content">

<h1 class="title">All Programs</h1>

<?php 
    $args = array(
        'post_type' => 'event'
    );
    
    $posts = new WP_Query($args);

    while($posts->have_posts()) {
        $posts->the_post();
?>
    <div>
        <a href="<?php the_permalink(); ?>">
            <h2 class="title"><?php the_title(); ?></h2>
        </a>
        <div class="program-content">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"/>
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