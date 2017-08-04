<?php 

	class Orang{
		var $nama;
		var $umur;
		var $sekolah;

		function tampilkanNama(){
			return "Nama : Armaningtyas Utami";
		}
		function umur(){
			return "Umur : 17 tahun";
		}
		function sekolah(){
			return "Sekolah : SMK Telkom Malang";
		}
	}

	$orang = new Orang();

	echo $orang->tampilkanNama();
	echo "<br>";
	echo $orang->umur();
	echo "<br>";
	echo $orang->sekolah();

?>