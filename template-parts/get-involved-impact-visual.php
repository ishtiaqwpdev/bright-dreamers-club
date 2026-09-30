<?php
/**
 * Get Involved page — impact timeline + illustration (ACF-driven).
 *
 * Renders as two siblings of `.get-involved-impact__inner` so the banner
 * can lay out as three balanced columns: copy | timeline | illustration.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$get_involved_impact_color_slugs_allowed = array( 'pink', 'green', 'blue' );
?>
              <div class="get-involved-timeline bdc-balance-banner__mid" role="list">
                <?php foreach ( $get_involved_impact_timeline as $timeline_step ) : ?>
                  <?php if ( '' === trim( $timeline_step['title'] ) && '' === trim( $timeline_step['text'] ) ) : ?>
                    <?php continue; ?>
                  <?php endif; ?>
                <article class="get-involved-timeline__step bdc-balance-banner__step" role="listitem">
                  <?php if ( 'heart' === $timeline_step['icon_mode'] ) : ?>
                  <div
                    class="get-involved-timeline__icon-wrap get-involved-timeline__icon-wrap--<?php echo esc_attr( $timeline_step['color_slug'] ); ?>"
                    aria-hidden="true"
                  >
                    <svg
                      class="get-involved-timeline__icon-svg"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.8"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path
                        d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                      />
                    </svg>
                  </div>
                  <?php elseif ( '' !== trim( $timeline_step['icon'] ) ) : ?>
                  <img
                    class="get-involved-timeline__icon"
                    src="<?php echo esc_url( $timeline_step['icon'] ); ?>"
                    alt=""
                    width="48"
                    height="48"
                    loading="lazy"
                    decoding="async"
                  />
                  <?php endif; ?>
                  <div class="get-involved-timeline__rail" aria-hidden="true">
                    <span class="get-involved-timeline__dot get-involved-timeline__dot--<?php echo esc_attr( $timeline_step['color_slug'] ); ?>"></span>
                  </div>
                  <div class="get-involved-timeline__content">
                    <?php if ( '' !== trim( $timeline_step['title'] ) ) : ?>
                    <h3 class="get-involved-timeline__title get-involved-timeline__title--<?php echo esc_attr( $timeline_step['color_slug'] ); ?>">
                      <?php echo esc_html( $timeline_step['title'] ); ?>
                    </h3>
                    <?php endif; ?>
                    <?php if ( '' !== trim( $timeline_step['text'] ) ) : ?>
                    <p class="get-involved-timeline__text">
                      <?php echo esc_html( $timeline_step['text'] ); ?>
                    </p>
                    <?php endif; ?>
                  </div>
                </article>
                <?php endforeach; ?>
              </div>

              <div class="lazy-img-wrap bdc-balance-banner__media">
                <img
                  class="get-involved-impact__illustration lazy-img"
                  src="<?php echo esc_attr( $get_involved_hero_lazy_placeholder ); ?>"
                  data-src="<?php echo esc_url( $get_involved_impact_illustration_url ); ?>"
                  alt="<?php echo esc_attr( $get_involved_impact_illustration_alt ); ?>"
                  width="560"
                  height="520"
                  decoding="async"
                />
              </div>
