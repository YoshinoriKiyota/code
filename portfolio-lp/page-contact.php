<?php get_header(); ?>

<div id="contents">

<div id="main">

<section>

<h2>お問い合わせ</h2>
<p>当ページと同じ３項目のお問い合わせフォーム（自動フォーム試用版）を簡単に使えるようにセットしています。<br>
<span style="color: red;">※当ページ（contact.html）はフォームの見本ページです。実際の自動フォームには使いませんのでご注意下さい。</span></p>
<p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
あなたのメールアドレス設定と、簡単な編集だけで使えます。<a href="http://template-party.com/file/formgen_manual_set2.html" target="_blank">こちらのマニュアルをご覧下さい。</a></p>
<p><strong class="color1">■自動フォームを使わない場合</strong><br>
テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p>

<table class="ta1">
<tr>
<th>お名前※</th>
<td><input type="text" name="お名前" size="30" class="ws"></td>
</tr>
<tr>
<th>メールアドレス※</th>
<td><input type="text" name="メールアドレス" size="30" class="ws"></td>
</tr>
<tr>
<th>お問い合わせ詳細※</th>
<td><textarea name="お問い合わせ詳細" cols="30" rows="10" class="wl"></textarea></td>
</tr>
</table>

<p class="c">
<input type="submit" value="内容を確認する" class="btn">
</p>

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
