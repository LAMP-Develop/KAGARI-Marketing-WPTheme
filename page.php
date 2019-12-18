<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="single" class="sec">
<div class="wrap">
<article class="post-wrap">
<div class="post-main">
<?php the_content(); ?>
</div>
</article>
</div>
</section>
<?php get_footer();