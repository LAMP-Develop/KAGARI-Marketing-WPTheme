<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section  id="faq-mv" class="sub-mv">
<div class="wrap txt-c">
<h2>FAQ</h2>
<p class="m-0">よくあるご質問</p>
</div>
</section>

<?php get_template_part('breadcrumb'); ?>
<section id="faq" class="sec">
<div class="wrap">
<ul class="faq-tags txt-c mb-2">
<?php
$terms = get_categories(array(
  'taxonomy' => 'faq_cat'
));
foreach ($terms as $key => $value) { ?>
<li><a href="#<?php echo $value->category_nicename; ?>"><?php echo $value->name; ?></a></li>
<?php } ?>
</ul>
</div>
<div class="faq-wrap">
<h3 id="faq-cm">コンテンツマーケティング<span class="eng">contents marketing</span></h3>
<table class="mb-2">
<?php
//$paged = (int) get_query_var('paged');
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'posts_per_page' => 5,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'faq',
	'post_status' => 'publish',
  'tax_query' => array(
        array(
          'taxonomy' => 'faq_cat', //タクソノミーを指定
          'field' => 'slug', //ターム名をスラッグで指定する
          'terms' => 'faq-cm', //表示したいタームをスラッグで指定
        ),
  ),
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="dl-wrap">
<dl>
<dt>
<h3><?php the_title(); ?></h3>
</dt>
<dd>
<?php the_content(); ?>
</dd>
</dl>
</div>
<?php endwhile; endif; ?>
</table>

<h3 id="faq-om">オウンドメディア<span class="eng">Owned media</span></h3>
<table class="mb-2">
<?php
//$paged = (int) get_query_var('paged');
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'posts_per_page' => 5,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'faq',
	'post_status' => 'publish',
  'tax_query' => array(
        array(
          'taxonomy' => 'faq_cat', //タクソノミーを指定
          'field' => 'slug', //ターム名をスラッグで指定する
          'terms' => 'faq-om', //表示したいタームをスラッグで指定
        ),
  ),
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="dl-wrap">
<dl>
<dt>
<h3><?php the_title(); ?></h3>
</dt>
<dd>
<?php the_content(); ?>
</dd>
</dl>
</div>
<?php endwhile; endif; ?>
</table>

<h3 id="faq-inst">インスタグラムマーケティング<span class="eng">Instagram marketing</span></h3>
<table class="mb-2">
<?php
//$paged = (int) get_query_var('paged');
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'posts_per_page' => 5,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'faq',
	'post_status' => 'publish',
  'tax_query' => array(
        array(
          'taxonomy' => 'faq_cat', //タクソノミーを指定
          'field' => 'slug', //ターム名をスラッグで指定する
          'terms' => 'faq-inst', //表示したいタームをスラッグで指定
        ),
  ),
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="dl-wrap">
<dl>
<dt>
<h3><?php the_title(); ?></h3>
</dt>
<dd>
<?php the_content(); ?>
</dd>
</dl>
</div>
<?php endwhile; endif; ?>
</table>

<h3 id="faq-web">WEBサイト制作<span class="eng">web Create</span></h3>
<table class="mb-2">
<?php
//$paged = (int) get_query_var('paged');
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'posts_per_page' => 5,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'faq',
	'post_status' => 'publish',
  'tax_query' => array(
        array(
          'taxonomy' => 'faq_cat', //タクソノミーを指定
          'field' => 'slug', //ターム名をスラッグで指定する
          'terms' => 'faq-web', //表示したいタームをスラッグで指定
        ),
  ),
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="dl-wrap">
<dl>
<dt>
<h3><?php the_title(); ?></h3>
</dt>
<dd>
<?php the_content(); ?>
</dd>
</dl>
</div>
<?php endwhile; endif; ?>
</table>

<h3 id="faq-seo">SEO対策<span class="eng">seo</span></h3>
<table class="mb-2">
<?php
//$paged = (int) get_query_var('paged');
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'posts_per_page' => 5,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'faq',
	'post_status' => 'publish',
  'tax_query' => array(
        array(
          'taxonomy' => 'faq_cat', //タクソノミーを指定
          'field' => 'slug', //ターム名をスラッグで指定する
          'terms' => 'faq-seo', //表示したいタームをスラッグで指定
        ),
  ),
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="dl-wrap">
<dl>
<dt>
<h3><?php the_title(); ?></h3>
</dt>
<dd>
<?php the_content(); ?>
</dd>
</dl>
</div>
<?php endwhile; endif; ?>
</table>

<h3 id="faq-aa">アクセス解析<span class="eng">access Analysis</span></h3>
<table class="mb-2">
<?php
//$paged = (int) get_query_var('paged');
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'posts_per_page' => 5,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'faq',
	'post_status' => 'publish',
  'tax_query' => array(
        array(
          'taxonomy' => 'faq_cat', //タクソノミーを指定
          'field' => 'slug', //ターム名をスラッグで指定する
          'terms' => 'faq-aa', //表示したいタームをスラッグで指定
        ),
  ),
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="dl-wrap">
<dl>
<dt>
<h3><?php the_title(); ?></h3>
</dt>
<dd>
<?php the_content(); ?>
</dd>
</dl>
</div>
<?php endwhile; endif; ?>
</table>

<h3 id="faq-content">コンテンツ制作<span class="eng">contents Create</span></h3>
<table class="mb-2">
<?php
//$paged = (int) get_query_var('paged');
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'posts_per_page' => 5,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'faq',
	'post_status' => 'publish',
  'tax_query' => array(
        array(
          'taxonomy' => 'faq_cat', //タクソノミーを指定
          'field' => 'slug', //ターム名をスラッグで指定する
          'terms' => 'faq-content', //表示したいタームをスラッグで指定
        ),
  ),
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="dl-wrap">
<dl>
<dt>
<h3><?php the_title(); ?></h3>
</dt>
<dd>
<?php the_content(); ?>
</dd>
</dl>
</div>
<?php endwhile; endif; ?>
</table>

<h3 id="faq-wc">WEBコンサルティング<span class="eng">web consulting</span></h3>
<table class="mb-2">
<?php
$args = array(
	'posts_per_page' => 5,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'faq',
	'post_status' => 'publish',
  'tax_query' => array(
        array(
          'taxonomy' => 'faq_cat', //タクソノミーを指定
          'field' => 'slug', //ターム名をスラッグで指定する
          'terms' => 'faq-wc', //表示したいタームをスラッグで指定
        ),
  ),
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="dl-wrap">
<dl>
<dt>
<h3><?php the_title(); ?></h3>
</dt>
<dd>
<?php the_content(); ?>
</dd>
</dl>
</div>
<?php endwhile; endif; ?>
</table>

<h3 id="faq-photo">出張写真・動画制作<span class="eng">photo/movie</span></h3>
<table class="mb-2">
<?php
$args = array(
	'posts_per_page' => 5,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'faq',
	'post_status' => 'publish',
  'tax_query' => array(
        array(
          'taxonomy' => 'faq_cat', //タクソノミーを指定
          'field' => 'slug', //ターム名をスラッグで指定する
          'terms' => 'faq-photo', //表示したいタームをスラッグで指定
        ),
  ),
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="dl-wrap">
<dl>
<dt>
<h3><?php the_title(); ?></h3>
</dt>
<dd>
<?php the_content(); ?>
</dd>
</dl>
</div>
<?php endwhile; endif; ?>
</table>

</div>
</section>
<?php get_footer();
