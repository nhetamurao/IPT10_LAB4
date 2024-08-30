<?php

class ATMTransactions{
    public $transactionid;
    public $date;
    public $type;
    public $amount;
    public $postbalance;

    public function modifies(){
        return false;
    }

}
?>