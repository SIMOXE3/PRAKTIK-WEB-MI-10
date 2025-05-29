<?php
class Mahasiswa {
    private $nama;
    private $nim;
    private $kelas;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function setNIM($nim) {
        $this->nim = $nim;
    }

    public function setKelas($kelas) {
        $this->kelas = $kelas;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNIM() {
        return $this->nim;
    }

    public function getKelas() {
        return $this->kelas;
    }
}
?>
