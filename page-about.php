<?php
/**
 * About page template â€” converted from about.html.
 *
 * Template Name: About
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$about_page_id = get_queried_object_id();

$about_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$about_story_title = bdc_get_acf_text(
	'about_story_title',
	'Our Story',
	$about_page_id
);
$about_story_photo_relative = 'assets/images/our-story-photo.jpg';
$about_story_photo_url      = bdc_theme_asset_url( $about_story_photo_relative );
$about_story_photo_ver      = bdc_asset_version( $about_story_photo_relative );
if ( $about_story_photo_ver ) {
	$about_story_photo_url = add_query_arg( 'v', $about_story_photo_ver, $about_story_photo_url );
}
$about_story_photo_alt = bdc_get_acf_text(
	'about_story_photo_alt',
	'Two Bright Dreamers holding a sign that reads Our Ideas Can Change The World',
	$about_page_id
);
$about_story_paragraph_1 = bdc_get_acf_text(
	'about_story_paragraph_1',
	'It started at home. Bright Dreamers began with two little girls full of imagination. Every day they asked questions, invented ideas, designed projects, and dreamed about making the world a little brighter.',
	$about_page_id
);
$about_story_paragraph_2 = bdc_get_acf_text(
	'about_story_paragraph_2',
	'Watching them made us realize something important...',
	$about_page_id
);
$about_story_paragraph_highlight = bdc_get_acf_text(
	'about_story_paragraph_highlight',
	'Children don\'t need someone to tell them what to dream. They need someone who believes in their dreams.',
	$about_page_id
);
$about_story_paragraph_3 = bdc_get_acf_text(
	'about_story_paragraph_3',
	'Today, we\'re building a small, intentional nonprofit community where children have opportunities to discover their talents, explore their own ideas, and grow into confident, kind, and creative people.',
	$about_page_id
);
$about_story_jar_url = bdc_theme_asset_url( 'assets/images/our-story-jar.png' );
$about_story_jar_ver = bdc_asset_version( 'assets/images/our-story-jar.png' );
if ( $about_story_jar_ver ) {
	$about_story_jar_url = add_query_arg( 'v', $about_story_jar_ver, $about_story_jar_url );
}
$about_story_jar_alt = bdc_get_acf_text(
	'about_story_jar_alt',
	'',
	$about_page_id
);

$about_believe_title = bdc_get_acf_text(
	'about_believe_title',
	'We Believe',
	$about_page_id
);
$about_believe_deco_left_url = bdc_get_acf_image_url(
	'about_believe_deco_left',
	bdc_theme_asset_url( 'assets/images/believe-deco-dots-removebg-preview.png' ),
	$about_page_id
);
$about_believe_deco_right_url = bdc_get_acf_image_url(
	'about_believe_deco_right',
	bdc_theme_asset_url( 'assets/images/believe-deco-dots-removebg-preview (1).png' ),
	$about_page_id
);
$about_believe_cards_defaults = array(
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/believe-icon-star.png' ),
		'text'       => 'Every child has unique talents.',
		'style_slug' => 'pink',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/believe-icon-heart.png' ),
		'text'       => 'Every idea deserves to be heard.',
		'style_slug' => 'purple',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/believe-icon-palette-removebg-preview.png' ),
		'text'       => 'Creativity builds confidence.',
		'style_slug' => 'yellow',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/believe-icon-people.png' ),
		'text'       => 'Children learn by doing.',
		'style_slug' => 'green',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/believe-icon-leaf.png' ),
		'text'       => 'Kindness changes communities.',
		'style_slug' => 'peach',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/believe-icon-sparkles.png' ),
		'text'       => 'Dreams become real when we work together.',
		'style_slug' => 'blue',
	),
);
$about_believe_style_slugs_allowed = array( 'pink', 'purple', 'yellow', 'green', 'peach', 'blue' );
$about_believe_cards_raw           = bdc_get_acf_repeater( 'about_believe_cards', $about_believe_cards_defaults, $about_page_id );
$about_believe_cards               = array();

foreach ( $about_believe_cards_raw as $index => $row ) {
	$default = $about_believe_cards_defaults[ $index ] ?? array(
		'icon'       => '',
		'text'       => '',
		'style_slug' => 'pink',
	);

	$text       = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';
	$style_slug = isset( $row['style_slug'] ) ? sanitize_key( (string) $row['style_slug'] ) : '';

	if ( ! in_array( $style_slug, $about_believe_style_slugs_allowed, true ) ) {
		$style_slug = (string) $default['style_slug'];
	}

	$resolved_text = '' !== $text ? $text : (string) $default['text'];

	if ( '' === trim( $resolved_text ) ) {
		continue;
	}

	$about_believe_cards[] = array(
		'icon'       => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'text'       => $resolved_text,
		'style_slug' => $style_slug,
	);
}

if ( empty( $about_believe_cards ) ) {
	$about_believe_cards = $about_believe_cards_defaults;
}

$about_panel_journey_defaults = array(
	'aria_label'   => 'Children Lead the Journey â€” a Bright Dreamer holding a sign that reads My idea Can Help Others',
	'title'        => 'Children Lead the Journey',
	'paragraph_1'  => 'At Bright Dreamers, children are not just participants. They are creators. Dreamers. Problem solvers. Idea makers.',
	'paragraph_2'  => 'Many of our projects begin with children\'s own ideas. Adults guide, encourage, and provide a safe environmentâ€”but we believe the best ideas often come from children themselves.',
	'paragraph_3'  => 'Together we turn imagination into real projects that help others.',
	'figure'       => bdc_theme_asset_url( 'assets/images/panel-journey-girl.png' ),
	'figure_alt'   => 'A Bright Dreamer holding a sign that says My idea Can Help Others',
);
$about_panel_journey        = bdc_get_acf_group( 'about_panel_journey', $about_panel_journey_defaults, $about_page_id );
$about_panel_journey_figure = bdc_acf_image_value_to_url( $about_panel_journey['figure'] ?? null, $about_panel_journey_defaults['figure'] );

$about_panel_council_defaults = array(
	'title'      => 'Young Dreamers Council',
	'lead'       => 'Bright Dreamers believes children\'s voices matter.',
	'list_items' => array(
		array( 'item_text' => 'Share ideas' ),
		array( 'item_text' => 'Suggest projects' ),
		array( 'item_text' => 'Identify causes they care about' ),
		array( 'item_text' => 'Vote on activities' ),
		array( 'item_text' => 'Help shape the future' ),
	),
	'note'       => 'Adult mentors guide and support them every step of the way.',
	'figure'     => bdc_theme_asset_url( 'assets/images/panel-council-figures-removebg-preview.png' ),
	'figure_alt' => '',
);
$about_panel_council        = bdc_get_acf_group( 'about_panel_council', $about_panel_council_defaults, $about_page_id );
$about_panel_council_figure = bdc_acf_image_value_to_url( $about_panel_council['figure'] ?? null, $about_panel_council_defaults['figure'] );
$about_panel_council_items_raw = ( is_array( $about_panel_council['list_items'] ?? null ) && ! empty( $about_panel_council['list_items'] ) )
	? $about_panel_council['list_items']
	: $about_panel_council_defaults['list_items'];
$about_panel_council_items = array();

foreach ( $about_panel_council_items_raw as $index => $row ) {
	$default   = $about_panel_council_defaults['list_items'][ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$item_text = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $item_text ) ) {
		continue;
	}

	$about_panel_council_items[] = $item_text;
}

if ( empty( $about_panel_council_items ) ) {
	foreach ( $about_panel_council_defaults['list_items'] as $default_item ) {
		$about_panel_council_items[] = (string) $default_item['item_text'];
	}
}

$about_panel_role_defaults = array(
	'title'          => 'Our Role',
	'title_icon'     => bdc_theme_asset_url( 'assets/images/role-icon-heart-removebg-preview.png' ),
	'lead'           => 'We are...',
	'role_items'     => array(
		array(
			'icon'  => bdc_theme_asset_url( 'assets/images/role-icon-heart-removebg-preview.png' ),
			'label' => 'Encouragers',
		),
		array(
			'icon'  => bdc_theme_asset_url( 'assets/images/role-icon-palette-removebg-preview.png' ),
			'label' => 'Creators',
		),
		array(
			'icon'  => bdc_theme_asset_url( 'assets/images/role-icon-leaf-removebg-preview.png' ),
			'label' => 'Mentors',
		),
		array(
			'icon'  => bdc_theme_asset_url( 'assets/images/role-icon-ear-removebg-preview.png' ),
			'label' => 'Listeners',
		),
		array(
			'icon'  => bdc_theme_asset_url( 'assets/images/role-icon-star-outline-removebg-preview.png' ),
			'label' => 'Supporters',
		),
	),
	'callout_strong' => 'Not instructors. Not lecturers.',
	'callout_text'   => 'We walk beside children on their journey.',
);
$about_panel_role           = bdc_get_acf_group( 'about_panel_role', $about_panel_role_defaults, $about_page_id );
$about_panel_role_title_icon = bdc_acf_image_value_to_url( $about_panel_role['title_icon'] ?? null, $about_panel_role_defaults['title_icon'] );
$about_panel_role_items_raw = ( is_array( $about_panel_role['role_items'] ?? null ) && ! empty( $about_panel_role['role_items'] ) )
	? $about_panel_role['role_items']
	: $about_panel_role_defaults['role_items'];
$about_panel_role_items = array();

foreach ( $about_panel_role_items_raw as $index => $row ) {
	$default = $about_panel_role_defaults['role_items'][ $index ] ?? array(
		'icon'  => '',
		'label' => '',
	);
	$label = isset( $row['label'] ) ? trim( (string) $row['label'] ) : '';

	$about_panel_role_items[] = array(
		'icon'  => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'label' => '' !== $label ? $label : (string) $default['label'],
	);
}

if ( empty( $about_panel_role_items ) ) {
	$about_panel_role_items = $about_panel_role_defaults['role_items'];
}

$about_panel_role_callout_icon  = bdc_theme_asset_url( 'assets/images/believe-icon-people.png' );
$about_panel_role_callout_heart = bdc_theme_asset_url( 'assets/images/role-heart-outline.png' );

$about_panel_approach_defaults = array(
	'title'       => 'Our Approach',
	'arrow_image' => bdc_theme_asset_url( 'assets/images/approach-arrow.jpeg' ),
	'steps'       => array(
		array(
			'icon'        => bdc_theme_asset_url( 'assets/images/approach-dream.jpeg' ),
			'title'       => 'Dream',
			'description' => 'Imagine possibilities.',
		),
		array(
			'icon'        => bdc_theme_asset_url( 'assets/images/approach-create.jpeg' ),
			'title'       => 'Create',
			'description' => 'Build something meaningful.',
		),
		array(
			'icon'        => bdc_theme_asset_url( 'assets/images/approach-grow.jpeg' ),
			'title'       => 'Grow',
			'description' => 'Learn through experience.',
		),
		array(
			'icon'        => bdc_theme_asset_url( 'assets/images/approach-share.jpeg' ),
			'title'       => 'Share',
			'description' => 'Present ideas confidently.',
		),
		array(
			'icon'        => bdc_theme_asset_url( 'assets/images/approach-give.jpeg' ),
			'title'       => 'Give',
			'description' => 'Use creativity to help others.',
		),
	),
);
$about_panel_approach      = bdc_get_acf_group( 'about_panel_approach', $about_panel_approach_defaults, $about_page_id );
$about_panel_approach_arrow = bdc_acf_image_value_to_url( $about_panel_approach['arrow_image'] ?? null, $about_panel_approach_defaults['arrow_image'] );
$about_panel_approach_steps_raw = ( is_array( $about_panel_approach['steps'] ?? null ) && ! empty( $about_panel_approach['steps'] ) )
	? $about_panel_approach['steps']
	: $about_panel_approach_defaults['steps'];
$about_panel_approach_steps = array();

foreach ( $about_panel_approach_steps_raw as $index => $row ) {
	$default = $about_panel_approach_defaults['steps'][ $index ] ?? array(
		'icon'        => '',
		'title'       => '',
		'description' => '',
	);

	$step_title = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$step_text  = isset( $row['description'] ) ? trim( (string) $row['description'] ) : '';

	$resolved = array(
		'icon'        => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'       => '' !== $step_title ? $step_title : (string) $default['title'],
		'description' => '' !== $step_text ? $step_text : (string) $default['description'],
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['description'] ) ) {
		continue;
	}

	$about_panel_approach_steps[] = $resolved;
}

if ( empty( $about_panel_approach_steps ) ) {
	$about_panel_approach_steps = $about_panel_approach_defaults['steps'];
}

$about_compare_title = bdc_get_acf_text(
	'about_compare_title',
	'What Makes Bright Dreamers Different?',
	$about_page_id
);
$about_compare_title_heart_url = bdc_get_acf_image_url(
	'about_compare_title_heart',
	bdc_theme_asset_url( 'assets/images/role-heart-outline.png' ),
	$about_page_id
);

$about_compare_left_defaults = array(
	'photo'      => bdc_theme_asset_url( 'assets/images/compare-left-photo.png' ),
	'photo_alt'  => 'Children jumping together in a school hallway',
	'label'      => 'Many programs focus on',
	'mark_icon'  => bdc_theme_asset_url( 'assets/images/compare-icon-x.jpeg' ),
	'list_items' => array(
		array( 'item_text' => 'Following instructions' ),
		array( 'item_text' => 'One right answer' ),
		array( 'item_text' => 'Adult-led activities' ),
		array( 'item_text' => 'Finished projects' ),
	),
);
$about_compare_left       = bdc_get_acf_group( 'about_compare_left', $about_compare_left_defaults, $about_page_id );
$about_compare_left_photo = $about_compare_left_defaults['photo'];
$about_compare_left_mark  = bdc_acf_image_value_to_url( $about_compare_left['mark_icon'] ?? null, $about_compare_left_defaults['mark_icon'] );
$about_compare_left_items_raw = ( is_array( $about_compare_left['list_items'] ?? null ) && ! empty( $about_compare_left['list_items'] ) )
	? $about_compare_left['list_items']
	: $about_compare_left_defaults['list_items'];
$about_compare_left_items = array();

foreach ( $about_compare_left_items_raw as $index => $row ) {
	$default   = $about_compare_left_defaults['list_items'][ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$item_text = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $item_text ) ) {
		continue;
	}

	$about_compare_left_items[] = $item_text;
}

if ( empty( $about_compare_left_items ) ) {
	foreach ( $about_compare_left_defaults['list_items'] as $default_item ) {
		$about_compare_left_items[] = (string) $default_item['item_text'];
	}
}

$about_compare_vs_badge_url = bdc_get_acf_image_url(
	'about_compare_vs_badge',
	bdc_theme_asset_url( 'assets/images/compare-vs-badge.jpeg' ),
	$about_page_id
);

$about_compare_right_defaults = array(
	'label'      => 'Bright Dreamers focuses on',
	'mark_icon'  => bdc_theme_asset_url( 'assets/images/compare-icon-check.jpeg' ),
	'list_items' => array(
		array( 'item_text' => 'Children\'s ideas' ),
		array( 'item_text' => 'Creativity' ),
		array( 'item_text' => 'Exploration' ),
		array( 'item_text' => 'Teamwork' ),
		array( 'item_text' => 'Leadership' ),
		array( 'item_text' => 'Community impact' ),
		array( 'item_text' => 'Kindness' ),
	),
	'photo'      => bdc_theme_asset_url( 'assets/images/compare-right-photo.png' ),
	'photo_alt'  => 'A teacher and children exploring a flower model in class',
);
$about_compare_right       = bdc_get_acf_group( 'about_compare_right', $about_compare_right_defaults, $about_page_id );
$about_compare_right_photo = $about_compare_right_defaults['photo'];
$about_compare_right_mark  = bdc_acf_image_value_to_url( $about_compare_right['mark_icon'] ?? null, $about_compare_right_defaults['mark_icon'] );
$about_compare_right_items_raw = ( is_array( $about_compare_right['list_items'] ?? null ) && ! empty( $about_compare_right['list_items'] ) )
	? $about_compare_right['list_items']
	: $about_compare_right_defaults['list_items'];
$about_compare_right_items = array();

foreach ( $about_compare_right_items_raw as $index => $row ) {
	$default   = $about_compare_right_defaults['list_items'][ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$item_text = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $item_text ) ) {
		continue;
	}

	$about_compare_right_items[] = $item_text;
}

if ( empty( $about_compare_right_items ) ) {
	foreach ( $about_compare_right_defaults['list_items'] as $default_item ) {
		$about_compare_right_items[] = (string) $default_item['item_text'];
	}
}
?>
    <main id="main-content">
      <?php
      get_template_part(
        'template-parts/about-hero',
        null,
        array(
          'post_id' => $about_page_id,
        )
      );
      ?>

      <section class="our-story" aria-label="Our Story">
        <div class="site-container">
          <div class="our-story__card">
            <div class="our-story__inner">
              <div class="our-story__media">
                <div class="our-story__photo-wrap">
                  <img
                    class="our-story__photo"
                    src="<?php echo esc_url( $about_story_photo_url ); ?>"
                    alt="<?php echo esc_attr( $about_story_photo_alt ); ?>"
                    width="900"
                    height="900"
                    decoding="async"
                    loading="eager"
                  />
                </div>
              </div>

              <div class="our-story__content">
                <h2 class="our-story__title">
                  <?php echo esc_html( $about_story_title ); ?>
                  <svg
                    class="our-story__title-icon"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
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

                <?php if ( '' !== trim( $about_story_paragraph_1 ) ) : ?>
                <p class="our-story__text">
                  <?php echo esc_html( $about_story_paragraph_1 ); ?>
                </p>
                <?php endif; ?>

                <?php if ( '' !== trim( $about_story_paragraph_2 ) ) : ?>
                <p class="our-story__text">
                  <?php echo esc_html( $about_story_paragraph_2 ); ?>
                </p>
                <?php endif; ?>

                <?php if ( '' !== trim( $about_story_paragraph_highlight ) ) : ?>
                <p class="our-story__text our-story__text--highlight">
                  <?php echo esc_html( $about_story_paragraph_highlight ); ?>
                </p>
                <?php endif; ?>

                <?php if ( '' !== trim( $about_story_paragraph_3 ) ) : ?>
                <p class="our-story__text our-story__text--last">
                  <?php echo esc_html( $about_story_paragraph_3 ); ?>
                </p>
                <?php endif; ?>
              </div>

              <div class="our-story__aside">
                <div class="lazy-img-wrap">
                  <img
                    class="our-story__jar lazy-img"
                    src="<?php echo esc_attr( $about_hero_lazy_placeholder ); ?>"
                    data-src="<?php echo esc_url( $about_story_jar_url ); ?>"
                    alt="<?php echo esc_attr( $about_story_jar_alt ); ?>"
                    width="400"
                    height="500"
                    decoding="async"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="we-believe" aria-label="We Believe">
        <div class="site-container we-believe__inner">
          <h2 class="we-believe__title">
            <?php echo esc_html( $about_believe_title ); ?>
            <svg
              class="we-believe__title-icon"
              viewBox="0 0 24 24"
              width="24"
              height="24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              aria-hidden="true"
            >
              <path
                d="M12 2l2.4 4.9 5.4.8-3.9 3.8.9 5.4L12 14.8 7.2 17l.9-5.4L4.2 7.7l5.4-.8L12 2z"
              />
            </svg>
          </h2>

          <div class="we-believe__row">
            <img
              class="we-believe__deco we-believe__deco--left"
              src="<?php echo esc_url( $about_believe_deco_left_url ); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />

            <div class="we-believe__slider" role="list">
              <?php foreach ( $about_believe_cards as $card ) : ?>
              <article class="believe-card believe-card--<?php echo esc_attr( $card['style_slug'] ); ?>" role="listitem">
                <img
                  class="believe-card__icon"
                  src="<?php echo esc_url( $card['icon'] ); ?>"
                  alt=""
                  width="64"
                  height="64"
                  loading="lazy"
                />
                <p class="believe-card__text"><?php echo esc_html( $card['text'] ); ?></p>
              </article>
              <?php endforeach; ?>
            </div>

            <img
              class="we-believe__deco we-believe__deco--right"
              src="<?php echo esc_url( $about_believe_deco_right_url ); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
          </div>
        </div>
      </section>

      <section class="about-panels" aria-label="How Bright Dreamers works">
        <div class="site-container about-panels__inner">
          <div class="about-panels__grid">
            <?php require get_template_directory() . '/template-parts/about-panels-grid.php'; ?>
          </div>
        </div>
      </section>
      <section class="compare-different" aria-labelledby="compare-different-title">
        <div class="site-container compare-different__wrap">
          <h2 class="compare-different__title" id="compare-different-title">
            <?php echo esc_html( $about_compare_title ); ?>
            <img
              class="compare-different__heart"
              src="<?php echo esc_url( $about_compare_title_heart_url ); ?>"
              alt=""
              width="24"
              height="24"
              loading="lazy"
            />
          </h2>

          <div class="compare-different__bar">
            <div class="compare-side compare-side--left">
              <div class="lazy-img-wrap lazy-img-wrap--fill">
                <img
                  class="compare-side__photo lazy-img"
                  src="<?php echo esc_attr( $about_hero_lazy_placeholder ); ?>"
                  data-src="<?php echo esc_url( $about_compare_left_photo ); ?>"
                  alt="<?php echo esc_attr( (string) $about_compare_left['photo_alt'] ); ?>"
                  width="600"
                  height="400"
                  decoding="async"
                />
              </div>
              <div class="compare-side__text">
                <?php if ( '' !== trim( (string) $about_compare_left['label'] ) ) : ?>
                <p class="compare-side__label"><?php echo esc_html( (string) $about_compare_left['label'] ); ?></p>
                <?php endif; ?>
                <?php if ( ! empty( $about_compare_left_items ) ) : ?>
                <ul class="compare-side__list">
                  <?php foreach ( $about_compare_left_items as $left_item ) : ?>
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( $about_compare_left_mark ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    <?php echo esc_html( $left_item ); ?>
                  </li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; ?>
              </div>
            </div>

            <div class="compare-different__vs" aria-hidden="true">
              <img
                class="compare-different__vs-badge"
                src="<?php echo esc_url( $about_compare_vs_badge_url ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
              />
            </div>

            <div class="compare-side compare-side--right">
              <div class="compare-side__text">
                <?php if ( '' !== trim( (string) $about_compare_right['label'] ) ) : ?>
                <p class="compare-side__label"><?php echo esc_html( (string) $about_compare_right['label'] ); ?></p>
                <?php endif; ?>
                <?php if ( ! empty( $about_compare_right_items ) ) : ?>
                <ul class="compare-side__list compare-side__list--grid">
                  <?php foreach ( $about_compare_right_items as $right_item ) : ?>
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( $about_compare_right_mark ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    <?php echo esc_html( $right_item ); ?>
                  </li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; ?>
              </div>
              <div class="lazy-img-wrap lazy-img-wrap--fill">
                <img
                  class="compare-side__photo lazy-img"
                  src="<?php echo esc_attr( $about_hero_lazy_placeholder ); ?>"
                  data-src="<?php echo esc_url( $about_compare_right_photo ); ?>"
                  alt="<?php echo esc_attr( (string) $about_compare_right['photo_alt'] ); ?>"
                  width="600"
                  height="400"
                  decoding="async"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
