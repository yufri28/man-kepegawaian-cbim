<?php 

$Kepegawaian = new Kepegawaian();
// $data_karyawan = $Kepegawaian->get_karyawan();
$data_karyawan = $Kontrak->get_all_karyawan();
$data_kontrak = $Kontrak->get_all_kontrak();
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
                                    <span class="card-label fw-bolder fs-3 mb-1">Informasi Kontrak:</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <div class="mb-3">
                                    <label for="nik" class="form-label">Karyawan <small
                                            class="text-danger">*</small></label>
                                    <select class="form-control form-control-sm js-example-basic-single" name="nik"
                                        required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($data_karyawan as $key => $karyawan):?>
                                        <option value="<?=$karyawan['nik'];?>">
                                            <?=$karyawan['nik'];?> - <?=$karyawan['nama_karyawan'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="row d-flex">
                                    <div class="mb-3 col-lg-6">
                                        <label for="sk_tetap" class="form-label">SK Tetap</label>
                                        <textarea class="form-control form-control-sm" name="sk_tetap"
                                            rows="10"></textarea>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="pkwt" class="form-label">PKWT</label>
                                        <textarea class="form-control form-control-sm" name="pkwt" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row d-flex">
                                    <div class="mb-3 col-lg-12">
                                        <label for="sk_mutasi" class="form-label">SK Mutasi</label>
                                        <textarea class="form-control form-control-sm" name="sk_mutasi"
                                            rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-n5 col-xxl-12">
                                <div class="text-end p-5">
                                    <a href="./index.php?page=kontrak-index" class="btn btn-sm btn-danger">Kembali</a>
                                    <button type="submit" name="add_kontrak"
                                        class="btn btn-sm btn-primary">Simpan</button>
                                </div>
                            </div>
                            <!--begin::Body-->
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
<!--begin::Modals-->
<!--begin::Modal - Create App-->
<?php require './templates/modals.php';?>