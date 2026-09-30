<?php
/**
 * Our Vision page template â€” converted from our-vision.html.
 *
 * Template Name: Our Vision
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$vision_page_id = get_queried_object_id();

$vision_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$vision_hero_eyebrow = bdc_get_acf_text(
	'vision_hero_eyebrow',
	'OUR VISION',
	$vision_page_id
);
$vision_hero_title_line_1 = bdc_get_acf_text(
	'vision_hero_title_line_1',
	'Building a',
	$vision_page_id
);
$vision_hero_title_line_2 = bdc_get_acf_text(
	'vision_hero_title_line_2',
	'Brighter Future',
	$vision_page_id
);
$vision_hero_title_line_3 = bdc_get_acf_text(
	'vision_hero_title_line_3',
	'Together',
	$vision_page_id
);
$vision_hero_lead_intro = bdc_get_acf_text(
	'vision_hero_lead_intro',
	'Every meaningful change can begin with something very small',
	$vision_page_id
);
$vision_hero_lead_accent = bdc_get_acf_text(
	'vision_hero_lead_accent',
	'a child saying, "I have an idea."',
	$vision_page_id
);
$vision_hero_text = bdc_get_acf_text(
	'vision_hero_text',
	'Bright Dreamers creates a community where children are encouraged to explore what excites them, discover their talents, bring their ideas to life, and use their creativity to help others.',
	$vision_page_id
);
$vision_hero_list_defaults = array(
	array( 'item_text' => 'Adults provide the support, resources, safety, and encouragement.' ),
	array( 'item_text' => 'Children help shape the journey.' ),
);
$vision_hero_list_raw = bdc_get_acf_repeater( 'vision_hero_list', $vision_hero_list_defaults, $vision_page_id );
$vision_hero_list     = array();

foreach ( $vision_hero_list_raw as $index => $row ) {
	$default   = $vision_hero_list_defaults[ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$item_text = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $item_text ) ) {
		continue;
	}

	$vision_hero_list[] = $item_text;
}

if ( empty( $vision_hero_list ) ) {
	foreach ( $vision_hero_list_defaults as $default_item ) {
		$vision_hero_list[] = (string) $default_item['item_text'];
	}
}

$vision_hero_banner_theme_path = 'assets/images/our-vision-hero-banner.jpg';
$vision_hero_banner_url        = bdc_theme_asset_url( $vision_hero_banner_theme_path );
$vision_hero_banner_ver        = bdc_asset_version( $vision_hero_banner_theme_path );
if ( $vision_hero_banner_ver ) {
	$vision_hero_banner_url = add_query_arg( 'v', $vision_hero_banner_ver, $vision_hero_banner_url );
}
$vision_hero_banner_mobile_theme_path = 'assets/images/our-vision-hero-banner-mobile.jpg';
$vision_hero_banner_mobile_url        = bdc_theme_asset_url( $vision_hero_banner_mobile_theme_path );
$vision_hero_banner_mobile_ver        = bdc_asset_version( $vision_hero_banner_mobile_theme_path );
if ( $vision_hero_banner_mobile_ver ) {
	$vision_hero_banner_mobile_url = add_query_arg( 'v', $vision_hero_banner_mobile_ver, $vision_hero_banner_mobile_url );
}
$vision_hero_banner_alt = bdc_get_acf_text(
	'vision_hero_banner_alt',
	'Three children holding colorful heart artwork posters with the message A Kinder World A Brighter Tomorrow',
	$vision_page_id
);

$vision_pillars_title = bdc_get_acf_text(
	'vision_pillars_title',
	'Our Vision',
	$vision_page_id
);
$vision_pillars_deco_heart = bdc_get_acf_image_url(
	'vision_pillars_deco_heart',
	bdc_theme_asset_url( 'assets/images/vision-pillar-deco-heart-removebg-preview.png' ),
	$vision_page_id
);
$vision_pillars_deco_leaf = bdc_get_acf_image_url(
	'vision_pillars_deco_leaf',
	bdc_theme_asset_url( 'assets/images/vision-pillar-deco-leaf-removebg-preview.png' ),
	$vision_page_id
);
$vision_pillars_cards_defaults = array(
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/vision-pillar-icon-dream.png' ),
		'title'       => 'Let Children Dream',
		'description' => 'Create safe spaces for children to imagine, ask questions, and discover what truly interests them.',
		'style_slug'  => 'pink',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/vision-pillar-icon-ideas.png' ),
		'title'       => 'Turn Ideas Into Reality',
		'description' => 'Help children transform their own ideas into art, inventions, projects, writings and solutionsâ€”and gain real-world experience.',
		'style_slug'  => 'purple',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/vision-pillar-icon-purpose.png' ),
		'title'       => 'Create With Purpose',
		'description' => 'Show children that what they create can bring joy, support others, and help make our community and world better.',
		'style_slug'  => 'green',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/vision-pillar-icon-grow.png' ),
		'title'       => 'Grow Together',
		'description' => 'Bring children, families, volunteers, businesses, artists, and community partners together to build young leaders and stronger communities.',
		'style_slug'  => 'orange',
	),
);
$vision_pillars_style_slugs_allowed = array( 'pink', 'purple', 'green', 'orange' );
$vision_pillars_cards_raw           = bdc_get_acf_repeater( 'vision_pillars_cards', $vision_pillars_cards_defaults, $vision_page_id );
$vision_pillars_cards               = array();

foreach ( $vision_pillars_cards_raw as $index => $row ) {
	$default = $vision_pillars_cards_defaults[ $index ] ?? array(
		'icon'        => '',
		'title'       => '',
		'description' => '',
		'style_slug'  => 'pink',
	);

	$title       = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$description = isset( $row['description'] ) ? trim( (string) $row['description'] ) : '';
	$style_slug  = isset( $row['style_slug'] ) ? sanitize_key( (string) $row['style_slug'] ) : '';

	if ( ! in_array( $style_slug, $vision_pillars_style_slugs_allowed, true ) ) {
		$style_slug = (string) $default['style_slug'];
	}

	$resolved = array(
		'icon'        => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'       => '' !== $title ? $title : (string) $default['title'],
		'description' => '' !== $description ? $description : (string) $default['description'],
		'style_slug'  => $style_slug,
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['description'] ) ) {
		continue;
	}

	$vision_pillars_cards[] = $resolved;
}

if ( empty( $vision_pillars_cards ) ) {
	$vision_pillars_cards = $vision_pillars_cards_defaults;
}

$vision_roadmap_goals_title = bdc_get_acf_text(
	'vision_roadmap_goals_title',
	'Our First Goals',
	$vision_page_id
);
$vision_roadmap_goals_intro = bdc_get_acf_text(
	'vision_roadmap_goals_intro',
	'We are starting with a few simple goals:',
	$vision_page_id
);
$vision_roadmap_goals_defaults = array(
	array( 'item_text' => 'Welcome our first Bright Dreamers' ),
	array( 'item_text' => 'Listen to children\'s ideas' ),
	array( 'item_text' => 'Launch our Young Dreamers Council' ),
	array( 'item_text' => 'Turn the first child-inspired idea into a real project' ),
	array( 'item_text' => 'Create our first community art or kindness project' ),
	array( 'item_text' => 'Hold our first Dream Market' ),
	array( 'item_text' => 'Build relationships with local businesses and community partners' ),
	array( 'item_text' => 'Create more opportunities for children to discover what they love' ),
);
$vision_roadmap_goals_raw = bdc_get_acf_repeater( 'vision_roadmap_goals', $vision_roadmap_goals_defaults, $vision_page_id );
$vision_roadmap_goals     = array();

foreach ( $vision_roadmap_goals_raw as $index => $row ) {
	$default   = $vision_roadmap_goals_defaults[ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$item_text = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $item_text ) ) {
		continue;
	}

	$vision_roadmap_goals[] = $item_text;
}

if ( empty( $vision_roadmap_goals ) ) {
	foreach ( $vision_roadmap_goals_defaults as $default_item ) {
		$vision_roadmap_goals[] = (string) $default_item['item_text'];
	}
}

$vision_roadmap_journey_title = bdc_get_acf_text(
	'vision_roadmap_journey_title',
	'Our Journey Begins Here',
	$vision_page_id
);
$vision_roadmap_arrow_url = bdc_get_acf_image_url(
	'vision_roadmap_journey_arrow',
	bdc_theme_asset_url( 'assets/images/approach-arrow.jpeg' ),
	$vision_page_id
);
$vision_roadmap_journey_steps_defaults = array(
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/vision-journey-icon-idea.jpeg' ),
		'title'      => 'The Idea',
		'quote'      => '"What if...?"',
		'text'       => 'A child shares an idea.',
		'style_slug' => 'pink',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/vision-journey-icon-community.jpeg' ),
		'title'      => 'The Community',
		'quote'      => '"Let\'s explore it."',
		'text'       => 'Children and adults think about how it could become possible.',
		'style_slug' => 'purple',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/vision-journey-icon-project.jpeg' ),
		'title'      => 'The Project',
		'quote'      => '"Let\'s make it."',
		'text'       => 'The idea becomes art, a product, an event, or a community project.',
		'style_slug' => 'green',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/vision-journey-icon-impact.jpeg' ),
		'title'      => 'The Impact',
		'quote'      => '"Who can this help?"',
		'text'       => 'Children decide how their creation can make a difference.',
		'style_slug' => 'orange',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/vision-journey-icon-celebration.jpeg' ),
		'title'      => 'The Celebration',
		'quote'      => '"Look what we did together!"',
		'text'       => 'Children share what they created and celebrate their progress.',
		'style_slug' => 'blue',
	),
);
$vision_roadmap_journey_style_slugs_allowed = array( 'pink', 'purple', 'green', 'orange', 'blue' );
$vision_roadmap_journey_steps_raw           = bdc_get_acf_repeater( 'vision_roadmap_journey_steps', $vision_roadmap_journey_steps_defaults, $vision_page_id );
$vision_roadmap_journey_steps               = array();

foreach ( $vision_roadmap_journey_steps_raw as $index => $row ) {
	$default = $vision_roadmap_journey_steps_defaults[ $index ] ?? array(
		'icon'       => '',
		'title'      => '',
		'quote'      => '',
		'text'       => '',
		'style_slug' => 'pink',
	);

	$title      = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$quote      = isset( $row['quote'] ) ? trim( (string) $row['quote'] ) : '';
	$text       = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';
	$style_slug = isset( $row['style_slug'] ) ? sanitize_key( (string) $row['style_slug'] ) : '';

	if ( ! in_array( $style_slug, $vision_roadmap_journey_style_slugs_allowed, true ) ) {
		$style_slug = (string) $default['style_slug'];
	}

	$resolved = array(
		'icon'       => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'      => '' !== $title ? $title : (string) $default['title'],
		'quote'      => '' !== $quote ? $quote : (string) $default['quote'],
		'text'       => '' !== $text ? $text : (string) $default['text'],
		'style_slug' => $style_slug,
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) && '' === trim( $resolved['quote'] ) ) {
		continue;
	}

	$vision_roadmap_journey_steps[] = $resolved;
}

if ( empty( $vision_roadmap_journey_steps ) ) {
	$vision_roadmap_journey_steps = $vision_roadmap_journey_steps_defaults;
}

$vision_moments_title = bdc_get_acf_text(
	'vision_moments_title',
	'Moments We\'ll Create Together',
	$vision_page_id
);
$vision_moments_intro = bdc_get_acf_text(
	'vision_moments_intro',
	'Soon, this space will be filled with real moments created by Bright Dreamers.',
	$vision_page_id
);
$vision_moments_list_defaults = array(
	array( 'item_text' => 'Community murals', 'is_more' => false ),
	array( 'item_text' => 'Gardens', 'is_more' => false ),
	array( 'item_text' => 'Dream Market', 'is_more' => false ),
	array( 'item_text' => 'Creative collaborators', 'is_more' => false ),
	array( 'item_text' => 'Kindness projects', 'is_more' => false ),
	array( 'item_text' => 'Donation drives', 'is_more' => false ),
	array( 'item_text' => 'Presenting ideas', 'is_more' => false ),
	array( 'item_text' => 'Children\'s events', 'is_more' => false ),
	array( 'item_text' => 'And so much more!', 'is_more' => true ),
);
$vision_moments_list_raw = bdc_get_acf_repeater( 'vision_moments_list', $vision_moments_list_defaults, $vision_page_id );
$vision_moments_list     = array();

foreach ( $vision_moments_list_raw as $index => $row ) {
	$default   = $vision_moments_list_defaults[ $index ] ?? array( 'item_text' => '', 'is_more' => false );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$item_text = '' !== $item_text ? $item_text : (string) $default['item_text'];
	$is_more   = ! empty( $row['is_more'] );

	if ( ! $is_more && isset( $default['is_more'] ) ) {
		$is_more = (bool) $default['is_more'];
	}

	if ( '' === trim( $item_text ) ) {
		continue;
	}

	$vision_moments_list[] = array(
		'item_text' => $item_text,
		'is_more'   => $is_more,
	);
}

if ( empty( $vision_moments_list ) ) {
	$vision_moments_list = $vision_moments_list_defaults;
}

$vision_moments_photo_art_url = bdc_get_acf_image_url(
	'vision_moments_photo_art',
	bdc_theme_asset_url( 'assets/images/vision-moments-photo-art.jpeg' ),
	$vision_page_id
);
$vision_moments_photo_art_ver = bdc_asset_version( 'assets/images/vision-moments-photo-art.jpeg' );
if ( $vision_moments_photo_art_ver && false !== strpos( (string) $vision_moments_photo_art_url, 'vision-moments-photo-art' ) ) {
	$vision_moments_photo_art_url = add_query_arg( 'v', $vision_moments_photo_art_ver, $vision_moments_photo_art_url );
}
$vision_moments_photo_art_alt = bdc_get_acf_text(
	'vision_moments_photo_art_alt',
	'Children creating colorful art together',
	$vision_page_id
);
$vision_moments_balloon_theme_path = 'assets/images/vision-moments-balloon.png';
$vision_moments_balloon_url        = bdc_get_acf_image_url(
	'vision_moments_balloon',
	bdc_theme_asset_url( $vision_moments_balloon_theme_path ),
	$vision_page_id
);
$vision_moments_balloon_ver = bdc_asset_version( $vision_moments_balloon_theme_path );
if ( $vision_moments_balloon_ver && false !== strpos( (string) $vision_moments_balloon_url, 'vision-moments-balloon' ) ) {
	$vision_moments_balloon_url = add_query_arg( 'v', $vision_moments_balloon_ver, $vision_moments_balloon_url );
}
$vision_moments_feature_title = bdc_get_acf_text(
	'vision_moments_feature_title',
	'Our story is just beginning.',
	$vision_page_id
);
$vision_moments_feature_text = bdc_get_acf_text(
	'vision_moments_feature_text',
	'We can\'t wait to fill this space with creativity, courage, friendship, and kindness.',
	$vision_page_id
);
$vision_moments_photo_read_url = bdc_get_acf_image_url(
	'vision_moments_photo_read',
	bdc_theme_asset_url( 'assets/images/vision-moments-photo-read.jpeg' ),
	$vision_page_id
);
$vision_moments_photo_read_ver = bdc_asset_version( 'assets/images/vision-moments-photo-read.jpeg' );
if ( $vision_moments_photo_read_ver && false !== strpos( (string) $vision_moments_photo_read_url, 'vision-moments-photo-read' ) ) {
	$vision_moments_photo_read_url = add_query_arg( 'v', $vision_moments_photo_read_ver, $vision_moments_photo_read_url );
}
$vision_moments_photo_read_alt = bdc_get_acf_text(
	'vision_moments_photo_read_alt',
	'Children reading and learning together',
	$vision_page_id
);
$vision_moments_photo_give_url = bdc_get_acf_image_url(
	'vision_moments_photo_give',
	bdc_theme_asset_url( 'assets/images/vision-moments-photo-give.jpeg' ),
	$vision_page_id
);
$vision_moments_photo_give_ver = bdc_asset_version( 'assets/images/vision-moments-photo-give.jpeg' );
if ( $vision_moments_photo_give_ver && false !== strpos( (string) $vision_moments_photo_give_url, 'vision-moments-photo-give' ) ) {
	$vision_moments_photo_give_url = add_query_arg( 'v', $vision_moments_photo_give_ver, $vision_moments_photo_give_url );
}
$vision_moments_photo_give_alt = bdc_get_acf_text(
	'vision_moments_photo_give_alt',
	'Children packing a thank-you donation box together',
	$vision_page_id
);

$vision_partner_title = bdc_get_acf_text(
	'vision_partner_title',
	'Become a Founding Partner',
	$vision_page_id
);
$vision_partner_intro = bdc_get_acf_text(
	'vision_partner_intro',
	'Help bring young ideas to life. We\'re looking for businesses, artists, mentors, volunteers, community organizations, and supporters who believe children deserve opportunities to explore their ideas.',
	$vision_page_id
);
$vision_partner_icons_defaults = array(
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/vision-partner-icon-materials-removebg-preview.png' ),
		'label' => 'Materials & Supplies',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/vision-partner-icon-space-removebg-preview.png' ),
		'label' => 'Creative Space',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/vision-partner-icon-skills.jpeg' ),
		'label' => 'Professional Skills',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/vision-partner-icon-community.jpeg' ),
		'label' => 'Community Opportunities',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/vision-partner-icon-mentorship.png' ),
		'label' => 'Mentorship',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/vision-partner-icon-event.jpeg' ),
		'label' => 'Event',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/vision-partner-icon-funding.jpeg' ),
		'label' => 'Project Funding',
	),
);
$vision_partner_icons_raw = bdc_get_acf_repeater( 'vision_partner_icons', $vision_partner_icons_defaults, $vision_page_id );
$vision_partner_icons     = array();

foreach ( $vision_partner_icons_raw as $index => $row ) {
	$default = $vision_partner_icons_defaults[ $index ] ?? array(
		'icon'  => '',
		'label' => '',
	);

	$label = isset( $row['label'] ) ? trim( (string) $row['label'] ) : '';
	$label = '' !== $label ? $label : (string) $default['label'];

	$resolved = array(
		'icon'  => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'label' => $label,
	);

	if ( '' === trim( $resolved['label'] ) && '' === trim( $resolved['icon'] ) ) {
		continue;
	}

	$vision_partner_icons[] = $resolved;
}

if ( empty( $vision_partner_icons ) ) {
	$vision_partner_icons = $vision_partner_icons_defaults;
}

$vision_partner_btn_text = bdc_get_acf_text(
	'vision_partner_btn_text',
	'Become a Founding Partner',
	$vision_page_id
);
$vision_partner_btn_link = bdc_get_acf_link(
	'vision_partner_btn_link',
	array(
		'title'  => 'Become a Founding Partner',
		'url'    => bdc_page_url( 'get-involved.html' ),
		'target' => '',
	),
	$vision_page_id
);

$vision_together_jar_url = bdc_get_acf_image_url(
	'vision_together_jar',
	bdc_theme_asset_url( 'assets/images/vision-together-jar.png' ),
	$vision_page_id
);
$vision_together_jar_ver = bdc_asset_version( 'assets/images/vision-together-jar.png' );
if ( $vision_together_jar_ver && false !== strpos( (string) $vision_together_jar_url, 'vision-together-jar' ) ) {
	$vision_together_jar_url = add_query_arg( 'v', $vision_together_jar_ver, $vision_together_jar_url );
}
$vision_together_stars_url = bdc_get_acf_image_url(
	'vision_together_stars',
	bdc_theme_asset_url( 'assets/images/for-parents-expect-stars.png' ),
	$vision_page_id
);
$vision_together_title = bdc_get_acf_text(
	'vision_together_title',
	'Together, We Can Turn Little Ideas Into Something',
	$vision_page_id
);
$vision_together_title_accent = bdc_get_acf_text(
	'vision_together_title_accent',
	'Big',
	$vision_page_id
);
$vision_together_list_defaults = array(
	array( 'item_text' => 'A mural can brighten a neighborhood.' ),
	array( 'item_text' => 'A handmade creation can support a local cause.' ),
	array( 'item_text' => 'A garden can bring people together.' ),
	array( 'item_text' => 'A child\'s idea can become a project.' ),
	array( 'item_text' => 'And a project can make a child discover "I can create something that matters."' ),
);
$vision_together_list_raw = bdc_get_acf_repeater( 'vision_together_list', $vision_together_list_defaults, $vision_page_id );
$vision_together_list     = array();

foreach ( $vision_together_list_raw as $index => $row ) {
	$default   = $vision_together_list_defaults[ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$item_text = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $item_text ) ) {
		continue;
	}

	$vision_together_list[] = $item_text;
}

if ( empty( $vision_together_list ) ) {
	foreach ( $vision_together_list_defaults as $default_item ) {
		$vision_together_list[] = (string) $default_item['item_text'];
	}
}

$vision_together_apply_btn_text = bdc_get_acf_text(
	'vision_together_apply_btn_text',
	'Apply to Become a Bright Dreamer',
	$vision_page_id
);
$vision_together_apply_btn_link = bdc_get_acf_link(
	'vision_together_apply_btn_link',
	array(
		'title'  => 'Apply to Become a Bright Dreamer',
		'url'    => bdc_page_url( 'apply-to-become.html' ),
		'target' => '',
	),
	$vision_page_id
);
$vision_together_story_btn_text = bdc_get_acf_text(
	'vision_together_story_btn_text',
	'Explore Our Story',
	$vision_page_id
);
$vision_together_story_btn_link = bdc_get_acf_link(
	'vision_together_story_btn_link',
	array(
		'title'  => 'Explore Our Story',
		'url'    => bdc_page_url( 'about.html' ),
		'target' => '',
	),
	$vision_page_id
);
$vision_together_support_btn_text = bdc_get_acf_text(
	'vision_together_support_btn_text',
	'Support Our Vision',
	$vision_page_id
);
$vision_together_support_btn_link = bdc_get_acf_link(
	'vision_together_support_btn_link',
	array(
		'title'  => 'Support Our Vision',
		'url'    => bdc_page_url( 'get-involved.html' ),
		'target' => '',
	),
	$vision_page_id
);
?>
    <main id="main-content">
      <?php
      // Reference lockup: plain navy body (no accent colors), checklist, icon CTAs.
      $vision_copy = trim(
        implode(
          ' ',
          array_filter(
            array(
              trim( (string) $vision_hero_lead_intro ),
              trim( (string) $vision_hero_lead_accent ),
              trim( (string) $vision_hero_text ),
            )
          )
        )
      );
      if ( '' === $vision_copy ) {
        $vision_copy = 'Every meaningful change can begin with something very small — a child saying, "I have an idea." Bright Dreamers creates a community where children are encouraged to explore what excites them, discover their talents, bring their ideas to life, and use their creativity to help others.';
      }

      $vision_checklist_html = '';
      if ( ! empty( $vision_hero_list ) ) {
        ob_start();
        ?>
          <ul class="vision-hero__list">
            <?php foreach ( $vision_hero_list as $list_item ) : ?>
            <li>
              <span class="vision-hero__check" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
              </span>
              <?php echo esc_html( $list_item ); ?>
            </li>
            <?php endforeach; ?>
          </ul>
        <?php
        $vision_checklist_html = ob_get_clean();
      }

      $vision_headline_html = bdc_hero_lines_html(
        array(
          array( 'text' => $vision_hero_title_line_1, 'class' => 'vision-hero__title-line vision-hero__title-line--navy' ),
          array( 'text' => $vision_hero_title_line_2, 'class' => 'vision-hero__title-line vision-hero__title-line--pink' ),
          array( 'text' => $vision_hero_title_line_3, 'class' => 'vision-hero__title-line vision-hero__title-line--navy' ),
        )
      );

      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'            => 'vision-hero about-hero',
          'aria_label'               => 'Our Vision',
          'section_label'            => $vision_hero_eyebrow,
          'headline_html'            => $vision_headline_html,
          'supporting_copy'          => $vision_copy,
          'supporting_copy_html'     => '',
          'extra_content_html'       => $vision_checklist_html,
          'primary_cta_text'         => $vision_together_support_btn_text,
          'primary_cta_link'         => $vision_together_support_btn_link,
          'secondary_cta_text'       => $vision_together_story_btn_text,
          'secondary_cta_link'       => $vision_together_story_btn_link,
          'hero_image'               => $vision_hero_banner_url,
          'hero_image_mobile'        => $vision_hero_banner_mobile_url,
          'hero_image_alt'           => $vision_hero_banner_alt,
          'media_class'              => 'about-hero__media',
          'image_class'              => 'about-hero__banner',
          'primary_cta_show_icon'    => true,
          'secondary_cta_show_heart' => true,
          'actions_class'            => 'home-hero__actions--inline',
          'inner_data_attrs'         => array(
            'data-bdc-hero-text-col'   => '36',
            'data-bdc-hero-banner-col' => '64',
          ),
        )
      );
      ?>

      <section class="vision-pillars section-padding" aria-labelledby="vision-pillars-title">
        <div class="site-container">
          <h2 class="vision-pillars__title" id="vision-pillars-title">
            <?php echo esc_html( $vision_pillars_title ); ?>
            <svg
              class="vision-pillars__title-icon"
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

          <div class="vision-pillars__grid">
            <?php require get_template_directory() . '/template-parts/vision-pillars-grid.php'; ?>
          </div>
        </div>
      </section>

      <section class="vision-roadmap section-padding" aria-labelledby="vision-roadmap-title">
        <div class="site-container vision-roadmap__inner">
          <div class="vision-roadmap__goals">
            <h2 class="vision-roadmap__title" id="vision-roadmap-title">
              <?php echo esc_html( $vision_roadmap_goals_title ); ?>
              <svg
                class="vision-roadmap__title-icon"
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
            <p class="vision-roadmap__intro"><?php echo esc_html( $vision_roadmap_goals_intro ); ?></p>
            <ul class="vision-roadmap__list">
              <?php foreach ( $vision_roadmap_goals as $goal_item ) : ?>
              <li>
                <span class="vision-roadmap__check" aria-hidden="true">
                  <svg
                    viewBox="0 0 24 24"
                    width="11"
                    height="11"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path d="M5 13l4 4L19 7" />
                  </svg>
                </span>
                <?php echo esc_html( $goal_item ); ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="vision-roadmap__journey">
            <h2 class="vision-roadmap__title" id="vision-journey-title">
              <?php echo esc_html( $vision_roadmap_journey_title ); ?>
              <svg
                class="vision-roadmap__title-icon"
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

            <?php require get_template_directory() . '/template-parts/vision-roadmap-journey.php'; ?>
          </div>
        </div>
      </section>

      <section class="vision-moments section-padding" aria-labelledby="vision-moments-title">
        <div class="site-container vision-moments__inner">
          <article class="vision-moments__card">
            <h2 class="vision-section__title" id="vision-moments-title">
              <?php echo esc_html( $vision_moments_title ); ?>
              <svg
                class="vision-section__title-icon"
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
            <p class="vision-moments__intro">
              <?php echo esc_html( $vision_moments_intro ); ?>
            </p>
            <ul class="vision-moments__list">
              <?php foreach ( $vision_moments_list as $moment_item ) : ?>
              <li<?php echo ! empty( $moment_item['is_more'] ) ? ' class="vision-moments__list-more"' : ''; ?>>
                <span class="vision-moments__check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                </span>
                <?php echo esc_html( $moment_item['item_text'] ); ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </article>

          <div class="vision-moments__gallery">
            <figure class="vision-moments__photo-wrap">
              <div class="lazy-img-wrap">
                <img
                  class="vision-moments__photo lazy-img"
                  src="<?php echo esc_attr( $vision_hero_lazy_placeholder ); ?>"
                  data-src="<?php echo esc_url( $vision_moments_photo_art_url ); ?>"
                  alt="<?php echo esc_attr( $vision_moments_photo_art_alt ); ?>"
                  width="320"
                  height="400"
                  decoding="async"
                />
              </div>
            </figure>

            <article class="vision-moments__feature">
              <figure class="vision-moments__balloon">
                <img
                  class="vision-moments__balloon-img"
                  src="<?php echo esc_url( $vision_moments_balloon_url ); ?>"
                  alt=""
                  width="280"
                  height="320"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
              </figure>
              <div class="vision-moments__story">
                <?php if ( '' !== trim( $vision_moments_feature_title ) ) : ?>
                <p class="vision-moments__feature-title"><?php echo esc_html( $vision_moments_feature_title ); ?></p>
                <?php endif; ?>
                <?php if ( '' !== trim( $vision_moments_feature_text ) ) : ?>
                <p class="vision-moments__feature-text">
                  <?php echo esc_html( $vision_moments_feature_text ); ?>
                </p>
                <?php endif; ?>
              </div>
            </article>

            <figure class="vision-moments__photo-wrap">
              <div class="lazy-img-wrap">
                <img
                  class="vision-moments__photo lazy-img"
                  src="<?php echo esc_attr( $vision_hero_lazy_placeholder ); ?>"
                  data-src="<?php echo esc_url( $vision_moments_photo_read_url ); ?>"
                  alt="<?php echo esc_attr( $vision_moments_photo_read_alt ); ?>"
                  width="320"
                  height="400"
                  decoding="async"
                />
              </div>
            </figure>

            <figure class="vision-moments__photo-wrap">
              <div class="lazy-img-wrap">
                <img
                  class="vision-moments__photo lazy-img"
                  src="<?php echo esc_attr( $vision_hero_lazy_placeholder ); ?>"
                  data-src="<?php echo esc_url( $vision_moments_photo_give_url ); ?>"
                  alt="<?php echo esc_attr( $vision_moments_photo_give_alt ); ?>"
                  width="320"
                  height="400"
                  decoding="async"
                />
              </div>
            </figure>

            <article class="vision-moments__list-slide" aria-label="<?php echo esc_attr( $vision_moments_title ); ?>">
              <ul class="vision-moments__list vision-moments__list--slide">
                <?php foreach ( $vision_moments_list as $moment_item ) : ?>
                <li<?php echo ! empty( $moment_item['is_more'] ) ? ' class="vision-moments__list-more"' : ''; ?>>
                  <span class="vision-moments__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  <?php echo esc_html( $moment_item['item_text'] ); ?>
                </li>
                <?php endforeach; ?>
              </ul>
            </article>
          </div>
        </div>
      </section>

      <section class="vision-partner section-padding" aria-labelledby="vision-partner-title">
        <div class="site-container">
          <div class="vision-partner__card">
            <div class="vision-partner__inner">
              <div class="vision-partner__copy">
                <h2 class="vision-section__title" id="vision-partner-title">
                  <?php echo esc_html( $vision_partner_title ); ?>
                  <svg
                    class="vision-section__title-icon"
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
                <p class="vision-partner__intro">
                  <?php echo esc_html( $vision_partner_intro ); ?>
                </p>
              </div>

              <div class="vision-partner__panel">
                <div class="vision-partner__panel-inner">
                  <div class="vision-partner__icons" role="list">
                    <?php foreach ( $vision_partner_icons as $partner_icon ) : ?>
                    <?php if ( '' === trim( $partner_icon['label'] ) ) : ?>
                      <?php continue; ?>
                    <?php endif; ?>
                <div class="vision-partner__icon-item" role="listitem">
                  <img
                    class="vision-partner__icon"
                    src="<?php echo esc_url( $partner_icon['icon'] ); ?>"
                    alt=""
                    width="52"
                    height="52"
                    loading="lazy"
                    decoding="async"
                  />
                  <p class="vision-partner__icon-label"><?php echo esc_html( $partner_icon['label'] ); ?></p>
                </div>
                    <?php endforeach; ?>
              </div>

                  <?php if ( ! empty( $vision_partner_btn_link['url'] ) && '' !== trim( $vision_partner_btn_text ) ) : ?>
                  <div class="vision-partner__cta-wrap">
                    <a class="btn btn--purple btn--lg btn-hover vision-partner__btn" href="<?php echo esc_url( $vision_partner_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $vision_partner_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                      <?php echo esc_html( $vision_partner_btn_text ); ?>
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
                    <svg
                      class="vision-partner__cta-heart"
                      viewBox="0 0 24 24"
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
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="vision-together section-padding" aria-labelledby="vision-together-title">
        <div class="site-container">
          <div class="vision-together__card">
            <div class="vision-together__grid">
              <div class="vision-together__jar-wrap">
                <div class="lazy-img-wrap">
                  <img
                    class="vision-together__jar lazy-img"
                    src="<?php echo esc_attr( $vision_hero_lazy_placeholder ); ?>"
                    data-src="<?php echo esc_url( $vision_together_jar_url ); ?>"
                    alt=""
                    width="170"
                    height="200"
                    decoding="async"
                    aria-hidden="true"
                  />
                </div>
                <img
                  class="vision-together__stars"
                  src="<?php echo esc_url( $vision_together_stars_url ); ?>"
                  alt=""
                  width="44"
                  height="44"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
              </div>

              <h2 class="vision-together__title" id="vision-together-title">
                <?php if ( '' !== trim( $vision_together_title ) ) : ?>
                <?php echo esc_html( $vision_together_title ); ?>
                <?php endif; ?>
                <?php if ( '' !== trim( $vision_together_title_accent ) ) : ?>
                <span class="vision-together__accent"><?php echo esc_html( $vision_together_title_accent ); ?></span>
                <?php endif; ?>
                <svg
                  class="vision-together__title-icon"
                  viewBox="0 0 24 24"
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

              <ul class="vision-together__list">
                <?php foreach ( $vision_together_list as $together_item ) : ?>
                <li>
                  <span class="vision-together__check" aria-hidden="true">
                    <svg
                      viewBox="0 0 24 24"
                      width="11"
                      height="11"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2.8"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path d="M5 13l4 4L19 7" />
                    </svg>
                  </span>
                  <?php echo esc_html( $together_item ); ?>
                </li>
                <?php endforeach; ?>
              </ul>

              <div class="vision-together__actions">
                <?php if ( ! empty( $vision_together_apply_btn_link['url'] ) && '' !== trim( $vision_together_apply_btn_text ) ) : ?>
                <a class="btn btn--solid btn--lg btn-hover" href="<?php echo esc_url( $vision_together_apply_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $vision_together_apply_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                  <?php echo esc_html( $vision_together_apply_btn_text ); ?>
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
                <?php if ( ! empty( $vision_together_story_btn_link['url'] ) && '' !== trim( $vision_together_story_btn_text ) ) : ?>
                <a
                  class="btn btn--outline btn--lg btn-hover vision-together__btn-outline"
                  href="<?php echo esc_url( $vision_together_story_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $vision_together_story_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                >
                  <?php echo esc_html( $vision_together_story_btn_text ); ?>
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
                    <circle cx="12" cy="12" r="9" />
                    <path d="M10 8.5v7l5.5-3.5L10 8.5z" fill="currentColor" stroke="none" />
                  </svg>
                </a>
                <?php endif; ?>
                <?php if ( ! empty( $vision_together_support_btn_link['url'] ) && '' !== trim( $vision_together_support_btn_text ) ) : ?>
                <a class="btn btn--orange btn--lg btn-hover" href="<?php echo esc_url( $vision_together_support_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $vision_together_support_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                  <?php echo esc_html( $vision_together_support_btn_text ); ?>
                  <svg
                    class="btn__icon"
                    viewBox="0 0 24 24"
                    width="16"
                    height="16"
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
                <div class="vision-together__deco-stars" aria-hidden="true">
                  <svg class="vision-together__deco-star" viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                    />
                  </svg>
                  <svg class="vision-together__deco-star" viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- OUR VISION SECTIONS GO HERE -->
    </main>

<?php
get_footer();
