<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Login | AssemCRM</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective.">
    <meta name="author" content="phoenixcoded">

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
                        <img src="../assets/images/authentication/img-auth-login.png" alt="images" class="img-fluid mb-3">
                        <h4 class="f-w-500 mb-1">Войти с вашим логином</h4>
                        <p class="mb-3">Нет аккаунта? <a href="signup-1.php" class="link-primary ms-1">Создать аккаунт</a></p>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="phone" placeholder="+7">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Пароль">
                    </div>
                    <div class="d-flex mt-1 justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="">
                            <label class="form-check-label text-muted" for="customCheckc1">Запомнить пароль?</label>
                        </div>
                        <a href="forgot-password.php"><h6 class="f-w-400 mb-0">Забыли пароль?</h6></a>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="button" class="btn btn-primary" onclick="loginUser()">Авторизоваться</button>
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
                <h2 class="my-3 f-w-400">Авторизация..</h2>
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
<script src="../assets/js/plugins/imask.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
<script>
    function SweetAlert(title, text){
        Swal.fire({
            title: title,
            text: text,
            icon: 'error',
            confirmButtonText: 'OK'
        })
    }
    IMask(
        document.getElementById('phone'), {
            mask: '+{7} (000) 000-00-00'
        }
    )
    var control = document.querySelector('#show-loader');
    var elem = document.querySelector('.loader'),
        fadeInInterval,
        fadeOutInterval;

    // Функция для плавного появления элемента
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

    // Функция для плавного исчезновения элемента
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

    function loginUser(){
        fadeIn(3);
        let phone = $('#phone').val();
        let password = $('#password').val();

        $.ajax({
            url: '../php/user/login.php',
            method: 'POST',
            data: {
                phone: phone,
                password: password,
                doLogin: 'start',
            },
            dataType: 'json',
            success: function (response){
                fadeOut(3);
                if (typeof response !== 'object') {
                    response = JSON.parse(response);
                }
                if(response.status == 2001){
                    window.location.href = "../";
                }
                if(response.status = 4000){
                    SweetAlert('Упс', response.data);
                }
            }
        })
    }
</script>

</body>
<!-- [Body] end -->
</html>
