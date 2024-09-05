<?php
require "../php/db.php";
checkAuth();
$host = parse_url($_SERVER['HTTP_HOST'], PHP_URL_HOST);
$domain_parts = explode('.', $host);
$domain = $domain_parts[count($domain_parts) - 2] . '.' . $domain_parts[count($domain_parts) - 1];
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
                            <li class="breadcrumb-item"><a href="#">Бизнес</a></li>
                            <li class="breadcrumb-item" aria-current="page">Ссылки</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Ссылки</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <?if(R::findOne('user', 'id = ?', [$_SESSION['logged_user']])->follow != 'link'):?>
                    <div class="text-center">
                        <h4>У вас пока нету ссылки для записи</h4>
                        <a href="new-site-settings.php" class="btn btn-primary mt-3">Создайте ссылку</a>
                    </div>
                <?else:?>
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" id="linkcopy" readonly value="<?= R::findOne('link', 'company = ?', [$company->id])->link?>">
                            <button class="btn btn-outline-secondary" type="button" id="copy">Копировать</button>
                        </div>
                    </div>
                </div>
                <?endif;?>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-inline-flex align-items-center">
                                <i class="ph-duotone ph-arrow-square-in text-primary me-2 f-20"></i>
                                <p class="text-muted mb-0"><b>Просмотры</b></p>
                            </div>
                            <h4 class="mb-0">0</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-inline-flex align-items-center">
                                <i class="ph-duotone ph-book-bookmark text-warning me-2 f-20"></i>
                                <p class="text-muted mb-0"><b>Записи</b></p>
                            </div>
                            <h4 class="mb-0">0</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-inline-flex align-items-center">
                                <i class="ph-duotone ph-book-bookmark text-danger me-2 f-20"></i>
                                <p class="text-muted mb-0"><b>Посетители</b></p>
                            </div>
                            <h4 class="mb-0">0</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<?require "../php/details/canvas.php"?>


<!-- Required Js -->
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/fonts/custom-font.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>
<script src="../assets/js/pcoded.js"></script>
<script src="../assets/js/plugins/imask.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<script>
    $(document).ready(function (){
        $('#copy').on('click', function (){
            $('#linkcopy').select();
            document.execCommand('copy');
            alert('Ссылка скопировано');
        })
    })
</script>

</body>
<!-- [Body] end -->
</html>
