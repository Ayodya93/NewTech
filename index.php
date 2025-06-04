<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NewTech</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css" />

</head>

<body class="main-body">

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

            <div class="col-12">
                <div class="row">

                    <div class="col-12 col-lg-4 offset-lg-6">
                        <div class="row">

                            <!-- signin -->
                            <div class="col-12 p-4 rounded-1" id="SignInBox" style="margin-top: 90px; background-color: #E9EBEE;">
                                <div class="row">

                                    <div class="col-12">
                                        <p class="title2 text-center text-dark">USER LOGIN</p>
                                        <p class="text-center"><i class="bi bi-person-fill fs-1 text-dark"></i></p>
                                    </div>
                                    <hr />
                                    <div class="col-12 mt-2 mb-2">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label class="form-label">Email</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="email" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2 mb-2">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label class="form-label">Password</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" />
                                                    <button class="btn btn-outline-dark" type="button"><i class="bi bi-eye-fill"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-2 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" />
                                            <label class="form-check-label">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-2 mb-2">
                                        <a href="#" class="link-dark">Forgot Password?</a>
                                    </div>
                                    <div class="col-12 d-grid mt-2 mb-2">
                                        <a href="home.php" class="btn btn-warning">Sign In</a>
                                    </div>
                                    <div class="col-12">
                                        <p class=" text-center">or</p>
                                    </div>
                                    <div class="col-12 text-center mb-2">
                                        <a href="#" class="link-dark text-decoration-none fw-bold" onclick="ChangeView();">Create a new Account</a>
                                    </div>
                                    <hr />
                                    <div class="col-12 mt-2 text-center">
                                        <ul class="list-unstyled list-inline">

                                            <li class="list-inline-item">
                                                <a href="#" class="form-floating text-dark">
                                                    <i class="bi bi-facebook" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="form-floating text-dark">
                                                    <i class="bi bi-twitter" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="form-floating text-dark">
                                                    <i class="bi bi-whatsapp" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="form-floating text-dark">
                                                    <i class="bi bi-linkedin" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="form-floating text-dark">
                                                    <i class="bi bi-youtube" style="font-size: 18px;"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- signin -->

                            <!-- signup -->
                            <div class="col-12 p-3 d-none rounded-1" id="SignUpBox" style="margin-top: 50px; background-color: #E9EBEE;">
                                <div class="row">

                                    <div class="col-12">
                                        <p class="title2 text-center text-dark">Create a new Account</p>
                                        <p class="text-center"><i class="bi bi-person-plus-fill fs-2 text-dark"></i></p>
                                    </div>
                                    <hr />
                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label class="form-label">First Name</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label class="form-label">Last Name</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label class="form-label">Email</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="email" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label class="form-label">Password</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" />
                                                    <button class="btn btn-outline-dark" type="button"><i class="bi bi-eye-fill"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <label class="form-label">Mobile</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <label class="form-label">Gender</label>
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <div class="row">
                                                    <div class="form-check col-6">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" />
                                                        <label class="form-check-label" >
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check col-6">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" />
                                                        <label class="form-check-label" >
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 d-grid mt-2">
                                            <a href="#" class="btn btn-warning">Sign Up</a>
                                        </div>
                                        <div class="col-12">
                                            <p class=" text-center">or</p>
                                        </div>
                                        <div class="col-12 text-center mt-1">
                                            <a href="#" class="link-dark text-decoration-none fw-bold" onclick="ChangeView();">Already you have an Account? SignIn</a>
                                        </div>
                                        <hr />
                                        <div class="col-12 mt-1 text-center">
                                            <ul class="list-unstyled list-inline">

                                                <li class="list-inline-item">
                                                    <a href="#" class="form-floating text-dark">
                                                        <i class="bi bi-facebook" style="font-size: 18px;"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="form-floating text-dark">
                                                        <i class="bi bi-twitter" style="font-size: 18px;"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="form-floating text-dark">
                                                        <i class="bi bi-whatsapp" style="font-size: 18px;"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="form-floating text-dark">
                                                        <i class="bi bi-linkedin" style="font-size: 18px;"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="form-floating text-dark">
                                                        <i class="bi bi-youtube" style="font-size: 18px;"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <!-- signup -->
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        <script src="script.js"></script>
        <script src="bootstrap.js"></script>
</body>

</html>