<?php 

$Kepegawaian = new Kepegawaian();

$jumlah_permanent = $Kepegawaian->count_permanent();
$jumlah_contract = $Kepegawaian->count_contract();
$jumlah_pkh = $Kepegawaian->count_pkh();
$jumlah_konsultan = $Kepegawaian->count_konsultan();
$jumlah_active = $Kepegawaian->count_active();
$jumlah_passive = $Kepegawaian->count_passive();
$jumlah_sk_tetap = $Kepegawaian->count_sk_tetap();
$jumlah_sk_null = $Kepegawaian->count_sk_null();
$jumlah_pkwt = $Kepegawaian->count_pkwt();
$jumlah_pkwt_null = $Kepegawaian->count_pkwt_null();

?>

<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                        fill="black" />
                                    <path opacity="0.3"
                                        d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                        fill="black" />
                                    <path opacity="0.3"
                                        d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                                Shopping Cart
                            </div>
                            <div class="fw-bold text-white">
                                Lands, Houses, Ranchos, Farms
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.3"
                                        d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                        fill="black" />
                                    <path
                                        d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                        fill="black" />
                                    <path
                                        d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                                Appartments
                            </div>
                            <div class="fw-bold text-white">
                                Flats, Shared Rooms, Duplex
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-success hoverable card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotune/graphs/gra005.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.3"
                                        d="M14 12V21H10V12C10 11.4 10.4 11 11 11H13C13.6 11 14 11.4 14 12ZM7 2H5C4.4 2 4 2.4 4 3V21H8V3C8 2.4 7.6 2 7 2Z"
                                        fill="black" />
                                    <path
                                        d="M21 20H20V16C20 15.4 19.6 15 19 15H17C16.4 15 16 15.4 16 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                                Sales Stats
                            </div>
                            <div class="fw-bold text-white">
                                50% Increased for FY20
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 4-->
                    <div class="card card-xl-stretch">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Jumlah Pegawai</span>
                                <span class="text-muted fw-bold fs-7">Berdasarkan SK</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-center">
                                    <div class="col-xl-6 me-5">
                                        <!--begin::Statistics Widget 5-->
                                        <a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <div class="fw-bold text-white">
                                                    Punya SK Tetap
                                                </div>
                                                <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                                                    <?=$jumlah_sk_tetap;?>
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </a>
                                        <!--end::Statistics Widget 5-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Statistics Widget 5-->
                                        <a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <div class="fw-bold text-white">
                                                    Tidak Punya SK Tetap
                                                </div>
                                                <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                                                    <?=$jumlah_sk_null;?>
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </a>
                                        <!--end::Statistics Widget 5-->
                                    </div>
                                </div><br>
                                <div class="d-flex justify-content-center mt-xl-n5">
                                    <div class="col-xl-6 me-5">
                                        <!--begin::Statistics Widget 5-->
                                        <a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <div class="fw-bold text-white">
                                                    Punya SK PKWT
                                                </div>
                                                <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                                                    <?=$jumlah_pkwt;?>
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </a>
                                        <!--end::Statistics Widget 5-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Statistics Widget 5-->
                                        <a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <div class="fw-bold text-white">
                                                    Tidak Punya SK PKWT
                                                </div>
                                                <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                                                    <?=$jumlah_pkwt_null;?>
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </a>
                                        <!--end::Statistics Widget 5-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 4-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 3-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Jumlah Pegawai</span>
                                <span class="text-muted fw-bold fs-7">Berdasarkan Status</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex flex-column">
                            <!--begin::Stats-->
                            <div class="card-p pt-5 bg-body flex-grow-1">
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col mr-8">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">
                                            PERMANENT
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bolder"><?= $jumlah_permanent; ?></div>
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">
                                            CONTRACT
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="fs-4 fw-bolder"><?= $jumlah_contract; ?></div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0 mt-8">
                                    <!--begin::Col-->
                                    <div class="col mr-8">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">
                                            PKH
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="fs-4 fw-bolder"><?= $jumlah_pkh; ?></div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">
                                            KONSULTAN
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bolder"><?= $jumlah_konsultan; ?></div>
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-3-charts card-rounded-bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                    <path fill="#0099ff" fill-opacity="1"
                                        d="M0,288L30,256C60,224,120,160,180,133.3C240,107,300,117,360,122.7C420,128,480,128,540,112C600,96,660,64,720,85.3C780,107,840,181,900,186.7C960,192,1020,128,1080,90.7C1140,53,1200,43,1260,48C1320,53,1380,75,1410,85.3L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                                    </path>
                                </svg>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 3-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 5-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Jumlah Pegawai</span>
                                <span class="text-muted fw-bold fs-7">Aktive & Passive</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-center flex-column">
                            <!--begin::Items-->
                            <!-- <div class=""> -->
                            <div class="col-xl-12">
                                <!--begin::Statistics Widget 5-->
                                <a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                                    <!--begin::Body-->
                                    <div class="card-body text-center">
                                        <div class="fw-bold text-white">
                                            ACTIVE
                                        </div>
                                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                                            <?= $jumlah_active; ?>
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                </a>
                                <!--end::Statistics Widget 5-->
                            </div><br>
                            <div class="col-xl-12 mt-xl-n5">
                                <!--begin::Statistics Widget 5-->
                                <a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                                    <!--begin::Body-->
                                    <div class="card-body text-center">
                                        <div class="fw-bold text-white">
                                            PASSIVE
                                        </div>
                                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                                            <?= $jumlah_passive; ?>
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                </a>
                                <!--end::Statistics Widget 5-->
                            </div>
                            <!-- </div> -->
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
    <!--end::Page-->
</div>
<!--end::Root-->