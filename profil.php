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
            <!-- session erreur -->
            <?php if(isset($_SESSION['erreur'])):  ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <strong>Erreur!</strong>
                        <?php 
                            echo $_SESSION['erreur']; 
                            unset($_SESSION['erreur']);
                        ?>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert"></span>
                    </div>
                <?php endif ?>
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
                    <input type="password" class="form-control" name="upPassword" id="profilPassword" required value="<?php echo $user['password']?> " data-equalto="#profilRepeatPassword" data-parsley-trigger="keyup"/>
                    <label for="validationCustom02" type="password" class="form-label">Password</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                    <input type="password" class="form-control" id="profilRepeatPassword" name="upRepeatPassword" data-equalto="#profilPassword" required data-parsley-trigger="keyup" />
                    <label for="validationCustom02" type="password" class="form-label">Repeat Password</label>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <button class="btn btn-primary" type="submit" name="updateProfil">Save</button>
                </div>
            </form>
        </div>
    </main>
<?php 
include('footer.php')
?>