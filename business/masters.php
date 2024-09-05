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
                            <li class="breadcrumb-item" aria-current="page">Сотрудники</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Сотрудники</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Сотрудники <?= $company->name?></h4>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Добавить сотрудника</button>
                        </div>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="border-bottom-primary">
                                        <th>#</th>
                                        <th>ФИО</th>
                                        <th>Номер телефона</th>
                                        <th>Должность</th>
                                        <th>Действие</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?
                                    $number = 1;
                                    $master = R::findAll('masters', 'company = ?', [$company->id]);
                                    foreach ($master as $item){
                                        $masterUser = R::findOne('user', 'id = ?', [$item->user]);

                                        echo '<tr class="border-bottom-primary">';
                                        echo '<td>'.$number.'</td>';
                                        echo '<td>'.$masterUser->firstname . " " .$masterUser->lastname.'</td>';
                                        echo '<td>'.$masterUser->phone.'</td>';
                                        echo '<td>'.$item->role.'</td>';
                                        echo '<td><a href="master.php?id='. $masterUser->id.'">Открыть профиль</a></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form method="POST" action="../php/jaz/addmaster.php" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Добавить сотрудника</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
                        <div class="row">
                            <p class="col">
                                <label for="">Имя <span class="text-danger">*</span></label>
                                <input type="text" name="firstname" required autocomplete="off" class="form-control">
                            </p>
                            <p class="col">
                                <label for="">Фамилия</label>
                                <input type="text" name="surname" autocomplete="off" class="form-control">
                            </p>
                        </div>
                        <p>
                            <label for="">Номер телефона <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" autocomplete="off" required value="+7 ">
                        </p>
                        <p>
                            <label for="">Должность <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="role" autocomplete="off" required>
                        </p>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить</button>
                        <button class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
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
    IMask(
        document.getElementById('phone'), {
            mask: '+{7} (000) 000-00-00'
        }
    )
</script>

</body>
<!-- [Body] end -->
</html>
