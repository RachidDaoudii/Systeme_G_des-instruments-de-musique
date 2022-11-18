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
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!-- session -->
            <div class="d-flex justify-content-center">
                <?php if(isset($_SESSION['message'])):  ?>
                    <div class="alert alert-success alert-dismissible fade show w-50">
                        <strong>successfully!</strong>
                        <?php 
                            echo $_SESSION['message']; 
                            unset($_SESSION['message']);
                        ?>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert"></span>
                    </div>
                <?php endif ?>
            </div>
            <?php 
            $id = $_SESSION['id'];
            $user = infoUser($id)
            ?>
            <form action="scripts.php" method="POST" enctype="multipart/form-data" class="row g-3 auto pt-3 needs-validation" novalidate>
                <div class="d-flex justify-content-center  mb-4">
                    <a href="#"><img class="rounded-circle" src="./assets/user/<?php echo $user['image']?>" alt=""  height="200"></a>
                </div>
                <div class="d-flex justify-content-center">
                <div class="form-outline mb-4">
                    <input type="file" class="form-control form-control-sm" name="upImg" id="imageuser"  />
                    </div>
                    <!-- <div class="btn btn-primary btn-rounded mb-4">
                        <label class="form-label text-white m-1" for="customFile1">Choose image</label>
                        <input type="file" name="upImg" class="form-control d-none" id="customFile1"/>
                    </div> -->
                </div>
                <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="text" class="form-control" name="upFirstName" required value="<?php echo $user['nom']?>" />
                    <label for="validationCustom01" class="form-label">first name</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="text" class="form-control" name="upLastName" required value="<?php echo $user['prenom']?>" />
                    <label for="validationCustom02" class="form-label">last name</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="date" class="form-control" name="upDate" required  value="<?php echo $user['dateNaissance']?>"/>
                    <label for="validationCustom02" class="form-label">Date</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="text" class="form-control" name="upCity" required value="<?php echo $user['ville']?>"/>
                    <label for="validationCustom02" class="form-label">City</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="email" class="form-control" name="upEmail" required disabled value="<?php echo $user['email']?>"/>
                    <label for="validationCustom02" class="form-label">Email</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="password" class="form-control" name="upPassword" required value="<?php echo $user['password']?>"/>
                    <label for="validationCustom02" type="password" class="form-label">Password</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="password" class="form-control" id="validationCustom02" />
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
<?php 
include('footer.php')
?>