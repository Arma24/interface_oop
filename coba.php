<?php 

	class orang{
		var $nama;
		var $umur;
		var $sekolah;

		function tampilkan_nama(){
			return "Nama : Armaningtyas Utami";
		}
		function umur(){
			return "Umur : 17 tahun";
		}
		function sekolah(){
			return "Sekolah : SMK Telkom Malang";
		}
	}

	$orang = new orang();

	echo $orang->tampilkan_nama();
	echo "<br>";
	echo $orang->umur();
	echo "<br>";
	echo $orang->sekolah();

?>