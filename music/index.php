<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="mstyle.css">
</head>
<body>
<?php
			if(isset($_GET['view']))
				$view = $_GET['view'];
			else($view = 'albulm');
			?>
	<div class = "bg">
		<p class="head">PRO music</p>
		<div class = "bar">
			<ul class = "barul">
				<form action = "index.php" method="get">
					<a href="?view=albulm"><li class = <?php  if($view == "albulm"){ echo 'baractive'; }else{ echo 'barinactive'; }?>>Albulms</li></a>
					<a href="?view=all"><li class=<?php  if($view == "all"){ echo 'baractive'; }else{ echo 'barinactive'; }?>>All Songs</li></a>
					<a href="?view=instrument"><li class=<?php  if($view == "instrument"){ echo 'baractive'; }else{ echo 'barinactive'; }?>>Instrumentals</li></a>
				</form>
			</ul></div>
			<?php
			if($view == "albulm"){
				include 'albulm.php';
			}
			if($view == "all"){
				include 'all.php';
			}
			if($view == "instrument"){
				include 'instrument.php';
			}
			?>
		</div>
	</body>
	</html>