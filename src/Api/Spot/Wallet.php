<?php

namespace Lin\Gate\Api\Spot;

use Lin\Gate\Request;

class Wallet extends Request
{
    public function getWithdrawStatus(array $data=[]){
        $this->type='GET';
        $this->path='/wallet/withdraw_status';
        $this->data=$data;
        return $this->exec();
    }
}