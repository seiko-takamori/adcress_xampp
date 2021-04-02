<?php require_once("./inc/header.php"); ?>
<div class="_page">
	<section class="under">
		<div class="under-tit-wrap_h1">
			<h1 class="under-tit">Entry</h1>
		</div>
		<img src="./asset/img/pic_entry_01.png" srcset="./asset/img/pic_entry_01.png 1x,./asset/img/pic_entry_01@2x.png 2x" alt="">
		<div class="under-tit-wrap_h2">
			<h2 class="under-tit"><span>Flow</span></h2>
		</div>
		<div class="under-inner">
			<?php
			$flow_array = [
				['tit'=>'体験会予約','txt'=>'体験型を随時開催しております。まずはこちらのフォームから、ご希望の日程を選択いただき、お申し込みください。返信されるメールにございます、決済ページから参加費をお支払いください。 担当者よりご連絡差し上げます。'],
				['tit'=>'なんでも聞いてください','txt'=>'アドクリは、日々数億円という巨額の広告費を運用しているプロの現役Webマーケターによる「超実践形式」「超アウトプット型」の少人数・短期間のスクールです。'],
				['tit'=>'面談へエントリー','txt'=>'体験会後アドクリ入会希望者は面談を実施させていただきます。'],
				['tit'=>'面談と合否通知','txt'=>'運営側からアドクリ入会の合否をご連絡させていただきます'],
				['tit'=>'お支払い','txt'=>'詳しくは担当者にお尋ねください。様々な支払い方法に対応しています。あなたに合った支払い方法をお選び下さい。'],
				['tit'=>'講義スタート','txt'=>'いよいよアドクリ生として講義スタートです。最高の仲間と最高のスキルを手に入れましょう'],
			];

			?>

			<div class="under-box">
			<?php
			foreach(array_values($flow_array) as $num => $flow):
				$num++;
			?>
				<div class="under-box-cont">
					<p class="under-box-tit">
						<?php
						echo '<span>0'.$num.'</span>';
						echo '<span>'.$flow['tit'],'</span>';
						?>
					</p>
					<p class="under-box-txt">
						<?php echo $flow['txt']; ?>
					</p>
				</div>

			<?php endforeach; ?>

			</div>


		</div><!--under-inner-->
		
		<div class="under-inner _beige-inner">
			<h3 class="under-tit">Form</h3>
			<div class="under-box">
				<div class="under-box-inner">
					<form action="#">
						<p><label><span>(必須)</span>お名前<input type="text" name="name" size="40"></label></p>
						<p><label><span></span>会社名<input type="text" name="name" size="40"></label></p>
					</form>
					<a href="#" class="btn-yajirushi">Please send</a>
				</div><!--under-box-innder-->
			</div>
		</div><!--under-inner _bk_beige-->





	</section>
</div>


<?php require_once("./inc/footer.php"); ?>

