<?php

Class right
{
    public $name;
    public function greeting(){
        echo "right hello : ". $this->name . "<br>";
        return $this;
    }

    public function daelim()
    {
        echo "대림대학교";
        return $this;
    }

    public function foo(){
        echo "바보야<br>";

    }
}
