<?php 

    interface Motor{
	    public function gas();
	    public function rem(){
		    return "Sekarang waktunya rem";
		}
	}

    class Mobil extends Motor{
	    public function gas(){
		    return "Sekarang waktunya gas";
		}
	}

    $mobilBaru = new Mobil();

?>