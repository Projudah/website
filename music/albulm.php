<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	<?php
	$files = glob('songs/*.txt');
	foreach ($files as $file) {
		echo '<div class = "albulm_art" style = "'; echo "background: url('songs/".basename($file, '.txt').".jpg');";
		echo '">
			<div class="title">'.
				basename($file, ".txt")
				.'</div>
				<div class ="songs">';
					$myfile = fopen($file, "r") or die("Unable to open file!");
					while(!feof($myfile)) {
						$song = fgets($myfile);
						echo '<p class = "songs">'.$song.'</p>';
					}
					fclose($myfile);
				echo '</div>
			</div>';
		}
		?>

	</body>
	<link rel="stylesheet" type="text/css" href="mstyle.css">
	</html>