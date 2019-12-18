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
<section id="download-thanks" class="sec">
<div class="wrap txt-c">
<h2 class="ttl2">ダウンロード<span>download</span></h2>
<p>株式会社ランプのWEBマーケティングのノウハウが詰まった、<br>無料のeBookをダウンロードいただけます。</p>
</div>
<div class="sec">
  <ul class="wrap">
    <li>
      <div class="download-top">
      <img src="<?php echo $wp_url; ?>/lib/images/manual_02.png">
      <div class="txt-wrap">
        <h3>コンテンツマーケティング<br class="sp">お役立ちBOOK</h3>
        <p>WEBの集客に活用できるコンテンツマーケティングの知識集です。企画から記事コンテンツの作成方法までのノウハウを詰め込み 成功の秘訣をご紹介しております。
      <div class="btn gray txt-c mt-1">
      <a href="https://tenzk.net/asset/25:lamp-cm?uid=8281348eaee5abe544377e8a30f6a3db9ed9bc41" target="_blank" onclick="gtag('event', 'manual-cm2', {'event_category': 'click', 'event_label': 'btn', 'value': '0'});">資料をダウンロード</a>
      </div>
      </div>
      </div>
    </li>
    <li>
      <div class="download-top">
      <img src="<?php echo $wp_url; ?>/lib/images/manual.png">
      <div class="txt-wrap">
        <h3>Search Console使い方マニュアル</h3>
        <p>200社のコンテンツマーケティングに取り組んだノウハウを活かし、初心者でも分かりやすい使い方マニュアルを作成いたしました。設置方法から、見方まで詳しく解説しております。</p>
        <div class="btn gray txt-c mt-1">
        <a href="https://tenzk.net/asset/26:lamp-searchconsolepdf?uid=8281348eaee5abe544377e8a30f6a3db9ed9bc41" target="_blank"　 onclick="gtag('event', 'manual-sc', {'event_category': 'click', 'event_label': 'btn', 'value': '0'});">資料をダウンロード</a>
        </div>
      </div>
      </div>
    </li>
    <li>
      <div class="download-top">
      <img src="<?php echo $wp_url; ?>/lib/images/manual_03.png">
      <div class="txt-wrap">
        <h3>コンテンツマーケティング<br class="sp">サービス資料</h3>
        <p>WEB集客の手法として注目されているコンテンツマーケティングのサービス資料をご覧いただけます。</p>
      <div class="btn gray txt-c mt-1">
      <a href="https://tenzk.net/asset/30:lamp-cm2?uid=8281348eaee5abe544377e8a30f6a3db9ed9bc41" target="_blank" onclick="gtag('event', 'manual-cm', {'event_category': 'click', 'event_label': 'btn', 'value': '0'});">資料をダウンロード</a>
      </div>
      </div>
      </div>
    </li>
    <li>
      <div class="download-top">
      <img src="<?php echo $wp_url; ?>/lib/images/manual_04.png">
      <div class="txt-wrap">
        <h3>KAGARIサービス資料</h3>
        <p>独自開発のアクセス解析ツール「KAGARI」のサービス資料です。導入事例をご覧いただけます。</p>
        <div class="btn gray txt-c mt-1">
        <a href="https://tenzk.net/asset/28:lamp-kagaripdf?uid=8281348eaee5abe544377e8a30f6a3db9ed9bc41" target="_blank" onclick="gtag('event', 'manual-kagari', {'event_category': 'click', 'event_label': 'btn', 'value': '0'});">資料をダウンロード</a>
        </div>
      </div>
      </div>
    </li>
    <li>
      <div class="download-top">
      <img src="<?php echo $wp_url; ?>/lib/images/manual_06.png">
      <div class="txt-wrap">
        <h3>インスタグラムマーケティング<br class="sp">サービス資料</h3>
        <p>インスタグラムマーケティングのサービス資料です。成功事例やレポートのサンプルをご覧いただけます。</p>
      <div class="btn gray txt-c mt-1">
      <a href="https://tenzk.net/asset/27:lamp-instpdf?uid=8281348eaee5abe544377e8a30f6a3db9ed9bc41" target="_blank" onclick="gtag('event', 'manual-inst', {'event_category': 'click', 'event_label': 'btn', 'value': '0'});">資料をダウンロード</a>
      </div>
      </div>
      </div>
    </li>
    <li>
      <div class="download-top">
      <img src="<?php echo $wp_url; ?>/lib/images/manual_05.png">
      <div class="txt-wrap">
        <h3>株式会社ランプパンフレット</h3>
        <p>株式会社ランプの会社案内パンフレットを配布しております。</p>
      <div class="btn gray txt-c mt-1">
      <a href="https://tenzk.net/asset/31:lamp-pamphlet?uid=8281348eaee5abe544377e8a30f6a3db9ed9bc41" target="_blank" onclick="gtag('event', 'manual-panf', {'event_category': 'click', 'event_label': 'btn', 'value': '0'});">資料をダウンロード</a>
      </div>
      </div>
      </div>
    </li>
  </ul>
</div>
</section>
<?php get_footer();
