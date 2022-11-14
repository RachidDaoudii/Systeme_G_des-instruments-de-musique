<?php include('database.php'); ?>
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
    <link rel="stylesheet" href="assets/css/style.css">
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
                <li><a class="dropdown-item" href="#">#</a></li>
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
    <main>
        <div class="container pt-4">
            <div class="d-flex justify-content-end">
            <button class="btn btn-primary" type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Add</button>
            </div>
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
            <section>
                <div class="table-responsive col-lg-12">
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>
                                <th >image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Quantite</th>
                                <th>Prix</th>
                                <th>Actions</th>
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
                </div>
            </section>
            
        </div>
    </main>
    <!--Main layout-->
    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="" class="needs-validation" novalidate>
                    <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="image" required />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="title" id="title" required />
                        <label for="title" class="form-label">Title</label>
                    </div>
                    <!-- <div class="form-outline mb-4">
                        <select class="select">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        </select>
                    </div> -->
                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="quantite" id="Quantite" required />
                        <label for="Quantite" class="form-label">Quantite</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" id="Prix" name="prix" required />
                        <label for="Prix" class="form-label">Prix</label>
                    </div>
                    <div class="form-outline mb-4">
                        <textarea class="form-control" name="Description" id="Description" cols="10" rows="10" required></textarea>
                        <label for="Description" class="form-label">Description</label>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </div>
                </form>
            </div>
            
            </div>
        </div>
        </div>
    <!-- Modal -->
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