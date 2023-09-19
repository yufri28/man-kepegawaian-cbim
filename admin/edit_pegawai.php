<?php 
$Kepegawaian = new Kepegawaian();
$id_auth = $_SESSION['id_auth'];
$id_data_karyawan = base64_decode($_GET['idk']);
$data_pegawai = $Kepegawaian->join_pegawai_byId($id_data_karyawan);
$data_karyawan = $Kepegawaian->get_all_karyawan();

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
                <div class="row gy-5 d-flex justify-content-center g-xl-8">
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
                                    <input type="hidden" name="id" value="<?=$data_pegawai['id'];?>">
                                    <label for="nik" class="form-label">Karayawan <small
                                            class="text-danger">*</small></label>
                                    <select disabled class="form-control form-control-sm" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($data_karyawan as $key => $karyawan):?>
                                        <option <?= $data_pegawai['id_pegawai'] == $karyawan['nik'] ? 'selected':'';?>
                                            value="<?=$karyawan['nik'];?>">
                                            <?=$karyawan['nik'];?> - <?=$karyawan['nama_karyawan'];?></option>
                                        <?php endforeach;?>
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
                            </div>
                            <div class="card mt-n5 col-xxl-12">
                                <div class="text-end p-5">
                                    <a href="./index.php?page=kepegawaian-detail"
                                        class="btn btn-sm btn-danger">Kembali</a>
                                    <button type="submit" name="update_pegawai"
                                        class="btn btn-sm btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                        <!--end::Tables Widget 9-->
                    </div>
                    <!--end::Col-->
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