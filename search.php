<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sub-mv">
<div class="wrap txt-c">
<h2>Blog</h2>
<p class="m-0">株式会社ランプのブログを紹介致します</p>
</div>
</section>
<?php get_template_part('breadcrumb'); ?>
<section id="blog-top" class="sec">
<div class="wrap">
<div class="txt-c">
<h2 class="ttl2">「<?php echo get_search_query(); ?>」の結果<span>search</span></h2>
</div>
<ul class="blog-list txt-c">
<?php if (have_posts()) : while (have_posts()) : the_post();
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
<div class="img-wrap" style="background: url('<?php echo $i; ?>') no-repeat center center;background-size: cover"></div>
<div class="txt-wrap">
<h3><?php echo $t; ?></h3>
<time datetime="<?php echo $time; ?>"><?php echo $time; ?></time>
<?php
foreach ($category as $cat) {
    if ($cat->parent) {
        echo '<span>'.$cat->cat_name.'</span>';
    }
}
?>
</div>
</a>
</li>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
</ul>
</div>
</section>
<?php get_footer();
