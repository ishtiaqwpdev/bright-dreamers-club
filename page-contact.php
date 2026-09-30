<?php
/**
 * Contact page template — converted from contact.html.
 *
 * Template Name: Contact
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$contact_page_id = get_queried_object_id();

$contact_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$contact_hero_aria_label = bdc_get_acf_text(
	'contact_hero_aria_label',
	'Contact Bright Dreamers',
	$contact_page_id
);
$contact_hero_eyebrow = bdc_get_acf_text(
	'contact_hero_eyebrow',
	'Contact Us',
	$contact_page_id
);
$contact_hero_title_line_1 = bdc_get_acf_text(
	'contact_hero_title_line_1',
	"Let's Connect",
	$contact_page_id
);
$contact_hero_title_line_2 = bdc_get_acf_text(
	'contact_hero_title_line_2',
	'for a Brighter',
	$contact_page_id
);
$contact_hero_title_line_3 = bdc_get_acf_text(
	'contact_hero_title_line_3',
	'Tomorrow',
	$contact_page_id
);
/* Remove trailing periods on hero title lines. */
$contact_hero_title_line_1 = rtrim( (string) $contact_hero_title_line_1, ". \t" );
$contact_hero_title_line_2 = rtrim( (string) $contact_hero_title_line_2, ". \t" );
$contact_hero_title_line_3 = rtrim( (string) $contact_hero_title_line_3, ". \t" );
$contact_hero_text = bdc_get_acf_text(
	'contact_hero_text',
	'We\'d love to hear from you! Whether you have a question, an idea, or want to learn more about Bright Dreamers, please reach out. Your message helps us build a brighter future for kids with ideas.',
	$contact_page_id
);
$contact_hero_primary_btn_text = bdc_get_acf_text(
	'contact_hero_primary_btn_text',
	'Send Us a Message',
	$contact_page_id
);
$contact_hero_primary_btn_link = bdc_get_acf_link(
	'contact_hero_primary_btn_link',
	array(
		'title'  => 'Send Us a Message',
		'url'    => '#contact-form',
		'target' => '',
	),
	$contact_page_id
);
$contact_hero_secondary_btn_text = bdc_get_acf_text(
	'contact_hero_secondary_btn_text',
	'See Our Vision',
	$contact_page_id
);
$contact_hero_secondary_btn_link = bdc_get_acf_link(
	'contact_hero_secondary_btn_link',
	array(
		'title'  => 'See Our Vision',
		'url'    => bdc_page_url( 'our-vision.html' ),
		'target' => '',
	),
	$contact_page_id
);
$contact_hero_banner_theme_path = 'assets/images/contact-hero-banner.jpeg';
$contact_hero_banner_url        = bdc_theme_asset_url( $contact_hero_banner_theme_path );
$contact_hero_banner_ver        = bdc_asset_version( $contact_hero_banner_theme_path );
if ( $contact_hero_banner_ver ) {
	$contact_hero_banner_url = add_query_arg( 'v', $contact_hero_banner_ver, $contact_hero_banner_url );
}
$contact_hero_banner_mobile_theme_path = 'assets/images/contact-hero-banner-mobile.jpg';
$contact_hero_banner_mobile_url        = bdc_theme_asset_url( $contact_hero_banner_mobile_theme_path );
$contact_hero_banner_mobile_ver        = bdc_asset_version( $contact_hero_banner_mobile_theme_path );
if ( $contact_hero_banner_mobile_ver ) {
	$contact_hero_banner_mobile_url = add_query_arg( 'v', $contact_hero_banner_mobile_ver, $contact_hero_banner_mobile_url );
}
$contact_hero_banner_alt = bdc_get_acf_text(
	'contact_hero_banner_alt',
	'Two Bright Dreamers writing a colorful Thank You note with markers, books, and playful doodles',
	$contact_page_id
);

$contact_form_aria_label = bdc_get_acf_text(
	'contact_form_aria_label',
	'Send us a message',
	$contact_page_id
);
$contact_form_aside_aria_label = bdc_get_acf_text(
	'contact_form_aside_aria_label',
	'We\'re here to help',
	$contact_page_id
);
$contact_form_aside_plane_url = bdc_get_acf_image_url(
	'contact_form_aside_plane',
	bdc_theme_asset_url( 'assets/images/contact-form-envelope.png' ),
	$contact_page_id
);
$contact_form_aside_plane_ver = bdc_asset_version( 'assets/images/contact-form-envelope.png' );
if ( $contact_form_aside_plane_ver && false !== strpos( (string) $contact_form_aside_plane_url, 'contact-form-envelope' ) ) {
	$contact_form_aside_plane_url = add_query_arg( 'v', $contact_form_aside_plane_ver, $contact_form_aside_plane_url );
}
$contact_form_aside_title_underline_word = bdc_get_acf_text(
	'contact_form_aside_title_underline_word',
	'We\'re',
	$contact_page_id
);
$contact_form_aside_title_underline_url = bdc_get_acf_image_url(
	'contact_form_aside_title_underline',
	bdc_theme_asset_url( 'assets/images/heading-underline.jpeg' ),
	$contact_page_id
);
$contact_form_aside_title_underline_ver = bdc_asset_version( 'assets/images/heading-underline.jpeg' );
if ( $contact_form_aside_title_underline_ver && false !== strpos( $contact_form_aside_title_underline_url, 'heading-underline.jpeg' ) ) {
	$contact_form_aside_title_underline_url = add_query_arg( 'v', $contact_form_aside_title_underline_ver, $contact_form_aside_title_underline_url );
}
$contact_form_aside_title_suffix = bdc_get_acf_text(
	'contact_form_aside_title_suffix',
	'Here to Help',
	$contact_page_id
);
$contact_form_aside_text = bdc_get_acf_text(
	'contact_form_aside_text',
	'Use the form to send us a message. We read every message and will get back to you as soon as we can. Thank you for being part of the Bright Dreamers community.',
	$contact_page_id
);
$contact_form_aside_plant_url = bdc_get_acf_image_url(
	'contact_form_aside_plant',
	bdc_theme_asset_url( 'assets/images/contact/WhatsApp_Image_2026-08-10_at_1.24.08_PM-removebg-preview.png' ),
	$contact_page_id
);
$contact_form_title = bdc_get_acf_text(
	'contact_form_title',
	'Send Us a Message',
	$contact_page_id
);
$contact_form_privacy_lead = bdc_get_acf_text(
	'contact_form_privacy_lead',
	'Your privacy matters to us.',
	$contact_page_id
);
$contact_form_privacy_text = bdc_get_acf_text(
	'contact_form_privacy_text',
	'We will never share your information. Your message is safe with us.',
	$contact_page_id
);
$contact_form_submit_text = bdc_get_acf_text(
	'contact_form_submit_text',
	'Send Message',
	$contact_page_id
);

$contact_cta_aria_label = bdc_get_acf_text(
	'contact_cta_aria_label',
	'See our vision',
	$contact_page_id
);
$contact_cta_door_theme_path = 'assets/images/contact-cta-door.jpeg';
$contact_cta_door_url        = bdc_get_acf_image_url(
	'contact_cta_door',
	bdc_theme_asset_url( $contact_cta_door_theme_path ),
	$contact_page_id
);
$contact_cta_door_ver = bdc_asset_version( $contact_cta_door_theme_path );
if ( $contact_cta_door_ver && false !== strpos( (string) $contact_cta_door_url, 'contact-cta-door' ) ) {
	$contact_cta_door_url = add_query_arg( 'v', $contact_cta_door_ver, $contact_cta_door_url );
}
$contact_cta_bg_theme_path = 'assets/images/contact-cta-bg.jpg';
$contact_cta_bg_url        = bdc_theme_asset_url( $contact_cta_bg_theme_path );
$contact_cta_bg_ver        = bdc_asset_version( $contact_cta_bg_theme_path );
if ( $contact_cta_bg_ver ) {
	$contact_cta_bg_url = add_query_arg( 'v', $contact_cta_bg_ver, $contact_cta_bg_url );
}
$contact_cta_btn_text = bdc_get_acf_text(
	'contact_cta_btn_text',
	'See Our Vision',
	$contact_page_id
);
$contact_cta_btn_link = bdc_get_acf_link(
	'contact_cta_btn_link',
	array(
		'title'  => 'See Our Vision',
		'url'    => bdc_page_url( 'our-vision.html' ),
		'target' => '',
	),
	$contact_page_id
);
?>
    <main id="main-content">
      <?php
      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'            => 'contact-hero about-hero',
          'aria_label'               => $contact_hero_aria_label,
          'section_label'            => $contact_hero_eyebrow,
          'headline_html'            => bdc_hero_lines_html(
            array(
              array( 'text' => $contact_hero_title_line_1, 'class' => 'contact-hero__title-line contact-hero__title-line--navy' ),
              array( 'text' => $contact_hero_title_line_2, 'class' => 'contact-hero__title-line contact-hero__title-line--pink' ),
              array( 'text' => $contact_hero_title_line_3, 'class' => 'contact-hero__title-line contact-hero__title-line--pink' ),
            )
          ),
          'supporting_copy'          => $contact_hero_text,
          'primary_cta_text'         => $contact_hero_primary_btn_text,
          'primary_cta_link'         => $contact_hero_primary_btn_link,
          'secondary_cta_text'       => $contact_hero_secondary_btn_text,
          'secondary_cta_link'       => $contact_hero_secondary_btn_link,
          'hero_image'               => $contact_hero_banner_url,
          'hero_image_mobile'        => $contact_hero_banner_mobile_url,
          'hero_image_alt'           => $contact_hero_banner_alt,
          'media_class'              => 'about-hero__media',
          'image_class'              => 'about-hero__banner',
          'primary_cta_show_icon'    => true,
          'secondary_cta_show_heart' => true,
        )
      );
      ?>

      <section class="contact-form" aria-label="<?php echo esc_attr( $contact_form_aria_label ); ?>">
        <div class="site-container contact-form__inner">
          <div class="contact-form__wrap">
            <aside class="contact-form__aside" aria-label="<?php echo esc_attr( $contact_form_aside_aria_label ); ?>">
              <?php if ( '' !== trim( $contact_form_aside_plane_url ) ) : ?>
              <img
                class="contact-form__aside-plane"
                src="<?php echo esc_url( $contact_form_aside_plane_url ); ?>"
                alt=""
                width="240"
                height="201"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <?php endif; ?>

              <div class="contact-form__aside-copy">
                <h2 class="contact-form__aside-title">
                  <?php if ( '' !== trim( $contact_form_aside_title_underline_word ) ) : ?>
                  <span class="heading-underline">
                    <?php echo esc_html( $contact_form_aside_title_underline_word ); ?>
                    <img
                      class="heading-underline__img"
                      src="<?php echo esc_url( $contact_form_aside_title_underline_url ); ?>"
                      alt=""
                      width="120"
                      height="12"
                    />
                  </span>
                  <?php endif; ?>
                  <?php if ( '' !== trim( $contact_form_aside_title_suffix ) ) : ?>
                  <?php echo esc_html( $contact_form_aside_title_suffix ); ?>
                  <?php endif; ?>
                </h2>

                <?php if ( '' !== trim( $contact_form_aside_text ) ) : ?>
                <p class="contact-form__aside-text">
                  <?php echo esc_html( $contact_form_aside_text ); ?>
                </p>
                <?php endif; ?>
              </div>

              <?php if ( '' !== trim( $contact_form_aside_plant_url ) ) : ?>
              <img
                class="contact-form__aside-plant"
                src="<?php echo esc_url( $contact_form_aside_plant_url ); ?>"
                alt=""
                width="200"
                height="180"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <?php endif; ?>
            </aside>

            <div class="contact-form__main">
              <?php if ( '' !== trim( $contact_form_title ) ) : ?>
              <h2 class="contact-form__title">
                <?php echo esc_html( $contact_form_title ); ?>
                <svg
                  class="contact-form__title-heart"
                  viewBox="0 0 24 24"
                  width="22"
                  height="22"
                  fill="none"
                  stroke="var(--color-pink)"
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
              <?php endif; ?>

              <form class="contact-form__form" id="contact-form" action="#" method="post" data-form-id="contact">
                <?php bdc_render_form_security_fields( 'contact' ); ?>
                <div class="contact-form__row">
                  <label class="contact-field">
                    <span class="contact-field__box">
                      <svg
                        class="contact-field__icon"
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
                        <circle cx="12" cy="8" r="3.5" />
                        <path d="M5.5 20c.8-3.2 3-5 6.5-5s5.7 1.8 6.5 5" />
                      </svg>
                      <input
                        class="contact-field__input"
                        type="text"
                        name="name"
                        placeholder="Your Name *"
                        autocomplete="name"
                        required
                      />
                    </span>
                  </label>

                  <label class="contact-field">
                    <span class="contact-field__box">
                      <svg
                        class="contact-field__icon"
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
                        <rect x="3" y="5.5" width="18" height="13" rx="2" />
                        <path d="M3 7.5l9 6.5 9-6.5" />
                      </svg>
                      <input
                        class="contact-field__input"
                        type="email"
                        name="email"
                        placeholder="Email Address *"
                        autocomplete="email"
                        required
                      />
                    </span>
                  </label>
                </div>

                <label class="contact-field">
                  <span class="contact-field__box">
                    <svg
                      class="contact-field__icon"
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
                      <path d="M4 7h16v10H4z" />
                      <path d="M8 7V5.5h8V7" />
                      <circle cx="12" cy="12" r="1.2" fill="currentColor" stroke="none" />
                    </svg>
                    <input
                      class="contact-field__input"
                      type="text"
                      name="subject"
                      placeholder="Subject *"
                      required
                    />
                  </span>
                </label>

                <label class="contact-field contact-field--message">
                  <span class="contact-field__box contact-field__box--area">
                    <svg
                      class="contact-field__icon contact-field__icon--top"
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
                      <path d="M4 18l2-2h12l2 2V6H4v12z" />
                      <path d="M8 10h8M8 13.5h5.5" />
                    </svg>
                    <textarea
                      class="contact-field__input contact-field__textarea"
                      name="message"
                      placeholder="Your Message *"
                      rows="5"
                      required
                    ></textarea>
                  </span>
                </label>

                <div class="contact-form__privacy">
                  <svg
                    class="contact-form__privacy-icon"
                    viewBox="0 0 24 24"
                    width="28"
                    height="28"
                    aria-hidden="true"
                  >
                    <path
                      d="M12 2.8l7 3.2v5.8c0 4.6-3 8.8-7 10.2-4-1.4-7-5.6-7-10.2V6l7-3.2z"
                      fill="var(--color-pink-soft)"
                      stroke="var(--color-pink)"
                      stroke-width="1.5"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                      transform="translate(0 -1.5) scale(0.42) translate(14 14)"
                      fill="var(--color-pink)"
                      stroke="none"
                    />
                  </svg>
                  <p class="contact-form__privacy-text">
                    <?php if ( '' !== trim( $contact_form_privacy_lead ) ) : ?>
                    <strong><?php echo esc_html( $contact_form_privacy_lead ); ?></strong>
                    <?php endif; ?>
                    <?php if ( '' !== trim( $contact_form_privacy_text ) ) : ?>
                    <?php echo ' ' . esc_html( $contact_form_privacy_text ); ?>
                    <?php endif; ?>
                  </p>
                </div>

                <button class="btn btn--solid btn--lg btn-hover contact-form__submit" type="submit">
                  <?php echo esc_html( $contact_form_submit_text ); ?>
                  <svg
                    class="btn__icon contact-form__submit-plane"
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
                    <path d="M3 12l18-7-7 18-2.5-7.5L3 12z" />
                    <path d="M14 5l4 4" />
                  </svg>
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <section class="contact-cta" aria-label="<?php echo esc_attr( $contact_cta_aria_label ); ?>">
        <div class="site-container contact-cta__inner">
          <div
            class="contact-cta__card"
            style="background-image: url('<?php echo esc_url( $contact_cta_bg_url ); ?>');"
          >
            <?php if ( '' !== trim( (string) $contact_cta_door_url ) ) : ?>
            <img
              class="contact-cta__door"
              src="<?php echo esc_url( $contact_cta_door_url ); ?>"
              alt=""
              width="220"
              height="184"
              loading="lazy"
              decoding="async"
            />
            <?php endif; ?>

            <div class="contact-cta__content">
              <h2 class="contact-cta__text">
                <span class="contact-cta__text-pink">Together,</span>
                <span class="contact-cta__text-navy"> we can open doors for young ideas and create </span>
                <span class="contact-cta__text-orange">lasting change.</span>
              </h2>

              <div class="contact-cta__deco" aria-hidden="true">
                <svg
                  class="contact-cta__heart"
                  viewBox="0 0 24 24"
                  width="22"
                  height="22"
                  fill="none"
                  stroke="var(--color-pink)"
                  stroke-width="1.8"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                  />
                </svg>
                <svg
                  class="contact-cta__star"
                  viewBox="0 0 24 24"
                  width="22"
                  height="22"
                  fill="none"
                  stroke="var(--color-yellow)"
                  stroke-width="1.8"
                  stroke-linejoin="round"
                >
                  <path
                    d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                  />
                </svg>
              </div>
            </div>

            <?php if ( ! empty( $contact_cta_btn_link['url'] ) && '' !== trim( $contact_cta_btn_text ) ) : ?>
            <a
              class="btn btn--lg btn-hover contact-cta__btn"
              href="<?php echo esc_url( $contact_cta_btn_link['url'] ); ?>"
              <?php echo bdc_acf_link_target_attr( $contact_cta_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            >
              <?php echo esc_html( $contact_cta_btn_text ); ?>
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
                <path
                  d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                />
              </svg>
            </a>
            <?php endif; ?>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
