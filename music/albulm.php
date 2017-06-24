<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="mstyle.css">
</head>
<body>
	<?php
	include "zipup.php";
	$albs = glob('songs/*');
	foreach ($albs as $alb) {
		$files = glob($alb."/*.mp3");
		echo '<div class = "albulm_art" style = "'; 
		echo "background: url('songs/".basename($alb)."/".basename($alb).".jpg');";
		echo '"><div class="title">'.basename($alb).'<button class= "expand" onclick = "expand(this,'; 
		echo "'".basename($alb)."'"; 
		echo ')">+</button></div><div class ="songs" id = "'.basename($alb).'">';
		foreach ($files as $file) {
			echo '<p>'.basename($file, ".mp3").'</p>';
		}
		echo '</div><a href = "?download='.basename($alb).'"><p id= "download">Download</p></a></div>';
	}
	if(isset($_GET['download'])){
		$albname = "songs/".$_GET['download'];
		$albfiles = glob($albname."/*");
		$zip = make($albfiles, basename($albname) );
		echo '<div class = "abs">File Is Ready<a onclick = "home()" href = "'.$zip.'" download><p id = "redownload">Download</p></a></div>';
	}
	?>
</body>
</html>