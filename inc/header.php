<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="stylesheet" href="asset/css/style.css">
<title>無題ドキュメント</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(function(){
		//通常はメニュー閉じる
		$(".gnav-wrap").fadeOut();
		//メニューボタン　クリックしたら
		$(".gnav-btn").click(function(){
			$(".gnav-wrap").fadeToggle(500);//.5秒かけてfadeIN/OUT
			$(this).toggleClass("open");//メニューボタンにopenクラスつける
		});
		//各リンク押したらメニュー閉じる
		$(".gnav-ul a[href]").click(function(){
			$(".gnav-wrap").fadeOut();
		});
	});
</script>
	
</head>

<body>
<?php
	$url = $_SERVER['REQUEST_URI'];
	$url = str_replace('/project/adcres-corp_xampp/','',$url);
	$link_url = strpos( $url, "#" );
?>
<?php
	if($url == "single.php"){
		echo '<header class="header _single">';
	}else{
		echo '<header class="header">';
	}
?>


	<div class="header-box">
		<p class="header-logo"><img src="./asset/img/logo.png" srcset="./asset/img/logo.png 1x,./asset/img/logo@2x.png 2x" alt="">
		</p>
		<?php
			if($url == "" || $link_url){
				echo '<p class="header-txt">マーケティングのプロを育てる</p>';
			}else if( $url == "single.php"){
				echo '<p class="header-txt">Interview</p>';
			}
		?>
		
		<div class="gnav-btn">
			<span></span>
			<span></span>
		</div>
		<div class="gnav-wrap">
			<p class="header-txt">マーケティングのプロを育てる</p>
			<nav class="gnav">
				<ul class="gnav-ul">
					<li><a href="#top">Top</a></li>
					<li><a href="#news">News &amp;Interview</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#cur">Curriculum</a></li>
					<li><a href="#entry">Entry</a></li>
				</ul>
			</nav>
			<div class="news-box">
				<p class="news-tit"><time datetime="2020/01/20">2020/01/20</time>
				<span>News</span></p>
				<p class="news-txt">アドクリは、日々数億円という巨額の広告費を運用しているプロの現役Webマーケターによる「超実践形式」「超アウトプット型」の少人数・短期間のスクールです。</p>
			</div>
		</div><!--gnav-wrap-->
	</div>
</header>