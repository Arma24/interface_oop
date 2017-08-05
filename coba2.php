<?php 

interface IniRumus{
    public function luasPersegi();
    public function luasSegitiga();
    public function luasLingkaran();
}

class Rumus implements IniRumus{
    public function luasPersegi(){
	    return "Ini adalah luas persegi";
	}

    public function luasSegitiga(){
	    return "Ini adalah luas segitiga";
	}

    public function luasLingkaran(){
	    return "Ini adalah luas lingkaran";
	}
}

$rumus = new Rumus;
echo $rumus->luasPersegi()."<br>";
echo $rumus->luasSegitiga()."<br>";
echo $rumus->luasLingkaran()."<br>";

?>