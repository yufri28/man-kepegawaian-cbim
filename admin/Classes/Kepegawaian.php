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

    public function get_karyawan()
    {
        $data = $this->db->query("SELECT k.nama_karyawan, 
                                k.nik FROM karyawan k
                                LEFT JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE dp.id_pegawai IS NULL;");
        return $data;
    }
    public function get_all_karyawan()
    {
        $data = $this->db->query("SELECT nama_karyawan, nik FROM karyawan;");
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
        $nik = $data['nik'];
        $retirement_date = $data['retirement_date'];
        $join_date = $data['join_date'];
        $status = $data['status'];
        $active_passive = $data['active_passive'];
        $sk_tetap = $data['sk_tetap'];
        $pkwt = $data['pkwt'];
        $query_insert = "INSERT INTO detail_pegawai
                        (id,retirement_date,jd,id_pegawai,
                        status,active_passive,sk_tetap,pkwt)
                        VALUES (0,'$retirement_date',
                        '$join_date','$nik','$status','$active_passive',
                        '$sk_tetap','$pkwt')";
        $insert = $this->db->query($query_insert);
        if($insert)
        {
            $_SESSION['success'] = 'Data berhasil ditambahkan!';
        }else{
                $_SESSION['error'] = 'Data gagal ditambahkan!';
        }
       
       header("Location: ../admin/index.php?page=kepegawaian-detail");
       exit;

    }

    public function update($data)
    {
        $id = $data['id'];
        $retirement_date = $data['retirement_date'];
        $join_date = $data['join_date'];
        $status = $data['status'];
        $active_passive = $data['active_passive'];
        $sk_tetap = $data['sk_tetap'];
        $pkwt = $data['pkwt'];
        $query_update = "UPDATE detail_pegawai
                        SET retirement_date='$retirement_date',
                        jd='$join_date',status='$status',
                        active_passive='$active_passive',
                        sk_tetap='$sk_tetap',pkwt='$pkwt'
                        WHERE id='$id'";
        $update = $this->db->query($query_update);
        if($update)
        {
            $_SESSION['success'] = 'Data berhasil diupdate!';
        }else{
            $_SESSION['error'] = 'Data gagal diupdate!';
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


    public function count_permanent()
    {
        $data = $this->db->query("SELECT COUNT(*) jumlah_permanent 
                                FROM karyawan k LEFT JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE status='PERMANENT'")->fetch_assoc();
        return $data['jumlah_permanent'];
    }
    public function count_contract()
    {
        $data = $this->db->query("SELECT COUNT(*) jumla_contract 
                                FROM karyawan k LEFT JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE status='CONTRACT'")->fetch_assoc();
        return $data['jumla_contract'];
    }
    public function count_pkh()
    {
        $data = $this->db->query("SELECT COUNT(*) jumlah_pkh 
                                FROM karyawan k LEFT JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE status='PKH'")->fetch_assoc();
        return $data['jumlah_pkh'];
    }
    public function count_konsultan()
    {
        $data = $this->db->query("SELECT COUNT(*) jumlah_konsultan 
                                FROM karyawan k LEFT JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE status='KONSULTAN'")->fetch_assoc();
        return $data['jumlah_konsultan'];
    }

}

$Kepegawaian = new Kepegawaian();

?>