<?php
//1단계 선언
class foo
{
    //변수, 함수
    public $name; //프로퍼티
    public static $daelim = "대림대학교";

    public function hello()
    {
        echo self::$daelim.">> ";
        echo $this->name . "짱이에용<br>";
        //echo self::$name. "일까요?";
        return $this;
    }
    public function greeting()
    {
        echo $this->name . "반가와용<br>";
        //echo self::$name. "일까요?";
        return $this;
    }
}

//2단계 생성
$obj1 = new foo;
$obj1->name = "대림이";//객체 프러퍼티 값을 저장
$obj1->hello();

$obj2 = new foo;
$obj2->name = "대숙이";
$obj2->hello();

foo::$daelim = "우주최강";
$obj1->hello();
$obj2->hello();


/*
//3단계 호출
$result = $obj->hello();
$result->hello()->greeting();

echo "====<br>";

$obj2 = new foo;
$obj->name = "대숙이";

class bar
{
    public static function username(){
        echo self::$name. "입니다";
    }
}

bar::$name = "고정값";
bar::username();