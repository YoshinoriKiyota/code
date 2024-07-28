<?php get_header(); ?>

<div id="contents">

<div id="main">

<section>

<h2>サービスのご案内</h2>

<p>リンク設定がされている場合、画像右上に「→」マークが出ます。設定はcssフォルダのstyle.cssの<br>
/*ボックスにリンク指定がされた場合に出る「→」マーク*/<br>
ブロックになります。</p>

<div class="list">
<a href="item.html">
<img src="<?php echo get_theme_file_uri('/images/sample1.jpg'); ?>" alt="" class="img">
<h4>Sample Title</h4>
<p>ここに説明など入れて下さい。</p>
</a>
</div>

<div class="list">
<img src="<?php echo get_theme_file_uri('/images/sample1.jpg'); ?>" alt="" class="img">
<h4>Sample Title</h4>
<p>ここに説明など入れて下さい。</p>
</div>

<div class="list">
<a href="item.html">
<h4>Sample Title</h4>
<p>ここに説明など入れて下さい。</p>
</a>
</div>

<div class="list">
<h4>Sample Title</h4>
<p>ここに説明など入れて下さい。</p>
</div>

</section>

</div>
<!--/main-->

<div id="sub">

<nav class="box">
<h2>Menu</h2>
<ul class="submenu">
<li><a href="company.html">会社概要</a></li>
<li><a href="link.html">リンク</a></li>
<li><a href="#">メニュー</a></li>
<li><a href="#">メニュー</a></li>
<li><a href="#">メニュー</a></li>
</ul>
</nav>

<section class="box">

<h2>製品情報</h2>

    <div class="list">
    <a href="item.html">
    <figure><img src="<?php echo get_theme_file_uri('/images/sample1.jpg'); ?>" alt="製品名"></figure>
    <h4>製品情報</h4>
    <p>簡単な説明をここに入れます。</p>
    </a>
    </div>
    
    <div class="list">
    <a href="item.html">
    <figure><img src="<?php echo get_theme_file_uri('/images/sample1.jpg'); ?>" alt="製品名"></figure>
    <h4>製品情報</h4>
    <p>簡単な説明をここに入れます。</p>
    </a>
    </div>

    <div class="list">
    <a href="item.html">
    <figure><img src="<?php echo get_theme_file_uri('/images/sample1.jpg'); ?>" alt="製品名"></figure>
    <h4>製品情報</h4>
    <p>簡単な説明をここに入れます。</p>
    </a>
    </div>

    <div class="list">
    <a href="item.html">
    <figure><img src="<?php echo get_theme_file_uri('/images/sample1.jpg'); ?>" alt="製品名"></figure>
    <h4>製品情報</h4>
    <p>簡単な説明をここに入れます。</p>
    </a>
    </div>

</section>

<section class="box">
<h2>運営</h2>
<p class="c"><strong>株式会社SAMPLE COMPANY</strong><br>
<span class="mini1">東京都XX区XXXXビル3F<br>
TEL:03-0000-0000<br>
(AM9:00〜PM5:00 土日祝休み)</span></p>
</section>

</div>
<!--/sub-->

</div>
<!--/contents-->

<?php get_footer(); ?>
