<?php 
$Kepegawaian = new Kepegawaian();
$id_auth = $_SESSION['id_auth'];
$id_data_karyawan = base64_decode($_GET['idk']);
$data_pegawai = $Kepegawaian->join_pegawai_byId($id_data_karyawan);
$data_karyawan = $Kepegawaian->get_all_karyawan();

if(empty($data_pegawai)){
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
                    <div class="col-xxl-5">
                        <!--begin::Tables Widget 9-->
                        <div class="card card-xxl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Data Diri</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-3" style="overflow-y: auto;">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap max-w-5px">Nama Karyawan
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-2px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?= $data_pegawai['nama_karyawan'] ?? "-" ;?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap max-w-5px">Jenis Kelamin
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-2px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_pegawai['sex'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap max-w-5px">Agama
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-2px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px"> <?=$data_pegawai['agama'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap max-w-5px">Tempat/Tanggal
                                                Lahir
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-2px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?= $data_pegawai['tempat_lahir'].', '.date('d F Y',strtotime($data_pegawai['tgl_lahir']))== null?"-":$data_pegawai['tempat_lahir'].', '.date('d F Y', strtotime($data_pegawai['tgl_lahir']));?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap max-w-5px">NIK KTP
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-2px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_pegawai['nik_ktp'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap max-w-5px">Status Nikah
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-2px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_pegawai['status_hubungan'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap max-w-5px">No Telp
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-2px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?= $data_pegawai['no_telp'] == null ? "-":$data_pegawai['no_telp'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap max-w-5px">Email
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-2px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_pegawai['email'] == null ? "-":$data_pegawai['email'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap max-w-5px">Alamat KTP
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-2px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?= $data_pegawai['alamat_ktp'] == null ? "-":  $data_pegawai['alamat_ktp'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap max-w-5px">Alamat Sekarang
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-2px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?= $data_pegawai['alamat_sekarang'] == null ? "-":$data_pegawai['alamat_sekarang'];?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Tables Widget 9-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xxl-7">
                        <!--begin::Tables Widget 9-->
                        <div class="card card-xxl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Informasi Pekerjaan</span>
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
                                                <?= $data_pegawai['id_pegawai'] == null ? "-":$data_pegawai['id_pegawai'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">Jenis Karyawan
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_pegawai['jenis_karyawan'] == null ? "-":$data_pegawai['jenis_karyawan'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">Join Date
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_pegawai['jd'] == null ? "-":date('d F Y', strtotime($data_pegawai['jd']));?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">Retirement Date
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_pegawai['retirement_date'] == null ? "-":date('d F Y', strtotime($data_pegawai['retirement_date']));?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">Status
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_pegawai['status'] == null ? "-":$data_pegawai['status'];?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">Active/Passive
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_pegawai['active_passive'] == null ? "-":$data_pegawai['active_passive'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">SK Tetap
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_pegawai['sk_tetap'] == null ? "-":$data_pegawai['sk_tetap'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">PKWT
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_pegawai['pkwt'] == null ? "-":$data_pegawai['pkwt'];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted fw-bold text-nowrap min-w-10px">Tahun
                                            </td>
                                            <td class="text-muted fw-bold text-start max-w-10px"> : </td>
                                            <td class="text-dark fw-bolder fs-6 max-w-4px">
                                                <?=$data_pegawai['tahun'] == null ? "-":$data_pegawai['tahun'];?>
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
                <div class="card mt-n5 col-xxl-12">
                    <div class="text-end p-5">
                        <a href="./index.php?page=kepegawaian-detail" class="btn btn-sm btn-danger">Kembali</a>
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