<?php 
    include('database.php'); 
    include('scripts.php'); 
    if(!isset($_SESSION["user_name"]) && !isset($_SESSION['id'])){
		header("location: login.php");
		exit;
	}
?>
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
            <button class="btn btn-primary" type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal"><i class="fas fa-cart-plus"></i></button>
            </div>
            <section>
                <div class="table-responsive col-lg-12">
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>
                                <th >#</th>
                                <th >image</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Quantite</th>
                                <th>Prix</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php DisplayInstruments()?>
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
                <h5 class="modal-title" id="exampleModalLabel">Add Instruments</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="scripts.php" method="POST" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                    <input type="file" class="form-control" name="image" id="imagemodel"  />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="title" id="titlemodel"  />
                        <label for="title" class="form-label">Title</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="quantite" id="Quantitemodel"  />
                        <label for="Quantite" class="form-label">Quantite</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" id="Prixmodel" name="prix"  />
                        <label for="Prix" class="form-label">Prix</label>
                    </div>
                    <div class="form-outline mb-4">
                        <select name="types" id="typemodel" class="form-control">
                            <option value="">Types</option>
                            <?php category();?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <div class="btn btn-secondary" data-mdb-dismiss="modal">Close</div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </div>
                </form>
            </div>
            
            </div>
        </div>
        </div>
    <!-- Modal -->


    <!-- Modal -->
    <div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Instrument</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-outline mb-4 d-flex justify-content-center">
                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 100px;" class="rounded-circle"/>
                </div>
                <div class="form-outline mb-4 d-flex justify-content-center">
                    <label for="title" class="form-label">Title :</label>
                    <label class="form-label" id="viewTitle"></label>
                </div>
                <div class="form-outline mb-4 d-flex justify-content-center">
                    <label for="title" class="form-label">Type :</label>
                    <label class="form-label" id="viewTypes"></label>
                </div>
                <div class="form-outline mb-4 d-flex justify-content-center">
                    <label for="title" class="form-label">Quantite :</label>
                    <label class="form-label" id="viewQuantite"></label>
                </div>
                <div class="form-outline mb-4 d-flex justify-content-center">
                    <label for="title" class="form-label">Prix :</label>
                    <label class="form-label" id="viewPrix"></label>
                </div>
            </div>
            
            </div>
        </div>
        </div>
    <!-- Modal -->





</body>
<!-- MDB -->

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
<script src="assets/js/main.js"></script>
</html>