<?php $home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<aside id="sidebar">

<?php if (is_singular('work')): ?>
<div class="side-inner mb-2">
<h3 class="side-ttl">事例カテゴリー</h3>
<ul class="side-cats">
<?php
$terms = get_categories(array(
  'taxonomy' => 'work_cat'
));
foreach ($terms as $key => $value) { ?>
<li><a href="<?php echo $home; ?>/work_cat/<?php echo $value->category_nicename; ?>"><?php echo $value->name; ?></a></li>
<?php } ?>
</ul>
</div>
<?php else: ?>
<div class="side-inner mb-2">
<h3 class="side-ttl">記事カテゴリー</h3>
<ul class="side-cats">
<li><a href="<?php echo $home; ?>/blog/cm/">コンテンツマーケティング</a></li>
<li><a href="<?php echo $home; ?>/blog/om/">オウンドメディア</a></li>
<li><a href="<?php echo $home; ?>/blog/instagram/">インスタグラム</a></li>
<li><a href="<?php echo $home; ?>/blog/seo/">SEO対策</a></li>
<li><a href="<?php echo $home; ?>/blog/aa/">アクセス解析</a></li>
</ul>
</div>
<?php endif; ?>

<?php if (is_active_sidebar('side-bar')) {
    dynamic_sidebar('side-bar');
} ?>
</aside>
