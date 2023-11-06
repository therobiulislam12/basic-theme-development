<?php

/**
 * This template for displaying the header
 * 
 * @package ramifydigital
 */

?>

<!DOCTYPE html>
<html <?php echo language_attributes(); ?> class="no-js"> <!-- class no-js use korar mane holo, bu default js load hobe nh -->

<head>
    <meta charset="<?= bloginfo("charset"); ?>"> <!-- charset newyar jonnu ata use korte hobe -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?> <!-- wp_head and wp_footer kaj kore, wordpess core file load a -->
</head>

<body <?= body_class(); ?>>

    <header id="header_area" class="py-3 navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 <?= get_theme_mod("ramify_menu_position"); ?>">
                    <div class="logo">
                        <a href="/theme-development/">
                            <img src="<?= get_theme_mod("ramify_logo"); ?>" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <?php
                    class Custom_Nav_Walker extends Walker_Nav_Menu {
                        function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
                            $output .= '<li class="nav-item">';
                            $output .= '<a class="nav-link" href="' . $item->url . '">';
                            $output .= $item->title;
                            $output .= '</a>';
                        }
                    }

                    // In your template file, use the following code to display the menu
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse justify-content-end',
                        'menu_class' => 'navbar-nav',
                        'walker' => new Custom_Nav_Walker()
                    ));

                    ?>
<!--                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">-->
<!--                        <ul class="navbar-nav">-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link active" aria-current="page" href="#">Home</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="#">About</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="#">Portfolio</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="#">Contact</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </header>



    <?php wp_footer(); ?> <!-- wp_head and wp_footer kaj kore, wordpess core file load a -->
</body>

</html>