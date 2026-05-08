<?php
/**
 * Template Name: 障害年金について
 *
 * @package morioka-wp
 */
$theme_uri = get_template_directory_uri();
get_header();
$about_bg_url = esc_url( $theme_uri . '/assets/img/about-bg.webp' );
?>
<style>.about__page { background-image: url("<?php echo $about_bg_url; ?>"); }</style>
	<main id="main" class="main">
		<div class="about about__page">
			<section class="about about__title-section wow fadeInUp" data-wow-duration="0.8s">
				<h2 class="about__heading about__heading--deco">障害年金とは</h2>
				<div class="about__heading-underline" aria-hidden="true">
					<svg class="about__heading-underline-svg" viewBox="0 0 100 14" xmlns="http://www.w3.org/2000/svg">
						<path class="about__heading-underline-path" d="M 0 4 H 50 L 50 13 L 60 4 H 100" fill="none"/>
					</svg>
				</div>
			</section>

			<section class="about about__content-section">
				<div class="about__content">
					<div class="about__block wow fadeIn" data-wow-duration="0.5s">
						<p class="about__text">障害年金は、<br />病気やけがによって、日常生活や仕事に支障が生じた場合に支給される公的年金制度です。年金というと「老齢年金」を思い浮かべる方が多いかもしれませんが、公的年金制度には、</p>
						<ul class="about__list">
							<li class="about__list-item">老齢年金</li>
							<li class="about__list-item">遺族年金</li>
							<li class="about__list-item">障害年金</li>
						</ul>
						<p class="about__text">という3つの柱があります。</p>
						<p class="about__text">
							障害年金は、 「働けなくなった」「生活が不安定になった」ときのために、長期的な生活を支える目的で設けられている制度です。<br />
							障害年金は「病名」だけで決まる制度ではありません。 <br />
							障害年金は、「この病気だから必ずもらえる」「この診断名だからダメ」という単純な制度ではありません。 <br />
							実際の判断では、
						</p>
						<ul class="about__list">
							<li class="about__list-item">日常生活への影響</li>
							<li class="about__list-item">仕事や社会生活への支障</li>
							<li class="about__list-item">医師の診断内容</li>
							<li class="about__list-item">初診日や保険料の状況</li>
						</ul>
						<p class="about__text">
							など、複数の要素を総合的に見て判断されます。<br />
							そのため、同じ病名であっても「受給できる方」と「難しい方」が分かれることがあります。
						</p>
					</div>

					<div class="about__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="about__subheading wow fadeIn" data-wow-duration="0.5s">障害年金の基本的な3つの要件</h3>
						<p class="about__text">障害年金を請求するためには、原則として、次の3つの要件を満たす必要があります。</p>
						<div class="about__requirement">
							<p class="about__requirement-title"><span class="about__requirement-num">①</span> 初診日がはっきりしていること</p>
							<p class="about__requirement-desc">「初診日」とは、今回の障害の原因となった病気やけがで、初めて医療機関を受診した日をいいます。</p>
							<ul class="about__list about__list--nested">
								<li class="about__list-item">いつ</li>
								<li class="about__list-item">どこで</li>
								<li class="about__list-item">どのような症状で</li>
							</ul>
							<p class="about__text">
								受診したかが確認できない場合、障害年金の請求自体が難しくなることがあります。<br />
								※ 証明が難しい場合でも、状況によっては検討できるケースがあります。 <br /><br />
								「数年前、十数年前のことで病院がなくなっている、カルテがない…そんな場合でも、別の書類で証明できる可能性があります。諦める前に一度ご相談ください。」
							</p>
						</div>

						<div class="about__requirement">
							<p class="about__requirement-title"><span class="about__requirement-num">②</span> 保険料の納付要件を満たしていること</p>
							<p class="about__requirement-desc">
								障害年金は「保険制度」です。<br />
								そのため、保険料を一定期間納めていることが必要になります。 <br />
								原則として、初診日の前日において
							</p>
							<ul class="about__list about__list--nested">
								<li class="about__list-item">直近1年間に未納がない<br/ >または</li>
								<li class="about__list-item">全期間の3分の2以上を納付（免除含む）している</li>
							</ul>
							<p class="about__requirement-desc">
								ことが求められます。<br />
								※ 初診日後に慌てて納付しても、要件は満たせません。
							</p>
						</div>

						<div class="about__requirement">
							<p class="about__requirement-title"><span class="about__requirement-num">③</span> 障害の状態が一定の基準に該当していること</p>
							<p class="about__requirement-desc">
								障害年金には、 障害の重さに応じて 1級・2級・3級 があります。<br />
								目安としては、
							</p>
							<ul class="about__list about__list--nested">
								<li class="about__list-item"><strong>1級：</strong>日常生活に常時介助が必要</li>
								<li class="about__list-item"><strong>2級：</strong>日常生活や社会生活に著しい制限がある</li>
								<li class="about__list-item"><strong>3級：</strong>労働に著しい制限がある（※厚生年金のみ）</li>
							</ul>
							<p class="about__requirement-desc">
								※ 実際の判断は、 診断書の内容や生活状況を踏まえて行われます。<br />
								医師に『日常生活で本当に困っていること』を正確に伝えるのは意外と難しいものです。<br />
								当事務所では、ヒアリングを通じて診断書作成の際のポイントを整理するお手伝いをします。
							</p>
						</div>
					</div>

					<div class="about__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="about__subheading">請求方法の考え方 <br class="about__sp-only" />（認定日請求・事後重症請求）</h3>
						<p class="about__text">障害年金には、主に2つの請求方法があります。</p>
						<h3 class="about__subheading">
							認定日請求<span class="about__subheading-sub">～過去にさかのぼって受け取れる可能性があります～</span>
						</h3>
						<p class="about__text">初診日から 1年6か月経過した時点で、障害等級に該当している場合に行う請求です。</p>
						<figure class="about__figure wow fadeIn" data-wow-duration="1.2s">
							<img class="about__img" src="<?php echo esc_url( $theme_uri ); ?>/assets/img/claiming_01.webp" alt="請求方法の流れ" width="800" height="450" loading="lazy" />
						</figure>

						<ul class="about__list">
							<li class="about__list-item"><strong>支給開始のタイミング</strong>
								<ul class="about__list about__list--inner">
									<li class="about__list-item">「障害認定日（初診日から1年6ヶ月経った日）」の翌月分から支給されます。</li>
									<li class="about__list-item">実際に請求した日が遅くなっても、認定日までさかのぼってまとめて受け取ることができます。</li>
								</ul>
							</li>
							<li class="about__list-item"><strong>ここがポイント（注意事項）</strong>
								<ul class="about__list about__list--inner">
									<li class="about__list-item">「認定日当時」の診断書が必要です。</li>
									<li class="about__list-item">当時の病院が閉院していたり、カルテが残っていない場合は、この方法での請求が難しくなることがあります。</li>
									<li class="about__list-item">さかのぼって受け取れるのは、最大で過去5年分までです（時効があります）。</li>
								</ul>
							</li>
						</ul>
					</div>

					<div class="about__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="about__subheading">
							事後重症請求<span class="about__subheading-sub">～「今」の状態に基づいて、将来に向かって受け取ります～</span>
						</h3>
						<p class="about__text">認定日時点では該当しなかったものの、その後、症状が重くなった場合に行う請求です。</p>
						<figure class="about__figure wow fadeIn" data-wow-duration="1.2s">
							<img class="about__img" src="<?php echo esc_url( $theme_uri ); ?>/assets/img/claiming_02.webp" alt="請求方法の流れ" width="800" height="450" loading="lazy" />
						</figure>
						<ul class="about__list">
							<li class="about__list-item"><strong>支給開始のタイミング</strong>
								<ul class="about__list about__list--inner">
									<li class="about__list-item">年金事務所に「請求書を提出した日」の翌月分から支給されます。</li>
									<li class="about__list-item">過去にさかのぼって受け取ることはできません。</li>
								</ul>
							</li>
							<li class="about__list-item"><strong>ここがポイント（注意事項）</strong>
								<ul class="about__list about__list--inner">
									<li class="about__list-item">1日でも早い提出が重要です。 請求が1ヶ月遅れると、年金1ヶ月分を受け取り損ねることになります。</li>
									<li class="about__list-item">【年齢制限あり】 原則として、65歳の誕生日の前々日までに請求手続きを完了する必要があります。</li>
									<li class="about__list-item">すでに老齢年金を繰り上げ受給している場合などは、請求できないことがあります。</li>
								</ul>
							</li>
						</ul>
					</div>

					<div class="about__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="about__subheading">障害年金の種類と支給額の考え方</h3>
						<p class="about__text">初診日に加入していた年金制度によって、請求できる年金の種類が異なります。</p>
						<ul class="about__list">
							<li class="about__list-item">国民年金 → 障害基礎年金</li>
							<li class="about__list-item">厚生年金 → 障害基礎年金＋障害厚生年金</li>
						</ul>
						<p class="about__text">支給額は、</p>
						<ul class="about__list">
							<li class="about__list-item">障害等級</li>
							<li class="about__list-item">加入制度</li>
							<li class="about__list-item">配偶者・子の加算</li>
						</ul>

						<h4 class="about__subheading about__subheading--level2">1. 初診日が 自営業・フリーランス・主婦などの方（国民年金）</h4>
						<ul class="about__list">
							<li class="about__list-item"><strong>1級：</strong>年額 1,059,125円 ＋ 子の加算</li>
							<li class="about__list-item"><strong>2級：</strong>年額 847,300円 ＋ 子の加算</li>
							<li class="about__list-item">※3級はありません。</li>
						</ul>

						<h4 class="about__subheading about__subheading--level2">2. 初診日が会社員・公務員の方（厚生年金）</h4>
						<ul class="about__list">
							<li class="about__list-item"><strong>1級：</strong>国民年金（1級） ＋ 厚生年金 ＋ 配偶者の加算</li>
							<li class="about__list-item"><strong>2級：</strong>国民年金（2級） ＋ 厚生年金 ＋ 配偶者の加算</li>
							<li class="about__list-item"><strong>3級：</strong>厚生年金のみ（最低保証額 635,500円）</li>
						</ul>
						<p class="about__text">
							※会社員の方は、1級・2級なら国民年金と厚生年金の両方が受け取れます。<br /><br />
							<span class="about__note--highlight">※年金額は、令和8年度（2026年度）の金額です。</span>
						</p>
					</div>

					<div class="about__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="about__subheading">このページを読んでいただいた方へ</h3>
						<p class="about__text">
							障害年金は、 「条件を一つでも知らないと請求できない」という制度ではありません。<br />
							一方で、早い段階で整理しておいた方がよいポイントが多い制度でもあります。<br />
							ご自身やご家族が「対象になるのかどうか分からない」「何から確認すればいいか迷っている」という場合は、まずは状況整理からお手伝いしています。
						</p>
					</div>
				</div>
			</section>
		</div>
	</main>
<?php
get_footer();
