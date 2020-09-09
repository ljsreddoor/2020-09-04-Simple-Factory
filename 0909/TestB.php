<?php

interface ConcreteFactory
{
    //縫
    public function seamApparel();
    //熨
    public function ironApparel();
}

class Clothes implements ConcreteFactory{

    public function seamApparel(){
        echo '縫衣服';
    }

    public function ironApparel(){
        echo '熨衣服';
    }
}

class Pants implements ConcreteFactory{

    public function seamApparel(){
        echo '縫褲子';
    }

    public function ironApparel(){
        echo '熨褲子';
    }
}

class Sock implements ConcreteFactory{

    public function seamApparel(){
        echo '縫襪子';
    }

    public function ironApparel(){
        echo '縫襪子';
    }
}

class ApparelFactory{

    protected $factory;

    public static function createDrink(string $drink_name){

        switch ($drink_name){
            case 'clothes':
                return new Clothes();
                break;
            case 'pants':
                return new Pants();
                break;
            case 'sock':
                return new Sock();
                break;
            default:
                return new Clothes();
                break;
        }
    }
}

$Obj = ApparelFactory::createDrink('clothes');
$Obj->seamApparel();
echo '<br>';
$Obj->ironApparel();
echo '<br>';
$Obj = ApparelFactory::createDrink('pants');
$Obj->seamApparel();
echo '<br>';
$Obj->ironApparel();
echo '<br>';
$Obj = ApparelFactory::createDrink('sock');
$Obj->seamApparel();
echo '<br>';
$Obj->ironApparel();
echo '<br>';