<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>
<section id="feature-mv" class="sub-mv">
<div class="wrap txt-c">
<h2>ADVANTAGE</h2>
<p>私たちの特長</p>
</div>
</section>
<?php get_template_part('breadcrumb'); ?>
<section>
<div class="sec feature-text">
<div class="txt-c wrap">
<h2 class="ttl2">私たちの3つの特長<span>Advantage</span></h2>
</div>
<div class="wrap gray txt-c">
<p>株式会社ランプでは200社以上のWEBマーケティング支援の経験から、独自のノウハウを駆使したサービスを展開しております。</p>
<p>業種・業界によって異なるお客様の商品やサービスの市場を調査することで、ニーズに合わせた最適なプランをご提案いたします。</p>
</div>
</div>
<div id="feature-point" class="inner mb-5 pc">
<div class="wrap">
<ul>
<li><span class="feature-num">01</span>独自のノウハウを駆使した<br><span>質の高いコンテンツ</span>制作<img src="<?php echo $wp_url; ?>/lib/images/feature_icon01"></li>
<li><span class="feature-num">02</span>膨大なデータに基づいた<br><span>アクセス解析力</span><img src="<?php echo $wp_url; ?>/lib/images/feature_icon02"></li>
<li><span class="feature-num">03</span>お客様ごとに<br><span>最適な戦略</span>のプランニング<img src="<?php echo $wp_url; ?>/lib/images/feature_icon03"></li>
</ul>
</div>
</div>
<div id="feature" class="inner pb-5 pt-5 bg-fafafa">
<ul class="wrap inner">
<li class="mb-5">
<img class="mb-2 pc" src="<?php echo $wp_url; ?>/lib/images/features01.jpg" alt="独自のノウハウを駆使した質の高いコンテンツ作り">
<img class="mb-2 sp" src="<?php echo $wp_url; ?>/lib/images/features01-sp.png" alt="独自のノウハウを駆使した質の高いコンテンツ作り">
<div class="content">
<div>
<p class="num">01</p>
<h3 class="ttl3">独自のノウハウを駆使した<br>質の高いコンテンツ作り</h3>
<div class="txt-wrap">
<p>社内には、デザイナーやライター、カメラマンが在籍しており、文章のみならず、画像や動画に関しても、豊富なスキルを持ったスタッフによる質の高いコンテンツを作ることができます。</p>
</div>
</div>
</li>
<li class="mb-5">
<img class="mb-2 pc" src="<?php echo $wp_url; ?>/lib/images/features03.jpg" alt="丁寧なコンサルティングとアフターフォロー">
<img class="mb-2 sp" src="<?php echo $wp_url; ?>/lib/images/features03-sp.png" alt="丁寧なコンサルティングとアフターフォロー">
<div class="content">
<div>
<p class="num">02</p>
<h3 class="ttl3">膨大なデータに基づいた<br>アクセス解析力</h3>
<div class="txt-wrap">
<p>お客様の声や蓄積したデータをもとに独自開発した<span class="tab"> <a href="https://kagari.ai" target="_blank">アクセス解析ツールKAGARI</a></span>を用いて、貴社のWEBサイトを詳細に分析することで、結果に直結する改善案のご提案が可能です。</p>
</div>
</div>
</li>
<li>
<img class="mb-2 pc" src="<?php echo $wp_url; ?>/lib/images/features02.jpg" alt="お客様ごとに最適な戦略のプランニング">
<img class="mb-2 sp" src="<?php echo $wp_url; ?>/lib/images/features02-sp.png" alt="お客様ごとに最適な戦略のプランニング">
<div class="content">
<div>
<p class="num">03</p>
<h3 class="ttl3">最適な戦略のプランニングと<br>アフターフォロー</h3>
<div class="txt-wrap">
<p>ご提案の段階で、貴社の商品やサービスに合わせて一つ一つ丁寧にプランニングを行い、施策後も月に一度レポートを発行し、弊社コンサルタントが状況の報告と改善案をご提案をいたします。</p>
</div>
</div>
</li>
</ul>
</div>
</section>
<?php get_footer();
