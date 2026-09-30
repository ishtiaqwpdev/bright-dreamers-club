<?php
/**
 * About page — four panel cards (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$about_approach_step_keys = array_keys( $about_panel_approach_steps );
$about_approach_last_key  = end( $about_approach_step_keys );
?>
            <article
              class="panel-card panel-card--journey"
              aria-label="<?php echo esc_attr( (string) $about_panel_journey['aria_label'] ); ?>"
            >
              <div class="panel-card__content">
                <h3 class="panel-card__title">
                  <?php echo esc_html( (string) $about_panel_journey['title'] ); ?>
                  <svg
                    class="panel-card__title-icon panel-card__title-icon--crown"
                    viewBox="0 0 24 24"
                    width="22"
                    height="22"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.7"
                    aria-hidden="true"
                  >
                    <path
                      d="M4 18h16M6 18l1.2-7.2 2.8 3.6 3-5.8 3 5.8 2.8-3.6L18 18M6 10l2-4 4 2 4-2 2 4"
                    />
                  </svg>
                </h3>

                <div class="panel-card__copy">
                  <?php if ( '' !== trim( (string) $about_panel_journey['paragraph_1'] ) ) : ?>
                  <p><?php echo esc_html( (string) $about_panel_journey['paragraph_1'] ); ?></p>
                  <?php endif; ?>
                  <?php if ( '' !== trim( (string) $about_panel_journey['paragraph_2'] ) ) : ?>
                  <p><?php echo esc_html( (string) $about_panel_journey['paragraph_2'] ); ?></p>
                  <?php endif; ?>
                  <?php if ( '' !== trim( (string) $about_panel_journey['paragraph_3'] ) ) : ?>
                  <p><?php echo esc_html( (string) $about_panel_journey['paragraph_3'] ); ?></p>
                  <?php endif; ?>
                </div>

                <svg
                  class="panel-card__deco-heart"
                  viewBox="0 0 24 24"
                  width="20"
                  height="20"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.8"
                  aria-hidden="true"
                >
                  <path
                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                  />
                </svg>
              </div>

              <div class="panel-card__figure">
                <img
                  class="panel-card__figure-img"
                  src="<?php echo esc_url( $about_panel_journey_figure ); ?>"
                  alt="<?php echo esc_attr( (string) $about_panel_journey['figure_alt'] ); ?>"
                  width="400"
                  height="400"
                  loading="lazy"
                  decoding="async"
                />
              </div>
            </article>

            <article class="panel-card panel-card--council">
              <div class="panel-card__content">
                <h3 class="panel-card__title">
                  <?php echo esc_html( (string) $about_panel_council['title'] ); ?>
                  <svg
                    class="panel-card__title-icon panel-card__title-icon--star"
                    viewBox="0 0 24 24"
                    width="22"
                    height="22"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    aria-hidden="true"
                  >
                    <path
                      d="M12 2l2.4 4.9 5.4.8-3.9 3.8.9 5.4L12 14.8 7.2 17l.9-5.4L4.2 7.7l5.4-.8L12 2z"
                    />
                  </svg>
                </h3>

                <?php if ( '' !== trim( (string) $about_panel_council['lead'] ) ) : ?>
                <p class="panel-card__lead">
                  <?php echo esc_html( (string) $about_panel_council['lead'] ); ?>
                </p>
                <?php endif; ?>

                <?php if ( ! empty( $about_panel_council_items ) ) : ?>
                <ul class="panel-card__list">
                  <?php foreach ( $about_panel_council_items as $council_item ) : ?>
                  <li><?php echo esc_html( $council_item ); ?></li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; ?>

                <?php if ( '' !== trim( (string) $about_panel_council['note'] ) ) : ?>
                <p class="panel-card__note">
                  <?php echo esc_html( (string) $about_panel_council['note'] ); ?>
                </p>
                <?php endif; ?>
              </div>

              <div class="panel-card__figure">
                <div class="lazy-img-wrap">
                  <img
                    class="panel-card__figure-img lazy-img"
                    src="<?php echo esc_attr( $about_hero_lazy_placeholder ); ?>"
                    data-src="<?php echo esc_url( $about_panel_council_figure ); ?>"
                    alt="<?php echo esc_attr( (string) $about_panel_council['figure_alt'] ); ?>"
                    width="400"
                    height="400"
                    decoding="async"
                  />
                </div>
              </div>
            </article>

            <article class="panel-card panel-card--role">
              <div class="panel-card__content panel-card__content--full">
                <h3 class="panel-card__title">
                  <?php echo esc_html( (string) $about_panel_role['title'] ); ?>
                  <img
                    class="panel-card__title-icon panel-card__title-icon--img"
                    src="<?php echo esc_url( $about_panel_role_title_icon ); ?>"
                    alt=""
                    width="24"
                    height="24"
                    loading="lazy"
                  />
                </h3>

                <?php if ( '' !== trim( (string) $about_panel_role['lead'] ) ) : ?>
                <p class="panel-card__lead panel-card__lead--tight"><?php echo esc_html( (string) $about_panel_role['lead'] ); ?></p>
                <?php endif; ?>

                <div class="role-icons" role="list">
                  <?php foreach ( $about_panel_role_items as $role_item ) : ?>
                  <?php if ( '' === trim( $role_item['label'] ) ) : ?>
                    <?php continue; ?>
                  <?php endif; ?>
                  <div class="role-icons__item" role="listitem">
                    <img
                      class="role-icons__img"
                      src="<?php echo esc_url( $role_item['icon'] ); ?>"
                      alt=""
                      width="64"
                      height="64"
                      loading="lazy"
                    />
                    <span class="role-icons__label"><?php echo esc_html( $role_item['label'] ); ?></span>
                  </div>
                  <?php endforeach; ?>
                </div>

                <div class="role-callout">
                  <img
                    class="role-callout__icon"
                    src="<?php echo esc_url( $about_panel_role_callout_icon ); ?>"
                    alt=""
                    width="48"
                    height="48"
                    loading="lazy"
                  />
                  <p class="role-callout__text">
                    <?php if ( '' !== trim( (string) $about_panel_role['callout_strong'] ) ) : ?>
                    <strong><?php echo esc_html( (string) $about_panel_role['callout_strong'] ); ?></strong>
                    <?php endif; ?>
                    <?php if ( '' !== trim( (string) $about_panel_role['callout_text'] ) ) : ?>
                    <?php echo ( '' !== trim( (string) $about_panel_role['callout_strong'] ) ) ? ' ' : ''; ?><?php echo esc_html( (string) $about_panel_role['callout_text'] ); ?>
                    <?php endif; ?>
                  </p>
                  <img
                    class="role-callout__heart"
                    src="<?php echo esc_url( $about_panel_role_callout_heart ); ?>"
                    alt=""
                    width="36"
                    height="36"
                    loading="lazy"
                  />
                </div>
              </div>
            </article>

            <article class="panel-card panel-card--approach">
              <div class="panel-card__content panel-card__content--full">
                <h3 class="panel-card__title">
                  <?php echo esc_html( (string) $about_panel_approach['title'] ); ?>
                  <svg
                    class="panel-card__title-icon panel-card__title-icon--star"
                    viewBox="0 0 24 24"
                    width="22"
                    height="22"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    aria-hidden="true"
                  >
                    <path
                      d="M12 2l2.4 4.9 5.4.8-3.9 3.8.9 5.4L12 14.8 7.2 17l.9-5.4L4.2 7.7l5.4-.8L12 2z"
                    />
                  </svg>
                </h3>

                <div class="approach-steps" role="list">
                  <?php foreach ( $about_panel_approach_steps as $step_key => $step ) : ?>
                  <div class="approach-step" role="listitem">
                    <img
                      class="approach-step__icon"
                      src="<?php echo esc_url( $step['icon'] ); ?>"
                      alt=""
                      width="72"
                      height="72"
                      loading="lazy"
                    />
                    <?php if ( '' !== trim( $step['title'] ) ) : ?>
                    <p class="approach-step__title"><?php echo esc_html( $step['title'] ); ?></p>
                    <?php endif; ?>
                    <?php if ( '' !== trim( $step['description'] ) ) : ?>
                    <p class="approach-step__text"><?php echo esc_html( $step['description'] ); ?></p>
                    <?php endif; ?>
                  </div>
                  <?php if ( $step_key !== $about_approach_last_key ) : ?>
                  <img
                    class="approach-step__arrow"
                    src="<?php echo esc_url( $about_panel_approach_arrow ); ?>"
                    alt=""
                    width="32"
                    height="16"
                    loading="lazy"
                  />
                  <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              </div>
            </article>
