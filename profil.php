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
    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Profil</title>
</head>
<body>
    <?php include('sidebar.php'); ?>
    <?php include('navbar.php'); ?>
    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <form action="scripts.php" method="POST" class="row g-3 auto pt-3 needs-validation" novalidate>
                <div class="d-flex justify-content-center  mb-4">
                    <a href="#"><img class="rounded-circle" src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""  height="200"></a>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="btn btn-primary btn-rounded mb-4">
                        <label class="form-label text-white m-1" for="customFile1">Choose image</label>
                        <input type="file"name="upImg" accept="image/png, image/jpeg" class="form-control d-none" id="customFile1"/>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="text" class="form-control" name="upFirstName" required />
                    <label for="validationCustom01" class="form-label">first name</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="text" class="form-control" name="upLastName" required />
                    <label for="validationCustom02" class="form-label">last name</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="date" class="form-control" name="upDate" required />
                    <label for="validationCustom02" class="form-label">Date</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="text" class="form-control" name="upCity" required />
                    <label for="validationCustom02" class="form-label">City</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="email" class="form-control" name="upEmail" required disabled />
                    <label for="validationCustom02" class="form-label">Email</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="password" class="form-control" name="upPassword" required />
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
                    <button class="btn btn-primary" type="submit" name="updateProfil">Save</button>
                </div>
            </form>
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