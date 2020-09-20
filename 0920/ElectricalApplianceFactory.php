<?php

//電器工廠
interface ElectricalApplianceFactory
{
    //組合
    public function combination();
    //裝箱
    public function boxing();
}

//電視
class Television implements ElectricalApplianceFactory{

    public function combination(){
        echo '組合電視';
    }

    public function boxing(){
        echo '裝箱電視';
    }
}

//風扇
class ElectricFan implements ElectricalApplianceFactory{

    public function combination(){
        echo '組合風扇';
    }

    public function boxing(){
        echo '裝箱風扇';
    }
}

//冰箱
class Refrigerator implements ElectricalApplianceFactory{

    public function combination(){
        echo '組合冰箱';
    }

    public function boxing(){
        echo '裝箱冰箱';
    }
}

class SimpleFactory{

    public static function createApparel(string $electrical_appliance){

        switch ($electrical_appliance){
            case 'television':
                return new Television();
                break;
            case 'electricFan':
                return new ElectricFan();
                break;
            case 'refrigerator':
                return new Refrigerator();
                break;
            default:
                return new Television();
                break;
        }
    }
}

$Obj = SimpleFactory::createApparel('television');
$Obj->combination();
echo '<br>';
$Obj->boxing();
echo '<br>';
$Obj = SimpleFactory::createApparel('electricFan');
$Obj->combination();
echo '<br>';
$Obj->boxing();
echo '<br>';
$Obj = SimpleFactory::createApparel('refrigerator');
$Obj->combination();
echo '<br>';
$Obj->boxing();
echo '<br>';