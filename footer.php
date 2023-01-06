<div class="mycols">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7635107517418701"
		 crossorigin="anonymous"></script>
	<!-- display-ad -->
	<ins class="adsbygoogle"
		style="display:block"
		data-ad-client="ca-pub-7635107517418701"
		data-ad-slot="2501433810"
		data-ad-format="auto"
		data-full-width-responsive="true"></ins>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>

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

	<script>
		$(function(){	
			var pagetop = $('#page_top');
			// ボタン非表示
			pagetop.hide();
			// 100px スクロールしたらボタン表示
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					pagetop.fadeIn();
				} else {
					pagetop.fadeOut();
				}
			});
			//0.5秒かけてトップへ移動
			pagetop.click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 500); 
				return false;
			});
		});
		
		//ハンバーガーメニューのjQuery読み込み
        $(function(){
            $(".toggle").on("click", function(){
                var rightVal = 0;
                if($(this).hasClass("open")) {
                    rightVal = -300;
                    $(this).removeClass("open");
                } else {
                    $(this).addClass("open");
                }
 
                $(".mynav").stop().animate({
                    right: rightVal
                }, 200);
            });
        });
	</script>

  </body>
</html>
