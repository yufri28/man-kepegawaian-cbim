<?php 
session_start();
include_once './Classes/Kepegawaian.php';

// begin::create, update and delete pegawai
if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(isset($_POST['add_pegawai']))
    {
        $nik = htmlspecialchars($_POST['nik']);
        $retirement_date = htmlspecialchars($_POST['retirement_date']);
        $join_date = htmlspecialchars($_POST['join_date']);
        $status = htmlspecialchars($_POST['status']);
        $active_passive = htmlspecialchars($_POST['active_passive']);
        $sk_tetap = htmlspecialchars($_POST['sk_tetap']);
        $pkwt = htmlspecialchars($_POST['pkwt']);
        $tahun = htmlspecialchars($_POST['tahun']);
        $dataPegawai = [
            'nik' => $nik,
            'retirement_date' => $retirement_date,
            'join_date' => $join_date,
            'status' => $status,
            'active_passive' => $active_passive,
            'sk_tetap' => $sk_tetap,
            'pkwt' => $pkwt,
            'tahun' => $tahun
        ];
        $Kepegawaian->add($dataPegawai);
           
    }
    // end::create
    // begin::update
    elseif(isset($_POST['update_pegawai']))
    {
        $id = htmlspecialchars($_POST['id']);
        $retirement_date = htmlspecialchars($_POST['retirement_date']);
        $join_date = htmlspecialchars($_POST['join_date']);
        $status = htmlspecialchars($_POST['status']);
        $active_passive = htmlspecialchars($_POST['active_passive']);
        $sk_tetap = htmlspecialchars($_POST['sk_tetap']);
        $pkwt = htmlspecialchars($_POST['pkwt']);
        $tahun = htmlspecialchars($_POST['tahun']);
       
        $dataPegawai = [
            'id' => $id,
            'retirement_date' => $retirement_date,
            'join_date' => $join_date,
            'status' => $status,
            'active_passive' => $active_passive,
            'sk_tetap' => $sk_tetap,
            'pkwt' => $pkwt,
            'tahun' => $tahun
        ];
        $Kepegawaian->update($dataPegawai);
    }
    // end::update
    // begin::delete
    if(isset($_POST['delete_pegawai']))
    {
        $idd_karyawan = htmlspecialchars($_POST['idd_karyawan']);
        $id = htmlspecialchars($_POST['id']);
        $foto = htmlspecialchars($_POST['foto']);
        $Kepegawaian->delete($idd_karyawan,$id,$foto);
    }

    if(isset($_POST['notif']) && $_POST['notif'] === 'true'){
        // Kode yang akan dijalankan jika notif bernilai true
        $jumlah_notif = $Kepegawaian->count_notifikasi();
        $data_notif = $Kepegawaian->get_notifikasi();
        $response = array(
            'jumlah_notifikasi' => $jumlah_notif,
            'dataNotif' => $data_notif
        );
    
        // Mengembalikan respons dalam format JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    } 
}
// end::create, update and delete pegawai
?>