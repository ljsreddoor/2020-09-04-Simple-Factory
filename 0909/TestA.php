<?php

interface ConcreteFactory
{
    //裝飲料
    public function fillingDrink();
    //倒飲料
    public function pourDrink();
}

class Water implements ConcreteFactory{

    public function fillingDrink(){
        echo '裝滿水';
    }

    public function pourDrink(){
        echo '裝掉水';
    }
}

class Juice implements ConcreteFactory{

    public function fillingDrink(){
        echo '裝滿果汁';
    }

    public function pourDrink(){
        echo '裝掉果汁';
    }
}

class Wine implements ConcreteFactory{

    public function fillingDrink(){
        echo '裝滿酒';
    }

    public function pourDrink(){
        echo '裝掉酒';
    }
}

class DrinkFactory{

    protected $factory;

    public static function createDrink(string $drink_name){

        switch ($drink_name){
            case 'water':
                return new Water();
                break;
            case 'juice':
                return new Juice();
                break;
            case 'wine':
                return new Wine();
                break;
            default:
                return new Water();
                break;
        }
    }
}

$Obj = DrinkFactory::createDrink('water');
$Obj->fillingDrink();
echo '<br>';
$Obj->pourDrink();
echo '<br>';
$Obj = DrinkFactory::createDrink('wine');
$Obj->fillingDrink();
echo '<br>';
$Obj->pourDrink();
echo '<br>';
$Obj = DrinkFactory::createDrink('juice');
$Obj->fillingDrink();
echo '<br>';
$Obj->pourDrink();
echo '<br>';