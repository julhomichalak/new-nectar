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
    <? include('components/header.php') ?>

    <div class="content mb-2" style="height: 1vh;">
      <div class="row d-flex align-items-center" style="height: 100%;">
        <div class="mb-3 col-lg-12 col-md-12 pb-5" id="cardTasks" style="height: 100%;">
          <div class="card todo-list" id="cardTodoList" style="height: 100%;">
            <div class="card-header border-bottom-0 pb-0">
              <div class="row justify-content-between align-items-center mb-4">
                <div class="col-auto">
                  <h3 class="text-body-emphasis">Tarefas</h3>
                </div>
                <div class="col-auto w-100 w-md-auto">
                  <div class="row align-items-center g-0 justify-content-between">
                    <div class="col-12 col-sm-auto">
                      <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                        <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Pesquisar..." aria-label="Search">
                          <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                          </svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                        </form>
                      </div>
                    </div>
                    <div class="col-auto d-flex">
                      <p class="mb-0 ms-sm-3 fs-9 text-body-tertiary fw-bold">
                        <svg class="svg-inline--fa fa-filter me-1 fw-extra-bold fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"></path>
                        </svg><!-- <span class="fas fa-filter me-1 fw-extra-bold fs-10"></span> Font Awesome fontawesome.com -->

                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-body scrollbar to-do-list-body pt-0" id="cardBodyTasks">
              <a class="fw-bold fs-9 my-4" href="#!">
                <svg class="svg-inline--fa fa-plus me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                  <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                </svg><!-- <span class="fas fa-plus me-1 "></span> Font Awesome fontawesome.com -->Adicionar nova tarefa
              </a>


              <hr>
              <!-- LINHA POR TAREFA INICIO -->
              <div>


                <div class="mb-4 col-md-12 row justify-content-between align-items-center " data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                  <div class="col-md-auto flex-1">
                    <div>
                      <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                        <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0 cursor-pointer" ata-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                          Comprar o Néctar
                        </label>
                        <span class="badge badge-phoenix fs-10 badge-phoenix-primary">Para Fazer</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-auto">
                    <div class="d-flex ms-4 lh-1 align-items-center">
                      <button class="btn btn-link p-0 text-warning fs-10 me-2"><svg class="svg-inline--fa fa-list-check me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                        </svg><!-- <span class="fas fa-tasks me-1"></span> Font Awesome fontawesome.com -->3</button>
                      <div class="hover-md-hide hover-lg-show hover-xl-hide">
                        <p class="text-body-tertiary fs-10 ps-md-3 border-start-md fw-bold mb-md-0 mb-0">11 Nov, 2024</p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <!--OFFCANVAS TAREFA -->
                <div class="offcanvas offcanvas-end content-offcanvas  border-start shadow-none bg-body-highlight rounded-5" tabindex="-1" data-todo-content-offcanvas="data-todo-content-offcanvas" id="todoOffcanvas-1">
                  <div class="offcanvas-body p-0">
                    <div class="p-5 p-md-6">
                      <div class="d-flex flex-between-center align-items-start gap-5 mb-4">
                        <h2 class="fw-bold fs-6 mb-0 text-body-highlight">Designing the dungeon<a class="btn btn-link text-decoration-none p-0 ms-3" href="#!"><svg class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                            </svg><!-- <span class="fa-solid fa-pen"></span> Font Awesome fontawesome.com --></a></h2>
                        <button class="btn btn-phoenix-secondary btn-icon px-2" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><svg class="svg-inline--fa fa-xmark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                          </svg><!-- <span class="fa-solid fa-xmark"></span> Font Awesome fontawesome.com --></button>
                      </div>
                      <div class="mb-6">
                        <div class="d-flex align-items-center mb-3">
                          <h4 class="text-body me-3">Descrição</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><svg class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                            </svg><!-- <span class="fa-solid fa-pen"></span> Font Awesome fontawesome.com --></a>
                        </div>
                        <p class="text-body-highlight mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                      </div>
                      <h4 class="mb-3">Sub Tarefas</h4>
                      <div class="d-flex flex-between-center hover-actions-trigger py-3 border-top">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                          <input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask01">
                          <label class="form-check-label mb-0 fs-8" for="subtask01">Study Dragons</label>
                        </div>
                        <div class="hover-actions end-0">
                          <button class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><svg class="svg-inline--fa fa-pencil" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pencil" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                            </svg><!-- <span class="fa-solid fa-pencil"></span> Font Awesome fontawesome.com --></button>
                          <button class="btn btn-sm text-body-tertiary px-0"><svg class="svg-inline--fa fa-xmark fs-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                            </svg><!-- <span class="fa-solid fa-xmark fs-8"></span> Font Awesome fontawesome.com --></button>
                        </div>
                      </div>
                      <div class="d-flex flex-between-center hover-actions-trigger py-3 border-top">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                          <input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask02">
                          <label class="form-check-label mb-0 fs-8" for="subtask02">Procrastinate a bit</label>
                        </div>
                        <div class="hover-actions end-0">
                          <button class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><svg class="svg-inline--fa fa-pencil" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pencil" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                            </svg><!-- <span class="fa-solid fa-pencil"></span> Font Awesome fontawesome.com --></button>
                          <button class="btn btn-sm text-body-tertiary px-0"><svg class="svg-inline--fa fa-xmark fs-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                            </svg><!-- <span class="fa-solid fa-xmark fs-8"></span> Font Awesome fontawesome.com --></button>
                        </div>
                      </div>
                      <div class="d-flex flex-between-center hover-actions-trigger py-3 border-top border-bottom mb-3">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                          <input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask03">
                          <label class="form-check-label mb-0 fs-8" for="subtask03">Staring at the notebook for 5 mins</label>
                        </div>
                        <div class="hover-actions end-0">
                          <button class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><svg class="svg-inline--fa fa-pencil" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pencil" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                            </svg><!-- <span class="fa-solid fa-pencil"></span> Font Awesome fontawesome.com --></button>
                          <button class="btn btn-sm text-body-tertiary px-0"><svg class="svg-inline--fa fa-xmark fs-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                            </svg><!-- <span class="fa-solid fa-xmark fs-8"></span> Font Awesome fontawesome.com --></button>
                        </div>
                      </div><a class="fw-bold fs-9" href="#!"><svg class="svg-inline--fa fa-plus me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                        </svg><!-- <span class="fas fa-plus me-1"></span> Font Awesome fontawesome.com -->Adicionar Sub tarefa</a>
                    </div>

                    <div class="px-5 px-md-6">
                      <h4 class="mb-4 text-body-emphasis">Outras Informações</h4>
                      <h5 class="text-body-highlight mb-2">Status</h5>
                      <select class="form-select mb-4" aria-label="Default select example">

                        <option value="1">Para Fazer</option>
                        <option value="2">Em Progresso</option>
                        <option value="3">Concluída</option>
                      </select>
                      <h5 class="text-body-highlight mb-2">Data Final</h5>
                      <div class="flatpickr-input-container mb-4">
                        <input class="form-control datetimepicker ps-6" type="text" placeholder="Selecione uma data final"
                          data-options='{"disableMobile":true, "dateFormat": "d/m/Y"}' />
                        <span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                      </div>



                      <div class="text-end mb-9">
                        <button class="btn btn-phoenix-danger">Excluir Tarefa</button>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <!-- LINHA POR TAREFA FIM -->
              <!-- LINHA POR TAREFA INICIO -->
              <div>


                <div class="mb-4 col-md-12 row justify-content-between align-items-center " data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                  <div class="col-md-auto flex-1">
                    <div>
                      <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                        <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0 cursor-pointer" data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                          Ler o livro 'Segredos da mente milionária'</label>
                        <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Em progresso</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-auto">
                    <div class="d-flex ms-4 lh-1 align-items-center">
                      <button class="btn btn-link p-0 text-warning fs-10 me-2"><svg class="svg-inline--fa fa-list-check me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                        </svg><!-- <span class="fas fa-tasks me-1"></span> Font Awesome fontawesome.com -->3</button>
                      <div class="hover-md-hide hover-lg-show hover-xl-hide">
                        <p class="text-body-tertiary fs-10 ps-md-3 border-start-md fw-bold mb-md-0 mb-0">12 Nov, 2024</p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>



              </div>
              <!-- LINHA POR TAREFA FIM -->

              <!-- LINHA POR TAREFA INICIO -->
              <div>


                <div class="mb-4 col-md-12 row justify-content-between align-items-center " data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                  <div class="col-md-auto flex-1">
                    <div>
                      <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                        <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0 cursor-pointer" data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                          Estudar para a prova de economia</label>
                        <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Em progresso</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-auto">
                    <div class="d-flex ms-4 lh-1 align-items-center">
                      <button class="btn btn-link p-0 text-warning fs-10 me-2"><svg class="svg-inline--fa fa-list-check me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                        </svg><!-- <span class="fas fa-tasks me-1"></span> Font Awesome fontawesome.com -->3</button>
                      <div class="hover-md-hide hover-lg-show hover-xl-hide">
                        <p class="text-body-tertiary fs-10 ps-md-3 border-start-md fw-bold mb-md-0 mb-0">17 Nov, 2024</p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>



              </div>
              <!-- LINHA POR TAREFA FIM -->

              <!-- LINHA POR TAREFA INICIO -->
              <div>


                <div class="mb-4 col-md-12 row justify-content-between align-items-center " data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                  <div class="col-md-auto flex-1">
                    <div>
                      <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                        <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0 cursor-pointer" ata-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                          Ir ao mercado</label>
                        <span class="badge badge-phoenix fs-10 badge-phoenix-primary">Para Fazer</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-auto">
                    <div class="d-flex ms-4 lh-1 align-items-center">
                      <button class="btn btn-link p-0 text-warning fs-10 me-2"><svg class="svg-inline--fa fa-list-check me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                        </svg><!-- <span class="fas fa-tasks me-1"></span> Font Awesome fontawesome.com -->3</button>
                      <div class="hover-md-hide hover-lg-show hover-xl-hide">
                        <p class="text-body-tertiary fs-10 ps-md-3 border-start-md fw-bold mb-md-0 mb-0">12 Nov, 2021</p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>



              </div>
              <!-- LINHA POR TAREFA FIM -->







            </div>

          </div>


        </div>
        <!-- Coluna dos hábitos e compromissos -->


        <? include('components/footer.php') ?>
      </div>

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