<?php
require "../php/db.php";
checkAuth();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Рабочий стол | Assem</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">

    <!-- map-vector css -->
    <link rel="stylesheet" href="../assets/css/plugins/jsvectormap.min.css">
    <!-- [Google Font : Public Sans] icon -->
    <link href="../../../css2?family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="../assets/fonts/feather.css">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/material.css">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
    <link rel="stylesheet" href="../assets/css/style-preset.css">


</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<?require "../php/details/nav.php"?>
<?require "../php/details/header.php"?>

<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a>Assem</a></li>
                            <li class="breadcrumb-item"><a href="#">CRM</a></li>
                            <li class="breadcrumb-item" aria-current="page">Рабочий стол</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Рабочий стол</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-6 col-xl-4">
                <div class="card statistics-card-1 h-100">
                    <div class="card-header d-flex align-items-center justify-content-between py-3">
                        <h4>Заявки</h4>
                        <div class="dropdown">
                            <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons-two-tone f-18">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#" data-type="order" data-date="day">День</a>
                                <a class="dropdown-item" href="#" data-type="order" data-date="week">Неделя</a>
                                <a class="dropdown-item" href="#" data-type="order" data-date="month">Месяц</a>
                                <a class="dropdown-item" href="#" data-type="order" data-date="quarter">Квартал</a>
                                <a class="dropdown-item" href="#" data-type="order" data-date="year">Год</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="../assets/images/widget/img-status-1-1.svg" alt="img" class="img-fluid img-bg">
                        <div class="d-flex align-items-center">
                            <h1 class="h1 f-w-700 d-flex align-items-center m-b-0">237 <small class="text-muted"></small></h1>
<!--                            <span class="badge bg-light-success ms-2">36%</span>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="card statistics-card-1 h-100">
                    <div class="card-header d-flex align-items-center justify-content-between py-3">
                        <h4>Записи</h4>
                        <div class="dropdown">
                            <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons-two-tone f-18">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#" data-type="entries" data-date="day">День</a>
                                <a class="dropdown-item" href="#" data-type="entries" data-date="week">Неделя</a>
                                <a class="dropdown-item" href="#" data-type="entries" data-date="month">Месяц</a>
                                <a class="dropdown-item" href="#" data-type="entries" data-date="quarter">Квартал</a>
                                <a class="dropdown-item" href="#" data-type="entries" data-date="year">Год</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="../assets/images/widget/img-status-2-1.svg" alt="img" class="img-fluid img-bg">
                        <div class="d-flex align-items-center">
                            <h1 class="h1 f-w-300 d-flex align-items-center m-b-0">100 <small class="text-muted">/500</small></h1>
<!--                            <span class="badge bg-light-primary ms-2">20%</span>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="card statistics-card-1 h-100">
                    <div class="card-header d-flex align-items-center justify-content-between py-3">
                        <h4>Продажи</h4>
                        <div class="dropdown">
                            <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons-two-tone f-18">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#" data-type="sells" data-date="day">День</a>
                                <a class="dropdown-item" href="#" data-type="sells" data-date="week">Неделя</a>
                                <a class="dropdown-item" href="#" data-type="sells" data-date="month">Месяц</a>
                                <a class="dropdown-item" href="#" data-type="sells" data-date="quarter">Квартал</a>
                                <a class="dropdown-item" href="#" data-type="sells" data-date="year">Год</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="../assets/images/widget/img-status-3-1.svg" alt="img" class="img-fluid img-bg">
                        <div class="d-flex align-items-center">
                            <h1 class="h1 f-w-300 d-flex align-items-center m-b-0">50 <small class="text-muted">/400</small></h1>
<!--                            <span class="badge bg-light-danger ms-2">10%</span>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-6 mt-3">
                <div class="card statistics-card-1 h-100">
                    <div class="card-header d-flex align-items-center justify-content-between py-3">
                        <h4>ТОП услуги</h4>
                        <div class="dropdown">
                            <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons-two-tone f-18">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Подробнее</a>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="../assets/images/widget/img-status-3-1.svg" alt="img" class="img-fluid img-bg">
                        <div class="d-flex align-items-center">
                            <h3 class="h3 f-w-700 d-flex align-items-center m-b-0">Массаж</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-6 mt-3">
                <div class="card statistics-card-1 h-100">
                    <div class="card-header d-flex align-items-center justify-content-between py-3">
                        <h4>ТОП мастер</h4>
                        <div class="dropdown">
                            <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons-two-tone f-18">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Подробнее</a>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="../assets/images/widget/img-status-2-1.svg" alt="img" class="img-fluid img-bg">

                        <div class="d-flex align-items-center">
                            <h3 class="h3 f-w-700 d-flex align-items-center m-b-0">Кука Бука</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<?require "../php/details/canvas.php"?>


<!-- [Page Specific JS] start -->
<script src="../assets/js/plugins/apexcharts.min.js"></script>
<script src="../assets/js/plugins/jsvectormap.min.js"></script>
<script src="../assets/js/plugins/world.js"></script>
<script src="../assets/js/plugins/world-merc.js"></script>
<script src="../assets/js/pages/dashboard-default.js"></script>
<!-- [Page Specific JS] end -->
<!-- Required Js -->
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/fonts/custom-font.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>
<script src="../assets/js/pcoded.js"></script>
</body>
<!-- [Body] end -->
</html>
