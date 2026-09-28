<?php
/**
 * Partners page template — converted from partners.html.
 *
 * Template Name: Partners
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$partners_page_id = get_queried_object_id();

$partners_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$partners_hero_eyebrow = bdc_get_acf_text(
	'partners_hero_eyebrow',
	'PARTNERS',
	$partners_page_id
);
$partners_hero_title_line_1 = bdc_get_acf_text(
	'partners_hero_title_line_1',
	'Stronger Together',
	$partners_page_id
);
$partners_hero_title_underline_word = bdc_get_acf_text(
	'partners_hero_title_underline_word',
	'Brighter',
	$partners_page_id
);
$partners_hero_title_underline_url = bdc_get_acf_image_url(
	'partners_hero_title_underline',
	bdc_theme_asset_url( 'assets/images/partners-heading-underline-removebg-preview.png' ),
	$partners_page_id
);
$partners_hero_title_line_2_suffix = bdc_get_acf_text(
	'partners_hero_title_line_2_suffix',
	'Futures',
	$partners_page_id
);
$partners_hero_text_intro = bdc_get_acf_text(
	'partners_hero_text_intro',
	'Bright Dreamers partners with individuals, businesses, artists, and organizations who believe in the power of children\'s ideas. Together, we turn imagination into real opportunities that',
	$partners_page_id
);
$partners_hero_text_accent = bdc_get_acf_text(
	'partners_hero_text_accent',
	'inspire kids',
	$partners_page_id
);
$partners_hero_text_outro = bdc_get_acf_text(
	'partners_hero_text_outro',
	'and strengthen our community.',
	$partners_page_id
);
$partners_hero_primary_btn_text = bdc_get_acf_text(
	'partners_hero_primary_btn_text',
	'Partner With Us',
	$partners_page_id
);
$partners_hero_primary_btn_link = bdc_get_acf_link(
	'partners_hero_primary_btn_link',
	array(
		'title'  => 'Partner With Us',
		'url'    => bdc_page_url( 'partner-inquiry.html' ),
		'target' => '',
	),
	$partners_page_id
);
$partners_hero_secondary_btn_text = bdc_get_acf_text(
	'partners_hero_secondary_btn_text',
	'Explore Our Vision',
	$partners_page_id
);
$partners_hero_secondary_btn_link = bdc_get_acf_link(
	'partners_hero_secondary_btn_link',
	array(
		'title'  => 'Explore Our Vision',
		'url'    => bdc_page_url( 'our-vision.html' ),
		'target' => '',
	),
	$partners_page_id
);
$partners_hero_banner_theme_path = 'assets/images/partners-hero-banner.jpg';
$partners_hero_banner_url        = bdc_theme_asset_url( $partners_hero_banner_theme_path );
$partners_hero_banner_ver        = bdc_asset_version( $partners_hero_banner_theme_path );
if ( $partners_hero_banner_ver ) {
	$partners_hero_banner_url = add_query_arg( 'v', $partners_hero_banner_ver, $partners_hero_banner_url );
}
$partners_hero_banner_mobile_theme_path = 'assets/images/partners-hero-banner-mobile.jpg';
$partners_hero_banner_mobile_url        = bdc_theme_asset_url( $partners_hero_banner_mobile_theme_path );
$partners_hero_banner_mobile_ver        = bdc_asset_version( $partners_hero_banner_mobile_theme_path );
if ( $partners_hero_banner_mobile_ver ) {
	$partners_hero_banner_mobile_url = add_query_arg( 'v', $partners_hero_banner_mobile_ver, $partners_hero_banner_mobile_url );
}
$partners_hero_banner_alt = bdc_get_acf_text(
	'partners_hero_banner_alt',
	'Children stacking hands with signs for Ideas People Change and Stronger Communities',
	$partners_page_id
);

$partners_ways_title = bdc_get_acf_text(
	'partners_ways_title',
	'Ways to Partner',
	$partners_page_id
);
$partners_ways_intro = bdc_get_acf_text(
	'partners_ways_intro',
	'There are many ways to open doors for children\'s ideas. Choose the partnership that\'s right for you.',
	$partners_page_id
);
$partners_ways_cards_defaults = array(
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/partners-way-icon-creative.jpeg' ),
		'title'       => 'Creative Partners',
		'text'        => 'Artists, designers, makers, photographers, and professionals who share skills, mentor, and inspire children\'s creativity.',
		'color_slug'  => 'purple',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/partners-way-icon-community.jpeg' ),
		'title'       => 'Community Partners',
		'text'        => 'Libraries, museums, schools, nonprofits, community centers, and local organizations working together to expand opportunities for kids.',
		'color_slug'  => 'green',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/partners-way-icon-business.jpeg' ),
		'title'       => 'Business Partners',
		'text'        => 'Businesses that host visits, provide expertise, open their doors, and help children see how ideas become real.',
		'color_slug'  => 'blue',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/partners-way-icon-sponsors.jpeg' ),
		'title'       => 'Project Sponsors',
		'text'        => 'Individuals or companies who fund specific child-led projects, events, markets, murals, gardens, and creative initiatives.',
		'color_slug'  => 'pink',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/partners-way-icon-inkind.jpeg' ),
		'title'       => 'In-Kind Partners',
		'text'        => 'Organizations and businesses that donate materials, supplies, spaces, services, food, tools, or other essential resources.',
		'color_slug'  => 'orange',
	),
);
$partners_ways_color_slugs_allowed = array( 'purple', 'green', 'blue', 'pink', 'orange' );
$partners_ways_cards_raw           = bdc_get_acf_repeater( 'partners_ways_cards', $partners_ways_cards_defaults, $partners_page_id );
$partners_ways_cards               = array();

foreach ( $partners_ways_cards_raw as $index => $row ) {
	$default = $partners_ways_cards_defaults[ $index ] ?? array(
		'icon'       => '',
		'title'      => '',
		'text'       => '',
		'color_slug' => 'purple',
	);

	$title = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$text  = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';

	$color_slug = isset( $row['color_slug'] ) ? sanitize_key( (string) $row['color_slug'] ) : '';
	if ( ! in_array( $color_slug, $partners_ways_color_slugs_allowed, true ) ) {
		$color_slug = (string) $default['color_slug'];
	}

	$resolved = array(
		'icon'       => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'      => '' !== $title ? $title : (string) $default['title'],
		'text'       => '' !== $text ? $text : (string) $default['text'],
		'color_slug' => $color_slug,
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) ) {
		continue;
	}

	$partners_ways_cards[] = $resolved;
}

if ( empty( $partners_ways_cards ) ) {
	$partners_ways_cards = $partners_ways_cards_defaults;
}

$partners_impact_title = bdc_get_acf_text(
	'partners_impact_title',
	'Your Partnership Makes a Real Difference',
	$partners_page_id
);
$partners_impact_intro = bdc_get_acf_text(
	'partners_impact_intro',
	'Every partnership helps children dream bigger, explore their interests, and make a positive impact.',
	$partners_page_id
);
$partners_impact_cards_defaults = array(
	array(
		'photo'     => bdc_theme_asset_url( 'assets/images/partners-impact-photo-ideas.jpeg' ),
		'photo_alt' => 'Children painting a colorful community mural together',
		'title'     => 'Ideas Become Real',
		'text'      => 'Children see their ideas come to life through projects and experiences.',
		'deco'      => bdc_theme_asset_url( 'assets/images/partners-impact-deco-heart-purple.jpeg' ),
	),
	array(
		'photo'     => bdc_theme_asset_url( 'assets/images/partners-impact-photo-skills.jpeg' ),
		'photo_alt' => 'A boy focused on a hands-on woodworking project',
		'title'     => 'Skills Grow',
		'text'      => 'They build confidence, learn new skills, and discover their strengths.',
		'deco'      => bdc_theme_asset_url( 'assets/images/partners-impact-deco-leaf.jpeg' ),
	),
	array(
		'photo'     => bdc_theme_asset_url( 'assets/images/partners-impact-photo-communities.jpeg' ),
		'photo_alt' => 'Children holding a Dream Market sign at a community market',
		'title'     => 'Communities Thrive',
		'text'      => 'Our community becomes stronger, kinder, and more connected.',
		'deco'      => bdc_theme_asset_url( 'assets/images/partners-impact-deco-heart-pink.jpeg' ),
	),
	array(
		'photo'     => bdc_theme_asset_url( 'assets/images/partners-impact-photo-opportunities.jpeg' ),
		'photo_alt' => 'Children planting seedlings together in a garden',
		'title'     => 'Opportunities Expand',
		'text'      => 'Partners open doors to new places, people, and real-world learning.',
		'deco'      => bdc_theme_asset_url( 'assets/images/partners-impact-deco-star-yellow.jpeg' ),
	),
	array(
		'photo'     => bdc_theme_asset_url( 'assets/images/partners-impact-photo-kindness.jpeg' ),
		'photo_alt' => 'A girl reading kind messages on a wall of colorful paper hearts',
		'title'     => 'Kindness Multiplies',
		'text'      => 'When we invest in children, we create a brighter, more hopeful future.',
		'deco'      => bdc_theme_asset_url( 'assets/images/partners-impact-deco-star-purple.jpeg' ),
	),
);
$partners_impact_cards_raw = bdc_get_acf_repeater( 'partners_impact_cards', $partners_impact_cards_defaults, $partners_page_id );
$partners_impact_cards     = array();

foreach ( $partners_impact_cards_raw as $index => $row ) {
	$default = $partners_impact_cards_defaults[ $index ] ?? array(
		'photo'     => '',
		'photo_alt' => '',
		'title'     => '',
		'text'      => '',
		'deco'      => '',
	);

	$title     = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$text      = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';
	$photo_alt = isset( $row['photo_alt'] ) ? trim( (string) $row['photo_alt'] ) : '';

	$resolved = array(
		'photo'     => bdc_acf_image_value_to_url( $row['photo'] ?? null, (string) $default['photo'] ),
		'photo_alt' => '' !== $photo_alt ? $photo_alt : (string) $default['photo_alt'],
		'title'     => '' !== $title ? $title : (string) $default['title'],
		'text'      => '' !== $text ? $text : (string) $default['text'],
		'deco'      => bdc_acf_image_value_to_url( $row['deco'] ?? null, (string) $default['deco'] ),
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) ) {
		continue;
	}

	$partners_impact_cards[] = $resolved;
}

if ( empty( $partners_impact_cards ) ) {
	$partners_impact_cards = $partners_impact_cards_defaults;
}

$partners_opportunity_cta_aria_label = bdc_get_acf_text(
	'partners_opportunity_cta_aria_label',
	'Share an opportunity',
	$partners_page_id
);
$partners_opportunity_cta_title_prefix = bdc_get_acf_text(
	'partners_opportunity_cta_title_prefix',
	'Have an Opportunity for',
	$partners_page_id
);
$partners_opportunity_cta_title_underline_word = bdc_get_acf_text(
	'partners_opportunity_cta_title_underline_word',
	'Bright Dreamers',
	$partners_page_id
);
$partners_opportunity_cta_title_underline_url = bdc_get_acf_image_url(
	'partners_opportunity_cta_title_underline',
	bdc_theme_asset_url( 'assets/images/partners-heading-underline-removebg-preview.png' ),
	$partners_page_id
);
$partners_opportunity_cta_title_suffix = bdc_get_acf_text(
	'partners_opportunity_cta_title_suffix',
	'?',
	$partners_page_id
);
$partners_opportunity_cta_bulb_url = bdc_get_acf_image_url(
	'partners_opportunity_cta_bulb',
	bdc_theme_asset_url( 'assets/images/partners-opportunity-bulb-removebg-preview.png' ),
	$partners_page_id
);
$partners_opportunity_cta_text = bdc_get_acf_text(
	'partners_opportunity_cta_text',
	'Do you have a space, project, challenge, skill, or community need that children could help explore creatively? We\'d love to hear your idea.',
	$partners_page_id
);
$partners_opportunity_cta_btn_text = bdc_get_acf_text(
	'partners_opportunity_cta_btn_text',
	'Share an Opportunity',
	$partners_page_id
);
$partners_opportunity_cta_btn_link = bdc_get_acf_link(
	'partners_opportunity_cta_btn_link',
	array(
		'title'  => 'Share an Opportunity',
		'url'    => bdc_page_url( 'partner-inquiry.html' ),
		'target' => '',
	),
	$partners_page_id
);
$partners_opportunity_cta_plane_url = bdc_get_acf_image_url(
	'partners_opportunity_cta_plane',
	bdc_theme_asset_url( 'assets/images/partners-opportunity-plane-removebg-preview.png' ),
	$partners_page_id
);

$partners_founding_title = bdc_get_acf_text(
	'partners_founding_title',
	'Founding Partners Coming Soon',
	$partners_page_id
);
$partners_founding_intro = bdc_get_acf_text(
	'partners_founding_intro',
	'We\'re building a community of changemakers. Will your organization be one of our founding partners?',
	$partners_page_id
);
$partners_founding_cards_defaults = array(
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/partners-founding-icon-org.jpeg' ),
		'title'      => 'Your Organization Here',
		'text'       => 'This space could feature your logo.',
		'color_slug' => 'purple',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/partners-founding-icon-founding-green.jpeg' ),
		'title'      => 'Founding Partner',
		'text'       => 'Join us in shaping a brighter future for kids.',
		'color_slug' => 'green',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/partners-founding-icon-community.jpeg' ),
		'title'      => 'Community Partner',
		'text'       => 'Together, we can inspire dreams and create impact.',
		'color_slug' => 'blue',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/partners-founding-icon-megaphone.jpeg' ),
		'title'      => 'Your Organization Here',
		'text'       => 'This space could feature your logo.',
		'color_slug' => 'pink',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/partners-founding-icon-stars.jpeg' ),
		'title'      => 'Founding Partner',
		'text'       => 'Be part of something meaningful from the start.',
		'color_slug' => 'gold',
	),
);
$partners_founding_color_slugs_allowed = array( 'purple', 'green', 'blue', 'pink', 'gold' );
$partners_founding_cards_raw           = bdc_get_acf_repeater( 'partners_founding_cards', $partners_founding_cards_defaults, $partners_page_id );
$partners_founding_cards               = array();

foreach ( $partners_founding_cards_raw as $index => $row ) {
	$default = $partners_founding_cards_defaults[ $index ] ?? array(
		'icon'       => '',
		'title'      => '',
		'text'       => '',
		'color_slug' => 'purple',
	);

	$title = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$text  = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';

	$color_slug = isset( $row['color_slug'] ) ? sanitize_key( (string) $row['color_slug'] ) : '';
	if ( ! in_array( $color_slug, $partners_founding_color_slugs_allowed, true ) ) {
		$color_slug = (string) $default['color_slug'];
	}

	$resolved = array(
		'icon'       => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'      => '' !== $title ? $title : (string) $default['title'],
		'text'       => '' !== $text ? $text : (string) $default['text'],
		'color_slug' => $color_slug,
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) ) {
		continue;
	}

	$partners_founding_cards[] = $resolved;
}

if ( empty( $partners_founding_cards ) ) {
	$partners_founding_cards = $partners_founding_cards_defaults;
}
?>
<main id="main-content">
      <?php
      $partners_headline_html = bdc_hero_lines_html(
        array(
          array( 'text' => $partners_hero_title_line_1, 'class' => 'vision-hero__title-line vision-hero__title-line--navy' ),
        )
      );
      if ( '' !== trim( $partners_hero_title_underline_word ) || '' !== trim( $partners_hero_title_line_2_suffix ) ) {
        $partners_headline_html .= '<span class="vision-hero__title-line vision-hero__title-line--pink">';
        if ( '' !== trim( $partners_hero_title_underline_word ) ) {
          $partners_headline_html .= '<span class="heading-underline heading-underline--partners">' . esc_html( $partners_hero_title_underline_word ) . '<img class="heading-underline__img" src="' . esc_url( $partners_hero_title_underline_url ) . '" alt="" width="140" height="12" decoding="async" aria-hidden="true" /></span>';
        }
        if ( '' !== trim( $partners_hero_title_line_2_suffix ) ) {
          $partners_headline_html .= esc_html( $partners_hero_title_line_2_suffix );
        }
        $partners_headline_html .= '</span>';
      }

      $partners_copy_html  = esc_html( $partners_hero_text_intro );
      if ( '' !== trim( $partners_hero_text_accent ) ) {
        $partners_copy_html .= ' <span class="vision-hero__accent vision-hero__accent--pink">' . esc_html( $partners_hero_text_accent ) . '</span>';
      }
      if ( '' !== trim( $partners_hero_text_outro ) ) {
        $partners_copy_html .= ' ' . esc_html( $partners_hero_text_outro );
      }

      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'        => 'vision-hero about-hero partners-hero',
          'aria_label'           => 'Partners',
          'section_label'        => $partners_hero_eyebrow,
          'headline_html'        => $partners_headline_html,
          'supporting_copy_html' => $partners_copy_html,
          'primary_cta_text'     => $partners_hero_primary_btn_text,
          'primary_cta_link'     => $partners_hero_primary_btn_link,
          'secondary_cta_text'   => $partners_hero_secondary_btn_text,
          'secondary_cta_link'   => $partners_hero_secondary_btn_link,
          'hero_image'           => $partners_hero_banner_url,
          'hero_image_mobile'    => $partners_hero_banner_mobile_url,
          'hero_image_alt'       => $partners_hero_banner_alt,
          'media_class'          => 'about-hero__media',
          'image_class'          => 'about-hero__banner',
        )
      );
      ?>

      <section class="partners-ways section-padding" aria-labelledby="partners-ways-title">
        <div class="site-container">
          <h2 class="partners-ways__title" id="partners-ways-title">
            <?php echo esc_html( $partners_ways_title ); ?>
            <svg
              class="partners-ways__title-icon"
              viewBox="0 0 24 24"
              width="22"
              height="22"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true"
            >
              <path
                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
              />
            </svg>
          </h2>

          <p class="partners-ways__intro">
            <?php echo esc_html( $partners_ways_intro ); ?>
          </p>

          <?php require get_template_directory() . '/template-parts/partners-ways-grid.php'; ?>
        </div>
      </section>

      <section class="partners-impact section-padding" aria-labelledby="partners-impact-title">
        <div class="site-container">
          <div class="partners-impact__box">
            <h2 class="partners-impact__title" id="partners-impact-title">
              <?php echo esc_html( $partners_impact_title ); ?>
              <svg
                class="partners-impact__title-star"
                viewBox="0 0 24 24"
                width="22"
                height="22"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path
                  d="M12 2l2.4 4.9 5.4.8-3.9 3.8.9 5.4L12 14.8 7.2 17l.9-5.4L4.2 7.7l5.4-.8L12 2z"
                />
              </svg>
            </h2>

            <p class="partners-impact__intro">
              <?php echo esc_html( $partners_impact_intro ); ?>
            </p>

            <?php require get_template_directory() . '/template-parts/partners-impact-grid.php'; ?>
          </div>
        </div>
      </section>

      <section class="partners-opportunity-cta section-padding" aria-label="<?php echo esc_attr( $partners_opportunity_cta_aria_label ); ?>">
        <div class="site-container partners-opportunity-cta__inner">
          <div class="partners-opportunity-cta__card">
            <div class="partners-opportunity-cta__lead">
              <h2 class="partners-opportunity-cta__title">
                <?php if ( '' !== trim( $partners_opportunity_cta_title_prefix ) ) : ?>
                <?php echo esc_html( $partners_opportunity_cta_title_prefix ); ?>
                <?php endif; ?>
                <?php if ( '' !== trim( $partners_opportunity_cta_title_underline_word ) ) : ?>
                <span class="heading-underline heading-underline--partners-cta">
                  <?php echo esc_html( $partners_opportunity_cta_title_underline_word ); ?>
                  <img
                    class="heading-underline__img"
                    src="<?php echo esc_url( $partners_opportunity_cta_title_underline_url ); ?>"
                    alt=""
                    width="180"
                    height="12"
                    decoding="async"
                    aria-hidden="true"
                  />
                </span>
                <?php endif; ?>
                <?php if ( '' !== trim( $partners_opportunity_cta_title_suffix ) ) : ?>
                <?php echo esc_html( $partners_opportunity_cta_title_suffix ); ?>
                <?php endif; ?>
              </h2>
              <?php if ( '' !== trim( $partners_opportunity_cta_bulb_url ) ) : ?>
              <img
                class="partners-opportunity-cta__bulb"
                src="<?php echo esc_url( $partners_opportunity_cta_bulb_url ); ?>"
                alt=""
                width="72"
                height="72"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <?php endif; ?>
            </div>

            <?php if ( '' !== trim( $partners_opportunity_cta_text ) ) : ?>
            <?php
            $partners_opportunity_cta_text_parts = preg_split( '/\?\s+/', $partners_opportunity_cta_text, 2 );
            $partners_opportunity_cta_text_main  = isset( $partners_opportunity_cta_text_parts[0] )
              ? trim( $partners_opportunity_cta_text_parts[0] )
              : trim( $partners_opportunity_cta_text );
            $partners_opportunity_cta_text_extra = isset( $partners_opportunity_cta_text_parts[1] )
              ? trim( $partners_opportunity_cta_text_parts[1] )
              : '';
            ?>
            <p class="partners-opportunity-cta__text">
              <?php echo esc_html( $partners_opportunity_cta_text_main ); ?>?
              <?php if ( '' !== $partners_opportunity_cta_text_extra ) : ?>
              <span class="partners-opportunity-cta__text-extra">
                <?php echo esc_html( $partners_opportunity_cta_text_extra ); ?>
              </span>
              <?php endif; ?>
            </p>
            <?php endif; ?>

            <?php if ( ! empty( $partners_opportunity_cta_btn_link['url'] ) && '' !== trim( $partners_opportunity_cta_btn_text ) ) : ?>
            <a class="btn btn--lg btn-hover partners-opportunity-cta__btn" href="<?php echo esc_url( $partners_opportunity_cta_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $partners_opportunity_cta_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
              <?php echo esc_html( $partners_opportunity_cta_btn_text ); ?>
              <svg
                class="btn__icon"
                viewBox="0 0 24 24"
                width="18"
                height="18"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path d="M5 12h14M13 6l6 6-6 6" />
              </svg>
            </a>
            <?php endif; ?>

            <?php if ( '' !== trim( $partners_opportunity_cta_plane_url ) ) : ?>
            <img
              class="partners-opportunity-cta__plane"
              src="<?php echo esc_url( $partners_opportunity_cta_plane_url ); ?>"
              alt=""
              width="120"
              height="80"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <?php endif; ?>
          </div>
        </div>
      </section>

      <section class="partners-founding section-padding" aria-labelledby="partners-founding-title">
        <div class="site-container">
          <h2 class="partners-founding__title" id="partners-founding-title">
            <?php echo esc_html( $partners_founding_title ); ?>
            <svg
              class="partners-founding__title-icon"
              viewBox="0 0 24 24"
              width="22"
              height="22"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true"
            >
              <path
                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
              />
            </svg>
          </h2>

          <p class="partners-founding__intro">
            <?php echo esc_html( $partners_founding_intro ); ?>
          </p>

          <?php require get_template_directory() . '/template-parts/partners-founding-grid.php'; ?>
        </div>
      </section>

      <!-- More partner sections can be added here -->
    </main>
<?php
get_footer();
