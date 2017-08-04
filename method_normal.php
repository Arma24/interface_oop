<?php 

	interface motor{
		public function gas();
		public function rem(){
			return "Sekarang waktunya rem";
		}
	}

	class mobil extends motor{
		public function gas(){
			return "Sekarang waktunya gas";
		}
	}

	$mobil_baru = new mobil();

?>