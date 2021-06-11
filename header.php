<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="./assets/img/favicon-white.png"/>
    <?php
    if ($title == 'Single Media') {
    ?>
    <link rel="stylesheet" href="./assets/glightbox/dist/css/glightbox.css" />
    <?php
    }
    ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/djc7ruy.css">
    <script src="https://kit.fontawesome.com/208eb39700.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title><?=$title;?></title>

</head>

<body>
    <!-- Header -->
    <header>
        <!-- Main Navbar -->
        <div class="row kg-p-spacing font-mulish-normal">
            <ul class="nav justify-content-end align-items-center">
                <li class="nav-item d-none d-sm-none d-lg-block">
                    <a class="nav-link text-grey font-mulish-normal skip-btn py-0" aria-current="page" href="#main-content">Skip to Main Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lang-btn rounded-pill p-2 mx-1 kg-iii-font" aria-current="page" href="#">മലയാളം</a>
                </li>
                <li class="nav-item">
                    <ul class="nav-link list-group py-0 list-group-horizontal font-size-btn font-mulish-normal">
                        <li class="list-group-item"><a id="kg-decrease-font" class="btn disabled rounded-circle mx-1" aria-current="page" href="#">A-</a></li>
                        <li class="list-group-item"><a id="kg-default-font" class="btn rounded-circle active mx-1" aria-current="page" href="#">A</a></li>
                        <li class="list-group-item"><a id="kg-increase-font" class="btn rounded-circle mx-1" aria-current="page" href="#">A+</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <form class="nav-link d-flex py-0">
                        <input type="checkbox" class="checkbox" id="chk" />
                        <label class="label chkbox-label" for="chk">
                                <i class="fas fa-sun"></i>
                                <i class="fas fa-moon"></i>                    
                                <div class="ball"></div>
                            </label>
                    </form>
                </li>
            </ul>
        </div>

        <div class="row kg-p-spacing main-nav">
            <nav class="navbar navbar-expand-lg font-poppins-normal main-nav-menu p-0 pt-1">
                <div class="container-fluid p-0">
                    <a class="main-title navbar-brand me-auto me-lg-0" href="./">
                        <img src="./assets/svg/new-logo.svg" alt="Government of Kerala" class="light-img img-fluid">
                        <img src="./assets/svg/new-logo-dark.svg" alt="Government of Kerala" class="dark-img img-fluid d-none">
                    </a>
                    <a href="#" class="kg_search_btn search_icon d-lg-none"><i class="fa fa-search"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#kg-main-nav" aria-controls="kg-main-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><img src="./assets/svg/nav-toggle.svg" alt="navbar toggle"/></span>
                        </button>
                    <div class="collapse navbar-collapse text-right kg-iii-font" id="kg-main-nav">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle py-2 px-2" href="#" id="about-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Kerala</a>
                                <div class="dropdown-menu kg-ii-font" aria-labelledby="about-dropdown">
                                    <div class="row align-items-start">
                                        <div class="col-sm-6 col-md-3">
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="#">State</a></li>
                                                <li><a class="dropdown-item" href="#">District</a></li>
                                                <li><a class="dropdown-item" href="#">History</a></li>
                                                <li><a class="dropdown-item" href="#">Economy</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="#">Elections</a></li>
                                                <li><a class="dropdown-item" href="#">Judiciary</a></li>
                                                <li><a class="dropdown-item" href="#">Census 2011</a></li>
                                                <li><a class="dropdown-item" href="#">Literature</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="#">Tourism</a></li>
                                                <li><a class="dropdown-item" href="#">Festivals</a></li>
                                                <li><a class="dropdown-item" href="#">Lifestyle</a></li>
                                                <li><a class="dropdown-item" href="#">Recreation</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2 px-2" href="#">Government</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2 px-2" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2 px-2" href="#">Flagship Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2 px-2" href="#">Documents</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2 px-2" href="./media.php">Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2 px-2" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item d-none d-lg-block">
                                <a href="#" class="kg_search_btn search_icon"><i class="fa fa-search"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Main Navbar End-->
    </header>
    <!-- Header End -->

    <!-- Search Bar -->
    <div class="container font-poppins-normal kg-v-font search-form">
        <form class="d-flex justify-content-center my-4">
            <div class="search"> <input class="search_input" type="text" placeholder="Search"> <a href="#" class="search_icon"><i class="fa fa-search"></i></a> </div>
        </form>
    </div>
    <!-- Search Bar End-->