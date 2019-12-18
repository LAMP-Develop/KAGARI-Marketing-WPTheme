<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php wp_head(); ?>
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans+JP:400,700|Oswald:300, 500|Cedarville+Cursive&display=swap">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/reset.css">
<link rel="stylesheet" media="(max-width: 980px)" href="<?php echo $wp_url; ?>/lib/css/drawer.min.css">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/style.css?20190906">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/slick-theme.css">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/slick.css">
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/service-main.css">
<?php if (is_single()): ?>
<link rel="stylesheet" href="<?php echo $wp_url; ?>/lib/css/single.css?20190906">
<?php endif; ?>

<?php if (!is_user_logged_in()): ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-79537153-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-79537153-9');
</script> -->
<?php endif; ?>

</head>
<body class="drawer drawer--right">

<!-- ヘッダー -->
<header id="header" class="txt-l">
<div class="logo">
<h1><a href="<?php echo $home; ?>/"><img src="<?php echo $wp_url; ?>/lib/images/common/LAMP-Marketing.png" alt="LAMP Marketing"></a></h1>
</div>
<!-- hamburger -->
<button type="button" class="drawer-toggle drawer-hamburger sp"><span class="drawer-hamburger-icon"></span><span class="sr-only">MENU</span></button>
<nav id="nav" class="drawer-nav">
<ul class="drawer-menu">
<li><a href="<?php echo $home; ?>/newslist/">お知らせ</a></li>
<li><a href="<?php echo $home; ?>/advantage/">私たちの特長</a></li>
<li><a href="<?php echo $home; ?>/service/">サービス</a></li>
<li><a href="<?php echo $home; ?>/work/">事例紹介</a></li>
<li><a href="<?php echo $home; ?>/blog/">ブログ</a></li>
<li><a href="<?php echo $home; ?>/company/">会社紹介</a></li>
<li class="hover01"><a href="<?php echo $home; ?>/contact/"><i class="far fa-envelope"></i>お問い合わせ</a></li>
<li class="hover01"><a href="<?php echo $home; ?>/download/"><i class="fas fa-book-open"></i>資料ダウンロード</a></li>
</ul>
</nav>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>
