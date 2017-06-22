<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="mstyle.css">
</head>
<body>
	<?php
	$files = glob('songs/*.txt');
	foreach ($files as $file) {
		echo '<div class = "albulm_art" style = "'; echo "background: url('songs/".basename($file, '.txt').".jpg');";
		echo '">
		<div class="title">'.
			basename($file, ".txt")
			.'<button class= "expand" onclick = "expand(this,'; echo "'".basename($file, ".txt")."'"; echo ')">-</button></div>
			<div class ="songs" id = "'.basename($file, ".txt").'">';
				$myfile = fopen($file, "r") or die("Unable to open file!");
				while(!feof($myfile)) {
					$song = fgets($myfile);
					echo '<p>'.$song.'</p>';
				}
				fclose($myfile);
				echo '</div>
				<a href = "songs/'.basename($file, ".txt").'.zip" download><p id= "download">Download</p></a>
			</div>';
		}
		?>
<script type="text/javascript" src="mjs.js"></script>
	</body>
	</html>