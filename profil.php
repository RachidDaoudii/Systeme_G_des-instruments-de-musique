<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
    rel="stylesheet"
    />
    <title>Profil</title>
</head>
<body>
    <!--Main Navigation-->
    <header>
    <!-- Sidebar -->
    <nav
        id="sidebarMenu"
        class="collapse d-lg-block sidebar collapse bg-white"
        >
        <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a
            href="#"
            class="list-group-item list-group-item-action py-2 ripple"
            aria-current="true"
            >
            <i class="fas fa-tachometer-alt fa-fw me-3"></i
                ><span>Main dashboard</span>
            </a>
            <a
            href="#"
            class="list-group-item list-group-item-action py-2 ripple"
            >
            <i class="fas fa-chart-area fa-fw me-3"></i
                ><span>Webiste traffic</span>
            </a>
            <a
            href="#"
            class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
            >
        </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav
        id="main-navbar"
        class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
        >
        <!-- Container wrapper -->
        <div class="container-fluid">
        <!-- Toggle button -->
        <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" height="40" alt="" loading="lazy" />
        </a>
        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto">
            <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search' style="min-width: 225px" />
            <span class="input-group-text border-0"
                ><i class="fas fa-search"></i
            ></span>
        </form>
        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row align-items-center">
            <li class="nav-item dropdown">
            <a
                class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
                >
                <i class="fas fa-bell"></i>
                <span class="badge rounded-pill badge-notification bg-danger"
                    >1</span
                >
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
                >
                <li><a class="dropdown-item" href="#">Some news</a></li>
                <li><a class="dropdown-item" href="#">Another news</a></li>
                <li>
                <a class="dropdown-item" href="#">Something else here</a>
                </li>
            </ul>
            </li>
            <!-- Avatar -->
            <li class="nav-item dropdown">
            <a
                class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
                >
                <img
                    src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                    class="rounded-circle"
                    height="40"
                    alt=""
                    loading="lazy"
                    />
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
                >
                <li><a class="dropdown-item" href="#">My profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
            </li>
        </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <div class="d-flex justify-content-center">
                <a href="#"><img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" alt=""  height="200"></a>
            </div>
            <form class="row g-3 needs-validation auto" novalidate>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="text" class="form-control" id="validationCustom01" required />
                    <label for="validationCustom01" class="form-label">First name</label>
                    <div class="valid-feedback">Looks good!</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="text" class="form-control" id="validationCustom02" required />
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <div class="valid-feedback">Looks good!</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group form-outline">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required />
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="invalid-feedback">Please choose a username.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline">
                    <input type="text" class="form-control" id="validationCustom03" required />
                    <label for="validationCustom03" class="form-label">City</label>
                    <div class="invalid-feedback">Please provide a valid city.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline">
                    <input type="text" class="form-control" id="validationCustom05" required />
                    <label for="validationCustom05" class="form-label">Zip</label>
                    <div class="invalid-feedback">Please provide a valid zip.</div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                    <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                    <div class="invalid-feedback">You must agree before submitting.</div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </main>
    <!--Main layout-->
</body>
<!-- MDB -->
<script src="assets/js/main.js"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
</html>