<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/typicons.min.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
</head>

<body id="page-top">
    <?php
        require '../conn.php';
        $table = "rescuer";
        $sql = "SELECT * from sms";
        $result = $conn->query($sql);
        if ($result->num_rows < 0) {
                $sql6 = "INSERT INTO rescuer (name, phone, license, verified, district, ussd, image, car, village) VALUES ('Samson Mhango', '0444059503', 'M2939', 'yes', 'Chikwawa', '*938#', 'hdhs.jpg', '4x4 truck', 'Dyelatu')";

            // Execute the SQL statement
            if ($conn->query($sql6) === TRUE) {
            } else {
                echo "Error: " . $conn->error;
            }

            $sql6 = "INSERT INTO sms (district, village, message, ussd, phone) VALUES ('Chikwawa', 'village', 'try', '*3537#', '0857382627')";

            // Execute the SQL statement
            if ($conn->query($sql6) === TRUE) {
            } else {
                echo "Error: " . $conn->error;
            }

        }

        


        $sql = "SELECT COUNT(*) AS totalRescuers FROM $table where verified = 'no'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $totalRescuers = $row["totalRescuers"];
            }
        } else {
            $totalRescuers = 0;
        }

        $rescuedPeople = 0;
        $numberOfAffectedCommunities = 0;
        $deaths = 0;
        // SQL statement for inserting data
        
    ?>
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="far fa-map"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Admin<br>Dodma</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Statistics</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="profile.php"><i class="fas fa-user"></i><span>Rescuers</span></a><a class="nav-link" href="predict.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-lightning-rain-fill">
                                <path d="M2.658 11.026a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 1 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm9.5 0a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 0 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm-7.5 1.5a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 1 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm9.5 0a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 0 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm-7.105-1.25A.5.5 0 0 1 7.5 11h1a.5.5 0 0 1 .474.658l-.28.842H9.5a.5.5 0 0 1 .39.812l-2 2.5a.5.5 0 0 1-.875-.433L7.36 14H6.5a.5.5 0 0 1-.447-.724l1-2zm6.352-7.249a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 10H13a3 3 0 0 0 .405-5.973z"></path>
                            </svg><span style="margin-left: 6px;">Floods Predictions</span><a class="nav-link active" href="message.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M447.1 0h-384c-35.25 0-64 28.75-64 63.1v287.1c0 35.25 28.75 63.1 64 63.1h96v83.98c0 9.836 11.02 15.55 19.12 9.7l124.9-93.68h144c35.25 0 64-28.75 64-63.1V63.1C511.1 28.75 483.2 0 447.1 0zM464 352c0 8.75-7.25 16-16 16h-160l-80 60v-60H64c-8.75 0-16-7.25-16-16V64c0-8.75 7.25-16 16-16h384c8.75 0 16 7.25 16 16V352z"></path>
                            </svg><span style="margin-left: 6px;">Message Broadcast</span></a><a class="nav-link" href="calls.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-phone-landscape-fill">
                                <path d="M2 12.5a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H2zm11-6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
                            </svg><span style="margin-left: 6px;">Calls</span></a><a class="nav-link" href="ussd.php"><i class="typcn typcn-business-card"></i><span style="margin-left: 6px;">USSD</span></a><a class="nav-link" href="route.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M320 256C302.3 256 288 270.3 288 288C288 305.7 302.3 320 320 320H416C469 320 512 362.1 512 416C512 469 469 512 416 512H139.6C148.3 502.1 158.9 489.4 169.6 475.2C175.9 466.8 182.4 457.6 188.6 448H416C433.7 448 448 433.7 448 416C448 398.3 433.7 384 416 384H320C266.1 384 223.1 341 223.1 288C223.1 234.1 266.1 192 320 192H362.1C340.2 161.5 320 125.4 320 96C320 42.98 362.1 0 416 0C469 0 512 42.98 512 96C512 160 416 256 416 256H320zM416 128C433.7 128 448 113.7 448 96C448 78.33 433.7 64 416 64C398.3 64 384 78.33 384 96C384 113.7 398.3 128 416 128zM118.3 487.8C118.1 488 117.9 488.2 117.7 488.4C113.4 493.4 109.5 497.7 106.3 501.2C105.9 501.6 105.5 502 105.2 502.4C99.5 508.5 96 512 96 512C96 512 0 416 0 352C0 298.1 42.98 255.1 96 255.1C149 255.1 192 298.1 192 352C192 381.4 171.8 417.5 149.9 448C138.1 463.2 127.7 476.9 118.3 487.8L118.3 487.8zM95.1 384C113.7 384 127.1 369.7 127.1 352C127.1 334.3 113.7 320 95.1 320C78.33 320 63.1 334.3 63.1 352C63.1 369.7 78.33 384 95.1 384z"></path>
                            </svg><span style="margin-left: 6px;">Safe Route</span></a></li>
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
                <?php 

                    if ($totalRescuers == 0) {
                        // code...
                        echo '<div class="container-fluid">
                                <h3 class="text-dark mb-4">No rescuer to Verify</h3>
                            </div><br>';}
                        else {
                            echo '<div class="container-fluid">
                                    <h3 class="text-dark mb-4">Rescuer registration</h3>
                                    <div class="row mb-3">
                                        <div class="col-lg-4">
                                            <div class="card mb-3">
                                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="assets/img/black%20man.jpg" width="160" height="160">
                                                    <div class="mb-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="row mb-3 d-none">
                                                <div class="col">
                                                    <div class="card text-white bg-primary shadow">
                                                        <div class="card-body">
                                                            <div class="row mb-2">
                                                                <div class="col">
                                                                    <p class="m-0">Peformance</p>
                                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                                </div>
                                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                                            </div>
                                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card text-white bg-success shadow">
                                                        <div class="card-body">
                                                            <div class="row mb-2">
                                                                <div class="col">
                                                                    <p class="m-0">Peformance</p>
                                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                                </div>
                                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                                            </div>
                                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="card shadow mb-3">
                                                        <div class="card-header py-3">
                                                            <p class="text-primary m-0 fw-bold">Rescuer Info</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="mb-3"><label class="form-label" for="username"><strong>Full name</strong></label></div>
                                                                        <p>Samson Mhango</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="mb-3"><label class="form-label" for="email"><strong>Phone number</strong></label>
                                                                            <p>0888 47 34 49</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Car Type</strong></label></div>
                                                                        <p>Lorry</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Driving License Image</strong></label>
                                                                            <p>MDc12</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3"><button class="btn btn-primary btn-sm" id="verifyButton" type="button">Verify</button>

                                                                <script>
                                                                document.getElementById("verifyButton").addEventListener("click", function() {
                                                                    alert("Verified...");

                                                                    window.location.href = "index.php";
                                                                });
                                                                </script></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-5"></div>
                                </div><br>';
                        }

                ?>
                
            </div>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Verified rescuers</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold">Rescuer Info</p>
                    </div>
                    <?php 
                        $table = "rescuer";
                        $sql2 = "SELECT COUNT(*) AS totalRescuers FROM $table where verified = 'yes'";
                        $result2 = $conn->query($sql2);
                        if ($result2->num_rows > 0) {
                            // Output data of each row
                            $sql3 = "SELECT * from $table where verified = 'yes'";
                            $result3 = $conn->query($sql3);
                            while ($row3 = $result3->fetch_assoc()) {
                                $name = $row3['name'];
                                $name = $row3['name'];
                                $name = $row3['name'];
                                $name = $row3['name'];
                                $name = $row3['name'];
                                $name = $row3['name'];
                        }
                    }
                    ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                            <div class="col-md-6">
                                <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                            </div>
                        </div>


                        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Car Type</th>
                                        <th>Phone</th>
                                        <th>Start date</th>
                                        <th>Call for rescue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="rounded-circle me-2" width="30" height="30" src="../img/0888471389.jpg">Samson Mhango</td>
                                        <td>4x4 Truck</td>
                                        <td>0888471389</td>
                                        <td>2024/04/16</td>
                                        <td><button class="btn btn-primary btn-sm" type="submit">Send Alert</button></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr></tr>
                                </tfoot>
                            </table>
                        </div>
                        <footer class="bg-white sticky-footer">
                            <div class="container my-auto">
                                <div class="text-center my-auto copyright"><span>Copyright © NxtGen Hackathon 2024</span></div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>