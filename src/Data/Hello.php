<?php 

namespace Prastadev\Data;


class Hello
{

    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function sayHello(string $name){
        echo "hello $name , My Name is $this->name";
    }

    
}





?>