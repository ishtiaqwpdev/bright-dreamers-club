<?php
/**
 * Create for a Cause page template — converted from create-for-cause.html.
 *
 * Template Name: Create for a Cause
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$create_for_cause_page_id = get_queried_object_id();

$create_for_cause_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$create_for_cause_hero_breadcrumb_home_text = bdc_get_acf_text(
	'create_for_cause_hero_breadcrumb_home_text',
	'Home',
	$create_for_cause_page_id
);
$create_for_cause_hero_breadcrumb_home_link = bdc_get_acf_link(
	'create_for_cause_hero_breadcrumb_home_link',
	array(
		'title'  => 'Home',
		'url'    => bdc_page_url( 'index.html' ),
		'target' => '',
	),
	$create_for_cause_page_id
);
$create_for_cause_hero_breadcrumb_parent_text = bdc_get_acf_text(
	'create_for_cause_hero_breadcrumb_parent_text',
	'Explore',
	$create_for_cause_page_id
);
$create_for_cause_hero_breadcrumb_parent_link = bdc_get_acf_link(
	'create_for_cause_hero_breadcrumb_parent_link',
	array(
		'title'  => 'Explore',
		'url'    => bdc_page_url( 'explore.html' ),
		'target' => '',
	),
	$create_for_cause_page_id
);
$create_for_cause_hero_breadcrumb_current_text = bdc_get_acf_text(
	'create_for_cause_hero_breadcrumb_current_text',
	'Create for a Cause',
	$create_for_cause_page_id
);
$create_for_cause_hero_title = bdc_get_acf_text(
	'create_for_cause_hero_title',
	'Create for a Cause',
	$create_for_cause_page_id
);
$create_for_cause_hero_tagline = bdc_get_acf_text(
	'create_for_cause_hero_tagline',
	'Create with heart. Make a difference.',
	$create_for_cause_page_id
);
$create_for_cause_hero_text = bdc_get_acf_text(
	'create_for_cause_hero_text',
	'In this experience, children use their creativity to support causes they care about. They plan projects, make items, raise awareness, and give back to the community through their own creations.',
	$create_for_cause_page_id
);
$create_for_cause_hero_primary_btn_text = bdc_get_acf_text(
	'create_for_cause_hero_primary_btn_text',
	'Learn More About This Experience',
	$create_for_cause_page_id
);
$create_for_cause_hero_primary_btn_link = bdc_get_acf_link(
	'create_for_cause_hero_primary_btn_link',
	array(
		'title'  => 'Learn More About This Experience',
		'url'    => '#create-for-cause-parents',
		'target' => '',
	),
	$create_for_cause_page_id
);
$create_for_cause_hero_back_text = bdc_get_acf_text(
	'create_for_cause_hero_back_text',
	'Back to All Experiences',
	$create_for_cause_page_id
);
$create_for_cause_hero_back_link = bdc_get_acf_link(
	'create_for_cause_hero_back_link',
	array(
		'title'  => 'Back to All Experiences',
		'url'    => bdc_page_url( 'explore.html' ),
		'target' => '',
	),
	$create_for_cause_page_id
);
$create_for_cause_hero_banner_relative = 'assets/images/create-for-cause-hero-banner.jpeg';
$create_for_cause_hero_banner_url      = bdc_theme_asset_url( $create_for_cause_hero_banner_relative );
$create_for_cause_hero_banner_ver      = bdc_asset_version( $create_for_cause_hero_banner_relative );
if ( $create_for_cause_hero_banner_ver ) {
	$create_for_cause_hero_banner_url = add_query_arg( 'v', $create_for_cause_hero_banner_ver, $create_for_cause_hero_banner_url );
}
$create_for_cause_hero_banner_mobile_url = bdc_theme_asset_url( 'assets/images/create-for-cause-hero-banner-mobile.jpg' );
$create_for_cause_hero_banner_mobile_ver = bdc_asset_version( 'assets/images/create-for-cause-hero-banner-mobile.jpg' );
if ( $create_for_cause_hero_banner_mobile_ver ) {
	$create_for_cause_hero_banner_mobile_url = add_query_arg( 'v', $create_for_cause_hero_banner_mobile_ver, $create_for_cause_hero_banner_mobile_url );
}
$create_for_cause_hero_banner_alt = bdc_get_acf_text(
	'create_for_cause_hero_banner_alt',
	'Three Bright Dreamers holding a colorful handmade thank-you sign',
	$create_for_cause_page_id
);

$create_for_cause_explore_title = bdc_get_acf_text(
	'create_for_cause_explore_title',
	'Children Explore',
	$create_for_cause_page_id
);
$create_for_cause_explore_activities_defaults = array(
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/create-for-cause-icon-kindness.png' ),
		'title'      => 'Kindness Projects',
		'color_slug' => 'paint',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/create-for-cause-icon-donation.png' ),
		'title'      => 'Donation Drives',
		'color_slug' => 'crafts',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/create-for-cause-icon-care.png' ),
		'title'      => 'Care Packages',
		'color_slug' => 'media',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/create-for-cause-icon-awareness.png' ),
		'title'      => 'Awareness Campaigns',
		'color_slug' => 'design',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/create-for-cause-icon-events.png' ),
		'title'      => 'Helping Events',
		'color_slug' => 'upcycle',
	),
);
$create_for_cause_explore_color_slugs_allowed = array( 'paint', 'crafts', 'media', 'design', 'upcycle' );
$create_for_cause_explore_activities_raw      = bdc_get_acf_repeater( 'create_for_cause_explore_activities', $create_for_cause_explore_activities_defaults, $create_for_cause_page_id );
$create_for_cause_explore_activities          = array();

foreach ( $create_for_cause_explore_activities_raw as $index => $row ) {
	$default = $create_for_cause_explore_activities_defaults[ $index ] ?? array(
		'icon'       => '',
		'title'      => '',
		'color_slug' => 'paint',
	);

	$title = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';

	$color_slug = isset( $row['color_slug'] ) ? sanitize_key( (string) $row['color_slug'] ) : '';
	if ( ! in_array( $color_slug, $create_for_cause_explore_color_slugs_allowed, true ) ) {
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

	$create_for_cause_explore_activities[] = $resolved;
}

if ( empty( $create_for_cause_explore_activities ) ) {
	$create_for_cause_explore_activities = $create_for_cause_explore_activities_defaults;
}

$create_for_cause_info_aria_label = bdc_get_acf_text(
	'create_for_cause_info_aria_label',
	'Skills, growth, and impact',
	$create_for_cause_page_id
);
$create_for_cause_info_skills_title = bdc_get_acf_text(
	'create_for_cause_info_skills_title',
	'Skills Children Naturally Build',
	$create_for_cause_page_id
);
$create_for_cause_info_skills_items_defaults = array(
	array( 'item_text' => 'Empathy' ),
	array( 'item_text' => 'Responsibility' ),
	array( 'item_text' => 'Teamwork' ),
	array( 'item_text' => 'Leadership' ),
	array( 'item_text' => 'Communication' ),
);
$create_for_cause_info_skills_items_raw = bdc_get_acf_repeater( 'create_for_cause_info_skills_items', $create_for_cause_info_skills_items_defaults, $create_for_cause_page_id );
$create_for_cause_info_skills_items     = array();

foreach ( $create_for_cause_info_skills_items_raw as $index => $row ) {
	$default   = $create_for_cause_info_skills_items_defaults[ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$resolved  = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $resolved ) ) {
		continue;
	}

	$create_for_cause_info_skills_items[] = array( 'item_text' => $resolved );
}

if ( empty( $create_for_cause_info_skills_items ) ) {
	$create_for_cause_info_skills_items = $create_for_cause_info_skills_items_defaults;
}
$create_for_cause_info_skills_deco_url = bdc_get_acf_image_url(
	'create_for_cause_info_skills_deco',
	bdc_theme_asset_url( 'assets/images/create-for-cause-deco-star.png' ),
	$create_for_cause_page_id
);
$create_for_cause_info_grow_title = bdc_get_acf_text(
	'create_for_cause_info_grow_title',
	'Children Grow Shape the Experience',
	$create_for_cause_page_id
);
$create_for_cause_info_grow_text = bdc_get_acf_text(
	'create_for_cause_info_grow_text',
	'Children choose causes, plan projects, and decide how they want to help others.',
	$create_for_cause_page_id
);
$create_for_cause_info_grow_deco_url = bdc_get_acf_image_url(
	'create_for_cause_info_grow_deco',
	bdc_theme_asset_url( 'assets/images/create-for-cause-deco-heart.png' ),
	$create_for_cause_page_id
);
$create_for_cause_info_impact_title = bdc_get_acf_text(
	'create_for_cause_info_impact_title',
	'Making an Impact',
	$create_for_cause_page_id
);
$create_for_cause_info_impact_text = bdc_get_acf_text(
	'create_for_cause_info_impact_text',
	'Children learn that their actions—big or small—can bring hope, support, and positive change to people and places in need.',
	$create_for_cause_page_id
);
$create_for_cause_info_impact_deco_url = bdc_get_acf_image_url(
	'create_for_cause_info_impact_deco',
	bdc_theme_asset_url( 'assets/images/create-for-cause-deco-plant.png' ),
	$create_for_cause_page_id
);

$create_for_cause_parents_section_id = bdc_get_acf_text(
	'create_for_cause_parents_section_id',
	'create-for-cause-parents',
	$create_for_cause_page_id
);
$create_for_cause_parents_title = bdc_get_acf_text(
	'create_for_cause_parents_title',
	'What Parents Should Know',
	$create_for_cause_page_id
);
$create_for_cause_parents_tablist_aria_label = bdc_get_acf_text(
	'create_for_cause_parents_tablist_aria_label',
	'Parent information topics',
	$create_for_cause_page_id
);
$create_for_cause_parents_faq_items_defaults = array(
	array(
		'panel_slug' => 'expect',
		'tab_label'  => 'What to Expect',
		'panel_text' => 'Sessions blend creative projects with a community purpose. Children work individually and in teams to plan, create, and share projects that support causes they care about.',
	),
	array(
		'panel_slug' => 'materials',
		'tab_label'  => 'Materials',
		'panel_text' => 'We provide craft supplies, packaging materials, and display items for awareness projects. Children may also bring items to donate or upcycle. All materials are age-appropriate and safe to use.',
	),
	array(
		'panel_slug' => 'safety',
		'tab_label'  => 'Safety & Supervision',
		'panel_text' => 'All activities are age-appropriate with adult guidance. Scissors, glue, and tools are introduced with clear safety instructions. Small group sizes ensure every child gets attention and support.',
	),
	array(
		'panel_slug' => 'program',
		'tab_label'  => 'Program Details & Registration',
		'panel_text' => 'Create for a Cause runs as part of Bright Dreamers experiences throughout the year. Visit our Get Involved page or contact us to learn about upcoming sessions, age groups, and how to register your child.',
	),
);
$create_for_cause_parents_faq_slugs_allowed = array( 'expect', 'materials', 'safety', 'program' );
$create_for_cause_parents_faq_items_raw      = bdc_get_acf_repeater( 'create_for_cause_parents_faq_items', $create_for_cause_parents_faq_items_defaults, $create_for_cause_page_id );
$create_for_cause_parents_faq_items          = array();

foreach ( $create_for_cause_parents_faq_items_raw as $index => $row ) {
	$default = $create_for_cause_parents_faq_items_defaults[ $index ] ?? array(
		'panel_slug' => 'expect',
		'tab_label'  => '',
		'panel_text' => '',
	);

	$tab_label  = isset( $row['tab_label'] ) ? trim( (string) $row['tab_label'] ) : '';
	$panel_text = isset( $row['panel_text'] ) ? trim( (string) $row['panel_text'] ) : '';
	$panel_slug = isset( $row['panel_slug'] ) ? sanitize_key( (string) $row['panel_slug'] ) : '';

	if ( ! in_array( $panel_slug, $create_for_cause_parents_faq_slugs_allowed, true ) ) {
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

	$create_for_cause_parents_faq_items[] = $resolved;
}

if ( empty( $create_for_cause_parents_faq_items ) ) {
	$create_for_cause_parents_faq_items = $create_for_cause_parents_faq_items_defaults;
}

$create_for_cause_cta_aria_label = bdc_get_acf_text(
	'create_for_cause_cta_aria_label',
	'Join Create for a Cause',
	$create_for_cause_page_id
);
$create_for_cause_cta_heart_url = bdc_get_acf_image_url(
	'create_for_cause_cta_heart',
	bdc_theme_asset_url( 'assets/images/adda1b2f-6762-4f43-a19f-91248315eaa2-removebg-preview.png' ),
	$create_for_cause_page_id
);
$create_for_cause_cta_text = bdc_get_acf_text(
	'create_for_cause_cta_text',
	'Small acts of kindness can create big change.',
	$create_for_cause_page_id
);
$create_for_cause_cta_plane_url = bdc_get_acf_image_url(
	'create_for_cause_cta_plane',
	bdc_theme_asset_url( 'assets/images/e1649e8e-1d0b-4c20-aba2-bfb8efc76209-removebg-preview.png' ),
	$create_for_cause_page_id
);
$create_for_cause_cta_btn_text = bdc_get_acf_text(
	'create_for_cause_cta_btn_text',
	'Learn More About This Experience',
	$create_for_cause_page_id
);
$create_for_cause_cta_btn_link = bdc_get_acf_link(
	'create_for_cause_cta_btn_link',
	array(
		'title'  => 'Learn More About This Experience',
		'url'    => bdc_page_url( 'get-involved.html' ),
		'target' => '',
	),
	$create_for_cause_page_id
);
?>
    <main id="main-content" class="create-for-cause-page">
      <?php
      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'      => 'creative-makers-hero create-for-cause-hero',
          'actions_class'      => 'home-hero__actions--inline',
          'labelledby'         => 'create-for-cause-title',
          'headline'           => $create_for_cause_hero_title,
          'headline_id'        => 'create-for-cause-title',
          'supporting_copy'    => bdc_hero_join_copy( $create_for_cause_hero_tagline, $create_for_cause_hero_text ),
          'primary_cta_text'   => $create_for_cause_hero_primary_btn_text,
          'primary_cta_link'   => $create_for_cause_hero_primary_btn_link,
          'secondary_cta_text' => $create_for_cause_hero_back_text,
          'secondary_cta_link' => $create_for_cause_hero_back_link,
          'hero_image'         => $create_for_cause_hero_banner_url,
          'hero_image_mobile'  => $create_for_cause_hero_banner_mobile_url,
          'hero_image_alt'     => $create_for_cause_hero_banner_alt,
          'media_class'        => 'creative-makers-hero__media',
          'image_class'        => 'creative-makers-hero__banner',
        )
      );
      ?>

      <section class="creative-makers-explore" aria-labelledby="create-for-cause-explore-title">
        <div class="site-container">
          <h2 class="creative-makers-explore__title" id="create-for-cause-explore-title">
            <?php echo esc_html( $create_for_cause_explore_title ); ?>
          </h2>

          <?php require get_template_directory() . '/template-parts/create-for-cause-explore-grid.php'; ?>
        </div>
      </section>

      <section class="creative-makers-info" aria-label="<?php echo esc_attr( $create_for_cause_info_aria_label ); ?>">
        <div class="site-container">
          <?php require get_template_directory() . '/template-parts/create-for-cause-info-grid.php'; ?>
        </div>
      </section>

      <section
        class="creative-makers-parents"
        id="<?php echo esc_attr( $create_for_cause_parents_section_id ); ?>"
        aria-labelledby="create-for-cause-parents-title"
      >
        <div class="site-container">
          <h2 class="creative-makers-parents__title" id="create-for-cause-parents-title">
            <?php echo esc_html( $create_for_cause_parents_title ); ?>
          </h2>

          <?php require get_template_directory() . '/template-parts/create-for-cause-parents-faq.php'; ?>
        </div>
      </section>

      <section class="creative-makers-cta" aria-label="<?php echo esc_attr( $create_for_cause_cta_aria_label ); ?>">
        <div class="site-container creative-makers-cta__inner">
          <div class="creative-makers-cta__card">
            <?php if ( '' !== trim( $create_for_cause_cta_heart_url ) ) : ?>
            <img
              class="creative-makers-cta__heart"
              src="<?php echo esc_url( $create_for_cause_cta_heart_url ); ?>"
              alt=""
              width="28"
              height="28"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <?php endif; ?>
            <?php if ( '' !== trim( $create_for_cause_cta_text ) ) : ?>
            <p class="creative-makers-cta__text">
              <?php echo esc_html( $create_for_cause_cta_text ); ?>
            </p>
            <?php endif; ?>
            <?php if ( '' !== trim( $create_for_cause_cta_plane_url ) ) : ?>
            <img
              class="creative-makers-cta__plane"
              src="<?php echo esc_url( $create_for_cause_cta_plane_url ); ?>"
              alt=""
              width="150"
              height="75"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <?php endif; ?>
            <?php if ( ! empty( $create_for_cause_cta_btn_link['url'] ) && '' !== trim( $create_for_cause_cta_btn_text ) ) : ?>
            <a class="btn btn--solid btn--lg btn-hover creative-makers-cta__btn" href="<?php echo esc_url( $create_for_cause_cta_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $create_for_cause_cta_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
              <?php echo esc_html( $create_for_cause_cta_btn_text ); ?>
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
