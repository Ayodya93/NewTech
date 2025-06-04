<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | NewTech</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">

        <?php require "header.php"; ?>
        <hr/>

            <!-- header -->
            <div class="col-12">
                <div class="row">

                    <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-fluid">
                            <span class="form-label fs-2 fw-bold text-dark">NewTech </span>
 
                            <div class="collapse navbar-collapse offset-1" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">Sell</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="advanced.php">Advanced</a>
                                    </li>

                                </ul>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search in Cart" aria-label="Search">
                                    <button class="btn btn-outline-dark" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
            <!-- header -->
            <hr />
            <div class="col-12">
                <div class="row">

                    <!-- carsousel -->
                    <div class="col-12 d-none d-lg-block mb-3">
                        <div class="row">

                            <div id="carouselExampleControls" class="offset-2 col-8 carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="resources/background_images/newtech1.jpg" class="d-block poster-img-1" />
                                        <div class="carousel-caption d-none d-md-block poster-caption">
                                            <h5 class="poster-title">Welcome to NewTech</h5>
                                            <p class="poster-text">The online Electronic shopping website in Sri lanka.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resources/background_images/newtech4.jpg" class="d-block poster-img-1" />
                                        <div class="carousel-caption d-none d-md-block poster-caption-1">
                                            <h5 class="poster-title"></h5>
                                            <p class="poster-text">Experience The Lowest Delivery Cost With Us.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                        </div>
                    </div>
                    <!-- carsousel -->

                    <hr />
                    <!-- Product category -->
                    <div class="col-12 mt-2 mb-2">
                        <a href="#" class="text-decoration-none link-dark fs-3 fw-bold">Product catgories..</a> &nbsp;&nbsp;
                        <a href="#" class="text-decoration-none link-dark fs-6 ">See All &nbsp;&rarr;</a>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row border border-secondary">

                            <div class="col-12">
                                <div class="row justify-content-center gap-2">

                                    <div class="card mt-2" style="width: 18rem;">
                                        <img src="resources/products/mobile1.jpg" class="card-img-top" />
                                        <div class="card-body text-center">
                                            <span class="card-title fs-5 fw-bold">Mobiles</span><br/>
                                            <a href="#" class="btn btn-warning mt-3 d-grid">View</a>
                                        </div>
                                    </div>
                                    <div class="card mt-2" style="width: 18rem;">
                                        <img src="resources/products/laptop1.jpg" class="card-img-top" />
                                        <div class="card-body text-center">
                                            <span class="card-title fs-5 fw-bold">Laptops</span><br/>
                                            <a href="#" class="btn btn-warning mt-3 d-grid">View</a>
                                        </div>
                                    </div>
                                    <div class="card mt-2" style="width: 18rem;">
                                        <img src="resources/products/television3.jpg" class="card-img-top" />
                                        <div class="card-body text-center">
                                            <span class="card-title fs-5 fw-bold">Televison</span><br/>
                                            <a href="#" class="btn btn-warning mt-3 d-grid">View</a>
                                        </div>
                                    </div>
                                    <div class="card mt-2" style="width: 18rem;">
                                        <img src="resources/products/gamingConsole.jpg" class="card-img-top" />
                                        <div class="card-body text-center">
                                            <span class="card-title fs-5 fw-bold">Gaming Console</span><br/>
                                            <a href="#" class="btn btn-warning mt-3 d-grid">View</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- product category -->

                </div>
            </div>


            <?php require "footer.php"; ?>

        </div>
    </div>
    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>