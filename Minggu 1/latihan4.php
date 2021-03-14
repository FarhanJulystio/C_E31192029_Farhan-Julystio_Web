<?php 

class Game {
    private $judul, 
           $pembuat,
           $penerbit,
           $harga,
           $tahun,
           $diskon = 0;

    public function __construct( $judul = "judul", $pembuat = "pembuat", $penerbit = "penerbit", $harga = 0, $tahun = 0 ) {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->tahun = $tahun;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 75 );
    }

    public function getLabel() {
        return "$this->pembuat, $this->penerbit";
    }

    public function getInfoGame() {
        $str = "Judul : {$this->judul} <br> Pembuat Game : {$this->pembuat} <br> Penerbit : {$this->penerbit} <br> Harga : Rp ".number_format($this->getHarga(), 0, ",", ".")." <br> Tahun Rilis : {$this->tahun}";
        return $str;
    }

}

$game1 = new Game("Persona 4 Golden", "Katsura Hashino", "Atlus, Sega", 264000, 2008);
$game1->setDiskon(11);
echo $game1->getInfoGame();