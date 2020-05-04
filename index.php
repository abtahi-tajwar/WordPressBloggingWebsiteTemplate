<?php get_header(); ?> 
<div class="hero_section">
    <p class="hero_section_heading"><?php echo get_theme_mod('hero_section_heading'); ?></p>
    <p class="hero_description_section"><?php echo get_theme_mod('hero_description_section'); ?></p>
    <div class="hero_button_section">
        <a href="">
            <p><?php echo get_theme_mod("hero_button_section"); ?></p>
        </a>
    </div>
</div>

<?php 
    get_template_part('subhero');
    get_template_part('blogs');
    get_template_part('featured-post')
?>

<?php get_footer(); ?>