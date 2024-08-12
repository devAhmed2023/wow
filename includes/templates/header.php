<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOW DESIGN</title>
    <link rel="stylesheet" href="<?= $css; ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?= $css; ?>all.min.css">
    <link rel="stylesheet" href="<?= $css; ?>main-style.css">
</head>
<body>
    <!-- Top Bar -->
    <div id="top" style="background-color: #7499f1;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offer">
                    <a href="#" class="btn btn-primary btn-sm text-white">
                        Welcome Guest
                    </a>
                    <a href="#">Shopping cart total price EGP 0, Total items 0</a>
                </div>

                <div class="col-md-6">
                    <ul class="menu">
                        <li>
                            <a href="#">
                                <i class="fas fa-sign-in"></i> Login
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-bag-shopping"></i> Goto Cart
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-user"></i> My Account
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-sign-out"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">WowDesign</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Web Services</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item">Design</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Devlopment</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Graphic Design</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Host Services</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item">Hosting</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Resller</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Large Company</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Domain Services</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item">New Domain</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Transfer Domain</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-sign-in"></i> Login
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-shopping-cart"></i> Cart <span class="badge bg-info">0</span>
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>


