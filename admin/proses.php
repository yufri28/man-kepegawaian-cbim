<?php 
session_start();
include_once './Classes/Kepegawaian.php';

// begin::create, update and delete pegawai
if($_SERVER["REQUEST_METHOD"] == "POST")
{
       
    if(isset($_POST['add_pegawai']))
    {
        $nama_karyawan = htmlspecialchars($_POST['nama_karyawan']);
        $nik = htmlspecialchars($_POST['nik']);
        $agama = htmlspecialchars($_POST['agama']);
        $alamat_ktp = htmlspecialchars($_POST['alamat_ktp']);
        $alamat_sekarang = htmlspecialchars($_POST['alamat_sekarang']);
        $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
        $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
        $nik_ktp = htmlspecialchars($_POST['nik_ktp']);
        $email = htmlspecialchars($_POST['email']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
        $no_telepon = htmlspecialchars($_POST['no_telepon']);
        $akun = NULL;
        // $akun = htmlspecialchars($_POST['akun']);
        $status_hubungan = htmlspecialchars($_POST['status_hubungan']);
        $jenis_karyawan = htmlspecialchars($_POST['jenis_karyawan']);
        $pendidikan_tertinggi = htmlspecialchars($_POST['pendidikan_tertinggi']);
        $retirement_date = htmlspecialchars($_POST['retirement_date']);
        $join_date = htmlspecialchars($_POST['join_date']);
        $status = htmlspecialchars($_POST['status']);
        $active_passive = htmlspecialchars($_POST['active_passive']);
        $sk_tetap = htmlspecialchars($_POST['sk_tetap']);
        $pkwt = htmlspecialchars($_POST['pkwt']);

        // Pastikan ada file gambar yang diunggah
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
            $namaFile = $_FILES['foto']['name'];
            $lokasiSementara = $_FILES['foto']['tmp_name'];
            
            // Tentukan lokasi tujuan penyimpanan
            $targetDir = '../img/uploads/foto_pegawai/';
            $targetFilePath = $targetDir . $namaFile;

            // Cek apakah nama file sudah ada dalam direktori target
            if (file_exists($targetFilePath)) {
                $fileInfo = pathinfo($namaFile);
                $baseName = $fileInfo['filename'];
                $extension = $fileInfo['extension'];
                $counter = 1;

                // Loop hingga menemukan nama file yang unik
                while (file_exists($targetFilePath)) {
                    $namaFile = $baseName . '_' . $counter . '.' . $extension;
                    $targetFilePath = $targetDir . $namaFile;
                    $counter++;
                }
            }

            // Pindahkan file gambar dari lokasi sementara ke lokasi tujuan
            if (move_uploaded_file($lokasiSementara, $targetFilePath)) {
                $dataPegawai = [
                        'nama_karyawan' => $nama_karyawan,
                        'nik' => $nik,
                        'agama' => $agama,
                        'alamat_ktp' => $alamat_ktp,
                        'alamat_sekarang' => $alamat_sekarang,
                        'tempat_lahir' => $tempat_lahir,
                        'tanggal_lahir' => $tanggal_lahir,
                        'nik_ktp' => $nik_ktp,
                        'email' => $email,
                        'jenis_kelamin' => $jenis_kelamin,
                        'no_telepon' => $no_telepon,
                        'akun' => $akun,
                        'status_hubungan' => $status_hubungan,
                        'jenis_karyawan' => $jenis_karyawan,
                        'pendidikan_tertinggi' => $pendidikan_tertinggi,
                        'retirement_date' => $retirement_date,
                        'join_date' => $join_date,
                        'status' => $status,
                        'active_passive' => $active_passive,
                        'sk_tetap' => $sk_tetap,
                        'pkwt' => $pkwt,
                        'foto' => $namaFile
                ];
                $Kepegawaian->add($dataPegawai);
            } else {
                return $_SESSION['error'] = 'Tidak ada data yang dikirim!';
            }
        } else{
            $dataPegawai = [
                    'nama_karyawan' => $nama_karyawan,
                    'nik' => $nik,
                    'agama' => $agama,
                    'alamat_ktp' => $alamat_ktp,
                    'alamat_sekarang' => $alamat_sekarang,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'nik_ktp' => $nik_ktp,
                    'email' => $email,
                    'jenis_kelamin' => $jenis_kelamin,
                    'no_telepon' => $no_telepon,
                    'akun' => $akun,
                    'status_hubungan' => $status_hubungan,
                    'jenis_karyawan' => $jenis_karyawan,
                    'pendidikan_tertinggi' => $pendidikan_tertinggi,
                    'retirement_date' => $retirement_date,
                    'join_date' => $join_date,
                    'status' => $status,
                    'active_passive' => $active_passive,
                    'sk_tetap' => $sk_tetap,
                    'pkwt' => $pkwt,
                    'foto' => NULL
                ];
            $Kepegawaian->add($dataPegawai);
        }
    }
    // end::create
    // begin::update
    elseif(isset($_POST['update_pegawai']))
    {
        $id = htmlspecialchars($_POST['id']);
        $idd_karyawan = htmlspecialchars($_POST['idd_karyawan']);
        $nama_karyawan = htmlspecialchars($_POST['nama_karyawan']);
        $nik = htmlspecialchars($_POST['nik']);
        $agama = htmlspecialchars($_POST['agama']);
        $alamat_ktp = htmlspecialchars($_POST['alamat_ktp']);
        $alamat_sekarang = htmlspecialchars($_POST['alamat_sekarang']);
        $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
        $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
        $nik_ktp = htmlspecialchars($_POST['nik_ktp']);
        $email = htmlspecialchars($_POST['email']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
        $no_telepon = htmlspecialchars($_POST['no_telepon']);
        $akun = NULL;
        // $akun = htmlspecialchars($_POST['akun']);
        $status_hubungan = htmlspecialchars($_POST['status_hubungan']);
        $jenis_karyawan = htmlspecialchars($_POST['jenis_karyawan']);
        $pendidikan_tertinggi = htmlspecialchars($_POST['pendidikan_tertinggi']);
        $retirement_date = htmlspecialchars($_POST['retirement_date']);
        $join_date = htmlspecialchars($_POST['join_date']);
        $status = htmlspecialchars($_POST['status']);
        $active_passive = htmlspecialchars($_POST['active_passive']);
        $sk_tetap = htmlspecialchars($_POST['sk_tetap']);
        $pkwt = htmlspecialchars($_POST['pkwt']);

        // Pastikan ada file gambar yang diunggah
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
            $namaFile = $_FILES['foto']['name'];
            $lokasiSementara = $_FILES['foto']['tmp_name'];
            
            // Tentukan lokasi tujuan penyimpanan
            $targetDir = '../img/uploads/foto_pegawai/';
            $targetFilePath = $targetDir . $namaFile;

            // Cek apakah nama file sudah ada dalam direktori target
            if (file_exists($targetFilePath)) {
                $fileInfo = pathinfo($namaFile);
                $baseName = $fileInfo['filename'];
                $extension = $fileInfo['extension'];
                $counter = 1;

                // Loop hingga menemukan nama file yang unik
                while (file_exists($targetFilePath)) {
                    $namaFile = $baseName . '_' . $counter . '.' . $extension;
                    $targetFilePath = $targetDir . $namaFile;
                    $counter++;
                }
            }

            // Pindahkan file gambar dari lokasi sementara ke lokasi tujuan
            if (move_uploaded_file($lokasiSementara, $targetFilePath)) {
                // Hapus file gambar lama jika ada
                $gambarLama =  htmlspecialchars($_POST['foto_lama']);
                $pathGambarLama = $targetDir . $gambarLama;
                if (file_exists($pathGambarLama) && is_file($pathGambarLama)) {
                    unlink($pathGambarLama); // Hapus file gambar lama
                }
                $dataPegawai = [
                    'id' => $id,
                    'idd_karyawan' => $idd_karyawan,
                    'nama_karyawan' => $nama_karyawan,
                    'nik' => $nik,
                    'agama' => $agama,
                    'alamat_ktp' => $alamat_ktp,
                    'alamat_sekarang' => $alamat_sekarang,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'nik_ktp' => $nik_ktp,
                    'email' => $email,
                    'jenis_kelamin' => $jenis_kelamin,
                    'no_telepon' => $no_telepon,
                    'akun' => $akun,
                    'status_hubungan' => $status_hubungan,
                    'jenis_karyawan' => $jenis_karyawan,
                    'pendidikan_tertinggi' => $pendidikan_tertinggi,
                    'retirement_date' => $retirement_date,
                    'join_date' => $join_date,
                    'status' => $status,
                    'active_passive' => $active_passive,
                    'sk_tetap' => $sk_tetap,
                    'pkwt' => $pkwt,
                    'foto' => $namaFile
            ];
            $Kepegawaian->update($dataPegawai);
            } else {
                return $_SESSION['error'] = 'Tidak ada data yang dikirim!';
            }
        } else {
            $namaFile = htmlspecialchars($_POST['foto_lama']);
            $dataPegawai = [
                'id' => $id,
                'idd_karyawan' => $idd_karyawan,
                'nama_karyawan' => $nama_karyawan,
                'nik' => $nik,
                'agama' => $agama,
                'alamat_ktp' => $alamat_ktp,
                'alamat_sekarang' => $alamat_sekarang,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'nik_ktp' => $nik_ktp,
                'email' => $email,
                'jenis_kelamin' => $jenis_kelamin,
                'no_telepon' => $no_telepon,
                'akun' => $akun,
                'status_hubungan' => $status_hubungan,
                'jenis_karyawan' => $jenis_karyawan,
                'pendidikan_tertinggi' => $pendidikan_tertinggi,
                'retirement_date' => $retirement_date,
                'join_date' => $join_date,
                'status' => $status,
                'active_passive' => $active_passive,
                'sk_tetap' => $sk_tetap,
                'pkwt' => $pkwt,
                'foto' => $namaFile
            ];
            $Kepegawaian->update($dataPegawai);
        }    
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
}
// end::create, update and delete pegawai
?>