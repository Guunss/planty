<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<?php wp_body_open(); ?>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php echo esc_html( oceanwp_theme_strings( 'owp-string-header-skip-link', false ) ); ?></a>

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<header>
                <div class="logo">
                <a href="http://planty.local">
                    <div class="logo">
                        <img src="http://planty.local/wp-content/uploads/2025/10/Logo-source.png"/>           
                    </div>
                </a>
                </div>
                <nav>
                    <div class="main-pages">
                    <div class="nav-item">
                        <a href="/precommande">Nous rencontrer</a>
                    </div>
                    <?php if(is_user_logged_in()) { ?>
                    <div class="nav-item">
                        <a href="/wp-admin">Admin</a>
                    </div>
                    <?php } ?>
                    </div>
                    <div class="nav-item dark">
                        <a href="/commander">Commander</a>
                    </div>
                </nav>
            </header>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

				<?php do_action( 'ocean_page_header' ); ?>
