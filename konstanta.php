<?php 

interface Mobil{
    const PLAT = "Plat mobilku adalah AE 2 MA";
    public function gas();
    public function rem();
}

echo Mobil::PLAT;

?>