<?php 

	interface laptop{
		public function mengetik();
		public function mendengarkan_musik();
	}

	class komputer implements laptop{
		public function mengetik(){
			return "Saatnya untuk mengetik di komputer";
		}
		public function mendengarkan_musik(){
			return "Saatnya untuk mendengarkan musik di komputer";
		}
	}

	class pc implements laptop{
		public function mengetik(){
			return "Saatnya untuk mengetik di PC";
		}
		public function mendengarkan_musik(){
			return "Saatnya mendengarkan musik di PC";
		}
	}

	$objek = new pc();
	$obj = new komputer();
	echo $objek->mengetik()."<br>";
	echo $objek->mendengarkan_musik()."<br>";
	echo $obj->mengetik()."<br>";
	echo $obj->mendengarkan_musik();

?>