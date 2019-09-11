<?php
$filename = "for01.php";
$fp = fopen($filename,"r");

$count = 0;
while(!feof($fp)){
    $doller = fgetc($fp);
    if($doller == "$") $count++;
}
fclose($fp);
echo "소스에 $ 기호가 ".$count." 있습니다";
