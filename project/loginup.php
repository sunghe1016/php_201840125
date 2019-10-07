<?php

session_start();
$_SESSION["username"]="대남이"; //해킹 안됨

setcookie("mynum","201840125",time()+(86400*30),"/"); //해킹됨
