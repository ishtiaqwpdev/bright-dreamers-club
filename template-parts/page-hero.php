<?php
/**
 * Shared page hero: label → headline → copy → CTAs → image.
 *
 * @package Bright_Dreamers_Club
 *
 * @var array $args Hero arguments.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero = wp_parse_args(
	( isset( $args ) && is_array( $args ) ) ? $args : array(),
	array(
		'section_class'            => '',
		'aria_label'               => '',
		'labelledby'               => '',
		'section_label'            => '',
		'section_label_html'       => '',
		'headline'                 => '',
		'headline_html'            => '',
		'headline_id'              => '',
		'tagline_html'             => '',
		'supporting_copy'          => '',
		'supporting_copy_html'     => '',
		'extra_content_html'       => '',
		'primary_cta_text'         => '',
		'primary_cta_link'         => array(),
		'secondary_cta_text'       => '',
		'secondary_cta_link'       => array(),
		'hero_image'               => '',
		'hero_image_mobile'        => '',
		'hero_image_alt'           => '',
		'hero_image_html'          => '',
		'hero_image_placeholder'   => 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7',
		'media_class'              => '',
		'image_class'              => '',
		'hero_deco'                => false,
		'primary_cta_show_icon'    => false,
		'secondary_cta_show_heart' => false,
		'brand_html'               => '',
		'actions_class'            => '',
		'inner_data_attrs'         => array(),
	)
);

$inner_data_attrs = array();
if ( ! empty( $hero['inner_data_attrs'] ) && is_array( $hero['inner_data_attrs'] ) ) {
	foreach ( $hero['inner_data_attrs'] as $attr_name => $attr_value ) {
		$attr_name = preg_replace( '/[^a-z0-9_-]/i', '', (string) $attr_name );
		if ( '' === $attr_name ) {
			continue;
		}
		$inner_data_attrs[ $attr_name ] = (string) $attr_value;
	}
}

$inner_data_attrs = array_merge(
	array(
		'data-bdc-hero-layout'     => '36-64',
		'data-bdc-hero-text-col'   => '36',
		'data-bdc-hero-banner-col' => '64',
	),
	$inner_data_attrs
);

$actions_class = trim( 'hero-ctas page-hero__actions ' . (string) $hero['actions_class'] );

$primary_link   = is_array( $hero['primary_cta_link'] ) ? $hero['primary_cta_link'] : array();
$secondary_link = is_array( $hero['secondary_cta_link'] ) ? $hero['secondary_cta_link'] : array();
$primary_url    = isset( $primary_link['url'] ) ? (string) $primary_link['url'] : '';
$secondary_url  = isset( $secondary_link['url'] ) ? (string) $secondary_link['url'] : '';
$has_primary    = ( '' !== $primary_url && '' !== trim( (string) $hero['primary_cta_text'] ) );
$has_secondary  = ( '' !== $secondary_url && '' !== trim( (string) $hero['secondary_cta_text'] ) );
$has_image      = ( '' !== trim( (string) $hero['hero_image'] ) || '' !== trim( (string) $hero['hero_image_html'] ) );
$has_mobile_image = '' !== trim( (string) $hero['hero_image_mobile'] );
$headline_text  = trim( (string) $hero['headline'] );
$headline_html  = trim( (string) $hero['headline_html'] );

$section_class = trim( 'page-hero ' . (string) $hero['section_class'] );
$media_class   = trim( 'hero-image-wrap ' . (string) $hero['media_class'] );
/* Hero banners are above-the-fold — never lazy-load (avoids text-column jump). */
$image_class   = trim( (string) $hero['image_class'] );
?>
      <section
        class="<?php echo esc_attr( $section_class ); ?>"
        <?php if ( '' !== trim( (string) $hero['labelledby'] ) ) : ?>
        aria-labelledby="<?php echo esc_attr( $hero['labelledby'] ); ?>"
        <?php elseif ( '' !== trim( (string) $hero['aria_label'] ) ) : ?>
        aria-label="<?php echo esc_attr( $hero['aria_label'] ); ?>"
        <?php endif; ?>
      >
        <div
          class="site-container page-hero__inner page-hero__inner--layout-40-60"
          <?php foreach ( $inner_data_attrs as $inner_attr_name => $inner_attr_value ) : ?>
          <?php echo esc_attr( $inner_attr_name ); ?>="<?php echo esc_attr( $inner_attr_value ); ?>"
          <?php endforeach; ?>
        >
          <div class="page-hero__content">
            <?php if ( '' !== trim( (string) $hero['brand_html'] ) ) : ?>
            <?php echo $hero['brand_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            <?php endif; ?>

            <?php if ( ! empty( $hero['hero_deco'] ) ) : ?>
            <div class="about-hero__deco" aria-hidden="true">
              <img
                class="about-hero__deco-icon about-hero__deco-icon--star-label"
                src="<?php echo esc_url( bdc_theme_asset_url( 'assets/images/role-icon-star-removebg-preview.png' ) ); ?>"
                alt=""
                width="32"
                height="32"
                decoding="async"
              />
              <img
                class="about-hero__deco-icon about-hero__deco-icon--heart-label"
                src="<?php echo esc_url( bdc_theme_asset_url( 'assets/images/role-heart-outline.png' ) ); ?>"
                alt=""
                width="32"
                height="32"
                decoding="async"
              />
              <img
                class="about-hero__deco-icon about-hero__deco-icon--plane-copy"
                src="<?php echo esc_url( bdc_theme_asset_url( 'assets/images/about-hero-deco-plane-removebg-preview.png' ) ); ?>"
                alt=""
                width="36"
                height="96"
                decoding="async"
              />
              <img
                class="about-hero__deco-icon about-hero__deco-icon--leaf-copy"
                src="<?php echo esc_url( bdc_theme_asset_url( 'assets/images/about-hero-deco-plant-removebg-preview.png' ) ); ?>"
                alt=""
                width="36"
                height="80"
                decoding="async"
              />
              <span class="about-hero__deco-trail-wrap">
                <img
                  class="about-hero__deco-icon about-hero__deco-icon--trail-dot"
                  src="<?php echo esc_url( bdc_theme_asset_url( 'assets/images/young-ideas-lab-deco-plane-removebg-preview.png' ) ); ?>"
                  alt=""
                  width="72"
                  height="30"
                  decoding="async"
                />
              </span>
            </div>
            <?php endif; ?>
            <?php if ( '' !== trim( (string) $hero['section_label_html'] ) ) : ?>
            <span class="hero-label"><?php echo $hero['section_label_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
            <?php elseif ( '' !== trim( (string) $hero['section_label'] ) ) : ?>
            <span class="hero-label"><?php echo esc_html( $hero['section_label'] ); ?></span>
            <?php endif; ?>

            <?php if ( '' !== $headline_html || '' !== $headline_text ) : ?>
            <h1
              class="hero-headline"
              <?php if ( '' !== trim( (string) $hero['headline_id'] ) ) : ?>
              id="<?php echo esc_attr( $hero['headline_id'] ); ?>"
              <?php endif; ?>
            >
              <?php
              if ( '' !== $headline_html ) {
                echo $headline_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              } else {
                echo esc_html( $headline_text );
              }
              ?>
            </h1>
            <?php endif; ?>

            <?php if ( '' !== trim( (string) $hero['tagline_html'] ) ) : ?>
            <?php echo $hero['tagline_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            <?php endif; ?>

            <?php if ( '' !== trim( (string) $hero['supporting_copy_html'] ) ) : ?>
            <p class="hero-copy"><?php echo $hero['supporting_copy_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php elseif ( '' !== trim( (string) $hero['supporting_copy'] ) ) : ?>
            <p class="hero-copy"><?php echo esc_html( $hero['supporting_copy'] ); ?></p>
            <?php endif; ?>

            <?php if ( '' !== trim( (string) $hero['extra_content_html'] ) ) : ?>
            <div class="page-hero__extra"><?php echo $hero['extra_content_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
            <?php endif; ?>

            <?php if ( $has_primary || $has_secondary ) : ?>
            <div class="<?php echo esc_attr( $actions_class ); ?>">
              <?php if ( $has_primary ) : ?>
              <a class="btn btn--solid btn--lg btn-hover" href="<?php echo esc_url( $primary_url ); ?>"<?php echo bdc_acf_link_target_attr( $primary_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <?php echo esc_html( $hero['primary_cta_text'] ); ?>
                <?php if ( ! empty( $hero['primary_cta_show_icon'] ) ) : ?>
                <svg
                  class="btn__icon home-hero__cta-icon"
                  viewBox="0 0 24 24"
                  width="20"
                  height="20"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  aria-hidden="true"
                >
                  <path d="M5 12h14M13 6l6 6-6 6" />
                </svg>
                <?php endif; ?>
              </a>
              <?php endif; ?>
              <?php if ( $has_secondary ) : ?>
              <a class="btn btn--outline btn--lg btn-hover" href="<?php echo esc_url( $secondary_url ); ?>"<?php echo bdc_acf_link_target_attr( $secondary_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <?php echo esc_html( $hero['secondary_cta_text'] ); ?>
                <?php if ( ! empty( $hero['secondary_cta_show_heart'] ) ) : ?>
                <svg
                  class="btn__icon"
                  viewBox="0 0 24 24"
                  width="18"
                  height="18"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.8"
                  aria-hidden="true"
                >
                  <path
                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                  />
                </svg>
                <?php endif; ?>
              </a>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          </div>

          <?php if ( $has_image ) : ?>
          <div class="<?php echo esc_attr( $media_class ); ?>">
            <?php if ( '' !== trim( (string) $hero['hero_image_html'] ) ) : ?>
              <?php echo $hero['hero_image_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            <?php else : ?>
            <div class="lazy-img-wrap page-hero__banner-wrap">
              <?php if ( $has_mobile_image ) : ?>
              <picture>
                <source
                  media="(max-width: 767px)"
                  srcset="<?php echo esc_url( $hero['hero_image_mobile'] ); ?>"
                />
                <img
                  class="<?php echo esc_attr( $image_class ); ?> page-hero__banner-img"
                  src="<?php echo esc_url( $hero['hero_image'] ); ?>"
                  alt="<?php echo esc_attr( $hero['hero_image_alt'] ); ?>"
                  width="1024"
                  height="555"
                  decoding="async"
                  fetchpriority="high"
                  style="border:0;outline:0;box-shadow:none;"
                />
              </picture>
              <?php else : ?>
              <img
                class="<?php echo esc_attr( $image_class ); ?> page-hero__banner-img"
                src="<?php echo esc_url( $hero['hero_image'] ); ?>"
                alt="<?php echo esc_attr( $hero['hero_image_alt'] ); ?>"
                width="1024"
                height="555"
                decoding="async"
                fetchpriority="high"
                style="border:0;outline:0;box-shadow:none;"
              />
              <?php endif; ?>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
        </div>
      </section>
