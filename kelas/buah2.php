<?php
class buah2 {
    public $nama;
    public $warna;
    public $buah;

    public function set_nama($n) {
        $this->nama = $n;
    }

    public function set_warna($b) {
        $this->warna = $b;
    }

    public function set_berat($b) {
        $this->buah = $b;
    }
}

$mango = new buah2();
$mango->set_nama("Mango");
$mango->set_warna("Yellow");
$mango->set_berat("300");

echo "Nama: " . $mango->nama . "<br>";
echo "Warna: " . $mango->warna . "<br>";
echo "Berat: " . $mango->buah . " gram<br>";
