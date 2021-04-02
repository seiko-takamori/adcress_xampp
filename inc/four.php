<section class="four">
	<div class="four-inner">
		<?php
		$four_array = [
			['cat'=>'about','txt'=>'アドクリについて'],
			['cat'=>'curriculum','txt'=>'授業カリキュラム'],
			['cat'=>'company','txt'=>'運営会社'],
			['cat'=>'entry','txt'=>'相談会エントリー']
		];
		
		foreach($four_array as $four){
			$cat = ucfirst($four['cat']);
			
			echo '<div class="four-box">';
			echo '<a href="#">';
			echo '<h2 class="four-tit">'.$cat.'</h2>';
			echo '<img src="asset/img/pic_four_'.$four['cat'].'.png" srcset="asset/img/pic_four_'.$four['cat'].'.png 1x,asset/img/pic_four_'.$four['cat'].'@2x.png 2x" alt="$cat">';
			echo '<p class="four-txt">'.$four['txt'].'</p>';
			echo '</a>';
			echo '</div>';
		}
		?>
	
	</div>
</section>