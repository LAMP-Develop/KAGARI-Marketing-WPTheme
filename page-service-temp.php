<?php
/*
template name: サービス下層
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
<img src="<?php echo the_field('read_img'); ?>" class="mb-1">
<h2 class="ttl2"><?php echo get_the_title(); ?><br></h2>
<span class="eng mb-2"><?php echo get_field('read_ttl_eg'); ?></span>
<p class="gray"><?php echo get_field('read_content'); ?></p>
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

<!-- 流れ -->
<section id="service-flow" class="bg-fofofo">
<div  class="sec">
<div class="wrap">
<div class="txt-c">
<h2 class="ttl2">サービスの流れ<span>Flow</span></h2>
<p class="mb-2">お問い合わせ後のサービスの流れをご紹介します。</p>
</div>
<ol class="clearfix">
<?php for ($i = 1; $i <= 4; ++$i) { ?>
<li>
<span>0<?php echo $i; ?></span>
<h3><?php echo get_field('flow_ttl_'.$i); ?></h3>
<p><?php echo get_field('flow_content_'.$i); ?></p>
</li>
<?php } ?>
</ol>
</div>
</div>
</section>

<section id="case" class="sec">
<img src="<?php echo $wp_url; ?>/lib/images/shape_01.png" alt="装飾">
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
</section>
<?php get_footer();
