<?php
/*
template name: インスタグラム
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post();
$cat = get_the_category();?>
<section class="sub-mv">
<div class="wrap txt-c">
<h2>SERVICE</h2>
<p>サービス内容</p>
</div>
</section>
<?php get_template_part('breadcrumb'); ?>
<!-- サービス導入 -->
<section id="s-read" class="sec">
<div class="wrap txt-c">
<img src="<?php echo $wp_url; ?>/lib/images/service-main/inst/service_icon.svg" alt="サービスのアイコン">
<h2 class="ttl2">インスタグラムマーケティング<br></h2>
<span class="eng mb-2">INSTAGRAM MARKETING</span>
<p class="gray">コンテンツマーケティングは記事コンテンツを活用したマーケティング手法です。<br>WEB広告の効果が薄まり、スマホの普及によりユーザーのコンテンツの閲覧機会が増えた中で、<br>ユーザーに対して最も有効的に情報を届けられる手法として多くの企業で取り組まれています。</p>
<table><tr><td>予算</td><td>月額15万円〜</td></tr></table><table style="margin-top : 10px"><tr><td>納品目安</td><td>最短1ヶ月</td></tr></table>
</div>
</section>
<section id="s-strength" class="">
<div class="bg-fafafa sec">
<div class="wrap">
<div class="txt-c">
<h2 class="ttl2">私たちの3つの強み<span>Strength Point</span></h2>
<p class="mb-2">200社を超える実績から<br>生み出したノウハウ</p>
</div>
<?php for ($i=1; $i <= 3; ++$i): ?>
<div class="strength-inner">
<h3 class="ttl3 mb-1"><span class="mr-2">0<?php echo $i; ?></span><?php echo preg_replace("/( |　)/", '', get_field('strength_ttl_'.$i)); ?></h3>
<div class="img-wrap txt-c">
<img src="<?php echo get_field('strength_img_'.$i); ?>" alt="<?php echo get_field('strength_ttl_'.$i); ?>">
</div>
<div class="txt-wrap">
<p><?php echo preg_replace("/( |　)/", '', get_field('strength_content_'.$i)); ?></p>
</div>
</div>
<?php endfor; ?>
</div>
</div>
</section>

<section id="plan" class="sec">
<div class="wrap">
  <div class="txt-c">
  <h2 class="ttl2">プラン内容<span>Plan</span></h2>
  <p class="mb-4">プランの内容と料金をご紹介します。</p>
  </div>
<div class="">
  <table class="plan-list">
    <tr>
      <td>プラン名</td>
      <td>金額</td>
    </tr>
    <tr>
    <td>
    <div class="">
      <h3>戦略設計 / プランニング</h3>
      <ul>
        <li>カリキュラム策定</li>
        <li>アカウント調査</li>
        <li>インサイト解析</li>
        <li>ターゲット設計</li>
      </ul>
    </div>
    <div class="">
      <h3>講習会の実施（2時間×6回）</h3>
      <ul>
        <li>ハッシュタグ設計</li>
        <li>ハイライト設定</li>
        <li>プロフィール設定</li>
        <li>撮影・加工方法</li>
      </ul>
    </div>
    <div class="">
      <h3>分析 / 改善</h3>
      <ul>
        <li>フォロワー分析</li>
        <li>投稿分析</li>
        <li>コンテンツ分析</li>
        <li>動線分析</li>
        <li>改善提案</li>
      </ul>
    </div>
    </td>
    <td>
      <div class="">
        <p>初期0円<br>月額15万円〜</p>
      </div>
    </td>
    </tr>
  </table>
</div>
</div>
</section>

<section id="flow" class="bg-fafafa">
<div class="sec">
<div class="wrap">
  <div class="txt-c">
  <h2 class="ttl2">サービスの流れ<span>flow</span></h2>
  <p class="mb-4">お問い合わせ後の流れをご紹介します。</p>
  </div>
  <ul class="flow-list">
    <li>
      <div>
      <p class="free">無料！</p>
      <h3>プランニング<br><span>Planning</span></h3>
      </div>
      <p class="txt-l">貴社の状況をお伺いし、目標達成に導く運用プランをご提案いたします。集客したいターゲットや、貴社の社内体制に合わせたカリキュラムを作成いたします。</p>
    </li>
    <li>
      <div>
      <p class="txt-l free">無料！</p>
      <h3 class="txt-l">診断・調査<br><span>Diagnosis</span></h3>
      </div>
      <p class="txt-l">貴社のアカウントのインサイトを分析し、どのようなユーザーに閲覧されているかを解析したうえで効果的なプロジェクトを設計します。アカウントをお持ちでない場合は、開設からサポートいたします。</p>
    </li>
    <li>
      <div>
      <h3 class="txt-l">スケジュール策定<br><span>schedule</span></h3>
      </div>
      <p class="txt-l">貴社の目標から逆算したKPIを設計し、達成のためにスケジュールを組み立てます。講習会を行う日程等は貴社のご要望をお伺いしながら決定いたします。</p>
    </li>
    <li>
      <div>
      <h3 class="txt-l">講習実施<br><span>ourse</span></h3>
      </div>
      <p class="txt-l">コンテンツマーケティングのノウハウをインスタグラムに応用した、マーケティングスキームを貴社のスタッフ様にレクチャーいたします。研修内容は、インスタグラムの様々な機能の使い方からハッシュタグの使い方やインスタ映えする写真の撮り方、解析の方法までを網羅しています。</p>
    </li>
    <li>
      <div>
      <h3 class="txt-l">分析改善<br><span>analysis</span></h3>
      </div>
      <p class="txt-l">インスタグラムの解析機能として使えるインサイトを用いて、定期的に貴社アカウントの傾向を解析し訪問・報告いたします。私たちがこれまでに実施してきたインスタグラムのマーケティングのデータと比較した改善策をご提案いたします。</p>
    </li>
  </ul>
</div>
</div>
</section>

<section id="case" class="sec">
<img src="<?php echo $wp_url; ?>/lib/images/shape_01.png" alt="装飾">
<div class="wrap txt-c">
<h2 class="ttl2">事例紹介<span>Works</span></h2>
<p class="mb-4 gray">私たちの支援実績</p>
<ul class="case-list">
<?php
$args = array(
'numberposts' => 3,
'post_type' => 'work'
);
$customPosts = get_posts($args);

if ($customPosts):
foreach ($customPosts as $post):
setup_postdata($post);
$id = get_the_ID();
$category = get_the_terms($id, 'work_cat');
$cat_name = $category[0]->name;
?>
<li>
<a href="<?php the_permalink(); ?>">
<div>
<div class="img-wrap" style="background: url('<?php the_post_thumbnail_url('full'); ?>') no-repeat center center;background-size: cover"></div>
<div class="mask pc">
  <div class="caption">VIEW MORE</div>
</div>
</div>
<div class="txt-wrap">
<h3><?php the_title(); ?></h3>
<span class="cat"><?php echo $cat_name; ?></span>
</div>
</a>
</li>
<?php endforeach; endif; wp_reset_postdata();?>
</ul>
<div class="btn gray txt-c mt-3">
<a href="<?php echo $home; ?>/work/">もっと見る</a>
</div>
</div>
</section>

<section id="case" class="bg-fafafa">
<div class="sec">
<div class="wrap txt-c">
<h2 class="ttl2">よくあるご質問<span>faq</span></h2>
<p class="mb-2 gray">お客様から多く寄せられるご質問にお答えいたします。</p>
</div>
<div id="faq" class="txt-c wrap">
<div class="faq-wrap">
<table>
<?php
$args = array(
'numberposts' => 3,
'post_type' => 'faq'
);
$customPosts = get_posts($args);

if ($customPosts):
foreach ($customPosts as $post):
setup_postdata($post);
$id = get_the_ID();
$category = get_the_terms($id, 'faq_cat');
$cat_name = $category[0]->name;
?>
<div class="dl-wrap">
<dl>
<dt>
<h3><?php the_title(); ?></h3>
</dt>
<dd>
<p><?php the_content(); ?></p>
</dd>
</dl>
</div>
<?php endforeach; endif; ?>
</table>
<div class="btn gray txt-c mt-3">
<a href="<?php echo $home; ?>/faq/">もっと見る</a>
</div>
</div>
</div>
</div>
</section>
<?php get_footer();
