<?php

class BankAccount {
	public $balance = 0;
	public $type = "";
	
	public function SetType($input) {
		$this->type = $input;
	}
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
class SavingsAccount extends BankAccount{
	//public $type = "18-25";
}

$charles = new BankAccount;
$charles->Deposit(100);
$charles->Withdraw(30);
$charles->SetType("18-25 Current");


$charles_savings = new SavingsAccount;
$charles_savings->Deposit(3000);
$charles_savings->SetType("Super Saver");

echo $charles->type." has ". $charles->DisplayBalance().'<br>';
echo $charles_savings->type.' has '.$charles_savings->DisplayBalance();

/* echo $charles->DisplayBalance()."<br>";
echo $charles_savings->DisplayBalance(); */

?>