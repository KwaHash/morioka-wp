<?php
/**
 * Front Page template
 *
 * @package morioka-wp
 */
$theme_uri = get_template_directory_uri();
get_header();
$home_fv_url = esc_url( $theme_uri . '/assets/img/home-fv.webp' );
$home_bg_url = esc_url( $theme_uri . '/assets/img/home-bg.webp' );
?>
<style>
.home__hero-bg { background-image: url("<?php echo $home_fv_url; ?>"); }
.home__page { background-image: url("<?php echo $home_bg_url; ?>"); }
</style>
	<main id="main" class="main">
		<div class="home">
			<section class="home__hero wow fadeIn" data-wow-duration="0.8s">
				<div class="home__hero-bg">
					<div class="home__hero-emp">
						盛岡で<br>障害年金に詳しい<br>社労士事務所に<br>お任せください
					</div>
					<figure class="home__hero-figure">
						<img src="<?php echo esc_url( $theme_uri ); ?>/assets/img/home-consultant.webp" alt="" width="240" height="240" loading="lazy">
					</figure>
				</div>
				<div class="home__hero-content">
					<div class="home__hero-subtitle">
						岩手県盛岡市の障害年金相談なら<br>
						社会保険労務士川村事務所
					</div>
					<p class="hero__hero-slogan">申請から受給まで、ずっとそばに。</p>
					<h1 class="hero__hero-title">安心して頼れる、<br class="home__hero-title-br">障害年金サポート</h1>
				</div>
			</section>

			<div class="home__page">
				<h2 class="home__attention wow fadeInUp" data-wow-duration="0.5s">複雑な手続き、一人で抱え込んでいませんか？</h2>

				<section class="home home__content-section">
					<div class="home__content">
						<div class="home__block home__block--worry wow fadeIn" data-wow-duration="0.5s">
							<h2 class="home__heading home__heading--deco">障害年金について、こんなお悩みはありませんか？</h2>
							<div class="home__heading-underline01" aria-hidden="true">
								<svg class="home__heading-underline-svg" viewBox="0 0 100 9" xmlns="http://www.w3.org/2000/svg">
									<path class="home__heading-underline-path" d="M 0 3 H 75 L 75 7 L 80 3 H 100" fill="none"/>
								</svg>
							</div>
							<div class="home__block-box-figure">
								<ul class="home__list home__list--worry">
									<li class="home__list-item">自分の病気や障害が対象になるのかわからない</li>
									<li class="home__list-item">手続きが難しそうで、何から始めればいいかわからない</li>
									<li class="home__list-item">病院にどう説明すればいいのか不安</li>
									<li class="home__list-item">一度不支給になってしまった</li>
									<li class="home__list-item">家族に負担をかけずに進めたい</li>
								</ul>
								<figure class="home__figure">
									<img class="home__img" src="<?php echo esc_url( $theme_uri ); ?>/assets/img/home-worry.webp" alt="" width="240" height="240" loading="lazy" />
								</figure>
							</div>
						</div>

						<div class="home__block wow fadeIn" data-wow-duration="0.5s">
							<h2 class="home__heading home__heading--deco">一人で悩まず、ご相談ください</h2>
							<div class="home__heading-underline02" aria-hidden="true">
								<svg class="home__heading-underline-svg" viewBox="0 0 100 14" xmlns="http://www.w3.org/2000/svg">
									<path class="home__heading-underline-path" d="M 0 3 H 75 L 75 9 L 83 3 H 100" fill="none"/>
								</svg>
							</div>
							<div class="home__block-box">
								<p class="home__text">
									障害年金の申請は、制度が複雑で分かりにくく、体調がつらい中で進めるには大きな負担になります。<br />
									当事務所では、状況を丁寧にお伺いし、申請から受給まで一緒に進めていきます。<br /><br />
									当事務所は2階にございますが、階段の上り下りが難しい方や、体調に不安のある方については、1階の応接スペースでご相談をお受けすることも可能です。<br /><br />
									ご相談者様の状況に応じて、無理のない形で対応いたしますので、ご予約時にお知らせください。
								</p>
							</div>
						</div>

						<div class="home__block wow fadeIn" data-wow-duration="0.5s">
							<h2 class="home__heading home__heading--deco">当事務所が選ばれる理由</h2>
							<div class="home__heading-underline03" aria-hidden="true">
								<svg class="home__heading-underline-svg" viewBox="0 0 100 14" xmlns="http://www.w3.org/2000/svg">
									<path class="home__heading-underline-path" d="M 0 3 H 75 L 75 9 L 84 3 H 100" fill="none"/>
								</svg>
							</div>
							<div class="home__block-box">
								<p class="about__requirement-title"><span class="about__requirement-num">①</span>年金制度を理解したうえでのサポート</p>
								<p class="home__list-item">
									年金事務所での実務経験を踏まえ、<br />
									制度の仕組みだけでなく、実際の手続きの流れを意識しながら進めています。<br />
									「何を整理すべきか」「どこが判断のポイントになるか」を確認しつつ、無理のない形で申請を進めます。<br />
								</p>
								<p class="about__requirement-title"><span class="about__requirement-num">②</span>盛岡を中心とした、相談しやすい体制</p>
								<p class="home__list-item">
									盛岡市を中心に、滝沢市・紫波町・矢巾町など近隣地域からのご相談に対応しています。<br />
									来所が難しい場合や、階段の利用がご負担になる場合には、1階の応接室でのご相談など、状況に応じた対応を行っています。<br />
								</p>
								<p class="about__requirement-title"><span class="about__requirement-num">③</span>成果報酬制で、費用の不安を抑えて</p>
								<p class="home__list-item">
									障害年金が支給されなかった場合、報酬はいただきません。<br />
									「まずは状況を整理したい」「申請できるか分からない」という段階からでも、ご相談いただけます。<br />
								</p>
							</div>
						</div>

						<div class="home__block wow fadeIn" data-wow-duration="0.5s">
							<h2 class="home__heading home__heading--deco">ご相談の流れ</h2>
							<div class="home__heading-underline04" aria-hidden="true">
								<svg class="home__heading-underline-svg" viewBox="0 0 100 18" xmlns="http://www.w3.org/2000/svg">
									<path class="home__heading-underline-path" d="M 0 3 H 50 L 50 11 L 65 3 H 100" fill="none"/>
								</svg>
							</div>
							<div class="home__block-box">
								<ol class="home__list home__list--numbered">
									<li class="home__list-item">電話・メール・LINEで無料相談</li>
									<li class="home__list-item">状況を確認し、サポート方針をご説明</li>
									<li class="home__list-item">ご納得いただいたうえで正式サポート開始</li>
								</ol>
							</div>
						</div>

						<div class="home__block wow fadeIn" data-wow-duration="0.5s">
							<h2 class="home__heading home__heading--deco">対応エリア</h2>
							<div class="home__heading-underline05" aria-hidden="true">
								<svg class="home__heading-underline-svg" viewBox="0 0 100 18" xmlns="http://www.w3.org/2000/svg">
									<path class="home__heading-underline-path" d="M 0 3 H 50 L 50 11 L 65 3 H 100" fill="none"/>
								</svg>
							</div>
							<div class="home__block-box">
								<p class="home__text">
									盛岡市を中心に、滝沢市・紫波町・矢巾町など近隣地域からのご相談に対応しています。<br />
									ご本人だけでなく、ご家族（配偶者・親御さん）からのご相談も多くいただいています。<br />
									「申請できるか分からない」「何から確認すればいいか分からない」という段階でもご相談いただけます。
								</p>
							</div>
						</div>

						<div class="home__block--consult wow fadeIn" data-wow-duration="0.5s">
							<div class="consult__content">
								<h2 class="consult__heading">まずはお気軽にご相談ください</h2>
								<p class="consult__text">
									「対象になるかわからない」<br />
									「今の状態で相談していいのか不安」<br />
									そんな段階でも大丈夫です。
								</p>
							</div>
							<figure class="consult__figure">
								<img class="home__img" src="<?php echo esc_url( $theme_uri ); ?>/assets/img/home-worry-02.webp" alt="" width="240" height="240" loading="lazy" />
							</figure>
						</div>
					</div>
				</section>

				<section class="home__cta wow fadeIn" data-wow-duration="0.6s">
					<p class="home__cta-tagline">
						あなたの不安に、寄り添うサポート。<br />
						まずは気軽にご相談ください！
					</p>
					<div class="home__cta-buttons">
						<a href="https://lin.ee/TcA8TXs" class="home__cta-button home__cta-button--line" target="_blank" rel="noopener">LINEで無料相談</a>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="home__cta-button home__cta-button--form">メールで相談</a>
						<a href="tel:090-4739-1620" class="home__cta-button home__cta-button--phone">電話で相談</a>
					</div>
				</section>
			</div>
		</div>
	</main>
<?php
get_footer();
