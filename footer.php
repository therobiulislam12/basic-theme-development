<?php 

// This is footer template
?>

<footer class="footer bg-black text-white py-5">

    <section class="container">
        <div class="row">
            <div class="col-md-6"><?php dynamic_sidebar('footer-1');?></div>
            <div class="col-md-3"><?php dynamic_sidebar('footer-2');?></div>
            <div class="col-md-3"><?php dynamic_sidebar('footer-3');?></div>
        </div>
    </section>

    <section class="container border-top pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="copy-right-area text-center">
                    <p class="mb-0">
                        <?php echo get_theme_mod('ramify_copyright_text');?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>


<?php wp_footer(); ?> <!-- wp_head and wp_footer kaj kore, wordpess core file load a -->
</body>

</html>