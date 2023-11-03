<?php 
/**
 * This template for displaying the header
 * 
 * @package ramifydigital
 */
 
?>

<!DOCTYPE html>
<html <?php echo language_attributes();?> class="no-js"> <!-- class no-js use korar mane holo, bu default js load hobe nh -->
<head>
    <meta charset="<?= bloginfo("charset"); ?>"> <!-- charset newyar jonnu ata use korte hobe -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?> <!-- wp_head and wp_footer kaj kore, wordpess core file load a -->
</head>
<body <?= body_class(); ?>>

<header id="header" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-md-9"></div>
        </div>
    </div>
</header>


<?php wp_footer(); ?> <!-- wp_head and wp_footer kaj kore, wordpess core file load a -->
</body>
</html>

