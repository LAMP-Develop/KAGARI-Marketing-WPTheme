
<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="event-mv" class="sub-mv">
<div class="wrap txt-c">
<h2>event</h2>
<p class="m-0">イベント・セミナー</p>
</div>
</section>
<?php get_template_part('breadcrumb'); ?>
<section class="sec">
<div class="wrap">
<ul class="news-cats">
  <li><a href="<?php echo $news_url; ?>/newslist/"><i class="fas fa-tag"></i>すべて</a></li>
  <li><a href="<?php echo $news_url; ?>/newslist/news/"><i class="fas fa-tag"></i>お知らせ</a></li>
  <li><a href="<?php echo $home; ?>/newslist/pr/"><i class="fas fa-tag"></i>プレスリリース</a></li>
  <li class="selected"><a href="<?php echo $home; ?>/newslist/event/"><i class="fas fa-tag"></i>イベント・セミナー</a></li>
</ul>
<ul class="news-list">
<?php
include_once(ABSPATH . WPINC . '/rss.php');
$rss = fetch_rss('https://lamp.jp/newslist/event/feed');
$maxitems = 10;
$items = array_slice($rss->items, 0, $maxitems);
foreach ($items as $key => $value):
$news_ttl = $value['title'];
$news_url = $value['link'];
$news_time = date('Y-m-d', strtotime($value['pubdate']));
$category = get_the_category();
?>
<li>
<a href="<?php echo $news_url; ?>" target="_blank">
<time datetime="<?php echo $news_time; ?>"><?php echo $news_time; ?></time>
<p class="cat-green">イベント</p>
<p class="m-0"><?php echo $news_ttl; ?></p>
</a>
</li>
<?php endforeach; ?>
</ul>
</div>
</section>
<?php get_footer();
