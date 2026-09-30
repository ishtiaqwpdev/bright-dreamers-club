<?php
/**
 * For Parents page template — converted from for-parents.html.
 *
 * Template Name: For Parents
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$for_parents_page_id = get_queried_object_id();

$for_parents_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
$for_parents_fit_lazy_placeholder    = $for_parents_hero_lazy_placeholder;

$for_parents_hero_aria_label = bdc_get_acf_text(
	'for_parents_hero_aria_label',
	'For Parents',
	$for_parents_page_id
);
$for_parents_hero_title_line_1 = bdc_get_acf_text(
	'for_parents_hero_title_line_1',
	'For',
	$for_parents_page_id
);
$for_parents_hero_title_line_2 = bdc_get_acf_text(
	'for_parents_hero_title_line_2',
	'Parents',
	$for_parents_page_id
);
$for_parents_hero_subhead_intro = bdc_get_acf_text(
	'for_parents_hero_subhead_intro',
	'You know your child best. We\'re here to help their ideas grow. Bright Dreamers is a small, intentional community where children with ideas, curiosity, and a desire to make a difference come together to explore, create, and turn their ideas into real projects.',
	$for_parents_page_id
);
$for_parents_hero_subhead_accent_pink = bdc_get_acf_text(
	'for_parents_hero_subhead_accent_pink',
	'',
	$for_parents_page_id
);
$for_parents_hero_subhead_accent_green = bdc_get_acf_text(
	'for_parents_hero_subhead_accent_green',
	'',
	$for_parents_page_id
);
$for_parents_hero_text_intro = bdc_get_acf_text(
	'for_parents_hero_text_intro',
	'',
	$for_parents_page_id
);
$for_parents_hero_text_accent_cyan = bdc_get_acf_text(
	'for_parents_hero_text_accent_cyan',
	'',
	$for_parents_page_id
);
$for_parents_hero_primary_btn_text = bdc_get_acf_text(
	'for_parents_hero_primary_btn_text',
	'Apply for Your Child',
	$for_parents_page_id
);
$for_parents_hero_primary_btn_link = bdc_get_acf_link(
	'for_parents_hero_primary_btn_link',
	array(
		'title'  => 'Apply for Your Child',
		'url'    => bdc_page_url( 'get-involved.html' ),
		'target' => '',
	),
	$for_parents_page_id
);
$for_parents_hero_secondary_btn_text = bdc_get_acf_text(
	'for_parents_hero_secondary_btn_text',
	'See Our Vision',
	$for_parents_page_id
);
$for_parents_hero_secondary_btn_link = bdc_get_acf_link(
	'for_parents_hero_secondary_btn_link',
	array(
		'title'  => 'See Our Vision',
		'url'    => bdc_page_url( 'our-vision.html' ),
		'target' => '',
	),
	$for_parents_page_id
);
$for_parents_hero_banner_theme_path = 'assets/images/for-parents-hero-banner.png';
$for_parents_hero_banner_url        = bdc_theme_asset_url( $for_parents_hero_banner_theme_path );
$for_parents_hero_banner_ver        = bdc_asset_version( $for_parents_hero_banner_theme_path );
if ( $for_parents_hero_banner_ver ) {
	$for_parents_hero_banner_url = add_query_arg( 'v', $for_parents_hero_banner_ver, $for_parents_hero_banner_url );
}
$for_parents_hero_banner_mobile_theme_path = 'assets/images/for-parents-hero-banner-mobile.jpg';
$for_parents_hero_banner_mobile_url        = bdc_theme_asset_url( $for_parents_hero_banner_mobile_theme_path );
$for_parents_hero_banner_mobile_ver        = bdc_asset_version( $for_parents_hero_banner_mobile_theme_path );
if ( $for_parents_hero_banner_mobile_ver ) {
	$for_parents_hero_banner_mobile_url = add_query_arg( 'v', $for_parents_hero_banner_mobile_ver, $for_parents_hero_banner_mobile_url );
}
$for_parents_hero_banner_alt = bdc_get_acf_text(
	'for_parents_hero_banner_alt',
	'A mother and son learning together at a desk with books and colored pencils',
	$for_parents_page_id
);

$for_parents_expect_title = bdc_get_acf_text(
	'for_parents_expect_title',
	'What Parents Can Expect',
	$for_parents_page_id
);
$for_parents_expect_deco_left_url = bdc_get_acf_image_url(
	'for_parents_expect_deco_left',
	bdc_theme_asset_url( 'assets/images/for-parents-expect-stars.png' ),
	$for_parents_page_id
);
$for_parents_expect_deco_right_url = bdc_get_acf_image_url(
	'for_parents_expect_deco_right',
	bdc_theme_asset_url( 'assets/images/for-parents-expect-stars.png' ),
	$for_parents_page_id
);
$for_parents_expect_cards_defaults = array(
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/for-parents-expect-icon-led.png' ),
		'title' => 'Child-Led & Idea-Focused',
		'text'  => 'Children bring their ideas, interests, and questions. We help them explore and take action.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/for-parents-expect-icon-creative.png' ),
		'title' => 'Creative Exploration',
		'text'  => 'Through hands-on projects, creative activities, and real-world experiences, children discover what excites them.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/for-parents-expect-icon-mentors.png' ),
		'title' => 'Caring Mentors & Volunteers',
		'text'  => 'Our mentors and volunteers guide, encourage, and support children as their ideas grow.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/for-parents-expect-icon-community.png' ),
		'title' => 'Community Connection',
		'text'  => 'Children collaborate with others, build confidence, and learn the value of giving back.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/for-parents-expect-icon-growth.png' ),
		'title' => 'Growth That Lasts',
		'text'  => 'We focus on building curiosity, creativity, kindness, and the confidence to make a difference.',
	),
);
$for_parents_expect_cards_raw = bdc_get_acf_repeater( 'for_parents_expect_cards', $for_parents_expect_cards_defaults, $for_parents_page_id );
$for_parents_expect_cards     = array();

foreach ( $for_parents_expect_cards_raw as $index => $row ) {
	$default = $for_parents_expect_cards_defaults[ $index ] ?? array(
		'icon'  => '',
		'title' => '',
		'text'  => '',
	);

	$title = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$text  = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';

	$resolved = array(
		'icon'  => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title' => '' !== $title ? $title : (string) $default['title'],
		'text'  => '' !== $text ? $text : (string) $default['text'],
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) ) {
		continue;
	}

	$for_parents_expect_cards[] = $resolved;
}

if ( empty( $for_parents_expect_cards ) ) {
	$for_parents_expect_cards = $for_parents_expect_cards_defaults;
}

$for_parents_fit_aria_label = bdc_get_acf_text(
	'for_parents_fit_aria_label',
	'Is Bright Dreamers right for your child',
	$for_parents_page_id
);
$for_parents_fit_pink_title = bdc_get_acf_text(
	'for_parents_fit_pink_title',
	'Is Bright Dreamers Right for My Child?',
	$for_parents_page_id
);
$for_parents_fit_pink_intro = bdc_get_acf_text(
	'for_parents_fit_pink_intro',
	'Bright Dreamers may be a wonderful fit for a child who:',
	$for_parents_page_id
);
$for_parents_fit_list_defaults = array(
	array( 'item_text' => 'has ideas they love talking about' ),
	array( 'item_text' => 'wants to share a talent or discover one' ),
	array( 'item_text' => 'enjoys making, creating, building, helping, or exploring' ),
	array( 'item_text' => 'enjoys contributing to a group' ),
	array( 'item_text' => 'is curious and asks lots of questions' ),
	array( 'item_text' => 'would like to turn an idea into something real' ),
);
$for_parents_fit_list_raw   = bdc_get_acf_repeater( 'for_parents_fit_list_items', $for_parents_fit_list_defaults, $for_parents_page_id );
$for_parents_fit_list_items = array();

foreach ( $for_parents_fit_list_raw as $index => $row ) {
	$default   = $for_parents_fit_list_defaults[ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$item_text = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $item_text ) ) {
		continue;
	}

	$for_parents_fit_list_items[] = $item_text;
}

if ( empty( $for_parents_fit_list_items ) ) {
	foreach ( $for_parents_fit_list_defaults as $default_item ) {
		$for_parents_fit_list_items[] = (string) $default_item['item_text'];
	}
}

$for_parents_fit_jar_url = bdc_get_acf_image_url(
	'for_parents_fit_jar',
	bdc_theme_asset_url( 'assets/images/for-parents-fit-jar.png' ),
	$for_parents_page_id
);
$for_parents_fit_quote_text = bdc_get_acf_text(
	'for_parents_fit_quote_text',
	'Children do not need to arrive with a polished talent or a perfect idea. Curiosity, imagination, kindness, and a willingness to participate are wonderful places to begin.',
	$for_parents_page_id
);

$for_parents_info_experience_title_underline = bdc_get_acf_text(
	'for_parents_info_experience_title_underline',
	'Experience',
	$for_parents_page_id
);
$for_parents_info_experience_title_suffix = bdc_get_acf_text(
	'for_parents_info_experience_title_suffix',
	'Information',
	$for_parents_page_id
);
$for_parents_info_features_defaults = array(
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/for-parents-info-icon-calendar.png' ),
		'title' => 'Project-Based Experiences',
		'text'  => 'Children participate in projects that match their ideas, interests, and current opportunities.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/for-parents-info-icon-community.png' ),
		'title' => 'Small & Intentional Community',
		'text'  => 'We keep groups small so every child is known, supported, and involved.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/for-parents-info-icon-family.png' ),
		'title' => 'Family Partnership',
		'text'  => 'Parents and guardians are important partners in their child\'s journey with Bright Dreamers.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/for-parents-info-icon-safe.png' ),
		'title' => 'Safe, Respectful, and Encouraging Environment',
		'text'  => 'Every child is valued, heard, and treated with respect.',
	),
);
$for_parents_info_features_raw = bdc_get_acf_repeater( 'for_parents_info_features', $for_parents_info_features_defaults, $for_parents_page_id );
$for_parents_info_features     = array();

foreach ( $for_parents_info_features_raw as $index => $row ) {
	$default = $for_parents_info_features_defaults[ $index ] ?? array(
		'icon'  => '',
		'title' => '',
		'text'  => '',
	);

	$title = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$text  = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';

	$resolved = array(
		'icon'  => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title' => '' !== $title ? $title : (string) $default['title'],
		'text'  => '' !== $text ? $text : (string) $default['text'],
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) ) {
		continue;
	}

	$for_parents_info_features[] = $resolved;
}

if ( empty( $for_parents_info_features ) ) {
	$for_parents_info_features = $for_parents_info_features_defaults;
}

$for_parents_info_experience_footer_line_1 = bdc_get_acf_text(
	'for_parents_info_experience_footer_line_1',
	'Participation is free. Space is limited and based on fit with current projects.',
	$for_parents_page_id
);
$for_parents_info_experience_footer_line_2 = bdc_get_acf_text(
	'for_parents_info_experience_footer_line_2',
	'Children are welcomed based on their interests, ideas, and readiness to participate.',
	$for_parents_page_id
);
$for_parents_info_experience_heart_url = bdc_get_acf_image_url(
	'for_parents_info_experience_heart',
	bdc_theme_asset_url( 'assets/images/for-parents-info-heart.png' ),
	$for_parents_page_id
);
$for_parents_info_start_title_prefix = bdc_get_acf_text(
	'for_parents_info_start_title_prefix',
	'How to',
	$for_parents_page_id
);
$for_parents_info_start_title_underline = bdc_get_acf_text(
	'for_parents_info_start_title_underline',
	'Get',
	$for_parents_page_id
);
$for_parents_info_start_title_suffix = bdc_get_acf_text(
	'for_parents_info_start_title_suffix',
	'Started',
	$for_parents_page_id
);
$for_parents_info_steps_defaults = array(
	array(
		'num_slug' => 'pink',
		'title'    => 'Apply for Your Child',
		'text'     => 'Tell us about your child\'s interests, ideas, and what excites them.',
	),
	array(
		'num_slug' => 'purple',
		'title'    => 'We Review Applications',
		'text'     => 'We carefully review each application to find the best fit for current projects.',
	),
	array(
		'num_slug' => 'green',
		'title'    => 'We Connect With You',
		'text'     => 'If there\'s a good match, we\'ll reach out to learn more and guide you through next steps.',
	),
);
$for_parents_info_num_slugs_allowed = array( 'pink', 'purple', 'green' );
$for_parents_info_steps_raw         = bdc_get_acf_repeater( 'for_parents_info_steps', $for_parents_info_steps_defaults, $for_parents_page_id );
$for_parents_info_steps           = array();

foreach ( $for_parents_info_steps_raw as $index => $row ) {
	$default = $for_parents_info_steps_defaults[ $index ] ?? array(
		'num_slug' => 'pink',
		'title'    => '',
		'text'     => '',
	);

	$title    = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$text     = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';
	$num_slug = isset( $row['num_slug'] ) ? sanitize_key( (string) $row['num_slug'] ) : '';

	if ( ! in_array( $num_slug, $for_parents_info_num_slugs_allowed, true ) ) {
		$num_slug = (string) $default['num_slug'];
	}

	$resolved = array(
		'num_slug' => $num_slug,
		'title'    => '' !== $title ? $title : (string) $default['title'],
		'text'     => '' !== $text ? $text : (string) $default['text'],
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) ) {
		continue;
	}

	$for_parents_info_steps[] = $resolved;
}

if ( empty( $for_parents_info_steps ) ) {
	$for_parents_info_steps = $for_parents_info_steps_defaults;
}

$for_parents_info_plane_url = bdc_get_acf_image_url(
	'for_parents_info_plane',
	bdc_theme_asset_url( 'assets/images/for-parents-info-plane.png' ),
	$for_parents_page_id
);
$for_parents_info_start_btn_text = bdc_get_acf_text(
	'for_parents_info_start_btn_text',
	'Apply for Your Child',
	$for_parents_page_id
);
$for_parents_info_start_btn_link = bdc_get_acf_link(
	'for_parents_info_start_btn_link',
	array(
		'title'  => 'Apply for Your Child',
		'url'    => bdc_page_url( 'get-involved.html' ),
		'target' => '',
	),
	$for_parents_page_id
);

$for_parents_cta_aria_label = bdc_get_acf_text(
	'for_parents_cta_aria_label',
	'Contact us',
	$for_parents_page_id
);
$for_parents_cta_envelope_url = bdc_get_acf_image_url(
	'for_parents_cta_envelope',
	bdc_theme_asset_url( 'assets/images/for-parents-cta-envelope.png' ),
	$for_parents_page_id
);
$for_parents_cta_title = bdc_get_acf_text(
	'for_parents_cta_title',
	'We\'re here to support you and your child.',
	$for_parents_page_id
);
$for_parents_cta_text = bdc_get_acf_text(
	'for_parents_cta_text',
	'Have questions? We\'d love to help.',
	$for_parents_page_id
);
$for_parents_cta_btn_text = bdc_get_acf_text(
	'for_parents_cta_btn_text',
	'Contact Us',
	$for_parents_page_id
);
$for_parents_cta_btn_link = bdc_get_acf_link(
	'for_parents_cta_btn_link',
	array(
		'title'  => 'Contact Us',
		'url'    => bdc_page_url( 'contact.html' ),
		'target' => '',
	),
	$for_parents_page_id
);
?>
    <main id="main-content">
      <?php
      // Always one plain navy paragraph — no <br>, no accent spans/colors.
      $for_parents_copy = 'You know your child best. We\'re here to help their ideas grow. Bright Dreamers is a small, intentional community where children with ideas, curiosity, and a desire to make a difference come together to explore, create, and turn their ideas into real projects.';

      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'          => 'for-parents-hero about-hero',
          'aria_label'             => $for_parents_hero_aria_label,
          'headline_html'          => bdc_hero_lines_html(
            array(
              array( 'text' => $for_parents_hero_title_line_1, 'class' => 'for-parents-hero__title-line for-parents-hero__title-line--pink' ),
              array( 'text' => $for_parents_hero_title_line_2, 'class' => 'for-parents-hero__title-line for-parents-hero__title-line--navy' ),
            )
          ),
          'supporting_copy'        => $for_parents_copy,
          'supporting_copy_html'   => '',
          'primary_cta_text'       => $for_parents_hero_primary_btn_text,
          'primary_cta_link'       => $for_parents_hero_primary_btn_link,
          'secondary_cta_text'     => $for_parents_hero_secondary_btn_text,
          'secondary_cta_link'     => $for_parents_hero_secondary_btn_link,
          'hero_image'             => $for_parents_hero_banner_url,
          'hero_image_mobile'      => $for_parents_hero_banner_mobile_url,
          'hero_image_alt'         => $for_parents_hero_banner_alt,
          'media_class'            => 'about-hero__media',
          'image_class'            => 'about-hero__banner',
        )
      );
      ?>
      <section class="for-parents-expect section-padding" aria-labelledby="for-parents-expect-title">
        <div class="for-parents-expect__wrap">
          <img
            class="for-parents-expect__deco for-parents-expect__deco--left"
            src="<?php echo esc_url( $for_parents_expect_deco_left_url ); ?>"
            alt=""
            width="56"
            height="120"
            loading="lazy"
            decoding="async"
            aria-hidden="true"
          />

          <div class="site-container for-parents-expect__inner">
            <h2 class="for-parents-expect__title" id="for-parents-expect-title">
              <?php echo esc_html( $for_parents_expect_title ); ?>
              <svg
                class="for-parents-expect__title-icon"
                viewBox="0 0 24 24"
                width="22"
                height="22"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                aria-hidden="true"
              >
                <path
                  d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                />
              </svg>
            </h2>

            <?php require get_template_directory() . '/template-parts/for-parents-expect-grid.php'; ?>
          </div>

          <img
            class="for-parents-expect__deco for-parents-expect__deco--right"
            src="<?php echo esc_url( $for_parents_expect_deco_right_url ); ?>"
            alt=""
            width="56"
            height="120"
            loading="lazy"
            decoding="async"
            aria-hidden="true"
          />
        </div>
      </section>

      <section class="for-parents-fit section-padding" aria-label="<?php echo esc_attr( $for_parents_fit_aria_label ); ?>">
        <div class="site-container">
            <?php require get_template_directory() . '/template-parts/for-parents-fit-section.php'; ?>
        </div>
      </section>

      <section class="for-parents-info section-padding" aria-labelledby="for-parents-info-experience-title">
        <div class="site-container">
            <?php require get_template_directory() . '/template-parts/for-parents-info-grid.php'; ?>
        </div>
      </section>

      <section class="for-parents-cta" aria-label="<?php echo esc_attr( $for_parents_cta_aria_label ); ?>">
        <div class="site-container for-parents-cta__inner">
          <div class="for-parents-cta__card">
            <img
              class="for-parents-cta__envelope"
              src="<?php echo esc_url( $for_parents_cta_envelope_url ); ?>"
              alt=""
              width="185"
              height="140"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />

            <div class="for-parents-cta__content">
              <?php if ( '' !== trim( $for_parents_cta_title ) ) : ?>
              <h2 class="for-parents-cta__title">
                <?php echo esc_html( $for_parents_cta_title ); ?>
              </h2>
              <?php endif; ?>
              <?php if ( '' !== trim( $for_parents_cta_text ) ) : ?>
              <p class="for-parents-cta__text"><?php echo esc_html( $for_parents_cta_text ); ?></p>
              <?php endif; ?>
            </div>

            <div class="for-parents-cta__actions">
              <?php if ( ! empty( $for_parents_cta_btn_link['url'] ) && '' !== trim( $for_parents_cta_btn_text ) ) : ?>
              <a
                class="btn btn--outline btn--lg btn-hover for-parents-cta__btn"
                href="<?php echo esc_url( $for_parents_cta_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $for_parents_cta_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
              >
                <?php echo esc_html( $for_parents_cta_btn_text ); ?>
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

              <svg
                class="for-parents-cta__star"
                viewBox="0 0 24 24"
                width="28"
                height="28"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path
                  d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                />
              </svg>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
