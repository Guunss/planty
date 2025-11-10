<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr(oceanwp_html_classes()); ?>" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup('html'); ?>>

    <?php wp_body_open(); ?>

    <?php do_action('ocean_before_outer_wrap'); ?>

    <div id="outer-wrap" class="site clr">
        <a class="skip-link screen-reader-text"
            href="#main"><?php echo esc_html(oceanwp_theme_strings('owp-string-header-skip-link', false)); ?></a>

        <?php do_action('ocean_before_wrap'); ?>

        <div id="wrap" class="clr">
            <!-- custom header -->

            <header>
                <div class="logo">
                    <a href="/">
                        <div class="logo">
                            <img src="/wp-content/uploads/2025/10/Logo-source.png" alt="logo Planty" />
                        </div>
                    </a>
                </div>
                <nav>
                    <?php wp_nav_menu(array(
                        'menu' => 'Navigation'
                    )); ?>
                </nav>
            </header>
            <!-- custom header fin -->
            <main id="main" class="site-main clr" <?php oceanwp_schema_markup('main'); ?> role="main">

                <?php do_action('ocean_page_header'); ?>