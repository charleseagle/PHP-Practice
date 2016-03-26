<?php

class Example {
	public function __construct($something) {
		$this->SaySomething($something); //calling the below method
	}
	public function SaySomething($something) {
		echo $something;
	}
	
}
$example = new Example("Some text.");
//$example->SaySomething();
?>