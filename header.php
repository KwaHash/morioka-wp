<?php
/**
 * Header template (based on pension site)
 *
 * @package morioka-wp
 */
$theme_uri = get_template_directory_uri();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="keywords" content="障害年金,盛岡,岩手県,社会保険労務士,川村事務所,障害年金相談,申請サポート, Morioka, disability pension" />
	<meta name="description" content="岩手県盛岡市の障害年金相談は社会保険労務士川村事務所へ。申請から受給まで、ずっとそばに。安心して頼れる障害年金サポートで、お一人おひとりの状況に合わせてサポートします。" />
	<link rel="icon" href="<?php echo esc_url( $theme_uri ); ?>/assets/img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo esc_url( $theme_uri ); ?>/assets/img/favicon.ico" type="image/x-icon" />
	<meta property="og:title" content="社会保険労務士川村事務所｜岩手県盛岡市の障害年金相談" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
	<meta property="og:site_name" content="社会保険労務士川村事務所" />
	<meta property="og:description" content="岩手県盛岡市の障害年金相談。申請から受給まで、ずっとそばに。安心して頼れる障害年金サポート。" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Yantramanav:wght@100;300;400;500;700;900&family=Zen+Old+Mincho&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header id="header" class="header">
		<div class="header__top-strip"></div>
		<div class="header__main">
			<div class="header__brand">
				<h1 class="header__brand-title">障害年金専門</h1>
				<p class="header__brand-subtitle">社会保険労務士川村事務所</p>
				<div class="header__phone">
					<a href="tel:090-4739-1620" class="header__phone-link">TEL: 090-4739-1620</a>
					<p class="header__phone-note">※不在時は留守電にお名前をお願いいたします。折り返しお電話差し上げます。</p>
				</div>
			</div>
			<div class="header__cta-group">
				<a href="https://lin.ee/TcA8TXs" class="header__cta-button header__cta-button--line">LINEで無料相談</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="header__cta-button header__cta-button--form">メールで相談</a>
			</div>
		</div>
		<nav class="header__navigation">
			<ul class="header__nav-list">
				<li class="header__nav-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__nav-link">ホーム</a></li>
				<li class="header__nav-item"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="header__nav-link">障害年金について</a></li>
				<li class="header__nav-item"><a href="<?php echo esc_url( home_url( '/support/' ) ); ?>" class="header__nav-link">サポート内容</a></li>
				<li class="header__nav-item"><a href="<?php echo esc_url( home_url( '/charge/' ) ); ?>" class="header__nav-link">料金・費用</a></li>
				<li class="header__nav-item"><a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>" class="header__nav-link">コラム</a></li>
				<li class="header__nav-item"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="header__nav-link">お問い合わせ</a></li>
			</ul>
		</nav>
		<button type="button" class="gnav__btn" aria-label="メニューを開く">
			<div class="gnav__lines">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</button>
	</header>

	<div class="mnav" id="mnav">
		<button type="button" class="mnav__close" aria-label="メニューを閉じる"></button>
		<ul class="mnav__list">
			<li class="mnav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mnav__link">ホーム</a></li>
			<li class="mnav__item"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="mnav__link">障害年金について</a></li>
			<li class="mnav__item"><a href="<?php echo esc_url( home_url( '/support/' ) ); ?>" class="mnav__link">サポート内容</a></li>
			<li class="mnav__item"><a href="<?php echo esc_url( home_url( '/charge/' ) ); ?>" class="mnav__link">料金・費用</a></li>
			<li class="mnav__item"><a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>" class="mnav__link">コラム</a></li>
			<li class="mnav__item"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="mnav__link">お問い合わせ</a></li>
		</ul>
	</div>
