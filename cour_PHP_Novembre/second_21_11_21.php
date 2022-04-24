<?php

class BankAccount {
    public $accountNumber;
    public $balance = 0;

    public function __construct(int $accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }
    public function setBalance(int $balance) {
        if($balance < 10000) {
            throw new Exception("Pas assez argent");
        } 
        $this->balance = $balance;
    }
    public function getBalance() {
        return $this->balance * 100;
    }
}

$compteBancaireDeHonore = new BankAccount("4541271767");
$compteBancaireDeHonore->setBalance(10000);
var_dump($compteBancaireDeHonore->getBalance());