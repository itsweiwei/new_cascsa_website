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
    <h1 class="title">Our Events</h1>
        <div>
            A sample description of what events are offered and at what locations
        </div>
    </div>

</main>

<?php get_footer(); ?>