<?php

interface ConcreteFactory
{
    //裁切
    public function cropBook();
    //熨
    public function printBook();
}

class Fiction implements ConcreteFactory{

    public function cropBook(){
        echo '裁切小說';
    }

    public function printBook(){
        echo '印刷小說';
    }
}

class Comics implements ConcreteFactory{

    public function cropBook(){
        echo '裁切漫畫';
    }

    public function printBook(){
        echo '印刷漫畫';
    }
}

class Dictionary implements ConcreteFactory{

    public function cropBook(){
        echo '裁切字典';
    }

    public function printBook(){
        echo '印刷字典';
    }
}

class ApparelFactory{

    protected $factory;

    public static function createDrink(string $drink_name){

        switch ($drink_name){
            case 'fiction':
                return new Fiction();
                break;
            case 'comics':
                return new Comics();
                break;
            case 'dictionary':
                return new Dictionary();
                break;
            default:
                return new Fiction();
                break;
        }
    }
}

$Obj = ApparelFactory::createDrink('fiction');
$Obj->cropBook();
echo '<br>';
$Obj->printBook();
echo '<br>';
$Obj = ApparelFactory::createDrink('comics');
$Obj->cropBook();
echo '<br>';
$Obj->printBook();
echo '<br>';
$Obj = ApparelFactory::createDrink('dictionary');
$Obj->cropBook();
echo '<br>';
$Obj->printBook();
echo '<br>';