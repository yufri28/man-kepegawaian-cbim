<?php
// Konfigurasi database
define('DB_HOST', 'localhost'); // Ganti dengan host database Anda
define('DB_USERNAME', 'root'); // Ganti dengan username database Anda
define('DB_PASSWORD', ''); // Ganti dengan password database Anda
define('DB_NAME', 'detail_kepegawaian'); // Ganti dengan nama database Anda

// Fungsi untuk menghubungkan ke database

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

define('BASE_URL', 'http://localhost/kepegawaian/');

// Mendapatkan URL saat ini
$current_url = $_SERVER['REQUEST_URI'];

// Membagi URL menjadi segmen berdasarkan tanda "/" sebagai delimiter
$segments = explode('/', trim($current_url, '/'));


?>