<?php
echo "파일 목록을 출력합니다";
$path = "./";

files("./");

function files($path){

    $files = scandir($path);
    //print_r($files);
    for ($i=0;$i<count($files);$i++){
        if($files[$i]==".git" ||$files[$i]==".."){
            continue;
        }
        if(is_dir($files[$i])){
            echo "<b>".$files[$i]."</b><br>";
            //files($path.$files[$i].DIRECTORY_SEPARATOR);
        }else{
            echo "".$files[$i]."<br>";
        }

    }
}