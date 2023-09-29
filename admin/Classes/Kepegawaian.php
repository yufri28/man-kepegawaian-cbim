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
        $tahun = $data['tahun'];
        $query_insert = "INSERT INTO detail_pegawai
                        (id,retirement_date,jd,id_pegawai,
                        status,active_passive,sk_tetap,pkwt,tahun)
                        VALUES (0,'$retirement_date',
                        '$join_date','$nik','$status','$active_passive',
                        '$sk_tetap','$pkwt','$tahun')";
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
        $tahun = $data['tahun'];
        $query_update = "UPDATE detail_pegawai
                        SET retirement_date='$retirement_date',
                        jd='$join_date',status='$status',
                        active_passive='$active_passive',
                        sk_tetap='$sk_tetap',pkwt='$pkwt',tahun='$tahun'
                        WHERE id='$id'";
        $update = $this->db->query($query_update);
        if($update)
        {
            $this->insert_notifikasi("Admin berhasil mengupdate data");
            $_SESSION['success'] = 'Data berhasil diupdate!';
        }else{
            $this->insert_notifikasi("Admin gagal mengupdate data");
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
        $data = $this->db->query("SELECT COUNT(*) AS jumlah_permanent 
                                FROM karyawan k LEFT JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE dp.status='PERMANENT'")->fetch_assoc();
        return $data['jumlah_permanent'];
    }
    public function count_contract()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jumla_contract 
                                FROM karyawan k LEFT JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE dp.status='CONTRACT'")->fetch_assoc();
        return $data['jumla_contract'];
    }
    public function count_pkh()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jumlah_pkh 
                                FROM karyawan k LEFT JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE dp.status='PKH'")->fetch_assoc();
        return $data['jumlah_pkh'];
    }
    public function count_konsultan()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jumlah_konsultan 
                                FROM karyawan k LEFT JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE dp.status='KONSULTAN'")->fetch_assoc();
        return $data['jumlah_konsultan'];
    }
    public function count_active()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jumlah_active 
                                FROM karyawan k LEFT JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE dp.active_passive='ACTIVE'")->fetch_assoc();
        return $data['jumlah_active'];
    }
    public function count_passive()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jumlah_passive 
                                FROM karyawan k LEFT JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE dp.active_passive='PASSIVE'")->fetch_assoc();
        return $data['jumlah_passive'];
    }
    public function count_sk_tetap()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jumlah_sk_tetap 
                                FROM karyawan k JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE dp.sk_tetap IS NOT NULL AND dp.sk_tetap !=''")->fetch_assoc();
        return $data['jumlah_sk_tetap'];
    }
    public function count_sk_null()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jumlah_sk_null
                                FROM karyawan k JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE dp.sk_tetap IS NULL AND dp.sk_tetap=''")->fetch_assoc();
        return $data['jumlah_sk_null'];
    }
    public function count_pkwt()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jumlah_pkwt 
                                FROM karyawan k JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE dp.pkwt != '' AND dp.pkwt IS NOT NULL")->fetch_assoc();
        return $data['jumlah_pkwt'];
    }
    public function count_pkwt_null()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jumlah_pkwt_null
                                FROM karyawan k JOIN detail_pegawai dp ON 
                                k.nik = dp.id_pegawai
                                WHERE dp.pkwt IS NULL AND dp.pkwt = ''")->fetch_assoc();
        return $data['jumlah_pkwt_null'];
    }

    public function count_notifikasi()
    {
        $data = $this->db->query("SELECT COUNT(*) AS jumlah_notif FROM notifikasi")->fetch_assoc();
        return $data['jumlah_notif'];
    }
    public function get_notifikasi()
    {
        $data = array(); // Inisialisasi array kosong
        $result = $this->db->query("SELECT * FROM notifikasi");
        while ($row = $result->fetch_assoc()) {
            $data[] = $row; // Menambahkan setiap baris data sebagai elemen baru dalam array
        }
        return $data;
    }

    public function insert_notifikasi($isi_notif){
        $date = date('Y-m-d H:i:s');
        $this->db->query("INSERT INTO notifikasi (isi_notifikasi, status, create_at) VALUES ('$isi_notif', '0', '$date')");
    }
    

}

$Kepegawaian = new Kepegawaian();

?>