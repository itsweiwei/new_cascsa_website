<?php get_header(); ?>

<main class="main-content about-page">
    <div class="about-left-col">
        <h2>Learn More</h2>
        <ul>
            <li><a href="<?php echo site_url('/about'); ?>">Our Organization</a></li>
            <li><a href="<?php echo site_url('/staff'); ?>">Our Staff</a></li>
        </ul>
    </div>
    <div class="about-right-col">
        <h1 class="title">About Us</h1>
        <div class="about-content">
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
            <h1 class="title">Maps</h1>
            <div class="maps-embed">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.345965089002!2d-73.98600658463786!3d40.62225167934175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c245274ff079cb%3A0x71ce22c76c0d61eb!2s5712%2019th%20Ave%2C%20Brooklyn%2C%20NY%2011204!5e0!3m2!1sen!2sus!4v1660159319063!5m2!1sen!2sus" 
                    width="100%"
                    height="100%"
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="maps-embed">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.7553250690266!2d-74.00529108463815!3d40.61322167934277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24513751cfb95%3A0x65a80840aae59734!2sNew%20Utrecht%20High%20School!5e0!3m2!1sen!2sus!4v1662356110328!5m2!1sen!2sus" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>