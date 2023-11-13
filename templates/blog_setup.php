<?php
if (have_posts()) {
    while (have_posts()) {

        the_post(); ?>

        <div class="blog_area bg-light-subtle p-4 rounded shadow my-4">
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php echo the_post_thumbnail('post-thumbnails'); ?>
                </a>
            <?php endif; ?>
            <div class="post_details">
                <h2>
                    <a href="<?= get_permalink() ?>"><?php the_title(); ?></a>
                </h2>
                <?php the_excerpt(); ?>
            </div>
        </div>

<?php
    }
} else {
    _e('No Post Found');
}
?>