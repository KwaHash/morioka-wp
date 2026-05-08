<?php
/**
 * Template Name: サポート内容 (Support)
 * Template for Support page (from pension support.html)
 *
 * @package morioka-wp
 */
$theme_uri = get_template_directory_uri();
get_header();
$support_bg_url = esc_url( $theme_uri . '/assets/img/support-bg.webp' );
?>
<style>.support__page { background-image: url("<?php echo $support_bg_url; ?>"); }</style>
	<main id="main" class="main">
		<div class="support support__page">
			<section class="support support__title-section wow fadeInUp" data-wow-duration="0.8s">
				<h2 class="support__heading support__heading--deco">障害年金サポートについて</h2>
				<div class="support__heading-underline" aria-hidden="true">
					<svg class="support__heading-underline-svg" viewBox="0 0 100 14" xmlns="http://www.w3.org/2000/svg">
						<path class="support__heading-underline-path" d="M 0 3 H 70 L 70 10 L 80 3 H 100" fill="none"/>
					</svg>
				</div>
			</section>

			<nav class="support__jump-nav wow fadeIn" data-wow-duration="0.5s" aria-label="ページ内リンク">
				<a href="#support-flow" class="support__jump-btn">サポートの流れ</a>
				<a href="#faq" class="support__jump-btn">よくあるご質問</a>
				<a href="#cases" class="support__jump-btn">受給事例</a>
			</nav>

			<section class="support support__content-section">
				<div class="support__content">
					<div id="support-flow" class="support__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="support__subheading">当事務所の障害年金サポートの考え方</h3>
						<p class="support__text">
							障害年金の申請は、「とにかく出せば通る」「急げば何とかなる」というものではありません。
							当事務所では、無理に申請を勧めることはしていません。<br /><br />
							まずは、
						</p>
						<ul class="support__list">
							<li class="support__list-item">今の状況で申請が可能か</li>
							<li class="support__list-item">どの点が整理できていないか</li>
							<li class="support__list-item">どこに注意が必要か</li>
						</ul>
						<p class="support__text">
							を一緒に確認したうえで、進めるべきかどうかを判断しています。
						</p>
					</div>

					<div class="support__block support__block--with-figure wow fadeIn" data-wow-duration="0.5s">
						<div>
							<h3 class="support__subheading">このような方からのご相談が多いです</h3>
							<ul class="support__list">
								<li class="support__list-item">障害年金の制度が複雑で、何から確認すればよいか分からない方</li>
								<li class="support__list-item">ご本人ではなく、ご家族（配偶者・親など）からのご相談</li>
								<li class="support__list-item">病院や役所に相談したが、よく分からなかった方</li>
								<li class="support__list-item">自分で申請することに不安がある方</li>
							</ul>
							<p class="support__text">
								「今すぐ申請したい」というより、一度きちんと整理したいという方に向いているサポートです。
							</p>
						</div>
						<figure class="support__figure wow fadeIn" data-wow-duration="0.8s">
							<img class="support__img" src="<?php echo esc_url( $theme_uri ); ?>/assets/img/support-consult.webp" alt="ご相談のイメージ" width="400" height="300" loading="lazy" />
						</figure>
					</div>

					<div class="support__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="support__subheading">当事務所のサポート内容</h3>
						<p class="support__text">状況に応じて、次のようなサポートを行っています。</p>
						<ul class="support__list">
							<li class="support__list-item">初診日・通院歴の整理</li>
							<li class="support__list-item">年金加入記録・保険料状況の確認</li>
							<li class="support__list-item">申請方法（認定日請求・事後重症請求）の整理</li>
							<li class="support__list-item">医師に依頼する診断書内容の整理</li>
							<li class="support__list-item">年金事務所への提出書類作成・提出代行</li>
						</ul>
						<p class="support__text">※ 状況によっては、申請を見送る、または時期を待つご提案をすることもあります。</p>
					</div>

					<div class="support__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="support__subheading">無理にお勧めしない理由</h3>
						<p class="support__text">
							障害年金は、提出した書類がすべて記録として残る制度です。
							もし、準備不足で「実態と違う内容」や「矛盾する内容」を提出して不支給になってしまうと、その記録が足かせとなり、後から正しい内容で申請し直すことが非常に難しくなってしまいます。<br />
							「一度出してダメなら、次はプロに頼めばいい」残念ながら、それでは手遅れになるケースがあるのです。 <br />
							だからこそ当事務所では、リスクがある場合は「今は見送る」という選択肢も正直にお伝えしています。<br />
							対象外となる可能性が高いケースについて <br />
							以下のような場合、
						</p>
						<ul class="support__list">
							<li class="support__list-item">障害年金の請求が難しいことがあります。</li>
							<li class="support__list-item">初診日や通院歴が全く確認できない場合</li>
							<li class="support__list-item">医療機関への受診がなく、今後も受診予定がない場合</li>
							<li class="support__list-item">「必ず短期間で受給できる」とお考えの場合</li>
						</ul>
						<p class="support__text">無理なケースについては、できるだけ早い段階でお伝えすることを大切にしています。</p>
					</div>

					<div class="support__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="support__subheading">申請の流れと期間の目安</h3>
						<p class="support__text">
							障害年金の申請には、準備から結果が出るまで、一定の時間がかかります。<br />
							結果が出るまでには、半年ほどかかることが一般的です。
						</p>
						<figure class="flow__figure wow fadeIn" data-wow-duration="1.2s">
							<img class="flow__img" src="<?php echo esc_url( $theme_uri ); ?>/assets/img/support-flow.webp" alt="請求方法の流れ" width="800" height="450" loading="lazy" />
						</figure>
					</div>

					<div class="support__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="support__subheading">面談について</h3>
						<p class="support__text">
							障害年金のご相談は、原則として、2階の社会保険労務士事務所で行っています。<br />
							落ち着いた環境で、現在のご状況やこれまでの経過について、一つずつ確認しながらお話を伺います。<br />
							※ 階段のご利用が難しい場合は、1階の応接室での対応も可能です。ご予約時にお知らせください。
						</p>
						<div class="support__gallery">
							<img class="support__gallery-img" src="<?php echo esc_url( $theme_uri ); ?>/assets/img/support-room-01.webp" alt="面談室の様子" width="320" height="240" loading="lazy" />
							<img class="support__gallery-img" src="<?php echo esc_url( $theme_uri ); ?>/assets/img/support-room-02.webp" alt="面談室の様子" width="320" height="240" loading="lazy" />
							<img class="support__gallery-img" src="<?php echo esc_url( $theme_uri ); ?>/assets/img/support-room-03.webp" alt="事務所外観" width="320" height="240" loading="lazy" />
						</div>
						<p class="support__text support__text--center">事務所は、盛岡南インター入口交差点付近にあります。</p>
						<div class="support__parking-box">
							<div class="support__parking-wrap">
								<img src="<?php echo esc_url( $theme_uri ); ?>/assets/img/parking.png" alt="" loading="lazy" class="support__parking-icon" width="48" height="48" />
								<p class="support__parking-title">駐車場・送迎</p>
							</div>
							<p class="support__parking-text">お体への負担を減らすため、岩手飯岡駅からの無料送迎と専用駐車場をご用意しております。安心してお越しください。</p>
						</div>
					</div>
				</div>
			</section>

			<section id="faq" class="support__faq wow fadeIn" data-wow-duration="0.8s">
				<div class="support__faq-header">
					<span class="support__faq-label">FAQ</span>
					<h2 class="support__faq-heading">よくあるご質問</h2>
				</div>
				<div class="support__faq-body">
					<div class="support__faq-list">
						<details class="support__faq-item">
							<summary class="support__faq-question">
								<span>Q. </span>
								障害年金は、どんな人が対象になりますか？
							</summary>
							<div class="support__faq-answer">
								<p class="support__faq-answer-text">
									<span>A. </span>
									病気やけがによって、日常生活や仕事に支障が出ている方が対象になります。<br />
									ただし、「病名があるか」だけでは判断できず、初診日・年金の加入状況・現在の状態など、いくつかの条件を総合的に確認する必要があります。<br />
									まずは今の状況を整理するところからご相談ください。<br />
								</p>
							</div>
						</details>
						<details class="support__faq-item">
							<summary class="support__faq-question">
								<span>Q. </span>
								自分が対象になるか分からないのですが、相談できますか？
							</summary>
							<div class="support__faq-answer">
								<p class="support__faq-answer-text">
									<span>A. </span>
									はい、ご相談いただけます。<br />
									「申請できるか分からない」「何から確認すればよいか分からない」という段階の方からのご相談が多いです。<br />
									現時点で申請が可能か、どこが整理できていないかを一緒に確認します。
								</p>
							</div>
						</details>
						<details class="support__faq-item">
							<summary class="support__faq-question">
								<span>Q. </span>
								本人ではなく、家族からの相談でも大丈夫ですか？
							</summary>
							<div class="support__faq-answer">
								<p class="support__faq-answer-text">
									<span>A. </span>
									はい、大丈夫です。<br />
									障害年金は、ご本人よりもご家族（配偶者・親など）が調べて相談されるケースも多い制度です。<br />
									ご本人の状況を伺いながら、制度上の整理や注意点をご説明します。
								</p>
							</div>
						</details>
						<details class="support__faq-item">
							<summary class="support__faq-question">
								<span>Q. </span>
								病院や年金事務所に相談しましたが、よく分かりませんでした。
							</summary>
							<div class="support__faq-answer">
								<p class="support__faq-answer-text">
									<span>A. </span>
									制度の説明だけでは、ご自身のケースに当てはめて判断するのが難しいこともあります。<br />
									当事務所では、制度の説明だけでなく、「あなたの場合、どこがポイントになるか」を整理することを重視しています。
								</p>
							</div>
						</details>
						<details class="support__faq-item">
							<summary class="support__faq-question">
								<span>Q. </span>
								すぐに申請したほうがいいのでしょうか？
							</summary>
							<div class="support__faq-answer">
								<p class="support__faq-answer-text">
									<span>A. </span>
									状況によります。<br />
									障害年金は、提出した書類の内容がすべて記録として残る制度です。<br />
									準備が整っていないまま申請すると、その後の選択肢が狭くなってしまうケースもあります。<br />
									そのため、状況によっては「今は見送った方がよい」とお伝えすることもあります。
								</p>
							</div>
						</details>
						<details class="support__faq-item">
							<summary class="support__faq-question">
								<span>Q. </span>
								自分で申請することもできますか？
							</summary>
							<div class="support__faq-answer">
								<p class="support__faq-answer-text">
									<span>A. </span>
									はい、ご自身で申請することも可能です。<br />
									ただし、初診日や通院歴の整理、診断書の内容など、判断が難しい部分も多いため、不安がある場合はご相談ください。<br />
								</p>
							</div>
						</details>
						<details class="support__faq-item">
							<summary class="support__faq-question">
								<span>Q. </span>
								初診日がはっきり分からない場合でも相談できますか？
							</summary>
							<div class="support__faq-answer">
								<p class="support__faq-answer-text">
									<span>A. </span>
									はい、ご相談いただけます。<br />
									初診日がすぐに分からない場合でも、資料の探し方や確認方法を含めて整理することが可能なケースもあります。<br />
								</p>
							</div>
						</details>
						<details class="support__faq-item">
							<summary class="support__faq-question">
								<span>Q. </span>
								精神疾患でも対象になりますか？
							</summary>
							<div class="support__faq-answer">
								<p class="support__faq-answer-text">
									<span>A. </span>
									対象になる場合があります。<br />
									精神疾患の場合は、日常生活や社会生活への影響の程度が重要になります。<br />
									病名だけで判断せず、現在の状況をもとに整理していきます。
								</p>
							</div>
						</details>
						<details class="support__faq-item">
							<summary class="support__faq-question">
								<span>Q. </span>
								65歳を過ぎていますが、申請できますか？
							</summary>
							<div class="support__faq-answer">
								<p class="support__faq-answer-text">
									<span>A. </span>
									原則として、事後重症請求は65歳に達する日の前日までとなります。<br />
									ただし、状況によって確認すべき点がありますので、個別にご相談ください。<br />
								</p>
							</div>
						</details>
						<details class="support__faq-item">
							<summary class="support__faq-question">
								<span>Q. </span>
								一度不支給になっていますが、再申請できますか？
							</summary>
							<div class="support__faq-answer">
								<p class="support__faq-answer-text">
									<span>A. </span>
									ケースによります。<br />
									不支給となった理由や、前回提出した内容によって対応が異なります。<br />
									再申請が難しい場合もあるため、状況を確認したうえでお話しします。<br />
								</p>
							</div>
						</details>
						<details class="support__faq-item">
							<summary class="support__faq-question">
								<span>Q. </span>
								費用はいつ発生しますか？
							</summary>
							<div class="support__faq-answer">
								<p class="support__faq-answer-text">
									<span>A. </span>
									初回のご相談（電話・メール・面談）は無料です。<br />
									正式にご依頼いただいた場合にのみ、費用が発生します。<br />
									詳しくは料金ページをご確認ください。<br />
								</p>
							</div>
						</details>
					</div>
				</div>
			</section>

			<section id="cases" class="support support__content-section support__cases-section wow fadeIn" data-wow-duration="0.6s">
				<h2 class="support__cases-heading">受給事例</h2>
				<div class="support__cases-list">
					<details class="support__case-item">
						<summary class="support__case-question">
							【脊髄小脳変性症】一部が時効にかかっていたが、それでも過去5年分＋審査期間分、433万円が認められた事例（60代女性）
						</summary>
						<div class="support__case-answer">
							<div class="support__case-block">
								<h4 class="support__case-block-heading">【ご相談時の状況】</h4>
								<p class="support__case-block-text">
									数年前から歩行時のふらつきや構音障害があり、日常生活に介助が必要な状態でした。<br />
									ご家族は一度、障害年金の請求を考えましたが、制度の複雑さから手続きを断念。<br />
									そのまま数年が経過していました。<br />
									その後、新たに担当となったケアマネジャー様から「障害年金に該当する可能性があるのでは」と助言を受け、当事務所へご相談いただきました。<br />
								</p>
							</div>
							<div class="support__case-block">
								<h4 class="support__case-block-heading">【当事務所の対応】</h4>
								<p class="support__case-block-text">
									ヒアリングの結果、すでに一部の期間については時効が成立している状態であることが分かりました。<br />
									ただし、時効にかかっていない直近5年分の受給権は残っており、これ以上の不利益を防ぐため、速やかに申請方針を整理しました。<br />
									症状の特性から、「肢体の障害」ではなく平衡機能の障害として請求する方針を決定し、書類の整備・申請を行いました。<br />
								</p>
							</div>
							<div class="support__case-block">
								<h4 class="support__case-block-heading">【審査結果】</h4>
								<p class="support__case-block-text">
									障害基礎年金2級が認定<br />
									時効にかかっていない 過去5年分＋審査期間分（約3か月） が支給<br />
									合計 約433万円 の受給が決定<br />
									※すでに時効が成立していた期間については、受給できませんでした。
								</p>
							</div>
							<div class="support__case-block">
								<h4 class="support__case-block-heading">【ご家族の声】</h4>
								<p class="support__case-block-text">
									自分たちだけでは、きっとそのまま諦めていたと思います。<br />
									すべてを受け取ることはできませんでしたが、これ以上失わずに済んだこと、まとまった金額が入ったことでこれからの生活の支えになります。<br />
									本当に頼んでよかったです。
								</p>
							</div>
						</div>
					</details>

					<details class="support__case-item">
						<summary class="support__case-question">
							【糖尿病性網膜症】「申立書」が書けず1年経過。2ヶ月分が時効消滅するも、急いで手続し過去5年分の遡及が認められた事例（50代男性）
						</summary>
						<div class="support__case-answer">
							<div class="support__case-block">
								<h4 class="support__case-block-heading">【ご相談時の状況】</h4>
								<p class="support__case-block-text">
									糖尿病による両眼の網膜症が進行し、視力が大きく低下していました。<br />
									日常生活に支障が生じており、奥様もお仕事と通院の付き添いでお忙しい状況でした。<br />
									一度は年金事務所で相談され、保険料納付要件の確認および、受診状況等証明書・認定日当時の診断書の取得までは完了していました。<br />
									しかし、「病歴・就労状況等申立書」の作成が難しく、そこから約1年間、手続きが止まっていました。
								</p>
							</div>
							<div class="support__case-block">
								<h4 class="support__case-block-heading">【当事務所の対応】</h4>
								<p class="support__case-block-text">
									ご相談後、年金事務所と経過を確認したところ、手続きが遅れていた影響で、遡及分の時効が進み始めている（最初の2ヶ月分が消滅している）ことが判明しました。<br />
									これ以上の不利益を防ぐため、早急にヒアリングを行い申立書等を整理し直し、ご相談の翌月には速やかに請求を行いました。
								</p>
							</div>
							<div class="support__case-block">
								<h4 class="support__case-block-heading">【審査結果】</h4>
								<p class="support__case-block-text">
									障害基礎年金2級が決定<br />
									時効にかかっていない 過去5年分（遡及の最大上限） の受給が決定<br />
									※すでに時効が成立してしまった期間（最初の2ヶ月分）については、残念ながら受給できませんでした。
								</p>
							</div>
							<div class="support__case-block">
								<h4 class="support__case-block-heading">【ご家族の声】</h4>
								<p class="support__case-block-text">
									診断書までは取れたものの、申立書の書き方が分からず、日々の生活の忙しさもあって1年もそのままにしてしまっていました。<br />
									受給が決定してほっとしています。ほんとうにありがとうございました。
								</p>
							</div>
						</div>
					</details>
				</div>
			</section>
		</div>
	</main>
<?php
get_footer();
