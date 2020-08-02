<?php

	require "animal.php";
	require "frog.php";
	require "ape.php";

		$sheep = new Animal("shaun");
		
		echo $sheep->name; // "shaun"
		echo "<br>";

		echo $sheep->legs; // 2
		echo "<br>";

		echo "<br>";
		var_dump($sheep->cold_blooded); // false

		echo "<br>";
		$kodok = new Frog("buduk");
		$kodok->jump();
		echo "<br>";
		echo $kodok->name;

		echo "<br>";
		$sungokong = new Ape("kera sakti");
		$sungokong->yell();


// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>
