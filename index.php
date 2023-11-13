<?php get_header(); ?>

<main id="main-area" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
               
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