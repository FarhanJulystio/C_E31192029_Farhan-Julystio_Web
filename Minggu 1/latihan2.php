<?php

class Kendaraan {
    public $nama,
        $jenis,
        $jumlah_roda,
        $merk,
        $bahan_bakar,
        $harga,
        $tahun_pembuatan;

    public function __construct($nama = "Nama Kendaraan", $jenis = "Jenis Kendaraan", $jumlah_roda = 0, $merk = "Merk Kendaraan", $bahan_bakar = "Bahan Bakar Kendaraan", $harga = "Harga Kendaraan", $tahun_pembuatan = 0) {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->jumlah_roda = $jumlah_roda;
        $this->merk = $merk;
        $this->bahan_bakar = $bahan_bakar;
        $this->harga = $harga;
        $this->tahun_pembuatan = $tahun_pembuatan;
    }

    public function getStatusSubsidi() {
        $subsidi = "Tidak";
        if ($this->bahan_bakar === "Premium" && $this->tahun_pembuatan <= 2005) {
            $subsidi = "Ya";
        } 
        return $subsidi;
    }
}

class CetakInfoKendaraan {
    public function infoKendaraan( Kendaraan $info ) {
        $str = "Nama : {$info->nama} <br> Jenis : {$info->jenis} <br> Jumlah Roda : {$info->jumlah_roda} <br> Merk : {$info->merk} <br> Bahan Bakar : {$info->bahan_bakar} <br> Harga : Rp ".number_format($info->harga, 0, ",", ".")." <br> Tahun Pembuatan : {$info->tahun_pembuatan}";
        return $str;
    }

    public function infoSubsidi( Kendaraan $info ) {
        $str = "Status Subsidi BBM : {$info->getStatusSubsidi()}";
        return $str;
    }
}

$kendaraan1 = new Kendaraan("Fortuner 2,4 G MT", "Mobil", 4, "Toyota", "diesel", 512000000, 2017);
$info_kendaraan1 = new CetakInfoKendaraan();
echo $info_kendaraan1->infoKendaraan($kendaraan1);
echo "<br>";
echo $info_kendaraan1->infoSubsidi($kendaraan1);

echo "<br><br>";

$kendaraan2 = new Kendaraan("XSR 155", "Sepeda Motor", 2, "Yamaha", "Premium", 36000000, 2019);
$info_kendaraan2 = new CetakInfoKendaraan();
echo $info_kendaraan2->infoKendaraan($kendaraan2);
echo "<br>";
echo $info_kendaraan2->infoSubsidi($kendaraan2);