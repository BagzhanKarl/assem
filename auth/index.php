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
                        <button type="button" class="btn btn-primary" id="show-loader">Авторизоваться</button>
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
<script>
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

    // Обработка клика для запуска анимации
    if (control) {
        control.addEventListener('click', function () {
            if (!elem.classList.contains('is-active')) {
                fadeIn(3);
                setTimeout(function () {
                    fadeOut(3);
                }, 10000);
            }
        });
    }

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

<div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
    <div class="offcanvas-header justify-content-between">
        <h5 class="offcanvas-title">Settings</h5>
        <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x"></i></button>
    </div>
    <div class="pct-body customizer-body">
        <div class="offcanvas-body py-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="pc-dark">
                        <h6 class="mb-1">Theme Mode</h6>
                        <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                        <div class="row theme-color theme-layout">
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="true" onclick="layout_change('light');">
                                        <span class="btn-label">Light</span>
                                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');">
                                        <span class="btn-label">Dark</span>
                                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="default" onclick="layout_change_default();" data-bs-toggle="tooltip" title="Automatically sets the theme based on user's operating system's color scheme.">
                                        <span class="btn-label">Default</span>
                                        <span class="pc-lay-icon d-flex align-items-center justify-content-center">
                      <i class="ph-duotone ph-cpu"></i>
                    </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Sidebar Theme</h6>
                    <p class="text-muted text-sm">Choose Sidebar Theme</p>
                    <div class="row theme-color theme-sidebar-color">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn" data-value="true" onclick="layout_sidebar_change('dark');">
                                    <span class="btn-label">Dark</span>
                                    <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn active" data-value="false" onclick="layout_sidebar_change('light');">
                                    <span class="btn-label">Light</span>
                                    <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Accent color</h6>
                    <p class="text-muted text-sm">Choose your primary theme color</p>
                    <div class="theme-color preset-color">
                        <a href="#!" class="active" data-value="preset-1"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-2"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-3"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-4"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-5"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-6"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-7"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-8"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-9"><i class="ti ti-check"></i></a>
                        <a href="#!" data-value="preset-10"><i class="ti ti-check"></i></a>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Sidebar Caption</h6>
                    <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
                    <div class="row theme-color theme-nav-caption">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn active" data-value="true" onclick="layout_caption_change('true');">
                                    <span class="btn-label">Caption Show</span>
                                    <span class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn" data-value="false" onclick="layout_caption_change('false');">
                                    <span class="btn-label">Caption Hide</span>
                                    <span class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="pc-rtl">
                        <h6 class="mb-1">Theme Layout</h6>
                        <p class="text-muted text-sm">LTR/RTL</p>
                        <div class="row theme-color theme-direction">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false" onclick="layout_rtl_change('false');">
                                        <span class="btn-label">LTR</span>
                                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true" onclick="layout_rtl_change('true');">
                                        <span class="btn-label">RTL</span>
                                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item pc-box-width">
                    <div class="pc-container-width">
                        <h6 class="mb-1">Layout Width</h6>
                        <p class="text-muted text-sm">Choose Full or Container Layout</p>
                        <div class="row theme-color theme-container">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false" onclick="change_box_container('false')">
                                        <span class="btn-label">Full Width</span>
                                        <span class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true" onclick="change_box_container('true')">
                                        <span class="btn-label">Fixed Width</span>
                                        <span class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-grid">
                        <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

</body>
<!-- [Body] end -->
</html>
