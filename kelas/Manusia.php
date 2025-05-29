<?php
class Manusia {
    private $nama;
    private $nik = "244311040";
    private $umur;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setNIK($nik) {
        $this->nik = $nik;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNIK() {
        return $this->nik;
    }

    public function getUmur() {
        return $this->umur;
    }
}
?>
