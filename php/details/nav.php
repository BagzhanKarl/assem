<?php
$user = R::findOne('user', 'id = ?', [$_SESSION['logged_user']]);


?>
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img src="../../assets/images/logo-dark.svg" alt="logo image" class="logo-lg">
                <span class="badge bg-brand-color-2 rounded-pill ms-2 theme-version">v1.0.0</span>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">


                <li class="pc-item pc-caption">
                    <label>CRM</label>
                    <i class="ph-duotone ph-chart-pie"></i>
                </li>

                <li class="pc-item">
                    <a href="/dashboard/index.php" class="pc-link">
                        <span class="pc-micon">
                          <i class="ph-duotone ph-gauge"></i>
                        </span>
                        <span class="pc-mtext">Рабочий стол</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="/dashboard/contacts.php" class="pc-link">
                        <span class="pc-micon">
                          <i class="ph-duotone ph-user-list"></i>
                        </span>
                        <span class="pc-mtext">Контакты</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="/dashboard/leeds.php" class="pc-link">
                        <span class="pc-micon">
                          <i class="ph-duotone ph-list-checks"></i>
                        </span>
                        <span class="pc-mtext">Лиды</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="./dashboard/deals.php" class="pc-link">
                        <span class="pc-micon">
                          <i class="ph-duotone ph-cardholder"></i>
                        </span>
                        <span class="pc-mtext">Сделки</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Бизнес</label>
                    <i class="ph-duotone ph-chart-pie"></i>
                </li>

                <li class="pc-item">
                    <a href="/business/deals.php" class="pc-link">
                        <span class="pc-micon">
                          <i class="ph-duotone ph-address-book"></i>
                        </span>
                        <span class="pc-mtext">Журнал</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="./dashboard/deals.php" class="pc-link">
                        <span class="pc-micon">
                          <i class="ph-duotone ph-folder-simple-user"></i>
                        </span>
                        <span class="pc-mtext">Сотрудники</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="./dashboard/deals.php" class="pc-link">
                        <span class="pc-micon">
                          <i class="ph-duotone ph-clipboard-text"></i>
                        </span>
                        <span class="pc-mtext">Услуги</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="./dashboard/deals.php" class="pc-link">
                        <span class="pc-micon">
                          <i class="ph-duotone ph-globe"></i>
                        </span>
                        <span class="pc-mtext">Настроики сайта</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Интеграций</label>
                    <i class="ph-duotone ph-chart-pie"></i>
                </li>

                <li class="pc-item">
                    <a href="./dashboard/deals.php" class="pc-link">
                        <span class="pc-micon">
                          <i class="ph-duotone ph-whatsapp-logo"></i>
                        </span>
                        <span class="pc-mtext">WhatsApp</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="./dashboard/deals.php" class="pc-link">
                        <span class="pc-micon">
                          <i class="ph-duotone ph-instagram-logo"></i>
                        </span>
                        <span class="pc-mtext">Instagram</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Нейросети</label>
                    <i class="ph-duotone ph-chart-pie"></i>
                </li>


            </ul>
            <div class="card nav-action-card bg-brand-color-4">
                <div class="card-body" style="background-image: url('../../assets/images/layout/nav-card-bg.svg')">
                    <h5 class="text-dark">Help Center</h5>
                    <p class="text-dark text-opacity-75">Please contact us for more questions.</p>
                    <a href="https://phoenixcoded.support-hub.io/" class="btn btn-primary" target="_blank">Go to help Center</a>
                </div>
            </div>
        </div>
        <div class="card pc-user-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="../../assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <div class="dropdown">
                            <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 me-2">
                                        <h6 class="mb-0"><?= $user->firstname . " " . $user->lastname?></h6>
                                        <small>
                                            <?
                                            echo R::findOne('role', 'id = ?', [$user->role])->title
                                            ?>
                                        </small>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="btn btn-icon btn-link-secondary avtar">
                                            <i class="ph-duotone ph-windows-logo"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <a class="pc-user-links">
                                            <i class="ph-duotone ph-user"></i>
                                            <span>Мой аккаунт</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pc-user-links">
                                            <i class="ph-duotone ph-gear"></i>
                                            <span>Настроики</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pc-user-links">
                                            <i class="ph-duotone ph-power"></i>
                                            <span>Выйти</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>