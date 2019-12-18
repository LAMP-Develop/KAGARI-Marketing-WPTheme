<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

<section id="contact" class="sec">
<img class="abs" src="<?php echo $wp_url; ?>/lib/images/shape_05_02.png" alt="装飾">
<div class="wrap txt-c">
<h2>CONTACT</h2>
<p>まずは、お気軽に貴社のお悩みをご相談ください。<br>
無料で課題解決ために最適なプランをご提案いたします。</p>
<div class="btn white txt-c mt-3">
<a href="<?php echo $home; ?>/contact/">お問い合わせはこちら</a>
</div>
</div>
<img class="abs" src="<?php echo $wp_url; ?>/lib/images/shape_05_03.png" alt="装飾">
</section>

<section id="service-link" class="pt-3 pb-3">
<div class="wrap pc-flex">
<a href="https://kagari.ai/" target="_blank">
<img src="<?php echo $wp_url; ?>/lib/images/common/kagari.png" alt="kagari">
<p class="mt-1">ページのSEO / SNS流入の分析に特化したアクセス解析ツール</p>
</a>
<a href="<?php echo $home; ?>/download/">
<img src="<?php echo $wp_url; ?>/lib/images/common/ebook.png" alt="ebook">
<p class="mt-1">WEBマーケティングに役立つeBook集</p>
</a>
</div>
</section>
</main>
<!-- メインコンテンツ終了 -->
<?php get_template_part('cta'); ?>
<!-- フッター -->
<footer id="footer">
<div class="txt-c box">
<div class="wrap">
<a class="foot-logo" href="<?php echo $home; ?>/"><img src="<?php echo $wp_url; ?>/lib/images/common/b_logo.svg" alt="LAMP Marketing"></a>
<p class="gray">株式会社ランプは京都・大阪・名古屋・東京を中心に企業様向けに<br class="pc">コンテンツマーケティングを中心としたWEBサービスを提供する会社です。</p>
</div>
</div>
<div id="link-list" class="wrap">
<ul class="link">
<li><a href="<?php echo $home; ?>/">ホーム</a></li>
<li><a href="<?php echo $home; ?>/advantage">私たちの特長</a></li>
<li><a href="<?php echo $home; ?>/newslist/">お知らせ</a></li>
<li><a href="<?php echo $home; ?>/work/">事例紹介</a></li>
<li><a href="<?php echo $home; ?>/blog/">ブログ</a></li>
</ul>
<ul class="link">
<li><a href="<?php echo $home; ?>/company/">会社紹介</a></li>
<li><a href="<?php echo $home; ?>/faq/">よくあるご質問</a></li>
<li><a href="<?php echo $home; ?>/contact/">お問い合わせ</a></li>
<li><a href="<?php echo $home; ?>/download/">資料ダウンロード</a></li>
<li><a href="<?php echo $home; ?>/privacypolicy/">プライバシーポリシー</a></li>
</ul>
<ul class="link">
<li><a href="<?php echo $home; ?>/service/">サービス内容</a></li>
<div id="link-sub">
<ul>
<li><a href="<?php echo $home; ?>/service/contentsmarketing/">コンテンツマーケティング</a></li>
<li><a href="<?php echo $home; ?>/service/owend-media/">オウンドメディア制作/運用</a></li>
<li><a href="<?php echo $home; ?>/service/web-creative/">WEBサイト制作</a></li>
</ul>
<ul>
<li><a href="<?php echo $home; ?>/service/seo/">SEO対策</a></li>
<li><a href="<?php echo $home; ?>/service/access-analysis/">アクセス解析</a></li>
<li><a href="<?php echo $home; ?>/service/contents-creation/">コンテンツ制作</a></li>
</ul>
<ul>
<li><a href="<?php echo $home; ?>/service/instagram-marketing/">インスタグラムマーケティング</a></li>
<li><a href="<?php echo $home; ?>/service/web-consulting/">WEBコンサルティング</a></li>
<li><a href="<?php echo $home; ?>/service/photograph/">出張撮影・動画制作</a></li>
</ul>
</ul>
</div>
<small class="copy wrap">&copy;2017 <a href="https://lamp.jp/" target="_blank">LAMP Co., Ltd.</a></small>
</footer>
<!-- フッター終了 -->
<script src="<?php echo $wp_url; ?>/lib/js/jquery.min.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/iscroll.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/drawer.min.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/slick.min.js"></script>
<script src="<?php echo $wp_url; ?>/lib/js/app.js"></script>
<?php wp_footer(); ?>
</body>
</html>
