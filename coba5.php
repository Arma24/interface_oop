<?php 

	interface Laptop{
		public function mengetik();
		public function mendengarkanMusik();
	}

	class Komputer implements Laptop{
		public function mengetik(){
			return "Saatnya untuk mengetik di komputer";
		}
		public function mendengarkanMusik(){
			return "Saatnya untuk mendengarkan musik di komputer";
		}
	}

	class PersonalComputer implements Laptop{
		public function mengetik(){
			return "Saatnya untuk mengetik di PC";
		}
		public function mendengarkanMusik(){
			return "Saatnya mendengarkan musik di PC";
		}
	}

	$objek = new PersonalComputer();
	$obj = new Komputer();
	echo $objek->mengetik()."<br>";
	echo $objek->mendengarkanMusik()."<br>";
	echo $obj->mengetik()."<br>";
	echo $obj->mendengarkanMusik();

?>