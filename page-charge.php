<?php
/**
 * Template Name: 料金・費用 (Charge)
 * Template for Charge page (from pension charge.html)
 *
 * @package morioka-wp
 */
$theme_uri = get_template_directory_uri();
get_header();
$charge_bg_url = esc_url( $theme_uri . '/assets/img/charge-bg.webp' );
?>
<style>.charge__page { background-image: url("<?php echo $charge_bg_url; ?>"); }</style>
	<main id="main" class="main">
		<div class="charge charge__page">
			<section class="charge charge__title-section wow fadeInUp" data-wow-duration="0.8s">
				<h2 class="charge__heading charge__heading--deco">料金及び費用</h2>
				<div class="charge__heading-underline" aria-hidden="true">
					<svg class="charge__heading-underline-svg" viewBox="0 0 100 14" xmlns="http://www.w3.org/2000/svg">
						<path class="charge__heading-underline-path" d="M 0 4 H 50 L 50 13 L 60 4 H 100" fill="none"/>
					</svg>
				</div>
			</section>

			<section class="charge charge__content-section">
				<div class="charge__content">
					<div class="charge__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="charge__subheading">初回相談</h3>
						<p class="charge__text">初回のメール・電話相談、ならびにご面談は無料です。「相談したら必ず依頼しなければならない」ということはありませんので、まずは状況整理のためにご利用ください。</p>
						<div class="charge__table-wrap">
							<table class="charge__table">
								<thead>
									<tr>
										<th scope="col">相談方法</th>
										<th scope="col">費用</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>電話・メールでのご相談</td>
										<td class="charge__table-price">無料</td>
									</tr>
									<tr>
										<td>お会いしてのご面談</td>
										<td class="charge__table-price">無料</td>
									</tr>
								</tbody>
							</table>
						</div>
						<p class="charge__note">※出張が必要な場合は、交通費実費のみご負担をお願いしております。</p>
					</div>

					<div class="charge__block charge__block--with-figure wow fadeIn" data-wow-duration="0.5s">
						<div>
							<h3 class="charge__subheading">障害年金の新規裁定請求について</h3>
							<div class="charge__table-wrap">
								<table class="charge__table charge__table--highlight">
									<thead>
										<tr>
											<th scope="col">項目</th>
											<th scope="col">金額（税込）</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>契約時にかかる費用</td>
											<td class="charge__table-price">22,000円</td>
										</tr>
									</tbody>
								</table>
							</div>
							<p class="charge__text">上記費用に以下すべてを含みます。</p>
							<div class="charge__table-wrap">
								<table class="charge__table">
									<tbody>
										<tr><td>年金加入記録の調査</td></tr>
										<tr><td>初診日・通院歴の整理</td></tr>
										<tr><td>書類作成・提出にかかる諸経費</td></tr>
										<tr><td>交通費・通信費・郵送費等</td></tr>
									</tbody>
								</table>
							</div>
						</div>
						<figure class="charge__figure wow fadeIn" data-wow-duration="0.8s">
							<img class="charge__img" src="<?php echo esc_url( $theme_uri ); ?>/assets/img/charge-consult.webp" alt="ご相談のイメージ" width="400" height="300" loading="lazy" />
						</figure>
					</div>

					<div class="charge__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="charge__subheading">成功報酬（年金が決定した場合のみ）</h3>
						<p class="charge__text">以下のいずれか<strong>多い額</strong>を1回のみお支払いいただきます。不支給の場合は成功報酬はいただきません。</p>
						<div class="charge__table-wrap">
							<table class="charge__table charge__table--highlight">
								<thead>
									<tr>
										<th scope="col">項目名</th>
										<th scope="col">内容</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><strong>成功報酬</strong></td>
										<td>以下のいずれか多い額</td>
									</tr>
									<tr>
										<td></td>
										<td>年金額の2ヶ月分（加算分含む）</td>
									</tr>
									<tr>
										<td></td>
										<td>初回振込額（遡及分含む）の10％</td>
									</tr>
									<tr>
										<td>最低保証額</td>
										<td class="charge__table-price">154,000円（税込）</td>
									</tr>
								</tbody>
							</table>
						</div>
						<p class="charge__note">※「2ヶ月分＋10%」の合算ではなく、どちらか高い方の金額のみを頂戴する形式です。</p>
						<p class="charge__note">※年金が実際に振り込まれた後のお支払いです。申請前に高額な費用をご負担いただくことはありません。</p>
					</div>

					<div class="charge__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="charge__subheading">追加費用について</h3>
						<p class="charge__text">以下のケースでは手続き内容に応じて追加費用が発生する場合があります。事前に内容をご説明し、ご了承いただいたうえで進めます。</p>
						<div class="charge__table-wrap">
							<table class="charge__table">
								<thead>
									<tr>
										<th scope="col">ケース</th>
										<th scope="col">備考</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>共済組合への請求が必要な場合</td>
										<td>手続きが複雑なため追加対応</td>
									</tr>
									<tr>
										<td>労災・交通事故など第三者行為が関係する場合</td>
										<td>手続きが複雑なため追加対応</td>
									</tr>
									<tr>
										<td>診断書・受診状況等証明書等</td>
										<td>医療機関発行分は実費をご負担いただきます</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="charge__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="charge__subheading wow fadeIn" data-wow-duration="0.5s">費用についての考え方</h3>
						<p class="charge__text">
							当事務所では、後から分かりにくい費用が発生しないことを大切にしています。<br />
							専門家として、安心してご依頼いただける形で責任を持って対応したいと考えています。
						</p>
					</div>

					<div class="charge__block wow fadeIn" data-wow-duration="0.5s">
						<h3 class="charge__subheading">費用について不安がある方へ</h3>
						<p class="charge__text">障害年金の申請は、制度や条件によって進め方が大きく異なります。</p>
						<ul class="charge__list">
							<li class="charge__list-item">「自分の場合、どのくらいかかるのか」</li>
							<li class="charge__list-item">「そもそも依頼すべきかどうか」</li>
						</ul>
						<p class="charge__text">といった点についても、初回相談の中で丁寧にご説明しています。</p>
					</div>
				</div>
			</section>
		</div>
	</main>
<?php
get_footer();
