<!DOCTYPE html>

<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!--><html <?php language_attributes() ?>><!--<![endif]-->

<head>

    <title>
        <?php
        if (is_page()) echo(single_post_title() . ' - ' . get_bloginfo('name'));
        elseif (is_single()) echo(single_post_title() . ' - ' . get_bloginfo('name'));
        else echo(get_bloginfo('name') . ' - ' . get_bloginfo('description'));
        ?>
    </title>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">

    <!--[if lt IE 9]>
	<script src="<?= get_template_directory_uri(); ?>/js/html5.js?ver=3.7.0"></script>
	<![endif]-->

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>