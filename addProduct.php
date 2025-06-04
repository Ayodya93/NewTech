<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Products | NewTech</title>

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
                            <span class="form-label fs-2 fw-bold text-dark">Add Product <i class="bi bi-bag-plus-fill fs-2"></i></span>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse offset-1" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="cart.php">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">Sell</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">Advanced</a>
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
            <!-- body -->
            <div class="col-12">
                <div class="row">

                    <div class="col-12 mt-3 mb-2">
                        <div class="row">
                            <span class="fs-4 fw-bold">Product Details</span>
                        </div>
                    </div>
                    <hr />
                    <div class="col-12">
                        <div class="row">

                            <div class="col-12 col-lg-4">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label" style="font-size: 16px;">Select Product Category</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select class="form-select text-center bg-light">
                                        <option>Select Category</option>
                                        <option>Mobile Phone</option>
                                        <option>Laptop</option>
                                        <option>Television</option>
                                        <option>Gmaing Console</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label" style="font-size: 16px;">Select Product Brand</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select class="form-select text-center bg-light">
                                        <option>Select Brand</option>
                                        <option>Apple</option>
                                        <option>Huawei</option>
                                        <option>Sony</option>
                                        <option>Samsung</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label" style="font-size: 16px;">Select Product Model</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select class="form-select text-center bg-light">
                                        <option>Select Model</option>
                                        <option>Apple</option>
                                        <option>Huawei</option>
                                        <option>Sony</option>
                                        <option>Samsung</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                        <label class="form-label fw-bold" style="font-size: 16px;">
                                            Add a Title to your Product
                                        </label>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="row">

                                    <div class="col-12 col-lg-4 border-end border-secondary">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 16px;">Select Product Condition</label>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-check-inline col-4 offset-1">
                                                    <input class="form-check-input" type="radio" name="c"/>
                                                    <label class="form-check-label">Brandnew</label>
                                                </div>
                                                <div class="form-check form-check-inline col-4">
                                                    <input class="form-check-input" type="radio" name="c"/>
                                                    <label class="form-check-label">Used</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4 border-end border-secondary">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 16px;">Select Product Colour</label>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">

                                                    <div class="form-check form-check-inline col-4 offset-1">
                                                        <input class="form-check-input" type="radio" name="c1"/>
                                                        <label class="form-check-label">Black</label>
                                                    </div>
                                                    <div class="form-check form-check-inline col-4">
                                                        <input class="form-check-input" type="radio" name="c1"/>
                                                        <label class="form-check-label">Rose Red</label>
                                                    </div>
                                                    <div class="form-check form-check-inline col-4 offset-1">
                                                        <input class="form-check-input" type="radio" name="c1"/>
                                                        <label class="form-check-label">Ocean Blue</label>
                                                    </div>
                                                    <div class="form-check form-check-inline col-4">
                                                        <input class="form-check-input" type="radio" name="c1"/>
                                                        <label class="form-check-label">White</label>
                                                    </div>

                                                </div>
                                                <div class="col-12">
                                                    <div class="input-group mb-2 mt-2">
                                                        <input type="text" class="form-control" placeholder="Add new colour" />
                                                        <span class="btn btn-outline-warning">+ Add</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 16px;">Select Product Quntity</label>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <input type="number" class="form-control" value="0" min="0" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 mt-1">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 16px;">Product Description</label>
                                    </div>
                                    <div class="col-12">
                                        <textarea cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 mt-3 mb-2">
                        <div class="row">
                            <span class="fs-4 fw-bold">Payments</span>
                        </div>
                    </div>
                    <hr />
                    <div class="col-12">
                        <div class="row">

                            <div class="col-6  border-end border-secondary">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 16px;">Cost Per Item</label>
                                    </div>
                                    <div class="offset-0 offset-lg-2 col-12 col-lg-8">
                                        <div class="input-group mb-2 mt-2">
                                            <span class="input-group-text">Rs.</span>
                                            <input type="text" class="form-control" />
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 16px;">Approved Payment Methods</label>
                                    </div>
                                    <div class="col-12 ">
                                        <div class="row">
                                            <div class="offset-0 offset-lg-2 col-2 pm pm1"></div>
                                            <div class="col-2 pm pm2"></div>
                                            <div class="col-2 pm pm3"></div>
                                            <div class="col-2 pm pm4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label fw-bold" style="font-size: 16px;">Delivery Cost</label>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-12 col-lg-3 offset-lg-1">
                                        <label class="form-label">Delivery cost within Colombo</label>
                                    </div>
                                    <div class="col-12 col-lg-8 border-end border-secondary">
                                        <div class="input-group mb-2 mt-2">
                                            <span class="input-group-text">Rs.</span>
                                            <input type="text" class="form-control" />
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-12 col-lg-3 offset-lg-1">
                                        <label class="form-label">Delivery cost without Colombo</label>
                                    </div>
                                    <div class="col-12 col-lg-8">
                                        <div class="input-group mb-2 mt-2">
                                            <span class="input-group-text">Rs.</span>
                                            <input type="text" class="form-control" />
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 mb-2">
                        <div class="row">
                            <span class="fs-4 fw-bold">Add Product Image</span>
                        </div>
                    </div>
                    <hr />
                    <div class="col-12">
                        <div class="row">

                            <div class="col-12 col-lg-6 offset-lg-3">
                                <div class="row">
                                    <div class="col-4 border border-dark rounded">
                                        <img src="resources/addproductimg.svg" class="img-fluid" style="height: 200px; width: 200px;" />
                                    </div>
                                    <div class="col-4 border border-dark rounded">
                                        <img src="resources/addproductimg.svg" class="img-fluid" style="height: 200px; width: 200px;" />
                                    </div>
                                    <div class="col-4 border border-dark rounded">
                                        <img src="resources/addproductimg.svg" class="img-fluid" style="height: 200px; width: 200px;" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 offset-lg-3 mt-3 d-grid">
                                <input type="file" class="d-none" id="imageuploader" multiple />
                                <label for="imageuploader" class="btn btn-dark col-12">Upload Images</label>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="border-secondary" style="border-width: 3px;" />
                    </div>
                    <div class="col-12 col-lg-4 offset-lg-4 mt-3 mb-3 d-grid">
                        <button class="btn btn-warning">Save Product</button>
                    </div>
                    

                </div>
            </div>
            <!-- product -->

            <?php require "footer.php"; ?>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>