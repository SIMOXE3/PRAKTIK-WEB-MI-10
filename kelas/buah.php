<?php

class Buah
{
    public $nama;
    protected $warna;
    private $berat;

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function setBerat($berat)
    {
        $this->berat = $berat;
    }

    public function display()
    {
        echo "Nama: " . $this->nama . "<br>";
        echo "Warna: " . $this->warna . "<br>";
        echo "Berat: " . $this->berat . " gram<br>";
    }
}

$mango = new Buah();
$mango->nama = 'Mango';
$mango->setWarna('Yellow');
$mango->setBerat('300');
$mango->display();
