<?php 
    include('header.php');
    include('database.php'); 
    include('scripts.php');
    include('sidebar.php'); 
    include('navbar.php');
    if(!isset($_SESSION["user_name"]) || !isset($_SESSION['id'])){
		header("location: login.php");
		exit;
	}
?>

    <!--Main layout-->
    <main>
        <div class="container pt-4">
            <div class="d-flex justify-content-between mb-5 mt-5">
                <div class="input-group w-50 ms-5">
                    <form action="scripts.php" method="post">
                        <div class="form-outline">
                            <input id="search-input" type="search" name="search" id="form1" class="form-control" />
                            <label class="form-label" for="form1">Search</label>
                        </div>
                    </form>
                </div>
                <button id="btnAddInstruments" class="btn btn-primary" onclick='ButtonAdd()' type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal"><i class="fas fa-cart-plus"></i></button>
            </div>
            <!-- session -->
            <div class="d-flex justify-content-center">
                <?php if(isset($_SESSION['message'])):  ?>
                    <div class="alert alert-success alert-dismissible fade show w-50">
                        <strong>successfully!</strong>
                        <?php 
                            echo $_SESSION['message']; 
                            unset($_SESSION['message']);
                        ?>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert"></button>
                    </div>
                <?php endif ?>
            </div>
            <section>
                <div class="table-responsive col-lg-12">
                    <table class="table align-middle mb-0 bg-white mb-5">
                        <thead class="bg-primary text-light">
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
                    <h5 class="modal-title" id="TitleModal">Add Instruments</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="scripts.php" method="POST" enctype="multipart/form-data" id="form" data-parsley-validate>
                        <div class="mb-4">
                            <input type="file" class="form-control" name="image" id="imagemodel" />
                        </div>
                        <div class="mb-4">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="titlemodel" required />
                        </div>
                        <div class="mb-4">
                            <label for="Quantite" class="form-label">Quantite</label>
                            <input type="number" class="form-control" name="quantite" id="Quantitemodel" required />
                        </div>
                        <div class="mb-4">
                            <label for="Prix" class="form-label">Prix</label>
                            <input type="number" step="0.10" class="form-control" id="Prixmodel" name="prix" required />
                        </div>
                            <input type="hidden" id="idmodel" name="id" value="">
                        <div class="mb-4">
                            <select  name="types" id="typemodel" class="form-select" aria-label="Filter select" required>
                                <option selected>Types</option>
                                <?php category();?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <div class="btn btn-secondary" data-mdb-dismiss="modal">Close</div>
                            <button type="submit" id="editInst" class="btn btn-warning" name="edit">Edit</button>
                            <button type="submit" id="saveInstrument" class="btn btn-primary" name="save">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->


    <!-- view -->
    <div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Instrument</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-outline mb-4 d-flex justify-content-center">
                        <img src="" alt="" id="viewImage" style="width: 200px; border: 1px solid gray" class="rounded"/>
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
<?php 
include('footer.php')
?>