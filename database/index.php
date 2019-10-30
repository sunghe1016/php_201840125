<?php

//윈도우 운영체제 : 파일명 대소문자 구분 없음
//리눅스 운영체제 : 대소문자 구분 있음
$config = include "dbconf.php";
require "database.php";
require "table.php";
    
$db = new Database($config);

//테이블 객체 생성해서 연결
$db->setTable(new Table($db))->getTable()->createTable();//연결된 객체 읽음


if($db->isTable("members")){
    echo "테이블이 존재합니다";
}else{
    echo "테이블이 존재하지않습니다";
}



/*
$query = "
CREATE TABLE `members` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `LastName` varchar(255),
    `FirstName` varchar(255),
    PRIMARY KEY(`id`)
    ) ENGINE=innodb default charset=utf8;
";
*/