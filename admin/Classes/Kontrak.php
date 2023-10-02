<?php 

require_once './../config.php';


class Kontrak extends Connection 
{
    public function __construct()
    {
        $this->db = $this->connectDatabase();
    }

    public function get_all_kontrak()
    {
        $data = $this->db->query("SELECT ko.id, ko.id_pegawai, ko.sk_tetap, ko.pkwt, ko.sk_mutasi, ka.idd_karyawan, ka.nama_karyawan, ka.nik FROM kontrak ko JOIN karyawan ka ON ko.id_pegawai = ka.nik;");
        return $data;
    }
    
    public function count_all_kontrak()
    {
        $data = $this->db->query("SELECT COUNT(ko.id) AS jumlah_kontrak FROM kontrak ko JOIN karyawan ka ON ko.id_pegawai = ka.nik;")->fetch_assoc();
        return $data['jumlah_kontrak'];
    }

    public function get_all_karyawan()
    {
        $data = $this->db->query("SELECT nama_karyawan, nik FROM karyawan;");
        return $data;
    }

    public function join_kontrak_byId($id_kontrak)
    {
        $data = $this->db->query("SELECT ko.id, ko.id_pegawai, ko.sk_tetap, ko.pkwt, ko.sk_mutasi, ka.idd_karyawan, ka.nama_karyawan, ka.nik FROM kontrak ko JOIN karyawan ka ON ko.id_pegawai = ka.nik WHERE ko.id='$id_kontrak';")->fetch_assoc();
        return $data;
    }

    public function add($data)
    {
        $id = $data['id'];
        $nik = $data['nik'];
        $sk_tetap = $data['sk_tetap'];
        $pkwt = $data['pkwt'];
        $sk_mutasi = $data['sk_mutasi'];
        $query_insert = "INSERT INTO kontrak
                        (id,id_pegawai,sk_tetap,pkwt,sk_mutasi)
                        VALUES (0,'$nik','$sk_tetap','$pkwt','$sk_mutasi')";
        $insert = $this->db->query($query_insert);
        if($insert)
        {
            $_SESSION['success'] = 'Data berhasil ditambahkan!';
        }else{
                $_SESSION['error'] = 'Data gagal ditambahkan!';
        }
       
       header("Location: ../admin/index.php?page=kontrak-index");
       exit;

    }
    public function update($data)
    {
        $id = $data['id'];
        $sk_tetap = $data['sk_tetap'];
        $pkwt = $data['pkwt'];
        $sk_mutasi = $data['sk_mutasi'];
        $query_update = "UPDATE kontrak
                        SET sk_tetap='$sk_tetap',pkwt='$pkwt',sk_mutasi='$sk_mutasi'
                        WHERE id='$id'";
                        
        $update = $this->db->query($query_update);
        if($update)
        {
            $_SESSION['success'] = 'Data berhasil diupdate!';
        }else{
            $_SESSION['error'] = 'Data gagal diupdate!';
        }
        
        header("Location: ../admin/index.php?page=kontrak-index");
        exit;
    }

    public function delete($id)
    {
        $delete_kotrak = $this->db->query("DELETE FROM kontrak WHERE id='$id'");
        if($delete_kotrak)
        {
            $_SESSION['success'] = 'Data berhasil dihapus!';
        }else{
                $_SESSION['error'] = 'Data gagal dihapus!';
        }
        header("Location: ../admin/index.php?page=kontrak-index");
        exit;
    }


}


$Kontrak = new Kontrak();


?>