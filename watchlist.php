<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Watchlist | NewTech</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css" />
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "header.php"; ?>

           <!-- header -->
            <div class="col-12">
                <div class="row">

                    <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-fluid">
                            <span class="form-label fs-2 fw-bold text-dark">Watchlist <i class="bi bi-suit-heart-fill fs-2"></i></span>
 
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse offset-1" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="cart.php">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">Recents</a>
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

            <div class="col-12">
                <div class="row">

                    <!-- filter -->
                    <div class="col-11 col-lg-3 border-0 border-end border-1 border-dark mt-4">
                        <label class="form-label fs-5">Products</label>
                        <div class="list-group offset-1">
                            <li class="d-flex justify-content-between align-items-start mb-1">
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light">Mobile Phone <span class="badge bg-warning text-dark rounded-pill justify-content-end">14</span></a>
                            </li>
                            <li class="d-flex justify-content-between align-items-start mb-1">
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light">Laptop <span class="badge bg-warning text-dark rounded-pill">8</span></a>
                            </li>
                            <li class="d-flex justify-content-between align-items-start mb-1">
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light">Television <span class="badge bg-warning text-dark rounded-pill">0</span></a>
                            </li>
                            <li class="d-flex justify-content-between align-items-start mb-1">
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light">Gaming Console <span class="badge bg-warning text-dark rounded-pill">5</span></a>
                            </li>
                        </div>
                        <div class="col-12 mt-2 mb-2">
                            <a href="#" class="fs-5 mt-3 text-dark form-label text-decoration-none">Recommended for you</a>
                        </div>
                        <div class="col-12 mt-2 mb-2">
                            <a href="#" class="fs-5 mt-3 text-dark form-label text-decoration-none">Start shopping</a>
                        </div>
                        <div class="col-12 mt-2 mb-2">
                            <a href="purchasedHistroy.php" class="fs-5 mt-3 text-dark form-label text-decoration-none">Purchased History</a>
                        </div>

                    </div>
                    <!-- filter -->
                    <div class="col-12 col-lg-9 mt-3 mb-3">
                        <div class="row">

                            <div class="col-12 mt-1 mb-2 d-grid justify-content-end">
                                <button class="btn btn-outline-dark col-12">View All</button>
                            </div>
                            <!-- product -->
                            <div class="col-12 mt-3 mb-3">
                                <div class="row">

                                    <div class="col-12 col-lg-6 ">
                                        <div class="row">

                                            <div class="card mb-3">
                                                <div class="row g-0">
                                                    <div class="col-md-4 mt-3">
                                                        <img src="resources/products/iphone_x.png" class="img-fluid rounded-start" />
                                                    </div>
                                                    <div class="col-md-8 mt-2">
                                                        <div class="card-body">
                                                            <h5 class="card-title fw-bold">Apple iPhone X</h5>
                                                            <div class="col-l12 mt-1">
                                                                <span class="fw-bold text-dark">Colour : Black</span>
                                                            </div>
                                                            <div class="col-12 mt-1">
                                                                <span class="fw-bold text-dark">Condition : Brand new</span>
                                                            </div>
                                                            <div class="col-12 mt-1">
                                                                <span class="fw-bold text-black">Price : </span>&nbsp;
                                                                <span class="fw-bold text-black fw-bold">Rs. 135000.00</span>
                                                            </div>
                                                            <div class="col-12 mt-1">
                                                                <span class="fw-bold text-dark">Quantity : 8 Items available</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="row g-1">

                                                            <div class="col-12 d-grid">
                                                                <button class="btn btn-outline-success">Buy Now</button>
                                                            </div>
                                                            <div class="col-12 col-lg-6 d-grid">
                                                                <button class="btn btn-outline-warning">Add To</button>
                                                            </div>
                                                            <div class="col-12 col-lg-6 d-grid">
                                                                <button class="btn btn-outline-danger">Remove</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row">

                                            <div class="card mb-3">
                                                <div class="row g-0">
                                                    <div class="col-md-4 mt-3">
                                                        <img src="resources/products/iPhone_11pro.jpg" class="img-fluid rounded-start" />
                                                    </div>
                                                    <div class="col-md-8 mt-2">
                                                        <div class="card-body">
                                                            <h5 class="card-title fw-bold">Apple iPhone 11</h5>
                                                            <div class="col-l12 mt-1">
                                                                <span class="fw-bold text-dark">Colour : Black</span>
                                                            </div>
                                                            <div class="col-12 mt-1">
                                                                <span class="fw-bold text-dark">Condition : Brand new</span>
                                                            </div>
                                                            <div class="col-12 mt-1">
                                                                <span class="fw-bold text-black">Price : </span>&nbsp;
                                                                <span class="fw-bold text-black fw-bold">Rs. 100000.00</span>
                                                            </div>
                                                            <div class="col-12 mt-1">
                                                                <span class="fw-bold text-dark">Quantity : 10 Items available</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="row g-1">

                                                            <div class="col-12 d-grid">
                                                                <button class="btn btn-outline-success">Buy Now</button>
                                                            </div>
                                                            <div class="col-12 col-lg-6 d-grid">
                                                                <button class="btn btn-outline-warning">Add To</button>
                                                            </div>
                                                            <div class="col-12 col-lg-6 d-grid">
                                                                <button class="btn btn-outline-danger">Remove</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!--Product -->

                        </div>
                    </div>
                    <!-- filter -->

                </div>
            </div>



            <?php include "footer.php"; ?>
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
</body>

</html>