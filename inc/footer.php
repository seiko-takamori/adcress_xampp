<?php
	$url = $_SERVER['REQUEST_URI'];
	$url = str_replace('/project/adcres-corp_xampp/','',$url);
	$link_url = strpos( $url, "#" );
?>

<?php

	if($url == "" || $link_url){
		echo '<div class="toTop"><a href="#">TOP</a></div>';
	}else if($url == "archive.php" || $url == "single.php"){
		echo '<div class="pageNation">';
		echo '<ul class="pageNation-list">';
		for($i=1;$i<=5;$i++){ 
			echo '<li><a href="#">'.$i.'</a></li>';
	     }
		echo '</ul>';
		echo '</div>';
	}
?>


<footer class="footer"></footer>	
</body>
</html>