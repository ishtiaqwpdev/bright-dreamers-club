<?php
/**
 * ACF local field groups (version-controlled).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'acf_add_local_field_group' ) ) {
	return;
}

acf_add_local_field_group(
	array(
		'key'                   => 'group_home_hero',
		'title'                 => 'Home — Hero',
		'fields'                => array(
			array(
				'key'           => 'field_home_hero_logo',
				'label'         => 'Logo',
				'name'          => 'home_hero_logo',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current theme logo.',
			),
			array(
				'key'           => 'field_home_hero_logo_alt',
				'label'         => 'Logo alt text',
				'name'          => 'home_hero_logo_alt',
				'type'          => 'text',
				'default_value' => 'Bright Dreamers — Dream, Create, Grow, Give',
			),
			array(
				'key'           => 'field_home_hero_eyebrow',
				'label'         => 'Eyebrow',
				'name'          => 'home_hero_eyebrow',
				'type'          => 'text',
				'default_value' => 'Welcome to Bright Dreamers',
			),
			array(
				'key'           => 'field_home_hero_title_bright',
				'label'         => 'Title line 1',
				'name'          => 'home_hero_title_bright',
				'type'          => 'text',
				'default_value' => 'Bright',
			),
			array(
				'key'           => 'field_home_hero_title_dreamers',
				'label'         => 'Title line 2',
				'name'          => 'home_hero_title_dreamers',
				'type'          => 'text',
				'default_value' => 'Dreamers',
			),
			array(
				'key'           => 'field_home_hero_tagline',
				'label'         => 'Tagline',
				'name'          => 'home_hero_tagline',
				'type'          => 'text',
				'default_value' => 'Dream • Create • Grow • Give',
				'instructions'  => 'Separate words with • so each dot can use a brand color.',
			),
			array(
				'key'           => 'field_home_hero_text',
				'label'         => 'Intro text',
				'name'          => 'home_hero_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'A nonprofit community where children\'s ideas become real projects that build confidence, creativity, kindness, and positive change.',
			),
			array(
				'key'           => 'field_home_hero_primary_cta',
				'label'         => 'Primary button',
				'name'          => 'home_hero_primary_cta',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_home_hero_secondary_cta',
				'label'         => 'Secondary button',
				'name'          => 'home_hero_secondary_cta',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_home_hero_banner',
				'label'         => 'Hero banner image',
				'name'          => 'home_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Front page uses the theme file assets/images/home-hero-banner.jpg (and home-hero-banner-mobile.jpg on mobile). This upload is not shown on the live hero.',
			),
			array(
				'key'           => 'field_home_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'home_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'Girl on a colorful path toward a sunlit city skyline with notebook ideas and inspirational messages',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_home_pillars',
		'title'                 => 'Home — Pillars',
		'fields'                => array(
			array(
				'key'        => 'field_home_pillars_idea',
				'label'      => 'Pillar 1 — It All Starts With One Idea',
				'name'       => 'home_pillars_idea',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_home_pillars_idea_image',
						'label'         => 'Photo',
						'name'          => 'image',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'instructions'  => 'Leave empty to keep the current books photo.',
					),
					array(
						'key'           => 'field_home_pillars_idea_title',
						'label'         => 'Heading',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'It All Starts With One Idea',
					),
					array(
						'key'           => 'field_home_pillars_idea_quote',
						'label'         => 'Quote',
						'name'          => 'quote',
						'type'          => 'text',
						'default_value' => 'I have an idea.',
					),
					array(
						'key'           => 'field_home_pillars_idea_text',
						'label'         => 'Body text',
						'name'          => 'text',
						'type'          => 'textarea',
						'rows'          => 4,
						'default_value' => 'We empower children to turn their ideas into projects that make a difference. With support, resources, and a community of dreamers, their ideas can change the world.',
					),
				),
			),
			array(
				'key'        => 'field_home_pillars_mission',
				'label'      => 'Pillar 2 — Our Mission',
				'name'       => 'home_pillars_mission',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_home_pillars_mission_title',
						'label'         => 'Heading',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'Our Mission',
					),
					array(
						'key'           => 'field_home_pillars_mission_intro',
						'label'         => 'Intro text',
						'name'          => 'intro_text',
						'type'          => 'textarea',
						'rows'          => 2,
						'default_value' => 'We believe every child deserves the opportunity to:',
					),
					array(
						'key'          => 'field_home_pillars_mission_list',
						'label'        => 'Mission list',
						'name'         => 'list_items',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add list item',
						'min'          => 1,
						'max'          => 6,
						'sub_fields'   => array(
							array(
								'key'   => 'field_home_pillars_mission_list_text',
								'label' => 'Item text',
								'name'  => 'item_text',
								'type'  => 'text',
							),
						),
					),
					array(
						'key'           => 'field_home_pillars_mission_closing',
						'label'         => 'Closing text',
						'name'          => 'closing_text',
						'type'          => 'textarea',
						'rows'          => 3,
						'default_value' => 'Our mission is to help children discover who they are, what they love, and the impact they can make.',
					),
					array(
						'key'           => 'field_home_pillars_mission_link',
						'label'         => 'Link',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
			array(
				'key'        => 'field_home_pillars_inspire',
				'label'      => 'Pillar 3 — Inspire',
				'name'       => 'home_pillars_inspire',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_home_pillars_inspire_image',
						'label'         => 'Photo',
						'name'          => 'image',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'instructions'  => 'Leave empty to keep the current jar photo.',
					),
					array(
						'key'           => 'field_home_pillars_inspire_line_1',
						'label'         => 'Line 1',
						'name'          => 'line_1',
						'type'          => 'text',
						'default_value' => 'Together, we can',
					),
					array(
						'key'           => 'field_home_pillars_inspire_line_2',
						'label'         => 'Line 2',
						'name'          => 'line_2',
						'type'          => 'text',
						'default_value' => 'inspire big',
					),
					array(
						'key'           => 'field_home_pillars_inspire_accent_1',
						'label'         => 'Pink accent word',
						'name'          => 'accent_1',
						'type'          => 'text',
						'default_value' => 'dreams',
					),
					array(
						'key'           => 'field_home_pillars_inspire_line_3',
						'label'         => 'Line 3',
						'name'          => 'line_3',
						'type'          => 'text',
						'default_value' => 'and create lasting',
					),
					array(
						'key'           => 'field_home_pillars_inspire_accent_2',
						'label'         => 'Green accent word',
						'name'          => 'accent_2',
						'type'          => 'text',
						'default_value' => 'change.',
					),
					array(
						'key'           => 'field_home_pillars_inspire_underline',
						'label'         => 'Underline decoration',
						'name'          => 'underline_image',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'instructions'  => 'Leave empty to keep the current underline image.',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_home_different',
		'title'                 => 'Home — What Makes Us Different',
		'fields'                => array(
			array(
				'key'           => 'field_home_different_title',
				'label'         => 'Section title',
				'name'          => 'home_different_title',
				'type'          => 'text',
				'default_value' => 'What Makes Bright Dreamers Different?',
			),
			array(
				'key'          => 'field_home_different_items',
				'label'        => 'Items',
				'name'         => 'home_different_items',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add item',
				'min'          => 1,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all six default items. Icon images are optional — defaults stay if not set.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_home_different_item_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_home_different_item_name',
						'label' => 'Name',
						'name'  => 'name',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_home_different_item_description',
						'label' => 'Description',
						'name'  => 'description',
						'type'  => 'text',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_home_reality',
		'title'                 => 'Home — How Ideas Become Reality',
		'fields'                => array(
			array(
				'key'           => 'field_home_reality_title',
				'label'         => 'Section title',
				'name'          => 'home_reality_title',
				'type'          => 'text',
				'default_value' => 'How Ideas Become Reality',
			),
			array(
				'key'          => 'field_home_reality_steps',
				'label'        => 'Steps',
				'name'         => 'home_reality_steps',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add step',
				'min'          => 1,
				'max'          => 8,
				'instructions' => 'Leave the repeater empty to keep all six default steps. Color style keeps the theme default per row if not set.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_home_reality_step_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_home_reality_step_title',
						'label' => 'Step title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_home_reality_step_description',
						'label' => 'Description',
						'name'  => 'description',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_home_reality_step_style',
						'label'         => 'Color style',
						'name'          => 'style_slug',
						'type'          => 'select',
						'choices'       => array(
							''          => 'Default for this row',
							'dream'     => 'Dream',
							'imagine'   => 'Imagine',
							'create'    => 'Create',
							'share'     => 'Share',
							'help'      => 'Help Others',
							'celebrate' => 'Celebrate',
						),
						'default_value' => '',
						'allow_null'  => 1,
						'ui'          => 0,
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_home_explore',
		'title'                 => 'Home — Explore Experiences',
		'fields'                => array(
			array(
				'key'           => 'field_home_explore_title',
				'label'         => 'Section title',
				'name'          => 'home_explore_title',
				'type'          => 'text',
				'default_value' => 'Explore Experiences',
			),
			array(
				'key'          => 'field_home_explore_cards',
				'label'        => 'Experience cards',
				'name'         => 'home_explore_cards',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add card',
				'min'          => 1,
				'max'          => 6,
				'instructions' => 'Leave empty to keep all four default program cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_home_explore_card_photo',
						'label'         => 'Photo',
						'name'          => 'photo',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
					),
					array(
						'key'   => 'field_home_explore_card_photo_alt',
						'label' => 'Photo alt text',
						'name'  => 'photo_alt',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_home_explore_card_icon',
						'label'         => 'Card icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_home_explore_card_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_home_explore_card_text',
						'label' => 'Description',
						'name'  => 'description',
						'type'  => 'textarea',
						'rows'  => 2,
					),
					array(
						'key'           => 'field_home_explore_card_link',
						'label'         => 'Learn More link',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_home_spotlight',
		'title'                 => 'Home — Spotlight',
		'fields'                => array(
			array(
				'key'        => 'field_home_spotlight_ideas',
				'label'      => 'Card 1 — Children\'s Ideas Matter',
				'name'       => 'home_spotlight_ideas',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_home_spotlight_ideas_title',
						'label'         => 'Title',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'Children\'s Ideas Matter',
					),
					array(
						'key'           => 'field_home_spotlight_ideas_lead',
						'label'         => 'Lead paragraph',
						'name'          => 'lead',
						'type'          => 'textarea',
						'rows'          => 2,
						'default_value' => 'Bright Dreamers is built with children—not just for children.',
					),
					array(
						'key'           => 'field_home_spotlight_ideas_body',
						'label'         => 'Body paragraph',
						'name'          => 'body',
						'type'          => 'textarea',
						'rows'          => 4,
						'default_value' => 'Many of our projects begin with children\'s own ideas. Children help imagine new activities, suggest community projects, and inspire future programs through our Young Dreamers Council.',
					),
					array(
						'key'           => 'field_home_spotlight_ideas_highlight',
						'label'         => 'Highlight text',
						'name'          => 'highlight',
						'type'          => 'textarea',
						'rows'          => 2,
						'new_lines'     => 'br',
						'default_value' => "Because the best ideas sometimes\ncome from the smallest voices.",
						'instructions'  => 'Use a line break for a second line.',
					),
					array(
						'key'           => 'field_home_spotlight_ideas_photo',
						'label'         => 'Photo',
						'name'          => 'photo',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
					),
					array(
						'key'           => 'field_home_spotlight_ideas_photo_alt',
						'label'         => 'Photo alt text',
						'name'          => 'photo_alt',
						'type'          => 'text',
						'default_value' => 'Children collaborating together at a table',
					),
				),
			),
			array(
				'key'        => 'field_home_spotlight_council',
				'label'      => 'Card 2 — Young Dreamers Council',
				'name'       => 'home_spotlight_council',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_home_spotlight_council_title',
						'label'         => 'Title',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'Young Dreamers Council',
					),
					array(
						'key'          => 'field_home_spotlight_council_list',
						'label'        => 'List items',
						'name'         => 'list_items',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add item',
						'min'          => 1,
						'max'          => 8,
						'sub_fields'   => array(
							array(
								'key'   => 'field_home_spotlight_council_list_text',
								'label' => 'Item text',
								'name'  => 'item_text',
								'type'  => 'text',
							),
						),
					),
					array(
						'key'           => 'field_home_spotlight_council_note',
						'label'         => 'Note',
						'name'          => 'note',
						'type'          => 'textarea',
						'rows'          => 2,
						'default_value' => 'Adult mentors guide and support them every step of the way.',
					),
					array(
						'key'           => 'field_home_spotlight_council_link',
						'label'         => 'Button link',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
					array(
						'key'           => 'field_home_spotlight_council_illustration',
						'label'         => 'Illustration',
						'name'          => 'illustration',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'instructions'  => 'Leave empty to keep the current council illustration.',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		),
		'menu_order'            => 5,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_about_hero',
		'title'                 => 'About — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_about_hero_eyebrow',
				'label'         => 'Eyebrow label',
				'name'          => 'about_hero_eyebrow',
				'type'          => 'text',
				'default_value' => 'ABOUT US',
				'instructions'  => 'Small label above the main heading.',
			),
			array(
				'key'           => 'field_about_hero_title_line_1',
				'label'         => 'Heading line 1 (navy)',
				'name'          => 'about_hero_title_line_1',
				'type'          => 'text',
				'default_value' => 'Every Child Has a Dream',
			),
			array(
				'key'           => 'field_about_hero_title_accent',
				'label'         => 'Heading accent word (pink underline)',
				'name'          => 'about_hero_title_accent',
				'type'          => 'text',
				'default_value' => 'We\'re',
				'instructions'  => 'Word shown with the decorative pink underline.',
			),
			array(
				'key'           => 'field_about_hero_title_underline',
				'label'         => 'Heading underline image',
				'name'          => 'about_hero_title_underline',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default underline graphic.',
			),
			array(
				'key'           => 'field_about_hero_title_line_2',
				'label'         => 'Heading line 2 (pink, after accent)',
				'name'          => 'about_hero_title_line_2',
				'type'          => 'text',
				'default_value' => 'Here to Help It Grow',
			),
			array(
				'key'           => 'field_about_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'about_hero_text',
				'type'          => 'textarea',
				'rows'          => 4,
				'new_lines'     => '',
				'default_value' => 'Bright Dreamers is a nonprofit community where children are encouraged to dream freely, explore their ideas, create with confidence, and make a positive difference in the world.',
			),
			array(
				'key'           => 'field_about_hero_primary_btn_text',
				'label'         => 'Primary button — text',
				'name'          => 'about_hero_primary_btn_text',
				'type'          => 'text',
				'default_value' => 'Apply to Become a Bright Dreamer',
				'instructions'  => 'Label shown on the solid pink button (star icon stays in the design).',
			),
			array(
				'key'           => 'field_about_hero_primary_btn_link',
				'label'         => 'Primary button — link',
				'name'          => 'about_hero_primary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
				'instructions'  => 'Where the primary button goes. Leave empty to keep the default Apply page link.',
			),
			array(
				'key'           => 'field_about_hero_secondary_btn_text',
				'label'         => 'Secondary button — text',
				'name'          => 'about_hero_secondary_btn_text',
				'type'          => 'text',
				'default_value' => 'See Our Vision',
				'instructions'  => 'Label shown on the outline button (heart icon stays in the design).',
			),
			array(
				'key'           => 'field_about_hero_secondary_btn_link',
				'label'         => 'Secondary button — link',
				'name'          => 'about_hero_secondary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
				'instructions'  => 'Where the secondary button goes. Leave empty to keep the default Our Vision page link.',
			),
			array(
				'key'           => 'field_about_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'about_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Banner image is loaded from the theme file assets/images/about-banner.png (Git). This field is not used on the front end.',
			),
			array(
				'key'           => 'field_about_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'about_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'Children creating art together at Bright Dreamers Club',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-about.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_about_story',
		'title'                 => 'About — Our Story',
		'fields'                => array(
			array(
				'key'           => 'field_about_story_title',
				'label'         => 'Section title',
				'name'          => 'about_story_title',
				'type'          => 'text',
				'default_value' => 'Our Story',
				'instructions'  => 'Heart icon next to the title stays in the design.',
			),
			array(
				'key'           => 'field_about_story_photo',
				'label'         => 'Main photo',
				'name'          => 'about_story_photo',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default Our Story photo.',
			),
			array(
				'key'           => 'field_about_story_photo_alt',
				'label'         => 'Main photo alt text',
				'name'          => 'about_story_photo_alt',
				'type'          => 'text',
				'default_value' => 'Two Bright Dreamers holding a sign that reads Our Ideas Can Change The World',
			),
			array(
				'key'           => 'field_about_story_paragraph_1',
				'label'         => 'Paragraph 1',
				'name'          => 'about_story_paragraph_1',
				'type'          => 'textarea',
				'rows'          => 4,
				'new_lines'     => '',
				'default_value' => 'It started at home. Bright Dreamers began with two little girls full of imagination. Every day they asked questions, invented ideas, designed projects, and dreamed about making the world a little brighter.',
			),
			array(
				'key'           => 'field_about_story_paragraph_2',
				'label'         => 'Paragraph 2',
				'name'          => 'about_story_paragraph_2',
				'type'          => 'textarea',
				'rows'          => 2,
				'new_lines'     => '',
				'default_value' => 'Watching them made us realize something important…',
			),
			array(
				'key'           => 'field_about_story_paragraph_highlight',
				'label'         => 'Highlight paragraph (pink)',
				'name'          => 'about_story_paragraph_highlight',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Children don\'t need someone to tell them what to dream. They need someone who believes in their dreams.',
				'instructions'  => 'Shown in bold pink in the design.',
			),
			array(
				'key'           => 'field_about_story_paragraph_3',
				'label'         => 'Closing paragraph',
				'name'          => 'about_story_paragraph_3',
				'type'          => 'textarea',
				'rows'          => 4,
				'new_lines'     => '',
				'default_value' => 'Today, we\'re building a small, intentional nonprofit community where children have opportunities to discover their talents, explore their own ideas, and grow into confident, kind, and creative people.',
			),
			array(
				'key'           => 'field_about_story_jar',
				'label'         => 'Decorative jar image',
				'name'          => 'about_story_jar',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Side illustration. Leave empty to keep the default jar image.',
			),
			array(
				'key'           => 'field_about_story_jar_alt',
				'label'         => 'Jar image alt text',
				'name'          => 'about_story_jar_alt',
				'type'          => 'text',
				'instructions'  => 'Optional. Leave empty if decorative only.',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-about.php',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_about_believe',
		'title'                 => 'About — We Believe',
		'fields'                => array(
			array(
				'key'           => 'field_about_believe_title',
				'label'         => 'Section title',
				'name'          => 'about_believe_title',
				'type'          => 'text',
				'default_value' => 'We Believe',
				'instructions'  => 'Star icon next to the title stays in the design.',
			),
			array(
				'key'           => 'field_about_believe_deco_left',
				'label'         => 'Left decoration image',
				'name'          => 'about_believe_deco_left',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default dots graphic on the left.',
			),
			array(
				'key'           => 'field_about_believe_deco_right',
				'label'         => 'Right decoration image',
				'name'          => 'about_believe_deco_right',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default dots graphic on the right.',
			),
			array(
				'key'          => 'field_about_believe_cards',
				'label'        => 'Belief cards',
				'name'         => 'about_believe_cards',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add card',
				'min'          => 1,
				'max'          => 8,
				'instructions' => 'Leave rows empty to keep all six default belief cards with icons and colors.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_about_believe_card_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
						'instructions'  => 'Optional — default icon is kept if empty.',
					),
					array(
						'key'   => 'field_about_believe_card_text',
						'label' => 'Text',
						'name'  => 'text',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_about_believe_card_style',
						'label'         => 'Card color',
						'name'          => 'style_slug',
						'type'          => 'select',
						'choices'       => array(
							'pink'   => 'Pink',
							'purple' => 'Purple',
							'yellow' => 'Yellow',
							'green'  => 'Green',
							'peach'  => 'Peach',
							'blue'   => 'Blue',
						),
						'default_value' => 'pink',
						'allow_null'    => 1,
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-about.php',
				),
			),
		),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_about_panels',
		'title'                 => 'About — Panels',
		'fields'                => array(
			array(
				'key'          => 'field_about_panel_journey',
				'label'        => 'Panel 1 — Children Lead the Journey',
				'name'         => 'about_panel_journey',
				'type'         => 'group',
				'layout'       => 'block',
				'instructions' => 'Crown and heart icons stay in the design.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_about_panel_journey_aria',
						'label'         => 'Accessibility label',
						'name'          => 'aria_label',
						'type'          => 'text',
						'default_value' => 'Children Lead the Journey — a Bright Dreamer holding a sign that reads My idea Can Help Others',
					),
					array(
						'key'           => 'field_about_panel_journey_title',
						'label'         => 'Title',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'Children Lead the Journey',
					),
					array(
						'key'           => 'field_about_panel_journey_p1',
						'label'         => 'Paragraph 1',
						'name'          => 'paragraph_1',
						'type'          => 'textarea',
						'rows'          => 3,
						'new_lines'     => '',
						'default_value' => 'At Bright Dreamers, children are not just participants. They are creators. Dreamers. Problem solvers. Idea makers.',
					),
					array(
						'key'           => 'field_about_panel_journey_p2',
						'label'         => 'Paragraph 2',
						'name'          => 'paragraph_2',
						'type'          => 'textarea',
						'rows'          => 3,
						'new_lines'     => '',
						'default_value' => 'Many of our projects begin with children\'s own ideas. Adults guide, encourage, and provide a safe environment—but we believe the best ideas often come from children themselves.',
					),
					array(
						'key'           => 'field_about_panel_journey_p3',
						'label'         => 'Paragraph 3',
						'name'          => 'paragraph_3',
						'type'          => 'textarea',
						'rows'          => 2,
						'new_lines'     => '',
						'default_value' => 'Together we turn imagination into real projects that help others.',
					),
					array(
						'key'           => 'field_about_panel_journey_figure',
						'label'         => 'Figure image',
						'name'          => 'figure',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'instructions'  => 'Leave empty to keep the default journey illustration.',
					),
					array(
						'key'           => 'field_about_panel_journey_figure_alt',
						'label'         => 'Figure alt text',
						'name'          => 'figure_alt',
						'type'          => 'text',
						'default_value' => 'A Bright Dreamer holding a sign that says My idea Can Help Others',
					),
				),
			),
			array(
				'key'          => 'field_about_panel_council',
				'label'        => 'Panel 2 — Young Dreamers Council',
				'name'         => 'about_panel_council',
				'type'         => 'group',
				'layout'       => 'block',
				'instructions' => 'Star icon next to the title stays in the design.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_about_panel_council_title',
						'label'         => 'Title',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'Young Dreamers Council',
					),
					array(
						'key'           => 'field_about_panel_council_lead',
						'label'         => 'Lead text',
						'name'          => 'lead',
						'type'          => 'text',
						'default_value' => 'Bright Dreamers believes children\'s voices matter.',
					),
					array(
						'key'          => 'field_about_panel_council_list',
						'label'        => 'List items',
						'name'         => 'list_items',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add list item',
						'min'          => 1,
						'max'          => 8,
						'instructions' => 'Leave empty to keep all five default list items.',
						'sub_fields'   => array(
							array(
								'key'   => 'field_about_panel_council_list_text',
								'label' => 'Item text',
								'name'  => 'item_text',
								'type'  => 'text',
							),
						),
					),
					array(
						'key'           => 'field_about_panel_council_note',
						'label'         => 'Note below list',
						'name'          => 'note',
						'type'          => 'text',
						'default_value' => 'Adult mentors guide and support them every step of the way.',
					),
					array(
						'key'           => 'field_about_panel_council_figure',
						'label'         => 'Figure image',
						'name'          => 'figure',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'instructions'  => 'Leave empty to keep the default council illustration.',
					),
					array(
						'key'   => 'field_about_panel_council_figure_alt',
						'label' => 'Figure alt text',
						'name'  => 'figure_alt',
						'type'  => 'text',
					),
				),
			),
			array(
				'key'        => 'field_about_panel_role',
				'label'      => 'Panel 3 — Our Role',
				'name'       => 'about_panel_role',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_about_panel_role_title',
						'label'         => 'Title',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'Our Role',
					),
					array(
						'key'           => 'field_about_panel_role_title_icon',
						'label'         => 'Title icon',
						'name'          => 'title_icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
						'instructions'  => 'Heart icon beside the title. Leave empty to keep the default.',
					),
					array(
						'key'           => 'field_about_panel_role_lead',
						'label'         => 'Lead text',
						'name'          => 'lead',
						'type'          => 'text',
						'default_value' => 'We are…',
					),
					array(
						'key'          => 'field_about_panel_role_items',
						'label'        => 'Role icons',
						'name'         => 'role_items',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add role',
						'min'          => 1,
						'max'          => 8,
						'instructions' => 'Leave empty to keep all five default roles.',
						'sub_fields'   => array(
							array(
								'key'           => 'field_about_panel_role_item_icon',
								'label'         => 'Icon',
								'name'          => 'icon',
								'type'          => 'image',
								'return_format' => 'array',
								'preview_size'  => 'thumbnail',
							),
							array(
								'key'   => 'field_about_panel_role_item_label',
								'label' => 'Label',
								'name'  => 'label',
								'type'  => 'text',
							),
						),
					),
					array(
						'key'           => 'field_about_panel_role_callout_strong',
						'label'         => 'Callout — bold text',
						'name'          => 'callout_strong',
						'type'          => 'text',
						'default_value' => 'Not instructors. Not lecturers.',
					),
					array(
						'key'           => 'field_about_panel_role_callout_text',
						'label'         => 'Callout — regular text',
						'name'          => 'callout_text',
						'type'          => 'text',
						'default_value' => 'We walk beside children on their journey.',
					),
				),
			),
			array(
				'key'          => 'field_about_panel_approach',
				'label'        => 'Panel 4 — Our Approach',
				'name'         => 'about_panel_approach',
				'type'         => 'group',
				'layout'       => 'block',
				'instructions' => 'Star icon and arrows between steps stay in the design.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_about_panel_approach_title',
						'label'         => 'Title',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'Our Approach',
					),
					array(
						'key'           => 'field_about_panel_approach_arrow',
						'label'         => 'Arrow between steps',
						'name'          => 'arrow_image',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
						'instructions'  => 'Leave empty to keep the default arrow graphic.',
					),
					array(
						'key'          => 'field_about_panel_approach_steps',
						'label'        => 'Approach steps',
						'name'         => 'steps',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add step',
						'min'          => 1,
						'max'          => 8,
						'instructions' => 'Leave empty to keep all five default steps (Dream → Give).',
						'sub_fields'   => array(
							array(
								'key'           => 'field_about_panel_approach_step_icon',
								'label'         => 'Icon',
								'name'          => 'icon',
								'type'          => 'image',
								'return_format' => 'array',
								'preview_size'  => 'thumbnail',
							),
							array(
								'key'   => 'field_about_panel_approach_step_title',
								'label' => 'Step title',
								'name'  => 'title',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_about_panel_approach_step_description',
								'label' => 'Step description',
								'name'  => 'description',
								'type'  => 'text',
							),
						),
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-about.php',
				),
			),
		),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_about_compare',
		'title'                 => 'About — What Makes Us Different',
		'fields'                => array(
			array(
				'key'           => 'field_about_compare_title',
				'label'         => 'Section title',
				'name'          => 'about_compare_title',
				'type'          => 'text',
				'default_value' => 'What Makes Bright Dreamers Different?',
			),
			array(
				'key'           => 'field_about_compare_title_heart',
				'label'         => 'Title heart icon',
				'name'          => 'about_compare_title_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'instructions'  => 'Leave empty to keep the default heart outline icon.',
			),
			array(
				'key'        => 'field_about_compare_left',
				'label'      => 'Left side — Many programs focus on',
				'name'       => 'about_compare_left',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_about_compare_left_photo',
						'label'         => 'Photo',
						'name'          => 'photo',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'instructions'  => 'Leave empty to keep the default left photo.',
					),
					array(
						'key'           => 'field_about_compare_left_photo_alt',
						'label'         => 'Photo alt text',
						'name'          => 'photo_alt',
						'type'          => 'text',
						'default_value' => 'Children walking together in a field at sunset',
					),
					array(
						'key'           => 'field_about_compare_left_label',
						'label'         => 'Side label',
						'name'          => 'label',
						'type'          => 'text',
						'default_value' => 'Many programs focus on',
					),
					array(
						'key'           => 'field_about_compare_left_mark',
						'label'         => 'List mark icon (X)',
						'name'          => 'mark_icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
						'instructions'  => 'Icon shown beside each left-side list item.',
					),
					array(
						'key'          => 'field_about_compare_left_list',
						'label'        => 'List items',
						'name'         => 'list_items',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add item',
						'min'          => 1,
						'max'          => 8,
						'instructions' => 'Leave empty to keep all four default items.',
						'sub_fields'   => array(
							array(
								'key'   => 'field_about_compare_left_list_text',
								'label' => 'Item text',
								'name'  => 'item_text',
								'type'  => 'text',
							),
						),
					),
				),
			),
			array(
				'key'           => 'field_about_compare_vs_badge',
				'label'         => 'VS badge (center)',
				'name'          => 'about_compare_vs_badge',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'instructions'  => 'Leave empty to keep the default VS badge.',
			),
			array(
				'key'        => 'field_about_compare_right',
				'label'      => 'Right side — Bright Dreamers focuses on',
				'name'       => 'about_compare_right',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_about_compare_right_label',
						'label'         => 'Side label',
						'name'          => 'label',
						'type'          => 'text',
						'default_value' => 'Bright Dreamers focuses on',
					),
					array(
						'key'           => 'field_about_compare_right_mark',
						'label'         => 'List mark icon (check)',
						'name'          => 'mark_icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
						'instructions'  => 'Icon shown beside each right-side list item.',
					),
					array(
						'key'          => 'field_about_compare_right_list',
						'label'        => 'List items',
						'name'         => 'list_items',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add item',
						'min'          => 1,
						'max'          => 10,
						'instructions' => 'Leave empty to keep all seven default items.',
						'sub_fields'   => array(
							array(
								'key'   => 'field_about_compare_right_list_text',
								'label' => 'Item text',
								'name'  => 'item_text',
								'type'  => 'text',
							),
						),
					),
					array(
						'key'           => 'field_about_compare_right_photo',
						'label'         => 'Photo',
						'name'          => 'photo',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'instructions'  => 'Leave empty to keep the default right photo.',
					),
					array(
						'key'           => 'field_about_compare_right_photo_alt',
						'label'         => 'Photo alt text',
						'name'          => 'photo_alt',
						'type'          => 'text',
						'default_value' => 'Children planting together in a garden',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-about.php',
				),
			),
		),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_vision_hero',
		'title'                 => 'Our Vision — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_vision_hero_eyebrow',
				'label'         => 'Eyebrow label',
				'name'          => 'vision_hero_eyebrow',
				'type'          => 'text',
				'default_value' => 'OUR VISION',
				'instructions'  => 'Heart icon next to the eyebrow stays in the design.',
			),
			array(
				'key'           => 'field_vision_hero_title_line_1',
				'label'         => 'Heading line 1 (navy)',
				'name'          => 'vision_hero_title_line_1',
				'type'          => 'text',
				'default_value' => 'Building a',
			),
			array(
				'key'           => 'field_vision_hero_title_line_2',
				'label'         => 'Heading line 2 (pink)',
				'name'          => 'vision_hero_title_line_2',
				'type'          => 'text',
				'default_value' => 'Brighter Future',
			),
			array(
				'key'           => 'field_vision_hero_title_line_3',
				'label'         => 'Heading line 3 (navy)',
				'name'          => 'vision_hero_title_line_3',
				'type'          => 'text',
				'default_value' => 'Together',
			),
			array(
				'key'           => 'field_vision_hero_lead_intro',
				'label'         => 'Lead line (before accent)',
				'name'          => 'vision_hero_lead_intro',
				'type'          => 'text',
				'default_value' => 'Every meaningful change can begin with something very small',
			),
			array(
				'key'           => 'field_vision_hero_lead_accent',
				'label'         => 'Lead accent (pink)',
				'name'          => 'vision_hero_lead_accent',
				'type'          => 'text',
				'default_value' => 'a child saying, "I have an idea."',
				'instructions'  => 'Shown in pink on the second line of the lead text.',
			),
			array(
				'key'           => 'field_vision_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'vision_hero_text',
				'type'          => 'textarea',
				'rows'          => 4,
				'new_lines'     => '',
				'default_value' => 'Bright Dreamers creates a community where children are encouraged to explore what excites them, discover their talents, bring their ideas to life, and use their creativity to help others.',
			),
			array(
				'key'          => 'field_vision_hero_list',
				'label'        => 'Checklist items',
				'name'         => 'vision_hero_list',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add item',
				'min'          => 1,
				'max'          => 6,
				'instructions' => 'Leave empty to keep both default checklist items. Checkmark icons stay in the design.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_vision_hero_list_text',
						'label' => 'Item text',
						'name'  => 'item_text',
						'type'  => 'text',
					),
				),
			),
			array(
				'key'           => 'field_vision_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'vision_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero banner photo.',
			),
			array(
				'key'           => 'field_vision_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'vision_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'Children painting a mural with the words Big Ideas Brighter Tomorrows',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-our-vision.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_vision_pillars',
		'title'                 => 'Our Vision — Pillar Cards',
		'fields'                => array(
			array(
				'key'           => 'field_vision_pillars_title',
				'label'         => 'Section title',
				'name'          => 'vision_pillars_title',
				'type'          => 'text',
				'default_value' => 'Our Vision',
				'instructions'  => 'Heart icon next to the title stays in the design.',
			),
			array(
				'key'           => 'field_vision_pillars_deco_heart',
				'label'         => 'Heart decoration image',
				'name'          => 'vision_pillars_deco_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'instructions'  => 'Used on pink, purple, and orange cards. Leave empty to keep the default.',
			),
			array(
				'key'           => 'field_vision_pillars_deco_leaf',
				'label'         => 'Leaf decoration image',
				'name'          => 'vision_pillars_deco_leaf',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'instructions'  => 'Used on the green card. Leave empty to keep the default.',
			),
			array(
				'key'          => 'field_vision_pillars_cards',
				'label'        => 'Pillar cards',
				'name'         => 'vision_pillars_cards',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add card',
				'min'          => 1,
				'max'          => 6,
				'instructions' => 'Leave empty to keep all four default pillar cards. Corner decorations stay in the design per card color.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_vision_pillars_card_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_vision_pillars_card_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_vision_pillars_card_description',
						'label' => 'Description',
						'name'  => 'description',
						'type'  => 'textarea',
						'rows'  => 3,
					),
					array(
						'key'           => 'field_vision_pillars_card_style',
						'label'         => 'Card color',
						'name'          => 'style_slug',
						'type'          => 'select',
						'choices'       => array(
							'pink'   => 'Pink',
							'purple' => 'Purple',
							'green'  => 'Green',
							'orange' => 'Orange',
						),
						'default_value' => 'pink',
						'allow_null'    => 1,
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-our-vision.php',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_vision_roadmap',
		'title'                 => 'Our Vision — Roadmap',
		'fields'                => array(
			array(
				'key'   => 'field_vision_roadmap_goals_title',
				'label' => 'Goals — title',
				'name'  => 'vision_roadmap_goals_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_vision_roadmap_goals_intro',
				'label' => 'Goals — intro',
				'name'  => 'vision_roadmap_goals_intro',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_vision_roadmap_goals',
				'label'        => 'Goals — checklist',
				'name'         => 'vision_roadmap_goals',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add goal',
				'min'          => 0,
				'max'          => 12,
				'instructions' => 'Leave empty to keep all eight default goals.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_vision_roadmap_goal_item',
						'label' => 'Goal text',
						'name'  => 'item_text',
						'type'  => 'text',
					),
				),
			),
			array(
				'key'   => 'field_vision_roadmap_journey_title',
				'label' => 'Journey — title',
				'name'  => 'vision_roadmap_journey_title',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_vision_roadmap_journey_arrow',
				'label'         => 'Journey — arrow image',
				'name'          => 'vision_roadmap_journey_arrow',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'instructions'  => 'Arrow shown between journey steps. Leave empty for default.',
			),
			array(
				'key'          => 'field_vision_roadmap_journey_steps',
				'label'        => 'Journey steps',
				'name'         => 'vision_roadmap_journey_steps',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add step',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default journey steps. Step numbers are automatic.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_vision_roadmap_journey_step_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_vision_roadmap_journey_step_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_vision_roadmap_journey_step_quote',
						'label' => 'Quote',
						'name'  => 'quote',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_vision_roadmap_journey_step_text',
						'label' => 'Description',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 2,
					),
					array(
						'key'           => 'field_vision_roadmap_journey_step_style',
						'label'         => 'Step color',
						'name'          => 'style_slug',
						'type'          => 'select',
						'choices'       => array(
							'pink'   => 'Pink',
							'purple' => 'Purple',
							'green'  => 'Green',
							'orange' => 'Orange',
							'blue'   => 'Blue',
						),
						'default_value' => 'pink',
						'allow_null'    => 1,
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-our-vision.php',
				),
			),
		),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_vision_moments',
		'title'                 => 'Our Vision — Moments',
		'fields'                => array(
			array(
				'key'   => 'field_vision_moments_title',
				'label' => 'Section title',
				'name'  => 'vision_moments_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_vision_moments_intro',
				'label' => 'Intro text',
				'name'  => 'vision_moments_intro',
				'type'  => 'textarea',
				'rows'  => 2,
			),
			array(
				'key'          => 'field_vision_moments_list',
				'label'        => 'Moments checklist',
				'name'         => 'vision_moments_list',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add moment',
				'min'          => 0,
				'max'          => 12,
				'instructions' => 'Leave empty to keep all nine default list items. Enable More item style for the closing line (e.g. And so much more!).',
				'sub_fields'   => array(
					array(
						'key'   => 'field_vision_moments_list_item',
						'label' => 'Text',
						'name'  => 'item_text',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_vision_moments_list_is_more',
						'label'         => 'More item style',
						'name'          => 'is_more',
						'type'          => 'true_false',
						'ui'            => 1,
						'default_value' => 0,
					),
				),
			),
			array(
				'key'           => 'field_vision_moments_photo_art',
				'label'         => 'Gallery — left photo',
				'name'          => 'vision_moments_photo_art',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_vision_moments_photo_art_alt',
				'label' => 'Gallery — left photo alt text',
				'name'  => 'vision_moments_photo_art_alt',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_vision_moments_feature_banner',
				'label'         => 'Gallery — feature banner',
				'name'          => 'vision_moments_feature_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_vision_moments_feature_title',
				'label' => 'Gallery — feature title',
				'name'  => 'vision_moments_feature_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_vision_moments_feature_text',
				'label' => 'Gallery — feature text',
				'name'  => 'vision_moments_feature_text',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'           => 'field_vision_moments_photo_read',
				'label'         => 'Gallery — bottom-left photo',
				'name'          => 'vision_moments_photo_read',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_vision_moments_photo_read_alt',
				'label' => 'Gallery — bottom-left photo alt text',
				'name'  => 'vision_moments_photo_read_alt',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_vision_moments_photo_give',
				'label'         => 'Gallery — bottom-right photo',
				'name'          => 'vision_moments_photo_give',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_vision_moments_photo_give_alt',
				'label' => 'Gallery — bottom-right photo alt text',
				'name'  => 'vision_moments_photo_give_alt',
				'type'  => 'text',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-our-vision.php',
				),
			),
		),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_vision_partner',
		'title'                 => 'Our Vision — Founding Partner',
		'fields'                => array(
			array(
				'key'   => 'field_vision_partner_title',
				'label' => 'Section title',
				'name'  => 'vision_partner_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_vision_partner_intro',
				'label' => 'Intro text',
				'name'  => 'vision_partner_intro',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'          => 'field_vision_partner_icons',
				'label'        => 'Partner support icons',
				'name'         => 'vision_partner_icons',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add icon',
				'min'          => 0,
				'max'          => 10,
				'instructions' => 'Leave empty to keep all seven default partner icons.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_vision_partner_icon_image',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_vision_partner_icon_label',
						'label' => 'Label',
						'name'  => 'label',
						'type'  => 'text',
					),
				),
			),
			array(
				'key'   => 'field_vision_partner_btn_text',
				'label' => 'Button text',
				'name'  => 'vision_partner_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_vision_partner_btn_link',
				'label'         => 'Button link',
				'name'          => 'vision_partner_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-our-vision.php',
				),
			),
		),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_vision_together',
		'title'                 => 'Our Vision — Together',
		'fields'                => array(
			array(
				'key'           => 'field_vision_together_jar',
				'label'         => 'Jar illustration',
				'name'          => 'vision_together_jar',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'           => 'field_vision_together_stars',
				'label'         => 'Stars decoration',
				'name'          => 'vision_together_stars',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_vision_together_title',
				'label' => 'Title (before accent)',
				'name'  => 'vision_together_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_vision_together_title_accent',
				'label' => 'Title accent word',
				'name'  => 'vision_together_title_accent',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_vision_together_list',
				'label'        => 'Checklist',
				'name'         => 'vision_together_list',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add item',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default list items.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_vision_together_list_item',
						'label' => 'Text',
						'name'  => 'item_text',
						'type'  => 'text',
					),
				),
			),
			array(
				'key'   => 'field_vision_together_apply_btn_text',
				'label' => 'Apply button text',
				'name'  => 'vision_together_apply_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_vision_together_apply_btn_link',
				'label'         => 'Apply button link',
				'name'          => 'vision_together_apply_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_vision_together_story_btn_text',
				'label' => 'Story button text',
				'name'  => 'vision_together_story_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_vision_together_story_btn_link',
				'label'         => 'Story button link',
				'name'          => 'vision_together_story_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_vision_together_support_btn_text',
				'label' => 'Support button text',
				'name'  => 'vision_together_support_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_vision_together_support_btn_link',
				'label'         => 'Support button link',
				'name'          => 'vision_together_support_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-our-vision.php',
				),
			),
		),
		'menu_order'            => 5,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_explore_hero',
		'title'                 => 'Explore — Hero / Banner',
		'fields'                => array(
			array(
				'key'   => 'field_explore_hero_eyebrow',
				'label' => 'Eyebrow label',
				'name'  => 'explore_hero_eyebrow',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_explore_hero_title_line_1',
				'label' => 'Heading line 1 (navy)',
				'name'  => 'explore_hero_title_line_1',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_explore_hero_title_line_2',
				'label' => 'Heading line 2 (navy)',
				'name'  => 'explore_hero_title_line_2',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_explore_hero_title_line_3',
				'label' => 'Heading line 3 (pink)',
				'name'  => 'explore_hero_title_line_3',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_explore_hero_deco',
				'label'         => 'Heading decoration',
				'name'          => 'explore_hero_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_explore_hero_text',
				'label' => 'Intro paragraph',
				'name'  => 'explore_hero_text',
				'type'  => 'textarea',
				'rows'  => 2,
			),
			array(
				'key'   => 'field_explore_hero_text_last',
				'label' => 'Second paragraph',
				'name'  => 'explore_hero_text_last',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'   => 'field_explore_hero_primary_btn_text',
				'label' => 'Primary button text',
				'name'  => 'explore_hero_primary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_explore_hero_primary_btn_link',
				'label'         => 'Primary button link',
				'name'          => 'explore_hero_primary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
				'instructions'  => 'Default scrolls to #explore-content on this page.',
			),
			array(
				'key'   => 'field_explore_hero_secondary_btn_text',
				'label' => 'Secondary button text',
				'name'  => 'explore_hero_secondary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_explore_hero_secondary_btn_link',
				'label'         => 'Secondary button link',
				'name'          => 'explore_hero_secondary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_explore_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'explore_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_explore_hero_banner_alt',
				'label' => 'Banner alt text',
				'name'  => 'explore_hero_banner_alt',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_explore_hero_tags',
				'label'        => 'Banner tags',
				'name'         => 'explore_hero_tags',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add tag',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default tags on the banner.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_explore_hero_tag_item',
						'label' => 'Tag text',
						'name'  => 'item_text',
						'type'  => 'text',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-explore.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_explore_ways',
		'title'                 => 'Explore — Ways to Explore',
		'fields'                => array(
			array(
				'key'   => 'field_explore_ways_title',
				'label' => 'Section title',
				'name'  => 'explore_ways_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_explore_ways_cards',
				'label'        => 'Way cards',
				'name'         => 'explore_ways_cards',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add way card',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all six default way cards. Enable Icon boost style for the second card style (Imagine and Invent).',
				'sub_fields'   => array(
					array(
						'key'           => 'field_explore_ways_card_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_explore_ways_card_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_explore_ways_card_icon_boost',
						'label'         => 'Icon boost style',
						'name'          => 'icon_boost',
						'type'          => 'true_false',
						'ui'            => 1,
						'default_value' => 0,
					),
					array(
						'key'           => 'field_explore_ways_card_photo',
						'label'         => 'Photo',
						'name'          => 'photo',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
					),
					array(
						'key'   => 'field_explore_ways_card_photo_alt',
						'label' => 'Photo alt text',
						'name'  => 'photo_alt',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_explore_ways_card_text',
						'label' => 'Description',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 3,
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-explore.php',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_explore_skills',
		'title'                 => 'Explore — Skills',
		'fields'                => array(
			array(
				'key'   => 'field_explore_skills_title',
				'label' => 'Section title',
				'name'  => 'explore_skills_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_explore_skills_cards',
				'label'        => 'Skill cards',
				'name'         => 'explore_skills_cards',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add skill',
				'min'          => 0,
				'max'          => 12,
				'instructions' => 'Leave empty to keep all nine default skill cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_explore_skills_card_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_explore_skills_card_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_explore_skills_card_text',
						'label' => 'Description',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 2,
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-explore.php',
				),
			),
		),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_explore_grow',
		'title'                 => 'Explore — Grow With Children',
		'fields'                => array(
			array(
				'key'   => 'field_explore_grow_title',
				'label' => 'Section title',
				'name'  => 'explore_grow_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_explore_grow_stages',
				'label'        => 'Growth stages',
				'name'         => 'explore_grow_stages',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add stage',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default stages. Arrow color adds the dashed arrow after each stage (leave empty on the last stage).',
				'sub_fields'   => array(
					array(
						'key'           => 'field_explore_grow_stage_style',
						'label'         => 'Stage color',
						'name'          => 'style_slug',
						'type'          => 'select',
						'choices'       => array(
							'wonder'   => 'Wonder',
							'discover' => 'Discover',
							'create'   => 'Create',
							'share'    => 'Share',
							'give'     => 'Give',
						),
						'default_value' => 'wonder',
						'allow_null'    => 1,
					),
					array(
						'key'           => 'field_explore_grow_stage_photo',
						'label'         => 'Photo',
						'name'          => 'photo',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
					),
					array(
						'key'   => 'field_explore_grow_stage_photo_alt',
						'label' => 'Photo alt text',
						'name'  => 'photo_alt',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_explore_grow_stage_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_explore_grow_stage_label',
						'label' => 'Label',
						'name'  => 'label',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_explore_grow_stage_quote',
						'label' => 'Quote',
						'name'  => 'quote',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_explore_grow_stage_text',
						'label' => 'Description',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 2,
					),
					array(
						'key'           => 'field_explore_grow_stage_arrow_color',
						'label'         => 'Arrow color (after stage)',
						'name'          => 'arrow_color',
						'type'          => 'select',
						'choices'       => array(
							'green'  => 'Green',
							'orange' => 'Orange',
							'pink'   => 'Pink',
							'blue'   => 'Blue',
						),
						'allow_null'    => 1,
						'instructions'  => 'Leave empty for the last stage.',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-explore.php',
				),
			),
		),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_explore_impact',
		'title'                 => 'Explore — Real Impact',
		'fields'                => array(
			array(
				'key'   => 'field_explore_impact_title',
				'label' => 'Section title',
				'name'  => 'explore_impact_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_explore_impact_cards',
				'label'        => 'Impact cards',
				'name'         => 'explore_impact_cards',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add card',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default impact cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_explore_impact_card_photo',
						'label'         => 'Photo',
						'name'          => 'photo',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
					),
					array(
						'key'   => 'field_explore_impact_card_photo_alt',
						'label' => 'Photo alt text',
						'name'  => 'photo_alt',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_explore_impact_card_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_explore_impact_card_text',
						'label' => 'Description',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 2,
					),
				),
			),
			array(
				'key'           => 'field_explore_impact_quote_blob',
				'label'         => 'Quote blob image',
				'name'          => 'explore_impact_quote_blob',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'          => 'field_explore_impact_quote_stanzas',
				'label'        => 'Quote stanzas',
				'name'         => 'explore_impact_quote_stanzas',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add stanza',
				'min'          => 0,
				'max'          => 5,
				'instructions' => 'Leave empty to keep all three default quote lines. Line 1 appears before the line break.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_explore_impact_quote_line_1',
						'label' => 'Line 1 (before break)',
						'name'  => 'line_1',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_explore_impact_quote_line_2',
						'label' => 'Line 2 (after break)',
						'name'  => 'line_2',
						'type'  => 'text',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-explore.php',
				),
			),
		),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_explore_dream',
		'title'                 => 'Explore — Dream CTA',
		'fields'                => array(
			array(
				'key'   => 'field_explore_dream_title',
				'label' => 'Title (before accent)',
				'name'  => 'explore_dream_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_explore_dream_title_accent',
				'label' => 'Title accent word',
				'name'  => 'explore_dream_title_accent',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_explore_dream_title_suffix',
				'label' => 'Title (after accent)',
				'name'  => 'explore_dream_title_suffix',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_explore_dream_photo',
				'label'         => 'Photo',
				'name'          => 'explore_dream_photo',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_explore_dream_photo_alt',
				'label' => 'Photo alt text',
				'name'  => 'explore_dream_photo_alt',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_explore_dream_list',
				'label'        => 'Checklist',
				'name'         => 'explore_dream_list',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add item',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default checklist items.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_explore_dream_list_item',
						'label' => 'Text',
						'name'  => 'item_text',
						'type'  => 'text',
					),
				),
			),
			array(
				'key'           => 'field_explore_dream_jar',
				'label'         => 'Jar illustration',
				'name'          => 'explore_dream_jar',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_explore_dream_primary_btn_text',
				'label' => 'Primary button text',
				'name'  => 'explore_dream_primary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_explore_dream_primary_btn_link',
				'label'         => 'Primary button link',
				'name'          => 'explore_dream_primary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_explore_dream_secondary_btn_text',
				'label' => 'Secondary button text',
				'name'  => 'explore_dream_secondary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_explore_dream_secondary_btn_link',
				'label'         => 'Secondary button link',
				'name'          => 'explore_dream_secondary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-explore.php',
				),
			),
		),
		'menu_order'            => 5,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_get_involved_hero',
		'title'                 => 'Get Involved — Hero / Banner',
		'fields'                => array(
			array(
				'key'   => 'field_get_involved_hero_eyebrow',
				'label' => 'Eyebrow label',
				'name'  => 'get_involved_hero_eyebrow',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_get_involved_hero_title_line_1',
				'label' => 'Heading line 1 (pink)',
				'name'  => 'get_involved_hero_title_line_1',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_get_involved_hero_title_line_2',
				'label' => 'Heading line 2 (navy)',
				'name'  => 'get_involved_hero_title_line_2',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_get_involved_hero_text_intro',
				'label' => 'Lead intro',
				'name'  => 'get_involved_hero_text_intro',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_get_involved_hero_text_accent_1',
				'label' => 'Lead accent 1 (pink)',
				'name'  => 'get_involved_hero_text_accent_1',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_get_involved_hero_text_middle',
				'label' => 'Lead middle text',
				'name'  => 'get_involved_hero_text_middle',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_get_involved_hero_text_accent_2',
				'label' => 'Lead accent 2 (pink)',
				'name'  => 'get_involved_hero_text_accent_2',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_get_involved_hero_text_outro',
				'label' => 'Lead outro',
				'name'  => 'get_involved_hero_text_outro',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_get_involved_hero_text_secondary',
				'label' => 'Secondary paragraph',
				'name'  => 'get_involved_hero_text_secondary',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'   => 'field_get_involved_hero_primary_btn_text',
				'label' => 'Primary button text',
				'name'  => 'get_involved_hero_primary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_get_involved_hero_primary_btn_link',
				'label'         => 'Primary button link',
				'name'          => 'get_involved_hero_primary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_get_involved_hero_secondary_btn_text',
				'label' => 'Secondary button text',
				'name'  => 'get_involved_hero_secondary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_get_involved_hero_secondary_btn_link',
				'label'         => 'Secondary button link',
				'name'          => 'get_involved_hero_secondary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_get_involved_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'get_involved_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_get_involved_hero_banner_alt',
				'label' => 'Banner alt text',
				'name'  => 'get_involved_hero_banner_alt',
				'type'  => 'text',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-get-involved.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_get_involved_ways',
		'title'                 => 'Get Involved — Ways to Help',
		'fields'                => array(
			array(
				'key'   => 'field_get_involved_ways_title',
				'label' => 'Section title',
				'name'  => 'get_involved_ways_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_get_involved_ways_cards',
				'label'        => 'Way cards',
				'name'         => 'get_involved_ways_cards',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add card',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default way cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_get_involved_ways_card_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_get_involved_ways_card_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_get_involved_ways_card_text',
						'label' => 'Description',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 3,
					),
					array(
						'key'   => 'field_get_involved_ways_card_link_text',
						'label' => 'Link text',
						'name'  => 'link_text',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_get_involved_ways_card_link',
						'label'         => 'Link URL',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-get-involved.php',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_get_involved_impact',
		'title'                 => 'Get Involved — Young Ideas Impact',
		'fields'                => array(
			array(
				'key'   => 'field_get_involved_impact_title_line_1',
				'label' => 'Title line 1 (navy)',
				'name'  => 'get_involved_impact_title_line_1',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_get_involved_impact_title_line_2',
				'label' => 'Title line 2 (pink)',
				'name'  => 'get_involved_impact_title_line_2',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_get_involved_impact_intro',
				'label' => 'Intro text',
				'name'  => 'get_involved_impact_intro',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'   => 'field_get_involved_impact_note_text',
				'label' => 'Note text',
				'name'  => 'get_involved_impact_note_text',
				'type'  => 'textarea',
				'rows'  => 2,
			),
			array(
				'key'          => 'field_get_involved_impact_timeline',
				'label'        => 'Timeline steps',
				'name'         => 'get_involved_impact_timeline',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add step',
				'min'          => 0,
				'max'          => 6,
				'instructions' => 'Leave empty to keep all four default timeline steps. Use Heart icon for the first step style.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_get_involved_impact_step_icon_mode',
						'label'         => 'Icon type',
						'name'          => 'icon_mode',
						'type'          => 'select',
						'choices'       => array(
							'heart' => 'Heart icon (SVG)',
							'image' => 'Custom image',
						),
						'default_value' => 'image',
						'allow_null'    => 1,
					),
					array(
						'key'           => 'field_get_involved_impact_step_icon',
						'label'         => 'Icon image',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
						'instructions'  => 'Used when icon type is Custom image.',
					),
					array(
						'key'           => 'field_get_involved_impact_step_color',
						'label'         => 'Step color',
						'name'          => 'color_slug',
						'type'          => 'select',
						'choices'       => array(
							'pink'  => 'Pink',
							'green' => 'Green',
							'blue'  => 'Blue',
						),
						'default_value' => 'pink',
						'allow_null'    => 1,
					),
					array(
						'key'   => 'field_get_involved_impact_step_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_get_involved_impact_step_text',
						'label' => 'Description',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 3,
					),
				),
			),
			array(
				'key'           => 'field_get_involved_impact_illustration',
				'label'         => 'Illustration image',
				'name'          => 'get_involved_impact_illustration',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_get_involved_impact_illustration_alt',
				'label' => 'Illustration alt text',
				'name'  => 'get_involved_impact_illustration_alt',
				'type'  => 'text',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-get-involved.php',
				),
			),
		),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_get_involved_partner_cta',
		'title'                 => 'Get Involved — Partner CTA',
		'fields'                => array(
			array(
				'key'           => 'field_get_involved_partner_cta_envelope',
				'label'         => 'Envelope image',
				'name'          => 'get_involved_partner_cta_envelope',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_get_involved_partner_cta_title',
				'label' => 'Title',
				'name'  => 'get_involved_partner_cta_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_get_involved_partner_cta_sub',
				'label' => 'Subtitle',
				'name'  => 'get_involved_partner_cta_sub',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_get_involved_partner_cta_btn_text',
				'label' => 'Button text',
				'name'  => 'get_involved_partner_cta_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_get_involved_partner_cta_btn_link',
				'label'         => 'Button link',
				'name'          => 'get_involved_partner_cta_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_get_involved_partner_cta_deco',
				'label'         => 'Decoration image',
				'name'          => 'get_involved_partner_cta_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-get-involved.php',
				),
			),
		),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_partners_hero',
		'title'                 => 'Partners — Hero / Banner',
		'fields'                => array(
			array(
				'key'   => 'field_partners_hero_eyebrow',
				'label' => 'Eyebrow label',
				'name'  => 'partners_hero_eyebrow',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_partners_hero_title_line_1',
				'label' => 'Heading line 1 (navy)',
				'name'  => 'partners_hero_title_line_1',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_partners_hero_title_underline_word',
				'label' => 'Heading underlined word (pink)',
				'name'  => 'partners_hero_title_underline_word',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_partners_hero_title_underline',
				'label'         => 'Heading underline image',
				'name'          => 'partners_hero_title_underline',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_partners_hero_title_line_2_suffix',
				'label' => 'Heading line 2 suffix (after underline)',
				'name'  => 'partners_hero_title_line_2_suffix',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_partners_hero_text_intro',
				'label' => 'Intro text (before accent)',
				'name'  => 'partners_hero_text_intro',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'   => 'field_partners_hero_text_accent',
				'label' => 'Intro accent (pink)',
				'name'  => 'partners_hero_text_accent',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_partners_hero_text_outro',
				'label' => 'Intro text (after accent)',
				'name'  => 'partners_hero_text_outro',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_partners_hero_primary_btn_text',
				'label' => 'Primary button text',
				'name'  => 'partners_hero_primary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_partners_hero_primary_btn_link',
				'label'         => 'Primary button link',
				'name'          => 'partners_hero_primary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_partners_hero_secondary_btn_text',
				'label' => 'Secondary button text',
				'name'  => 'partners_hero_secondary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_partners_hero_secondary_btn_link',
				'label'         => 'Secondary button link',
				'name'          => 'partners_hero_secondary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_partners_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'partners_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_partners_hero_banner_alt',
				'label' => 'Banner alt text',
				'name'  => 'partners_hero_banner_alt',
				'type'  => 'text',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-partners.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_partners_ways',
		'title'                 => 'Partners — Ways to Partner',
		'fields'                => array(
			array(
				'key'   => 'field_partners_ways_title',
				'label' => 'Section title',
				'name'  => 'partners_ways_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_partners_ways_intro',
				'label' => 'Intro text',
				'name'  => 'partners_ways_intro',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'          => 'field_partners_ways_cards',
				'label'        => 'Partner type cards',
				'name'         => 'partners_ways_cards',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add card',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default partner type cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_partners_ways_card_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_partners_ways_card_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_partners_ways_card_text',
						'label' => 'Description',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 3,
					),
					array(
						'key'           => 'field_partners_ways_card_color_slug',
						'label'         => 'Card color',
						'name'          => 'color_slug',
						'type'          => 'select',
						'choices'       => array(
							'purple' => 'Purple',
							'green'  => 'Green',
							'blue'   => 'Blue',
							'pink'   => 'Pink',
							'orange' => 'Orange',
						),
						'default_value' => 'purple',
						'return_format' => 'value',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-partners.php',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_partners_impact',
		'title'                 => 'Partners — Partnership Impact',
		'fields'                => array(
			array(
				'key'   => 'field_partners_impact_title',
				'label' => 'Section title',
				'name'  => 'partners_impact_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_partners_impact_intro',
				'label' => 'Intro text',
				'name'  => 'partners_impact_intro',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'          => 'field_partners_impact_cards',
				'label'        => 'Impact cards',
				'name'         => 'partners_impact_cards',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add card',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default impact cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_partners_impact_card_photo',
						'label'         => 'Photo',
						'name'          => 'photo',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
					),
					array(
						'key'   => 'field_partners_impact_card_photo_alt',
						'label' => 'Photo alt text',
						'name'  => 'photo_alt',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_partners_impact_card_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_partners_impact_card_text',
						'label' => 'Description',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 3,
					),
					array(
						'key'           => 'field_partners_impact_card_deco',
						'label'         => 'Decorative icon',
						'name'          => 'deco',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-partners.php',
				),
			),
		),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_partners_opportunity_cta',
		'title'                 => 'Partners — Share an Opportunity CTA',
		'fields'                => array(
			array(
				'key'   => 'field_partners_opportunity_cta_aria_label',
				'label' => 'Section aria label',
				'name'  => 'partners_opportunity_cta_aria_label',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_partners_opportunity_cta_title_prefix',
				'label' => 'Heading prefix (before underline)',
				'name'  => 'partners_opportunity_cta_title_prefix',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_partners_opportunity_cta_title_underline_word',
				'label' => 'Heading underlined words',
				'name'  => 'partners_opportunity_cta_title_underline_word',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_partners_opportunity_cta_title_underline',
				'label'         => 'Heading underline image',
				'name'          => 'partners_opportunity_cta_title_underline',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_partners_opportunity_cta_title_suffix',
				'label' => 'Heading suffix (after underline)',
				'name'  => 'partners_opportunity_cta_title_suffix',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_partners_opportunity_cta_bulb',
				'label'         => 'Light bulb decoration',
				'name'          => 'partners_opportunity_cta_bulb',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_partners_opportunity_cta_text',
				'label' => 'Body text',
				'name'  => 'partners_opportunity_cta_text',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'   => 'field_partners_opportunity_cta_btn_text',
				'label' => 'Button text',
				'name'  => 'partners_opportunity_cta_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_partners_opportunity_cta_btn_link',
				'label'         => 'Button link',
				'name'          => 'partners_opportunity_cta_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_partners_opportunity_cta_plane',
				'label'         => 'Paper plane decoration',
				'name'          => 'partners_opportunity_cta_plane',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-partners.php',
				),
			),
		),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_partners_founding',
		'title'                 => 'Partners — Founding Partners',
		'fields'                => array(
			array(
				'key'   => 'field_partners_founding_title',
				'label' => 'Section title',
				'name'  => 'partners_founding_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_partners_founding_intro',
				'label' => 'Intro text',
				'name'  => 'partners_founding_intro',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'          => 'field_partners_founding_cards',
				'label'        => 'Founding partner cards',
				'name'         => 'partners_founding_cards',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add card',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default founding partner cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_partners_founding_card_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_partners_founding_card_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_partners_founding_card_text',
						'label' => 'Description',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 3,
					),
					array(
						'key'           => 'field_partners_founding_card_color_slug',
						'label'         => 'Card color',
						'name'          => 'color_slug',
						'type'          => 'select',
						'choices'       => array(
							'purple' => 'Purple',
							'green'  => 'Green',
							'blue'   => 'Blue',
							'pink'   => 'Pink',
							'gold'   => 'Gold',
						),
						'default_value' => 'purple',
						'return_format' => 'value',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-partners.php',
				),
			),
		),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_contact_hero',
		'title'                 => 'Contact — Hero / Banner',
		'fields'                => array(
			array(
				'key'   => 'field_contact_hero_aria_label',
				'label' => 'Section aria label',
				'name'  => 'contact_hero_aria_label',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_contact_hero_title_underline_word',
				'label' => 'Heading underlined word',
				'name'  => 'contact_hero_title_underline_word',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_contact_hero_title_underline',
				'label'         => 'Heading underline image',
				'name'          => 'contact_hero_title_underline',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_contact_hero_title_suffix',
				'label' => 'Heading suffix (after underline)',
				'name'  => 'contact_hero_title_suffix',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_contact_hero_text_intro',
				'label' => 'Intro text (before purple accent)',
				'name'  => 'contact_hero_text_intro',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'   => 'field_contact_hero_text_accent_purple',
				'label' => 'Purple accent word',
				'name'  => 'contact_hero_text_accent_purple',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_contact_hero_text_mid',
				'label' => 'Text between accents',
				'name'  => 'contact_hero_text_mid',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_contact_hero_text_accent_pink',
				'label' => 'Pink accent word',
				'name'  => 'contact_hero_text_accent_pink',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_contact_hero_text_outro',
				'label' => 'Text after pink accent',
				'name'  => 'contact_hero_text_outro',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_contact_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'contact_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_contact_hero_banner_alt',
				'label' => 'Banner alt text',
				'name'  => 'contact_hero_banner_alt',
				'type'  => 'text',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-contact.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_contact_form',
		'title'                 => 'Contact — Form Section',
		'fields'                => array(
			array(
				'key'   => 'field_contact_form_aria_label',
				'label' => 'Section aria label',
				'name'  => 'contact_form_aria_label',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_contact_form_aside_aria_label',
				'label' => 'Aside aria label',
				'name'  => 'contact_form_aside_aria_label',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_contact_form_aside_plane',
				'label'         => 'Aside plane decoration',
				'name'          => 'contact_form_aside_plane',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_contact_form_aside_title_underline_word',
				'label' => 'Aside heading underlined word',
				'name'  => 'contact_form_aside_title_underline_word',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_contact_form_aside_title_underline',
				'label'         => 'Aside heading underline image',
				'name'          => 'contact_form_aside_title_underline',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_contact_form_aside_title_suffix',
				'label' => 'Aside heading suffix',
				'name'  => 'contact_form_aside_title_suffix',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_contact_form_aside_text',
				'label' => 'Aside text',
				'name'  => 'contact_form_aside_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'           => 'field_contact_form_aside_plant',
				'label'         => 'Aside plant decoration',
				'name'          => 'contact_form_aside_plant',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_contact_form_title',
				'label' => 'Form heading',
				'name'  => 'contact_form_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_contact_form_privacy_lead',
				'label' => 'Privacy note (bold lead)',
				'name'  => 'contact_form_privacy_lead',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_contact_form_privacy_text',
				'label' => 'Privacy note (body)',
				'name'  => 'contact_form_privacy_text',
				'type'  => 'textarea',
				'rows'  => 2,
			),
			array(
				'key'   => 'field_contact_form_submit_text',
				'label' => 'Submit button text',
				'name'  => 'contact_form_submit_text',
				'type'  => 'text',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-contact.php',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_contact_cta',
		'title'                 => 'Contact — See Our Vision CTA',
		'fields'                => array(
			array(
				'key'   => 'field_contact_cta_aria_label',
				'label' => 'Section aria label',
				'name'  => 'contact_cta_aria_label',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_contact_cta_door',
				'label'         => 'Door illustration',
				'name'          => 'contact_cta_door',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_contact_cta_text',
				'label' => 'Heading text',
				'name'  => 'contact_cta_text',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'   => 'field_contact_cta_btn_text',
				'label' => 'Button text',
				'name'  => 'contact_cta_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_contact_cta_btn_link',
				'label'         => 'Button link',
				'name'          => 'contact_cta_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-contact.php',
				),
			),
		),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_creative_makers_hero',
		'title'                 => 'Creative Makers — Hero / Banner',
		'fields'                => array(
			array(
				'key'   => 'field_creative_makers_hero_breadcrumb_home_text',
				'label' => 'Breadcrumb: Home label',
				'name'  => 'creative_makers_hero_breadcrumb_home_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_creative_makers_hero_breadcrumb_home_link',
				'label'         => 'Breadcrumb: Home link',
				'name'          => 'creative_makers_hero_breadcrumb_home_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_creative_makers_hero_breadcrumb_parent_text',
				'label' => 'Breadcrumb: parent label',
				'name'  => 'creative_makers_hero_breadcrumb_parent_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_creative_makers_hero_breadcrumb_parent_link',
				'label'         => 'Breadcrumb: parent link',
				'name'          => 'creative_makers_hero_breadcrumb_parent_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_creative_makers_hero_breadcrumb_current_text',
				'label' => 'Breadcrumb: current page label',
				'name'  => 'creative_makers_hero_breadcrumb_current_text',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_creative_makers_hero_title',
				'label' => 'Page title',
				'name'  => 'creative_makers_hero_title',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_creative_makers_hero_title_heart',
				'label'         => 'Title heart decoration',
				'name'          => 'creative_makers_hero_title_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_creative_makers_hero_tagline',
				'label' => 'Tagline',
				'name'  => 'creative_makers_hero_tagline',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_creative_makers_hero_text',
				'label' => 'Intro text',
				'name'  => 'creative_makers_hero_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'   => 'field_creative_makers_hero_primary_btn_text',
				'label' => 'Primary button text',
				'name'  => 'creative_makers_hero_primary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_creative_makers_hero_primary_btn_link',
				'label'         => 'Primary button link',
				'name'          => 'creative_makers_hero_primary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_creative_makers_hero_back_text',
				'label' => 'Back link text',
				'name'  => 'creative_makers_hero_back_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_creative_makers_hero_back_link',
				'label'         => 'Back link URL',
				'name'          => 'creative_makers_hero_back_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_creative_makers_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'creative_makers_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_creative_makers_hero_banner_alt',
				'label' => 'Banner alt text',
				'name'  => 'creative_makers_hero_banner_alt',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_creative_makers_hero_deco_star',
				'label'         => 'Star decoration',
				'name'          => 'creative_makers_hero_deco_star',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'           => 'field_creative_makers_hero_deco_plane',
				'label'         => 'Plane decoration',
				'name'          => 'creative_makers_hero_deco_plane',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-creative-makers.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_creative_makers_explore',
		'title'                 => 'Creative Makers — Children Explore',
		'fields'                => array(
			array(
				'key'   => 'field_creative_makers_explore_title',
				'label' => 'Section title',
				'name'  => 'creative_makers_explore_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_creative_makers_explore_activities',
				'label'        => 'Activity cards',
				'name'         => 'creative_makers_explore_activities',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add activity',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default activity cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_creative_makers_explore_activity_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_creative_makers_explore_activity_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_creative_makers_explore_activity_color_slug',
						'label'         => 'Card color',
						'name'          => 'color_slug',
						'type'          => 'select',
						'choices'       => array(
							'paint'   => 'Paint',
							'crafts'  => 'Crafts',
							'media'   => 'Media',
							'design'  => 'Design',
							'upcycle' => 'Upcycle',
						),
						'default_value' => 'paint',
						'return_format' => 'value',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-creative-makers.php',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_creative_makers_info',
		'title'                 => 'Creative Makers — Skills, Growth & Impact',
		'fields'                => array(
			array(
				'key'   => 'field_creative_makers_info_aria_label',
				'label' => 'Section aria label',
				'name'  => 'creative_makers_info_aria_label',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_creative_makers_info_skills_title',
				'label' => 'Skills card title',
				'name'  => 'creative_makers_info_skills_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_creative_makers_info_skills_items',
				'label'        => 'Skills list items',
				'name'         => 'creative_makers_info_skills_items',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add skill',
				'min'          => 0,
				'max'          => 10,
				'instructions' => 'Leave empty to keep all five default skills.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_creative_makers_info_skills_item_text',
						'label' => 'Skill',
						'name'  => 'item_text',
						'type'  => 'text',
					),
				),
			),
			array(
				'key'           => 'field_creative_makers_info_skills_deco',
				'label'         => 'Skills card decoration',
				'name'          => 'creative_makers_info_skills_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_creative_makers_info_grow_title_underline_word',
				'label' => 'Growth card heading (underlined)',
				'name'  => 'creative_makers_info_grow_title_underline_word',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_creative_makers_info_grow_title_underline',
				'label'         => 'Growth card underline image',
				'name'          => 'creative_makers_info_grow_title_underline',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_creative_makers_info_grow_title_suffix',
				'label' => 'Growth card heading suffix',
				'name'  => 'creative_makers_info_grow_title_suffix',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_creative_makers_info_grow_text',
				'label' => 'Growth card text',
				'name'  => 'creative_makers_info_grow_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'           => 'field_creative_makers_info_grow_deco',
				'label'         => 'Growth card decoration',
				'name'          => 'creative_makers_info_grow_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_creative_makers_info_impact_title',
				'label' => 'Impact card title',
				'name'  => 'creative_makers_info_impact_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_creative_makers_info_impact_text',
				'label' => 'Impact card text',
				'name'  => 'creative_makers_info_impact_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'           => 'field_creative_makers_info_impact_deco',
				'label'         => 'Impact card decoration',
				'name'          => 'creative_makers_info_impact_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-creative-makers.php',
				),
			),
		),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_creative_makers_parents',
		'title'                 => 'Creative Makers — What Parents Should Know',
		'fields'                => array(
			array(
				'key'   => 'field_creative_makers_parents_section_id',
				'label' => 'Section anchor ID',
				'name'  => 'creative_makers_parents_section_id',
				'type'  => 'text',
				'instructions' => 'Used for in-page links (e.g. hero button). Default: creative-makers-parents',
			),
			array(
				'key'   => 'field_creative_makers_parents_title',
				'label' => 'Section title',
				'name'  => 'creative_makers_parents_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_creative_makers_parents_tablist_aria_label',
				'label' => 'Tab list aria label',
				'name'  => 'creative_makers_parents_tablist_aria_label',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_creative_makers_parents_faq_items',
				'label'        => 'FAQ tabs',
				'name'         => 'creative_makers_parents_faq_items',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add tab',
				'min'          => 0,
				'max'          => 6,
				'instructions' => 'Leave empty to keep all four default FAQ tabs. Panel slug controls accordion styling — keep slugs as expect, materials, safety, or program.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_creative_makers_parents_faq_panel_slug',
						'label'         => 'Panel slug',
						'name'          => 'panel_slug',
						'type'          => 'select',
						'choices'       => array(
							'expect'    => 'What to Expect',
							'materials' => 'Materials',
							'safety'    => 'Safety & Supervision',
							'program'   => 'Program Details',
						),
						'default_value' => 'expect',
						'return_format' => 'value',
					),
					array(
						'key'   => 'field_creative_makers_parents_faq_tab_label',
						'label' => 'Tab label',
						'name'  => 'tab_label',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_creative_makers_parents_faq_panel_text',
						'label' => 'Panel text',
						'name'  => 'panel_text',
						'type'  => 'textarea',
						'rows'  => 4,
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-creative-makers.php',
				),
			),
		),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_creative_makers_cta',
		'title'                 => 'Creative Makers — Join CTA',
		'fields'                => array(
			array(
				'key'   => 'field_creative_makers_cta_aria_label',
				'label' => 'Section aria label',
				'name'  => 'creative_makers_cta_aria_label',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_creative_makers_cta_heart',
				'label'         => 'Heart decoration',
				'name'          => 'creative_makers_cta_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_creative_makers_cta_text',
				'label' => 'CTA text',
				'name'  => 'creative_makers_cta_text',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'           => 'field_creative_makers_cta_plane',
				'label'         => 'Plane decoration',
				'name'          => 'creative_makers_cta_plane',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_creative_makers_cta_btn_text',
				'label' => 'Button text',
				'name'  => 'creative_makers_cta_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_creative_makers_cta_btn_link',
				'label'         => 'Button link',
				'name'          => 'creative_makers_cta_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-creative-makers.php',
				),
			),
		),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_young_ideas_lab_hero',
		'title'                 => 'Young Ideas Lab — Hero / Banner',
		'fields'                => array(
			array(
				'key'   => 'field_young_ideas_lab_hero_breadcrumb_home_text',
				'label' => 'Breadcrumb: Home label',
				'name'  => 'young_ideas_lab_hero_breadcrumb_home_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_young_ideas_lab_hero_breadcrumb_home_link',
				'label'         => 'Breadcrumb: Home link',
				'name'          => 'young_ideas_lab_hero_breadcrumb_home_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_young_ideas_lab_hero_breadcrumb_parent_text',
				'label' => 'Breadcrumb: parent label',
				'name'  => 'young_ideas_lab_hero_breadcrumb_parent_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_young_ideas_lab_hero_breadcrumb_parent_link',
				'label'         => 'Breadcrumb: parent link',
				'name'          => 'young_ideas_lab_hero_breadcrumb_parent_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_young_ideas_lab_hero_breadcrumb_current_text',
				'label' => 'Breadcrumb: current page label',
				'name'  => 'young_ideas_lab_hero_breadcrumb_current_text',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_young_ideas_lab_hero_title',
				'label' => 'Page title',
				'name'  => 'young_ideas_lab_hero_title',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_young_ideas_lab_hero_title_icon',
				'label'         => 'Title lightbulb decoration',
				'name'          => 'young_ideas_lab_hero_title_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_young_ideas_lab_hero_tagline',
				'label' => 'Tagline',
				'name'  => 'young_ideas_lab_hero_tagline',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_young_ideas_lab_hero_text',
				'label' => 'Intro text',
				'name'  => 'young_ideas_lab_hero_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'   => 'field_young_ideas_lab_hero_primary_btn_text',
				'label' => 'Primary button text',
				'name'  => 'young_ideas_lab_hero_primary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_young_ideas_lab_hero_primary_btn_link',
				'label'         => 'Primary button link',
				'name'          => 'young_ideas_lab_hero_primary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_young_ideas_lab_hero_back_text',
				'label' => 'Back link text',
				'name'  => 'young_ideas_lab_hero_back_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_young_ideas_lab_hero_back_link',
				'label'         => 'Back link URL',
				'name'          => 'young_ideas_lab_hero_back_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_young_ideas_lab_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'young_ideas_lab_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_young_ideas_lab_hero_banner_alt',
				'label' => 'Banner alt text',
				'name'  => 'young_ideas_lab_hero_banner_alt',
				'type'  => 'text',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-young-ideas-lab.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_young_ideas_lab_explore',
		'title'                 => 'Young Ideas Lab — Children Explore',
		'fields'                => array(
			array(
				'key'   => 'field_young_ideas_lab_explore_title',
				'label' => 'Section title',
				'name'  => 'young_ideas_lab_explore_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_young_ideas_lab_explore_activities',
				'label'        => 'Activity cards',
				'name'         => 'young_ideas_lab_explore_activities',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add activity',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default activity cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_young_ideas_lab_explore_activity_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_young_ideas_lab_explore_activity_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_young_ideas_lab_explore_activity_color_slug',
						'label'         => 'Card color',
						'name'          => 'color_slug',
						'type'          => 'select',
						'choices'       => array(
							'paint'   => 'Paint',
							'crafts'  => 'Crafts',
							'media'   => 'Media',
							'design'  => 'Design',
							'upcycle' => 'Upcycle',
						),
						'default_value' => 'paint',
						'return_format' => 'value',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-young-ideas-lab.php',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_young_ideas_lab_info',
		'title'                 => 'Young Ideas Lab — Skills, Growth & Impact',
		'fields'                => array(
			array(
				'key'   => 'field_young_ideas_lab_info_aria_label',
				'label' => 'Section aria label',
				'name'  => 'young_ideas_lab_info_aria_label',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_young_ideas_lab_info_skills_title',
				'label' => 'Skills card title',
				'name'  => 'young_ideas_lab_info_skills_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_young_ideas_lab_info_skills_items',
				'label'        => 'Skills list items',
				'name'         => 'young_ideas_lab_info_skills_items',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add skill',
				'min'          => 0,
				'max'          => 10,
				'instructions' => 'Leave empty to keep all five default skills.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_young_ideas_lab_info_skills_item_text',
						'label' => 'Skill',
						'name'  => 'item_text',
						'type'  => 'text',
					),
				),
			),
			array(
				'key'           => 'field_young_ideas_lab_info_skills_deco',
				'label'         => 'Skills card decoration',
				'name'          => 'young_ideas_lab_info_skills_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_young_ideas_lab_info_grow_title_underline_word',
				'label' => 'Growth card heading (underlined)',
				'name'  => 'young_ideas_lab_info_grow_title_underline_word',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_young_ideas_lab_info_grow_title_underline',
				'label'         => 'Growth card underline image',
				'name'          => 'young_ideas_lab_info_grow_title_underline',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_young_ideas_lab_info_grow_title_suffix',
				'label' => 'Growth card heading suffix',
				'name'  => 'young_ideas_lab_info_grow_title_suffix',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_young_ideas_lab_info_grow_text',
				'label' => 'Growth card text',
				'name'  => 'young_ideas_lab_info_grow_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'           => 'field_young_ideas_lab_info_grow_deco',
				'label'         => 'Growth card decoration',
				'name'          => 'young_ideas_lab_info_grow_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_young_ideas_lab_info_impact_title',
				'label' => 'Impact card title',
				'name'  => 'young_ideas_lab_info_impact_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_young_ideas_lab_info_impact_text',
				'label' => 'Impact card text',
				'name'  => 'young_ideas_lab_info_impact_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'           => 'field_young_ideas_lab_info_impact_deco',
				'label'         => 'Impact card decoration',
				'name'          => 'young_ideas_lab_info_impact_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-young-ideas-lab.php',
				),
			),
		),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_young_ideas_lab_parents',
		'title'                 => 'Young Ideas Lab — What Parents Should Know',
		'fields'                => array(
			array(
				'key'          => 'field_young_ideas_lab_parents_section_id',
				'label'        => 'Section anchor ID',
				'name'         => 'young_ideas_lab_parents_section_id',
				'type'         => 'text',
				'instructions' => 'Used for in-page links (e.g. hero button). Default: young-ideas-lab-parents',
			),
			array(
				'key'   => 'field_young_ideas_lab_parents_title',
				'label' => 'Section title',
				'name'  => 'young_ideas_lab_parents_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_young_ideas_lab_parents_tablist_aria_label',
				'label' => 'Tab list aria label',
				'name'  => 'young_ideas_lab_parents_tablist_aria_label',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_young_ideas_lab_parents_faq_items',
				'label'        => 'FAQ tabs',
				'name'         => 'young_ideas_lab_parents_faq_items',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add tab',
				'min'          => 0,
				'max'          => 6,
				'instructions' => 'Leave empty to keep all four default FAQ tabs. Panel slug controls accordion styling — keep slugs as expect, materials, safety, or program.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_young_ideas_lab_parents_faq_panel_slug',
						'label'         => 'Panel slug',
						'name'          => 'panel_slug',
						'type'          => 'select',
						'choices'       => array(
							'expect'    => 'What to Expect',
							'materials' => 'Materials',
							'safety'    => 'Safety & Supervision',
							'program'   => 'Program Details',
						),
						'default_value' => 'expect',
						'return_format' => 'value',
					),
					array(
						'key'   => 'field_young_ideas_lab_parents_faq_tab_label',
						'label' => 'Tab label',
						'name'  => 'tab_label',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_young_ideas_lab_parents_faq_panel_text',
						'label' => 'Panel text',
						'name'  => 'panel_text',
						'type'  => 'textarea',
						'rows'  => 4,
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-young-ideas-lab.php',
				),
			),
		),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_young_ideas_lab_cta',
		'title'                 => 'Young Ideas Lab — Join CTA',
		'fields'                => array(
			array(
				'key'   => 'field_young_ideas_lab_cta_aria_label',
				'label' => 'Section aria label',
				'name'  => 'young_ideas_lab_cta_aria_label',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_young_ideas_lab_cta_icon',
				'label'         => 'Lightbulb decoration',
				'name'          => 'young_ideas_lab_cta_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_young_ideas_lab_cta_text',
				'label' => 'CTA text',
				'name'  => 'young_ideas_lab_cta_text',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'           => 'field_young_ideas_lab_cta_plane',
				'label'         => 'Plane decoration',
				'name'          => 'young_ideas_lab_cta_plane',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_young_ideas_lab_cta_btn_text',
				'label' => 'Button text',
				'name'  => 'young_ideas_lab_cta_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_young_ideas_lab_cta_btn_link',
				'label'         => 'Button link',
				'name'          => 'young_ideas_lab_cta_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-young-ideas-lab.php',
				),
			),
		),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_community_adventures_hero',
		'title'                 => 'Community Adventures — Hero / Banner',
		'fields'                => array(
			array(
				'key'   => 'field_community_adventures_hero_breadcrumb_home_text',
				'label' => 'Breadcrumb: Home label',
				'name'  => 'community_adventures_hero_breadcrumb_home_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_community_adventures_hero_breadcrumb_home_link',
				'label'         => 'Breadcrumb: Home link',
				'name'          => 'community_adventures_hero_breadcrumb_home_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_community_adventures_hero_breadcrumb_parent_text',
				'label' => 'Breadcrumb: parent label',
				'name'  => 'community_adventures_hero_breadcrumb_parent_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_community_adventures_hero_breadcrumb_parent_link',
				'label'         => 'Breadcrumb: parent link',
				'name'          => 'community_adventures_hero_breadcrumb_parent_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_community_adventures_hero_breadcrumb_current_text',
				'label' => 'Breadcrumb: current page label',
				'name'  => 'community_adventures_hero_breadcrumb_current_text',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_community_adventures_hero_title',
				'label' => 'Page title',
				'name'  => 'community_adventures_hero_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_community_adventures_hero_tagline',
				'label' => 'Tagline',
				'name'  => 'community_adventures_hero_tagline',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_community_adventures_hero_text',
				'label' => 'Intro text',
				'name'  => 'community_adventures_hero_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'   => 'field_community_adventures_hero_primary_btn_text',
				'label' => 'Primary button text',
				'name'  => 'community_adventures_hero_primary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_community_adventures_hero_primary_btn_link',
				'label'         => 'Primary button link',
				'name'          => 'community_adventures_hero_primary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_community_adventures_hero_back_text',
				'label' => 'Back link text',
				'name'  => 'community_adventures_hero_back_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_community_adventures_hero_back_link',
				'label'         => 'Back link URL',
				'name'          => 'community_adventures_hero_back_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_community_adventures_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'community_adventures_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_community_adventures_hero_banner_alt',
				'label' => 'Banner alt text',
				'name'  => 'community_adventures_hero_banner_alt',
				'type'  => 'text',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-community-adventures.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_community_adventures_explore',
		'title'                 => 'Community Adventures — Children Explore',
		'fields'                => array(
			array(
				'key'   => 'field_community_adventures_explore_title',
				'label' => 'Section title',
				'name'  => 'community_adventures_explore_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_community_adventures_explore_activities',
				'label'        => 'Activity cards',
				'name'         => 'community_adventures_explore_activities',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add activity',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default activity cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_community_adventures_explore_activity_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_community_adventures_explore_activity_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_community_adventures_explore_activity_color_slug',
						'label'         => 'Card color',
						'name'          => 'color_slug',
						'type'          => 'select',
						'choices'       => array(
							'paint'   => 'Paint',
							'crafts'  => 'Crafts',
							'media'   => 'Media',
							'design'  => 'Design',
							'upcycle' => 'Upcycle',
						),
						'default_value' => 'paint',
						'return_format' => 'value',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-community-adventures.php',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_community_adventures_info',
		'title'                 => 'Community Adventures — Skills, Growth & Impact',
		'fields'                => array(
			array(
				'key'   => 'field_community_adventures_info_aria_label',
				'label' => 'Section aria label',
				'name'  => 'community_adventures_info_aria_label',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_community_adventures_info_skills_title',
				'label' => 'Skills card title',
				'name'  => 'community_adventures_info_skills_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_community_adventures_info_skills_items',
				'label'        => 'Skills list items',
				'name'         => 'community_adventures_info_skills_items',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add skill',
				'min'          => 0,
				'max'          => 10,
				'instructions' => 'Leave empty to keep all five default skills.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_community_adventures_info_skills_item_text',
						'label' => 'Skill',
						'name'  => 'item_text',
						'type'  => 'text',
					),
				),
			),
			array(
				'key'           => 'field_community_adventures_info_skills_deco',
				'label'         => 'Skills card star decoration',
				'name'          => 'community_adventures_info_skills_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_community_adventures_info_grow_title_underline_word',
				'label' => 'Growth card heading (underlined)',
				'name'  => 'community_adventures_info_grow_title_underline_word',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_community_adventures_info_grow_title_underline',
				'label'         => 'Growth card underline image',
				'name'          => 'community_adventures_info_grow_title_underline',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_community_adventures_info_grow_title_suffix',
				'label' => 'Growth card heading suffix',
				'name'  => 'community_adventures_info_grow_title_suffix',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_community_adventures_info_grow_text',
				'label' => 'Growth card text',
				'name'  => 'community_adventures_info_grow_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'           => 'field_community_adventures_info_grow_deco',
				'label'         => 'Growth card heart decoration',
				'name'          => 'community_adventures_info_grow_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_community_adventures_info_impact_title',
				'label' => 'Impact card title',
				'name'  => 'community_adventures_info_impact_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_community_adventures_info_impact_text',
				'label' => 'Impact card text',
				'name'  => 'community_adventures_info_impact_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'           => 'field_community_adventures_info_impact_deco',
				'label'         => 'Impact card plant decoration',
				'name'          => 'community_adventures_info_impact_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-community-adventures.php',
				),
			),
		),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_community_adventures_parents',
		'title'                 => 'Community Adventures — What Parents Should Know',
		'fields'                => array(
			array(
				'key'          => 'field_community_adventures_parents_section_id',
				'label'        => 'Section anchor ID',
				'name'         => 'community_adventures_parents_section_id',
				'type'         => 'text',
				'instructions' => 'Used for in-page links (e.g. hero button). Default: community-adventures-parents',
			),
			array(
				'key'   => 'field_community_adventures_parents_title',
				'label' => 'Section title',
				'name'  => 'community_adventures_parents_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_community_adventures_parents_tablist_aria_label',
				'label' => 'Tab list aria label',
				'name'  => 'community_adventures_parents_tablist_aria_label',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_community_adventures_parents_faq_items',
				'label'        => 'FAQ tabs',
				'name'         => 'community_adventures_parents_faq_items',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add tab',
				'min'          => 0,
				'max'          => 6,
				'instructions' => 'Leave empty to keep all four default FAQ tabs. Panel slug controls accordion styling — keep slugs as expect, materials, safety, or program.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_community_adventures_parents_faq_panel_slug',
						'label'         => 'Panel slug',
						'name'          => 'panel_slug',
						'type'          => 'select',
						'choices'       => array(
							'expect'    => 'What to Expect',
							'materials' => 'Materials',
							'safety'    => 'Safety & Supervision',
							'program'   => 'Program Details',
						),
						'default_value' => 'expect',
						'return_format' => 'value',
					),
					array(
						'key'   => 'field_community_adventures_parents_faq_tab_label',
						'label' => 'Tab label',
						'name'  => 'tab_label',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_community_adventures_parents_faq_panel_text',
						'label' => 'Panel text',
						'name'  => 'panel_text',
						'type'  => 'textarea',
						'rows'  => 4,
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-community-adventures.php',
				),
			),
		),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_community_adventures_cta',
		'title'                 => 'Community Adventures — Join CTA',
		'fields'                => array(
			array(
				'key'   => 'field_community_adventures_cta_aria_label',
				'label' => 'Section aria label',
				'name'  => 'community_adventures_cta_aria_label',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_community_adventures_cta_heart',
				'label'         => 'Heart decoration',
				'name'          => 'community_adventures_cta_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_community_adventures_cta_text',
				'label' => 'CTA text',
				'name'  => 'community_adventures_cta_text',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'           => 'field_community_adventures_cta_plane',
				'label'         => 'Globe decoration',
				'name'          => 'community_adventures_cta_plane',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_community_adventures_cta_btn_text',
				'label' => 'Button text',
				'name'  => 'community_adventures_cta_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_community_adventures_cta_btn_link',
				'label'         => 'Button link',
				'name'          => 'community_adventures_cta_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-community-adventures.php',
				),
			),
		),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_create_for_cause_hero',
		'title'                 => 'Create for a Cause — Hero / Banner',
		'fields'                => array(
			array(
				'key'   => 'field_create_for_cause_hero_breadcrumb_home_text',
				'label' => 'Breadcrumb: Home label',
				'name'  => 'create_for_cause_hero_breadcrumb_home_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_create_for_cause_hero_breadcrumb_home_link',
				'label'         => 'Breadcrumb: Home link',
				'name'          => 'create_for_cause_hero_breadcrumb_home_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_create_for_cause_hero_breadcrumb_parent_text',
				'label' => 'Breadcrumb: parent label',
				'name'  => 'create_for_cause_hero_breadcrumb_parent_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_create_for_cause_hero_breadcrumb_parent_link',
				'label'         => 'Breadcrumb: parent link',
				'name'          => 'create_for_cause_hero_breadcrumb_parent_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_create_for_cause_hero_breadcrumb_current_text',
				'label' => 'Breadcrumb: current page label',
				'name'  => 'create_for_cause_hero_breadcrumb_current_text',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_create_for_cause_hero_title',
				'label' => 'Page title',
				'name'  => 'create_for_cause_hero_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_create_for_cause_hero_tagline',
				'label' => 'Tagline',
				'name'  => 'create_for_cause_hero_tagline',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_create_for_cause_hero_text',
				'label' => 'Intro text',
				'name'  => 'create_for_cause_hero_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'   => 'field_create_for_cause_hero_primary_btn_text',
				'label' => 'Primary button text',
				'name'  => 'create_for_cause_hero_primary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_create_for_cause_hero_primary_btn_link',
				'label'         => 'Primary button link',
				'name'          => 'create_for_cause_hero_primary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_create_for_cause_hero_back_text',
				'label' => 'Back link text',
				'name'  => 'create_for_cause_hero_back_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_create_for_cause_hero_back_link',
				'label'         => 'Back link URL',
				'name'          => 'create_for_cause_hero_back_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_create_for_cause_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'create_for_cause_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_create_for_cause_hero_banner_alt',
				'label' => 'Banner alt text',
				'name'  => 'create_for_cause_hero_banner_alt',
				'type'  => 'text',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-create-for-cause.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_create_for_cause_explore',
		'title'                 => 'Create for a Cause — Children Explore',
		'fields'                => array(
			array(
				'key'   => 'field_create_for_cause_explore_title',
				'label' => 'Section title',
				'name'  => 'create_for_cause_explore_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_create_for_cause_explore_activities',
				'label'        => 'Activity cards',
				'name'         => 'create_for_cause_explore_activities',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add activity',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default activity cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_create_for_cause_explore_activity_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_create_for_cause_explore_activity_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_create_for_cause_explore_activity_color_slug',
						'label'         => 'Card color',
						'name'          => 'color_slug',
						'type'          => 'select',
						'choices'       => array(
							'paint'   => 'Paint',
							'crafts'  => 'Crafts',
							'media'   => 'Media',
							'design'  => 'Design',
							'upcycle' => 'Upcycle',
						),
						'default_value' => 'paint',
						'return_format' => 'value',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-create-for-cause.php',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_create_for_cause_info',
		'title'                 => 'Create for a Cause — Skills, Growth & Impact',
		'fields'                => array(
			array(
				'key'   => 'field_create_for_cause_info_aria_label',
				'label' => 'Section aria label',
				'name'  => 'create_for_cause_info_aria_label',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_create_for_cause_info_skills_title',
				'label' => 'Skills card title',
				'name'  => 'create_for_cause_info_skills_title',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_create_for_cause_info_skills_items',
				'label'        => 'Skills list items',
				'name'         => 'create_for_cause_info_skills_items',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add skill',
				'min'          => 0,
				'max'          => 10,
				'instructions' => 'Leave empty to keep all five default skills.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_create_for_cause_info_skills_item_text',
						'label' => 'Skill',
						'name'  => 'item_text',
						'type'  => 'text',
					),
				),
			),
			array(
				'key'           => 'field_create_for_cause_info_skills_deco',
				'label'         => 'Skills card star decoration',
				'name'          => 'create_for_cause_info_skills_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_create_for_cause_info_grow_title',
				'label' => 'Growth card title',
				'name'  => 'create_for_cause_info_grow_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_create_for_cause_info_grow_text',
				'label' => 'Growth card text',
				'name'  => 'create_for_cause_info_grow_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'           => 'field_create_for_cause_info_grow_deco',
				'label'         => 'Growth card heart decoration',
				'name'          => 'create_for_cause_info_grow_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_create_for_cause_info_impact_title',
				'label' => 'Impact card title',
				'name'  => 'create_for_cause_info_impact_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_create_for_cause_info_impact_text',
				'label' => 'Impact card text',
				'name'  => 'create_for_cause_info_impact_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
			array(
				'key'           => 'field_create_for_cause_info_impact_deco',
				'label'         => 'Impact card plant decoration',
				'name'          => 'create_for_cause_info_impact_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-create-for-cause.php',
				),
			),
		),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_create_for_cause_parents',
		'title'                 => 'Create for a Cause — What Parents Should Know',
		'fields'                => array(
			array(
				'key'          => 'field_create_for_cause_parents_section_id',
				'label'        => 'Section anchor ID',
				'name'         => 'create_for_cause_parents_section_id',
				'type'         => 'text',
				'instructions' => 'Used for in-page links (e.g. hero button). Default: create-for-cause-parents',
			),
			array(
				'key'   => 'field_create_for_cause_parents_title',
				'label' => 'Section title',
				'name'  => 'create_for_cause_parents_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_create_for_cause_parents_tablist_aria_label',
				'label' => 'Tab list aria label',
				'name'  => 'create_for_cause_parents_tablist_aria_label',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_create_for_cause_parents_faq_items',
				'label'        => 'FAQ tabs',
				'name'         => 'create_for_cause_parents_faq_items',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add tab',
				'min'          => 0,
				'max'          => 6,
				'instructions' => 'Leave empty to keep all four default FAQ tabs. Panel slug controls accordion styling — keep slugs as expect, materials, safety, or program.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_create_for_cause_parents_faq_panel_slug',
						'label'         => 'Panel slug',
						'name'          => 'panel_slug',
						'type'          => 'select',
						'choices'       => array(
							'expect'    => 'What to Expect',
							'materials' => 'Materials',
							'safety'    => 'Safety & Supervision',
							'program'   => 'Program Details',
						),
						'default_value' => 'expect',
						'return_format' => 'value',
					),
					array(
						'key'   => 'field_create_for_cause_parents_faq_tab_label',
						'label' => 'Tab label',
						'name'  => 'tab_label',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_create_for_cause_parents_faq_panel_text',
						'label' => 'Panel text',
						'name'  => 'panel_text',
						'type'  => 'textarea',
						'rows'  => 4,
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-create-for-cause.php',
				),
			),
		),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_create_for_cause_cta',
		'title'                 => 'Create for a Cause — Join CTA',
		'fields'                => array(
			array(
				'key'   => 'field_create_for_cause_cta_aria_label',
				'label' => 'Section aria label',
				'name'  => 'create_for_cause_cta_aria_label',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_create_for_cause_cta_heart',
				'label'         => 'Heart decoration',
				'name'          => 'create_for_cause_cta_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_create_for_cause_cta_text',
				'label' => 'CTA text',
				'name'  => 'create_for_cause_cta_text',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'           => 'field_create_for_cause_cta_plane',
				'label'         => 'Plane decoration',
				'name'          => 'create_for_cause_cta_plane',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_create_for_cause_cta_btn_text',
				'label' => 'Button text',
				'name'  => 'create_for_cause_cta_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_create_for_cause_cta_btn_link',
				'label'         => 'Button link',
				'name'          => 'create_for_cause_cta_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-create-for-cause.php',
				),
			),
		),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_for_parents_hero',
		'title'                 => 'For Parents — Hero / Banner',
		'fields'                => array(
			array(
				'key'   => 'field_for_parents_hero_aria_label',
				'label' => 'Section aria label',
				'name'  => 'for_parents_hero_aria_label',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_hero_title_line_1',
				'label' => 'Heading line 1 (pink, with heart SVG)',
				'name'  => 'for_parents_hero_title_line_1',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_hero_title_line_2',
				'label' => 'Heading line 2 (navy)',
				'name'  => 'for_parents_hero_title_line_2',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_hero_subhead_intro',
				'label' => 'Subhead intro',
				'name'  => 'for_parents_hero_subhead_intro',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_hero_subhead_accent_pink',
				'label' => 'Subhead accent (pink)',
				'name'  => 'for_parents_hero_subhead_accent_pink',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_hero_subhead_accent_green',
				'label' => 'Subhead accent (green)',
				'name'  => 'for_parents_hero_subhead_accent_green',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_hero_text_intro',
				'label' => 'Body intro',
				'name'  => 'for_parents_hero_text_intro',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'   => 'field_for_parents_hero_text_accent_cyan',
				'label' => 'Body accent (cyan)',
				'name'  => 'for_parents_hero_text_accent_cyan',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_hero_primary_btn_text',
				'label' => 'Primary button text',
				'name'  => 'for_parents_hero_primary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_for_parents_hero_primary_btn_link',
				'label'         => 'Primary button link',
				'name'          => 'for_parents_hero_primary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'   => 'field_for_parents_hero_secondary_btn_text',
				'label' => 'Secondary button text',
				'name'  => 'for_parents_hero_secondary_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_for_parents_hero_secondary_btn_link',
				'label'         => 'Secondary button link',
				'name'          => 'for_parents_hero_secondary_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_for_parents_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'for_parents_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
			),
			array(
				'key'   => 'field_for_parents_hero_banner_alt',
				'label' => 'Banner alt text',
				'name'  => 'for_parents_hero_banner_alt',
				'type'  => 'text',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-for-parents.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_for_parents_expect',
		'title'                 => 'For Parents — What Parents Can Expect',
		'fields'                => array(
			array(
				'key'   => 'field_for_parents_expect_title',
				'label' => 'Section title',
				'name'  => 'for_parents_expect_title',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_for_parents_expect_deco_left',
				'label'         => 'Left decoration image',
				'name'          => 'for_parents_expect_deco_left',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'           => 'field_for_parents_expect_deco_right',
				'label'         => 'Right decoration image',
				'name'          => 'for_parents_expect_deco_right',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'          => 'field_for_parents_expect_cards',
				'label'        => 'Expect cards',
				'name'         => 'for_parents_expect_cards',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add card',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all five default expect cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_for_parents_expect_card_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_for_parents_expect_card_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_for_parents_expect_card_text',
						'label' => 'Text',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 3,
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-for-parents.php',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_for_parents_fit',
		'title'                 => 'For Parents — Is Bright Dreamers Right',
		'fields'                => array(
			array(
				'key'   => 'field_for_parents_fit_aria_label',
				'label' => 'Section aria label',
				'name'  => 'for_parents_fit_aria_label',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_fit_pink_title',
				'label' => 'Pink card title',
				'name'  => 'for_parents_fit_pink_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_fit_pink_intro',
				'label' => 'Pink card intro',
				'name'  => 'for_parents_fit_pink_intro',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_for_parents_fit_list_items',
				'label'        => 'Pink card list items',
				'name'         => 'for_parents_fit_list_items',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add item',
				'min'          => 0,
				'max'          => 12,
				'instructions' => 'Leave empty to keep all six default checklist items. Check SVG markup is preserved in the template.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_for_parents_fit_list_item_text',
						'label' => 'Item text',
						'name'  => 'item_text',
						'type'  => 'text',
					),
				),
			),
			array(
				'key'           => 'field_for_parents_fit_jar',
				'label'         => 'Lavender card jar image',
				'name'          => 'for_parents_fit_jar',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_for_parents_fit_quote_text',
				'label' => 'Lavender card quote',
				'name'  => 'for_parents_fit_quote_text',
				'type'  => 'textarea',
				'rows'  => 4,
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-for-parents.php',
				),
			),
		),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_for_parents_info',
		'title'                 => 'For Parents — Experience Information',
		'fields'                => array(
			array(
				'key'   => 'field_for_parents_info_experience_title_underline',
				'label' => 'Experience card underlined title',
				'name'  => 'for_parents_info_experience_title_underline',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_info_experience_title_suffix',
				'label' => 'Experience card title suffix',
				'name'  => 'for_parents_info_experience_title_suffix',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_for_parents_info_features',
				'label'        => 'Experience features',
				'name'         => 'for_parents_info_features',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add feature',
				'min'          => 0,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all four default experience features.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_for_parents_info_feature_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_for_parents_info_feature_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_for_parents_info_feature_text',
						'label' => 'Text',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 3,
					),
				),
			),
			array(
				'key'   => 'field_for_parents_info_experience_footer_line_1',
				'label' => 'Experience footer line 1',
				'name'  => 'for_parents_info_experience_footer_line_1',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_info_experience_footer_line_2',
				'label' => 'Experience footer line 2',
				'name'  => 'for_parents_info_experience_footer_line_2',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_for_parents_info_experience_heart',
				'label'         => 'Experience card heart decoration',
				'name'          => 'for_parents_info_experience_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_for_parents_info_start_title_prefix',
				'label' => 'Get started title prefix',
				'name'  => 'for_parents_info_start_title_prefix',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_info_start_title_underline',
				'label' => 'Get started underlined word',
				'name'  => 'for_parents_info_start_title_underline',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_info_start_title_suffix',
				'label' => 'Get started title suffix',
				'name'  => 'for_parents_info_start_title_suffix',
				'type'  => 'text',
			),
			array(
				'key'          => 'field_for_parents_info_steps',
				'label'        => 'Get started steps',
				'name'         => 'for_parents_info_steps',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add step',
				'min'          => 0,
				'max'          => 6,
				'instructions' => 'Leave empty to keep all three default steps. Number slug controls step badge color — pink, purple, or green.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_for_parents_info_step_num_slug',
						'label'         => 'Number color slug',
						'name'          => 'num_slug',
						'type'          => 'select',
						'choices'       => array(
							'pink'   => 'Pink',
							'purple' => 'Purple',
							'green'  => 'Green',
						),
						'default_value' => 'pink',
						'return_format' => 'value',
					),
					array(
						'key'   => 'field_for_parents_info_step_title',
						'label' => 'Step title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_for_parents_info_step_text',
						'label' => 'Step text',
						'name'  => 'text',
						'type'  => 'textarea',
						'rows'  => 3,
					),
				),
			),
			array(
				'key'           => 'field_for_parents_info_plane',
				'label'         => 'Get started plane decoration',
				'name'          => 'for_parents_info_plane',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_for_parents_info_start_btn_text',
				'label' => 'Get started button text',
				'name'  => 'for_parents_info_start_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_for_parents_info_start_btn_link',
				'label'         => 'Get started button link',
				'name'          => 'for_parents_info_start_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-for-parents.php',
				),
			),
		),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_for_parents_cta',
		'title'                 => 'For Parents — Contact CTA',
		'fields'                => array(
			array(
				'key'   => 'field_for_parents_cta_aria_label',
				'label' => 'Section aria label',
				'name'  => 'for_parents_cta_aria_label',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_for_parents_cta_envelope',
				'label'         => 'Envelope image',
				'name'          => 'for_parents_cta_envelope',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
			),
			array(
				'key'   => 'field_for_parents_cta_title',
				'label' => 'CTA title',
				'name'  => 'for_parents_cta_title',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_cta_text',
				'label' => 'CTA text',
				'name'  => 'for_parents_cta_text',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_for_parents_cta_btn_text',
				'label' => 'Contact button text',
				'name'  => 'for_parents_cta_btn_text',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_for_parents_cta_btn_link',
				'label'         => 'Contact button link',
				'name'          => 'for_parents_cta_btn_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-for-parents.php',
				),
			),
		),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_privacy_policy_hero',
		'title'                 => 'Privacy Policy — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_privacy_policy_hero_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'privacy_policy_hero_aria_label',
				'type'          => 'text',
				'default_value' => 'Privacy Policy',
			),
			array(
				'key'           => 'field_privacy_policy_hero_title',
				'label'         => 'Page title',
				'name'          => 'privacy_policy_hero_title',
				'type'          => 'text',
				'default_value' => 'Privacy Policy',
			),
			array(
				'key'           => 'field_privacy_policy_hero_heart',
				'label'         => 'Heart icon',
				'name'          => 'privacy_policy_hero_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default heart icon.',
			),
			array(
				'key'           => 'field_privacy_policy_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'privacy_policy_hero_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'At Bright Dreamers Club, we respect your privacy and are committed to protecting the personal information of children, families, volunteers, and supporters.',
			),
			array(
				'key'           => 'field_privacy_policy_hero_text_second',
				'label'         => 'Second intro paragraph',
				'name'          => 'privacy_policy_hero_text_second',
				'type'          => 'textarea',
				'rows'          => 2,
				'new_lines'     => '',
				'default_value' => 'This Privacy Policy explains what information we collect, how we use it, and the choices you have.',
			),
			array(
				'key'           => 'field_privacy_policy_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'privacy_policy_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero banner photo.',
			),
			array(
				'key'           => 'field_privacy_policy_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'privacy_policy_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'A young girl smiling while holding a shield with a lock icon',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-privacy-policy.php', 'privacy-policy' ),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_privacy_policy_main',
		'title'                 => 'Privacy Policy — Main Content',
		'fields'                => array_merge(
			array(
				array(
					'key'           => 'field_privacy_policy_main_aria_label',
					'label'         => 'Main section aria label',
					'name'          => 'privacy_policy_main_aria_label',
					'type'          => 'text',
					'default_value' => 'Privacy policy content',
				),
				array(
					'key'           => 'field_privacy_policy_sidebar_title',
					'label'         => 'Sidebar heading',
					'name'          => 'privacy_policy_sidebar_title',
					'type'          => 'text',
					'default_value' => 'On This Page',
				),
				array(
					'key'           => 'field_privacy_policy_nav_aria_label',
					'label'         => 'Navigation aria label',
					'name'          => 'privacy_policy_nav_aria_label',
					'type'          => 'text',
					'default_value' => 'Privacy policy sections',
				),
				array(
					'key'           => 'field_privacy_policy_sidebar_card_icon',
					'label'         => 'Sidebar card icon',
					'name'          => 'privacy_policy_sidebar_card_icon',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'thumbnail',
					'library'       => 'all',
					'instructions'  => 'Leave empty to keep the default sidebar illustration.',
				),
				array(
					'key'           => 'field_privacy_policy_sidebar_card_text',
					'label'         => 'Sidebar card text',
					'name'          => 'privacy_policy_sidebar_card_text',
					'type'          => 'textarea',
					'rows'          => 3,
					'new_lines'     => '',
					'default_value' => 'We care deeply about protecting children\'s privacy, dignity, and trust.',
				),
			),
			bdc_get_privacy_policy_acf_section_fields()
		),
		'location'              => bdc_get_acf_page_locations( 'page-privacy-policy.php', 'privacy-policy' ),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_terms_hero',
		'title'                 => 'Terms — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_terms_hero_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'terms_hero_aria_label',
				'type'          => 'text',
				'default_value' => 'Terms of Use',
			),
			array(
				'key'           => 'field_terms_hero_title',
				'label'         => 'Page title',
				'name'          => 'terms_hero_title',
				'type'          => 'text',
				'default_value' => 'Terms of Use',
			),
			array(
				'key'           => 'field_terms_hero_heart',
				'label'         => 'Heart icon',
				'name'          => 'terms_hero_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default heart icon.',
			),
			array(
				'key'           => 'field_terms_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'terms_hero_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Welcome to Bright Dreamers Club. By accessing or using our website, you agree to these Terms of Use. Please read them carefully.',
			),
			array(
				'key'           => 'field_terms_hero_updated_icon',
				'label'         => 'Last-updated icon',
				'name'          => 'terms_hero_updated_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default calendar icon.',
			),
			array(
				'key'           => 'field_terms_hero_updated_text',
				'label'         => 'Last-updated text',
				'name'          => 'terms_hero_updated_text',
				'type'          => 'text',
				'default_value' => 'Last updated: September 1st, 2026',
			),
			array(
				'key'           => 'field_terms_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'terms_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero banner photo.',
			),
			array(
				'key'           => 'field_terms_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'terms_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'Three children looking at a laptop together',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-terms.php', 'terms' ),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_terms_commitment',
		'title'                 => 'Terms — Our Commitment',
		'fields'                => array(
			array(
				'key'           => 'field_terms_commitment_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'terms_commitment_aria_label',
				'type'          => 'text',
				'default_value' => 'Our commitment',
			),
			array(
				'key'           => 'field_terms_commitment_icon',
				'label'         => 'Card icon',
				'name'          => 'terms_commitment_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_terms_commitment_title',
				'label'         => 'Heading',
				'name'          => 'terms_commitment_title',
				'type'          => 'text',
				'default_value' => 'Our Commitment',
			),
			array(
				'key'           => 'field_terms_commitment_text',
				'label'         => 'Paragraph',
				'name'          => 'terms_commitment_text',
				'type'          => 'textarea',
				'rows'          => 4,
				'new_lines'     => '',
				'default_value' => 'These Terms of Use govern your access to brightdreamersclub.org. We created them to protect our community, clarify expectations, and ensure a safe, positive experience for everyone who visits our site.',
			),
			array(
				'key'           => 'field_terms_commitment_deco',
				'label'         => 'Decorative image',
				'name'          => 'terms_commitment_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default decoration.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-terms.php', 'terms' ),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_terms_sections',
		'title'                 => 'Terms — Policy Cards',
		'fields'                => bdc_get_terms_acf_section_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-terms.php', 'terms' ),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_terms_bottom',
		'title'                 => 'Terms — Questions Banner',
		'fields'                => array(
			array(
				'key'           => 'field_terms_bottom_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'terms_bottom_aria_label',
				'type'          => 'text',
				'default_value' => 'Questions and contact',
			),
			array(
				'key'           => 'field_terms_bottom_questions_icon',
				'label'         => 'Questions icon',
				'name'          => 'terms_bottom_questions_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default questions icon.',
			),
			array(
				'key'           => 'field_terms_bottom_title',
				'label'         => 'Heading',
				'name'          => 'terms_bottom_title',
				'type'          => 'text',
				'default_value' => 'Questions?',
			),
			array(
				'key'           => 'field_terms_bottom_text',
				'label'         => 'Paragraph',
				'name'          => 'terms_bottom_text',
				'type'          => 'textarea',
				'rows'          => 2,
				'new_lines'     => '',
				'default_value' => 'If you have any questions about these Terms of Use, we\'re here to help.',
			),
			array(
				'key'           => 'field_terms_bottom_cta_link',
				'label'         => 'CTA link',
				'name'          => 'terms_bottom_cta_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_terms_bottom_cta_icon',
				'label'         => 'CTA icon',
				'name'          => 'terms_bottom_cta_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default CTA icon.',
			),
			array(
				'key'           => 'field_terms_bottom_cta_title',
				'label'         => 'CTA title',
				'name'          => 'terms_bottom_cta_title',
				'type'          => 'text',
				'default_value' => 'Contact Us Form',
			),
			array(
				'key'           => 'field_terms_bottom_cta_text',
				'label'         => 'CTA description',
				'name'          => 'terms_bottom_cta_text',
				'type'          => 'text',
				'default_value' => 'Send us a message through our contact form.',
			),
			array(
				'key'           => 'field_terms_bottom_deco',
				'label'         => 'Decorative image',
				'name'          => 'terms_bottom_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default decoration.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-terms.php', 'terms' ),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_photo_media_policy_hero',
		'title'                 => 'Photo Media Policy — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_photo_media_policy_hero_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'photo_media_policy_hero_aria_label',
				'type'          => 'text',
				'default_value' => 'Photo and Media Policy',
			),
			array(
				'key'           => 'field_photo_media_policy_hero_breadcrumb_home_text',
				'label'         => 'Breadcrumb — Home text',
				'name'          => 'photo_media_policy_hero_breadcrumb_home_text',
				'type'          => 'text',
				'default_value' => 'Home',
			),
			array(
				'key'           => 'field_photo_media_policy_hero_breadcrumb_home_link',
				'label'         => 'Breadcrumb — Home link',
				'name'          => 'photo_media_policy_hero_breadcrumb_home_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_photo_media_policy_hero_breadcrumb_parent_text',
				'label'         => 'Breadcrumb — Parent text',
				'name'          => 'photo_media_policy_hero_breadcrumb_parent_text',
				'type'          => 'text',
				'default_value' => 'Resources',
			),
			array(
				'key'           => 'field_photo_media_policy_hero_breadcrumb_parent_link',
				'label'         => 'Breadcrumb — Parent link',
				'name'          => 'photo_media_policy_hero_breadcrumb_parent_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_photo_media_policy_hero_breadcrumb_current_text',
				'label'         => 'Breadcrumb — Current page text',
				'name'          => 'photo_media_policy_hero_breadcrumb_current_text',
				'type'          => 'text',
				'default_value' => 'Photo & Media Policy',
			),
			array(
				'key'           => 'field_photo_media_policy_hero_title',
				'label'         => 'Page title',
				'name'          => 'photo_media_policy_hero_title',
				'type'          => 'text',
				'default_value' => 'Photo & Media Policy',
			),
			array(
				'key'           => 'field_photo_media_policy_hero_heart',
				'label'         => 'Heart icon',
				'name'          => 'photo_media_policy_hero_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default heart icon.',
			),
			array(
				'key'           => 'field_photo_media_policy_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'photo_media_policy_hero_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'At Bright Dreamers, we believe in celebrating children\'s creativity while protecting their privacy and dignity. This policy explains how we take, use, and safeguard photos and videos.',
			),
			array(
				'key'           => 'field_photo_media_policy_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'photo_media_policy_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero banner photo.',
			),
			array(
				'key'           => 'field_photo_media_policy_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'photo_media_policy_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'A young girl holding a camera',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-photo-media-policy.php', 'photo-media-policy' ),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_photo_media_policy_main',
		'title'                 => 'Photo Media Policy — Main Content',
		'fields'                => array_merge(
			array(
				array(
					'key'           => 'field_photo_media_policy_main_aria_label',
					'label'         => 'Main section aria label',
					'name'          => 'photo_media_policy_main_aria_label',
					'type'          => 'text',
					'default_value' => 'Photo and media policy content',
				),
				array(
					'key'           => 'field_photo_media_policy_sidebar_title',
					'label'         => 'Sidebar heading',
					'name'          => 'photo_media_policy_sidebar_title',
					'type'          => 'text',
					'default_value' => 'On This Page',
				),
				array(
					'key'           => 'field_photo_media_policy_nav_aria_label',
					'label'         => 'Navigation aria label',
					'name'          => 'photo_media_policy_nav_aria_label',
					'type'          => 'text',
					'default_value' => 'Policy sections',
				),
				array(
					'key'           => 'field_photo_media_policy_sidebar_card_icon',
					'label'         => 'Sidebar card icon',
					'name'          => 'photo_media_policy_sidebar_card_icon',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'thumbnail',
					'library'       => 'all',
					'instructions'  => 'Leave empty to keep the default sidebar illustration.',
				),
				array(
					'key'           => 'field_photo_media_policy_sidebar_card_text',
					'label'         => 'Sidebar card text',
					'name'          => 'photo_media_policy_sidebar_card_text',
					'type'          => 'textarea',
					'rows'          => 3,
					'new_lines'     => '',
					'default_value' => 'Protecting children is our priority. This policy helps us create a safe and respectful environment for all.',
				),
			),
			bdc_get_photo_media_policy_acf_section_fields()
		),
		'location'              => bdc_get_acf_page_locations( 'page-photo-media-policy.php', 'photo-media-policy' ),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_accessibility_hero',
		'title'                 => 'Accessibility — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_accessibility_hero_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'accessibility_hero_aria_label',
				'type'          => 'text',
				'default_value' => 'Accessibility',
			),
			array(
				'key'           => 'field_accessibility_hero_breadcrumb_home_text',
				'label'         => 'Breadcrumb — Home text',
				'name'          => 'accessibility_hero_breadcrumb_home_text',
				'type'          => 'text',
				'default_value' => 'Home',
			),
			array(
				'key'           => 'field_accessibility_hero_breadcrumb_home_link',
				'label'         => 'Breadcrumb — Home link',
				'name'          => 'accessibility_hero_breadcrumb_home_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_accessibility_hero_breadcrumb_parent_text',
				'label'         => 'Breadcrumb — Parent text',
				'name'          => 'accessibility_hero_breadcrumb_parent_text',
				'type'          => 'text',
				'default_value' => 'Resources',
			),
			array(
				'key'           => 'field_accessibility_hero_breadcrumb_parent_link',
				'label'         => 'Breadcrumb — Parent link',
				'name'          => 'accessibility_hero_breadcrumb_parent_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_accessibility_hero_breadcrumb_current_text',
				'label'         => 'Breadcrumb — Current page text',
				'name'          => 'accessibility_hero_breadcrumb_current_text',
				'type'          => 'text',
				'default_value' => 'Accessibility',
			),
			array(
				'key'           => 'field_accessibility_hero_title',
				'label'         => 'Page title',
				'name'          => 'accessibility_hero_title',
				'type'          => 'text',
				'default_value' => 'Accessibility',
			),
			array(
				'key'           => 'field_accessibility_hero_heart',
				'label'         => 'Heart icon',
				'name'          => 'accessibility_hero_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default heart icon.',
			),
			array(
				'key'           => 'field_accessibility_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'accessibility_hero_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Bright Dreamers Club is committed to ensuring our website is accessible to everyone, including people with disabilities. We strive to provide an inclusive experience for all visitors.',
			),
			array(
				'key'           => 'field_accessibility_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'accessibility_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero banner photo.',
			),
			array(
				'key'           => 'field_accessibility_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'accessibility_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'A young girl in a wheelchair using a laptop',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-accessibility.php', 'accessibility' ),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_accessibility_commitment',
		'title'                 => 'Accessibility — Our Commitment',
		'fields'                => array(
			array(
				'key'           => 'field_accessibility_commitment_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'accessibility_commitment_aria_label',
				'type'          => 'text',
				'default_value' => 'Our commitment',
			),
			array(
				'key'           => 'field_accessibility_commitment_icon',
				'label'         => 'Card icon',
				'name'          => 'accessibility_commitment_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_accessibility_commitment_title',
				'label'         => 'Heading',
				'name'          => 'accessibility_commitment_title',
				'type'          => 'text',
				'default_value' => 'Our Commitment',
			),
			array(
				'key'           => 'field_accessibility_commitment_text',
				'label'         => 'Paragraph',
				'name'          => 'accessibility_commitment_text',
				'type'          => 'textarea',
				'rows'          => 4,
				'new_lines'     => '',
				'default_value' => 'We are dedicated to making brightdreamersclub.org accessible and usable for all. We follow recognized accessibility standards and work continuously to improve the experience for every visitor, including adherence to the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA.',
			),
			array(
				'key'           => 'field_accessibility_commitment_star',
				'label'         => 'Star decoration',
				'name'          => 'accessibility_commitment_star',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default decoration.',
			),
			array(
				'key'           => 'field_accessibility_commitment_quote',
				'label'         => 'Quote decoration',
				'name'          => 'accessibility_commitment_quote',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default decoration.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-accessibility.php', 'accessibility' ),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_accessibility_provide',
		'title'                 => 'Accessibility — Aim to Provide',
		'fields'                => bdc_get_accessibility_acf_section_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-accessibility.php', 'accessibility' ),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_accessibility_panels',
		'title'                 => 'Accessibility — Bottom Panels',
		'fields'                => bdc_get_accessibility_acf_panel_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-accessibility.php', 'accessibility' ),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_financial_transparency_hero',
		'title'                 => 'Financial Transparency — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_financial_transparency_hero_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'financial_transparency_hero_aria_label',
				'type'          => 'text',
				'default_value' => 'Financial Transparency',
			),
			array(
				'key'           => 'field_financial_transparency_hero_title',
				'label'         => 'Page title',
				'name'          => 'financial_transparency_hero_title',
				'type'          => 'text',
				'default_value' => 'Financial Transparency',
			),
			array(
				'key'           => 'field_financial_transparency_hero_heart',
				'label'         => 'Heart icon',
				'name'          => 'financial_transparency_hero_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default heart icon.',
			),
			array(
				'key'           => 'field_financial_transparency_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'financial_transparency_hero_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Bright Dreamers Club is committed to honesty, accountability, and transparency in how we use every gift and donation. We believe trust is built through openness.',
			),
			array(
				'key'           => 'field_financial_transparency_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'financial_transparency_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero banner photo.',
			),
			array(
				'key'           => 'field_financial_transparency_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'financial_transparency_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'A jar of coins with a small plant growing out of the top',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-financial-transparency.php', 'financial-transparency' ),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_financial_transparency_commitment',
		'title'                 => 'Financial Transparency — Our Commitment',
		'fields'                => array(
			array(
				'key'           => 'field_financial_transparency_commitment_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'financial_transparency_commitment_aria_label',
				'type'          => 'text',
				'default_value' => 'Our commitment',
			),
			array(
				'key'           => 'field_financial_transparency_commitment_icon',
				'label'         => 'Card icon',
				'name'          => 'financial_transparency_commitment_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_financial_transparency_commitment_title',
				'label'         => 'Heading',
				'name'          => 'financial_transparency_commitment_title',
				'type'          => 'text',
				'default_value' => 'Our Commitment',
			),
			array(
				'key'           => 'field_financial_transparency_commitment_text',
				'label'         => 'Paragraph',
				'name'          => 'financial_transparency_commitment_text',
				'type'          => 'textarea',
				'rows'          => 4,
				'new_lines'     => '',
				'default_value' => 'We steward every dollar with care and integrity. Our goal is to use resources responsibly, report clearly, and ensure donations directly support children, families, and the communities we serve.',
			),
			array(
				'key'           => 'field_financial_transparency_commitment_deco',
				'label'         => 'Decorative image',
				'name'          => 'financial_transparency_commitment_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default decoration.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-financial-transparency.php', 'financial-transparency' ),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_financial_transparency_support',
		'title'                 => 'Financial Transparency — Where Support Goes',
		'fields'                => bdc_get_financial_acf_support_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-financial-transparency.php', 'financial-transparency' ),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_financial_transparency_promise',
		'title'                 => 'Financial Transparency — Our Promise',
		'fields'                => bdc_get_financial_acf_promise_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-financial-transparency.php', 'financial-transparency' ),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_financial_transparency_questions',
		'title'                 => 'Financial Transparency — Questions Banner',
		'fields'                => array(
			array(
				'key'           => 'field_financial_transparency_questions_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'financial_transparency_questions_aria_label',
				'type'          => 'text',
				'default_value' => 'Questions',
			),
			array(
				'key'           => 'field_financial_transparency_questions_icon',
				'label'         => 'Section icon',
				'name'          => 'financial_transparency_questions_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_financial_transparency_questions_title',
				'label'         => 'Heading',
				'name'          => 'financial_transparency_questions_title',
				'type'          => 'text',
				'default_value' => 'Questions or Want to Learn More?',
			),
			array(
				'key'           => 'field_financial_transparency_questions_text',
				'label'         => 'Paragraph',
				'name'          => 'financial_transparency_questions_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'We\'re happy to answer questions about our finances, donations, or how we allocate resources.',
			),
			array(
				'key'           => 'field_financial_transparency_questions_cta_link',
				'label'         => 'CTA link',
				'name'          => 'financial_transparency_questions_cta_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_financial_transparency_questions_cta_icon',
				'label'         => 'CTA icon',
				'name'          => 'financial_transparency_questions_cta_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_financial_transparency_questions_cta_title',
				'label'         => 'CTA title',
				'name'          => 'financial_transparency_questions_cta_title',
				'type'          => 'text',
				'default_value' => 'Contact Us',
			),
			array(
				'key'           => 'field_financial_transparency_questions_cta_text',
				'label'         => 'CTA description',
				'name'          => 'financial_transparency_questions_cta_text',
				'type'          => 'text',
				'default_value' => 'Send us a message through our contact form.',
			),
			array(
				'key'           => 'field_financial_transparency_questions_cta_arrow',
				'label'         => 'CTA arrow icon',
				'name'          => 'financial_transparency_questions_cta_arrow',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default arrow.',
			),
			array(
				'key'           => 'field_financial_transparency_questions_deco',
				'label'         => 'Decorative image',
				'name'          => 'financial_transparency_questions_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default decoration.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-financial-transparency.php', 'financial-transparency' ),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_faq_hero',
		'title'                 => 'FAQ — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_faq_hero_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'faq_hero_aria_label',
				'type'          => 'text',
				'default_value' => 'Frequently Asked Questions',
			),
			array(
				'key'           => 'field_faq_hero_eyebrow',
				'label'         => 'Eyebrow text',
				'name'          => 'faq_hero_eyebrow',
				'type'          => 'text',
				'default_value' => 'FAQ',
			),
			array(
				'key'           => 'field_faq_hero_heart',
				'label'         => 'Eyebrow heart icon',
				'name'          => 'faq_hero_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default heart icon.',
			),
			array(
				'key'           => 'field_faq_hero_title_navy',
				'label'         => 'Title line 1',
				'name'          => 'faq_hero_title_navy',
				'type'          => 'text',
				'default_value' => 'Frequently Asked',
			),
			array(
				'key'           => 'field_faq_hero_title_pink',
				'label'         => 'Title line 2',
				'name'          => 'faq_hero_title_pink',
				'type'          => 'text',
				'default_value' => 'Questions',
			),
			array(
				'key'           => 'field_faq_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'faq_hero_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Find answers to common questions about Bright Dreamers and how we support children to dream, create, and grow.',
			),
			array(
				'key'           => 'field_faq_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'faq_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero banner photo.',
			),
			array(
				'key'           => 'field_faq_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'faq_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'Three children smiling while reading a book together',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-faq.php', 'faq' ),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_faq_search',
		'title'                 => 'FAQ — Search Intro',
		'fields'                => array(
			array(
				'key'           => 'field_faq_search_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'faq_search_aria_label',
				'type'          => 'text',
				'default_value' => 'Search FAQ',
			),
			array(
				'key'           => 'field_faq_search_intro',
				'label'         => 'Intro text',
				'name'          => 'faq_search_intro',
				'type'          => 'text',
				'default_value' => 'Have a question? Search below or browse by topic.',
			),
			array(
				'key'           => 'field_faq_search_icon',
				'label'         => 'Search icon',
				'name'          => 'faq_search_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default search icon.',
			),
			array(
				'key'           => 'field_faq_search_placeholder',
				'label'         => 'Search placeholder',
				'name'          => 'faq_search_placeholder',
				'type'          => 'text',
				'default_value' => 'Search for answers...',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-faq.php', 'faq' ),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_faq_topics',
		'title'                 => 'FAQ — Topics & Sidebar Card',
		'fields'                => bdc_get_faq_acf_topic_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-faq.php', 'faq' ),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_faq_items',
		'title'                 => 'FAQ — Questions',
		'fields'                => bdc_get_faq_acf_item_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-faq.php', 'faq' ),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_faq_contact_cta',
		'title'                 => 'FAQ — Contact Banner',
		'fields'                => array(
			array(
				'key'           => 'field_faq_cta_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'faq_cta_aria_label',
				'type'          => 'text',
				'default_value' => 'Contact us for help',
			),
			array(
				'key'           => 'field_faq_cta_envelope',
				'label'         => 'Envelope icon',
				'name'          => 'faq_cta_envelope',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default envelope icon.',
			),
			array(
				'key'           => 'field_faq_cta_title',
				'label'         => 'Heading',
				'name'          => 'faq_cta_title',
				'type'          => 'text',
				'default_value' => 'Can\'t find what you\'re looking for?',
			),
			array(
				'key'           => 'field_faq_cta_text',
				'label'         => 'Paragraph',
				'name'          => 'faq_cta_text',
				'type'          => 'textarea',
				'rows'          => 2,
				'new_lines'     => '',
				'default_value' => 'We\'re happy to help! Send us a message and our team will get back to you.',
			),
			array(
				'key'           => 'field_faq_cta_plane',
				'label'         => 'Paper plane image',
				'name'          => 'faq_cta_plane',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default image.',
			),
			array(
				'key'           => 'field_faq_cta_link',
				'label'         => 'Button link',
				'name'          => 'faq_cta_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_faq_cta_heart',
				'label'         => 'Heart icon',
				'name'          => 'faq_cta_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default heart icon.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-faq.php', 'faq' ),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_apply_hero',
		'title'                 => 'Apply to Join — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_apply_hero_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'apply_hero_aria_label',
				'type'          => 'text',
				'default_value' => 'Apply to Become a Bright Dreamer',
			),
			array(
				'key'           => 'field_apply_hero_title_pink',
				'label'         => 'Title line 1',
				'name'          => 'apply_hero_title_pink',
				'type'          => 'text',
				'default_value' => 'Apply to Become a',
			),
			array(
				'key'           => 'field_apply_hero_title_navy',
				'label'         => 'Title line 2',
				'name'          => 'apply_hero_title_navy',
				'type'          => 'text',
				'default_value' => 'Bright Dreamer',
			),
			array(
				'key'           => 'field_apply_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'apply_hero_text',
				'type'          => 'textarea',
				'rows'          => 4,
				'new_lines'     => '',
				'default_value' => 'Bright Dreamers welcomes children who are curious, creative, and excited to explore their ideas with others. This application helps us get to know your child and your family.',
			),
			array(
				'key'           => 'field_apply_hero_note_icon',
				'label'         => 'Note badge icon',
				'name'          => 'apply_hero_note_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default badge.',
			),
			array(
				'key'           => 'field_apply_hero_note_text',
				'label'         => 'Note text',
				'name'          => 'apply_hero_note_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Participation in Bright Dreamers experiences is <strong>free</strong>. We never want cost to be a barrier for a child with an idea.',
				'instructions'  => 'You may use <strong> for emphasis.',
			),
			array(
				'key'           => 'field_apply_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'apply_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero banner photo.',
			),
			array(
				'key'           => 'field_apply_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'apply_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'A young girl smiling while drawing with colored pencils',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-apply-to-become.php', 'apply-to-join' ),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_apply_form_name',
		'title'                 => 'Apply to Join — Form',
		'fields'                => array(
			array(
				'key'     => 'field_apply_form_name_message',
				'label'   => 'Form on this page',
				'name'    => '',
				'type'      => 'message',
				'message' => '<strong>Apply to Join</strong><br>The application form stays as it is. You can edit the hero, images, sidebar text, and links on this page — not the form fields.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-apply-to-become.php', 'apply-to-join' ),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_apply_about',
		'title'                 => 'Apply to Join — About the Application',
		'fields'                => bdc_get_apply_acf_about_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-apply-to-become.php', 'apply-to-join' ),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_apply_timeline',
		'title'                 => 'Apply to Join — What Happens Next',
		'fields'                => bdc_get_apply_acf_timeline_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-apply-to-become.php', 'apply-to-join' ),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_apply_questions',
		'title'                 => 'Apply to Join — Questions Card',
		'fields'                => array(
			array(
				'key'           => 'field_apply_questions_title',
				'label'         => 'Card heading',
				'name'          => 'apply_questions_title',
				'type'          => 'text',
				'default_value' => 'Questions?',
			),
			array(
				'key'           => 'field_apply_questions_text',
				'label'         => 'Card text',
				'name'          => 'apply_questions_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'We\'re happy to answer questions before you apply. Send us a message anytime.',
			),
			array(
				'key'           => 'field_apply_questions_link',
				'label'         => 'Button link',
				'name'          => 'apply_questions_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_apply_sidebar_door',
				'label'         => 'Door illustration',
				'name'          => 'apply_sidebar_door',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default illustration.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-apply-to-become.php', 'apply-to-join' ),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_volunteer_hero',
		'title'                 => 'Volunteer Application — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_volunteer_hero_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'volunteer_hero_aria_label',
				'type'          => 'text',
				'default_value' => 'Volunteer Application',
			),
			array(
				'key'           => 'field_volunteer_hero_title_pink',
				'label'         => 'Title line 1',
				'name'          => 'volunteer_hero_title_pink',
				'type'          => 'text',
				'default_value' => 'Volunteer',
			),
			array(
				'key'           => 'field_volunteer_hero_title_navy',
				'label'         => 'Title line 2',
				'name'          => 'volunteer_hero_title_navy',
				'type'          => 'text',
				'default_value' => ' Application',
			),
			array(
				'key'           => 'field_volunteer_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'volunteer_hero_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Thank you for wanting to be part of Bright Dreamers. Together, we can inspire children to dream, create, learn, lead, and give.',
			),
			array(
				'key'           => 'field_volunteer_hero_note_icon',
				'label'         => 'Note badge icon',
				'name'          => 'volunteer_hero_note_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default badge.',
			),
			array(
				'key'           => 'field_volunteer_hero_note_text',
				'label'         => 'Note text',
				'name'          => 'volunteer_hero_note_text',
				'type'          => 'text',
				'default_value' => 'Every volunteer makes a meaningful difference in a child\'s journey.',
			),
			array(
				'key'           => 'field_volunteer_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'volunteer_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero banner photo.',
			),
			array(
				'key'           => 'field_volunteer_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'volunteer_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'A volunteer smiling while helping children with a creative activity',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-volunteer-application.php', 'volunteer-application' ),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_volunteer_form_name',
		'title'                 => 'Volunteer Application — Form',
		'fields'                => array(
			array(
				'key'     => 'field_volunteer_form_name_message',
				'label'   => 'Form on this page',
				'name'    => '',
				'type'    => 'message',
				'message' => '<strong>Volunteer Application</strong><br>The application form stays as it is. You can edit the hero, images, sidebar text, and links on this page — not the form fields.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-volunteer-application.php', 'volunteer-application' ),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_volunteer_spotlight',
		'title'                 => 'Volunteer Application — Spotlight Card',
		'fields'                => array(
			array(
				'key'           => 'field_volunteer_spotlight_heart',
				'label'         => 'Heart icons',
				'name'          => 'volunteer_spotlight_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Used on both sides of the heading. Leave empty to keep the default hearts.',
			),
			array(
				'key'           => 'field_volunteer_spotlight_title_line1',
				'label'         => 'Heading line 1',
				'name'          => 'volunteer_spotlight_title_line1',
				'type'          => 'text',
				'default_value' => 'Be a Part of',
			),
			array(
				'key'           => 'field_volunteer_spotlight_title_line2',
				'label'         => 'Heading line 2',
				'name'          => 'volunteer_spotlight_title_line2',
				'type'          => 'text',
				'default_value' => 'Something Big',
			),
			array(
				'key'           => 'field_volunteer_spotlight_text',
				'label'         => 'Paragraph',
				'name'          => 'volunteer_spotlight_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Your time and skills can help create brighter futures for children in our community.',
			),
			array(
				'key'           => 'field_volunteer_spotlight_image',
				'label'         => 'Hands illustration',
				'name'          => 'volunteer_spotlight_image',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default illustration.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-volunteer-application.php', 'volunteer-application' ),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_volunteer_why',
		'title'                 => 'Volunteer Application — Why Volunteer',
		'fields'                => bdc_get_volunteer_acf_why_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-volunteer-application.php', 'volunteer-application' ),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_volunteer_sidebar_cards',
		'title'                 => 'Volunteer Application — Sidebar Cards',
		'fields'                => array(
			array(
				'key'     => 'field_volunteer_commitment_intro',
				'label'   => 'Time Commitment',
				'name'    => '',
				'type'    => 'message',
				'message' => 'Time Commitment card.',
			),
			array(
				'key'           => 'field_volunteer_commitment_icon',
				'label'         => 'Time Commitment heading icon',
				'name'          => 'volunteer_commitment_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_volunteer_commitment_title',
				'label'         => 'Time Commitment heading',
				'name'          => 'volunteer_commitment_title',
				'type'          => 'text',
				'default_value' => 'Time Commitment',
			),
			array(
				'key'           => 'field_volunteer_commitment_text',
				'label'         => 'Time Commitment text',
				'name'          => 'volunteer_commitment_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'We know life is busy. That\'s why we offer flexible volunteering opportunities that fit your schedule and availability.',
			),
			array(
				'key'           => 'field_volunteer_commitment_image',
				'label'         => 'Calendar illustration',
				'name'          => 'volunteer_commitment_image',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default illustration.',
			),
			array(
				'key'     => 'field_volunteer_note_intro',
				'label'   => 'Important Note',
				'name'    => '',
				'type'    => 'message',
				'message' => 'Important Note card.',
			),
			array(
				'key'           => 'field_volunteer_note_icon',
				'label'         => 'Important Note heading icon',
				'name'          => 'volunteer_note_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_volunteer_note_title',
				'label'         => 'Important Note heading',
				'name'          => 'volunteer_note_title',
				'type'          => 'text',
				'default_value' => 'Important Note',
			),
			array(
				'key'           => 'field_volunteer_note_text_1',
				'label'         => 'Important Note paragraph 1',
				'name'          => 'volunteer_note_text_1',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'All volunteers may be subject to a background check depending on their role and level of interaction with children.',
			),
			array(
				'key'           => 'field_volunteer_note_text_2',
				'label'         => 'Important Note paragraph 2',
				'name'          => 'volunteer_note_text_2',
				'type'          => 'textarea',
				'rows'          => 2,
				'new_lines'     => '',
				'default_value' => 'We take confidentiality seriously and handle all personal information with care.',
			),
			array(
				'key'           => 'field_volunteer_note_lock',
				'label'         => 'Lock icon',
				'name'          => 'volunteer_note_lock',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'     => 'field_volunteer_questions_intro',
				'label'   => 'Questions',
				'name'    => '',
				'type'    => 'message',
				'message' => 'Questions card.',
			),
			array(
				'key'           => 'field_volunteer_questions_icon',
				'label'         => 'Questions heading icon',
				'name'          => 'volunteer_questions_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_volunteer_questions_title',
				'label'         => 'Questions heading',
				'name'          => 'volunteer_questions_title',
				'type'          => 'text',
				'default_value' => 'Questions?',
			),
			array(
				'key'           => 'field_volunteer_questions_text',
				'label'         => 'Questions text',
				'name'          => 'volunteer_questions_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'We\'re happy to help! If you have questions, please use our <strong>Contact Form</strong>.',
				'instructions'  => 'You may use <strong> for emphasis.',
			),
			array(
				'key'           => 'field_volunteer_questions_link',
				'label'         => 'Button link',
				'name'          => 'volunteer_questions_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-volunteer-application.php', 'volunteer-application' ),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_volunteer_footer',
		'title'                 => 'Volunteer Application — Thank You Banner',
		'fields'                => array(
			array(
				'key'           => 'field_volunteer_footer_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'volunteer_footer_aria_label',
				'type'          => 'text',
				'default_value' => 'Thank you',
			),
			array(
				'key'           => 'field_volunteer_footer_envelope',
				'label'         => 'Envelope image',
				'name'          => 'volunteer_footer_envelope',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default envelope.',
			),
			array(
				'key'           => 'field_volunteer_footer_lead',
				'label'         => 'Lead sentence',
				'name'          => 'volunteer_footer_lead',
				'type'          => 'text',
				'default_value' => 'Every hour you give, a child\'s dream grows.',
			),
			array(
				'key'           => 'field_volunteer_footer_thanks',
				'label'         => 'Thank-you sentence',
				'name'          => 'volunteer_footer_thanks',
				'type'          => 'text',
				'default_value' => 'Thank you for being a Bright Dreamer!',
			),
			array(
				'key'           => 'field_volunteer_footer_plane',
				'label'         => 'Paper plane image',
				'name'          => 'volunteer_footer_plane',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default image.',
			),
			array(
				'key'           => 'field_volunteer_footer_heart',
				'label'         => 'Heart image',
				'name'          => 'volunteer_footer_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default heart.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-volunteer-application.php', 'volunteer-application' ),
		'menu_order'            => 5,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_newsletter_intro',
		'title'                 => 'Newsletter Signup — Intro',
		'fields'                => array(
			array(
				'key'           => 'field_newsletter_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'newsletter_aria_label',
				'type'          => 'text',
				'default_value' => 'Newsletter sign up',
			),
			array(
				'key'           => 'field_newsletter_heart_deco',
				'label'         => 'Heart decoration',
				'name'          => 'newsletter_heart_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default heart.',
			),
			array(
				'key'           => 'field_newsletter_title_navy',
				'label'         => 'Title line 1',
				'name'          => 'newsletter_title_navy',
				'type'          => 'text',
				'default_value' => 'Stay Connected.',
			),
			array(
				'key'           => 'field_newsletter_title_pink',
				'label'         => 'Title line 2',
				'name'          => 'newsletter_title_pink',
				'type'          => 'text',
				'default_value' => 'Be a Bright Dreamer.',
			),
			array(
				'key'           => 'field_newsletter_intro',
				'label'         => 'Intro paragraph',
				'name'          => 'newsletter_intro',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Join our community and receive inspiring updates, stories, and ways to make a difference in children\'s lives.',
			),
			array(
				'key'           => 'field_newsletter_sparkle',
				'label'         => 'Sparkle icon',
				'name'          => 'newsletter_sparkle',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default sparkle.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-newsletter-signup.php', 'newsletter-signup' ),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_newsletter_benefits',
		'title'                 => 'Newsletter Signup — Benefits',
		'fields'                => bdc_get_newsletter_acf_benefit_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-newsletter-signup.php', 'newsletter-signup' ),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_newsletter_photo_privacy',
		'title'                 => 'Newsletter Signup — Photo & Privacy',
		'fields'                => array(
			array(
				'key'           => 'field_newsletter_photo',
				'label'         => 'Photo',
				'name'          => 'newsletter_photo',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current photo.',
			),
			array(
				'key'           => 'field_newsletter_photo_alt',
				'label'         => 'Photo alt text',
				'name'          => 'newsletter_photo_alt',
				'type'          => 'text',
				'default_value' => 'Children coloring together at a table',
			),
			array(
				'key'           => 'field_newsletter_privacy_icon',
				'label'         => 'Privacy icon',
				'name'          => 'newsletter_privacy_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_newsletter_privacy_text',
				'label'         => 'Privacy text',
				'name'          => 'newsletter_privacy_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'We respect your privacy. We will never share your information. You can unsubscribe at any time.',
			),
			array(
				'key'           => 'field_newsletter_privacy_deco',
				'label'         => 'Privacy decoration',
				'name'          => 'newsletter_privacy_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default decoration.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-newsletter-signup.php', 'newsletter-signup' ),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_newsletter_form_name',
		'title'                 => 'Newsletter Signup — Form',
		'fields'                => array(
			array(
				'key'     => 'field_newsletter_form_name_message',
				'label'   => 'Form on this page',
				'name'    => '',
				'type'    => 'message',
				'message' => '<strong>Newsletter Signup</strong><br>The signup form stays as it is. You can edit the intro, images, benefits, and privacy note on this page — not the form fields.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-newsletter-signup.php', 'newsletter-signup' ),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_donation_hero',
		'title'                 => 'Donation Interest — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_donation_hero_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'donation_hero_aria_label',
				'type'          => 'text',
				'default_value' => 'Donation Interest',
			),
			array(
				'key'           => 'field_donation_hero_title_pink',
				'label'         => 'Title line 1',
				'name'          => 'donation_hero_title_pink',
				'type'          => 'text',
				'default_value' => 'Support Their Dreams.',
			),
			array(
				'key'           => 'field_donation_hero_title_navy',
				'label'         => 'Title line 2',
				'name'          => 'donation_hero_title_navy',
				'type'          => 'text',
				'default_value' => ' Create a Brighter Tomorrow.',
			),
			array(
				'key'           => 'field_donation_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'donation_hero_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Your generosity helps children dream, learn, create, and grow into confident, kind, and capable individuals.',
			),
			array(
				'key'           => 'field_donation_hero_note_text',
				'label'         => 'Note text',
				'name'          => 'donation_hero_note_text',
				'type'          => 'text',
				'default_value' => 'Thank you for being a part of their journey.',
			),
			array(
				'key'           => 'field_donation_hero_note_icon',
				'label'         => 'Note icon',
				'name'          => 'donation_hero_note_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default heart.',
			),
			array(
				'key'           => 'field_donation_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'donation_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero banner photo.',
			),
			array(
				'key'           => 'field_donation_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'donation_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'Children smiling and holding a handmade Thank You sign',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-donation-interest.php', 'donation-interest' ),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_donation_form_name',
		'title'                 => 'Donation Interest — Form',
		'fields'                => array(
			array(
				'key'     => 'field_donation_form_name_message',
				'label'   => 'Form on this page',
				'name'    => '',
				'type'    => 'message',
				'message' => '<strong>Donation Interest</strong><br>The donation form stays as it is. You can edit the hero, images, sidebar text, and links on this page — not the form fields.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-donation-interest.php', 'donation-interest' ),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_donation_impact',
		'title'                 => 'Donation Interest — Your Impact',
		'fields'                => bdc_get_donation_acf_impact_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-donation-interest.php', 'donation-interest' ),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_donation_sidebar',
		'title'                 => 'Donation Interest — Sidebar Cards',
		'fields'                => array(
			array(
				'key'     => 'field_donation_future_intro',
				'label'   => 'Future Online Giving',
				'name'    => '',
				'type'    => 'message',
				'message' => 'Future Online Giving card.',
			),
			array(
				'key'           => 'field_donation_future_icon',
				'label'         => 'Future Online Giving heading icon',
				'name'          => 'donation_future_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_donation_future_title',
				'label'         => 'Future Online Giving heading',
				'name'          => 'donation_future_title',
				'type'          => 'text',
				'default_value' => 'Future Online Giving',
			),
			array(
				'key'           => 'field_donation_future_text',
				'label'         => 'Future Online Giving text',
				'name'          => 'donation_future_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'We are working on secure online giving options. Thank you for your patience as we build this thoughtfully.',
			),
			array(
				'key'           => 'field_donation_future_trail',
				'label'         => 'Trail decoration',
				'name'          => 'donation_future_trail',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default decoration.',
			),
			array(
				'key'     => 'field_donation_trusted_intro',
				'label'   => 'Safe and Trusted',
				'name'    => '',
				'type'    => 'message',
				'message' => 'Safe & Trusted card.',
			),
			array(
				'key'           => 'field_donation_trusted_icon',
				'label'         => 'Safe & Trusted heading icon',
				'name'          => 'donation_trusted_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_donation_trusted_title',
				'label'         => 'Safe & Trusted heading',
				'name'          => 'donation_trusted_title',
				'type'          => 'text',
				'default_value' => 'Safe & Trusted',
			),
			array(
				'key'           => 'field_donation_trusted_text',
				'label'         => 'Safe & Trusted text',
				'name'          => 'donation_trusted_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'We are committed to responsible stewardship and transparency in how every gift is used.',
			),
			array(
				'key'           => 'field_donation_trusted_link',
				'label'         => 'Safe & Trusted link',
				'name'          => 'donation_trusted_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'     => 'field_donation_questions_intro',
				'label'   => 'Questions',
				'name'    => '',
				'type'    => 'message',
				'message' => 'Questions card.',
			),
			array(
				'key'           => 'field_donation_questions_icon',
				'label'         => 'Questions heading icon',
				'name'          => 'donation_questions_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_donation_questions_title',
				'label'         => 'Questions heading',
				'name'          => 'donation_questions_title',
				'type'          => 'text',
				'default_value' => 'Questions?',
			),
			array(
				'key'           => 'field_donation_questions_text',
				'label'         => 'Questions text',
				'name'          => 'donation_questions_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'We\'re happy to help! Reach out anytime with questions about giving.',
			),
			array(
				'key'           => 'field_donation_questions_link',
				'label'         => 'Button link',
				'name'          => 'donation_questions_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-donation-interest.php', 'donation-interest' ),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_donation_footer',
		'title'                 => 'Donation Interest — Thank You Banner',
		'fields'                => array(
			array(
				'key'           => 'field_donation_footer_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'donation_footer_aria_label',
				'type'          => 'text',
				'default_value' => 'Thank you',
			),
			array(
				'key'           => 'field_donation_footer_text',
				'label'         => 'Thank-you sentence',
				'name'          => 'donation_footer_text',
				'type'          => 'textarea',
				'rows'          => 2,
				'new_lines'     => '',
				'default_value' => 'Thank you! Your kindness helps us create brighter futures for children.',
			),
			array(
				'key'           => 'field_donation_footer_deco',
				'label'         => 'Trail decoration',
				'name'          => 'donation_footer_deco',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default decoration.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-donation-interest.php', 'donation-interest' ),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_partner_hero',
		'title'                 => 'Partner Inquiry — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_partner_hero_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'partner_hero_aria_label',
				'type'          => 'text',
				'default_value' => 'Partner Inquiry Form',
			),
			array(
				'key'           => 'field_partner_hero_title_pink',
				'label'         => 'Title line 1',
				'name'          => 'partner_hero_title_pink',
				'type'          => 'text',
				'default_value' => 'Partner',
			),
			array(
				'key'           => 'field_partner_hero_title_navy',
				'label'         => 'Title line 2',
				'name'          => 'partner_hero_title_navy',
				'type'          => 'text',
				'default_value' => ' Inquiry Form',
			),
			array(
				'key'           => 'field_partner_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'partner_hero_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Bright Dreamers welcomes partnerships with organizations, businesses, and individuals who want to help children explore ideas, create, and make a difference.',
			),
			array(
				'key'           => 'field_partner_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'partner_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero banner photo.',
			),
			array(
				'key'           => 'field_partner_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'partner_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'An educator and children working together on a creative project',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-partner-inquiry.php', 'partner-inquiry-form' ),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_partner_form_name',
		'title'                 => 'Partner Inquiry — Form',
		'fields'                => array(
			array(
				'key'     => 'field_partner_form_name_message',
				'label'   => 'Form on this page',
				'name'    => '',
				'type'    => 'message',
				'message' => '<strong>Partner Inquiry</strong><br>The partner inquiry form stays as it is. You can edit the hero, images, sidebar text, and links on this page — not the form fields.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-partner-inquiry.php', 'partner-inquiry-form' ),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_partner_about',
		'title'                 => 'Partner Inquiry — About Partnerships',
		'fields'                => bdc_get_partner_acf_about_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-partner-inquiry.php', 'partner-inquiry-form' ),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_partner_next',
		'title'                 => 'Partner Inquiry — What Happens Next',
		'fields'                => bdc_get_partner_acf_next_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-partner-inquiry.php', 'partner-inquiry-form' ),
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_partner_sidebar',
		'title'                 => 'Partner Inquiry — Questions & Spotlight',
		'fields'                => array(
			array(
				'key'     => 'field_partner_questions_intro',
				'label'   => 'Questions',
				'name'    => '',
				'type'    => 'message',
				'message' => 'Questions card.',
			),
			array(
				'key'           => 'field_partner_questions_icon',
				'label'         => 'Questions heading icon',
				'name'          => 'partner_questions_icon',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default icon.',
			),
			array(
				'key'           => 'field_partner_questions_title',
				'label'         => 'Questions heading',
				'name'          => 'partner_questions_title',
				'type'          => 'text',
				'default_value' => 'Questions?',
			),
			array(
				'key'           => 'field_partner_questions_text',
				'label'         => 'Questions text',
				'name'          => 'partner_questions_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'We\'re here to help! Support is available through the Contact Us form only.',
			),
			array(
				'key'           => 'field_partner_questions_link',
				'label'         => 'Button link',
				'name'          => 'partner_questions_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'     => 'field_partner_spotlight_intro',
				'label'   => 'Spotlight',
				'name'    => '',
				'type'    => 'message',
				'message' => 'Sidebar spotlight image and caption.',
			),
			array(
				'key'           => 'field_partner_spotlight_image',
				'label'         => 'Spotlight image',
				'name'          => 'partner_spotlight_image',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default illustration.',
			),
			array(
				'key'           => 'field_partner_spotlight_caption',
				'label'         => 'Spotlight caption',
				'name'          => 'partner_spotlight_caption',
				'type'          => 'text',
				'default_value' => 'Open doors. Bright futures. Stronger together.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-partner-inquiry.php', 'partner-inquiry-form' ),
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_partner_footer',
		'title'                 => 'Partner Inquiry — Footer Bar',
		'fields'                => array(
			array(
				'key'           => 'field_partner_footer_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'partner_footer_aria_label',
				'type'          => 'text',
				'default_value' => 'Submit partner inquiry',
			),
			array(
				'key'           => 'field_partner_footer_envelope',
				'label'         => 'Envelope image',
				'name'          => 'partner_footer_envelope',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default envelope.',
			),
			array(
				'key'           => 'field_partner_footer_text',
				'label'         => 'Thank-you sentence',
				'name'          => 'partner_footer_text',
				'type'          => 'textarea',
				'rows'          => 2,
				'new_lines'     => '',
				'default_value' => 'Thank you for helping create opportunities for young ideas to grow.',
			),
			array(
				'key'           => 'field_partner_footer_plane',
				'label'         => 'Submit button plane icon',
				'name'          => 'partner_footer_plane',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default plane icon. The Submit Inquiry button itself is not editable.',
			),
			array(
				'key'           => 'field_partner_footer_heart',
				'label'         => 'Heart decoration',
				'name'          => 'partner_footer_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default heart.',
			),
			array(
				'key'           => 'field_partner_footer_star',
				'label'         => 'Star decoration',
				'name'          => 'partner_footer_star',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default star.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-partner-inquiry.php', 'partner-inquiry-form' ),
		'menu_order'            => 5,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_photo_consent_hero',
		'title'                 => 'Photo Media Consent — Hero / Banner',
		'fields'                => array(
			array(
				'key'           => 'field_photo_consent_hero_aria_label',
				'label'         => 'Section aria label',
				'name'          => 'photo_consent_hero_aria_label',
				'type'          => 'text',
				'default_value' => 'Photo and Media Consent Form',
			),
			array(
				'key'           => 'field_photo_consent_hero_breadcrumb_home_text',
				'label'         => 'Breadcrumb — Home text',
				'name'          => 'photo_consent_hero_breadcrumb_home_text',
				'type'          => 'text',
				'default_value' => 'Home',
			),
			array(
				'key'           => 'field_photo_consent_hero_breadcrumb_home_link',
				'label'         => 'Breadcrumb — Home link',
				'name'          => 'photo_consent_hero_breadcrumb_home_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_photo_consent_hero_breadcrumb_resources_text',
				'label'         => 'Breadcrumb — Resources text',
				'name'          => 'photo_consent_hero_breadcrumb_resources_text',
				'type'          => 'text',
				'default_value' => 'Resources',
			),
			array(
				'key'           => 'field_photo_consent_hero_breadcrumb_resources_link',
				'label'         => 'Breadcrumb — Resources link',
				'name'          => 'photo_consent_hero_breadcrumb_resources_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_photo_consent_hero_breadcrumb_policy_text',
				'label'         => 'Breadcrumb — Policy text',
				'name'          => 'photo_consent_hero_breadcrumb_policy_text',
				'type'          => 'text',
				'default_value' => 'Photo & Media Policy',
			),
			array(
				'key'           => 'field_photo_consent_hero_breadcrumb_policy_link',
				'label'         => 'Breadcrumb — Policy link',
				'name'          => 'photo_consent_hero_breadcrumb_policy_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_photo_consent_hero_breadcrumb_current_text',
				'label'         => 'Breadcrumb — Current page text',
				'name'          => 'photo_consent_hero_breadcrumb_current_text',
				'type'          => 'text',
				'default_value' => 'Consent Form',
			),
			array(
				'key'           => 'field_photo_consent_hero_title',
				'label'         => 'Page title',
				'name'          => 'photo_consent_hero_title',
				'type'          => 'text',
				'default_value' => 'Photo & Media Consent Form',
			),
			array(
				'key'           => 'field_photo_consent_hero_heart',
				'label'         => 'Heart icon',
				'name'          => 'photo_consent_hero_heart',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the default heart icon.',
			),
			array(
				'key'           => 'field_photo_consent_hero_text',
				'label'         => 'Intro paragraph',
				'name'          => 'photo_consent_hero_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Your consent helps us capture and share the magic of children\'s ideas and experiences in a safe, respectful, and responsible way.',
			),
			array(
				'key'           => 'field_photo_consent_hero_banner',
				'label'         => 'Banner image',
				'name'          => 'photo_consent_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero banner photo.',
			),
			array(
				'key'           => 'field_photo_consent_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'photo_consent_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'A young girl holding a camera',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-photo-media-consent.php', 'photo-media-consent-form' ),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_photo_consent_form_name',
		'title'                 => 'Photo Media Consent — Form',
		'fields'                => array(
			array(
				'key'     => 'field_photo_consent_form_name_message',
				'label'   => 'Form on this page',
				'name'    => '',
				'type'    => 'message',
				'message' => '<strong>Photo &amp; Media Consent</strong><br>The consent form stays as it is. You can edit the hero, breadcrumbs, sidebar links, and trust card on this page — not the form fields.',
			),
		),
		'location'              => bdc_get_acf_page_locations( 'page-photo-media-consent.php', 'photo-media-consent-form' ),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_photo_consent_sidebar',
		'title'                 => 'Photo Media Consent — Sidebar',
		'fields'                => bdc_get_photo_consent_acf_nav_fields(),
		'location'              => bdc_get_acf_page_locations( 'page-photo-media-consent.php', 'photo-media-consent-form' ),
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

require_once __DIR__ . '/acf-global-fields.php';
