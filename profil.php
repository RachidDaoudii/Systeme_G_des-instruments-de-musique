<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
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
    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">
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
                ><span>dashboard</span>
            </a>
            <a
            href="#"
            class="list-group-item list-group-item-action py-2 ripple"
            >
            <i class="fas fa-chart-area fa-fw me-3"></i
                ><span>profile</span>
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
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top" >
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
                <li><a class="dropdown-item" href="#">#</a></li>
            </ul>
            </li>
            <!-- image -->
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
                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                    class="rounded-circle"
                    height="40"
                    alt=""
                    loading="lazy"
                />
                <div class="name p-2">Rachid Daoudi</div>
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
                >
                <li><a class="dropdown-item" href="#">My profile</a></li>
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
            <div class="d-flex justify-content-center  mb-4">
                <a href="#"><img class="rounded-circle" src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""  height="200"></a>
            </div>
            <div class="d-flex justify-content-center">
                <div class="btn btn-primary btn-rounded mb-4">
                    <label class="form-label text-white m-1" for="customFile1">Choose image</label>
                    <input type="file" class="form-control d-none" id="customFile1" />
                </div>
            </div>
            <form class="row g-3 auto pt-3 needs-validation" novalidate>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="text" class="form-control" id="validationCustom01" required />
                    <label for="validationCustom01" class="form-label">first name</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="text" class="form-control" id="validationCustom02" required />
                    <label for="validationCustom02" class="form-label">last name</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="date" class="form-control" id="validationCustom02" required />
                    <label for="validationCustom02" class="form-label">Date</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="text" class="form-control" id="validationCustom02" required />
                    <label for="validationCustom02" class="form-label">City</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="email" class="form-control" id="validationCustom02" required />
                    <label for="validationCustom02" class="form-label">Email</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="password" class="form-control" id="validationCustom02" required />
                    <label for="validationCustom02" type="password" class="form-label">Password</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="password" class="form-control" id="validationCustom02" required />
                    <label for="validationCustom02" type="password" class="form-label">Repeat Password</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </main>
    <!--Main layout-->
</body>
<!-- MDB -->
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict';
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation');
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach((form) => {
      form.addEventListener('submit', (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
</script>
<script src="assets/js/main.js"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
</html>