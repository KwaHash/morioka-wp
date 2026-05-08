<?php
/**
 * Single template for Column posts.
 *
 * @package morioka-wp
 */
get_header();
?>

<main id="main" class="main column-single">
	<div class="column column__page">
		<section class="column column__title-section wow fadeInUp" data-wow-duration="0.8s">
			<h2 class="about__heading about__heading--deco">コラム</h2>
			<div class="about__heading-underline" aria-hidden="true">
				<svg class="about__heading-underline-svg" viewBox="0 0 100 14" xmlns="http://www.w3.org/2000/svg">
					<path class="about__heading-underline-path" d="M 20 4 H 50 L 50 13 L 60 4 H 80" fill="none"/>
				</svg>
			</div>
		</section>

		<section class="column column__content-section">
			<?php while ( have_posts() ) : ?>
				<?php
				the_post();
				$terms = get_the_terms( get_the_ID(), 'column_category' );
				?>
				<article <?php post_class( 'column-entry' ); ?> id="post-<?php the_ID(); ?>">
					<div class="column column__content column-entry__content">
						<div class="column-entry__header">
							<h1 class="column-entry__title"><?php the_title(); ?></h1>

							<div class="column-entry__meta">
								<time class="column-entry__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
									<?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?>
								</time>

								<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
									<span class="column-entry__cats">
										<?php foreach ( $terms as $term ) : ?>
											<a class="column-entry__cat" href="<?php echo esc_url( get_term_link( $term ) ); ?>">
												<?php echo esc_html( $term->name ); ?>
											</a>
										<?php endforeach; ?>
									</span>
								<?php endif; ?>
							</div>
						</div>
						<?php the_content(); ?>
					</div>

					<footer class="column-entry__footer">
						<a class="column-entry__back" href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>">← コラム一覧へ戻る</a>
					</footer>
				</article>
			<?php endwhile; ?>
		</section>
	</div>
</main>

<?php
get_footer();

