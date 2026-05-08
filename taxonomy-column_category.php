<?php
/**
 * Taxonomy archive template for Column Category.
 *
 * @package morioka-wp
 */
get_header();

$term = get_queried_object();
?>

<main id="main" class="main">
	<div class="column column__page">
		<section class="column column__title-section wow fadeInUp" data-wow-duration="0.8s">
			<h2 class="about__heading about__heading--deco">
				<?php echo esc_html( isset( $term->name ) ? $term->name : 'コラム' ); ?>
			</h2>
			<div class="about__heading-underline" aria-hidden="true">
				<svg class="about__heading-underline-svg" viewBox="0 0 100 14" xmlns="http://www.w3.org/2000/svg">
					<path class="about__heading-underline-path" d="M 0 4 H 50 L 50 13 L 60 4 H 100" fill="none"/>
				</svg>
			</div>
			<p class="column-archive__lead">
				<a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>">← コラム一覧へ戻る</a>
			</p>
		</section>

		<section class="column column__content-section">
			<?php if ( have_posts() ) : ?>
				<div class="column-archive__list">
					<?php
					while ( have_posts() ) :
						the_post();
						$terms = get_the_terms( get_the_ID(), 'column_category' );
						?>
						<article <?php post_class( 'column-card' ); ?> id="post-<?php the_ID(); ?>">
							<h2 class="column-card__title">
								<a class="column-card__title-link" href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h2>

							<div class="column-card__meta">
								<time class="column-card__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
									<?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?>
								</time>

								<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
									<span class="column-card__cats">
										<?php foreach ( $terms as $t ) : ?>
											<a class="column-card__cat" href="<?php echo esc_url( get_term_link( $t ) ); ?>">
												<?php echo esc_html( $t->name ); ?>
											</a>
										<?php endforeach; ?>
									</span>
								<?php endif; ?>
							</div>

							<div class="column-card__excerpt">
								<?php
								$excerpt = get_the_excerpt();
								if ( '' === trim( $excerpt ) ) {
									$excerpt = wp_strip_all_tags( get_the_content( '' ) );
								}
								echo esc_html( wp_trim_words( $excerpt, 70, '…' ) );
								?>
							</div>

							<a class="column-card__more" href="<?php the_permalink(); ?>">
								続きを読む &gt;&gt;
							</a>
						</article>
					<?php endwhile; ?>
				</div>

				<nav class="column-archive__pagination" aria-label="<?php esc_attr_e( 'Posts navigation', 'morioka-wp' ); ?>">
					<?php
					echo wp_kses_post(
						paginate_links(
							array(
								'type'      => 'list',
								'prev_text' => '前へ',
								'next_text' => '次へ',
							)
						)
					);
					?>
				</nav>
			<?php else : ?>
				<p class="column-archive__empty">このカテゴリのコラムは準備中です。</p>
			<?php endif; ?>
		</section>
	</div>
</main>

<?php
get_footer();

