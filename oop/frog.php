<?php
	
	require "animal.php";

		$kodok = new Frog("buduk",4,"true");
		

		
		echo var_dump($kodok->get_name());

		
		echo "<br>"var_dump($kodok->get_legs());

		
		echo "<br>"var_dump($kodok->get_cold_blooded());


		

?>