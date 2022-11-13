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
    <title>Musique</title>
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
                <div class="name p-1">Rachid Daoudi</div>
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

             <!--Section: Minimal statistics cards-->
                <!-- <section>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                            <i class="fas fa-chart-line text-success fa-3x"></i>
                            </div>
                            <div class="text-end">
                            <h3>64.89 %</h3>
                            <p class="mb-0">Bounce Rate</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                            <i class="fas fa-map-marker-alt text-danger fa-3x"></i>
                            </div>
                            <div class="text-end">
                            <h3>423</h3>
                            <p class="mb-0">Total Visits</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                            <h3 class="text-success">156</h3>
                            <p class="mb-0">New Clients</p>
                            </div>
                            <div class="align-self-center">
                            <i class="far fa-user text-success fa-3x"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                            <h3 class="text-warning">64.89 %</h3>
                            <p class="mb-0">Conversion Rate</p>
                            </div>
                            <div class="align-self-center">
                            <i class="fas fa-chart-pie text-warning fa-3x"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section> -->
                <!--Section: Minimal statistics cards-->
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                    <th scope="col">image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Type</th>
                    <th scope="col">Quantite</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>
                        <div class="d-flex align-items-center">
                        <img
                            src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                            alt=""
                            style="width: 45px; height: 45px"
                            class="rounded-circle"
                        />
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Title</p>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">description</p>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline">Type</span>
                    </td>
                    <td>1</td>
                    <td>10,50</td>
                    <td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Edit
                        </button>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Delete
                        </button>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                        View
                        </button>
                    </td>
                    </tr>
                </tbody>
            </table>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
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