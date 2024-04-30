<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <li class="nav-item"><a class="nav-link active" href="profile.php"><i class="fas fa-user"></i><span>Rescuer Registration</span></a><a class="nav-link" href="predict.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-lightning-rain-fill">
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
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search" action="search.php">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for a location"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Rescuer registration</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                 <form action="addRescuer.php" method="post" enctype="multipart/form-data">
                                    <div class="card-body text-center shadow">
                                        <img class="rounded-circle mb-3 mt-4" id="profileImage" src="assets/img/pngwing.com.png" width="160" height="160">
                                        <input type="file" id="profileInput" value="" name="image" style="display: none;" accept="image/*"/>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="button" onclick="document.getElementById('profileInput').click();">Change Photo</button>
                                        </div>
                                    </div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Rescuer Info</p>
                                        </div>
                                        <div class="card-body">
                                            
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="username"><strong>Full name</strong></label><input class="form-control" type="text" id="username" placeholder="Enter full name" name="name"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="phone"><strong>Phone number</strong></label><input class="form-control" type="phone" id="phone" placeholder="Enter your phone number" name="phone"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>What type of car do you have?</strong></label><select class="form-select" id="car" name="car">
                                                                <optgroup label="Car Type">
                                                                    <option value="12">Lorry</option>
                                                                    <option value="13">Van</option>
                                                                    <option value="14">4x4 Truck</option>
                                                                    <option value="18">SUV</option>
                                                                    <option value="15">Military</option>
                                                                    <option value="16">Amphibious</option>
                                                                    <option value="17">Other but powerful</option>
                                                                </optgroup> 
                                                            </select></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Driving License Image</strong></label><input class="form-control" name="license" type="file"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" id="verifyButton" type="button">Register</button>
                                                <script>
                                                document.getElementById("verifyButton").addEventListener("click", function() {
                                                    alert("Registered...");

                                                    window.location.href = "profile.php";
                                                });
                                                </script></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-5">
                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © NxtGen Hackathon 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
<script type="text/javascript">
    document.getElementById('profileInput').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var formData = new FormData();
        formData.append('profileImage', file);

        fetch('uploadProfileImage.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('profileImage').src = data.path;
                document.getElementById('profileImage').value = data.path;

                // Send the image path to another PHP script to handle further
                fetch('handleImagePath.php', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    body: 'imagePath=' + encodeURIComponent(data.path)
                })
                .then(response => response.text()) // Assuming the response is not JSON
                .then(text => console.log(text))
                .catch(error => console.error('Error:', error));

            } else {
                alert('Failed to upload image.');
            }
        })
        .catch(error => console.error('Error:', error)); 
    });
</script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>