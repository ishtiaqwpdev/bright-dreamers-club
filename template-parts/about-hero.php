<?php
/**
 * About page hero (text, CTAs, banner, deco).
 *
 * @package Bright_Dreamers_Club
 *
 * @var array $args Optional. post_id, section_class.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$post_id = isset( $args['post_id'] ) ? (int) $args['post_id'] : get_queried_object_id();
if ( $post_id <= 0 ) {
	$post_id = bdc_get_page_id_by_slug( 'about' );
}

$section_class = isset( $args['section_class'] ) ? trim( (string) $args['section_class'] ) : 'about-hero';
if ( '' === $section_class ) {
	$section_class = 'about-hero';
}

$about_hero_eyebrow = bdc_get_acf_text(
	'about_hero_eyebrow',
	'ABOUT US',
	$post_id
);
/* Theme lockup — 2 lines; size capped in CSS so it stays clear of the banner photo. */
$about_hero_title_underline_word = 'Every';
$about_hero_title_navy_rest      = 'Child Has a Dream';
$about_hero_title_pink           = 'We\'re Here to Help It Grow';
$about_hero_title_underline_url  = bdc_get_acf_image_url(
	'about_hero_title_underline',
	bdc_theme_asset_url( 'assets/images/heading-underline.jpeg' ),
	$post_id
);
$about_hero_text = bdc_get_acf_text(
	'about_hero_text',
	'Bright Dreamers is a nonprofit community where children are encouraged to dream freely, explore their ideas, create with confidence, and make a positive difference in the world.',
	$post_id
);
$about_hero_primary_btn_text = bdc_get_acf_text(
	'about_hero_primary_btn_text',
	'Apply to Become a Bright Dreamer',
	$post_id
);
$about_hero_primary_btn_link = bdc_get_acf_link(
	'about_hero_primary_btn_link',
	array(
		'title'  => '',
		'url'    => bdc_page_url( 'apply-to-become.html' ),
		'target' => '',
	),
	$post_id
);
$about_hero_secondary_btn_text = bdc_get_acf_text(
	'about_hero_secondary_btn_text',
	'See Our Vision',
	$post_id
);
$about_hero_secondary_btn_link = bdc_get_acf_link(
	'about_hero_secondary_btn_link',
	array(
		'title'  => '',
		'url'    => bdc_page_url( 'our-vision.html' ),
		'target' => '',
	),
	$post_id
);
$about_hero_banner_theme_path = 'assets/images/about-banner.jpg';
$about_hero_banner_url        = bdc_theme_asset_url( $about_hero_banner_theme_path );
$about_hero_banner_ver        = bdc_asset_version( $about_hero_banner_theme_path );
if ( $about_hero_banner_ver ) {
	$about_hero_banner_url = add_query_arg( 'v', $about_hero_banner_ver, $about_hero_banner_url );
}
$about_hero_banner_alt = bdc_get_acf_text(
	'about_hero_banner_alt',
	'Four smiling schoolgirls with backpacks and notebooks against colorful doodles and paint splashes',
	$post_id
);
$about_hero_banner_mobile_theme_path = 'assets/images/about-banner-mobile.jpg';
$about_hero_banner_mobile_url        = bdc_theme_asset_url( $about_hero_banner_mobile_theme_path );
$about_hero_banner_mobile_ver        = bdc_asset_version( $about_hero_banner_mobile_theme_path );
if ( $about_hero_banner_mobile_ver ) {
	$about_hero_banner_mobile_url = add_query_arg( 'v', $about_hero_banner_mobile_ver, $about_hero_banner_mobile_url );
}

$about_headline_html  = '<span class="about-hero__title-line about-hero__title-line--navy">';
$about_headline_html .= '<span class="heading-underline">' . esc_html( $about_hero_title_underline_word ) . '<img class="heading-underline__img" src="' . esc_url( $about_hero_title_underline_url ) . '" alt="" width="120" height="12" /></span>';
$about_headline_html .= ' ' . esc_html( $about_hero_title_navy_rest );
$about_headline_html .= '</span>';
$about_headline_html .= '<span class="about-hero__title-line about-hero__title-line--pink">' . esc_html( $about_hero_title_pink ) . '</span>';

get_template_part(
	'template-parts/page-hero',
	null,
	array(
		'section_class'              => $section_class,
		'aria_label'                 => 'About Bright Dreamers',
		'section_label'              => $about_hero_eyebrow,
		'headline_html'              => $about_headline_html,
		'supporting_copy'            => $about_hero_text,
		'primary_cta_text'           => $about_hero_primary_btn_text,
		'primary_cta_link'           => $about_hero_primary_btn_link,
		'secondary_cta_text'         => $about_hero_secondary_btn_text,
		'secondary_cta_link'         => $about_hero_secondary_btn_link,
		'hero_image'                 => $about_hero_banner_url,
		'hero_image_mobile'          => $about_hero_banner_mobile_url,
		'hero_image_alt'             => $about_hero_banner_alt,
		'media_class'                => 'about-hero__media',
		'image_class'                => 'about-hero__banner',
		'hero_deco'                  => true,
		'secondary_cta_show_heart'   => true,
	)
);
