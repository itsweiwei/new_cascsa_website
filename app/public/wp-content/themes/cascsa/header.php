<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" charset="UTF-8">
        <link rel="stylesheet" href="styles.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d72796dfa5.js" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>
    <body>

        <nav>
            <div id="logo-img">
                <a href="<?php echo site_url(''); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
                    <span class="logo-name">CASCSA</span>
                </a>
            </div>
            <ul>
                <li><a href="<?php echo site_url(''); ?>">Home</a></li>
                <li><a href="<?php echo site_url('/event'); ?>">Events</a></li>
                <li><a href="<?php echo site_url('/program'); ?>">Programs</a></li>
                <li><a href="<?php echo site_url('/media'); ?>">Media</a></li>
                <li class="dropdown">
                    <a>Learn More</a>
                    <div class="dropdown-content">
                        <p><a href="<?php echo site_url('/about'); ?>">About CASCSA</a></p>
                        <p><a href="<?php echo site_url('/staff'); ?>">Our Staff</a></p>
                    </div>
                </li>
                <li><a href="<?php echo site_url('/'); ?>">Donate</a></li>
            </ul>
        </nav>