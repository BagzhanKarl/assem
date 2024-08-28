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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Основная информация</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="../php/user/new_user.php" enctype="multipart/form-data" class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Имя <span class="text-danger">*</span></label>
                                    <input type="text" name="firstname" required class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Фамилия <span class="text-danger">*</span></label>
                                    <input type="text" name="lastname" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Роль пользователя <span class="text-danger">*</span></label>
                                    <select class="form-select" name="role" required>
                                        <?
                                        $roles = R::findAll('role', 'id != ?', [1]);
                                        foreach ($roles as $role){
                                            echo "<option value='". $role->id . "'>" . $role->title . "</option>";

                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Номер телефона <span class="text-danger">*</span></label>
                                    <input type="text" id="phone" required name="phone" class="form-control" placeholder="+7 ">
                                    <div class="form-text">Мы отправляем ссылку на WhatsApp для завершения регистрации</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Должность <span class="text-danger">*</span></label>
                                    <input type="text" name="roletitle" required class="form-control" placeholder="Мастер">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Фото профиля</label>
                                    <input type="file" name="avatar" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Био <span class="text-danger">*</span></label>
                                    <textarea name="bio" required class="form-control" rows="3" placeholder=""></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 text-end">
                                <button class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
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

<script>
    IMask(
        document.getElementById('phone'),
        {
            mask: '+{7} (000) 000-00-00'
        }
    )
</script>
</body>
<!-- [Body] end -->
</html>
