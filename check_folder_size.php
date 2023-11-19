<?php
/* 
 * check directory size linux
 * how to check directory size in linux: Check size and list all files and directory with its size
 * Shared by BienThuy.Com
 * https://bienthuy.com/download/ma-nguon/tao-he-thong-vote-giong-youtube/
 * Facebook: https://www.facebook.com/bienthuywebsite
 * Twitter: https://www.twitter.com/bienthuywebsite
 * Youtube : https://www.youtube.com/bienthuywebsite
 * Pinterest: https://www.pinterest.com/bienthuywebsite
 * @ 2023. All Rights Reserved.
 * PHP rewuired: >= 7.x, PHP 8.x recommended
*/
$f = $_SERVER['DOCUMENT_ROOT']; 
function listFolderFiles($dir){
    $ffs = scandir($dir);
    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);
    // prevent empty ordered elements
    if (count($ffs) < 1)
        return;
    echo '<ol>';
    foreach($ffs as $ff){
        echo '<li>'.$ff;
        if(is_dir($dir.'/'.$ff)) {
        		$totalinKB = round(GetDirectorySize($dir.'/'.$ff)/(1024), 2);
        		$totalinMB = round(GetDirectorySize($dir.'/'.$ff)/(1024*1024), 2);
        		$totalinGB = round(GetDirectorySize($dir.'/'.$ff)/(1024*1024*1024), 2);
        		if($totalinKB < 1024 ) { $value = $totalinKB; $label = 'KB';}
        		elseif($totalinKB > 1024 && $totalinKB <= 1024*1024 ) { $value = $totalinMB; $label = 'MB';}
        		elseif($totalinKB > 1024*1024 &&  $totalinKB <= 1024*1024*1024 ) { $value = $totalinGB; $label = 'GB';}
        	echo '<font color="red"> '.$value.' '.$label.' </font>';  listFolderFiles($dir.'/'.$ff) ; }
        echo ' </li>';
    }
    echo '</ol>';
}
function GetDirectorySize($path){
    $bytestotal = 0;
    $path = realpath($path);
    if($path!==false && $path!='' && file_exists($path)){
        foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS)) as $object){
            $bytestotal += $object->getSize();
        }
    }
    return $bytestotal;
}
listFolderFiles($f);
?>