<?php
//선언
class Table
{
    public $table_name;

    public function __construct($database)
    {
        echo "테이블 클래스 생성 ";
        $this->Database = $database;
    }

    public function createTable()
    {
        echo "테이블을 생성합니다 "
        $query = " CREATE TABLE `members1` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        ";
        //`LastName` varchar(255),
        //`FirstName` varchar(255),

        PRIMARY KEY(`id`)
        ) ENGINE=innodb default charset=utf8;

        mysqli_query($this->Database->connect, $query);
    }
}