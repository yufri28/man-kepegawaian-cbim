<?php 
require_once './../config.php';


class Kepegawaian extends Connection 
{
    public function __construct()
    {
        $this->db = $this->connectDatabase();
    }

    public function get_join_pegawai()
    {
        $data = $this->db->query("SELECT * FROM karyawan k JOIN detail_pegawai dp ON k.nik=dp.id_pegawai");
        return $data;
    }
    public function join_pegawai_byId($id_karyawan)
    {
        $data = $this->db->query("SELECT * FROM karyawan k JOIN detail_pegawai dp ON k.nik=dp.id_pegawai WHERE k.idd_karyawan='$id_karyawan'")->fetch_assoc();
        return $data;
    }

    public function count_pegawai()
    {
        $query = $this->db->query("SELECT COUNT(*) jumlah_pegawai FROM karyawan k JOIN detail_pegawai dp ON k.nik=dp.id_pegawai")->fetch_assoc();
        return $query['jumlah_pegawai'];
    }

    public function add($data)
    {

        $nama_karyawan = $data['nama_karyawan'];
        $nik = $data['nik'];
        $agama = $data['agama'];
        $alamat_ktp = $data['alamat_ktp'];
        $alamat_sekarang = $data['alamat_sekarang'];
        $tempat_lahir = $data['tempat_lahir'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $nik_ktp = $data['nik_ktp'];
        $email = $data['email'];
        $agama = $data['agama'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $no_telepon = $data['no_telepon'];
        $akun = $data['akun'];
        $status_hubungan = $data['status_hubungan'];
        $jenis_karyawan = $data['jenis_karyawan'];
        $pendidikan_tertinggi = $data['pendidikan_tertinggi'];
        $retirement_date = $data['retirement_date'];
        $join_date = $data['join_date'];
        $status = $data['status'];
        $active_passive = $data['active_passive'];
        $sk_tetap = $data['sk_tetap'];
        $pkwt = $data['pkwt'];
        $foto = $data['foto'];


        $query_karyawan = "INSERT INTO karyawan 
                    (idd_karyawan, foto, nama_karyawan, nik, agama, alamat_ktp, 
                    alamat_sekarang, tempat_lahir, tgl_lahir, nik_ktp, email, sex, 
                    no_telp, id_user, status_hubungan, jenis_karyawan, pendidikan_terting) 
                  VALUES 
                    (0,'$foto', '$nama_karyawan',  
                    '$nik', '$agama', '$alamat_ktp',  
                    '$alamat_sekarang', '$tempat_lahir',  
                    '$tanggal_lahir', '$nik_ktp', '$email',  
                    '$jenis_kelamin', '$no_telepon', '$akun', 
                    '$status_hubungan', '$jenis_karyawan',  
                    '$pendidikan_tertinggi')";

        $insert_karyawan = $this->db->query($query_karyawan);
        if($insert_karyawan)
        {
            $query_detail_karyawan = "INSERT INTO detail_pegawai
                                      (id,nik,retirement_date,jd,id_pegawai,
                                      status,active_passive,sk_tetap,pkwt)
                                      VALUES (0,'$nik_ktp','$retirement_date',
                                      '$join_date','$nik','$status','$active_passive',
                                      '$sk_tetap','$pkwt')";

            $insert_detail = $this->db->query($query_detail_karyawan);
            if($insert_detail)
            {
               $_SESSION['success'] = 'Data berhasil ditambahkan!';
            }else{
                 $_SESSION['error'] = 'Data gagal ditambahkan!';
            }
        }else{
             $_SESSION['error'] = 'Data gagal ditambahkan!';
        }
       header("Location: ../admin/index.php?page=kepegawaian-detail");
       exit;

    }

    public function update($data)
    {
        $id = $data['id'];
        $idd_karyawan = $data['idd_karyawan'];
        $nama_karyawan = $data['nama_karyawan'];
        $nik = $data['nik'];
        $agama = $data['agama'];
        $alamat_ktp = $data['alamat_ktp'];
        $alamat_sekarang = $data['alamat_sekarang'];
        $tempat_lahir = $data['tempat_lahir'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $nik_ktp = $data['nik_ktp'];
        $email = $data['email'];
        $agama = $data['agama'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $no_telepon = $data['no_telepon'];
        $akun = $data['akun'];
        $status_hubungan = $data['status_hubungan'];
        $jenis_karyawan = $data['jenis_karyawan'];
        $pendidikan_tertinggi = $data['pendidikan_tertinggi'];
        $retirement_date = $data['retirement_date'];
        $join_date = $data['join_date'];
        $status = $data['status'];
        $active_passive = $data['active_passive'];
        $sk_tetap = $data['sk_tetap'];
        $pkwt = $data['pkwt'];
        $foto = $data['foto'];

        $query_karyawan = "UPDATE karyawan 
                    SET foto = '$foto', nama_karyawan = '$nama_karyawan', 
                        nik = '$nik', agama = '$agama', 
                        alamat_ktp = '$alamat_ktp', 
                        alamat_sekarang =  '$alamat_sekarang', tempat_lahir = '$tempat_lahir', 
                        tgl_lahir = '$tanggal_lahir', nik_ktp = '$nik_ktp', 
                        email = '$email', sex = '$jenis_kelamin', 
                        no_telp = '$no_telepon', id_user = '$akun', 
                        status_hubungan = '$status_hubungan', jenis_karyawan = '$jenis_karyawan', 
                        pendidikan_terting='$pendidikan_tertinggi' 
                    WHERE 
                        idd_karyawan='$idd_karyawan'";

        $update_karyawan = $this->db->query($query_karyawan);
        if($update_karyawan)
        {
            $query_detail_karyawan = "UPDATE detail_pegawai
                                      SET nik='$nik_ktp',retirement_date='$retirement_date',
                                        jd='$join_date',id_pegawai='$nik',
                                        status='$status',active_passive='$active_passive',
                                        sk_tetap='$sk_tetap',pkwt='$pkwt'
                                      WHERE id='$id'";

            $update_detail = $this->db->query($query_detail_karyawan);
            if($update_detail)
            {
                 $_SESSION['success'] = 'Data berhasil diupdate!';
            }else{
                 $_SESSION['error'] = 'Data gagal diupdate!';
            }
        }
        
        header("Location: ../admin/index.php?page=kepegawaian-detail");
        exit;
    }

    public function delete($idd_karyawan,$id,$foto)
    {
        $delete_karyawan = $this->db->query("DELETE FROM karyawan WHERE idd_karyawan='$idd_karyawan'");
        if($delete_karyawan)
        {
            $delete_detail_pegawai = $this->db->query("DELETE FROM detail_pegawai WHERE id='$id'");
            if($delete_detail_pegawai)
            {
                $pathGambarLama = '../img/uploads/foto_pegawai/'.$foto;
                if (file_exists($pathGambarLama) && is_file($pathGambarLama)) {
                    unlink($pathGambarLama); // Hapus file gambar lama
                }
                $_SESSION['success'] = 'Data berhasil dihapus!';
            }else{
                  $_SESSION['error'] = 'Data gagal dihapus!';
            }
        }else{
              $_SESSION['error'] = 'Data gagal dihapus!';
        }

        header("Location: ../admin/index.php?page=kepegawaian-detail");
        exit;
    }

}

$Kepegawaian = new Kepegawaian();

?>