<?php

class SlotBalance{

    private $spin;

    public function __construct(Spin $spin){
        $this->spin = $spin;
    }

    public function setSpin (Spin $spin){
        $this->spin = $spin;
    }

    public function getBalanceSpin():void{
        echo "Slot Balance: select a spin \n";
        $result = $this->spin->doAlgorithm();
        echo $result . "\n";
    }
}

interface Spin{

    public function doAlgorithm():string;
}

class GetVeryLowBalance implements Spin{

    public function doAlgorithm():string{
        return "Here is very low win cash spin \n";
    }
}

class GetGoodBalance implements Spin{

    public function doAlgorithm():string{
        return "Here is good win cash spin \n";
    }
}

$slotMachine = new SlotBalance(new GetVeryLowBalance());
echo "Client: Slot balance set to very low cash prize";
$slotMachine->getBalanceSpin();

echo "\n";

echo "Client: Slot balance set to good cash prize";
$slotMachine->setSpin(new GetGoodBalance());
$slotMachine->getBalanceSpin();


?>