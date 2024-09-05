<?php
require "../php/db.php";
$businesstype = R::findAll('businesstype');
?>
<!doctype html>
<html lang="ru">
<!-- [Head] start -->

<head>
    <title>Register | Регистрация</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon-1.svg" type="image/x-icon">
    <!-- [Google Font : Public Sans] icon -->
    <link href="../../../css2-1?family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style-1.css">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min-1.css">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="../assets/fonts/feather-1.css">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome-1.css">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/material-1.css">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style-1.css" id="main-style-link">
    <link rel="stylesheet" href="../assets/css/style-preset-1.css">

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->

<div class="auth-main v1">
    <div class="auth-wrapper">
        <div class="auth-form">
            <div class="card my-5">
                <div class="card-body">
                    <div class="text-center">
                        <img src="../assets/images/authentication/img-auth-register.png" alt="images" class="img-fluid mb-3">
                        <h4 class="f-w-500 mb-1">Давайте знакомиться!</h4>
                        <p class="mb-3">Расскажите о себе и своей компании. Это займет до 30 секунд.</p>
                    </div>
                    <div class="mb-3">
                        <label for="">Тип бизнеса</label>
                        <select id="types" class="form-control">
                            <option value="">Выбрать</option>
                            <?php
                            foreach ($businesstype as $role){
                                echo "<option value='". $role->id . "'>" . $role->title . "</option>";

                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Сфера бизнеса</label>
                        <select id="areas" class="form-control">
                            <option value="">Выбрать</option>

                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Каком городе находитесь</label>
                        <input type="text" id="city" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Сколько сотрудников работает в компании?</label>
                        <select id="employes" class="form-control">
                            <option value="1">1</option>
                            <option value="2-5">2-5</option>
                            <option value="6-10">6-10</option>
                            <option value="11-25">11-25</option>
                            <option value="25+">25+</option>
                        </select>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="button" class="btn btn-primary" onclick="sendData()" id="nextBtn">Завершить</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="auth-sidefooter">
            <img src="../assets/images/logo-dark-1.svg" class="img-brand img-fluid" alt="images">
        </div>
        <div class="loader">
            <div class="p-4 text-center">
                <div class="custom-loader"></div>
                <h2 class="my-3 f-w-400">Регистрация..</h2>
                <p class="mb-0">Пожалуйста, подождите минутку</p>
            </div>
        </div>

    </div>
</div>
<!-- [ Main Content ] end -->
<!-- Required Js -->
<script src="../assets/js/plugins/popper.min-1.js"></script>
<script src="../assets/js/plugins/simplebar.min-1.js"></script>
<script src="../assets/js/plugins/bootstrap.min-1.js"></script>
<script src="../assets/js/fonts/custom-font-1.js"></script>
<script src="../assets/js/pcoded-1.js"></script>
<script src="../assets/js/plugins/feather.min-1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    var elem = document.querySelector('.loader'),
        fadeInInterval,
        fadeOutInterval;
    function fadeIn(timing) {
        clearInterval(fadeInInterval);
        clearInterval(fadeOutInterval);
        var newValue = 0;
        elem.style.display = 'flex';
        elem.style.opacity = 0;
        fadeInInterval = setInterval(function () {
            if (newValue < 1) {
                newValue += 0.01;
            } else if (newValue >= 1) {
                clearInterval(fadeInInterval);
            }
            elem.style.opacity = newValue;
        }, timing);
    }
    function fadeOut(timing) {
        clearInterval(fadeInInterval);
        clearInterval(fadeOutInterval);
        var newValue = 1;
        elem.style.opacity = 1;
        fadeOutInterval = setInterval(function () {
            if (newValue > 0) {
                newValue -= 0.01;
            } else if (newValue <= 0) {
                elem.style.opacity = 0;
                elem.style.display = 'none';
                clearInterval(fadeOutInterval);
            }
            elem.style.opacity = newValue;
        }, timing);
    }

    function SweetAlert(title, text){
        Swal.fire({
            title: title,
            text: text,
            icon: 'error',
            confirmButtonText: 'OK'
        })
    }

    function sendData(){
        fadeIn(3);
        let types = $('#types').val();
        let areas = $('#areas').val();
        let employes = $('#employes').val();
        let city = $('#city').val();

        $.ajax({
            url: '../php/user/sign.php',
            method: "post",
            data: {
                laststep: 'start',
                types: types,
                areas: areas,
                employes: employes,
                city: city,
            },
            dataType: 'json',
            success: function(response){
                fadeOut(3);
                if (typeof response !== 'object') {
                    response = JSON.parse(response);
                }
                if(response.status == 2001){
                    window.location.href = "../dashboard";
                }
                if(response.status = 4000){
                    SweetAlert('Упс', response.data);
                }
            },
            error: function(error) {
                console.log(error);
                SweetAlert('Ошибка', 'Не удалось выполнить запрос.');
            }
        })
    }

    $(document).ready(function (){
        $('#types').on('change', function (){
            $.ajax({
                url: '../php/areas/getarea.php',
                method: 'POST',
                data: {
                    type: $('#types').val(),
                },
                success: function (response){
                    $('#areas').html(response);
                }
            })
        })
    })
</script>

<script>
    layout_change('light');
</script>

<script>
    layout_sidebar_change('light');
</script>

<script>
    change_box_container('false');
</script>

<script>
    layout_caption_change('true');
</script>

<script>
    layout_rtl_change('false');
</script>

<script>
    preset_change('preset-1');
</script>

</body>
<!-- [Body] end -->
</html>
