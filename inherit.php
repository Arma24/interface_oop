<?php 

	interface motor{
		public function gas();
		public function rem();
	}

	interface bus extends motor{
		public function ubah_kecepatan();
	}

	class mobil implements bus{
		public function gas(){
			return "Sekarang waktunya gas";
		}
		public function rem(){
			return "Sekarang waktunya rem";
		}
		public function ubah_kecepatan(){
			return "Ubah kecepetanmu sekarang";
		}		
	}

	$mobil_baru = new mobil();
	echo $mobil_baru->ubah_kecepatan();

?>