<?php

class BankAccount {
	public $balance = 3500;
	//private $_balance
	//protected $_Tbalance
	
	public function DisplayBalance() {
		return $this->balance;
	}
}
$charles = new BankAccount;
echo $charles->DisplayBalance();

?>