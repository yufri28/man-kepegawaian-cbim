<?php

define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'detail_kepegawaian'); 

class Connection
{
    public function connectDatabase()
    {
        $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
        if ($conn->connect_error) {
            die("Koneksi database gagal: " . $conn->connect_error);
        }
    
        return $conn;
    }
}

$conn = new Connection();
$koneksi = $conn->connectDatabase();

define('BASE_URL', 'http://localhost/eems/kepegawaian/admin/index.php');

$current_url = $_SERVER['REQUEST_URI'];
$segments = explode('/', trim($current_url, '/'));


?>