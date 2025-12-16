<?php
class Database {
    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect(
            "localhost",
            "root",
            "",
            "crud_kopi"
        );

        if (!$this->conn) {
            die("Koneksi database gagal");
        }
    }

    public function query($sql) {
        return mysqli_query($this->conn, $sql);
    }
}
