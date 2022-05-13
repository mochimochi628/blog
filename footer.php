<footer class="myfoot">
	<div class=alignwide>
	    <div class="footer-menu">
		  <ul class="footer-menu">
			<li><a href="https://mochimochi628.com/" aria-current="page">ホーム</a></li>
			<li><a href="https://mochimochi628.com/about/">サイトについて</a></li>
			<li><a href="https://mochimochi628.com/profile/">プロフィール</a></li>
			<li><a href="https://mochimochi628.com/privacy-policy/">プライバシーポリシー</a></li>
			<li><a href="https://mochimochi628.com/disclaimer/">免責事項</a></li>
			<li><a href="https://mochimochi628.com/contact/">お問い合わせ</a></li>
		  </ul>	
		</div>
		
		<div class="copyright">
			<p>
				Copyright © 2021 もちもちぐらし Inc. All Rights Reserved.
			</p>
		</div>
	</div>
	
	</div>
	  
	</footer>
	  
	<?php wp_footer(); ?>

    <script>
       lazyload();
    </script>

　　<div id="page_top">
　　　　<a href="#"></a>
　　</div>

<script type="text/javascript">
	$(function(){	
		var pagetop = $('#page_top');   
		pagetop.hide();
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {  //100pxスクロールしたら表示
				pagetop.fadeIn();
			} else {
				pagetop.fadeOut();
			}
		});
		pagetop.click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 500); //0.5秒かけてトップへ移動
			return false;
		});
	});
</script>

  </body>
</html>
