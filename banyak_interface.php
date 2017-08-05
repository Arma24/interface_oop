<?php 

    interface Motor{
	    public function gas();
	    public function rem();
	}

    interface Mobil{
	    public function ubahKecepatan();
	}

    class Bus implements Motor, Mobil{
	    public function gas(){
		    return "Sekarang waktunya gas";
		}
	    public function rem(){
		    return "Sekarang waktunya rem";
		}
	    public function ubahKecepatan(){
		    return "Ubahlah kecepatanmu sekarang";
		}
	}

    $busBaru = new Bus();
    echo $busBaru->ubahKecepatan();

?>