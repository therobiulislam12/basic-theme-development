<?php 

/**
 * The template for archive page
 * 
 */

get_header(); ?>

<main id="main-area" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="bg-warning-subtle p-4 rounded">
                    <h2 class="mb-0">
                        <?= the_archive_title(); ?>
                    </h2>
                </div>
                <?php get_template_part('templates/blog_setup')?>

                <div id="page_nav">
                    <?php

                    if ('ramify_pagination') {
                        ramify_pagination();
                    }
                    ?>
                </div>
            </div>

            <div class="col-md-3">
            <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>