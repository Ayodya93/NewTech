<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel | NewTech</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="row">

                    <!-- header -->
                    <nav class="navbar navbar-expand-lg bg-light mt-2">
                        <div class="container-fluid">
                            <label class="form-label fs-2 fw-bold">Admin Panel</label>

                            <div class="collapse navbar-collapse offset-1" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link active text-dark" aria-current="page" href="home.php">Home</a>
                                    <a class="nav-link text-dark" href="#">Notification</a>


                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- header -->
                    <!-- body -->
                    <div class="col-12">
                        <div class="row">

                            <!-- filter -->
                            <div class="col-12 col-lg-3 border-0 border-end border-1 border-dark mt-5">
                                <div class="col-12 mt-2 mb-2">
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark rounded-1 fs-6 fw-bold">Manage Products</a>
                                </div>
                                <div class="col-12 mt-2 mb-2">
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark rounded-1 fs-6 fw-bold">Manage Users</a>
                                    <div class="list-group offset-1 mt-2">
                                        <li class="d-flex justify-content-between align-items-start mb-1">
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-light">Login Users <span class="badge bg-warning text-dark rounded-pill justify-content-end">67</span></a>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-start mb-1">
                                            <a href="#" class="list-group-item list-group-item-action list-group-item-light">Logout Users <span class="badge bg-warning text-dark rounded-pill">8</span></a>
                                        </li>
                                        
                                    </div>
                                </div>
                                <div class="col-12 mt-2 mb-2">
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark rounded-1 fs-6 fw-bold">Settings</a>
                                </div>
                                <div class="col-12 mt-2 mb-2">
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark rounded-1 fs-6 fw-bold">Help & Content</a>
                                </div>

                            </div>
                            <!-- filter -->
                            <!-- dashboard -->
                            <div class="col-12 col-lg-9">
                                <div class="row">

                                    <div class="col-12 mt-4">
                                        <div class="row">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Search for Here" />
                                                <button class="btn btn-outline-dark" type="button"><i class="bi bi-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fs-4 fw-bold text-dark">Dashboard</label>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="row">

                                            <div class="col-12 col-lg-4">
                                                <div class="card bg-light" style="width: 22rem;">
                                                    <div class="card-body">
                                                        <h4 class="card-title fw-bold text-black-50">Daily Earnings</h4>
                                                        <div class="col-12 offset-1 mt-3">
                                                            <label class="form-label fs-5 fw-bold">LKR. 980000.00</label>
                                                        </div>
                                                        <div class="col-12 mt-1">
                                                            <span class="text-black-50">Date :</span>&nbsp;
                                                            <span class="text-dark">01/01/2022</span>
                                                        </div>
                                                        <hr />
                                                        <a href="#" class="card-link text-dark">Visit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <div class="card bg-light" style="width: 22rem;">
                                                    <div class="card-body">
                                                        <h4 class="card-title fw-bold text-black-50">Total Orders</h4>
                                                        <div class="col-12 offset-1 mt-3">
                                                            <label class="form-label fs-5 fw-bold">5234</label>
                                                        </div>
                                                        <div class="col-12 mt-1">
                                                            <span class="text-black-50">Date :</span>&nbsp;
                                                            <span class="text-dark">01/01/2022</span>
                                                        </div>
                                                        <hr />
                                                        <a href="#" class="card-link text-dark">Visit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <div class="card bg-light" style="width: 22rem;">
                                                    <div class="card-body">
                                                        <h4 class="card-title fw-bold text-black-50">Total Sales</h4>
                                                        <div class="col-12 offset-1 mt-3">
                                                            <label class="form-label fs-5 fw-bold">LKR. 2700000.00</label>
                                                        </div>
                                                        <div class="col-12 mt-1">
                                                            <span class="text-black-50">Date :</span>&nbsp;
                                                            <span class="text-dark">01/01/2022</span>
                                                        </div>
                                                        <hr />
                                                        <a href="#" class="card-link text-dark">Visit</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr />
                                    <div class="col-12">
                                        <label class="form-label fs-5 fw-bold text-dark">Last Orders</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">

                                            <div class="card-body col-12 col-lg-6">
                                                <div class="col-12">

                                                    <ul class="list-group">

                                                        <div class="col-12 mt-1 bg-light">
                                                            <li class="list-group-item list-group-item-secondary rounded-1">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <span class="text-dark">Apple iPhone 12</span>&nbsp;&nbsp;
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <span class="text-dark"><i class="bi bi-clock-history"></i> 3 min ago</span>
                                                                        </div>
                                                                        <div class="col-2">
                                                                            <a href="#" class="card-link text-dark">Visit</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                        <div class="col-12 mt-1">
                                                            <li class="list-group-item list-group-item-secondary rounded-1">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <span class="text-dark">Dell Inspiron 15 3000</span>&nbsp;&nbsp;
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <span class="text-dark"><i class="bi bi-clock-history"></i> 1 Day ago</span>
                                                                        </div>
                                                                        <div class="col-2">
                                                                            <a href="#" class="card-link text-dark">Visit</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                        <div class="col-12 mt-1 bg-light">
                                                            <li class="list-group-item list-group-item-secondary rounded-1">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <span class="text-dark">LG C2 OLED TV</span>&nbsp;&nbsp;
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <span class="text-dark"><i class="bi bi-clock-history"></i> 1 week ago</span>
                                                                        </div>
                                                                        <div class="col-2">
                                                                            <a href="#" class="card-link text-dark">Visit</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                                <a href="#" class="btn btn-warning mt-1">View All</a>
                                            </div>

                                            <div class="col-sm-6 ps-3">
                                                <img src="resources/line-graph.png" class="img" />
                                                <!-- <div class="card text-decoration-none">
                                                    <div class="card-body">
                                                        <img src="resources/line-graph.png" class="img"/>
                                                    </div>
                                                </div> -->
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- dashboard -->

                        </div>
                    </div>
                    <!-- body -->

                </div>
            </div>

            <?php include "footer.php"; ?>
        </div>
    </div>

    <script src="bootstrap.js"></script>
</body>

</html>