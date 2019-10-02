<?php
//변수 + 함수 = 캡슐화
//함수->메소드 클래스 안에 있는변수
//변수->프로퍼티 클래스 안에 있는 함수

Class left
{
    public $name;

    //상수 두가지
    const ENGLISH = "en";
    //메소드
    public function greeting(){
        echo "left hello<br>";
    }

    public function daelim()
    {
        echo "대림대학교<br>";
    }
}
