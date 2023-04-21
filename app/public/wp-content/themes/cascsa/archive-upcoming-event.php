<?php get_header(); ?>

<main class="main-content about-page">
    <div class="about-left-col program-sidebar">
        <h2>Events</h2>
        <ul>
            <li><a href="<?php echo site_url('/upcoming-event'); ?>">Upcoming Events</a></li>
            <li><a href="<?php echo site_url('/past-event'); ?>">Past Events</a></li>
        </ul>
    </div>
    <div class="about-right-col">
    <h1 class="title">All Upcoming Events</h1>
    <div class="row">
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
    </div>

</main>

<?php get_footer(); ?>