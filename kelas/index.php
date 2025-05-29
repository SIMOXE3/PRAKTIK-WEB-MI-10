<?php
require_once('manusia.php');

// $andi = new Manusia();
// $andi->setNama("Andi Pratama")

$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setNIK("1234567890123456");
$budi->setUmur(25);
    
echo "Nama Lengkap: " . $budi->getNama() . "<br>";
echo "NIK: " . $budi->getNIK() . "<br>";
echo "Umur: " . $budi->getUmur() . " tahun<br><br>";

$saya = new Manusia();
$saya->setNama("Evelyn Putria S");
$saya->setNIK("244311040");
$saya->setUmur(20);

echo "Nama Lengkap: " . $saya->getNama() . "<br>";
echo "NIK: " . $saya->getNIK() . "<br>";
echo "Umur: " . $saya->getUmur() . " tahun<br><br>";

echo "<strong>Kesimpulan:</strong> <br>";
echo "Class Manusia memungkinkan penyimpanan data identitas seperti nama, NIK, dan umur.<br>";
echo "Dengan menggunakan getter dan setter, data dapat diatur dan diambil secara terkontrol.";
?>
