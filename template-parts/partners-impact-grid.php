<?php
/**
 * Partners page — impact cards grid (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
            <div class="partners-impact__grid">
              <?php foreach ( $partners_impact_cards as $impact_card ) : ?>
                <?php if ( '' === trim( $impact_card['title'] ) && '' === trim( $impact_card['text'] ) ) : ?>
                  <?php continue; ?>
                <?php endif; ?>
              <article class="partners-impact-card">
                <div class="lazy-img-wrap">
                  <img
                    class="partners-impact-card__photo lazy-img"
                    src="<?php echo esc_attr( $partners_hero_lazy_placeholder ); ?>"
                    data-src="<?php echo esc_url( $impact_card['photo'] ); ?>"
                    alt="<?php echo esc_attr( $impact_card['photo_alt'] ); ?>"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <?php if ( '' !== trim( $impact_card['title'] ) ) : ?>
                <h3 class="partners-impact-card__title"><?php echo esc_html( $impact_card['title'] ); ?></h3>
                <?php endif; ?>
                <?php if ( '' !== trim( $impact_card['text'] ) ) : ?>
                <p class="partners-impact-card__text">
                  <?php echo esc_html( $impact_card['text'] ); ?>
                </p>
                <?php endif; ?>
                <?php if ( '' !== trim( $impact_card['deco'] ) ) : ?>
                <img
                  class="partners-impact-card__deco"
                  src="<?php echo esc_url( $impact_card['deco'] ); ?>"
                  alt=""
                  width="26"
                  height="26"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
                <?php endif; ?>
              </article>
              <?php endforeach; ?>
            </div>
