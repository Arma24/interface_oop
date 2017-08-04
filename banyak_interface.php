<?php 

	interface motor{
		public function gas();
		public function rem();
	}

	interface mobil{
		public function ubah_kecepatan();
	}

	class bus implements motor, mobil{
		public function gas(){
			return "Sekarang waktunya gas";
		}
		public function rem(){
			return "Sekarang waktunya rem";
		}
		public function ubah_kecepatan(){
			return "Ubahlah kecepatanmu sekarang";
		}
	}

	$bus_baru = new bus();
	echo $bus_baru->ubah_kecepatan();

?>