<?php

	require "animal.php";

		$sheep = new Animal("shaun", 2, "false");
		
		//$sheep->set_name('shaun');
		echo var_dump($sheep->get_name()); // "shaun"

		//$sheep1->set_legs('2');
		echo "<br>"var_dump($sheep->get_legs()); // 2

		//$sheep2->set_cold_blooded('false');
		echo "<br>"var_dump($sheep->get_cold_blooded()); // false


// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>