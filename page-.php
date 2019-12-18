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
<li><a href="<?php echo $home; ?>/faq_cat/<?php echo $value->category_nicename; ?>"><?php echo $value->name; ?></a></li>
<?php } ?>
</ul>
</div>
<div class="faq-wrap">
<h3>コンテンツマーケティング<span class="eng">contents marketing</span></h3>
<table>
<?php
$args = array(
'post_type' => 'faq',
'taxonomy' => 'faq_cat',
'field'    => 'slug',
'terms'    => 'faq_cm'
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
<?php endforeach; endif; wp_reset_postdata();?>
</table>
</div>
</section>
<?php get_footer();
