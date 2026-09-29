<?php
/**
 * Young Ideas Lab page template — converted from young-ideas-lab.html.
 *
 * Template Name: Young Ideas Lab
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$young_ideas_lab_page_id = get_queried_object_id();

$young_ideas_lab_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$young_ideas_lab_hero_breadcrumb_home_text = bdc_get_acf_text(
	'young_ideas_lab_hero_breadcrumb_home_text',
	'Home',
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_breadcrumb_home_link = bdc_get_acf_link(
	'young_ideas_lab_hero_breadcrumb_home_link',
	array(
		'title'  => 'Home',
		'url'    => bdc_page_url( 'index.html' ),
		'target' => '',
	),
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_breadcrumb_parent_text = bdc_get_acf_text(
	'young_ideas_lab_hero_breadcrumb_parent_text',
	'Explore',
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_breadcrumb_parent_link = bdc_get_acf_link(
	'young_ideas_lab_hero_breadcrumb_parent_link',
	array(
		'title'  => 'Explore',
		'url'    => bdc_page_url( 'explore.html' ),
		'target' => '',
	),
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_breadcrumb_current_text = bdc_get_acf_text(
	'young_ideas_lab_hero_breadcrumb_current_text',
	'Young Ideas Lab',
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_title = bdc_get_acf_text(
	'young_ideas_lab_hero_title',
	'Young Ideas Lab',
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_title_icon_url = bdc_get_acf_image_url(
	'young_ideas_lab_hero_title_icon',
	bdc_theme_asset_url( 'assets/images/young-ideas-lab-title-lightbulb.jpeg' ),
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_tagline = bdc_get_acf_text(
	'young_ideas_lab_hero_tagline',
	'Ask. Imagine. Invent. Solve.',
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_text = bdc_get_acf_text(
	'young_ideas_lab_hero_text',
	'Young Ideas Lab encourages children to think curiously, ask questions, and try new things. They experiment, solve problems, and turn simple ideas into real solutions.',
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_primary_btn_text = bdc_get_acf_text(
	'young_ideas_lab_hero_primary_btn_text',
	'Learn More About This Experience',
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_primary_btn_link = bdc_get_acf_link(
	'young_ideas_lab_hero_primary_btn_link',
	array(
		'title'  => 'Learn More About This Experience',
		'url'    => '#young-ideas-lab-parents',
		'target' => '',
	),
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_back_text = bdc_get_acf_text(
	'young_ideas_lab_hero_back_text',
	'Back to All Experiences',
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_back_link = bdc_get_acf_link(
	'young_ideas_lab_hero_back_link',
	array(
		'title'  => 'Back to All Experiences',
		'url'    => bdc_page_url( 'explore.html' ),
		'target' => '',
	),
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_banner_url = bdc_get_acf_image_url(
	'young_ideas_lab_hero_banner',
	bdc_theme_asset_url( 'assets/images/young-ideas-lab-hero-banner.jpeg' ),
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_banner_alt = bdc_get_acf_text(
	'young_ideas_lab_hero_banner_alt',
	'Two children building a small robot together at a workspace',
	$young_ideas_lab_page_id
);
$young_ideas_lab_hero_banner_mobile_url = bdc_theme_asset_url( 'assets/images/young-ideas-lab-hero-banner-mobile.jpg' );
$young_ideas_lab_hero_banner_mobile_ver = bdc_asset_version( 'assets/images/young-ideas-lab-hero-banner-mobile.jpg' );
if ( $young_ideas_lab_hero_banner_mobile_ver ) {
	$young_ideas_lab_hero_banner_mobile_url = add_query_arg( 'v', $young_ideas_lab_hero_banner_mobile_ver, $young_ideas_lab_hero_banner_mobile_url );
}

$young_ideas_lab_explore_title = bdc_get_acf_text(
	'young_ideas_lab_explore_title',
	'Children Explore',
	$young_ideas_lab_page_id
);
$young_ideas_lab_explore_activities_defaults = array(
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/young-ideas-lab-icon-flask-removebg-preview.png' ),
		'title'      => 'Science & Experiments',
		'color_slug' => 'paint',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/young-ideas-lab-icon-puzzle-removebg-preview.png' ),
		'title'      => 'Problem Solving',
		'color_slug' => 'crafts',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/young-ideas-lab-icon-lightbulb-removebg-preview.png' ),
		'title'      => 'Inventions & Ideas',
		'color_slug' => 'media',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/young-ideas-lab-icon-code-removebg-preview.png' ),
		'title'      => 'Coding Basics',
		'color_slug' => 'design',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/young-ideas-lab-icon-leaf-removebg-preview.png' ),
		'title'      => 'Design Thinking',
		'color_slug' => 'upcycle',
	),
);
$young_ideas_lab_explore_color_slugs_allowed = array( 'paint', 'crafts', 'media', 'design', 'upcycle' );
$young_ideas_lab_explore_activities_raw      = bdc_get_acf_repeater( 'young_ideas_lab_explore_activities', $young_ideas_lab_explore_activities_defaults, $young_ideas_lab_page_id );
$young_ideas_lab_explore_activities          = array();

foreach ( $young_ideas_lab_explore_activities_raw as $index => $row ) {
	$default = $young_ideas_lab_explore_activities_defaults[ $index ] ?? array(
		'icon'       => '',
		'title'      => '',
		'color_slug' => 'paint',
	);

	$title = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';

	$color_slug = isset( $row['color_slug'] ) ? sanitize_key( (string) $row['color_slug'] ) : '';
	if ( ! in_array( $color_slug, $young_ideas_lab_explore_color_slugs_allowed, true ) ) {
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

	$young_ideas_lab_explore_activities[] = $resolved;
}

if ( empty( $young_ideas_lab_explore_activities ) ) {
	$young_ideas_lab_explore_activities = $young_ideas_lab_explore_activities_defaults;
}

$young_ideas_lab_info_aria_label = bdc_get_acf_text(
	'young_ideas_lab_info_aria_label',
	'Skills, growth, and impact',
	$young_ideas_lab_page_id
);
$young_ideas_lab_info_skills_title = bdc_get_acf_text(
	'young_ideas_lab_info_skills_title',
	'Skills Children Naturally Build',
	$young_ideas_lab_page_id
);
$young_ideas_lab_info_skills_items_defaults = array(
	array( 'item_text' => 'Critical thinking' ),
	array( 'item_text' => 'Creativity' ),
	array( 'item_text' => 'Curiosity' ),
	array( 'item_text' => 'Persistence' ),
	array( 'item_text' => 'Logical reasoning' ),
);
$young_ideas_lab_info_skills_items_raw = bdc_get_acf_repeater( 'young_ideas_lab_info_skills_items', $young_ideas_lab_info_skills_items_defaults, $young_ideas_lab_page_id );
$young_ideas_lab_info_skills_items     = array();

foreach ( $young_ideas_lab_info_skills_items_raw as $index => $row ) {
	$default   = $young_ideas_lab_info_skills_items_defaults[ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$resolved  = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $resolved ) ) {
		continue;
	}

	$young_ideas_lab_info_skills_items[] = array( 'item_text' => $resolved );
}

if ( empty( $young_ideas_lab_info_skills_items ) ) {
	$young_ideas_lab_info_skills_items = $young_ideas_lab_info_skills_items_defaults;
}
$young_ideas_lab_info_skills_deco_url = bdc_get_acf_image_url(
	'young_ideas_lab_info_skills_deco',
	bdc_theme_asset_url( 'assets/images/young-ideas-lab-info-heart-removebg-preview.png' ),
	$young_ideas_lab_page_id
);
$young_ideas_lab_info_grow_title_underline_word = bdc_get_acf_text(
	'young_ideas_lab_info_grow_title_underline_word',
	'Children Grow',
	$young_ideas_lab_page_id
);
$young_ideas_lab_info_grow_title_underline_url = bdc_get_acf_image_url(
	'young_ideas_lab_info_grow_title_underline',
	bdc_theme_asset_url( 'assets/images/heading-underline-removebg-preview.png' ),
	$young_ideas_lab_page_id
);
$young_ideas_lab_info_grow_title_suffix = bdc_get_acf_text(
	'young_ideas_lab_info_grow_title_suffix',
	'Shape the Experience',
	$young_ideas_lab_page_id
);
$young_ideas_lab_info_grow_text = bdc_get_acf_text(
	'young_ideas_lab_info_grow_text',
	'Children suggest ideas, choose challenges, and help decide what we explore and build.',
	$young_ideas_lab_page_id
);
$young_ideas_lab_info_grow_deco_url = bdc_get_acf_image_url(
	'young_ideas_lab_info_grow_deco',
	bdc_theme_asset_url( 'assets/images/young-ideas-lab-deco-star-removebg-preview.png' ),
	$young_ideas_lab_page_id
);
$young_ideas_lab_info_impact_title = bdc_get_acf_text(
	'young_ideas_lab_info_impact_title',
	'Making an Impact',
	$young_ideas_lab_page_id
);
$young_ideas_lab_info_impact_text = bdc_get_acf_text(
	'young_ideas_lab_info_impact_text',
	'Children\'s ideas can become inventions, solutions, and projects that help our community and make life better.',
	$young_ideas_lab_page_id
);
$young_ideas_lab_info_impact_deco_url = bdc_get_acf_image_url(
	'young_ideas_lab_info_impact_deco',
	bdc_theme_asset_url( 'assets/images/young-ideas-lab-deco-plant-removebg-preview.png' ),
	$young_ideas_lab_page_id
);

$young_ideas_lab_parents_section_id = bdc_get_acf_text(
	'young_ideas_lab_parents_section_id',
	'young-ideas-lab-parents',
	$young_ideas_lab_page_id
);
$young_ideas_lab_parents_title = bdc_get_acf_text(
	'young_ideas_lab_parents_title',
	'What Parents Should Know',
	$young_ideas_lab_page_id
);
$young_ideas_lab_parents_tablist_aria_label = bdc_get_acf_text(
	'young_ideas_lab_parents_tablist_aria_label',
	'Parent information topics',
	$young_ideas_lab_page_id
);
$young_ideas_lab_parents_faq_items_defaults = array(
	array(
		'panel_slug' => 'expect',
		'tab_label'  => 'What to Expect',
		'panel_text' => 'Sessions blend guided challenges with open exploration time. Children investigate questions, work individually and in small teams, and share what they discover at the end of each experience.',
	),
	array(
		'panel_slug' => 'materials',
		'tab_label'  => 'Materials',
		'panel_text' => 'We provide lab kits, building materials, tablets for coding activities, and safe experiment supplies. Children are encouraged to bring recycled items for invention projects. Workspaces are set up for hands-on learning.',
	),
	array(
		'panel_slug' => 'safety',
		'tab_label'  => 'Safety & Supervision',
		'panel_text' => 'All activities are age-appropriate with adult guidance. Tools and experiments are introduced with clear safety instructions. Small group sizes ensure every child gets attention and support.',
	),
	array(
		'panel_slug' => 'program',
		'tab_label'  => 'Program Details & Registration',
		'panel_text' => 'Young Ideas Lab runs as part of Bright Dreamers experiences throughout the year. Visit our Get Involved page or contact us to learn about upcoming sessions, age groups, and how to register your child.',
	),
);
$young_ideas_lab_parents_faq_slugs_allowed = array( 'expect', 'materials', 'safety', 'program' );
$young_ideas_lab_parents_faq_items_raw      = bdc_get_acf_repeater( 'young_ideas_lab_parents_faq_items', $young_ideas_lab_parents_faq_items_defaults, $young_ideas_lab_page_id );
$young_ideas_lab_parents_faq_items          = array();

foreach ( $young_ideas_lab_parents_faq_items_raw as $index => $row ) {
	$default = $young_ideas_lab_parents_faq_items_defaults[ $index ] ?? array(
		'panel_slug' => 'expect',
		'tab_label'  => '',
		'panel_text' => '',
	);

	$tab_label  = isset( $row['tab_label'] ) ? trim( (string) $row['tab_label'] ) : '';
	$panel_text = isset( $row['panel_text'] ) ? trim( (string) $row['panel_text'] ) : '';
	$panel_slug = isset( $row['panel_slug'] ) ? sanitize_key( (string) $row['panel_slug'] ) : '';

	if ( ! in_array( $panel_slug, $young_ideas_lab_parents_faq_slugs_allowed, true ) ) {
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

	$young_ideas_lab_parents_faq_items[] = $resolved;
}

if ( empty( $young_ideas_lab_parents_faq_items ) ) {
	$young_ideas_lab_parents_faq_items = $young_ideas_lab_parents_faq_items_defaults;
}

$young_ideas_lab_cta_aria_label = bdc_get_acf_text(
	'young_ideas_lab_cta_aria_label',
	'Join Young Ideas Lab',
	$young_ideas_lab_page_id
);
$young_ideas_lab_cta_icon_url = bdc_get_acf_image_url(
	'young_ideas_lab_cta_icon',
	bdc_theme_asset_url( 'assets/images/young-ideas-lab-cta-lightbulb-removebg-preview.png' ),
	$young_ideas_lab_page_id
);
$young_ideas_lab_cta_text = bdc_get_acf_text(
	'young_ideas_lab_cta_text',
	'Big ideas can come from small questions.',
	$young_ideas_lab_page_id
);
$young_ideas_lab_cta_plane_url = bdc_get_acf_image_url(
	'young_ideas_lab_cta_plane',
	bdc_theme_asset_url( 'assets/images/young-ideas-lab-deco-plane-removebg-preview.png' ),
	$young_ideas_lab_page_id
);
$young_ideas_lab_cta_btn_text = bdc_get_acf_text(
	'young_ideas_lab_cta_btn_text',
	'Learn More About This Experience',
	$young_ideas_lab_page_id
);
$young_ideas_lab_cta_btn_link = bdc_get_acf_link(
	'young_ideas_lab_cta_btn_link',
	array(
		'title'  => 'Learn More About This Experience',
		'url'    => bdc_page_url( 'get-involved.html' ),
		'target' => '',
	),
	$young_ideas_lab_page_id
);
?>
    <main id="main-content" class="young-ideas-lab-page">
      <?php
      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'      => 'creative-makers-hero young-ideas-lab-hero',
          'actions_class'      => 'home-hero__actions--inline',
          'labelledby'         => 'young-ideas-lab-title',
          'headline'           => $young_ideas_lab_hero_title,
          'headline_id'        => 'young-ideas-lab-title',
          'supporting_copy'    => bdc_hero_join_copy( $young_ideas_lab_hero_tagline, $young_ideas_lab_hero_text ),
          'primary_cta_text'   => $young_ideas_lab_hero_primary_btn_text,
          'primary_cta_link'   => $young_ideas_lab_hero_primary_btn_link,
          'secondary_cta_text' => $young_ideas_lab_hero_back_text,
          'secondary_cta_link' => $young_ideas_lab_hero_back_link,
          'hero_image'         => $young_ideas_lab_hero_banner_url,
          'hero_image_mobile'  => $young_ideas_lab_hero_banner_mobile_url,
          'hero_image_alt'     => $young_ideas_lab_hero_banner_alt,
          'media_class'        => 'creative-makers-hero__media',
          'image_class'        => 'creative-makers-hero__banner',
        )
      );
      ?>

      <section class="creative-makers-explore" aria-labelledby="creative-makers-explore-title">
        <div class="site-container">
          <h2 class="creative-makers-explore__title" id="creative-makers-explore-title">
            <?php echo esc_html( $young_ideas_lab_explore_title ); ?>
          </h2>

          <?php require get_template_directory() . '/template-parts/young-ideas-lab-explore-grid.php'; ?>
        </div>
      </section>

      <section class="creative-makers-info" aria-label="<?php echo esc_attr( $young_ideas_lab_info_aria_label ); ?>">
        <div class="site-container">
          <?php require get_template_directory() . '/template-parts/young-ideas-lab-info-grid.php'; ?>
        </div>
      </section>

      <section
        class="creative-makers-parents"
        id="<?php echo esc_attr( $young_ideas_lab_parents_section_id ); ?>"
        aria-labelledby="young-ideas-lab-parents-title"
      >
        <div class="site-container">
          <h2 class="creative-makers-parents__title" id="young-ideas-lab-parents-title">
            <?php echo esc_html( $young_ideas_lab_parents_title ); ?>
          </h2>

          <?php require get_template_directory() . '/template-parts/young-ideas-lab-parents-faq.php'; ?>
        </div>
      </section>

      <section class="creative-makers-cta" aria-label="<?php echo esc_attr( $young_ideas_lab_cta_aria_label ); ?>">
        <div class="site-container creative-makers-cta__inner">
          <div class="creative-makers-cta__card">
            <?php if ( '' !== trim( $young_ideas_lab_cta_icon_url ) ) : ?>
            <img
              class="creative-makers-cta__heart"
              src="<?php echo esc_url( $young_ideas_lab_cta_icon_url ); ?>"
              alt=""
              width="28"
              height="28"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <?php endif; ?>
            <?php if ( '' !== trim( $young_ideas_lab_cta_text ) ) : ?>
            <p class="creative-makers-cta__text">
              <?php echo esc_html( $young_ideas_lab_cta_text ); ?>
            </p>
            <?php endif; ?>
            <?php if ( '' !== trim( $young_ideas_lab_cta_plane_url ) ) : ?>
            <img
              class="creative-makers-cta__plane"
              src="<?php echo esc_url( $young_ideas_lab_cta_plane_url ); ?>"
              alt=""
              width="150"
              height="75"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <?php endif; ?>
            <?php if ( ! empty( $young_ideas_lab_cta_btn_link['url'] ) && '' !== trim( $young_ideas_lab_cta_btn_text ) ) : ?>
            <a class="btn btn--solid btn--lg btn-hover creative-makers-cta__btn" href="<?php echo esc_url( $young_ideas_lab_cta_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $young_ideas_lab_cta_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
              <?php echo esc_html( $young_ideas_lab_cta_btn_text ); ?>
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
