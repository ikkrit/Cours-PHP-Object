<?php


class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct(int $accountNumber) 
    {
        $this->accountNumber = $accountNumber;
    }
    
    public function setBalance($balance) 
    {
        if($balance < 10000) {
            throw new Exception("L'argent pas assez");
        }

        $this->balance = $balance;
    }

    public function getBalance() {
        return $this->balance * 100;
    }
}

$compteBancaireDeHonore = new BankAccount('145214521');
$compteBancaireDeHonore->setBalance(500000);
var_dump($compteBancaireDeHonore->getBalance());