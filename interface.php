<?php 

	interface motor{
		public function gas();
		public function rem();
	}

	class mobil implements motor{
		public function gas(){
			return "Sekarang waktunya gas";
		}
		public function rem(){
			return "Sekarang waktunya rem";
		}
	}

	$mobil_baru = new mobil();
	echo $mobil_baru->rem();

?>