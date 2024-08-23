<div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
    <div class="offcanvas-header justify-content-between">
        <h5 class="offcanvas-title">Настройки</h5>
        <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Закрыть"><i class="ti ti-x"></i></button>
    </div>
    <div class="pct-body customizer-body">
        <div class="offcanvas-body py-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="pc-dark">
                        <h6 class="mb-1">Режим темы</h6>
                        <p class="text-muted text-sm">Выберите светлый или темный режим или Авто</p>
                        <div class="row theme-color theme-layout">
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="true" onclick="layout_change('light');">
                                        <span class="btn-label">Светлый</span>
                                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');">
                                        <span class="btn-label">Темный</span>
                                        <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="default" onclick="layout_change_default();" data-bs-toggle="tooltip" title="Автоматически устанавливает тему в зависимости от цветовой схемы операционной системы пользователя.">
                                        <span class="btn-label">По умолчанию</span>
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
                    <h6 class="mb-1">Тема боковой панели</h6>
                    <p class="text-muted text-sm">Выберите тему боковой панели</p>
                    <div class="row theme-color theme-sidebar-color">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn" data-value="true" onclick="layout_sidebar_change('dark');">
                                    <span class="btn-label">Темная</span>
                                    <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn active" data-value="false" onclick="layout_sidebar_change('light');">
                                    <span class="btn-label">Светлая</span>
                                    <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Основной цвет</h6>
                    <p class="text-muted text-sm">Выберите основной цвет</p>
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
                    <div class="d-grid">
                        <button class="btn btn-light-danger" id="layoutreset">Сбросить макет</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
