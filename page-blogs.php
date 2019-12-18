<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section  id="blog-mv" class="sub-mv">
<div class="wrap txt-c">
<h2>Blog</h2>
<p class="m-0">株式会社ランプのブログを紹介致します</p>
</div>
</section>
<?php get_template_part('breadcrumb'); ?>
<section class="sec">
<div class="wrap">
<div class="txt-c">
<h2 class="ttl2">目的のブログをご覧いただけます<span>Tags</span></h2>
</div>
<ul class="work-tags">
<li><a href="#"><i class="fas fa-tag"></i> コンテンツマーケティング</a></li>
<li><a href="#"><i class="fas fa-tag"></i> オウンドメディア制作</a></li>
</ul>
</div>
</section>

<section class="sec">
<div class="wrap">
<div class="txt-c">
<h2 class="ttl2">最新の記事<span>New</span></h2>
</div>

</div>
</section>
<?php get_footer();
