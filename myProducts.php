<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Products | NewTech</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <?php include "header.php"; ?>

            <div class="col-12">
                <div class="row">

                    <!-- header -->
                    <div class="col-12">
                        <div class="row">

                            <nav class="navbar navbar-expand-lg bg-light">
                                <div class="container-fluid">
                                    <span class="form-label fs-2 fw-bold text-dark">My Products </i></span>

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
                                            <li class="nav-item">
                                                <a class="nav-link text-dark" href="addProduct.php">Add Product</a>
                                            </li>

                                        </ul>
                                        <form class="d-flex" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search in Product" aria-label="Search">
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
                            <div class="col-12 col-lg-3 border-0 border-end border-1 border-dark mt-3">
                                <label class="form-label fs-5"> Sorting Products</label>
                                <hr />
                                <div class="list-group offset-1  mt-1">
                                    <span class=" fs-6 fw-bold">Active Time</span>
                                    <div class="col-12 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Newest to Oldest
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Oldest to Newest
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr style="width: 80%;" />
                                    </div>
                                    <span class=" fs-6 fw-bold">By Quantity</span>
                                    <div class="col-12 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                High to Low
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Low to High
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr style="width: 80%;" />
                                    </div>
                                    <span class=" fs-6 fw-bold">By Price</span>
                                    <div class="col-12 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                High to Low
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Low to High
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr style="width: 80%;" />
                                    </div>

                                </div>
                                <div class="col-12 text-center mt-1 mb-2">
                                    <div class="row g-2">

                                        <div class="col-12 col-lg-6 d-grid">
                                            <button class="btn btn-warning fw-bold">Sort</button>
                                        </div>
                                        <div class="col-12 col-lg-6 d-grid">
                                            <button class="btn btn-dark fw-bold">Clear</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 mt-2 mb-2">
                                    <a href="#" class="fs-5 mt-3 text-dark form-label text-decoration-none">Recommended for you</a>
                                </div>
                                <div class="col-12 mt-2 mb-2">
                                    <a href="#" class="fs-5 mt-3 text-dark form-label text-decoration-none">Start shopping</a>
                                </div>
                                <div class="col-12 mt-2 mb-2">
                                    <a href="purchasedHistroy.php" class="fs-5 mt-3 text-dark form-label text-decoration-none">purchased Histroy</a>
                                </div>

                            </div>
                            <!-- filter -->
                            <!-- product -->
                            <div class="col-12 col-lg-9 mt-3">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="row">
                                            <!-- card 01-->
                                            <div class="card mb-2 mt-2 col-12 col-lg-6">
                                                <div class="row ">

                                                    <div class="col-md-4 mt-4">
                                                        <img src="resources/products/iphone12.jpg" class="img-fluid rounded-start" />
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title fw-bold">Apple iPhone 12</h5>
                                                            <span class="card-text fw-bold text-primary">Rs. 100000 .00</span><br />
                                                            <span class="card-text fw-bold text-success">10 Items left </span><br />
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input " type="checkbox" role="switch" checked />
                                                                <label class="form-check-label fw-bold text-info">
                                                                    Make your product Active
                                                                </label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row g-1">

                                                                        <div class="col-12 col-lg-6 d-grid">
                                                                            <a href="updateProduct.php" class="btn btn-outline-success fw-bold">Update</a>
                                                                        </div>
                                                                        <div class="col-12 col-lg-6 d-grid">
                                                                            <button class="btn btn-outline-danger fw-bold">Delete</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- card 01-->
                                            <!-- card 02-->
                                            <div class="card mb-2 mt-2 col-12 col-lg-6">
                                                <div class="row ">

                                                    <div class="col-md-4 mt-4">
                                                        <img src="resources/products/iPhone_11pro.jpg" class="img-fluid rounded-start" />
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title fw-bold">Apple iPhone 11</h5>
                                                            <span class="card-text fw-bold text-primary">Rs. 100000 .00</span><br />
                                                            <span class="card-text fw-bold text-success">10 Items left </span><br />
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" checked />
                                                                <label class="form-check-label fw-bold text-info">
                                                                    Make your product Active
                                                                </label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row g-1">

                                                                        <div class="col-12 col-lg-6 d-grid">
                                                                            <a href="updateProduct.php" class="btn btn-outline-success fw-bold">Update</a>
                                                                        </div>
                                                                        <div class="col-12 col-lg-6 d-grid">
                                                                            <button class="btn btn-outline-danger fw-bold">Delete</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- card 02-->
                                            <!-- card 03-->
                                            <div class="card mb-2 mt-2 col-12 col-lg-6">
                                                <div class="row ">

                                                    <div class="col-md-4 mt-4">
                                                        <img src="resources/products/htc_u.jpg" class="img-fluid rounded-start" />
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title fw-bold">HTC U</h5>
                                                            <span class="card-text fw-bold text-primary">Rs. 100000 .00</span><br />
                                                            <span class="card-text fw-bold text-success">10 Items left </span><br />
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" checked />
                                                                <label class="form-check-label fw-bold text-info">
                                                                    Make your product Active
                                                                </label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row g-1">

                                                                        <div class="col-12 col-lg-6 d-grid">
                                                                            <a href="updateProduct.php" class="btn btn-outline-success fw-bold">Update</a>
                                                                        </div>
                                                                        <div class="col-12 col-lg-6 d-grid">
                                                                            <button class="btn btn-outline-danger fw-bold">Delete</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- card 03-->
                                            <!-- card 04-->
                                            <div class="card mb-2 mt-2 col-12 col-lg-6">
                                                <div class="row ">

                                                    <div class="col-md-4 mt-4">
                                                        <img src="resources/products/Apple-iphone13.jpg" class="img-fluid rounded-start" />
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title fw-bold">Apple iPhone 13</h5>
                                                            <span class="card-text fw-bold text-primary">Rs. 100000 .00</span><br />
                                                            <span class="card-text fw-bold text-success">10 Items left </span><br />
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" checked />
                                                                <label class="form-check-label fw-bold text-info">
                                                                    Make your product Active
                                                                </label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row g-1">

                                                                        <div class="col-12 col-lg-6 d-grid">
                                                                            <a href="updateProduct.php" class="btn btn-outline-success fw-bold">Update</a>
                                                                        </div>
                                                                        <div class="col-12 col-lg-6 d-grid">
                                                                            <button class="btn btn-outline-danger fw-bold">Delete</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- card 04-->
                                            <!-- card 05-->
                                            <div class="card mb-2 mt-2 col-12 col-lg-6">
                                                <div class="row ">

                                                    <div class="col-md-4 mt-4">
                                                        <img src="resources/products/iphone_x.png" class="img-fluid rounded-start" />
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title fw-bold">Apple iPhone X</h5>
                                                            <span class="card-text fw-bold text-primary">Rs. 100000 .00</span><br />
                                                            <span class="card-text fw-bold text-success">10 Items left </span><br />
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" checked />
                                                                <label class="form-check-label fw-bold text-info">
                                                                    Make your product Active
                                                                </label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row g-1">

                                                                        <div class="col-12 col-lg-6 d-grid">
                                                                            <a href="updateProduct.php" class="btn btn-outline-success fw-bold">Update</a>
                                                                        </div>
                                                                        <div class="col-12 col-lg-6 d-grid">
                                                                            <button class="btn btn-outline-danger fw-bold">Delete</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- card 05-->
                                            <!-- card 06-->
                                            <div class="card mb-2 mt-2 col-12 col-lg-6">
                                                <div class="row ">

                                                    <div class="col-md-4 mt-4">
                                                        <img src="resources/products/oppo_a95.png" class="img-fluid rounded-start" />
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title fw-bold">Oppo A95</h5>
                                                            <span class="card-text fw-bold text-primary">Rs. 100000 .00</span><br />
                                                            <span class="card-text fw-bold text-success">10 Items left </span><br />
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" checked />
                                                                <label class="form-check-label fw-bold text-info">
                                                                    Make your product Active
                                                                </label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row g-1">

                                                                        <div class="col-12 col-lg-6 d-grid">
                                                                            <a href="updateProduct.php" class="btn btn-outline-success fw-bold">Update</a>
                                                                        </div>
                                                                        <div class="col-12 col-lg-6 d-grid">
                                                                            <button class="btn btn-outline-danger fw-bold">Delete</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- card 06-->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr style="width: 100%;" />
                                    </div>
                                    <!-- pagination -->
                                    <div class="offset-2 offset-lg-3 col-8 col-lg-6 text-center mb-3">
                                        <nav aria-label="Page navigation example">

                                            <ul class="pagination pagination-lg justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- pagination -->

                                </div>
                            </div>
                            <!-- product -->

                        </div>
                    </div>

                </div>
            </div>




            <?php require "footer.php"; ?>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>