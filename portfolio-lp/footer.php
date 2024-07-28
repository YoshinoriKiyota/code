<footer>
<small>Copyright&copy; <a href="index.html">SAMPLE COMPANY</a> All Rights Reserved.</small>
<span class="pr"><a href="http://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
</footer>

</div>
<!--/container-->

<!--小さな端末用（800px以下端末）メニュー-->
<nav id="menubar-s">
<ul>
<li><a href="<?php echo esc_url(home_url('/')); ?>">HOME<span>トップページ</span></a></li>
<li><a href="company.html">COMPANY<span>会社概要・所在地のご案内</span></a></li>
<li><a href="service.html">SERVICE<span>サービス・製品情報のご案内</span></a></li>
<li><a href="recruit.html">RECRUIT<span>採用情報のご案内</span></a></li>
<li><a href="contact.html">CONTACT<span>お問い合わせはこちらから</span></a></li>
</ul>
</nav>

<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>
<!--メニューの開閉処理条件設定　900px以下-->
<script type="text/javascript">
if (OCwindowWidth() <= 900) {
	open_close("menubar_hdr", "menubar-s");
}
</script>
<?php wp_footer(); ?>
</body>
</html>
