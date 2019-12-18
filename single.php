<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<?php
if (have_posts()):
while (have_posts()): the_post();
$t = get_the_title();
$id = get_the_ID();
$time = get_the_time('Y-m-d');
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $i_l = get_the_post_thumbnail_url(get_the_ID(), 'full');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
    $i_l = $wp_url.'/lib/images/no-img-2.png';
}
$category = get_the_category();
?>

<section id="single" class="sec">
<div class="wrap grid">
<article class="post-wrap">
<header>
<h2 class="single-ttl"><?php echo $t; ?></h2>
<div class="meta mb-1 txt-r">
<i class="far fa-calendar-alt"></i> <time datetime="<?php echo $time; ?>"><?php echo $time; ?></time>
</div>
<figure class="i-catch txt-c">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</figure>
</header>
<section class="post-main mb-2">
<?php the_content(); ?>
</section>

<?php if (!is_singular('work')): ?>
<footer>
<h2 class="ttl3">関連記事</h2>
<ul class="blog-list">
<?php
$catkwds = [];
foreach ($category as $cat) {
    $catkwds[] = $cat->term_id;
}
$args = array(
'post_type' => 'post',
'posts_per_page' => '4',
'post__not_in' =>array($id),
'category__in' => $catkwds,
'orderby' => 'rand',
);
$my_query = new WP_Query($args);
while ($my_query->have_posts()) : $my_query->the_post();
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
<?php endwhile; wp_reset_postdata(); ?>
</ul>
</footer>
<?php endif; ?>
</article>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
</div>
</section>
<?php get_footer();