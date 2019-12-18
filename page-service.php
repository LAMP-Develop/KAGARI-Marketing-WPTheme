<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>
<section id="service-mv" class="sub-mv">
<div class="wrap txt-c">
<h2>SERVICE</h2>
<p class="m-0">サービス</p>
</div>
</section>
<?php get_template_part('breadcrumb'); ?>
<section>
<div class="txt-c mt-5 wrap">
<h2 class="ttl2">私たちにできること<span>Service</span></h2>
<p class="gray mb-4">貴社の状況に合わせて、下記サービスを組み合わせた最適なプランをご提案いたします。</p>
</div>
<div class="bg-fofofo pb-4 pt-3">
<div class="txt-c">
<h3 class="mb-3">基本プラン<br><i class="fas fa-chevron-down"></i></h3>
</div>
<ul class="service-list wrap">
<li>
<a href="<?php echo $home; ?>/service/contentsmarketing/">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/lib/images/service/contentsmarketing.svg" alt="コンテンツマーケティング"></div>
<div class="se-txt mb-2">
<p class="txt-l">コンテンツマーケティング<br><span>contents marketing</span></p>
</div>
<p class="txt-l text">企業の目的に合わせた最適なプランニングを行い、質の高い記事コンテンツを提供することで課題を解決します。独自開発のツールを使用したアクセス解析までを弊社が管理し、結果に結びつく改善案をご提案いたします。</p>
<div class="btn gray txt-c mt-2">詳しく見る</div>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/owend-media/">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/lib/images/service/media.svg" alt="オウンドメディア制作/運用"></div>
<div class="se-txt mb-2">
<p class="txt-l">オウンドメディア制作/運用<br><span>Owned media</span></p>
</div>
<p class="txt-l text">WEBマーケティングの豊富な実績に基づいた企画力で、メディア設計を行います。<br>制作はもちろん、記事コンテンツの執筆やアクセス解析などの運用面も弊社が行い、貴社の”ファン”を生み出します。
</p>
<div class="btn gray txt-c mt-2">
詳しく見る</div>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/instagram-marketing/">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/lib/images/service/inst.svg" alt="Instagramマーケティング"></div>
<div class="se-txt mb-2">
<p class="txt-l">インスタグラムマーケティング<br><span>Instagram marketing</span></p>
</div>
<p class="txt-l text">コンテンツマーケティングのノウハウを応用したインスタグラムの効果的な活用方法を社内スタッフ様向けに研修いたします。ブライダルや美容関連などの女性をターゲットにした企業様におすすめです。</p>
<div class="btn gray txt-c mt-2">
詳しく見る</div>
</a>
</li>
</ul>
</div>

<div class="pb-4 pt-3">
<div class="wrap">
<div class="txt-c">
<h3 class="mb-3">単体プラン<br><i class="fas fa-chevron-down"></i></h3>
<!-- <p class="gray mb-4">お客様の状況に合わせて、下記サービスを組み合わせた最適なプランをご提案いたします。</p> -->
</div>
<ul class="service-list service-list-sub">
<li>
<a href="<?php echo $home; ?>/service/web-creative/">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/lib/images/service/web-create.svg" alt="WEBサイト制作"></div>
<div class="se-txt mb-2">
<p class="txt-l">WEBサイト制作</p>
</div>
<!-- <p class="txt-l text">WordPressを使ったデザイン性の高いWEBサイトをスマホに対応した設計で制作いたします。運用性に長けている管理画面も特長です。</p> -->
<!-- <div class="btn gray txt-c mt-2">
詳しく見る</div> -->
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/web-consulting/">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/lib/images/service/consul.svg" alt="WEBコンサルティング"></div>
<div class="se-txt mb-2">
<p class="txt-l">WEBコンサルティング</p>
</div>
<!-- <p class="txt-l text">WEBマーケティングの専門家が貴社の状況やニーズに合わせて改善策をご提案します。内製でWEBマーケティングができるよう支援いたします。</p> -->
<!-- <div class="btn gray txt-c mt-2">
詳しく見る</div> -->
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/seo/">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/lib/images/service/seo.svg" alt="SEO対策"></div>
<div class="se-txt mb-2">
<p class="txt-l">SEO対策</p>
</div>
<!-- <p class="txt-l text">綿密なプランニングを行ったSEO内部対策に強いコンテンツを専門の編集チームが作成し、外部対策を掛け合わせることで効果を最大化します。</p> -->
<!-- <div class="btn gray txt-c mt-2">
詳しく見る</div> -->
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/contents-creation/">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/lib/images/service/content-create.svg" alt="コンテンツ制作"></div>
<div class="se-txt mb-2">
<p class="txt-l">コンテンツ制作</p>
</div>
<!-- <p class="txt-l text">長年のノウハウに基づいたSEOライティングとペナルティー対策を施したこだわりの詰まったユーザー目線の質の高いコンテンツを提供いたします。</p> -->
<!-- <div class="btn gray txt-c mt-2">
詳しく見る</div> -->
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/access-analysis/">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/lib/images/service/access.svg" alt="アクセス解析"></div>
<div class="se-txt mb-2">
<p class="txt-l">アクセス解析</p>
</div>
<!-- <p class="txt-l text">貴社のWEBサイトを独自開発のツールで分析し、課題を発見することで改善に導きます。改善案は見やすいレポート形式でご提案いたします。</p> -->
<!-- <div class="btn gray txt-c mt-2">
詳しく見る</div> -->
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/photograph/">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/lib/images/service/photo.svg" alt="撮影"></div>
<div class="se-txt mb-2">
<p class="txt-l">出張撮影・動画制作</p>
</div>
<!-- <p class="txt-l text">弊社には専任のカメラマンが在籍しております。撮影チームがお客様のご要望に合わせてハイクオリティな写真を撮影致します。</p> -->
<!-- <div class="btn gray txt-c mt-2">
詳しく見る</div> -->
</a>
</li>
</ul>
</div>
</div>
</section>
<?php get_footer();
