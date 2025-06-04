<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cart | NewTech</title>

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
                            <span class="form-label fs-2 fw-bold text-dark">Cart <i class="bi bi-cart4 fs-1 text-dark"></i></span>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse offset-1" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Shop by Category
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-dark" href="#">Mobile Phones</a></li>
                                            <li><a class="dropdown-item text-dark" href="#">laptops</a></li>
                                            <li><a class="dropdown-item text-dark" href="#">Television</a></li>
                                            <li><a class="dropdown-item text-dark" href="#">Gaming Console</a></li>
                                        </ul>
                                    </li>
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

            <!-- product -->
            <div class="col-12 border rounded mb-2">
                <div class="row">

                    <div class="col-12 col-lg-8 border-1 border-end border-dark">
                        <div class="row align-content-center">

                            <!-- card 01 -->
                            <div class="card mb-3 mt-1 col-12">
                                <div class="row g-0">

                                    <div class="col-md-12 mt-2 mb-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="text-black-50 fs-5">Seller :</label>&nbsp;
                                                <span class="text-black fs-5">Ayodya</span>&nbsp;
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="col-md-4">
                                        <img src="resources/products/iPhone_11pro.jpg" class="img-fluid rounded-start" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title fw-bold">Apple iPhone 11</h4>
                                            <div class="col-12 mt-1 mb-1">
                                                <div class="row">

                                                    <div class="col-lg-6 mt-1">
                                                        <span class="fw-bold text-dark">Colour : Black</span>
                                                    </div>
                                                    <div class="col-lg-6 mt-1">
                                                        <span class="fw-bold text-dark">Condition : Brand new</span>
                                                    </div>
                                                    <div class="col-lg-6 mt-1">
                                                        <span class="fw-bold text-black">Price : </span>&nbsp;
                                                        <span class="fw-bold text-black fw-bold">Rs. 100000.00</span>
                                                    </div>
                                                    <div class="col-lg-6 mt-1">
                                                        <span class="fw-bold text-dark">Delivery fee : </span>&nbsp;
                                                        <span class="fw-bold text-dark fw-bold">Rs. 400.00</span>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <span class="fw-bold text-dark">Quantity : </span>
                                                            </div>
                                                            <div class="col-8">
                                                                <input type="number" class="form-control" value="1" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 d-grid mt-2">
                                                <div class="row">
                                                    <div class="col-lg-4 offset-1">
                                                        <div class="row">
                                                            <button class="btn btn-outline-success mt-2">Buy Now</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 offset-1">
                                                        <div class="row">
                                                            <button class="btn btn-outline-danger mt-2">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <span class="fw-bold fs-5 text-black-50">Requested Total <i class="bi bi-info-circle"></i></span>
                                                    </div>
                                                    <div class="col-12 col-md-6 text-end">
                                                        <span class="fw-bold fs-5 text-black-50">Rs.2500.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card 01 -->

                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mt-1">
                        <div class="row ">

                            <!-- summary -->
                            <div class="card text-bg-light mb-2">
                                <h4 class="card-header mt-4">Summery</h4>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <span class="fs-6 fw-bold">items (1)</span>
                                        </div>
                                        <div class="col-6 text-end mb-3">
                                            <span class="fs-6 fw-bold">Rs. 100000 .00</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="fs-6 fw-bold">Shipping</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="fs-6 fw-bold">Rs. 400 .00</span>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <hr />
                                        </div>
                                        <div class="col-6 mt-2">
                                            <span class="fs-4 fw-bold">Total</span>
                                        </div>
                                        <div class="col-6 mt-2 text-end">
                                            <span class="fs-4 fw-bold">Rs. 100400 .00</span>
                                        </div>
                                        <div class="col-12 mt-3 mb-3 d-grid">
                                            <button class="btn btn-warning fs-5 fw-bold">CHECKOUT</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- summary -->

                        </div>
                    </div>

                </div>
            </div>
            <!-- product -->

            <?php include "footer.php"; ?>
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
</body>

</html>