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
                            </svg><span style="margin-left: 6px;">Floods Predictions</span></a><a class="nav-link active" href="rescuers.php"><i class="fa fa-file-archive-o"></i><span style="margin-left: 6px;">Rescuers</span></a></li>
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
                <div class="container-fluid">
                    <form>
                        <h1 style="color: rgb(0,0,0);font-weight: bold;">Available rescuers</h1>
                        <p>You can check the rescuer assigned for every district and location</p>
                        <div class="mb-3"><label class="form-label" for="subject">Districts</label><select class="form-select" id="subject">
                                <optgroup label="Enter your district">
                                    <option value="12">Chikwawa</option>
                                    <option value="13">Nsanje</option>
                                    <option value="14">Zomba</option>
                                </optgroup>
                            </select></div>
                        <div class="mb-3"><label class="form-label" for="subject">Village</label><select class="form-select" id="subject-1">
                                <optgroup label="Enter your village">
                                    <option value="12">Dyelatu Market</option>
                                    <option value="13">Thabwa Market</option>
                                    <option value="14">Dyelatu Kamuzu Bridge</option>
                                </optgroup>
                            </select></div>
                        <h5>Chikwawa - Dyelatu Market</h5>
                        <p style="font-size: 12px;margin-bottom: 0px;">Name: Samson Mhango</p>
                        <p style="font-size: 12px;margin-bottom: 0px;">Phone: 088977989797</p>
                        <p style="font-size: 12px;margin-bottom: 24px;">USSD: *384*20202024#</p>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6 col-lg-2 button"><button class="btn btn-primary d-block w-100" type="submit">Check</button></div>
                            </div>
                        </div>
                    </form>
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