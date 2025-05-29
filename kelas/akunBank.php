<?php
class akunBank {
    protected $accountNumber;
    protected $jmlUang;
    protected $nama;

    public function __construct($nomorAkun, $nominal) {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function tambahUang($jumlah) {
        $this->jmlUang += $jumlah;
    }

    public function kurangiUang($jumlah) {
        if ($jumlah <= $this->jmlUang) {
            $this->jmlUang -= $jumlah;
        } else {
            echo "Saldo tidak mencukupi.<br>";
        }
    }

    public function tampilkanSaldo() {
        return $this->jmlUang;
    }

    public function hitungPajak() {
        return $this->jmlUang * 0.11;
    }

    public function infoAkun() {
        return "Nama: $this->nama | No. Akun: $this->accountNumber | Saldo: Rp " . number_format($this->jmlUang, 0, ',', '.');
    }
}
?>
