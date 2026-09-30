<?php
/**
 * Default content and ACF field builders for the Accessibility page.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Asset path prefix for Accessibility images.
 *
 * @return string
 */
function bdc_get_accessibility_asset_base() {
	return 'assets/images/Accessibility/';
}

/**
 * Default Accessibility “aim to provide” cards. Each row is one grid card.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_accessibility_sections_defaults() {
	$asset_base = bdc_get_accessibility_asset_base();

	return array(
		array(
			'slug'  => 'navigation',
			'icon'  => bdc_theme_asset_url( $asset_base . '906ef700-e6bf-4359-8c2a-745554349ba9-removebg-preview.png' ),
			'title' => 'Easy Navigation',
			'text'  => 'Clear menus and logical page structure so you can find what you need quickly.',
		),
		array(
			'slug'  => 'readable',
			'icon'  => bdc_theme_asset_url( $asset_base . 'cf6a9c15-4f87-46c4-a2d9-0a1deb401e6d-removebg-preview.png' ),
			'title' => 'Readable Content',
			'text'  => 'Legible fonts, sufficient contrast, and well-organized text for comfortable reading.',
		),
		array(
			'slug'  => 'keyboard',
			'icon'  => bdc_theme_asset_url( $asset_base . '20981b85-1e35-46dc-8319-6430fbfc04e6-removebg-preview.png' ),
			'title' => 'Keyboard Accessibility',
			'text'  => 'Full functionality for users who navigate with a keyboard or assistive devices.',
		),
		array(
			'slug'  => 'alttext',
			'icon'  => bdc_theme_asset_url( $asset_base . 'dab96672-b166-4e8f-a580-cc3b6b24ea03-removebg-preview.png' ),
			'title' => 'Alt Text & Labels',
			'text'  => 'Descriptive text for images and clear labels on forms and interactive elements.',
		),
		array(
			'slug'  => 'compatibility',
			'icon'  => bdc_theme_asset_url( $asset_base . '0c918463-dc16-4e2c-8855-07feb739708b-removebg-preview.png' ),
			'title' => 'Compatibility',
			'text'  => 'Support for common browsers, screen readers, and assistive technologies.',
		),
		array(
			'slug'  => 'responsive',
			'icon'  => bdc_theme_asset_url( $asset_base . '77f5c4ed-843d-40bc-a5f1-8551b8ee5dc8-removebg-preview.png' ),
			'title' => 'Responsive Design',
			'text'  => 'A consistent experience across desktop, tablet, and mobile devices.',
		),
	);
}

/**
 * ACF field name for one Accessibility card sub-field.
 *
 * @param string $slug Section slug.
 * @param string $sub  Sub field: title, icon, body.
 * @return string
 */
function bdc_accessibility_section_field_name( $slug, $sub ) {
	return 'accessibility_provide_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for each Accessibility provide card.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_accessibility_acf_section_fields() {
	$fields = array(
		array(
			'key'           => 'field_accessibility_provide_aria_label',
			'label'         => 'Section aria label',
			'name'          => 'accessibility_provide_aria_label',
			'type'          => 'text',
			'default_value' => 'We aim to provide',
		),
		array(
			'key'           => 'field_accessibility_provide_title',
			'label'         => 'Section heading',
			'name'          => 'accessibility_provide_title',
			'type'          => 'text',
			'default_value' => 'We aim to provide',
		),
		array(
			'key'     => 'field_accessibility_sections_intro',
			'label'   => 'Aim to provide cards',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one card in the grid. Change the title, icon, or text to update that card.',
		),
	);

	foreach ( bdc_get_accessibility_sections_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_accessibility_tab_' . $slug,
			'label'     => $row['title'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_accessibility_provide_' . $slug . '_title',
			'label'         => 'Card title',
			'name'          => bdc_accessibility_section_field_name( $slug, 'title' ),
			'type'          => 'text',
			'default_value' => $row['title'],
		);

		$fields[] = array(
			'key'           => 'field_accessibility_provide_' . $slug . '_icon',
			'label'         => 'Card icon',
			'name'          => bdc_accessibility_section_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		);

		$fields[] = array(
			'key'           => 'field_accessibility_provide_' . $slug . '_text',
			'label'         => 'Card text',
			'name'          => bdc_accessibility_section_field_name( $slug, 'text' ),
			'type'          => 'textarea',
			'rows'          => 3,
			'new_lines'     => '',
			'default_value' => $row['text'],
		);
	}

	return $fields;
}

/**
 * Resolve Accessibility provide-grid cards from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_accessibility_resolved_sections( $post_id ) {
	$post_id  = (int) $post_id;
	$sections = array();

	foreach ( bdc_get_accessibility_sections_defaults() as $default ) {
		$slug = $default['slug'];

		$sections[] = array(
			'icon'  => bdc_get_acf_image_url(
				bdc_accessibility_section_field_name( $slug, 'icon' ),
				$default['icon'],
				$post_id
			),
			'title' => bdc_get_acf_text(
				bdc_accessibility_section_field_name( $slug, 'title' ),
				$default['title'],
				$post_id
			),
			'text'  => bdc_get_acf_text(
				bdc_accessibility_section_field_name( $slug, 'text' ),
				$default['text'],
				$post_id
			),
		);
	}

	return $sections;
}

/**
 * Pre-fill Accessibility card title and text in the editor when nothing is saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_accessibility_section_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'accessibility_provide_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^accessibility_provide_([a-z]+)_([a-z_]+)$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];
	$sub  = $matches[2];

	if ( 'title' !== $sub && 'text' !== $sub ) {
		return $value;
	}

	foreach ( bdc_get_accessibility_sections_defaults() as $row ) {
		if ( $row['slug'] !== $slug ) {
			continue;
		}

		return 'title' === $sub ? $row['title'] : $row['text'];
	}

	return $value;
}

/**
 * Default Accessibility color panels.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_accessibility_panels_defaults() {
	$asset_base = bdc_get_accessibility_asset_base();

	return array(
		array(
			'slug'         => 'purple',
			'panel_slug'   => 'purple',
			'icon'         => bdc_theme_asset_url( $asset_base . 'bb97bc2a-bfef-4cd1-8fbf-7682b2da1864-removebg-preview.png' ),
			'title'        => 'Ongoing Improvements',
			'section_body' => '<p class="accessibility-panel__text">Accessibility is an ongoing effort. We regularly review our website and content to identify and remove barriers and ensure we meet the evolving needs of our community.</p>',
			'deco_url'     => bdc_theme_asset_url( $asset_base . 'b4102ca5-050d-4ae4-bcc8-c0103428b45b-removebg-preview.png' ),
			'aside_body'   => '',
			'panel_link'   => array(
				'title'  => '',
				'url'    => '',
				'target' => '',
			),
		),
		array(
			'slug'         => 'pink',
			'panel_slug'   => 'pink',
			'icon'         => bdc_theme_asset_url( $asset_base . '752d6f1f-1b10-4ee5-a9fd-bdff1d4889c2-removebg-preview.png' ),
			'title'        => 'Need Assistance or Have Feedback?',
			'section_body' => '<p class="accessibility-panel__text">If you encounter any accessibility barriers on our website or have suggestions on how we can improve, we&rsquo;d love to hear from you.</p>',
			'deco_url'     => '',
			'aside_body'   => '<p class="accessibility-panel__aside-row"><img class="accessibility-panel__aside-icon" src="' . esc_url( bdc_theme_asset_url( $asset_base . '752d6f1f-1b10-4ee5-a9fd-bdff1d4889c2-removebg-preview.png' ) ) . '" alt="" width="28" height="28" loading="lazy" decoding="async" aria-hidden="true" /><span><a class="accessibility-panel__email" href="' . esc_url( bdc_page_url( 'contact.html' ) ) . '">Contact Us</a></span></p><p class="accessibility-panel__aside-row"><img class="accessibility-panel__aside-icon" src="' . esc_url( bdc_theme_asset_url( $asset_base . '2031e644-cd28-4b1a-8e69-26a210fad38b-removebg-preview.png' ) ) . '" alt="" width="28" height="28" loading="lazy" decoding="async" aria-hidden="true" /><span>We aim to respond within 3 business days</span></p>',
			'panel_link'   => array(
				'title'  => '',
				'url'    => '',
				'target' => '',
			),
		),
		array(
			'slug'         => 'yellow',
			'panel_slug'   => 'yellow',
			'icon'         => bdc_theme_asset_url( $asset_base . '26cbaa97-18ff-4146-a1c5-67a824d943c1-removebg-preview (1).png' ),
			'title'        => 'Standards We Follow',
			'section_body' => '<p class="accessibility-panel__text">This website strives to conform to WCAG 2.1 Level AA standards to ensure a more inclusive experience for all.</p>',
			'deco_url'     => '',
			'aside_body'   => '',
			'panel_link'   => array(
				'title'  => 'Learn more about WCAG 2.1',
				'url'    => 'https://www.w3.org/WAI/standards-guidelines/wcag/',
				'target' => '_blank',
			),
		),
	);
}

/**
 * ACF field name for one Accessibility panel sub-field.
 *
 * @param string $slug Panel slug.
 * @param string $sub  Sub field name.
 * @return string
 */
function bdc_accessibility_panel_field_name( $slug, $sub ) {
	return 'accessibility_panel_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for Accessibility panels.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_accessibility_acf_panel_fields() {
	$fields = array(
		array(
			'key'           => 'field_accessibility_panels_aria_label',
			'label'         => 'Section aria label',
			'name'          => 'accessibility_panels_aria_label',
			'type'          => 'text',
			'default_value' => 'Accessibility information',
		),
		array(
			'key'     => 'field_accessibility_panels_intro',
			'label'   => 'Bottom panels',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one colored panel near the bottom of the page.',
		),
	);

	foreach ( bdc_get_accessibility_panels_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_accessibility_panel_tab_' . $slug,
			'label'     => $row['title'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_accessibility_panel_' . $slug . '_title',
			'label'         => 'Panel title',
			'name'          => bdc_accessibility_panel_field_name( $slug, 'title' ),
			'type'          => 'text',
			'default_value' => $row['title'],
		);

		$fields[] = array(
			'key'           => 'field_accessibility_panel_' . $slug . '_icon',
			'label'         => 'Panel icon',
			'name'          => bdc_accessibility_panel_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		);

		$fields[] = array(
			'key'           => 'field_accessibility_panel_' . $slug . '_body',
			'label'         => 'Panel body',
			'name'          => bdc_accessibility_panel_field_name( $slug, 'body' ),
			'type'          => 'wysiwyg',
			'tabs'          => 'all',
			'toolbar'       => 'basic',
			'media_upload'  => 0,
			'delay'         => 1,
			'default_value' => $row['section_body'],
		);

		$fields[] = array(
			'key'           => 'field_accessibility_panel_' . $slug . '_deco',
			'label'         => 'Decorative image',
			'name'          => bdc_accessibility_panel_field_name( $slug, 'deco' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Used on the purple panel. Leave empty to keep the default.',
		);

		$fields[] = array(
			'key'           => 'field_accessibility_panel_' . $slug . '_aside',
			'label'         => 'Aside HTML',
			'name'          => bdc_accessibility_panel_field_name( $slug, 'aside' ),
			'type'          => 'wysiwyg',
			'tabs'          => 'all',
			'toolbar'       => 'basic',
			'media_upload'  => 0,
			'delay'         => 1,
			'default_value' => $row['aside_body'],
			'instructions'  => 'Used on the pink panel for email / response notes.',
		);

		$fields[] = array(
			'key'           => 'field_accessibility_panel_' . $slug . '_link',
			'label'         => 'Panel link',
			'name'          => bdc_accessibility_panel_field_name( $slug, 'link' ),
			'type'          => 'link',
			'return_format' => 'array',
			'instructions'  => 'Used on the yellow panel.',
		);
	}

	return $fields;
}

/**
 * Resolve Accessibility panels from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_accessibility_resolved_panels( $post_id ) {
	$post_id = (int) $post_id;
	$panels  = array();

	foreach ( bdc_get_accessibility_panels_defaults() as $default ) {
		$slug = $default['slug'];

		$panels[] = array(
			'panel_slug'   => $default['panel_slug'],
			'icon'         => bdc_get_acf_image_url(
				bdc_accessibility_panel_field_name( $slug, 'icon' ),
				$default['icon'],
				$post_id
			),
			'title'        => bdc_get_acf_text(
				bdc_accessibility_panel_field_name( $slug, 'title' ),
				$default['title'],
				$post_id
			),
			'section_body' => bdc_get_acf_text(
				bdc_accessibility_panel_field_name( $slug, 'body' ),
				$default['section_body'],
				$post_id
			),
			'deco_url'     => bdc_get_acf_image_url(
				bdc_accessibility_panel_field_name( $slug, 'deco' ),
				$default['deco_url'],
				$post_id
			),
			'aside_body'   => bdc_get_acf_text(
				bdc_accessibility_panel_field_name( $slug, 'aside' ),
				$default['aside_body'],
				$post_id
			),
			'panel_link'   => bdc_get_acf_link(
				bdc_accessibility_panel_field_name( $slug, 'link' ),
				$default['panel_link'],
				$post_id
			),
		);
	}

	return $panels;
}

/**
 * Pre-fill Accessibility panel title/body/aside in the editor.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_accessibility_panel_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'accessibility_panel_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^accessibility_panel_([a-z]+)_([a-z_]+)$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];
	$sub  = $matches[2];

	if ( ! in_array( $sub, array( 'title', 'body', 'aside' ), true ) ) {
		return $value;
	}

	foreach ( bdc_get_accessibility_panels_defaults() as $row ) {
		if ( $row['slug'] !== $slug ) {
			continue;
		}

		if ( 'title' === $sub ) {
			return $row['title'];
		}

		if ( 'aside' === $sub ) {
			return $row['aside_body'];
		}

		return $row['section_body'];
	}

	return $value;
}

add_filter( 'acf/load_value', 'bdc_acf_load_accessibility_section_value', 10, 3 );
add_filter( 'acf/load_value', 'bdc_acf_load_accessibility_panel_value', 10, 3 );
