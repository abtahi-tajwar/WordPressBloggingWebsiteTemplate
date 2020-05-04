<?php $post = get_post(get_theme_mod('featured-post')); ?>
<div class="featured_post_container">
    <div class="featured_post_image_container">
        <?php the_post_thumbnail( 'thumbnail_image' ); ?>
    </div>
    <h4><?php the_title(); ?></h4>
    <p><?php the_excerpt(); ?></p>
</div>