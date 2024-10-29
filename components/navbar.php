<?
$urlAtual = $_SERVER['REQUEST_URI'];

$path = basename(parse_url($urlAtual, PHP_URL_PATH));

?>
<nav class="navbar navbar-vertical navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <p class="navbar-vertical-label">Módulos
                    </p>
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1 <?= ($path === 'index') ? 'active' : ''; ?>" href="index" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="uil uil-file-bookmark-alt"></i>
                                </span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Execução</span>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1 <?= ($path === 'tasks') ? 'active' : ''; ?>" href="tasks" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fas fa-tasks"></i>
                                </span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Tarefas</span>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="nav-item-wrapper"><a class="nav-link label-1 <?= ($path === 'habits') ? 'active' : ''; ?>" href="habits" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="uil-file-graph"></i>
                                </span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Hábitos</span>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="nav-item-wrapper"><a class="nav-link label-1 <?= ($path === 'diary') ? 'active' : ''; ?>" href="diary" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="uil-diary"></i>
                                </span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Diário</span>
                                </span>
                            </div>
                        </a>
                    </div>


                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="index" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fas fa-money-bill-wave-alt"></i>
                                </span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Financeiro</span>
                                </span>
                            </div>
                        </a>
                    </div>


                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="index" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fas fa-book"></i>
                                </span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Biblioteca</span>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="index" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span
                                        class="text-body align-bottom" data-feather="pie-chart"></span>
                                </span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Dashboard</span>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-project-management" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-project-management">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon-wrapper">
                                    <svg class="svg-inline--fa fa-caret-right dropdown-indicator-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
                                    </svg><!-- <span class="fas fa-caret-right dropdown-indicator-icon"></span> Font Awesome fontawesome.com -->
                                </div><span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                    </svg></span><span class="nav-link-text">Projetos</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav parent collapse show" data-bs-parent="#navbarVerticalCollapse" id="nv-project-management" style="">
                                <li class="collapsed-nav-item-title d-none">Projetos</li>
                                <li class="nav-item"><a class="nav-link" href="apps/project-management/create-new.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Novo projeto</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="apps/project-management/project-list-view.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Ver Projetos</span></div>
                                    </a><!-- more inner pages-->
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="index" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span
                                        class="text-body align-bottom" data-feather="award"></span>
                                </span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Mapa de Conquistas</span>
                                </span>
                            </div>
                        </a>
                    </div>


                </li>
                <li class="nav-item">
                    <p class="navbar-vertical-label">Configurações
                    </p>
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="index" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span
                                        class="text-body align-bottom" data-feather="user"></span>
                                </span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Perfil</span>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="index" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span
                                        class="text-body align-bottom" data-feather="settings"></span>
                                </span>
                                <span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Configurações</span>
                                </span>
                            </div>
                        </a>
                    </div>


                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="index" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span
                                        class="text-body align-bottom" data-feather="help-circle"></span>
                                </span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Manual de Uso</span>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="index" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="git-merge"></span>
                                </span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Changelog</span>
                                </span>
                            </div>
                        </a>
                    </div>





                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer">
        <button id="btnFecharMenu"
            class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span
                class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span
                class="navbar-vertical-footer-text ms-2">Fechar</span></button>
    </div>
</nav>