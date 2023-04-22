<?php get_header(); ?>

<main class="about-page main-content">
    <div class="about-left-col program-sidebar">
            <h2>Learn More</h2>
            <ul>
                <li><a href="<?php echo site_url('/about'); ?>">Our Organization</a></li>
                <li><a href="<?php echo site_url('/staff'); ?>">Our Staff</a></li>
            </ul>
    </div>
    <div class="about-right-col">
    <h1 class="title">Staff Information</h1>
        <div class="staff-content">
            <?php 
                while(have_posts()) {
                    the_post();
                }
            ?> 
            <p>
                <?php 
                    the_content();  
                ?>
            </p>
            <h1 class="title">Contact Us</h1>
            <div class="maps-embed">
                <iframe 
                    src="https://docs.google.com/forms/d/e/1FAIpQLSdiWCIkp3aFhz8P3EsiHTtmlF-FEmLpaZju1-erRT0hFLo1uQ/viewform?embedded=true" 
                    width="100%" 
                    height="900" 
                    frameborder="0" 
                    marginheight="0" 
                    marginwidth="0">
                </iframe>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>