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
    <link rel="stylesheet" href="../assets/css/style-1.css" id="main-style-link">
    <link rel="stylesheet" href="../assets/css/style-preset-1.css">

    <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .step-indicator .step-num {
            width: 19%;
            height: 100%;
            text-align: center;
            padding: 10px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .step-indicator .step-num.active {
            background-color: #04a9f5;
            color: white;
            font-size: 12px;
            cursor: pointer;

        }

        .step-btns {
            margin-top: 20px;
        }
        .form-group{
            margin-bottom: 10px;
            margin-top: 15px;
        }
    </style>

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
                            <li class="breadcrumb-item" aria-current="page">Настройка онлайн-записи</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Настройка онлайн-записи</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="step-indicator p-0 m-0">
                            <div class="step-num active" data-step="0">Услуги</div>
                            <div class="step-num" data-step="1">Сотрудники</div>
                            <div class="step-num" data-step="2">Информация</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form id="bookingWizard" method="POST" action="/php/jaz/save.php">
                            <!-- Step 1: Информация об услугах -->
                            <div class="step active">
                                <h4>Информация об услугах</h4>
                                <div class="form-group">
                                    <label for="service_name">Название услуги:</label>
                                    <input type="text" class="form-control" id="service_name" name="service_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="service_description">Категория услуги:</label>
                                    <input class="form-control" id="category" name="category" required>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="duration" value="30" id="customCheckinlh1">
                                            <label class="form-check-label" for="customCheckinlh1"> 30 минут </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="duration" value="60" checked id="customCheckinlh2">
                                            <label class="form-check-label" for="customCheckinlh2"> 1 час </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="duration" value="90" id="customCheckinlh3">
                                            <label class="form-check-label" for="customCheckinlh3"> 1,5 часа </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="duration" value="120" id="customCheckinlh4" >
                                            <label class="form-check-label" for="customCheckinlh4"> 2 часа </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="service_price">Стоимость (в тенге):</label>
                                    <input type="number" class="form-control" id="price" name="service_price" min="0" required>
                                </div>
                            </div>

                            <!-- Step 2: График работы -->
                            <div class="step">
                                <h4>Сотрудники</h4>
                                <div class="form-group mb-3">
                                    <label for="service_price">Имя:</label>
                                    <input type="text" class="form-control" name="username"  required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="service_price">Номер телефона:</label>
                                    <input type="text" class="form-control" id="phone" placeholder="+7" value="+7" name="userphone" required>
                                    <div class="form-text">Мы отправляем пригласительное письмо на этот номер в WhatsApp</div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="service_price">Должность специалиста:</label>
                                    <input type="text" class="form-control" id="service_price" name="userrole" min="0" required>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="time" value="7" id="time1">
                                            <label class="form-check-label" for="time1"> 07:00-19:00 </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="time" value="8" checked id="time2">
                                            <label class="form-check-label" for="time2"> 08:00-20:00 </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="time" value="9" id="time3">
                                            <label class="form-check-label" for="time3"> 09:00-21:00 </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="time" value="10" id="time4">
                                            <label class="form-check-label" for="time4"> 10:00-22:00 </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Информация о специалистах -->
                            <div class="step">
                                <h4>Информация компаний</h4>
                                <div class="form-group">
                                    <label for="contact_phone">Улица:</label>
                                    <input type="tel" class="form-control" placeholder="Утеген батыр" name="street" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Дом:</label>
                                    <input type="text" class="form-control" placeholder="71а" name="home" required>
                                </div>

                            </div>

                            <!-- Navigation buttons -->
                            <div class="step-btns mt-5 d-flex justify-content-between text-end">
                                <button type="button" class="btn btn-primary" id="prevBtn" onclick="nextPrev(-1)">Назад</button>
                                <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Далее</button>
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

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="../assets/js/plugins/choices.min.js"></script>
<script>
    let currentStep = 0;
    showStep(currentStep);

    function showStep(n) {
        const steps = document.getElementsByClassName("step");
        const indicators = document.getElementsByClassName("step-num");
        steps[n].classList.add("active");
        indicators[n].classList.add("active");

        // Отключаем кнопку "Назад" на первом шаге
        if (n === 0) {
            document.getElementById("prevBtn").disabled = true;
        } else {
            document.getElementById("prevBtn").disabled = false;
        }

        // Меняем текст на кнопке "Далее" на последнем шаге
        document.getElementById("nextBtn").innerHTML = n === (steps.length - 1) ? "Сохранить" : "Далее";
    }

    function nextPrev(n) {
        const steps = document.getElementsByClassName("step");
        const indicators = document.getElementsByClassName("step-num");
        steps[currentStep].classList.remove("active");
        indicators[currentStep].classList.remove("active");
        currentStep += n;
        if (currentStep >= steps.length) {
            document.getElementById("bookingWizard").submit();
            return false;
        }
        showStep(currentStep);
    }

    function addService() {
        let serviceFields = `
            <div class="form-group">
                <label for="service_name_${currentStep}">Название услуги:</label>
                <input type="text" class="form-control" name="service_name[]" required>
            </div>
            <div class="form-group">
                <label for="service_description_${currentStep}">Описание услуги:</label>
                <textarea class="form-control" name="service_description[]" required></textarea>
            </div>
            <div class="form-group">
                <label for="service_duration_${currentStep}">Продолжительность (в минутах):</label>
                <input type="number" class="form-control" name="service_duration[]" min="1" required>
            </div>
            <div class="form-group">
                <label for="service_price_${currentStep}">Стоимость (в тенге):</label>
                <input type="number" class="form-control" name="service_price[]" min="0" required>
            </div>
            <hr>
        `;
        let newService = document.createElement('div');
        newService.innerHTML = serviceFields;
        document.querySelector('.step.active').appendChild(newService);
    }

    function addSpecialist() {
        let specialistFields = `
        <div class="form-group">
            <label for="specialist_name_${Date.now()}">Имя специалиста:</label>
            <input type="text" class="form-control" name="specialist_name[]" required>
        </div>
        <div class="form-group mb-3">
            <label for="specialist_schedule_${Date.now()}">График работы специалиста:</label>
            <input type="text" class="form-control" name="specialist_schedule[]" required placeholder="например: Пн-Ср 9:00-17:00">
        </div>
        <div class="form-group mb-3">
            <label for="specialist_info_${Date.now()}">Краткая информация:</label>
            <input type="text" class="form-control" name="specialist_info[]" required>
        </div>
        <div class="form-group mb-3">
            <label for="specialist_phone_${Date.now()}">Номер телефона:</label>
            <input type="text" class="form-control" placeholder="+77777777777" name="specialist_phone[]" required>
        </div>
        <div class="form-group mb-3">
            <label for="specialist_photo_${Date.now()}">Фотография специалиста:</label>
            <input type="file" class="form-control" name="specialist_photo[]" accept="image/*">
        </div>
        <hr>
    `;
        let newSpecialist = document.createElement('div');
        newSpecialist.innerHTML = specialistFields;
        document.querySelector('.step.active').appendChild(newSpecialist);
    }

    IMask(
        document.getElementById('phone'),
        {
            mask: '+{7}(000)000-00-00'
        }
    )

</script>
<script src="../assets/js/plugins/choices.min.js"></script>

</body>
<!-- [Body] end -->
</html>
