<?php
/**
 * Footer template (based on pension site)
 *
 * @package morioka-wp
 */
$theme_uri = get_template_directory_uri();
?>
	<footer id="footer" class="footer">
		<nav class="footer__nav wow fadeIn" data-wow-duration="0.5s">
			<ul class="footer__nav-list">
				<li class="footer__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__nav-link">ホーム</a></li>
				<li class="footer__nav-item"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="footer__nav-link">障害年金について</a></li>
				<li class="footer__nav-item"><a href="<?php echo esc_url( home_url( '/support/' ) ); ?>" class="footer__nav-link">サポート内容</a></li>
				<li class="footer__nav-item"><a href="<?php echo esc_url( home_url( '/charge/' ) ); ?>" class="footer__nav-link">料金・費用</a></li>
				<li class="footer__nav-item"><a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>" class="footer__nav-link">コラム</a></li>
				<li class="footer__nav-item"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="footer__nav-link">お問い合わせ</a></li>
			</ul>
		</nav>
		<div class="footer__main wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.1s">
			<div class="footer__content">
				<div class="footer__contact">
					<p class="footer__office-name">社会保険労務士川村事務所</p>
					<p class="footer__contact-line">代表者名 : 川村 美礼</p>
					<p class="footer__contact-line">所在地 : 岩手県盛岡市津志田14地割207-3</p>
					<p class="footer__contact-line">TEL : <a href="tel:090-4739-1620" class="footer__contact-link">090-4739-1620</a></p>
					<p class="footer__contact-line">FAX : 019-903-0322</p>
					<p class="footer__contact-line">メール : <a href="mailto:info@morioka-shougai.jp" class="footer__contact-link">info@morioka-shougai.jp</a></p>
					<p class="footer__contact-line">受付時間 : 9:30 ~ 18:00</p>
				</div>
				<div class="footer__parking">
					<div class="footer__parking-inner">
						<div class="footer__parking-wrap">
							<img src="<?php echo esc_url( $theme_uri ); ?>/assets/img/parking.png" alt="駐車場・送迎" loading="lazy" class="footer__parking-icon">
							<p class="footer__parking-title">駐車場・送迎</p>
						</div>
						<p class="footer__parking-text">お体への負担を減らすため、岩手飯岡駅からの無料送迎と専用駐車場をご用意しております。安心してお越しください。</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__bottom">
			<p class="footer__breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__breadcrumb-link">ホーム</a><span class="footer__breadcrumb-sep">|</span>
				<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="footer__breadcrumb-link">障害年金について</a><span class="footer__breadcrumb-sep">|</span>
				<a href="<?php echo esc_url( home_url( '/support/' ) ); ?>" class="footer__breadcrumb-link">サポート内容</a><span class="footer__breadcrumb-sep">|</span>
				<a href="<?php echo esc_url( home_url( '/charge/' ) ); ?>" class="footer__breadcrumb-link">料金・費用</a><span class="footer__breadcrumb-sep">|</span>
				<a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>" class="footer__breadcrumb-link">コラム</a><span class="footer__breadcrumb-sep">|</span>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="footer__breadcrumb-link">お問い合わせ</a>
			</p>
			<p class="footer__copyright">Copyright(C)<?php echo esc_html( date( 'Y' ) ); ?> 社会保険労務士川村事務所 All Rights Reserved.</p>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
