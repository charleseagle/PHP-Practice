<?php

class BankAccount {
	public $balance = 0;
	
	public function DisplayBalance() {
		return "Balance: ".$this->balance;
	}
	
	public function Withdraw($amount) {
		if ($this->balance < $amount) {
			echo "Not enough money.<br>";
		}
		else {
			$this->balance = $this->balance - $amount;
		}
		
	}
	public function Deposit($amount) {
		$this->balance = $this->balance + $amount;
	}
}

// new instane of class
$charles = new BankAccount;
$alex = new BankAccount;
//Deposit money
$charles->Deposit(13000);
$alex->Deposit(3000);
//Withdraw money
$charles->Withdraw(1200);
$alex->Withdraw(100);
//display the balance
echo $charles->DisplayBalance()."<br>";
echo $alex->DisplayBalance();

?>