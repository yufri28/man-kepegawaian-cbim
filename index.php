<?php
require_once 'config.php';

$obj = new Connection();
$koneksi = $obj->connectDatabase();
$cek_dafault_admin = "SELECT * FROM auth WHERE level=0";
$result = $koneksi->query($cek_dafault_admin);
if($result->num_rows < 1){
    $password_hash = password_hash("admin",PASSWORD_BCRYPT);
    $insert_default_admin = "INSERT INTO auth (id_auth,username,password,level) VALUES (null,'admin','$password_hash',0)";
    $koneksi->query($insert_default_admin);
    
}
// Mengambil URL yang dikirimkan melalui aturan rewriting
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Mengonversi URL menjadi array dengan memisahkan setiap segment
$urlSegments = explode('/', rtrim($url, '/'));
/// Menentukan halaman yang akan ditampilkan berdasarkan URL
if (empty($urlSegments[0])) {
    // Jika URL kosong, tampilkan redirect ke login
    header("Location: ./auth/login.php");
    exit;
} elseif ($urlSegments[0] === 'admin') {
    // Jika URL dimulai dengan "admin", arahkan ke halaman admin
    if (isset($urlSegments[1])) {
        $adminPage = 'admin/' . $urlSegments[1] . '.php';
        if (file_exists($adminPage)) {
            require_once $adminPage;
        } 
        else {
            header("Location: ../404.php");
            exit;
        }
    } 
    else {
        header("Location: ../404.php");
        exit;
    }
}
else {
    // Jika URL tidak cocok dengan kondisi di atas, tampilkan halaman 404
    header("Location: 404.php");
    exit;
}