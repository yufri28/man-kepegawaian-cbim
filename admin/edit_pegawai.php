<?php 
$Kepegawaian = new Kepegawaian();
$id_auth = $_SESSION['id_auth'];
$id_data_karyawan = base64_decode($_GET['idk']);
$data_pegawai = $Kepegawaian->get_join_pegawai_byId($id_data_karyawan);

?>

<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <form action="./proses.php" method="post" enctype="multipart/form-data">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xxl-5">
                        <!--begin::List Widget 9-->
                        <div class="card card-xxl-stretch">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-3">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-bolder text-dark fs-3">Informasi Pribadi:</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-1">
                                <div class="mb-7">
                                    <div class="mb-3">
                                        <input type="hidden" name="id" value="<?=$data_pegawai['id'];?>">
                                        <input type="hidden" name="idd_karyawan"
                                            value="<?=$data_pegawai['idd_karyawan'];?>">
                                        <label for="nama_karyawan" class="form-label">Nama Karyawan <small
                                                class="text-danger">*</small></label>
                                        <input type="text" required name="nama_karyawan"
                                            value="<?=$data_pegawai['nama_karyawan'];?>"
                                            class="form-control form-control-sm" id="nama_karyawan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik" required class="form-label">NIK <small
                                                class="text-danger">*</small></label>
                                        <input type="number" value="<?=$data_pegawai['id_pegawai'];?>" name="nik"
                                            class="form-control form-control-sm" id="nik">
                                    </div>
                                    <div class="mb-3">
                                        <label for="agama" class="form-label">Agama <small
                                                class="text-danger">*</small></label>
                                        <select required class="form-control form-control-sm" name="agama"
                                            aria-label="Default select example">
                                            <option value="">-- Pilih --</option>
                                            <option <?= $data_pegawai['agama'] == 'Kristen Protestan' ?'selected':'';?>
                                                value="Kristen Protestan">Kristen Protestan</option>
                                            <option <?= $data_pegawai['agama'] == 'Katolik' ?'selected':'';?>
                                                value="Katolik">Katolik</option>
                                            <option <?= $data_pegawai['agama'] == 'Islam' ?'selected':'';?>
                                                value="Islam">Islam</option>
                                            <option <?= $data_pegawai['agama'] == 'Budha' ?'selected':'';?>
                                                value="Budha">Budha</option>
                                            <option <?= $data_pegawai['agama'] == 'Kong Hu Cu' ?'selected':'';?>
                                                value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamata_ktp" class="form-label">Alamat KTP <small
                                                class="text-danger">*</small></label>
                                        <textarea class="form-control form-control-sm" required name="alamat_ktp"
                                            id="alamata_ktp" rows="3"><?=$data_pegawai['alamat_ktp'];?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat_sekarang" class="form-label">Alamat
                                            Sekarang <small class="text-danger">*</small></label>
                                        <textarea class="form-control form-control-sm" name="alamat_sekarang"
                                            id="alamat_sekarang" required
                                            rows="3"><?=$data_pegawai['alamat_sekarang'];?></textarea>
                                    </div>
                                    <div class="row d-flex">
                                        <div class="mb-3 col-lg-6">
                                            <label for="tempat_lahir" class="form-label">Tempat Lahir <small
                                                    class="text-danger">*</small></label>
                                            <input type="text" required value="<?=$data_pegawai['tempat_lahir'];?>"
                                                name="tempat_lahir" class="form-control form-control-sm"
                                                id="tempat_lahir">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir <small
                                                    class="text-danger">*</small></label>
                                            <input type="date" value="<?=$data_pegawai['tgl_lahir'];?>" required
                                                name="tanggal_lahir" class="form-control form-control-sm"
                                                id="tanggal_lahir">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik_ktp" class="form-label">NIK KTP <small
                                                class="text-danger">*</small></label>
                                        <input type="number" name="nik_ktp" value="<?=$data_pegawai['nik'];?>" required
                                            class="form-control form-control-sm" id="nik_ktp">
                                    </div>
                                    <div class="row d-flex">
                                        <div class="mb-3 col-lg-6">
                                            <label for="email" class="form-label">Email <small
                                                    class="text-danger">*</small></label>
                                            <input type="email" required value="<?=$data_pegawai['email'];?>"
                                                class="form-control form-control-sm" name="email">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="no_telepon" value="<?=$data_pegawai['no_telp'];?>"
                                                class="form-label">No Telepon <small
                                                    class="text-danger">*</small></label>
                                            <input type="number" name="no_telepon" class="form-control form-control-sm"
                                                id="no_telepon">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin <small
                                                class="text-danger">*</small></label>
                                        <select class="form-control form-control-sm" name="jenis_kelamin" required
                                            aria-label="Default select example">
                                            <option value="">-- Pilih --</option>
                                            <option <?= $data_pegawai['sex'] == 'Laki-Laki' ?'selected':'';?>
                                                value="Laki-Laki">Laki-Laki</option>
                                            <option <?= $data_pegawai['sex'] == 'Perempuan' ?'selected':'';?>
                                                value="Perempuan">Perempuan</option>
                                            <option <?= $data_pegawai['sex'] == 'Tidak Disebutkan' ?'selected':'';?>
                                                value="Tidak Disebutkan">Tidak Disebutkan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status_hubungan" class="form-label">Status Hubungan <small
                                                class="text-danger">*</small></label>
                                        <select class="form-control form-control-sm" name="status_hubungan" required
                                            aria-label="Default select example">
                                            <option value="">-- Pilih --</option>
                                            <option
                                                <?= $data_pegawai['status_hubungan'] == 'Belum Menikah' ?'selected':'';?>
                                                value="Belum Menikah">Belum Menikah</option>
                                            <option <?= $data_pegawai['status_hubungan'] == 'Menikah' ?'selected':'';?>
                                                value="Menikah">Menikah</option>
                                            <option <?= $data_pegawai['status_hubungan'] == 'Janda' ?'selected':'';?>
                                                value="Janda">Janda</option>
                                            <option <?= $data_pegawai['status_hubungan'] == 'Duda' ?'selected':'';?>
                                                value="Duda">Duda</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pendidikan_tertinggi" class="form-label">Pendidikan
                                            Tertinggi <small class="text-danger">*</small></label>
                                        <select class="form-control form-control-sm" name="pendidikan_tertinggi"
                                            id="pendidikan_tertinggi" required aria-label="Default select example">
                                            <option value="">-- Pilih --</option>
                                            <option <?= $data_pegawai['pendidikan_terting'] == 'SMP' ?'selected':'';?>
                                                value="SMP">SMP</option>
                                            <option <?= $data_pegawai['pendidikan_terting'] == 'SMA' ?'selected':'';?>
                                                value="SMA">SMA</option>
                                            <option <?= $data_pegawai['pendidikan_terting'] == 'S1' ?'selected':'';?>
                                                value="S1">S1</option>
                                            <option <?= $data_pegawai['pendidikan_terting'] == 'S2' ?'selected':'';?>
                                                value="S2">S2</option>
                                            <option <?= $data_pegawai['pendidikan_terting'] == 'S3' ?'selected':'';?>
                                                value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 9-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xxl-7">
                        <!--begin::Tables Widget 9-->
                        <div class="card card-xxl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Informasi Pekerjaan:</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <div class="mb-3">
                                    <label for="akun" class="form-label">Akun <small
                                            class="text-danger">*</small></label>
                                    <select class="form-control form-control-sm" name="akun" required
                                        aria-label="Default select example">
                                        <option value="">-- Pilih --</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_karyawan" class="form-label">Jenis Karyawan <small
                                            class="text-danger">*</small></label>
                                    <select class="form-control form-control-sm" name="jenis_karyawan"
                                        aria-label="Default select example">
                                        <option value="">-- Pilih --</option>
                                        <option <?= $data_pegawai['jenis_karyawan'] == 'Pelamar' ?'selected':'';?>
                                            value="Pelamar">Pelamar</option>
                                        <option <?= $data_pegawai['jenis_karyawan'] == 'Karyawan Baru' ?'selected':'';?>
                                            value="Karyawan Baru">Karyawan Baru</option>
                                        <option <?= $data_pegawai['jenis_karyawan'] == 'Karyawan' ?'selected':'';?>
                                            value="Karyawan">Karyawan</option>
                                        <option <?= $data_pegawai['jenis_karyawan'] == 'Keluar' ?'selected':'';?>
                                            value="Keluar">Keluar</option>
                                    </select>
                                </div>
                                <div class="row d-flex">
                                    <div class="mb-3 col-lg-6">
                                        <label for="join_date" class="form-label">Join Date <small
                                                class="text-danger">*</small></label>
                                        <input type="date" value="<?=$data_pegawai['jd'];?>"
                                            class="form-control form-control-sm" name="join_date" id="join_date">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="retirement_date" class="form-label">Retirement Date <small
                                                class="text-danger">*</small></label>
                                        <input type="date" value="<?=$data_pegawai['retirement_date'];?>"
                                            class="form-control form-control-sm" required name="retirement_date"
                                            id="retirement_date">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status <small
                                            class="text-danger">*</small></label>
                                    <select class="form-control form-control-sm" name="status" required
                                        aria-label="Default select example">
                                        <option value="">-- Pilih --</option>
                                        <option <?= $data_pegawai['status'] == 'PERMANENT' ?'selected':'';?>
                                            value="PERMANENT">PERMANENT</option>
                                        <option <?= $data_pegawai['status'] == 'CONTRACT' ?'selected':'';?>
                                            value="CONTRACT">CONTRACT</option>
                                        <option <?= $data_pegawai['status'] == 'PKH' ?'selected':'';?> value="PKH">PKH
                                        </option>
                                        <option <?= $data_pegawai['status'] == 'KONSULTAN' ?'selected':'';?>
                                            value="KONSULTAN">KONSULTAN</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="active_passive" class="form-label">Aktive/Passive <small
                                            class="text-danger">*</small></label>
                                    <select class="form-control form-control-sm" required name="active_passive"
                                        aria-label="Default select example">
                                        <option value="">-- Pilih --</option>
                                        <option <?= $data_pegawai['active_passive'] == 'ACTIVE' ?'selected':'';?>
                                            value="ACTIVE">ACTIVE</option>
                                        <option <?= $data_pegawai['active_passive'] == 'PASSIVE' ?'selected':'';?>
                                            value="PASSIVE">PASSIVE</option>
                                    </select>
                                </div>
                                <div class="row d-flex">
                                    <div class="mb-3 col-lg-6">
                                        <label for="sk_tetap" class="form-label">SK Tetap <small
                                                class="text-danger">*</small></label>
                                        <textarea required class="form-control form-control-sm" name="sk_tetap"
                                            rows="10"><?=$data_pegawai['sk_tetap'];?></textarea>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="pkwt" class="form-label">PKWT <small
                                                class="text-danger">*</small></label>
                                        <textarea class="form-control form-control-sm" name="pkwt"
                                            rows="10"><?=$data_pegawai['pkwt'];?></textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" class="form-control form-control-sm" name="foto">
                                    <small><i>Kosongkan jika tidak ada gambar yang ingin diupload!</i></small>
                                </div>
                                <div class="preview-img">
                                    <img width="150px" height="150px"
                                        src="../img/uploads/foto_pegawai/<?=$data_pegawai['foto'];?>"
                                        alt="foto pegawai">
                                    <input type="hidden" name="foto_lama"
                                        value="<?=$data_pegawai['foto'] != NULL ? $data_pegawai['foto']:NULL;?>">
                                </div>
                            </div>
                            <!--begin::Body-->
                        </div>
                        <!--end::Tables Widget 9-->
                    </div>
                    <!--end::Col-->
                </div>
                <div class="card mt-n5 col-xxl-12">
                    <div class="text-end p-5">
                        <a href="./index.php?page=kepegawaian-detail" class="btn btn-sm btn-danger">Kembali</a>
                        <button type="submit" name="update_pegawai" class="btn btn-sm btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<?php require './templates/drawers.php';?>
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--begin::Modals-->
<!--begin::Modal - Create App-->
<?php require './templates/modals.php';?>