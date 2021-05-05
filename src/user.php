<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet'>
    <link rel="stylesheet" href="../nyumstyle.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../hamburgers.css" rel="stylesheet">
</head>

<body>
    <header class="py-3" style="background-color: #92D050;">
        <div class="container gap-3">
            <div class="d-flex align-items-center flex-wrap flex-sm-nowrap justify-content-between">
                <!-- <button class="btn btn-warning d-sm-none order-1" type="button" data-bs-toggle="collapse"
                    data-bs-target="#categoriesToggle" aria-controls="categoriesToggle" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button> -->
                <button class="hamburger hamburger--spring d-sm-none order-1" type="button" data-bs-toggle="collapse"
                    data-bs-target="#categoriesToggle" aria-controls="categoriesToggle" aria-expanded="true"
                    aria-label="Toggle navigation" onclick="burgerAnimate()">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <a href="../index.html" class="navbar-brand order-2">
                    <img src="../img/nyumnyumlogo.png" alt="logo" width="150" class="mx-2">
                </a>

                <div class="input-group order-4 order-sm-3">
                    <input type="search" class="form-control" placeholder="Search" aria-label="search"
                        aria-describedby="button-addon2" style="border-radius: 20px 0 0 20px;">
                    <button class="btn btn-success" type="button" id="button-addon2"
                        style="border-radius: 0 20px 20px 0;"><span class="material-icons pt-1">
                            search
                        </span></button>
                </div>


                <ul class="navbar-nav order-3 order-sm-4 ms-3 mb-2 mb-md-0 d-flex flex-row">
                    <li class="nav-item mx-1">
                        <a href="user.html" class="nav-link text-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                width="25" height="25" fill="currentColor" class="bi bi-person-fill"
                                viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg></a>
                    </li>
                    <li class="nav-item mx-1">
                        <a href="list1.html" class="nav-link text-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                width="23" height="23" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg></a>
                    </li>
                    <li class="nav-item mx-1">
                        <a href="cart.html" class="nav-link text-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                width="25" height="25" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                <path
                                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                            </svg></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog signin_dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../img/nyumnyumlogo.png" alt="">
                </div>
                <div class="modal-body signin_modal">
                    <ul class="nav nav-tabs tab" id="myTab" role="tablist">
                        <li class="nav-item1">
                            <a class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#signin"
                                href="#signin" type="button" role="tab" aria-controls="home" aria-selected="true">Sign
                                In</a>
                        </li>
                        <li class="nav-item1" role="presentation">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#signup"
                                href="#signup" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Sign Up</a>
                        </li>

                    </ul>

                    <div class="social-login">
                        <ul class="social_log">
                            <li>
                                <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                                <a href="https://www.facebook.com/" class="fa fa-google"></a>
                            </li>

                        </ul>

                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="home-tab">
                            <form>

                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </form>
                            <p class="forgot_link">
                                <a href="#">Forgot your password ?</a>
                            </p>
                            <p class="signin_link">Don't have an Account ?
                                <a id="profile-tab" data-bs-toggle="tab" data-bs-target="#signup" href="#signup"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Sign Up</a>
                            </p>


                        </div>
                        <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="profile-tab">
                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputText1"
                                        aria-describedby="textHelp" placeholder="Username">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Create An Account</button>
                            </form>
                            <p class="signin_link">Already have an Account ?
                                <a id="home-tab" data-bs-toggle="tab" data-bs-target="#signin" href="#signin"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">Sign In</a>
                            </p>

                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </header>

    <nav class="navbar sticky-top navbar-expand-sm shadow py-2 justify-content-center"
        style="background-color: #FD6C5D;">
        <div class="collapse navbar-collapse" id="categoriesToggle">
            <div class="container">
                <ul class="navbar-nav mb-2 mb-md-0 w-100 justify-content-between next" style="font-weight: bold;">
                    <li class="nav-item dropdown active1">
                        <a class="nav-link dropdown-toggle text-reset text-decoration-none" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Browse Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Fresh Fruits</a></li>
                            <li><a class="dropdown-item" href="#">Fresh Meat</a></li>
                            <li><a class="dropdown-item" href="#">Fresh Vegetables</a></li>
                            <li><a class="dropdown-item" href="#">Seafood</a></li>
                            <li><a class="dropdown-item" href="#">Dairy & Cheese</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="products.html" class="nav-link text-dark">Food Essentials</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-dark">Chilled & Frozen</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-dark">Beverages</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-dark">Cookies & Snacks</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-dark">Bakery</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container-lg py-3 rounded" style="background-color:white;">
            <div class="row">
                <div class="col col-sm-3 py-5">
                    <div class="d-flex justify-content-center">
                        <img class="rounded-circle" src="../img/dpalep.jpeg" width="180" height="200">
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="../src/edituser.html" style="text-decoration: none;">Edit Profile</a>
                    </div>
                </div>
                <div class="col-lg-9 py-2">
                    <div class="col-lg-9 py-2">
                        <h4>My Profile</h4>
                        <h6>Manage and protect your account</h6>
                        <hr>
                        <div class="row g-3 py-2">
                            <div class="col-md-3">
                                <label for="labelName" class="col-form-label"><strong>Name</strong></label>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <label for="name" class="col-form-label">John Doe</label>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-md-3">
                                <label for="labelName" class="col-form-label"><strong>Username</strong></label>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <label for="username" class="col-form-label">johndoe</label>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-md-3">
                                <label for="labelEmail" class="col-form-label"><strong>Email</strong></label>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <label for="email" class="col-form-label">johndoe123@gmail.com</label>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-md-3">
                                <label for="labelPhone" class="col-form-label"><strong>Phone Number</strong></label>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <label for="phone" class="col-form-label">555 5555 555</label>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-md-5">
                                <label for="labelGender" class="col-form-label"><strong>Gender</strong></label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="radioMale" value="option1" checked>
                                    <label class="form-check-label" for="radioMale">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="radioFemale" value="option2">
                                    <label class="form-check-label" for="radioFemale">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="radioOther" value="option3">
                                    <label class="form-check-label" for="radioOther">Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-md-3">
                                <label for="labelDOB" class="col-form-label"><strong>Date Of Birth</strong></label>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <label for="DOB" class="col-form-label">1/1/2000</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 py-2">
                        <div class="row py-2">
                            <h4>Address Information</h4>
                            <h6>Manage your delivery information</h6>
                            <hr>
                            <div class="col-md-3">
                                <label for="labelAddress" class="col-form-label"><strong>Street</strong></label>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <label for="address" class="col-form-label">420 Jalan Panjang</label>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-md-3">
                                <label for="labelCity" class="col-form-label"><strong>City</strong></label>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <label for="city" class="col-form-label">Petaling Jaya</label>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-md-3">
                                <label for="labelCity" class="col-form-label"><strong>State</strong></label>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <label for="city" class="col-form-label">Selangor</label>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-md-3">
                                <label for="labelZipcode" class="col-form-label"><strong>Zipcode</strong></label>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <label for="zipcode" class="col-form-label">10101</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer container-fluid mt-auto pt-3" style="background-color: #006600; color: whitesmoke;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <h3>NyumNyum Grocery Store</h4>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-reset text-decoration-none footer-link">Services</a></li>
                        <li><a href="#" class="text-reset text-decoration-none">Portfolio</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-reset text-decoration-none footer-link">Career with Us</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Policies</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-reset text-decoration-none footer-link">Refund Policy</a></li>
                        <li><a href="#" class="text-reset text-decoration-none footer-link">Privacy Policy</a></li>
                        <li><a href="#" class="text-reset text-decoration-none footer-link">Shipping Policy</a></li>
                        <li><a href="#" class="text-reset text-decoration-none footer-link">Terms of Policies</a></li>
                    </ul>
                </div>
                <hr>
                <div class="container text-center font-italic text-muted">
                    <p>&copy; 2021 NyumNyum Yummy Menjilat Jari</p>
                </div>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <script src="../nyumscript.js"></script>
</body>

</html>