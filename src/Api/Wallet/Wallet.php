<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Gate\Api\Wallet;

use Lin\Gate\Request;

class Wallet extends Request
{
    /**
     * GET /wallet/deposit_address
     * */
    public function getDepositAddress(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/wallet/deposit_address';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /wallet/withdraw_status
     * */
    public function getWithdrawStatus(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/wallet/withdraw_status';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /wallet/deposits
     * */
    public function getDeposits(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/wallet/deposits';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST /wallet/transfers
     * */
    public function postTransfers(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/wallet/transfers';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST /wallet/sub_account_transfers
     * */
    public function postSubAccountTransfers(array $data=[]){
        $this->type='POST';
        $this->path='/api/v4/wallet/sub_account_transfers';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /wallet/sub_account_transfers
     * */
    public function getSubAccountTransfers(array $data=[]){
        $this->type='GET';
        $this->path='/api/v4/wallet/sub_account_transfers';
        $this->data=$data;
        return $this->exec();
    }

    public function getAssetsChains(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/v4/wallet/currency_chains';
        $this->data=$data;
        return $this->exec();
    }

    public function getAssetsFee(array $data=[])
    {
        $this->type='GET';
        $this->path='/api/v4/wallet/withdraw_status';
        $this->data=$data;
        return $this->exec();
    }
}