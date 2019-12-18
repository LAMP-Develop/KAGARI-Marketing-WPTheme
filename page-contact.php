<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>
<section id="contact-mv" class="sub-mv">
<div class="wrap txt-c">
<h2>contact</h2>
<p class="m-0">お問い合わせ</p>
</div>
</section>
<?php get_template_part('breadcrumb'); ?>
<section class="sec">
<div class="wrap txt-c form01 form-wrap">
<h2 class="ttl2">お問い合わせフォーム<span>Form</span></h2>
<p class="gray mb-4">お問合せ内容の確認後、担当者よりご連絡させていただきます。
<br>各項目を入力していただき、入力が終わりましたら送信するボタンをクリック下さい。</p>
<?php the_content(); ?>
</div>
</div>
</section>
<?php get_footer();
