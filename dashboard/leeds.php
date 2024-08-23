<?php
require "../php/db.php";
checkAuth();
$company = R::findOne('company', 'id = ?', [$_SESSION['logged_user']]);
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

    <link rel="stylesheet" href="../assets/css/plugins/style.css">

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
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card border-0 table-card user-profile-list">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="pc-dt-simple">
                                <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Номер телефона</th>
                                    <th>Источник</th>
                                    <th>Дата заявки</th>
                                    <th>Статус</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?
                                $leads = R::findAll('lead', 'company = ?', [$company->publicid]);
                                foreach ($leads as $lead) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/user/avatar-<?= rand(1, 10)?>.jpg" alt="user image" class="img-radius align-top m-r-15" style="width: 40px">
                                                <div class="d-flex">
                                                    <h5 class="m-0 p-0"><?= $lead->name . " " , $lead->surname?></h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $lead->phone?></td>
                                        <td><?= $lead->source?></td>
                                        <td><?= date('d.m.Y', $lead->created_at)?></td>
                                        <td>
                                            <span class="badge bg-light-danger"><?= $lead->status?></span>
                                            <div class="overlay-edit">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i class="ti ti-pencil f-18"></i></a></li>
                                                    <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-arrow-up-circle f-18"></i></a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <?
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<?require "../php/details/canvas.php"?>



<!-- Required Js -->
<script src="../assets/js/plugins/popper.min-1.js"></script>
<script src="../assets/js/plugins/simplebar.min-1.js"></script>
<script src="../assets/js/plugins/bootstrap.min-1.js"></script>
<script src="../assets/js/fonts/custom-font-1.js"></script>
<script src="../assets/js/pcoded-1.js"></script>
<script src="../assets/js/plugins/feather.min-1.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="../assets/js/plugins/simple-datatables.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
            sortable: false,
            perPage: 5,
            labels: {
                perPage: "Показать",
                noRows: "Нет данных",
                info: "Показано {start}–{end} из {rows} записей",
                search: "Поиск:",
            }
        });
    });
</script>


</body>
<!-- [Body] end -->
</html>
