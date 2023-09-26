<?php 

$Kepegawaian = new Kepegawaian();
$id_auth = $_SESSION['id_auth'];
$data_pegawai = $Kepegawaian->get_join_pegawai();
$jumlah_pegawai = $Kepegawaian->count_pegawai();
?>

<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="g-5 gx-xxl-8">
                <!--begin::Tables Widget 10-->
                <div class="card">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Daftar Pegawai</span>
                            <span class="text-muted mt-1 fw-bold fs-7"><?= $jumlah_pegawai;?>
                                Pegawai</span>
                        </h3>
                        <div class="card-toolbar">
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-trigger="hover" title="Klik untuk tambah data">
                                <a href="?page=kepegawaian-tambah" class="btn btn-sm btn-light btn-active-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                transform="rotate(-90 11.364 20.364)" fill="black" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Data Pegawai
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table id="myTable"
                                class="table display data table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4"
                                style="width:100%">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="border-0">
                                        <th class="p-0 text-muted fw-bold text-center min-w-30px">No</th>
                                        <th class="p-0 text-muted fw-bold text-center min-w-200px">Nama Pegawai</th>
                                        <th class="p-0 text-muted fw-bold text-center min-w-200px">NIK</th>
                                        <th class="p-0 text-muted fw-bold text-center min-w-150px">Join Date</th>
                                        <!-- <th class="p-0 text-muted fw-bold text-center min-w-150px">Retirement Date</th> -->
                                        <th class="p-0 text-muted fw-bold text-center min-w-30px">Status</th>
                                        <th class="p-0 text-muted fw-bold text-center min-w-100px">Active/Passive</th>
                                        <!-- <th class="p-0 text-muted fw-bold text-center min-w-100px">SK Tetap</th> -->
                                        <!-- <th class="p-0 text-muted fw-bold text-center min-w-100px">PKWT</th> -->
                                        <th class="p-0 text-muted fw-bold text-center min-w-100px">Aksi</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <?php 
                                     $i = 0;
                                    ?>
                                    <?php foreach ($data_pegawai as $key => $pegawai):?>
                                    <tr>
                                        <td class="text-dark ps-3 fw-bolder">
                                            <?= ++$i;?>
                                        </td>
                                        <td class="text-dark text-center fw-bolder">
                                            <?= $pegawai['nama_karyawan'];?>
                                        </td>
                                        <td class="text-dark text-center fw-bolder">
                                            <?= $pegawai['nik'];?>
                                        </td>
                                        <td class="text-dark text-center fw-bolder">
                                            <?= $pegawai['jd'];?>
                                        </td>
                                        <!-- <td class="text-dark text-center fw-bolder">
                                            <?= $pegawai['retirement_date'];?>
                                        </td> -->
                                        <td class="text-dark text-center fw-bolder">
                                            <?= $pegawai['status'];?>
                                        </td>
                                        <td class="text-dark text-center fw-bolder">
                                            <?= $pegawai['active_passive'];?>
                                        </td>
                                        <!-- <td class="text-dark text-center fw-bolder">
                                            <?= $pegawai['sk_tetap'] != NULL ? substr($pegawai['sk_tetap'],0,20).'...':'-';?>
                                        </td>
                                        <td class="text-dark text-center fw-bolder">
                                            <?= $pegawai['pkwt'] != NULL ? substr($pegawai['pkwt'],0,50).'...':'-';?>
                                        </td> -->
                                        <td class="text-center text-nowrap pe-3">
                                            <a href="index.php?page=kepegawaian-lihat&idk=<?=base64_encode($pegawai['idd_karyawan']);?>"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                title="Lihat Detail">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="black" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                        <path opacity="0.3"
                                                            d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path opacity="0.3"
                                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="index.php?page=kepegawaian-edit&idk=<?=base64_encode($pegawai['idd_karyawan']);?>"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                title="Edit">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#hapusPegawai<?=$pegawai['idd_karyawan'];?>"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                                title="Hapus">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                            fill="black" />
                                                        <path opacity="0.5"
                                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                            fill="black" />
                                                        <path opacity="0.5"
                                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <!--end::Tables Widget 10-->
            </div>
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
<?php
//  require './templates/drawers.php';
 ?>
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--begin::Modals-->
<!--begin::Modal - Create App-->
<?php require './templates/modals.php';?>
<!-- begin::hapus modal aplikasi -->
<?php foreach ($data_pegawai as $key => $pegawai):?>
<div class="modal fade" id="hapusPegawai<?=$pegawai['idd_karyawan'];?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="./proses.php" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Karyawan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="hidden" name="idd_karyawan" value="<?=$pegawai['idd_karyawan'];?>">
                        <input type="hidden" name="id" value="<?=$pegawai['id'];?>">
                        <input type="hidden" name="foto" value="<?=$pegawai['foto'];?>">
                        <span>Anda yakin ingin hapus <strong><?=$pegawai['nama_karyawan'];?></strong> ?</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="delete_pegawai" class="btn btn-sm btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>
<!-- end::hapus modal aplikasi -->
<!--end::Modal - Select Location-->
<!--end::Modals-->