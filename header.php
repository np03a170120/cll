<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central Law Library</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

    <header>
        <div class="header-top j-c-s ">
            <div class="header-left d-f">
                <div class="hf-clock">
                    <i class="fas fa-clock"></i>
                    <span>12:00 PM</span>
                </div>
                <div class="hf-calender">
                    <i class="fas fa-calendar-week"></i>
                    <span>30 Bhadra 2077, Sunday</span>
                </div>
            </div>
            <div class="header-right d-f">
                <div class="hr-phone">
                    <i class="fas fa-phone-square-alt"></i>
                    <span>01-4486712</span>
                </div>
                <div class="hr-email">
                    <i class="fas fa-envelope"></i>
                    <span>company@email.com</span>
                </div>
            </div>
        </div>
        <div class="header-mid">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="hm-logo">
                        <img src="./images/coat-of-arms.png" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 j-c-c">
                    <div class="hm-title">
                        <img src="./images/logo.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="hm-flag">
                        <img src="./images/flag.gif" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bot">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary-blue">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav navbar-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-home"></i> <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Library</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Publication</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>

                        <!-- ON HOVER DROPDOWN -->
                        <div class="btn-group">
                            <a id="dLabel" data-toggle="dropdown" class="dropdown-toggle j-c-c" href="">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                <li><a class="dropdown-item" href="#">level 1</a></li>
                                <li><a class="dropdown-item" href="#">level 1</a></li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" tabindex="-1" href="#">
                                        level 1
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" tabindex="-1" href="#">level 2</a></li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" href="#">
                                                level 2
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">3rd level</a></li>
                                                <li><a class="dropdown-item" href="#">3rd level</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="#">level 2</a></li>
                                        <li><a class="dropdown-item" href="#">level 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
    </header>