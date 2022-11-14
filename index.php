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
<?php include('sidebar.php'); ?>
<?php include('navbar.php'); ?>
    <!--Main layout-->
    <main>
        <div class="container pt-4">
             <!--Section: Minimal statistics cards-->
                <section>
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
                </section>
                <!--Section: Minimal statistics cards-->
            <section>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card text-center">
                            <div class="card-header">Nom Prenom</div>
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle" height="200"/>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Email@gmail.com</p>
                                <p class="card-text">City</p>
                            </div>
                            <div class="card-footer text-muted"><i class="fas fa-laptop text-danger"></i>Connected</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card text-center">
                            <div class="card-header">Nom Prenom</div>
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle" height="200"/>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Email@gmail.com</p>
                                <p class="card-text">City</p>
                            </div>
                            <div class="card-footer text-muted"><i class="fas fa-laptop text-danger"></i>Connected</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card text-center">
                            <div class="card-header">Nom Prenom</div>
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle" height="200"/>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Email@gmail.com</p>
                                <p class="card-text">City</p>
                            </div>
                            <div class="card-footer text-muted"><i class="fas fa-laptop text-danger"></i>Connected</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card text-center">
                            <div class="card-header">Nom Prenom</div>
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle" height="200"/>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Email@gmail.com</p>
                                <p class="card-text">City</p>
                            </div>
                            <div class="card-footer text-muted"><i class="fas fa-laptop text-danger"></i>Connected</div>
                        </div>
                    </div>
                    <!-- <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Position</th>
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
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">John Doe</p>
                                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Software engineer</p>
                                <p class="text-muted mb-0">IT department</p>
                            </td>
                            <td>
                                <span class="badge badge-success rounded-pill d-inline">Active</span>
                            </td>
                            <td>Senior</td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                                View
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Alex Ray</p>
                                    <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Consultant</p>
                                <p class="text-muted mb-0">Finance</p>
                            </td>
                            <td>
                                <span class="badge badge-primary rounded-pill d-inline"
                                    >Onboarding</span
                                >
                            </td>
                            <td>Junior</td>
                            <td>
                                <button
                                        type="button"
                                        class="btn btn-link btn-rounded btn-sm fw-bold"
                                        data-mdb-ripple-color="dark"
                                        >
                                View
                                </button>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Kate Hunington</p>
                                    <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Designer</p>
                                <p class="text-muted mb-0">UI/UX</p>
                            </td>
                            <td>
                                <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                            </td>
                            <td>Senior</td>
                            <td>
                                <button
                                        type="button"
                                        class="btn btn-link btn-rounded btn-sm fw-bold"
                                        data-mdb-ripple-color="dark"
                                        >
                                View
                                </button>
                            </td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
            </section>
            
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