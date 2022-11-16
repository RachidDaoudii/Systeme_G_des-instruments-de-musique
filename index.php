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
                        <h3><?php CountsInstruments();?></h3>
                        <p class="mb-0">Total Instruments</p>
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
                        <!-- <p class="mb-0">Total Visits</p> -->
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
                        <h3 class="text-success"><?php Counts()?></h3>
                        <p class="mb-0">Total Users</p>
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
                        <!-- <p class="mb-0">Conversion Rate</p> -->
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
</body>
<!-- MDB -->
<script src="assets/js/main.js"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
</html>