
<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section  id="work-mv" class="sub-mv">
<div class="wrap txt-c">
<h2>Works</h2>
<p>事例紹介</p>
</div>
</section>
<?php get_template_part('breadcrumb'); ?>
<section class="sec pt-4">
<div class="wrap">
<!-- <div class="txt-c">
<h2 class="ttl2">これまでの事例<span>Works</span></h2>
<p class="ttl2_txt">業種・業界を問わず、様々な企業様を支援させていただいております。</p>
</div> -->
<div class="work-ttl"><i class="fas fa-tag"></i>サービスから探す</div>
<ul class="work-tags txt-c mb-3">
<li><a href="<?php echo $home; ?>/work_cat/wo-web"> <?php echo $value->name; ?>コンテンツマーケティング</a></li>
<li><a href="<?php echo $home; ?>/work_cat/wo-om"> <?php echo $value->name; ?>オウンドメディア</a></li>
<li><a href="<?php echo $home; ?>/work_cat/wo-inst"> <?php echo $value->name; ?>インスタグラムマーケティング</a></li>
<li><a href="<?php echo $home; ?>/work_cat/wo-cm"> <?php echo $value->name; ?>WEBサイト制作</a></li>
</ul>
</div>

<div class="wrap txt-c">
<ul class="case-list grid">
<?php if (have_posts()): while (have_posts()): the_post();
$category = get_the_terms(get_the_ID(), 'work_cat');
$cat_name = $category[0]->name;
?>
<li class="mb-1">
<a href="<?php the_permalink(); ?>">
<div>
<div class="img-wrap" style="background: url('<?php the_post_thumbnail_url('full'); ?>') no-repeat center center;background-size: cover"></div>
<div class="mask pc">
  <div class="caption">VIEW MORE</div>
</div>
</div>
<div class="txt-wrap">
<h3><?php the_title(); ?></h3>
<p class="cat"><?php echo $cat_name; ?></p>
</div>
</a>
</li>
<?php endwhile; endif; ?>
</ul>
<?php get_template_part('pagenavi'); ?>
</div>
</section>
<?php get_footer();
