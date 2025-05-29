<?php
require_once('kelas/akunBank.php');

$data1 = new akunBank("001", 10000);
$data1->setNama("Andi");
$data1->tambahUang(5000);
$data1->kurangiUang(2000);

$data2 = new akunBank("002", 20000);
$data2->setNama("Budi");
$data2->kurangiUang(5000);
$data2->tambahUang(3000);

echo "<h3>Data Akun Bank</h3>";
echo $data1->infoAkun() . "<br>";
echo "Pajak 11%: Rp " . number_format($data1->hitungPajak(), 0, ',', '.') . "<br><br>";

echo $data2->infoAkun() . "<br>";
echo "Pajak 11%: Rp " . number_format($data2->hitungPajak(), 0, ',', '.') . "<br>";
?>
