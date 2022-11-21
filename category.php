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
            <div class="d-flex justify-content-end mb-5">
                <button id="btnAddInstruments" class="btn btn-primary" onclick="" type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal"><i class="fas fa-cart-plus"></i></button>
            </div>
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
            <div class="table-responsive col-lg-12">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-primary text-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php categoty()?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!--Main layout-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TitleModal">Add Category</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="scripts.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
                        <div class="mb-4">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="titleCategory" id="titlemodel" required />
                        </div>
                        <div class="modal-footer">
                            <div class="btn btn-secondary" data-mdb-dismiss="modal">Close</div>
                            <button type="submit" class="btn btn-primary" name="savecategoty">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <?php 
include('footer.php')
?>