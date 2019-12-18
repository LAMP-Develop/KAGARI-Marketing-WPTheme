<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec">
<div class="wrap">
<select  name="pulldown1" class="menu-tags txt-c mb-2">
<option value="">絞り込み</option>
<?php
foreach ($catChildren as $key => $cats):
?>
<option value="<?php echo get_category_link($cats->term_id); ?>">
    <?php echo $cats->name; ?>
</option>
<?php endforeach; ?>
</select>
<ul>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<!-- ここに記事 -->
<?php endwhile; endif; ?>
</ul>
</div>
</section>
<?php get_footer();
