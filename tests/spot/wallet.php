<?php

use Lin\Gate\GateSpot;

require __DIR__ .'../../../vendor/autoload.php';


$gate=new GateSpot();

print_r($gate->wallet()->getWithdrawStatus(['currency'=>'BTC']));