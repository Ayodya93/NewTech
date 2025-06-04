<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Advanced Search | NewTech</title>

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
                            <span class="form-label fs-2 fw-bold text-dark">Advanced Search </span>
                            <div class="collapse navbar-collapse offset-1" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">Sell</a>
                                    </li>


                                </ul>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Type keyword to search" aria-label="Search">
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
                        <label class="form-label fs-5">Product Details</label>

                        <div class="col-12 mt-2 mb-2">
                            <select class="form-select bg-light">
                                <option>Select Category</option>
                            </select>
                        </div>
                        <div class="col-12  mb-2">
                            <select class="form-select bg-light">
                                <option>Select Brand</option>
                            </select>
                        </div>
                        <div class="col-12  mb-2">
                            <select class="form-select bg-light">
                                <option>Select Model</option>
                            </select>
                        </div>
                        <div class="col-12  mb-2">
                            <select class="form-select bg-light">
                                <option>Select Colour</option>
                                <option>Black</option>
                                <option>Red Rose</option>
                                <option>Ocean Blue</option>
                                <option>White</option>
                            </select>
                        </div>
                        <div class="col-12  mb-2">
                            <label class="form-label">Condition </label>
                            <div class="col-12">
                                <div class="form-check form-check-inline col-4 offset-1">
                                    <input class="form-check-input" type="radio" name="c" />
                                    <label class="form-check-label">Brandnew</label>
                                </div>
                                <div class="form-check form-check-inline col-4">
                                    <input class="form-check-input" type="radio" name="c" />
                                    <label class="form-check-label">Used</label>
                                </div>
                            </div>

                        </div>
                        <hr />
                        <label class="form-label fs-5">Product Price</label>

                        <div class="col-12 mb-1 mt-2">
                            <input type="text" class="form-control" placeholder="Price From" />
                        </div>
                        <div class="col-12 mb-1 mt-2">
                            <input type="text" class="form-control" placeholder="Price To" />
                        </div>

                        <div class="col-12 mt-2 mb-2 d-grid">
                            <button class="btn btn-warning">Search</button>
                        </div>

                    </div>
                    <!-- filter -->
                    <!-- filter -->
                    <div class="col-12 col-lg-9 mt-3 mb-3">
                        <div class="row">

                            <div class="col-12 mt-1 mb-2 d-grid justify-content-end">
                                <!-- <button class="btn btn-outline-dark col-12">View All</button> -->
                                <select class="form-select">
                                    <option>Sort By</option>
                                    <option>Price High to Low</option>
                                    <option>Price Low to High</option>
                                    <option>Quantity High to Low</option>
                                    <option>Quantity Low to High</option>
                                </select>
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