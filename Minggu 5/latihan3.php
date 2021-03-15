<?php
	
	include_once ('latihan1.php');
	include_once ('latihan2.php');

	$obj1 = new hitungLuasPersegi(5);
	$obj2 = new hitungLuasSegitiga(2,7);
	$obj3 = new hitungLuasLingkaran(16);

	echo 'Berikut Ini Adalah Hasil Dari Perhitungan Luas Persegi Yaitu Dengan Sisi 5 CM : ';
	echo '<b>' . $obj1 -> hitungLuas() . 'cm<sup>2</sup></b><br />';
	echo 'Berikut Ini Adalah Hasil Dari Perhitungan Luas Segitiga Yaitu Dengan Alas 2 CM Dan Tinggi 7 CM : ';
	echo '<b>' . $obj2 -> hitungLuas() . 'cm<sup>2</sup></b><br />';
	echo 'Berikut Ini Adalah Hasil Dari Perhitungan Luas Lingkaran Yaitu Dengan Jari - Jari 16 CM : ';
	echo '<b>' . $obj3 -> hitungLuas() . 'cm<sup>2</sup></b>';
?>