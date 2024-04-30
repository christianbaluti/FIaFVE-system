<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
</head>

<body id="page-top">
    <?php 

        require 'conn.php';


     ?>
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="far fa-map"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Dodma</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Statistics</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php"><i class="fas fa-user"></i><span>Rescuer Registration</span></a><a class="nav-link" href="predict.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-lightning-rain-fill">
                                <path d="M2.658 11.026a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 1 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm9.5 0a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 0 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm-7.5 1.5a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 1 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm9.5 0a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 0 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm-7.105-1.25A.5.5 0 0 1 7.5 11h1a.5.5 0 0 1 .474.658l-.28.842H9.5a.5.5 0 0 1 .39.812l-2 2.5a.5.5 0 0 1-.875-.433L7.36 14H6.5a.5.5 0 0 1-.447-.724l1-2zm6.352-7.249a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 10H13a3 3 0 0 0 .405-5.973z"></path>
                            </svg><span style="margin-left: 6px;">Floods Predictions</span></a><a class="nav-link" href="rescuers.php"><i class="fa fa-file-archive-o"></i><span style="margin-left: 6px;">Rescuers</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for a location"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>
                    </div>
                </nav>

            <header class="pt-5" style="background: linear-gradient(0deg, rgba(0,0,0,0.65), rgba(255,255,255,0)), url(&quot;img/flood_damage_in_malawi.webp&quot;);">
                            <div class="container pt-4 pt-xl-5">
                                <div class="row pt-5">
                                    <div class="col-md-8 text-center text-md-start mx-auto">
                                        <div class="text-center">
                                            <h1 class="display-4 fw-bold mb-5" style="color: rgb(255,255,255);">Welcome to the Flood Intelligent System.</h1>
                                            <p class="fs-5 text-muted mb-5" style="color: white!important;color: rgb(255,255,255);">A coordinated system that aims at saving lives before and during floods</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <footer>
                            <div class="container py-4 py-lg-5">
                                <div class="row row-cols-2 row-cols-md-4">
                                    <div class="col-12 col-md-3">
                                        <div class="fw-bold d-flex align-items-center mb-2"><span>Early Warning system</span></div>
                                        <p class="text-muted">Broadcast SMS</p>
                                    </div>
                                    <div class="col-sm-4 col-md-3 text-lg-start d-flex flex-column">
                                        <h3 class="fs-6 fw-bold">Flood Prediction System</h3>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Machine Learning Flood Predictions</a></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-md-3 text-lg-start d-flex flex-column">
                                        <h3 class="fs-6 fw-bold">Flood victim Tracking and Evacuation System</h3>
                                        <ul class="list-unstyled">
                                            <li><a href="#">USSD</a></li>
                                            <li><a href="#">Broadcast SMS</a></li>
                                            <li><a href="#">Safe Route Generation</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-md-3 text-lg-start d-flex flex-column">
                                        <h3 class="fs-6 fw-bold">Rescuer Recruitment&nbsp;</h3>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Rescuer alerts</a></li>
                                            <li><a href="#">Rescuer Registration</a></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </footer>
                <section class="py-4 py-xl-5">
                    <div class="container">
                        <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <div class="text-white p-4 p-md-5">
                                        <h2 class="fw-bold text-white mb-3">Chikwawa, Dyelatu</h2>
                                        <p class="mb-4"><i class="fas fa-heart-broken" style="margin-right: 13px;"></i>Impact Assessment: 12%</p>
                                        <p class="mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bar-chart-line" style="margin-right: 13px;">
                                                <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"></path>
                                            </svg>Probability Level: 0.3</p>
                                        <p class="mb-4"><i class="fas fa-water" style="margin-right: 13px;"></i>Water Level: 10Inch</p>
                                        <p class="mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-lightning-rain" style="margin-right: 13px;">
                                                <path d="M2.658 11.026a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 1 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm9.5 0a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 1 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm-7.5 1.5a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 1 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm9.5 0a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 1 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm-.753-8.499a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 10H13a3 3 0 0 0 .405-5.973zM8.5 1a4 4 0 0 1 3.976 3.555.5.5 0 0 0 .5.445H13a2 2 0 0 1 0 4H3.5a2.5 2.5 0 1 1 .605-4.926.5.5 0 0 0 .596-.329A4.002 4.002 0 0 1 8.5 1zM7.053 11.276A.5.5 0 0 1 7.5 11h1a.5.5 0 0 1 .474.658l-.28.842H9.5a.5.5 0 0 1 .39.812l-2 2.5a.5.5 0 0 1-.875-.433L7.36 14H6.5a.5.5 0 0 1-.447-.724l1-2z"></path>
                                            </svg>Rainfall Intensity: 12%</p>
                                        <div class="my-3"></div>
                                        <div class="my-3"><a class="btn btn-primary btn-lg me-2" role="button" href="#">Previous</a><a class="btn btn-light btn-lg" role="button" href="#">Next</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><img class="w-100 h-100 fit-cover" src="img/WhatsApp Image 2024-04-17 at 2.29.05 PM.jpeg" style="max-height: 458px;"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>number of Rescueres</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>28</span></div>
                                        </div>
                                        <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-firetruck fa-2x text-gray-300">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="5" cy="17" r="2"></circle>
                                                <circle cx="17" cy="17" r="2"></circle>
                                                <path d="M7 18h8m4 0h2v-6a5 5 0 0 0 -5 -5h-1l1.5 5h4.5"></path>
                                                <path d="M12 18v-11h3"></path>
                                                <polyline points="3 17 3 12 12 12"></polyline>
                                                <line x1="3" y1="9" x2="21" y2="3"></line>
                                                <line x1="6" y1="12" x2="6" y2="8"></line>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Number of people Rescued</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>10</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-people-carry fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>NUmber of deaths</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>18</span></div>
                                        </div>
                                        <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor" class="fa-2x text-gray-300">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M167.1 24V142.1L191 119C200.4 109.7 215.6 109.7 224.1 119C234.3 128.4 234.3 143.6 224.1 152.1L160.1 216.1C151.6 226.3 136.4 226.3 127 216.1L63.03 152.1C53.65 143.6 53.65 128.4 63.03 119C72.4 109.7 87.6 109.7 96.97 119L119.1 142.1V24C119.1 10.75 130.7 0 143.1 0C157.3 0 167.1 10.75 167.1 24V24zM359.1 200C359.1 222.1 342.1 240 319.1 240C297.9 240 279.1 222.1 279.1 200C279.1 177.9 297.9 160 319.1 160C342.1 160 359.1 177.9 359.1 200zM183.1 296C183.1 318.1 166.1 336 143.1 336C121.9 336 103.1 318.1 103.1 296C103.1 273.9 121.9 256 143.1 256C166.1 256 183.1 273.9 183.1 296zM455.1 296C455.1 273.9 473.9 256 495.1 256C518.1 256 535.1 273.9 535.1 296C535.1 318.1 518.1 336 495.1 336C473.9 336 455.1 318.1 455.1 296zM199.1 480C199.1 497.7 185.7 512 167.1 512H119.1C102.3 512 87.1 497.7 87.1 480V441.5L61.13 491.4C54.84 503 40.29 507.4 28.62 501.1C16.95 494.8 12.58 480.3 18.87 468.6L56.74 398.3C72.09 369.8 101.9 352 134.2 352H153.8C170.1 352 185.7 356.5 199.2 364.6L232.7 302.3C248.1 273.8 277.9 255.1 310.2 255.1H329.8C362.1 255.1 391.9 273.8 407.3 302.3L440.8 364.6C454.3 356.5 469.9 352 486.2 352H505.8C538.1 352 567.9 369.8 583.3 398.3L621.1 468.6C627.4 480.3 623 494.8 611.4 501.1C599.7 507.4 585.1 503 578.9 491.4L551.1 441.5V480C551.1 497.7 537.7 512 519.1 512H471.1C454.3 512 439.1 497.7 439.1 480V441.5L413.1 491.4C406.8 503 392.3 507.4 380.6 501.1C368.9 494.8 364.6 480.3 370.9 468.6L407.2 401.1C405.5 399.5 404 397.6 402.9 395.4L375.1 345.5V400C375.1 417.7 361.7 432 343.1 432H295.1C278.3 432 263.1 417.7 263.1 400V345.5L237.1 395.4C235.1 397.6 234.5 399.5 232.8 401.1L269.1 468.6C275.4 480.3 271 494.8 259.4 501.1C247.7 507.4 233.1 503 226.9 491.4L199.1 441.5L199.1 480zM415 152.1C405.7 143.6 405.7 128.4 415 119C424.4 109.7 439.6 109.7 448.1 119L471.1 142.1V24C471.1 10.75 482.7 0 495.1 0C509.3 0 519.1 10.75 519.1 24V142.1L543 119C552.4 109.7 567.6 109.7 576.1 119C586.3 128.4 586.3 143.6 576.1 152.1L512.1 216.1C503.6 226.3 488.4 226.3 479 216.1L415 152.1z"></path>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span style="border-color: var(--bs-blue);color: rgb(54,185,204);">Number of Communities affected</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>18</span></div>
                                        </div>
                                        <div class="col-auto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fa-2x text-gray-300">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M182.2 .0998C191.7-.9534 200 6.466 200 16V30.13C200 38.91 192.9 46.05 184.1 46.13H72.74C63.48 46.04 56 38.52 56 29.24C56 20.64 62.47 13.41 71.02 12.46L182.2 .0998zM192 96C192 131.3 163.3 160 128 160C92.65 160 64 131.3 64 96C64 89.8 64.88 83.8 66.53 78.13H189.5C191.1 83.8 192 89.8 192 96V96zM32 256C32 237.2 40.09 220.3 52.97 208.6L197.2 319.6C195.5 319.9 193.8 320 192 320H64C46.33 320 32 305.7 32 288L32 256zM222.2 298.5L85.05 192.9C88.61 192.3 92.27 191.1 96 191.1H160C195.3 191.1 224 220.7 224 255.1V287.1C224 291.7 223.4 295.2 222.2 298.5V298.5zM320 96C320 60.65 348.7 31.1 384 31.1C419.3 31.1 448 60.65 448 96C448 131.3 419.3 160 384 160C348.7 160 320 131.3 320 96zM416 192C451.3 192 480 220.7 480 256V288C480 305.7 465.7 320 448 320H320C302.3 320 288 305.7 288 288V256C288 220.7 316.7 192 352 192H416zM151.8 506.1C141.8 514.8 126.7 513.8 117.9 503.8C109.2 493.8 110.2 478.7 120.2 469.9L136.1 456L23.1 455.1C10.74 455.1-.0003 445.2 0 431.1C.0003 418.7 10.75 407.1 24 407.1L136.1 408L120.2 394.1C110.2 385.3 109.2 370.2 117.9 360.2C126.7 350.2 141.8 349.2 151.8 357.9L215.8 413.9C221 418.5 224 425.1 224 431.1C224 438.9 221 445.5 215.8 450.1L151.8 506.1zM296.2 413.9L360.2 357.9C370.2 349.2 385.3 350.2 394.1 360.2C402.8 370.2 401.8 385.3 391.8 394.1L375.9 407.1L488 407.1C501.3 407.1 512 418.7 512 431.1C512 445.2 501.3 455.1 488 455.1L375.9 455.1L391.8 469.9C401.8 478.7 402.8 493.8 394.1 503.8C385.3 513.8 370.2 514.8 360.2 506.1L296.2 450.1C290.1 445.5 288 438.9 288 431.1C288 425.1 290.1 418.5 296.2 413.9H296.2z"></path>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-info shadow">
                                        <div class="card-body">
                                            <p class="m-0">District with most floods</p>
                                            <p class="text-white-50 small m-0">DIstrict name: 290 times</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-warning shadow">
                                        <div class="card-body">
                                            <p class="m-0">Village with most floods</p>
                                            <p class="text-white-50 small m-0">Village name: 293 times</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-danger shadow">
                                        <div class="card-body">
                                            <p class="m-0">Most DIstrict with Death</p>
                                            <p class="text-white-50 small m-0">District name: 535</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card text-white bg-secondary shadow">
                                        <div class="card-body">
                                            <p class="m-0">Most village with Deaths</p>
                                            <p class="text-white-50 small m-0">Village name: 39</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © NxtGen Hackathon 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>