<?php
function make($files,$name){
    destroy();
    $zipname = $name.'.zip';
    $zip = new ZipArchive;
    $zip->open($zipname, ZipArchive::CREATE);
    foreach ($files as $file) {
        $zip->addFile($file);
    }
    $zip->close();
    return $zipname;
}

function destroy(){
    foreach (glob("*.zip") as $key) {
        if(file_exists($key))
            unlink($key);
    }
}
?>