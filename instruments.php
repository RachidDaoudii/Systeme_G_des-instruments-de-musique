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
            <div class="d-flex justify-content-end">
            <button class="btn btn-primary" type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Add</button>
            </div>
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
<script src="assets/js/main.js"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
</html>