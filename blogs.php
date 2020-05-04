<?php if(have_posts()):
    while(have_posts()): the_post(); ?>
<div class="blogs_container">
    <a href="<?php the_permalink() ?>">
    <div class="blog">
        <div class="blog_picture">
            <!-- <img src="http://localhost/press/wp-content/themes/blog/exported/economy_category.png" alt="Blog Picture"> -->
            <?php the_post_thumbnail( 'thumbnail_image' ); ?>
        </div>
        <div class="blog-text">
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
        </div>
    </div>
    </a>
</div>
<?php endwhile; endif; ?>
