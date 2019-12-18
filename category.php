<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="blog-mv" class="sub-mv">
<div class="wrap txt-c">
<h2>Blog</h2>
<p>ブログ</p>
</div>
</section>
<?php get_template_part('breadcrumb'); ?>

<section class="mt-3 mb-3 grid">
<div class="wrap grid">
<?php
$args = array('parent' => $cat);
$catChildren = get_categories($args);?>
<article class="post-wrap">
<h3 class="side-ttl">記事一覧</h3>

<?php
$args = array(
'orderby' => 'count',
'order' => 'DSC'
);
?>

<ul class="blog-list blog-list-2">
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
<div class="image-box">
<div class="img-wrap" style="background: url('<?php the_post_thumbnail_url('full'); ?>') no-repeat center center;background-size: cover"></div>
<div class="mask pc">
  <div class="caption">VIEW MORE</div>
</div>
</div>
<div class="txt-wrap">
<?php
foreach ($category as $cat) {
    if ($cat->parent) {
        echo '<span class="cat">'.$cat->cat_name.'</span>';
    }
}
?>
<h3><?php echo $t; ?></h3>
<time datetime="<?php echo $time; ?>"><?php echo $time; ?></time>
</div>
</a>
</li>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
</ul>
<?php get_template_part('pagenavi'); ?>
</article>
<?php get_sidebar(); ?>
</div>

</section>
<?php get_footer(); ?>
