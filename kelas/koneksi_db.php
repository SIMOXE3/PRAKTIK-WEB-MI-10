<?php
class koneksi_db {
    private $db_host = 'localhost';
    private $db_user = 'user';
    private $db_pass = 'root';
    private $db_name = 'database';

    private $conn = false;
    private $hasil = null;

    public function connect() {
        if (!$this->conn) {
            $this->hasil = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

            if ($this->hasil->connect_error) {
                echo "Koneksi gagal: " . $this->hasil->connect_error;
                return false;
            } else {
                $this->conn = true;
                return true;
            }
        } else {
            return true;
        }
    }

    public function getConnection() {
        return $this->hasil;
    }
}
?>
