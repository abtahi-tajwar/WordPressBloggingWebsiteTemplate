<div class="subhero_section">
    <div class="subhero_content">
        <div class="subhero_content_image">
            <?php if(get_theme_mod('subhero_image_setting1') == null) { ?>
                <img src="http://localhost/press/wp-content/themes/blog/exported/Ease_Of_Reading.png" alt="Image">
            <?php } else { ?>
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('subhero_image_setting1')) ?>" alt="Image">
            <?php } ?>
        </div>
        <div class="subhero_content_text">
                <h1><?php echo get_theme_mod('subhero_heading1') ?></h1>
                <p><?php echo get_theme_mod('subhero_description1') ?></p>
        </div>
    </div>
    <div class="subhero_content">
        <div class="subhero_content_image">
            <?php if(get_theme_mod('subhero_image_setting2') == null) { ?>
                <img src="http://localhost/press/wp-content/themes/blog/exported/Organized.png" alt="Image">
            <?php } else { ?>
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('subhero_image_setting2')) ?>" alt="Image">
            <?php } ?>
        </div>
        <div class="subhero_content_text">
                <h1><?php echo get_theme_mod('subhero_heading2') ?></h1>
                <p><?php echo get_theme_mod('subhero_description2') ?></p>
        </div>
    </div>
    <div class="subhero_content">
        <div class="subhero_content_image">
            <?php if(get_theme_mod('subhero_image_setting3') == null) { ?>
                <img src="http://localhost/press/wp-content/themes/blog/exported/Quality_Content.png" alt="Image">
            <?php } else { ?>
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('subhero_image_setting3')) ?>" alt="Image">
            <?php } ?>
        </div>
        <div class="subhero_content_text">
                <h1><?php echo get_theme_mod('subhero_heading3') ?></h1>
                <p><?php echo get_theme_mod('subhero_description3') ?></p>
        </div>
    </div>
</div>