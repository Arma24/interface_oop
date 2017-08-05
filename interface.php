<?php 

interface Motor{
    public function gas();
    public function rem();
}

class Mobil implements Motor{
    public function gas(){
	    return "Sekarang waktunya gas";
	}
    public function rem(){
	    return "Sekarang waktunya rem";
	}
}

$mobilBaru = new Mobil();
echo $mobilBaru->rem();

?>