<?php
$layout = file_get_contents("../theme/index.html");
$filename =  $_SERVER['REQUEST_URI'].".html";

if(file_exists("../".$filename)){
    $body = file_get_contents("../".$filename);
    $layout = str_replace("{{main}}",$body,$layout);
} else{
    $body = file_get_contents("../home.html");
    $layout = str_replace("{{main}}",$body,$layout);
}

echo $layout;






/*echo "내가 처음이지";
$filename =  $_SERVER['REQUEST_URI'].".html";
echo $filename. "을 읽어옵니다.";

$body = file_get_contents("../".$filename);
echo $body;
