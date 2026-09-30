<?php
/**
 * Community Adventures page template — converted from community-adventures.html.
 *
 * Template Name: Community Adventures
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$community_adventures_page_id = get_queried_object_id();

$community_adventures_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$community_adventures_hero_breadcrumb_home_text = bdc_get_acf_text(
	'community_adventures_hero_breadcrumb_home_text',
	'Home',
	$community_adventures_page_id
);
$community_adventures_hero_breadcrumb_home_link = bdc_get_acf_link(
	'community_adventures_hero_breadcrumb_home_link',
	array(
		'title'  => 'Home',
		'url'    => bdc_page_url( 'index.html' ),
		'target' => '',
	),
	$community_adventures_page_id
);
$community_adventures_hero_breadcrumb_parent_text = bdc_get_acf_text(
	'community_adventures_hero_breadcrumb_parent_text',
	'Explore',
	$community_adventures_page_id
);
$community_adventures_hero_breadcrumb_parent_link = bdc_get_acf_link(
	'community_adventures_hero_breadcrumb_parent_link',
	array(
		'title'  => 'Explore',
		'url'    => bdc_page_url( 'explore.html' ),
		'target' => '',
	),
	$community_adventures_page_id
);
$community_adventures_hero_breadcrumb_current_text = bdc_get_acf_text(
	'community_adventures_hero_breadcrumb_current_text',
	'Community Adventures',
	$community_adventures_page_id
);
$community_adventures_hero_title = bdc_get_acf_text(
	'community_adventures_hero_title',
	'Community Adventures',
	$community_adventures_page_id
);
$community_adventures_hero_tagline = bdc_get_acf_text(
	'community_adventures_hero_tagline',
	'Explore. Discover. Connect',
	$community_adventures_page_id
);
$community_adventures_hero_text = bdc_get_acf_text(
	'community_adventures_hero_text',
	'Children explore their community through real-life experiences. They visit places, meet inspiring people, learn new things, and discover ways we can all work together to make our community better.',
	$community_adventures_page_id
);
$community_adventures_hero_primary_btn_text = bdc_get_acf_text(
	'community_adventures_hero_primary_btn_text',
	'Learn More About This Experience',
	$community_adventures_page_id
);
$community_adventures_hero_primary_btn_link = bdc_get_acf_link(
	'community_adventures_hero_primary_btn_link',
	array(
		'title'  => 'Learn More About This Experience',
		'url'    => '#community-adventures-parents',
		'target' => '',
	),
	$community_adventures_page_id
);
$community_adventures_hero_back_text = bdc_get_acf_text(
	'community_adventures_hero_back_text',
	'Back to All Experiences',
	$community_adventures_page_id
);
$community_adventures_hero_back_link = bdc_get_acf_link(
	'community_adventures_hero_back_link',
	array(
		'title'  => 'Back to All Experiences',
		'url'    => bdc_page_url( 'explore.html' ),
		'target' => '',
	),
	$community_adventures_page_id
);
$community_adventures_hero_banner_theme_path = 'assets/images/community-adventures-hero-banner.jpeg';
$community_adventures_hero_banner_url        = bdc_theme_asset_url( $community_adventures_hero_banner_theme_path );
$community_adventures_hero_banner_ver        = bdc_asset_version( $community_adventures_hero_banner_theme_path );
if ( $community_adventures_hero_banner_ver ) {
	$community_adventures_hero_banner_url = add_query_arg( 'v', $community_adventures_hero_banner_ver, $community_adventures_hero_banner_url );
}
$community_adventures_hero_banner_mobile_url = bdc_theme_asset_url( 'assets/images/community-adventures-hero-banner-mobile.jpg' );
$community_adventures_hero_banner_mobile_ver = bdc_asset_version( 'assets/images/community-adventures-hero-banner-mobile.jpg' );
if ( $community_adventures_hero_banner_mobile_ver ) {
	$community_adventures_hero_banner_mobile_url = add_query_arg( 'v', $community_adventures_hero_banner_mobile_ver, $community_adventures_hero_banner_mobile_url );
}
$community_adventures_hero_banner_alt = bdc_get_acf_text(
	'community_adventures_hero_banner_alt',
	'Five children gardening together with crates of fresh vegetables and flowers',
	$community_adventures_page_id
);

$community_adventures_explore_title = bdc_get_acf_text(
	'community_adventures_explore_title',
	'Children Explore',
	$community_adventures_page_id
);
$community_adventures_explore_activities_defaults = array(
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/community-adventures-icon-places-removebg-preview.png' ),
		'title'      => 'Local Places',
		'color_slug' => 'paint',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/community-adventures-icon-helpers-removebg-preview.png' ),
		'title'      => 'Community Helpers',
		'color_slug' => 'crafts',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/community-adventures-icon-nature-removebg-preview.png' ),
		'title'      => 'Nature & Outdoors',
		'color_slug' => 'media',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/community-adventures-icon-culture-removebg-preview.png' ),
		'title'      => 'Culture & Arts',
		'color_slug' => 'design',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/community-adventures-icon-business-removebg-preview.png' ),
		'title'      => 'Local Businesses',
		'color_slug' => 'upcycle',
	),
);
$community_adventures_explore_color_slugs_allowed = array( 'paint', 'crafts', 'media', 'design', 'upcycle' );
$community_adventures_explore_activities_raw      = bdc_get_acf_repeater( 'community_adventures_explore_activities', $community_adventures_explore_activities_defaults, $community_adventures_page_id );
$community_adventures_explore_activities          = array();

foreach ( $community_adventures_explore_activities_raw as $index => $row ) {
	$default = $community_adventures_explore_activities_defaults[ $index ] ?? array(
		'icon'       => '',
		'title'      => '',
		'color_slug' => 'paint',
	);

	$title = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';

	$color_slug = isset( $row['color_slug'] ) ? sanitize_key( (string) $row['color_slug'] ) : '';
	if ( ! in_array( $color_slug, $community_adventures_explore_color_slugs_allowed, true ) ) {
		$color_slug = (string) $default['color_slug'];
	}

	$resolved = array(
		'icon'       => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'      => '' !== $title ? $title : (string) $default['title'],
		'color_slug' => $color_slug,
	);

	if ( '' === trim( $resolved['title'] ) ) {
		continue;
	}

	$community_adventures_explore_activities[] = $resolved;
}

if ( empty( $community_adventures_explore_activities ) ) {
	$community_adventures_explore_activities = $community_adventures_explore_activities_defaults;
}

$community_adventures_info_aria_label = bdc_get_acf_text(
	'community_adventures_info_aria_label',
	'Skills, growth, and impact',
	$community_adventures_page_id
);
$community_adventures_info_skills_title = bdc_get_acf_text(
	'community_adventures_info_skills_title',
	'Skills Children Naturally Build',
	$community_adventures_page_id
);
$community_adventures_info_skills_items_defaults = array(
	array( 'item_text' => 'Curiosity' ),
	array( 'item_text' => 'Communication' ),
	array( 'item_text' => 'Adaptability' ),
	array( 'item_text' => 'Social awareness' ),
	array( 'item_text' => 'Appreciation' ),
);
$community_adventures_info_skills_items_raw = bdc_get_acf_repeater( 'community_adventures_info_skills_items', $community_adventures_info_skills_items_defaults, $community_adventures_page_id );
$community_adventures_info_skills_items     = array();

foreach ( $community_adventures_info_skills_items_raw as $index => $row ) {
	$default   = $community_adventures_info_skills_items_defaults[ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$resolved  = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $resolved ) ) {
		continue;
	}

	$community_adventures_info_skills_items[] = array( 'item_text' => $resolved );
}

if ( empty( $community_adventures_info_skills_items ) ) {
	$community_adventures_info_skills_items = $community_adventures_info_skills_items_defaults;
}
$community_adventures_info_skills_deco_url = bdc_get_acf_image_url(
	'community_adventures_info_skills_deco',
	bdc_theme_asset_url( 'assets/images/community-adventures-deco-star-removebg-preview.png' ),
	$community_adventures_page_id
);
$community_adventures_info_grow_title_underline_word = bdc_get_acf_text(
	'community_adventures_info_grow_title_underline_word',
	'Children Grow',
	$community_adventures_page_id
);
$community_adventures_info_grow_title_underline_url = bdc_get_acf_image_url(
	'community_adventures_info_grow_title_underline',
	bdc_theme_asset_url( 'assets/images/heading-underline.jpeg' ),
	$community_adventures_page_id
);
$community_adventures_info_grow_title_suffix = bdc_get_acf_text(
	'community_adventures_info_grow_title_suffix',
	'Shape the Experience',
	$community_adventures_page_id
);
$community_adventures_info_grow_text = bdc_get_acf_text(
	'community_adventures_info_grow_text',
	'Children suggest places to visit, ask questions, and help plan our adventures.',
	$community_adventures_page_id
);
$community_adventures_info_grow_deco_url = bdc_get_acf_image_url(
	'community_adventures_info_grow_deco',
	bdc_theme_asset_url( 'assets/images/community-adventures-deco-heart-removebg-preview.png' ),
	$community_adventures_page_id
);
$community_adventures_info_impact_title = bdc_get_acf_text(
	'community_adventures_info_impact_title',
	'Making an Impact',
	$community_adventures_page_id
);
$community_adventures_info_impact_text = bdc_get_acf_text(
	'community_adventures_info_impact_text',
	'Children understand their community better and discover ways to contribute, support others, and help it grow.',
	$community_adventures_page_id
);
$community_adventures_info_impact_deco_url = bdc_get_acf_image_url(
	'community_adventures_info_impact_deco',
	bdc_theme_asset_url( 'assets/images/community-adventures-deco-plant-removebg-preview.png' ),
	$community_adventures_page_id
);
$community_adventures_parents_section_id = bdc_get_acf_text(
	'community_adventures_parents_section_id',
	'community-adventures-parents',
	$community_adventures_page_id
);
$community_adventures_parents_title = bdc_get_acf_text(
	'community_adventures_parents_title',
	'What Parents Should Know',
	$community_adventures_page_id
);
$community_adventures_parents_tablist_aria_label = bdc_get_acf_text(
	'community_adventures_parents_tablist_aria_label',
	'Parent information topics',
	$community_adventures_page_id
);
$community_adventures_parents_faq_items_defaults = array(
	array(
		'panel_slug' => 'expect',
		'tab_label'  => 'What to Expect',
		'panel_text' => 'Sessions include field visits, guest speakers, and hands-on activities in the community. Children observe, ask questions, and reflect on what they learn at each stop.',
	),
	array(
		'panel_slug' => 'materials',
		'tab_label'  => 'Materials',
		'panel_text' => 'We provide journals, maps, and activity guides for each adventure. Children are encouraged to wear comfortable clothing and bring a water bottle. Any special items needed for a visit are shared in advance.',
	),
	array(
		'panel_slug' => 'safety',
		'tab_label'  => 'Safety & Supervision',
		'panel_text' => 'All outings are fully supervised with clear safety guidelines. Permission forms, appropriate adult-to-child ratios, and route planning are in place for every adventure.',
	),
	array(
		'panel_slug' => 'program',
		'tab_label'  => 'Program Details & Registration',
		'panel_text' => 'Community Adventures runs as part of Bright Dreamers experiences throughout the year. Visit our Get Involved page or contact us to learn about upcoming sessions, age groups, and how to register your child.',
	),
);
$community_adventures_parents_faq_slugs_allowed = array( 'expect', 'materials', 'safety', 'program' );
$community_adventures_parents_faq_items_raw      = bdc_get_acf_repeater( 'community_adventures_parents_faq_items', $community_adventures_parents_faq_items_defaults, $community_adventures_page_id );
$community_adventures_parents_faq_items          = array();

foreach ( $community_adventures_parents_faq_items_raw as $index => $row ) {
	$default = $community_adventures_parents_faq_items_defaults[ $index ] ?? array(
		'panel_slug' => 'expect',
		'tab_label'  => '',
		'panel_text' => '',
	);

	$tab_label  = isset( $row['tab_label'] ) ? trim( (string) $row['tab_label'] ) : '';
	$panel_text = isset( $row['panel_text'] ) ? trim( (string) $row['panel_text'] ) : '';
	$panel_slug = isset( $row['panel_slug'] ) ? sanitize_key( (string) $row['panel_slug'] ) : '';

	if ( ! in_array( $panel_slug, $community_adventures_parents_faq_slugs_allowed, true ) ) {
		$panel_slug = (string) $default['panel_slug'];
	}

	$resolved = array(
		'panel_slug' => $panel_slug,
		'tab_label'  => '' !== $tab_label ? $tab_label : (string) $default['tab_label'],
		'panel_text' => '' !== $panel_text ? $panel_text : (string) $default['panel_text'],
	);

	if ( '' === trim( $resolved['tab_label'] ) && '' === trim( $resolved['panel_text'] ) ) {
		continue;
	}

	$community_adventures_parents_faq_items[] = $resolved;
}

if ( empty( $community_adventures_parents_faq_items ) ) {
	$community_adventures_parents_faq_items = $community_adventures_parents_faq_items_defaults;
}

$community_adventures_cta_aria_label = bdc_get_acf_text(
	'community_adventures_cta_aria_label',
	'Join Community Adventures',
	$community_adventures_page_id
);
$community_adventures_cta_heart_url = bdc_get_acf_image_url(
	'community_adventures_cta_heart',
	bdc_theme_asset_url( 'assets/images/community-adventures-cta-heart.jpeg' ),
	$community_adventures_page_id
);
$community_adventures_cta_text = bdc_get_acf_text(
	'community_adventures_cta_text',
	'Every adventure starts with a curious mind.',
	$community_adventures_page_id
);
$community_adventures_cta_plane_url = bdc_get_acf_image_url(
	'community_adventures_cta_plane',
	bdc_theme_asset_url( 'assets/images/community-adventures-deco-globe-removebg-preview.png' ),
	$community_adventures_page_id
);
$community_adventures_cta_btn_text = bdc_get_acf_text(
	'community_adventures_cta_btn_text',
	'Learn More About This Experience',
	$community_adventures_page_id
);
$community_adventures_cta_btn_link = bdc_get_acf_link(
	'community_adventures_cta_btn_link',
	array(
		'title'  => 'Learn More About This Experience',
		'url'    => bdc_page_url( 'get-involved.html' ),
		'target' => '',
	),
	$community_adventures_page_id
);
?>
    <main id="main-content" class="community-adventures-page">
      <?php
      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'      => 'creative-makers-hero community-adventures-hero',
          'actions_class'      => 'home-hero__actions--inline',
          'labelledby'         => 'community-adventures-title',
          'headline'           => $community_adventures_hero_title,
          'headline_id'        => 'community-adventures-title',
          'supporting_copy'    => bdc_hero_join_copy( $community_adventures_hero_tagline, $community_adventures_hero_text ),
          'primary_cta_text'   => $community_adventures_hero_primary_btn_text,
          'primary_cta_link'   => $community_adventures_hero_primary_btn_link,
          'secondary_cta_text' => $community_adventures_hero_back_text,
          'secondary_cta_link' => $community_adventures_hero_back_link,
          'hero_image'         => $community_adventures_hero_banner_url,
          'hero_image_mobile'  => $community_adventures_hero_banner_mobile_url,
          'hero_image_alt'     => $community_adventures_hero_banner_alt,
          'media_class'        => 'creative-makers-hero__media',
          'image_class'        => 'creative-makers-hero__banner',
        )
      );
      ?>

      <section class="creative-makers-explore" aria-labelledby="community-adventures-explore-title">
        <div class="site-container">
          <h2 class="creative-makers-explore__title" id="community-adventures-explore-title">
            <?php echo esc_html( $community_adventures_explore_title ); ?>
          </h2>

          <?php require get_template_directory() . '/template-parts/community-adventures-explore-grid.php'; ?>
        </div>
      </section>

      <section class="creative-makers-info" aria-label="<?php echo esc_attr( $community_adventures_info_aria_label ); ?>">
        <div class="site-container">
          <?php require get_template_directory() . '/template-parts/community-adventures-info-grid.php'; ?>
        </div>
      </section>

      <section
        class="creative-makers-parents"
        id="<?php echo esc_attr( $community_adventures_parents_section_id ); ?>"
        aria-labelledby="community-adventures-parents-title"
      >
        <div class="site-container">
          <h2 class="creative-makers-parents__title" id="community-adventures-parents-title">
            <?php echo esc_html( $community_adventures_parents_title ); ?>
          </h2>

          <?php require get_template_directory() . '/template-parts/community-adventures-parents-faq.php'; ?>
        </div>
      </section>

      <section class="creative-makers-cta" aria-label="<?php echo esc_attr( $community_adventures_cta_aria_label ); ?>">
        <div class="site-container creative-makers-cta__inner">
          <div class="creative-makers-cta__card">
            <?php if ( '' !== trim( $community_adventures_cta_heart_url ) ) : ?>
            <img
              class="creative-makers-cta__heart"
              src="<?php echo esc_url( $community_adventures_cta_heart_url ); ?>"
              alt=""
              width="28"
              height="28"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <?php endif; ?>
            <?php if ( '' !== trim( $community_adventures_cta_text ) ) : ?>
            <p class="creative-makers-cta__text">
              <?php echo esc_html( $community_adventures_cta_text ); ?>
            </p>
            <?php endif; ?>
            <?php if ( '' !== trim( $community_adventures_cta_plane_url ) ) : ?>
            <img
              class="creative-makers-cta__plane"
              src="<?php echo esc_url( $community_adventures_cta_plane_url ); ?>"
              alt=""
              width="90"
              height="45"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <?php endif; ?>
            <?php if ( ! empty( $community_adventures_cta_btn_link['url'] ) && '' !== trim( $community_adventures_cta_btn_text ) ) : ?>
            <a class="btn btn--solid btn--lg btn-hover creative-makers-cta__btn" href="<?php echo esc_url( $community_adventures_cta_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $community_adventures_cta_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
              <?php echo esc_html( $community_adventures_cta_btn_text ); ?>
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
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
