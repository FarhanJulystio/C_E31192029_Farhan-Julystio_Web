<?php
	
	include_once ('latihan1.php');

	class hitungLuasPersegi implements luasbangundatar {
		private $sisi;

		public function __construct($sisi)
		{
			$this -> sisi = $sisi;
		}

		public function hitungLuas ()
		{
			return pow($this -> sisi , 2);
		}
	}

	class hitungLuasSegitiga implements luasbangundatar {
		private $alas;
		private $tinggi;

		public function __construct($alas,$tinggi)
		{
			$this -> alas = $alas;
			$this -> tinggi = $tinggi;
		}

		public function hitungLuas()
		{
			return $this -> alas * $this -> tinggi / 2;
		}
	}

	class hitungLuasLingkaran implements luasbangundatar{
		private $jarijari;

		public function __construct($jarijari)
		{
			$this -> jarijari = $jarijari;
		}

		public function hitungLuas()
		{
			return pi() * pow($this -> jarijari , 2);
		}
	}

?>