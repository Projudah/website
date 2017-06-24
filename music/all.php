<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class = "all">
		<?php 
		$albs = glob('songs/*');
		foreach ($albs as $alb) {
			$files = glob($alb."/*.mp3");
			foreach ($files as $file) {
				echo '<div class="one">';
				echo '<p class = "onesong">'.basename($file, '.mp3').'</p>';
				echo '<p class = "allbutt"><a href = "all/'.$file.'" download>Download</a></p>';
				echo '<p class = "allbutt" onclick = "'; echo "play(this, '".$file."')"; echo '">Play</p>';
				echo '<audio preload ="none" class = "player" id = "'.$file.'" controls>
				<source src="'.$file.'" type="audio/ogg">
				</audio>
			</div>';
		}
	}
	?>
</div>
</body>
</html>