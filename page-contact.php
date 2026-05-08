<?php
/**
 * Template Name: お問い合わせ (Contact)
 * Template for Contact page (from pension contact.html)
 *
 * @package morioka-wp
 */
$theme_uri = get_template_directory_uri();
get_header();
$contact_bg_url = esc_url( $theme_uri . '/assets/img/contact-bg.webp' );
?>
<style>.contact__page { background-image: url("<?php echo $contact_bg_url; ?>"); }</style>
	<main id="main" class="main">
		<div class="contact contact__page">
			<section class="contact contact__title-section wow fadeInUp" data-wow-duration="0.8s">
				<h2 class="contact__heading contact__heading--deco">障害年金のご相談はこちら</h2>
				<div class="contact__heading-underline" aria-hidden="true">
					<svg class="contact__heading-underline-svg" viewBox="0 0 100 14" xmlns="http://www.w3.org/2000/svg">
						<path class="support__heading-underline-path" d="M 0 3 H 70 L 70 10 L 80 3 H 100" fill="none"/>
					</svg>
				</div>
			</section>

			<section class="contact contact__content-section">
				<div class="contact__content wow fadeIn" data-wow-duration="0.5s">
					<div class="contact__intro">
						<h3 class="contact__subheading">【お問い合わせいただく皆さまへ】</h3>
						<p class="contact__text">
							障害年金のことで、お一人で悩んでいませんか? <br />
							「何から話せばいいかわからない」という場合でも、まずは今の状況をそのままお聞かせください。私(川村)が責任を持って拝見し、丁寧にお返事させていただきます。<br /><br />
							※フォームが正常に動作しない場合や、直接メールでのお問い合わせを希望される方は、お手数ですが下記のアドレスまでご連絡ください。<br />
							info@morioka-shougai.jp
						</p>
					</div>

					<?php echo do_shortcode('[contact-form-7 id="b47cc36" title="お問い合わせフォーム"]'); ?>
				</div>
			</section>
		</div>
	</main>
<?php
get_footer();
