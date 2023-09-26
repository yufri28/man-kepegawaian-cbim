<?php require_once '../config.php';?>
<?php include_once './Classes/Kepegawaian.php';?>
<?php include './templates/header.php';?>

<!-- begin::Notification -->
<?php if (isset($_SESSION['success'])): ?>
<script>
var successfuly = '<?php echo $_SESSION["success"]; ?>';
Swal.fire({
    title: 'Sukses!',
    text: successfuly,
    icon: 'success',
    confirmButtonText: 'OK'
}).then(function(result) {
    if (result.isConfirmed) {
        window.location.href = '';
    }
});
</script>
<?php unset($_SESSION['success']); // Menghapus session setelah ditampilkan ?>
<?php endif; ?>
<?php if (isset($_SESSION['error'])): ?>
<script>
Swal.fire({
    title: 'Error!',
    text: '<?php echo $_SESSION['error']; ?>',
    icon: 'error',
    confirmButtonText: 'OK'
}).then(function(result) {
    if (result.isConfirmed) {
        window.location.href = '';
    }
});
</script>
<?php unset($_SESSION['error']); // Menghapus session setelah ditampilkan ?>
<?php endif; ?>
<!-- end::Notification -->

<?php 

if (isset($_GET['page'])) {
    $hal = $_GET['page'];
    switch ($hal) {
        case 'kepegawaian-detail':
            include "./detail_pegawai.php";
            break; 
        case 'kepegawaian-tambah':
            include "./tambah_pegawai.php";
            break; 
        case 'kepegawaian-edit':
            include "./edit_pegawai.php";
            break; 
        case 'kepegawaian-lihat':
            include "./lihat_pegawai.php";
            break; 
        case '404':
            include "./404.php";
            break; 
        default:
            // Tampilkan halaman 404
            include "./404.php";
            break;
    }
} else {
    include "./home.php";
}

?>
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<?php 
// require './templates/drawers.php';
?>
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--begin::Modals-->
<!--begin::Modal - Create App-->
<?php require './templates/modals.php';?>
<!--end::Modal - Select Location-->
<!--end::Modals-->
<?php require './templates/footer.php';?>