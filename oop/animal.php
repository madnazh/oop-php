<?php


	class animal
	{	
		public $name;
		public $legs;
		public $cold_blooded;
		public $yell;
		public $jump;

		public function __construct($name, $legs, $cold_blooded, $yell, $jump){
			$this->name = $name;
			$this->legs = $legs;
			$this->cold_blooded = $cold_blooded;
			$this->yell = $yell
			$this->jump = $jump

		}
		

		public function set_Name($name){
			$this->name = $name;
			
		}
		public function get_Name(){
			return $this->name;
			
		}


		public function set_Legs($legs){
			 $this->legs = $legs;
		}	

		public function get_Legs(){
			 return $this->legs;
		}


		public function set_cold_blooded(){
			 $this->cold_blooded = $cold_blooded;
		}	

		public function get_cold_blooded(){
			 return $this->cold_blooded;
		}

		
	}

	class animal_ape extends animal
	{	


		public function get_yell() {
			echo "Auooo";
			}
	}


	class animal_frog extends animal
	{	


		public function get_jump(){
			echo "hop hop";
			}

	}



?> 