<?php

class Circle {
	const pi = 3.14159;
	public function Area($radius) {
		return self::pi * ($radius**2);
	}
}

//echo Circle::pi;
$circle = new Circle;
echo $circle->Area(100);
?>