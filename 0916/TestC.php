<?php

interface BookFactory
{
    //裁切
    public function cropBook();
    //熨
    public function printBook();
}

class Fiction implements BookFactory{

    public function cropBook(){
        echo '裁切小說';
    }

    public function printBook(){
        echo '印刷小說';
    }
}

class Comics implements BookFactory{

    public function cropBook(){
        echo '裁切漫畫';
    }

    public function printBook(){
        echo '印刷漫畫';
    }
}

class Dictionary implements BookFactory{

    public function cropBook(){
        echo '裁切字典';
    }

    public function printBook(){
        echo '印刷字典';
    }
}

class SimpleFactory{

    protected $factory;

    public static function createBook(string $book){

        switch ($book){
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

$Obj = SimpleFactory::createBook('fiction');
$Obj->cropBook();
echo '<br>';
$Obj->printBook();
echo '<br>';
$Obj = SimpleFactory::createBook('comics');
$Obj->cropBook();
echo '<br>';
$Obj->printBook();
echo '<br>';
$Obj = SimpleFactory::createBook('dictionary');
$Obj->cropBook();
echo '<br>';
$Obj->printBook();
echo '<br>';