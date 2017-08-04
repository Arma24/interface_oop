<?php 

	interface iniRumus{
		public function luas_persegi();
		public function luas_segitiga();
		public function luas_lingkaran();
	}

	class rumus implements iniRumus{
		public function luas_persegi(){
			return "Ini adalah luas persegi";
		}

		public function luas_segitiga(){
			return "Ini adalah luas segitiga";
		}

		public function luas_lingkaran(){
			return "Ini adalah luas lingkaran";
		}
	}

	$rumus = new Rumus;
	echo $rumus->luas_persegi()."<br>";
	echo $rumus->luas_segitiga()."<br>";
	echo $rumus->luas_lingkaran()."<br>";

?>