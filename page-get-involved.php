<?php
/**
 * Get Involved page template — converted from get-involved.html.
 *
 * Template Name: Get Involved
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$get_involved_page_id = get_queried_object_id();

$get_involved_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$get_involved_hero_eyebrow = bdc_get_acf_text(
	'get_involved_hero_eyebrow',
	'',
	$get_involved_page_id
);
$get_involved_hero_title_line_1 = bdc_get_acf_text(
	'get_involved_hero_title_line_1',
	'Get Involved',
	$get_involved_page_id
);
$get_involved_hero_title_line_2 = bdc_get_acf_text(
	'get_involved_hero_title_line_2',
	'Make a Brighter Tomorrow',
	$get_involved_page_id
);
$get_involved_hero_text = bdc_get_acf_text(
	'get_involved_hero_text',
	'We\'re building a community where young ideas are heard, supported and turned into real projects that help others. Your time, skills, resources, and support help open doors for children with ideas and the desire to make a difference.',
	$get_involved_page_id
);
/* Prefer the new hero copy when ACF still has the old split title/body fields. */
if ( 'Get' === trim( (string) $get_involved_hero_title_line_1 ) || 'Involved' === trim( (string) $get_involved_hero_title_line_2 ) ) {
	$get_involved_hero_title_line_1 = 'Get Involved';
	$get_involved_hero_title_line_2 = 'Make a Brighter Tomorrow';
}
/* Remove trailing periods on hero title lines. */
$get_involved_hero_title_line_1 = rtrim( (string) $get_involved_hero_title_line_1, ". \t" );
$get_involved_hero_title_line_2 = rtrim( (string) $get_involved_hero_title_line_2, ". \t" );
$get_involved_hero_text_legacy_intro = bdc_get_acf_text(
	'get_involved_hero_text_intro',
	'',
	$get_involved_page_id
);
if (
	'' === trim( (string) $get_involved_hero_text )
	|| false !== strpos( (string) $get_involved_hero_text_legacy_intro, 'young ideas are heard,' )
) {
	$get_involved_hero_text = 'We\'re building a community where young ideas are heard, supported and turned into real projects that help others. Your time, skills, resources, and support help open doors for children with ideas and the desire to make a difference.';
}
$get_involved_hero_primary_btn_text = bdc_get_acf_text(
	'get_involved_hero_primary_btn_text',
	'Volunteer With Us',
	$get_involved_page_id
);
$get_involved_hero_primary_btn_link = bdc_get_acf_link(
	'get_involved_hero_primary_btn_link',
	array(
		'title'  => 'Volunteer With Us',
		'url'    => bdc_page_url( 'volunteer-application.html' ),
		'target' => '',
	),
	$get_involved_page_id
);
$get_involved_hero_secondary_btn_text = bdc_get_acf_text(
	'get_involved_hero_secondary_btn_text',
	'See Our Vision',
	$get_involved_page_id
);
$get_involved_hero_secondary_btn_link = bdc_get_acf_link(
	'get_involved_hero_secondary_btn_link',
	array(
		'title'  => 'See Our Vision',
		'url'    => bdc_page_url( 'our-vision.html' ),
		'target' => '',
	),
	$get_involved_page_id
);
$get_involved_hero_banner_theme_path = 'assets/images/get-involved-hero-banner.jpeg';
$get_involved_hero_banner_url        = bdc_theme_asset_url( $get_involved_hero_banner_theme_path );
$get_involved_hero_banner_ver        = bdc_asset_version( $get_involved_hero_banner_theme_path );
if ( $get_involved_hero_banner_ver ) {
	$get_involved_hero_banner_url = add_query_arg( 'v', $get_involved_hero_banner_ver, $get_involved_hero_banner_url );
}
$get_involved_hero_banner_mobile_theme_path = 'assets/images/get-involved-hero-banner-mobile.jpg';
$get_involved_hero_banner_mobile_url        = bdc_theme_asset_url( $get_involved_hero_banner_mobile_theme_path );
$get_involved_hero_banner_mobile_ver        = bdc_asset_version( $get_involved_hero_banner_mobile_theme_path );
if ( $get_involved_hero_banner_mobile_ver ) {
	$get_involved_hero_banner_mobile_url = add_query_arg( 'v', $get_involved_hero_banner_mobile_ver, $get_involved_hero_banner_mobile_url );
}
$get_involved_hero_banner_alt = bdc_get_acf_text(
	'get_involved_hero_banner_alt',
	'Three Bright Dreamers with signs for a kinder brighter world and stronger communities',
	$get_involved_page_id
);

$get_involved_ways_title = bdc_get_acf_text(
	'get_involved_ways_title',
	'How You Can Get Involved',
	$get_involved_page_id
);
$get_involved_ways_cards_defaults = array(
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/get-involved-icon-time.jpeg' ),
		'title'      => 'Share Your Time',
		'text'       => 'Volunteer your time and help children explore, create, and bring their ideas to life.',
		'link_text'  => 'Learn More',
		'link'       => array(
			'title'  => 'Learn More',
			'url'    => bdc_page_url( 'volunteer-application.html' ),
			'target' => '',
		),
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/get-involved-icon-skills.jpeg' ),
		'title'      => 'Share Your Skills',
		'text'       => 'Use your talents and experience to mentor, teach, or guide children on their projects.',
		'link_text'  => 'Learn More',
		'link'       => array(
			'title'  => 'Learn More',
			'url'    => '#skills',
			'target' => '',
		),
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/get-involved-icon-door.jpeg' ),
		'title'      => 'Open a Door',
		'text'       => 'Offer spaces, opportunities, connections, or real-world experiences that inspire young minds.',
		'link_text'  => 'Learn More',
		'link'       => array(
			'title'  => 'Learn More',
			'url'    => '#open-a-door',
			'target' => '',
		),
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/get-involved-icon-support.jpeg' ),
		'title'      => 'Support a Project',
		'text'       => 'Help fund materials, resources, and experiences that make child-led projects possible.',
		'link_text'  => 'Learn More',
		'link'       => array(
			'title'  => 'Learn More',
			'url'    => bdc_page_url( 'donation-interest.html' ),
			'target' => '',
		),
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/get-involved-icon-spread.jpeg' ),
		'title'      => 'Spread the Word',
		'text'       => 'Tell others about Bright Dreamers and help more children with ideas find us.',
		'link_text'  => 'Learn More',
		'link'       => array(
			'title'  => 'Learn More',
			'url'    => '#spread-the-word',
			'target' => '',
		),
	),
);
$get_involved_ways_cards_raw = bdc_get_acf_repeater( 'get_involved_ways_cards', $get_involved_ways_cards_defaults, $get_involved_page_id );
$get_involved_ways_cards     = array();

foreach ( $get_involved_ways_cards_raw as $index => $row ) {
	$default = $get_involved_ways_cards_defaults[ $index ] ?? array(
		'icon'      => '',
		'title'     => '',
		'text'      => '',
		'link_text' => 'Learn More',
		'link'      => array(
			'title'  => 'Learn More',
			'url'    => '',
			'target' => '',
		),
	);

	$title     = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$text      = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';
	$link_text = isset( $row['link_text'] ) ? trim( (string) $row['link_text'] ) : '';

	$resolved = array(
		'icon'      => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'     => '' !== $title ? $title : (string) $default['title'],
		'text'      => '' !== $text ? $text : (string) $default['text'],
		'link_text' => '' !== $link_text ? $link_text : (string) $default['link_text'],
		'link'      => bdc_resolve_acf_link_value( $row['link'] ?? null, $default['link'] ),
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) ) {
		continue;
	}

	$get_involved_ways_cards[] = $resolved;
}

if ( empty( $get_involved_ways_cards ) ) {
	$get_involved_ways_cards = $get_involved_ways_cards_defaults;
}

$get_involved_impact_title_line_1 = bdc_get_acf_text(
	'get_involved_impact_title_line_1',
	'Help Us Make',
	$get_involved_page_id
);
$get_involved_impact_title_line_2 = bdc_get_acf_text(
	'get_involved_impact_title_line_2',
	'Young Ideas Possible',
	$get_involved_page_id
);
$get_involved_impact_intro = bdc_get_acf_text(
	'get_involved_impact_intro',
	'Bright Dreamers is intentionally small and project-based. We welcome children who are curious, motivated, and excited to share their ideas and work together.',
	$get_involved_page_id
);
$get_involved_impact_note_text = bdc_get_acf_text(
	'get_involved_impact_note_text',
	'We don\'t measure success by how many we reach—but by the impact we create together, one idea at a time.',
	$get_involved_page_id
);
$get_involved_impact_timeline_defaults = array(
	array(
		'icon_mode'   => 'heart',
		'icon'        => '',
		'color_slug'  => 'pink',
		'title'       => 'Children Lead the Way',
		'text'        => 'We open our doors to children with ideas, creativity, and the desire to make a difference.',
	),
	array(
		'icon_mode'   => 'image',
		'icon'        => bdc_theme_asset_url( 'assets/images/get-involved-timeline-together-removebg-preview.png' ),
		'color_slug'  => 'pink',
		'title'       => 'We Build Together',
		'text'        => 'Families, volunteers, and community partners bring their time, skills, and resources to bring ideas to life.',
	),
	array(
		'icon_mode'   => 'image',
		'icon'        => bdc_theme_asset_url( 'assets/images/get-involved-timeline-grow-removebg-preview.png' ),
		'color_slug'  => 'green',
		'title'       => 'Ideas Become Real',
		'text'        => 'Through collaboration, children turn their ideas into projects that inspire and help others.',
	),
	array(
		'icon_mode'   => 'image',
		'icon'        => bdc_theme_asset_url( 'assets/images/get-involved-timeline-community-removebg-preview.png' ),
		'color_slug'  => 'blue',
		'title'       => 'A Stronger Community',
		'text'        => 'Every project creates a ripple effect of kindness, learning, and positive change.',
	),
);
$get_involved_impact_color_slugs_allowed = array( 'pink', 'green', 'blue' );
$get_involved_impact_icon_modes_allowed  = array( 'heart', 'image' );
$get_involved_impact_timeline_raw        = bdc_get_acf_repeater( 'get_involved_impact_timeline', $get_involved_impact_timeline_defaults, $get_involved_page_id );
$get_involved_impact_timeline            = array();

foreach ( $get_involved_impact_timeline_raw as $index => $row ) {
	$default = $get_involved_impact_timeline_defaults[ $index ] ?? array(
		'icon_mode'  => 'image',
		'icon'       => '',
		'color_slug' => 'pink',
		'title'      => '',
		'text'       => '',
	);

	$title      = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$text       = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';
	$icon_mode  = isset( $row['icon_mode'] ) ? sanitize_key( (string) $row['icon_mode'] ) : '';
	$color_slug = isset( $row['color_slug'] ) ? sanitize_key( (string) $row['color_slug'] ) : '';

	if ( ! in_array( $icon_mode, $get_involved_impact_icon_modes_allowed, true ) ) {
		$icon_mode = (string) $default['icon_mode'];
	}

	if ( ! in_array( $color_slug, $get_involved_impact_color_slugs_allowed, true ) ) {
		$color_slug = (string) $default['color_slug'];
	}

	$resolved = array(
		'icon_mode'  => $icon_mode,
		'icon'       => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'color_slug' => $color_slug,
		'title'      => '' !== $title ? $title : (string) $default['title'],
		'text'       => '' !== $text ? $text : (string) $default['text'],
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) ) {
		continue;
	}

	$get_involved_impact_timeline[] = $resolved;
}

if ( empty( $get_involved_impact_timeline ) ) {
	$get_involved_impact_timeline = $get_involved_impact_timeline_defaults;
}

$get_involved_impact_illustration_url = bdc_get_acf_image_url(
	'get_involved_impact_illustration',
	bdc_theme_asset_url( 'assets/images/get-involved-lightbulb-removebg-preview.png' ),
	$get_involved_page_id
);
$get_involved_impact_illustration_alt = bdc_get_acf_text(
	'get_involved_impact_illustration_alt',
	'Children working together on a bright idea',
	$get_involved_page_id
);

$get_involved_partner_cta_envelope_url = bdc_get_acf_image_url(
	'get_involved_partner_cta_envelope',
	bdc_theme_asset_url( 'assets/images/get-involved-cta-envelope-removebg-preview.png' ),
	$get_involved_page_id
);
$get_involved_partner_cta_title = bdc_get_acf_text(
	'get_involved_partner_cta_title',
	'Have an idea for a partnership or want to support a child\'s project?',
	$get_involved_page_id
);
$get_involved_partner_cta_sub = bdc_get_acf_text(
	'get_involved_partner_cta_sub',
	'We\'d love to hear from you.',
	$get_involved_page_id
);
$get_involved_partner_cta_btn_text = bdc_get_acf_text(
	'get_involved_partner_cta_btn_text',
	'Contact Us',
	$get_involved_page_id
);
$get_involved_partner_cta_btn_link = bdc_get_acf_link(
	'get_involved_partner_cta_btn_link',
	array(
		'title'  => 'Contact Us',
		'url'    => bdc_page_url( 'partner-inquiry.html' ),
		'target' => '',
	),
	$get_involved_page_id
);
$get_involved_partner_cta_deco_url = bdc_get_acf_image_url(
	'get_involved_partner_cta_deco',
	bdc_theme_asset_url( 'assets/images/get-involved-cta-deco-removebg-preview.png' ),
	$get_involved_page_id
);
?>
    <main id="main-content">
      <?php
      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'            => 'get-involved-hero about-hero',
          'aria_label'               => 'Get Involved',
          'section_label'            => $get_involved_hero_eyebrow,
          'headline_html'            => bdc_hero_lines_html(
            array(
              array( 'text' => $get_involved_hero_title_line_1, 'class' => 'get-involved-hero__title-line get-involved-hero__title-line--navy' ),
              array( 'text' => $get_involved_hero_title_line_2, 'class' => 'get-involved-hero__title-line get-involved-hero__title-line--pink' ),
            )
          ),
          'supporting_copy'          => $get_involved_hero_text,
          'primary_cta_text'         => $get_involved_hero_primary_btn_text,
          'primary_cta_link'         => $get_involved_hero_primary_btn_link,
          'secondary_cta_text'       => $get_involved_hero_secondary_btn_text,
          'secondary_cta_link'       => $get_involved_hero_secondary_btn_link,
          'hero_image'               => $get_involved_hero_banner_url,
          'hero_image_mobile'        => $get_involved_hero_banner_mobile_url,
          'hero_image_alt'           => $get_involved_hero_banner_alt,
          'media_class'              => 'about-hero__media',
          'image_class'              => 'about-hero__banner',
          'primary_cta_show_icon'    => true,
          'secondary_cta_show_heart' => true,
          'inner_data_attrs'         => array(
            'data-bdc-hero-text-col'   => '36',
            'data-bdc-hero-banner-col' => '64',
          ),
        )
      );
      ?>

      <section class="get-involved-ways section-padding" aria-labelledby="get-involved-ways-title">
        <div class="site-container">
            <h2 class="get-involved-ways__title" id="get-involved-ways-title">
              <?php echo esc_html( $get_involved_ways_title ); ?>
              <svg
                class="get-involved-ways__title-icon"
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

            <?php require get_template_directory() . '/template-parts/get-involved-ways-grid.php'; ?>
        </div>
      </section>

      <section class="get-involved-impact section-padding" aria-labelledby="get-involved-impact-title">
        <div class="site-container">
          <div class="get-involved-impact__card bdc-balance-banner">
            <div class="get-involved-impact__inner bdc-balance-banner__row">
              <div class="get-involved-impact__copy bdc-balance-banner__copy">
                <h2 class="get-involved-impact__title" id="get-involved-impact-title">
                  <?php if ( '' !== trim( $get_involved_impact_title_line_1 ) ) : ?>
                  <span class="get-involved-impact__title-line get-involved-impact__title-line--navy"><?php echo esc_html( $get_involved_impact_title_line_1 ); ?></span>
                  <?php endif; ?>
                  <?php if ( '' !== trim( $get_involved_impact_title_line_2 ) ) : ?>
                  <span class="get-involved-impact__title-line get-involved-impact__title-line--pink"><?php echo esc_html( $get_involved_impact_title_line_2 ); ?></span>
                  <?php endif; ?>
                </h2>
                <?php if ( '' !== trim( $get_involved_impact_intro ) ) : ?>
                <p class="get-involved-impact__intro">
                  <?php echo esc_html( $get_involved_impact_intro ); ?>
                </p>
                <?php endif; ?>
                <?php if ( '' !== trim( $get_involved_impact_note_text ) ) : ?>
                <aside class="get-involved-impact__note">
                  <svg
                    class="get-involved-impact__note-star"
                    viewBox="0 0 24 24"
                    width="22"
                    height="22"
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
                  <p class="get-involved-impact__note-text">
                    <?php echo esc_html( $get_involved_impact_note_text ); ?>
                  </p>
                </aside>
                <?php endif; ?>
              </div>

              <?php require get_template_directory() . '/template-parts/get-involved-impact-visual.php'; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="get-involved-partner-cta section-padding" aria-label="Contact us about partnerships">
        <div class="site-container">
          <div class="get-involved-partner-cta__card">
            <img
              class="get-involved-partner-cta__envelope"
              src="<?php echo esc_url( $get_involved_partner_cta_envelope_url ); ?>"
              alt=""
              width="185"
              height="140"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />

            <div class="get-involved-partner-cta__copy">
              <?php if ( '' !== trim( $get_involved_partner_cta_title ) ) : ?>
              <p class="get-involved-partner-cta__title">
                <?php echo esc_html( $get_involved_partner_cta_title ); ?>
              </p>
              <?php endif; ?>
              <?php if ( '' !== trim( $get_involved_partner_cta_sub ) ) : ?>
              <p class="get-involved-partner-cta__sub"><?php echo esc_html( $get_involved_partner_cta_sub ); ?></p>
              <?php endif; ?>
            </div>

            <?php if ( ! empty( $get_involved_partner_cta_btn_link['url'] ) && '' !== trim( $get_involved_partner_cta_btn_text ) ) : ?>
            <a class="btn btn--solid btn--lg btn-hover get-involved-partner-cta__btn" href="<?php echo esc_url( $get_involved_partner_cta_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $get_involved_partner_cta_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
              <?php echo esc_html( $get_involved_partner_cta_btn_text ); ?>
              <svg
                class="btn__icon"
                viewBox="0 0 24 24"
                width="18"
                height="18"
                fill="none"
                stroke="currentColor"
                stroke-width="1.7"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path d="M5 12h14M13 6l6 6-6 6" />
              </svg>
            </a>
            <?php endif; ?>

            <img
              class="get-involved-partner-cta__deco"
              src="<?php echo esc_url( $get_involved_partner_cta_deco_url ); ?>"
              alt=""
              width="120"
              height="80"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
          </div>
        </div>
      </section>

      <!-- GET INVOLVED SECTIONS GO HERE -->
    </main>

<?php
get_footer();
