<?php 

	interface Motor{
		public function gas();
		public function rem();
	}

	interface Bus extends Motor{
		public function ubahKecepatan();
	}

	class Mobil implements Bus{
		public function gas(){
			return "Sekarang waktunya gas";
		}
		public function rem(){
			return "Sekarang waktunya rem";
		}
		public function ubahKecepatan(){
			return "Ubah kecepetanmu sekarang";
		}		
	}

	$mobilBaru = new Mobil();
	echo $mobilBaru->ubahKecepatan();

?>