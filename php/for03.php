<?php
$files = scandir(".");
//print_r($files);
/*for($i=0;$i<count($files);$i++){
    if($files[$i] == "." || $files[$i] == "..")continue;
    //if() continue;
    echo "파일명 = ".$files[$i]."\n";
}*/
foreach ($files as $f){
    if($f == "." || $f == "..")continue;
    echo "파일명 = " .$f."\n";
}