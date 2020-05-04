<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <div>
        <!-- <p><?php echo get_theme_mod('top_subheader_email_control') ?></p>
        <p><?php echo get_theme_mod('top_subheader_phone_control') ?></p> -->
        <div class="top_subheader_container">
            <div class="top_subheader_content">
                <div class="top_subheader_email">
                    <div class="top_subheader_email_logo">
                        <img src="http://localhost/press/wp-content/themes/blog/exported/mail_logo.png" alt="Mail Logo">
                    </div>
                    <div class="top_subheader_email_text">
                        <p><?php echo get_theme_mod('top_subheader_email') ?></p>
                    </div>
                </div>
                <div class="top_subheader_phone">
                    <div class="top_subheader_phone_logo">
                        <img src="http://localhost/press/wp-content/themes/blog/exported/call_logo.png" alt="Call Logo">
                    </div>
                    <div class="top_subheader_phone_text">
                        <p><?php echo get_theme_mod('top_subheader_phone') ?></p>
                    </div>
                </div>
                <div class="top_subheader_link_facebook">
                    <img src="http://localhost/press/wp-content/themes/blog/exported/facebook.png" alt="Facebook Logo">
                </div>
                <div class="top_subheader_link_instagram">
                    <img src="http://localhost/press/wp-content/themes/blog/exported/instagram.png" alt="Instagram Logo">
                </div>
                <div class="top_subheader_link_linkedin">
                    <img src="http://localhost/press/wp-content/themes/blog/exported/linkedin.png" alt="Linkedin Logo">
                </div>
                <div class="top_subheader_link_twitter">
                    <img src="http://localhost/press/wp-content/themes/blog/exported/twitter.png" alt="Twitter Logo">
                </div>
                <div class="top_subheader_link_behance">
                    <img src="http://localhost/press/wp-content/themes/blog/exported/behance.png" alt="Behance Logo">
                </div>
            </div>
        </div>

        <div class="navbar_container">
            <div class="navbar_mainlogo_container">
                <img src="http://localhost/press/wp-content/themes/blog/exported/main_logo.png" alt="Main Logo">
            </div>
            <div class="navbar_menu_container">
                <ul class="navbar_menu">
                    <?php
                    $args = array(
                        'theme_location' => 'primary'
                    ); 
                    wp_nav_menu($args); 
                    ?>
                </ul>
            </div>
            <div class="navbar_search_icon_container">
                <img src="http://localhost/press/wp-content/themes/blog/exported/SearchIcon.png" alt="Search Icon">
            </div>
        </div>
    </div>