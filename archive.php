<?php require_once("./inc/header.php"); ?>
<section class="under _archive">
	<div class="under-tit-wrap">
		<h2 class="under-tit">News &amp; <br>Interview</h2>
	</div>
	<div class="under-inner">
		<?php
		$archive_array =[
			['date'=>'2020/01/20/','cat'=>'News','txt'=>'アドクリは、日々数億円という巨額の広告費を運用しているプロの現役Webマーケターによる「超実践形式」「超アウトプット型」の少人数・短期間のスクールです。'],
			['date'=>'2020/01/10/','cat'=>'','txt'=>'アドクリは、日々数億円という巨額の広告費を運用しているプロの現役Webマーケターによる「超実践形式」「超アウトプット型」の少人数・短期間のスクールです。'],
			['date'=>'2020/01/20/','cat'=>'News','txt'=>'アドクリは、日々数億円という巨額の広告費を運用しているプロの現役Webマーケターによる「超実践形式」「超アウトプット型」の少人数・短期間のスクールです。'],
			['date'=>'2020/01/10/','cat'=>'News','txt'=>'アドクリは、日々数億円という巨額の広告費を運用しているプロの現役Webマーケターによる「超実践形式」「超アウトプット型」の少人数・短期間のスクールです。'],
			['date'=>'2020/01/10/','cat'=>'News','txt'=>'アドクリは、日々数億円という巨額の広告費を運用しているプロの現役Webマーケターによる「超実践形式」「超アウトプット型」の少人数・短期間のスクールです。'],
			['date'=>'2020/01/10/','cat'=>'News','txt'=>'アドクリは、日々数億円という巨額の広告費を運用しているプロの現役Webマーケターによる「超実践形式」「超アウトプット型」の少人数・短期間のスクールです。'],
			['date'=>'2020/01/10/','cat'=>'News','txt'=>'アドクリは、日々数億円という巨額の広告費を運用しているプロの現役Webマーケターによる「超実践形式」「超アウトプット型」の少人数・短期間のスクールです。'],
			['date'=>'2020/01/10/','cat'=>'News','txt'=>'アドクリは、日々数億円という巨額の広告費を運用しているプロの現役Webマーケターによる「超実践形式」「超アウトプット型」の少人数・短期間のスクールです。'],
		];?>
		
		<div class="under-box">
		<?php
		foreach($archive_array as $archive):
		?>
			<div class="under-box-cont">
				<p class="under-box-tit">
					<?php
					echo $archive['date']; ?>
					<?php if($archive['cat']): ?>
						<span><?php echo $archive['cat']; ?></span>
					<?php endif; ?>
				</p>
				<p class="under-box-txt">
					<?php echo $archive['txt']; ?>
				</p>
			</div>

		<?php endforeach; ?>
			
		</div>

		
	</div>
</section>

<?php require_once("./inc/footer.php"); ?>

