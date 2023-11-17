<?php

/**
 *
 *  This is 404 ( not found page )
 *  @since 1.0.0
 *
 *  @package ramify
 */

/**
 * The main template
 */


get_header(); ?>

<main id="main-area" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Page Not Found</h1>
                <p>The page you are looking for does not exist.</p>
                <a href="<?php echo home_url(); ?>" class="btn btn-primary">Go Home</a>
                <div class="my-2">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>