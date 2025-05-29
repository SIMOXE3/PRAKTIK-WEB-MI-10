<?php
require_once('kelas/Mahasiswa.php');

$mhs1 = new Mahasiswa("Evelyn Putria S");
$mhs1->setNIM("244311040");
$mhs1->setKelas("TRPL 2B");

echo "Nama mahasiswa: " . $mhs1->getNama() . "<br>";
echo "NIM Mahasiswa: " . $mhs1->getNIM() . "<br>";
echo "Kelas: " . $mhs1->getKelas() . "<br>";
?>
