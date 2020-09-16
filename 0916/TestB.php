<?php

interface ApparelFactory
{
    //縫
    public function seamApparel();
    //熨
    public function ironApparel();
}

class Clothes implements ApparelFactory{

    public function seamApparel(){
        echo '縫衣服';
    }

    public function ironApparel(){
        echo '熨衣服';
    }
}

class Pants implements ApparelFactory{

    public function seamApparel(){
        echo '縫褲子';
    }

    public function ironApparel(){
        echo '熨褲子';
    }
}

class Sock implements ApparelFactory{

    public function seamApparel(){
        echo '縫襪子';
    }

    public function ironApparel(){
        echo '縫襪子';
    }
}

class SimpleFactory{

    protected $factory;

    public static function createApparel(string $apparel){

        switch ($apparel){
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

$Obj = SimpleFactory::createApparel('clothes');
$Obj->seamApparel();
echo '<br>';
$Obj->ironApparel();
echo '<br>';
$Obj = SimpleFactory::createApparel('pants');
$Obj->seamApparel();
echo '<br>';
$Obj->ironApparel();
echo '<br>';
$Obj = SimpleFactory::createApparel('sock');
$Obj->seamApparel();
echo '<br>';
$Obj->ironApparel();
echo '<br>';