<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>文房具店(ビジネス)向け 無料ホームページテンプレート tp_biz50</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<!-- 
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/fixmenu_pagetop.css">
<script type="text/javascript" src="js/openclose.js"></script>
<script type="text/javascript" src="js/fixmenu_pagetop.js"></script> 
-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="container">

<header>
<h1 id="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt="SAMPLE COMPANY"></a></h1>
<p id="banner"><a href="recruit.html"><img src="<?php echo get_theme_file_uri('/images/banner1.jpg'); ?>" alt="やる気のあるスタッフ募集中"></a></p>
</header>

<!--PC用（801px以上端末）メニュー-->
<nav id="menubar">
<ul>
<li class="current"><a href="<?php echo esc_url(home_url('/')); ?>">HOME<span>トップページ</span></a></li>
<li><a href="<?php echo esc_url(home_url('/company/')); ?>">COMPANY<span>会社概要・所在地のご案内</span></a></li>
<li><a href="<?php echo esc_url(home_url('/service/')); ?>">SERVICE<span>サービス・製品情報のご案内</span></a></li>
<li><a href="<?php echo esc_url(home_url('/recruit/')); ?>">RECRUIT<span>採用情報のご案内</span></a></li>
<li><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT<span>お問い合わせはこちらから</span></a></li>
</ul>
</nav>