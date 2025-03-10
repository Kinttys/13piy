<?php
// กำหนดขนาดหน่วยความจำเป็น 1GB
ini_set('memory_limit', '1024M');

// โค้ดของคุณ
class DatabaseConnection {
    public $connect;

    public function __construct($servername, $username, $password, $dbname) {
        $this->connect = new mysqli($servername, $username, $password, $dbname);

        if ($this->connect->connect_error) {
            die("Connection failed: " . $this->connect->connect_error);
        }
    }
}

$hyper = new DatabaseConnection("localhost", "root", "Sig3asb0ySixSix888444", "shop_database");
?>
