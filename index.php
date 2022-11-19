<?php 
    include('header.php');
    include('database.php');
    include('scripts.php');
	if(!isset($_SESSION["user_name"]) && !isset($_SESSION['id'])){
		header("location: login.php");
		exit;
	}
    
    include('navbar.php');
    include('sidebar.php'); 
?>
    <!--Main layout-->
    <main>
        <div class="container pt-4">
            <!--Section: Minimal statistics cards-->
            <section>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card bg-primary">
                    <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                        <div class="align-self-center">
                        <i class="fas fa-chart-line text-success fa-3x"></i>
                        </div>
                        <div class="text-end">
                        <h3 class="text-white"><?php CountsInstruments();?></h3>
                        <p class="mb-0 text-white">Total Instruments</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card bg-primary">
                    <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                        <div class="align-self-center">
                        <i class="fas fa-map-marker-alt text-danger fa-3x"></i>
                        </div>
                        <div class="text-end">
                        <h3 class="text-white"><?php nbrTypes()?></h3>
                        <p class="mb-0 text-white">Total Types</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card bg-primary">
                    <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                        <div>
                        <h3 class="text-white"><?php Counts()?></h3>
                        <p class="mb-0 text-white">Total Users</p>
                        </div>
                        <div class="align-self-center">
                        <i class="far fa-user text-success fa-3x"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card bg-primary">
                    <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                        <div>
                        <h3 class="text-white"><?php TotalPrix()?>DH</h3>
                        <p class="mb-0 text-white">Total Prix</p>
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
                    <?php users();?>
                </div>
            </section>
        </div>
    </main>
    <!--Main layout-->
<?php 
include('footer.php')
?>