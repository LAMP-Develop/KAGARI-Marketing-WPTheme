<?php
/*
template name: オウンドメディア
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
<img src="<?php echo $wp_url; ?>/lib/images/service-main/ow/service_icon.svg" alt="サービスのアイコン">
<h2 class="ttl2">オウンドメディア制作/運用<br></h2>
<span class="eng mb-2">OWEND MEDIA</span>
<p class="gray">検索キーワードを意識したコンテンツと、デザイン性の高いWEBサイトで<br>
貴社のオウンドメディアの立ち上げ・運用をサポートいたします。</p>
<table><tr><td>予算</td><td>月額20万円〜</td></tr></table><table style="margin-top : 10px"><tr><td>納品目安</td><td>最短1ヶ月</td></tr></table>
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
      <div class="mb-1">
        <h3>戦略設計 / プランニング</h3>
        <ul>
          <li>キーワードボリューム調査</li>
          <li>キーワードプランニング</li>
          <li>アクセス解析</li>
          <li>競合サイト調査</li>
          <li>ヒアリング・取材</li>
          <li>ターゲット設計</li>
          <li>SEO内部構造調査</li>
          <li>レギュレーション策定</li>
          <li>スケジュール策定</li>
        </ul>
      </div>
      <div class="mb-1">
        <h3>SEO対策</h3>
        <ul>
          <li>meta・alt設定</li>
          <li>内部リンク設計</li>
          <li>インデックス管理</li>
        </ul>
      </div>
      <div class="mb-1">
        <h3>分析 / 改善</h3>
        <ul>
          <li>アクセス解析レポーティング</li>
          <li>SEO流入分析</li>
          <li>コンテンツ分析</li>
          <li>サイト動線分析</li>
          <li>改善提案</li>
          <li>定例ミーティング</li>
        </ul>
      </div>
    </td>
    <td>
      <div class="">
        <p>初期10万円〜<br>月額20万円〜</p>
      </div>
    </td>
    </tr>
  </table>
  <table class="plan-list">
    <tr>
      <td>プラン名</td>
      <td>金額</td>
    </tr>
    <tr>
    <td>
    <div class="">
      <h3>コンテンツ制作</h3>
      <ul>
        <li>コンテンツ企画</li>
        <li>コンテンツライティング</li>
        <li>図・グラフ画像制作</li>
        <li>アイキャッチ画像制作</li>
        <li>共起語分析</li>
        <li>コピペチェック</li>
        <li>CTA設定</li>
        <li>コンテンツ公開代行</li>
      </ul>
    </div>
    </td>
    <td>
      <div class="">
        <p>¥20,000~ / 本</p>
      </div>
    </td>
    </tr>
  </table>
  <h3 class="b txt-c mb-1">オプション</h3>
  <table class="plan-list">
    <tr>
      <td>プラン名</td>
      <td>金額</td>
    </tr>
    <tr>
    <td>
    <div class="">
      <h3>サイト制作</h3>
      <ul>
        <li>オウンドメディア制作</li>
        <li>コーポレートサイト制作</li>
        <li>サービスサイト制作</li>
      </ul>
    </div>
    </td>
    <td>
      <div class="">
        <p>¥300,000~</p>
      </div>
    </td>
    </tr>
  </table>
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
        <p class="txt-l">企業によって異なる目標を達成するための最適なプランニングを行います。キーワードのボリューム調査を行い、効果的な記事コンテンツの作成に必要なキーワードをご提案いたします。</p>
    </li>
    <li>
        <div>
        <p class="txt-l free">無料！</p>
        <h3 class="txt-l">診断・調査<br><span>Diagnosis</span></h3>
        </div>
        <p class="txt-l">貴社のサービスや商品の市場と競合の分析を行います。貴社の状況やサイトの内部構造を調査し、最適なプロジェクト設計とSEOに強いサイト改善案をご提案いたします。</p>
    </li>
    <li>
        <div>
        <h3 class="txt-l">ヒアリング・取材<br><span>hearing</span></h3>
        </div>
        <p class="txt-l">記事コンテンツの作成前に担当編集者が取材に伺います。取材内容をもとに、ペルソナ設計とカスタマージャーニーマップ作成を行い、効果的な記事コンテンツ制作の準備を行います。</p>
    </li>
    <li>
        <div>
        <h3 class="txt-l">コンテンツ制作<br><span>Content Create</span></h3>
        </div>
        <p class="txt-l">Google推奨の質が高いコンテンツを制作いたします。テキストはもちろん、デザイナーがオリジナルで画像や図を作成し、コンテンツの価値を高めます。記事の制作から公開まで弊社がワンストップで対応いたします。</p>
    </li>
    <li>
        <div>
        <h3 class="txt-l">分析改善<br><span>analysis</span></h3>
        </div>
        <p class="txt-l">独自開発のアクセス解析ツール「KAGARI」を使い、ページ単位でサイト分析を行います。分析結果はレポートにまとめ、担当コンサルタントが定期的に訪問しご報告いたします。改善案もご提案・実行することで、PDCAサイクルを活性化させます。</p>
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
