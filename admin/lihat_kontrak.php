<?php 
$id_auth = $_SESSION['id_auth'];
$id_kontrak = base64_decode($_GET['idkon']);
$data_kontrak = $Kontrak->join_kontrak_byId($id_kontrak);
if(empty($data_kontrak)){
    echo "<script>window.location.href='index.php?page=404'</script>";
}

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
                    <div class="col-xxl-8">
                        <!--begin::Tables Widget 9-->
                        <div class="card card-xxl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Informasi Kontrak</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-3" style="overflow-y: auto;">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">NIK
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?= $data_kontrak['id_pegawai'] == null ? "-":$data_kontrak['id_pegawai'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">Nama Karyawan
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?= $data_kontrak['nama_karyawan'] == null ? "-":$data_kontrak['nama_karyawan'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">SK Tetap
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_kontrak['sk_tetap'] == null ? "-":$data_kontrak['sk_tetap'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">PKWT
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_kontrak['pkwt'] == null ? "-":$data_kontrak['pkwt'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">SK Mutasi
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_kontrak['sk_mutasi'] == null ? "-":$data_kontrak['sk_mutasi'];?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Tables Widget 9-->
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row d-flex justify-content-center mt-n5">
                    <div class="col-xxl-8">
                        <div class="card card-xxl-stretch mb-5 mb-xl-8">
                            <div class="text-end p-5">
                                <a href="./index.php?page=kontrak-index" class="btn btn-sm btn-danger">Kembali</a>
                            </div>
                        </div>
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
<!--begin::Modals-->
<!--begin::Modal - Create App-->
<?php require './templates/modals.php';?>