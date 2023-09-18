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
                                        <label for="nama_karyawan" class="form-label">Nama Karyawan <small
                                                class="text-danger">*</small></label>
                                        <input type="text" required name="nama_karyawan"
                                            class="form-control form-control-sm" id="nama_karyawan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik" required class="form-label">NIK <small
                                                class="text-danger">*</small></label>
                                        <input type="number" name="nik" class="form-control form-control-sm" id="nik">
                                    </div>
                                    <div class="mb-3">
                                        <label for="agama" class="form-label">Agama <small
                                                class="text-danger">*</small></label>
                                        <select required class="form-control form-control-sm" name="agama"
                                            aria-label="Default select example">
                                            <option value="">-- Pilih --</option>
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamata_ktp" class="form-label">Alamat KTP <small
                                                class="text-danger">*</small></label>
                                        <textarea class="form-control form-control-sm" required name="alamat_ktp"
                                            id="alamata_ktp" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat_sekarang" class="form-label">Alamat
                                            Sekarang <small class="text-danger">*</small></label>
                                        <textarea class="form-control form-control-sm" name="alamat_sekarang"
                                            id="alamat_sekarang" required rows="3"></textarea>
                                    </div>
                                    <div class="row d-flex">
                                        <div class="mb-3 col-lg-6">
                                            <label for="tempat_lahir" class="form-label">Tempat Lahir <small
                                                    class="text-danger">*</small></label>
                                            <input type="text" required name="tempat_lahir"
                                                class="form-control form-control-sm" id="tempat_lahir">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir <small
                                                    class="text-danger">*</small></label>
                                            <input type="date" required name="tanggal_lahir"
                                                class="form-control form-control-sm" id="tanggal_lahir">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik_ktp" class="form-label">NIK KTP <small
                                                class="text-danger">*</small></label>
                                        <input type="number" name="nik_ktp" required
                                            class="form-control form-control-sm" id="nik_ktp">
                                    </div>
                                    <div class="row d-flex">
                                        <div class="mb-3 col-lg-6">
                                            <label for="email" class="form-label">Email <small
                                                    class="text-danger">*</small></label>
                                            <input type="email" required class="form-control form-control-sm"
                                                name="email">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label for="no_telepon" class="form-label">No Telepon <small
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
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                            <option value="Tidak Disebutkan">Tidak Disebutkan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status_hubungan" class="form-label">Status Hubungan <small
                                                class="text-danger">*</small></label>
                                        <select class="form-control form-control-sm" name="status_hubungan" required
                                            aria-label="Default select example">
                                            <option value="">-- Pilih --</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Janda">Janda</option>
                                            <option value="Duda">Duda</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pendidikan_tertinggi" class="form-label">Pendidikan
                                            Tertinggi <small class="text-danger">*</small></label>
                                        <select class="form-control form-control-sm" name="pendidikan_tertinggi"
                                            id="pendidikan_tertinggi" required aria-label="Default select example">
                                            <option value="">-- Pilih --</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
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
                                        <option value="Pelamar">Pelamar</option>
                                        <option value="Karyawan Baru">Karyawan Baru</option>
                                        <option value="Karyawan">Karyawan</option>
                                        <option value="Keluar">Keluar</option>
                                    </select>
                                </div>
                                <div class="row d-flex">
                                    <div class="mb-3 col-lg-6">
                                        <label for="join_date" class="form-label">Join Date <small
                                                class="text-danger">*</small></label>
                                        <input type="date" class="form-control form-control-sm" name="join_date"
                                            id="join_date">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="retirement_date" class="form-label">Retirement Date <small
                                                class="text-danger">*</small></label>
                                        <input type="date" class="form-control form-control-sm" required
                                            name="retirement_date" id="retirement_date">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status <small
                                            class="text-danger">*</small></label>
                                    <select class="form-control form-control-sm" name="status" required
                                        aria-label="Default select example">
                                        <option value="">-- Pilih --</option>
                                        <option value="PERMANENT">PERMANENT</option>
                                        <option value="CONTRACT">CONTRACT</option>
                                        <option value="PKH">PKH</option>
                                        <option value="KONSULTAN">KONSULTAN</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="active_passive" class="form-label">Aktive/Passive <small
                                            class="text-danger">*</small></label>
                                    <select class="form-control form-control-sm" required name="active_passive"
                                        aria-label="Default select example">
                                        <option value="">-- Pilih --</option>
                                        <option value="ACTIVE">ACTIVE</option>
                                        <option value="PASSIVE">PASSIVE</option>
                                    </select>
                                </div>
                                <div class="row d-flex">
                                    <div class="mb-3 col-lg-6">
                                        <label for="sk_tetap" class="form-label">SK Tetap <small
                                                class="text-danger">*</small></label>
                                        <textarea required class="form-control form-control-sm" name="sk_tetap"
                                            rows="10"></textarea>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="pkwt" class="form-label">PKWT <small
                                                class="text-danger">*</small></label>
                                        <textarea class="form-control form-control-sm" name="pkwt" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" class="form-control form-control-sm" name="foto">
                                    <small><i>Kosongkan jika tidak ada gambar yang ingin diupload!</i></small>
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
                        <button type="submit" name="add_pegawai" class="btn btn-sm btn-primary">Simpan</button>
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