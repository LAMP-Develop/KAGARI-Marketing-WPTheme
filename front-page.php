<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="mv">
<span class="bg-b"></span>
<div class="inner abs-c txt-c">
<h2 class="mb-1"><span class="mb-1">株式会社ランプは</span>
貴社のWEBサイトの成長に寄り添った<br class="pc">
コンテンツマーケティングを提供します。</h2>
<p class="mb-3">豊富なスキルを持った専門スタッフによる質の高いデジタルコンテンツと、<br class="pc">独自に開発したアクセス解析ツールを用いて貴社のWEBサイトの状況を可視化し、改善案をご提案いたします。</p>
<div class="btn white">
<a href="<?php echo $home; ?>/advantage/">私たちの特長を見る</a>
</div>
</div>
</section>
<div class="top-news">
<div class="wrap">
<h2 class="pc">NEWS</h2>
<?php
include_once(ABSPATH . WPINC . '/rss.php');
$rss = fetch_rss('https://lamp.jp/newslist/feed');
$maxitems = 1;
$items = array_slice($rss->items, 0, $maxitems);
// var_dump($items);
$news_ttl = $items[0]['title'];
$news_url = $items[0]['link'];
$news_time = date('Y-m-d', strtotime($items[0]['pubdate']));
?>
<ul>
<?php
// $arg = array(
//   'posts_per_page' => 1,
//   'orderby' => 'date',
//   'order' => 'DESC',
//   'category_name' => 'news'
// );
// $posts = get_posts($arg);
// foreach ($posts as $post):
// setup_postdata($post);
?>
<li>
<a href="<?php echo $news_url; ?>" target="_blank">
<time datetime="<?php echo $news_time; ?>"><?php echo $news_time; ?></time>
<h3><?php echo $news_ttl; ?></h3>
</a>
</li>
<?php // endforeach;?>
</ul>
</div>
</div>
<section id="case" class="sec">
<img src="<?php echo $wp_url; ?>/lib/images/shape_01.png" alt="装飾">
<div class="wrap txt-c">
<h2 class="ttl2">事例紹介<span>Works</span></h2>
<p class="mb-4 gray">200社を超える支援実績</p>
<ul class="case-list">
<?php $args = array(
'numberposts' => 3,
'post_type' => 'work'
);
$customPosts = get_posts($args);
if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
$category = get_the_terms(get_the_ID(), 'work_cat');
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
<p class="cat">
<?php echo $cat_name; ?>
</p>
</div>
</a>
</li>
<?php endforeach; endif; ?>
</ul>
<div class="btn gray txt-c mt-3">
<a href="<?php echo $home; ?>/work/">もっと見る</a>
</div>
</div>
</section>
<section id="service" class="sec">
<img src="<?php echo $wp_url; ?>/lib/images/shape_02.png" alt="装飾">
<div class="wrap txt-c f0f0f0">
<h2 class="ttl2 white">私たちに出来ること<span>Service</span></h2>
<p class="mb-4 gray">株式会社ランプに出来ることをご紹介いたします。<br>アイコンをクリックで詳細を見ることが出来ます。</p>

<ul class="slider">
<li>
<a href="<?php echo $home; ?>/service/owend-media/">
<div class="icon-bg"><div class="mask pc">
<div class="caption">VIEW MORE</div>
</div>
<img src="<?php echo $wp_url; ?>/lib/images/service/contentsmarketing.svg" alt="オウンドメディア制作">
</div>
<p>コンテンツ<br>マーケティング</p>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/owend-media/">
<div class="icon-bg"><div class="mask pc">
<div class="caption">VIEW MORE</div>
</div>
<img src="<?php echo $wp_url; ?>/lib/images/service/media.svg" alt="オウンドメディア制作">
</div>
<p>オウンドメディア<br>制作/運用</p>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/access-analysis/">
<div class="icon-bg"><div class="mask pc">
<div class="caption">VIEW MORE</div>
</div><img src="<?php echo $wp_url; ?>/lib/images/service/inst.svg" alt="インスタグラムマーケティング">
</div>
<p>インスタグラム<br>マーケティング</p>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/access-analysis/">
<div class="icon-bg"><div class="mask pc">
<div class="caption">VIEW MORE</div>
</div><img src="<?php echo $wp_url; ?>/lib/images/service/consul.svg" alt="WEBコンサルティング">
</div>
<p>WEB<br>コンサルティング</p>
</a>
</li>
<li>
<a href="<?php echo $home; ?>/service/seo/">
<div class="icon-bg"><div class="mask pc">
<div class="caption">VIEW MORE</div>
</div>
<img src="<?php echo $wp_url; ?>/lib/images/service/seo.svg" alt="SEO対策">
</div>
<p>SEO対策</p>
</a>
</li>
</ul>
<div class="btn gray txt-c mt-3">
<a href="<?php echo $home; ?>/service/">全てのサービスを見る</a>
</div>

</section>
<section id="blog" class="sec">
<div class="wrap txt-c">
<h2 class="ttl2">ブログ<span>Blog</span></h2>
<p class="gray mb-4">WEBマーケティングの<br class="sp">お役立ち情報をご紹介いたします。</p>
<ul class="blog-list top-blog">
<?php
$arg = array(
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC',
    'category_name' => 'blog'
);
$posts = get_posts($arg);
if ($posts): ?>
<?php
foreach ($posts as $post):
setup_postdata($post);
$p = get_the_permalink();
$t = get_the_title();
$time = get_the_time('Y-m-d');
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
    $i_l = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
    $i_l = $wp_url.'/lib/images/no-img-2.png';
}
$category = get_the_category();
?>
<li>
<a href="<?php echo $p; ?>">
<div class="img-wrap" style="background: url('<?php echo $i_l; ?>') no-repeat center center;background-size: cover"></div>
<div class="mask pc">
  <div class="caption">VIEW MORE</div>
</div>
<div class="txt-wrap">
<?php
foreach ($category as $cat) {
    if ($cat->parent) {
        echo '<span>'.$cat->cat_name.'</span>';
    }
}
?>
<h3><?php echo $t; ?></h3>
<time datetime="<?php echo $time; ?>"><?php echo $time; ?></time>
</div>
</a>
</li>
<?php
endforeach;
endif;
wp_reset_postdata();
?>
</ul>
<div class="btn gray txt-c mt-3">
<a href="<?php echo $home; ?>/blog/">もっと見る</a>
</div>
</div>
<img src="<?php echo $wp_url; ?>/lib/images/shape_04.png" alt="装飾">
</section>
<?php get_footer();
