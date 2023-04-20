<?php get_header(); ?>

        <div id="banner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
            <h1>CASCSA</h1>
            <h3>Chinese American Sports and Community Service Association</h3>
        </div>
        
        <main>
            <div class="section">
                <a href="#">
                    <h2 class="section-heading">Who We Are</h2>
                </a>
    
                <section class="left-section">
                    <img class="left-section-img" src="<?php echo get_template_directory_uri(); ?>/images/frontpage1.jpg" alt="A picture representing our organization" />
                    <div class="left-section-text">
                        <div>
                            Chinese-American Sports and Community Service Association (CASCSA) is a 501(c) (3) non-profit organization. Our mission is committed to Chinese-American cultural exchanges and athletic events to provide sport activities in order to enrich peoples lives and fitness so we can bring more positive energy to our New York City community.
                        </div>
                    </div>
                </section>
            </div>
            <div class="section">
                <a href="#">
                    <h2 class="section-heading">Programs</h2>
                </a>
                <section class="right-section">
                    <div class="right-section-text">
                        <div>
                            We offer a variety of different sports programs for all skill levels from beginner to advanced. Our classes are held at either New Utrecht High School or Franklin D. Roosevelt High School. Check the class page for more information about location, cirriculum, and pricing.
                        </div>
                    </div>
                    <img class="right-section-img" src="<?php echo get_template_directory_uri(); ?>/images/frontpage2.jpg" alt="People playing sports" />
                </section>
            </div>

        </main>
<?php get_footer(); ?>