<?php 

interface Laptop{
    public function klik();
}

class Laptop implements Laptop{
    public function klik(){
	    return "Klik pada laptop";
	}
}

//error karena nama class tidak boleh sama dengan nama interfacenya

?>