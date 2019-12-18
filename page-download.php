<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>
<section id="download-mv" class="sub-mv">
<div class="wrap txt-c">
<h2>download</h2>
<p class="m-0">資料ダウンロード</p>
</div>
</section>
<?php get_template_part('breadcrumb'); ?>
<section id="download" class="sec">
<div class="txt-c wrap">
<h2 class="ttl2">サービス資料・ebook<br>ラインナップ<span>Free</span></h2>
<p class="mb-3">200社のコンテンツマーケティングに取り組んだノウハウが詰まった<br class="pc">無料のeBookを是非ご利用ください。</p>
</div>
<div id="download-thanks" class="bg-fafafa pb-2 pt-2">
<ul class="wrap">
  <li>
    <a href="#form"><div class="download-top">
    <img src="<?php echo $wp_url; ?>/lib/images/manual_03.png">
    <div class="txt-wrap">
      <h3>コンテンツマーケティング<br>サービス資料</h3>
      <p>WEB集客の手法として注目されているコンテンツマーケティングのサービス資料をご覧いただけます。</p>
    </div>
    </div>
    </a>
  </li>
  <li>
    <a href="#form"><div class="download-top">
    <img src="<?php echo $wp_url; ?>/lib/images/manual.png">
    <div class="txt-wrap">
      <h3>Search Console<br>使い方マニュアル</h3>
      <p>200社のコンテンツマーケティングに取り組んだノウハウを活かし、初心者でも分かりやすい使い方マニュアルを作成いたしました。</p>
    </div>
    </div>
    </a>
  </li>
  <li>
    <a href="#form"><div class="download-top">
    <img src="<?php echo $wp_url; ?>/lib/images/manual_02.png">
    <div class="txt-wrap">
      <h3>コンテンツマーケティング<br>お役立ちBOOK</h3>
      <p>企画から記事コンテンツの作成方法までのノウハウを詰め込み 成功の秘訣をご紹介しております。</p>
    </div>
    </div>
    </a>
  </li>
  <li>
    <a href="#form"><div class="download-top">
    <img src="<?php echo $wp_url; ?>/lib/images/manual_04.png">
    <div class="txt-wrap">
      <h3>KAGARI<br>サービス資料</h3>
      <p>独自開発のアクセス解析ツール「KAGARI」のサービス資料です。導入事例をご覧いただけます。</p>
    </div>
    </div>
    </a>
  </li>
  <li>
    <a href="#form"><div class="download-top">
    <img src="<?php echo $wp_url; ?>/lib/images/manual_06.png">
    <div class="txt-wrap">
      <h3>インスタグラムマーケティング<br>サービス資料</h3>
      <p>インスタグラムマーケティングのサービス資料です。成功事例やレポートのサンプルをご覧いただけます。</p>
    </div>
    </div>
    </a>
  </li>
  <li>
    <a href="#form"><div class="download-top">
    <img src="<?php echo $wp_url; ?>/lib/images/manual_05.png">
    <div class="txt-wrap">
      <h3>株式会社ランプ<br>パンフレット</h3>
      <p>株式会社ランプの会社案内パンフレットを配布しております。</p>
    </div>
    </div>
    </a>
  </li>
</ul>
</div>
<div id="form" class="form01 form-wrap sec">
<div class="wrap">
<div class="txt-c">
<h2 class="ttl2">ダウンロードフォーム<span>Form</span></h2>
</div>
<p class="mb-1"> 入力が終わりましたら「送信する」のボタンをクリック下さい。資料一覧からお好きな資料をダウンロードいただけます。<br>
ご入力いただいたメールアドレスにも、弊社の資料と無料のebookをお送りいたします。</p>
<?php the_content(); ?>
</div>
</div>
</section>

<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://marketing.lamp.jp//download/thanks/';
}, false );
</script>
<?php get_footer();
