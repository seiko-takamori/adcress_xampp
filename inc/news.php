<section class="news" id="news">
	<h2 class="news-tit">News &amp;<span>Interview</span></h2>
	<div class="news-inner">
		<?php
		$post_array = [
			['date'=>'2020/01/20/','cat'=>'News','txt'=>'アドクリは、日々数億円という巨額の広告費を運用しているプロの現役Webマーケターによる「超実践形式」「超アウトプット型」の少人数・短期間のスクールです。'],
			['date'=>'2020/01/10/','cat'=>'Interview','txt'=>'アドクリは、日々数億円という巨額の広告費を運用しているプロの現役Webマーケターによる「超実践形式」「超アウトプット型」の少人数・短期間のスクールです。'],
		];
		
		foreach($post_array as $postbox){
			echo '<div class="news-box">';
			echo '<p class="news-tit"><time datetime="'.$postbox['date'].'">'.$postbox['date'].'</time>
			<span>'.$postbox['cat'].'</span></p>';
			echo '<p class="news-txt">'.$postbox['txt'].'</p>';
			echo '</div>';
		}
		?>
		<?php require("parts/btn-archive.php"); ?>
			
	</div>
	
</section>