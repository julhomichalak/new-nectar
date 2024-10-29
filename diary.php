<!DOCTYPE html>
<html lang="pt-br" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Meu Néctar | Execução</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/nectar-favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/nectar-favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/nectar-favicon.png">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicons/nectar-favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="vendors/simplebar/simplebar.min.js"></script>
    <script src="assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="vendors/choices/choices.min.css" rel="stylesheet">
    <link href="vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="assets/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">

    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    <link href="vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <? include('components/navbar.php') ?>
        <?
        echo $path;
        include('components/header.php') ?>

        <div class="content">

            <div class="row gx-6 gy-3 mb-4 align-items-center">
                <div class="col-auto">
                    <h2 class="mb-0">Hábitos</h2>
                </div>
                <div class="col-auto"><a class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal"><i class="fa-solid fa-plus me-2"></i>Criar novo hábito</a></div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 g-3 mb-9">
                <div class="col">
                    <div class="card h-1000 hover-actions-trigger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Academia</h4>
                                <div class="hover-actions top-0 end-0 mt-4 me-4">
                                    <button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal"><span class="fa-solid fa-chevron-right"></span></button>
                                </div>
                            </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-success">feito ontem</span>


                            <div class="d-flex align-items-center ">
                                <p class="mb-0 fw-bold fs-9">Começou :<span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 15 Set. 2024</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Repetições : <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 20🔥</span></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-1000 hover-actions-trigger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Ler 15 páginas todo dia</h4>
                                <div class="hover-actions top-0 end-0 mt-4 me-4">
                                    <button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal"><span class="fa-solid fa-chevron-right"></span></button>
                                </div>
                            </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-success">feito hoje 🔥</span>


                            <div class="d-flex align-items-center ">
                                <p class="mb-0 fw-bold fs-9">Começou :<span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 15 Set. 2024</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Repetições : <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 20🔥</span></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-1000 hover-actions-trigger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Beber 2 litros de água</h4>
                                <div class="hover-actions top-0 end-0 mt-4 me-4">
                                    <button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal"><span class="fa-solid fa-chevron-right"></span></button>
                                </div>
                            </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-warning">2 dias sem fazer</span>


                            <div class="d-flex align-items-center ">
                                <p class="mb-0 fw-bold fs-9">Começou :<span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 15 Set. 2024</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Repetições : <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 12</span></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-1000 hover-actions-trigger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Estudar Programação</h4>
                                <div class="hover-actions top-0 end-0 mt-4 me-4">
                                    <button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal"><span class="fa-solid fa-chevron-right"></span></button>
                                </div>
                            </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-danger">mais de 1 semana sem fazer</span>


                            <div class="d-flex align-items-center ">
                                <p class="mb-0 fw-bold fs-9">Começou :<span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 15 Set. 2024</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Repetições : <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 20🔥</span></p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <div class="modal fade" id="projectsCardViewModal" tabindex="-1" aria-labelledby="projectsCardViewModal" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content overflow-hidden">
                        <div class="modal-header position-relative p-0">
                            <input class="d-none" id="projectCoverInput" type="file" />
                            <label class="position-absolute top-0 start-0" for="projectCoverInput"><span class="project-modal-btn d-inline-block bg-body-emphasis dark__text-gray-100 rounded-2 py-2 px-3 fs-9 fw-bolder mt-3 ms-3 cursor-pointer"><span class="fa-solid fa-image me-1"></span>Change</span></label>
                            <button class="btn btn-circle project-modal-btn position-absolute end-0 top-0 mt-3 me-3 bg-body-emphasis" data-bs-dismiss="modal"><span class="fa-solid fa-xmark text-body dark__text-gray-100"></span></button><img class="w-100" src="assets/img/generic/43.png" alt="" style="max-height: 200px;min-height: 150px;" />
                        </div>
                        <div class="modal-body p-5 px-md-6">
                            <div class="row g-5">
                                <div class="col-12 col-md-9">
                                    <div class="mb-4">
                                        <h3 class="fw-bolder lh-sm">It was popularised in the 1960s with the release of Letraset</h3>
                                        <p class="text-body-highlight fw-semibold mb-0">In list<a class="ms-1 fw-bold" href="#!">Review </a></p>
                                    </div>
                                    <div class="d-flex align-items-center mb-4">
                                        <p class="text-body-highlight fw-700 mb-0 me-2">64%</p>
                                        <div class="progress flex-1">
                                            <div class="progress-bar rounded-3" role="progressbar" style="width: 64%"></div>
                                        </div>
                                    </div>
                                    <h6 class="text-body-secondary mb-2">Due date</h6>
                                    <div class="flatpickr-input-container flatpickr-input-sm w-50 mb-3">
                                        <input class="form-control form-control-sm ps-6 datetimepicker" id="datepicker" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' /><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary mt-1"></span>
                                    </div>
                                    <div class="mb-3">
                                        <h6 class="text-body-secondary mb-2">Assignees</h6>
                                        <div class="d-flex">
                                            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                    <div class="avatar avatar-m  me-1">
                                                        <img class="rounded-circle " src="assets/img/team/60.webp" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                    <div class="position-relative">
                                                        <div class="bg-holder z-n1" style="background-image:url(assets/img/bg/bg-32.png);background-size: auto;">
                                                        </div>
                                                        <!--/.bg-holder-->

                                                        <div class="p-3">
                                                            <div class="text-end">
                                                                <button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                                                <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                                            </div>
                                                            <div class="text-center">
                                                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="assets/img/team/60.webp" alt="" /></div>
                                                                <h6 class="text-white">Emma Watson</h6>
                                                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                                <div class="d-flex flex-center mb-3">
                                                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-body-emphasis">
                                                        <div class="p-3 border-bottom border-translucent">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-flex">
                                                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                                                </div>
                                                                <button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                                            </div>
                                                        </div>
                                                        <ul class="nav d-flex flex-column py-3 border-bottom">
                                                            <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                            <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                                                </div>
                                            </div>
                                            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                    <div class="avatar avatar-m  me-1">
                                                        <img class="rounded-circle " src="assets/img/team/58.webp" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                    <div class="position-relative">
                                                        <div class="bg-holder z-n1" style="background-image:url(assets/img/bg/bg-32.png);background-size: auto;">
                                                        </div>
                                                        <!--/.bg-holder-->

                                                        <div class="p-3">
                                                            <div class="text-end">
                                                                <button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                                                <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                                            </div>
                                                            <div class="text-center">
                                                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="assets/img/team/58.webp" alt="" /></div>
                                                                <h6 class="text-white">Igor Borvibson</h6>
                                                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                                <div class="d-flex flex-center mb-3">
                                                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-body-emphasis">
                                                        <div class="p-3 border-bottom border-translucent">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-flex">
                                                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                                                </div>
                                                                <button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                                            </div>
                                                        </div>
                                                        <ul class="nav d-flex flex-column py-3 border-bottom">
                                                            <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                            <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                                                </div>
                                            </div>
                                            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                    <div class="avatar avatar-m  me-1">
                                                        <img class="rounded-circle " src="assets/img/team/59.webp" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                    <div class="position-relative">
                                                        <div class="bg-holder z-n1" style="background-image:url(assets/img/bg/bg-32.png);background-size: auto;">
                                                        </div>
                                                        <!--/.bg-holder-->

                                                        <div class="p-3">
                                                            <div class="text-end">
                                                                <button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                                                <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                                            </div>
                                                            <div class="text-center">
                                                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="assets/img/team/59.webp" alt="" /></div>
                                                                <h6 class="text-white">Katerina Karenin</h6>
                                                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                                <div class="d-flex flex-center mb-3">
                                                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-body-emphasis">
                                                        <div class="p-3 border-bottom border-translucent">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-flex">
                                                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                                                </div>
                                                                <button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                                            </div>
                                                        </div>
                                                        <ul class="nav d-flex flex-column py-3 border-bottom">
                                                            <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                            <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                                                </div>
                                            </div>
                                            <div class="dropdown"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                    <div class="avatar avatar-m  me-1">
                                                        <img class="rounded-circle " src="assets/img/team/34.webp" alt="" />

                                                    </div>
                                                </a>
                                                <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                                    <div class="position-relative">
                                                        <div class="bg-holder z-n1" style="background-image:url(assets/img/bg/bg-32.png);background-size: auto;">
                                                        </div>
                                                        <!--/.bg-holder-->

                                                        <div class="p-3">
                                                            <div class="text-end">
                                                                <button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button>
                                                                <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button>
                                                            </div>
                                                            <div class="text-center">
                                                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="assets/img/team/34.webp" alt="" /></div>
                                                                <h6 class="text-white">Jean Renoir</h6>
                                                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                                <div class="d-flex flex-center mb-3">
                                                                    <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                                                    <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-body-emphasis">
                                                        <div class="p-3 border-bottom border-translucent">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-flex">
                                                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                                                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                                                                    <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                                                                </div>
                                                                <button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                                            </div>
                                                        </div>
                                                        <ul class="nav d-flex flex-column py-3 border-bottom">
                                                            <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                            <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                                                </div>
                                            </div>
                                            <button class="btn btn-sm btn-phoenix-secondary btn-circle"><span class="fa-solid fa-plus"></span></button>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <h6 class="text-body-secondary mb-2">Labels</h6>
                                        <div class="d-flex align-items-center"><span class="badge badge-phoenix badge-phoenix-info fs-10 me-2">INFO</span><span class="badge badge-phoenix badge-phoenix-warning fs-10 me-2">URGENT</span><span class="badge badge-phoenix badge-phoenix-success fs-10 me-2">DONE</span><a class="text-body fw-bolder fs-9 lh-1 text-decoration-none" href="#!"> <span class="fa-solid fa-plus me-1"></span>Add another</a></div>
                                    </div>
                                    <div class="mb-6">
                                        <div class="d-flex align-items-center mb-2">
                                            <h4 class="me-3">Description</h4>
                                            <button class="btn btn-link p-0"><span class="fa-solid fa-pen"></span></button>
                                        </div>
                                        <p class="text-body-highlight">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches...<a class="fw-semibold" href="#!">see more </a></p>
                                    </div>
                                    <div class="bg-body-highlight rounded-2 p-4 mb-3">
                                        <div class="row justify-contnet-between border-bottom border-translucent g-0 gy-2 pb-3">
                                            <div class="col-12 col-sm">
                                                <p class="fs-9 text-body-secondary mb-2"><a class="fw-semibold" href="#!">Anthony Van Dyck </a>uploaded a file </p><img class="rounded-2 mb-2" src="assets/img/generic/42.png" alt="" width="220" />
                                                <p class="text-body-highlight fw-semibold fs-9 mb-0">Fruit blast</p>
                                            </div>
                                            <div class="col-12 col-sm-auto">
                                                <p class="text-body-secondary fw-semibold fs-10 mb-0">Oct 3 at 4:38 pm</p>
                                            </div>
                                        </div>
                                        <div class="row justify-contnet-between border-bottom border-translucent g-0 gy-1 py-3 align-items-center">
                                            <div class="col-12 col-sm">
                                                <p class="fs-9 text-body-secondary mb-0"><span class="text-body-highlight fw-semibold me-1">You</span>created this task</p>
                                            </div>
                                            <div class="col-12 col-sm-auto">
                                                <p class="text-body-secondary fw-semibold fs-10 mb-0">Oct 4 at 12:18 pm</p>
                                            </div>
                                        </div>
                                        <div class="row justify-contnet-between border-bottom border-translucent g-0 gy-1 py-3 align-items-center">
                                            <div class="col-12 col-sm">
                                                <p class="fs-9 text-body-secondary mb-1"><a class="fw-semibold" href="#!">Kazimir Malevich </a>added a subtask</p>
                                                <div class="d-flex">
                                                    <p class="mb-0 fs-9 fw-semibold text-body-highlight"><span class="fa-solid fa-circle text-primary" data-fa-transform="shrink-8"> </span>Doing</p><span class="text-body-secondary fs-9 mx-2">to</span>
                                                    <p class="mb-0 fs-9 fw-semibold text-body-highlight"><span class="fa-solid fa-circle text-primary" data-fa-transform="shrink-8"> </span>Review</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-auto">
                                                <p class="text-body-secondary fw-semibold fs-10 mb-0">Oct 5 at 9:59 am</p>
                                            </div>
                                        </div>
                                        <div class="row justify-contnet-between gx-2 align-items-center pt-3">
                                            <div class="col col-auto">
                                                <div class="avatar avatar-m status-online ">
                                                    <img class="rounded-circle " src="assets/img//team/30.webp" alt="" />

                                                </div>
                                            </div>
                                            <div class="col col-auto flex-1">
                                                <p class="fs-9 text-body-secondary mb-0"><a class="fw-semibold" href="#!">Peter Paul Rubens </a>commented</p>
                                            </div>
                                            <div class="col-12 col-sm-auto order-1 order-sm-0">
                                                <p class="text-body-secondary fw-semibold fs-10 mb-0">Oct 5 at 9:59 am</p>
                                            </div>
                                            <div class="col-sm-11">
                                                <p class="text-body fs-9 mb-0 ms-6">Great job on the Phoenix template! The overall design and layout are visually appealing and user-friendly.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea class="form-control form-control mb-3" rows="3" placeholder="Add comment"></textarea>
                                    <div class="d-flex flex-between-center pb-3 border-bottom border-translucent mb-6">
                                        <div class="d-flex">
                                            <button class="btn btn-sm ps-0 pe-2 py-0"><span class="fa-solid fa-image fs-8"></span></button>
                                            <button class="btn btn-sm px-2 py-0"><span class="fa-solid fa-calendar-days fs-8"></span></button>
                                            <button class="btn btn-sm px-2 py-0"><span class="fa-solid fa-location-dot fs-8"></span></button>
                                            <button class="btn btn-sm px-2 py-0"><span class="fa-solid fa-tag fs-8"></span></button>
                                        </div>
                                        <button class="btn btn-sm btn-primary px-6">Comment</button>
                                    </div>
                                    <div class="mb-6">
                                        <div class="mb-7">
                                            <h4 class="mb-4">To do list <span class="text-body-tertiary fw-normal fs-6">(23)</span></h4>
                                            <div class="row align-items-center g-0 justify-content-between mb-3">
                                                <div class="col-12 col-sm-auto">
                                                    <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                                                        <form class="position-relative">
                                                            <input class="form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search" />
                                                            <span class="fas fa-search search-box-icon"></span>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-auto d-flex">
                                                    <p class="mb-0 ms-sm-3 fs-9 text-body-tertiary fw-bold"><span class="fas fa-filter me-1 fw-extra-bold fs-10"></span>23 tasks</p>
                                                    <button class="btn btn-link p-0 ms-3 fs-9 text-primary fw-bold"><span class="fas fa-sort me-1 fw-extra-bold fs-10"></span>Sorting</button>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                    <div class="col-12">
                                                        <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                                                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                                                                <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" />
                                                                <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-0">Designing the dungeon</label><span class="badge badge-phoenix fs-10 ms-auto badge-phoenix-primary">DRAFT</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-flex ms-4 lh-1 align-items-center">
                                                            <button class="btn p-0 text-body-tertiary fs-10 me-2"><span class="fas fa-paperclip me-1"></span>2</button>
                                                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">12:00 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                    <div class="col-12">
                                                        <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-2">
                                                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                                                                <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-1" />
                                                                <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-1">Hiring a motion graphic designer</label><span class="badge badge-phoenix fs-10 ms-auto badge-phoenix-warning">URGENT</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-flex ms-4 lh-1 align-items-center">
                                                            <button class="btn p-0 text-body-tertiary fs-10 me-2"><span class="fas fa-paperclip me-1"></span>2</button>
                                                            <button class="btn p-0 text-warning fs-10 me-2"><span class="fas fa-tasks me-1"></span>3</button>
                                                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">12:00 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                    <div class="col-12">
                                                        <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-3">
                                                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                                                                <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-2" />
                                                                <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-2">Daily Meetings Purpose, participants</label><span class="badge badge-phoenix fs-10 ms-auto badge-phoenix-info">ON PROCESS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-flex ms-4 lh-1 align-items-center">
                                                            <button class="btn p-0 text-body-tertiary fs-10 me-2"><span class="fas fa-paperclip me-1"></span>4</button>
                                                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">12 Dec, 2021</p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">05:00 AM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                    <div class="col-12">
                                                        <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-4">
                                                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                                                                <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-3" />
                                                                <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-3">Finalizing the geometric shapes</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-flex ms-4 lh-1 align-items-center">
                                                            <button class="btn p-0 text-body-tertiary fs-10 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                                                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">12:00 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                    <div class="col-12">
                                                        <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-5">
                                                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                                                                <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-4" />
                                                                <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-4">Daily meeting with team members</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-flex ms-4 lh-1 align-items-center">
                                                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">1 Nov, 2021</p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">12:00 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                    <div class="col-12">
                                                        <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-6">
                                                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                                                                <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-5" />
                                                                <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-5">Daily Standup Meetings</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-flex ms-4 lh-1 align-items-center">
                                                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">13 Nov, 2021</p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">10:00 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                    <div class="col-12">
                                                        <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-7">
                                                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                                                                <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-6" />
                                                                <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-6">Procrastinate for a month</label><span class="badge badge-phoenix fs-10 ms-auto badge-phoenix-info">ON PROCESS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-flex ms-4 lh-1 align-items-center">
                                                            <button class="btn p-0 text-body-tertiary fs-10 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                                                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">12:00 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                    <div class="col-12">
                                                        <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-8">
                                                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                                                                <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-7" />
                                                                <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-7">warming up</label><span class="badge badge-phoenix fs-10 ms-auto badge-phoenix-info">CLOSE</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-flex ms-4 lh-1 align-items-center">
                                                            <button class="btn p-0 text-body-tertiary fs-10 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                                                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">12:00 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top border-bottom">
                                                    <div class="col-12">
                                                        <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-9">
                                                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                                                                <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-8" />
                                                                <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-8">Make ready for release</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-flex ms-4 lh-1 align-items-center">
                                                            <button class="btn p-0 text-body-tertiary fs-10 me-2"><span class="fas fa-paperclip me-1"></span>2</button>
                                                            <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">2o Nov, 2021</p>
                                                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">1:00 AM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><a class="fw-bold fs-9 mt-4" href="#!"><span class="fas fa-plus me-1"></span>Add new task</a>
                                        </div>
                                    </div>
                                    <h4 class="mb-3">Files</h4>
                                    <div class="border-top pt-3 pb-4">
                                        <div class="me-n3">
                                            <div class="d-flex flex-between-center">
                                                <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                                                    <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                                </div>
                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                            </div>
                                            <p class="fs-9 text-body-tertiary mb-2"><span>768 kb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="assets/img/generic/40.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="border-top py-3">
                                        <div class="me-n3">
                                            <div class="d-flex flex-between-center">
                                                <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                                                    <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                                </div>
                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                            </div>
                                            <p class="fs-9 text-body-tertiary mb-1"><span>12.8 mb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                                        </div>
                                    </div>
                                    <div class="border-top border-bottom py-3 mb-3">
                                        <div class="me-n3">
                                            <div class="d-flex flex-between-center">
                                                <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs-9 text-body-tertiary"></span>
                                                    <p class="text-body-highlight mb-0 lh-1">Project.txt</p>
                                                </div>
                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                            </div>
                                            <p class="fs-9 text-body-tertiary mb-1"><span>123 kb</span><span class="text-body-quaternary mx-1">|</span><a href="#!">Shantinan Mekalan</a><span class="text-body-quaternary mx-1">|</span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                                        </div>
                                    </div>
                                    <label class="btn btn-link p-0" for="customFile"><span class="fas fa-plus me-1"></span>Add file(s)</label>
                                    <input class="d-none" id="customFile" type="file" />
                                </div>
                                <div class="col-12 col-md-3">
                                    <h5 class="text-body-secondary mb-3">Add to card</h5>
                                    <div class="mb-6">
                                        <button class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-user-plus"></span>Assignee</button>
                                        <button class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-tag"></span>Labels</button>
                                        <button class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-paperclip"></span>Attachments</button>
                                        <button class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-square-check"></span>Checklist</button>
                                        <button class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-calendar-days"></span>Dates</button>
                                    </div>
                                    <h5 class="text-body-secondary mb-3">Actions</h5>
                                    <div class="mb-6">
                                        <button class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-arrow-right"></span>Move</button>
                                        <button class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-copy"></span>Copy</button>
                                        <button class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-trash"></span>Remove</button>
                                        <button class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-box-archive"></span>Archive</button>
                                        <button class="btn btn-sm btn-subtle-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-share-nodes"></span>Share</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <? include('components/footer.php') ?>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fecha todos os offcanvas quando qualquer botão "x" for clicado
            document.querySelectorAll('[data-bs-dismiss="offcanvas"]').forEach(button => {
                button.addEventListener('click', function() {
                    closeAllOffcanvas();
                });
            });

            // Fecha todos os offcanvas quando clicar fora do offcanvas
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.offcanvas.show') && document.querySelector('.offcanvas.show')) {
                    closeAllOffcanvas();
                }
            });

            function closeAllOffcanvas() {
                const offcanvasElements = document.querySelectorAll('.offcanvas.show');
                offcanvasElements.forEach(offcanvas => {
                    const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
                    if (bsOffcanvas) {
                        bsOffcanvas.hide();
                    }
                });
            }
        });
    </script>

    <style>
        #cardTasks {
            align-self: flex-start;
        }
    </style>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    </a>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script src="vendors/dayjs/dayjs.min.js"></script>
    <script src="vendors/choices/choices.min.js"></script>
    <script src="vendors/flatpickr/flatpickr.min.js"></script>
    <script src="vendors/leaflet/leaflet.js"></script>
    <script src="vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="assets/js/phoenix.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="assets/js/ecommerce-dashboard.js"></script>
    <script src="vendors/fullcalendar/index.global.min.js"></script>
    <script src="assets/js/calendar.js"></script>


    <script>
        document.addEventListener('keydown', function(event) {
            // Verifica se a tecla Control ou Command está pressionada
            const isMac = navigator.platform.toUpperCase().indexOf('MAC') >= 0;
            const isCommandOrCtrl = isMac ? event.metaKey : event.ctrlKey;

            // Verifica se a tecla 'b' está pressionada junto com Command ou Control
            if (isCommandOrCtrl && event.key === 'b') {
                event.preventDefault(); // Evita a ação padrão (caso haja)

                // Alterna a classe 'navbar-vertical-collapsed' na tag HTML
                document.documentElement.classList.toggle('navbar-vertical-collapsed');
            }
        });
    </script>
</body>

</html>