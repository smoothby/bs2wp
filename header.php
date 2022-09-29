<?php
/**
 * The header.
 *
 * Displays all common elements, header, nav.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bs2wp
 * @since Bootstrap to WordPress v1.0
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <title>Bootstrap template to WordPress theme</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="top-navigation">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6">
                <!--                <nav class="main-menu">
                                    <ul class="top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled list-inline">
                                        <li class="menu-item">
                                            <a href="index.html">Home</a>
                                        </li>

                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">Blog</a>
                                            <ul class="sub-menu">

                                                <li class="menu-item">
                                                    <a href="index.html">Placeholder</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="index.html">Placeholder</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="index.html">Placeholder</a>
                                                </li>

                                                <li class="menu-item menu-item-has-children">
                                                    <a href="index.html">About</a>
                                                    <ul class="sub-menu">

                                                        <li class="menu-item">
                                                            <a href="index.html">Taoism</a>
                                                        </li>

                                                        <li class="menu-item">
                                                            <a href="index.html">A. Watts</a>
                                                        </li>

                                                        <li class="menu-item">
                                                            <a href="index.html">J. Krishnamurti </a>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="menu-item">
                                            <a href="widgets.html">Widgets</a>
                                        </li>

                                        <li class="menu-item">
                                            <a href="contact.html">Contact</a>
                                        </li>

                                        <li class="menu-item special-menu">
                                            <a href="join.html">Join</a>
                                        </li>

                                    </ul>
                                </nav>-->

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary', // in functions.php
                        'depth' => 3, // only have 3 levels deep of styling
                        'container' => 'nav', // html tag for nav
                        'container_class' => 'main-menu', // wrapper class
                        'menu_class' => 'top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled', // append css styling to the menu
                        'fallback_cb' => false // if no primary menu then don't show anything
                    ));
                ?>

                <button type="button" class="navbar-open">
                    <i class="mobile-nav-toggler flaticon flaticon-menu"></i>
                </button>

            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn">
                <i class="flaticon flaticon-close"></i>
            </div>
            <nav class="menu-box">
                <ul class="navigation clearfix"></ul>
            </nav>
        </div>

    </div>
</div>
