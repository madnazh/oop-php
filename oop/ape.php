<?php

	require "animal.php";

		$sungokong = new Ape("kera sakti",2,"false");
		

		echo var_dump($sungokong->get_name());

		
		echo "<br>"var_dump($sungokong->get_legs());

		
		echo "<br>"var_dump($sungokong->get_cold_blooded());
		
	
?>