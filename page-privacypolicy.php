<?php
/*
Template Name: プライバシーポリシー
*/
global $wpdb;
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="privacy" class="sec">
  <div class="wrap"><?php the_content(); ?></div>
</section>
<?php get_footer();
