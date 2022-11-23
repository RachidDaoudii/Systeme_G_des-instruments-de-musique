<?php 
    //start session
    session_start();
    
    //INCLUDE DATABASE FILE
    include('database.php');

    //routing
    if(isset($_POST['signup']))            Signup();
    if(isset($_POST['register']))          register();
    if(isset($_POST['updateProfil']))      profil();
    if(isset($_POST['save']))              AddInstruments();
    if(isset($_GET['id']))                 DeleteInstruments();
    if(isset($_POST['edit']))              EditInstruments();
    if(isset($_POST['savecategoty']))      AddCategoty();
    if(isset($_GET['idcategory']))         deleteCategoty();

    //function validation input 
function Validation($input){
    //Supprime les espaces debut et fin 
    $input = trim($input);
    //Supprimer quote string (\n \t \)
    $input = stripcslashes($input);
    //Convertit les balise html en string
    $input = htmlspecialchars($input);
    //Supprime les espaces center
    $input = preg_replace('/\s+/',' ', $input);
    return $input;
}

    //function signup user
function Signup(){    
    global $connection;
    $email = mysqli_real_escape_string($connection,$_POST['loginEmail']);
    $password = mysqli_real_escape_string($connection,$_POST['loginPassword']);
    if(empty($email) || empty($password)){
        $_SESSION['erreur'] = "All is required !!!";
        header("Location: login.php");
    }else{
        $sql ="SELECT * from admins where email = '$email' and password = '$password'";
        $res = mysqli_query($connection,$sql);
        if (mysqli_num_rows($res) === 1) {
            $row = mysqli_fetch_assoc($res);
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['user_name'] = $row['nom'].' '.$row['prenom'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['image'] = $row['image'];
                $_SESSION['online'] = 'on';
                header("Location: index.php");
            }
            else{
                $_SESSION['erreur'] = "email and password does not exist in the database";
                header("Location: login.php");
            }
        }else{
            $_SESSION['erreur'] = "user does not exist in the database";
            header("Location: login.php");
        }
    }
}
    //function register user
function register(){
    global $connection;
    if( empty($_FILES["image"]["name"]) || empty($_POST['registerFirstName']) || empty($_POST['registerLastName']) || empty($_POST['registerDate']) || empty($_POST['registerCity']) || empty($_POST['registerEmail']) || empty($_POST['registerPassword']) ){
        $_SESSION['erreur'] = "All is required !!!";
        header('location: login.php');
    }
    else{
        $nom = Validation($_POST['registerFirstName']);
        $prenom = Validation($_POST['registerLastName']);
            //uniqid pathinfo  +
        $image = uniqid($_FILES["image"]["name"]);
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "./assets/user/" . $image;

        $date = $_POST['registerDate'];
        $city = Validation($_POST['registerCity']);
        $email = Validation($_POST['registerEmail']);
        $password = Validation($_POST['registerPassword']);
        // $md5password = md5($password);
        $sql="SELECT email from admins where email ='$email'";
        $checkEmail = mysqli_query($connection,$sql);
        if(mysqli_num_rows($checkEmail) == 1){
            $_SESSION['erreur']='Email exist in the database';
            header("Location: login.php");
        }else{
            $sql ="INSERT INTO `admins`(`nom`, `prenom`, `image`, `dateNaissance`, `ville`, `email`, `password`) 
            VALUES ('$nom','$prenom','$image','$date','$city','$email','$password')";
            mysqli_query($connection,$sql);
            // Now let's move the uploaded image into the folder: image
            move_uploaded_file($tempname, $folder);
            $_SESSION['message'] = "Register has been added successfully";
            header("Location: login.php");
        } 
    }
}
    //function afficher 4 user dans la base de donner
function users(){
    global $connection;
    $sql ="SELECT * from `admins` limit 4";
    $res =mysqli_query($connection,$sql);
    while ($element = mysqli_fetch_assoc($res)){
        ?>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card text-center">
                <div class="card-header"><?php echo $element['nom']." ".$element['prenom']; ?></div>
                <div class="user-image">
                    <img src="./assets/user/<?php echo $element['image']; ?>" class="rounded-circle imgUser">
                </div>
                <div class="card-body">
                    <p class="text-center"><?php echo $element['email']; ?></p>
                    <p class="card-center"><i class="fas fa-map-pin text-danger"></i><?php echo $element['ville']; ?></p>
                </div>
                <?php
                if($element['id'] == $_SESSION['id']){?>
                    <div class="card-footer text-center"><i class="fas fa-laptop text-success"></i>Connected</div>
                <?php
                }else{?>
                    <div class="card-footer text-center"><i class="fas fa-laptop text-danger"></i>Connected</div>
                <?php
                }
                ?>
            </div>
        </div>
        <?php
    }
}
    //function modifier les information de profil 
function profil(){
    global $connection;
    $id = $_POST['id'];
    $nom = Validation($_POST['upFirstName']);
    $prenom = Validation($_POST['upLastName']);
    $date = $_POST['upDate'];
    $ville = Validation($_POST['upCity']);
    $password = Validation($_POST['upPassword']);
    $image = $_FILES["upImg"]["name"];
    if(empty($_FILES["upImg"]["name"])){
        if($password == $_POST['upRepeatPassword']){
            $sql ="UPDATE `admins` SET `nom`='$nom',`prenom`='$prenom',`dateNaissance`='$date',`ville`='$ville',`password`='$password'
            WHERE `id` = '$id'";
            mysqli_query($connection,$sql);
            $_SESSION['message'] = "information user has been update successfully";
            header("Location: profil.php");
        }else{
            $_SESSION['erreur'] = "Repeat Password";
            header("Location: profil.php");
        }
    }else{
        if($password == $_POST['upRepeatPassword']){
            $img="SELECT image from admins where id = '$id'";
            $sul=mysqli_query($connection,$img);
            $resul=mysqli_fetch_assoc($sul);
            $image=$resul['image'];
            $path="./assets/user/".$image;
            unlink($path);
            
            $image = uniqid($_FILES["upImg"]["name"]);
            $tempname = $_FILES["upImg"]["tmp_name"];
            $folder = "./assets/user/" . $image;

            move_uploaded_file($tempname, $folder);
            $sql="UPDATE `admins` SET `image`='$image',`nom`='$nom',`prenom`='$prenom',`dateNaissance`='$date',`ville`='$ville',`password`='$password' WHERE id=$id";
            mysqli_query($connection,$sql);
            $_SESSION['message'] = "image user has been update successfully";        
            header("Location: profil.php");
        }else{
            $_SESSION['erreur'] = "Repeat Password";
            header("Location: profil.php");
        }
        
    }
}
    //function return count nombre de user
function Counts(){
    global $connection;
    $sql="SELECT count(id) FROM admins";
    $res = mysqli_query($connection,$sql);
    $nbr= mysqli_fetch_array($res);
    echo $nbr[0];
}

    //function return total prix des instruments par user
function TotalPrix(){
    global $connection;
    $id = $_SESSION['id'];
    $sql="SELECT ROUND(sum(prix*quantite),1) FROM instruments where id_admin='$id'";
    $res = mysqli_query($connection,$sql);
    $nbr= mysqli_fetch_array($res);
    echo $nbr[0];
}

    //function return count category des instrument
function nbrTypes(){
    global $connection;
    $sql="SELECT count(title) FROM types";
    $res = mysqli_query($connection,$sql);
    $nbr= mysqli_fetch_array($res);
    echo $nbr[0];
}

    //function return count des instrument par user
function CountsInstruments(){
    global $connection;
    $id = $_SESSION['id'];
    $sql="SELECT count(id) FROM instruments where id_admin='$id'";
    $res = mysqli_query($connection,$sql);
    $nbr= mysqli_fetch_array($res);
    echo $nbr[0];
}

    //function afficher category dans form type select
function category(){
    global $connection;
    $sql="SELECT * from types";
    $res=mysqli_query($connection,$sql);
    while($type = mysqli_fetch_assoc($res)){?>
        <option value="<?php echo $type['id']?>"><?php echo $type['title']?></option>
    <?php
    }
}

    //function ajouter instrument
function AddInstruments(){
    global $connection;
    $image = uniqid();//name image
    $tempname = $_FILES["image"]["name"];
    $fileType= pathinfo($tempname, PATHINFO_EXTENSION);//png
    $basename = $image . "." .$fileType; //name.png
    $folder = "./assets/img/" . $basename;

    $title = Validation($_POST['title']);
    $quantite = Validation($_POST['quantite']);
    $prix = Validation($_POST['prix']);
    $types = $_POST['types'];
    $id = $_SESSION['id'];
    $sql="INSERT INTO `instruments`(`image`, `title`, `quantite`, `prix`, `id_type`,`id_admin`) VALUES ('$basename','$title','$quantite','$prix','$types','$id')";
    mysqli_query($connection,$sql);
    // Now let's move the uploaded image into the folder: image
    move_uploaded_file($_FILES["image"]["tmp_name"], $folder);
    $_SESSION['message'] = "Instrument has been added successfully";
    header("Location: instruments.php");
}

    //function afficher instrument
function DisplayInstruments(){
    global $connection;
    $nbr=1;
    $id = $_SESSION['id'];
    $sql ="SELECT ins.* ,ty.title as nameType ,ty.id as idType  FROM instruments as ins INNER JOIN types as ty ON ins.id_type = ty.id where ins.id_admin = '$id' Order by ins.id asc";
    $res = mysqli_query($connection,$sql);
    while($element = mysqli_fetch_assoc($res)){?>
        <tr id="<?php echo $element['id'];?>">
            <td img="<?php echo $element['image']; ?>">
                <?php echo $nbr;?>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <img class="imgInst" src="./assets/img/<?php echo $element['image']; ?>" class="rounded-circle">
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1" data="<?php echo $element['title'];?>" id="title"><?php echo $element['title'];?></p>
            </td>
            <td>
                <span class="badge badge-success rounded-pill d-inline" dataNameTypes="<?php echo $element['nameType'];?>" data="<?php echo $element['idType'];?>"><?php echo $element['nameType'];?></span>
            </td>
            <td>
                <span data="<?php echo $element['quantite'];?>"><?php echo $element['quantite'];?></span>
            </td>
            <td>
                <span data="<?php echo $element['prix'];?>"><?php echo $element['prix'];?></span>
            </td>
            <td>
                <button type="button" class="btn btn-link btn-sm btn-rounded" data-mdb-toggle="modal" data-mdb-target="#exampleModal" onclick="returnInfo(<?php echo $element['id'];?>);ButtonUpdate()"><i class="far fa-edit"></i></button>
                <button type="button" class="btn btn-link btn-sm btn-rounded" name="delete" onclick="location.href='scripts.php?id=<?php echo $element['id']?>'"><i class="fas fa-trash"></i></button>
                <button type="button" class="btn btn-link btn-sm btn-rounded" data-mdb-toggle="modal" data-mdb-target="#view" onclick="returnInfo(<?php echo $element['id'];?>)"><i class="far fa-eye"></i></button>
            </td>
        </tr>
    <?php
    $nbr++;
    }
}

    //function supprimer instrument
function DeleteInstruments(){
    if(!isset($_SESSION["user_name"]) || !isset($_SESSION['id'])){
		header("location: login.php");
		exit;
	}else{
        global $connection;
        $id = $_GET['id'];
        $img="SELECT image from instruments where id = $id";
        $sul=mysqli_query($connection,$img);
        $resul=mysqli_fetch_assoc($sul);
        $image=$resul['image'];
        $path="./assets/img/".$image;
        if(unlink($path)){
            //select path+unlink 
            $sql="DELETE FROM `instruments` WHERE id=$id";
            mysqli_query($connection,$sql);
            $_SESSION['message'] = "Instrument has been delete successfully";
            header("Location: instruments.php");
        }else{
            $_SESSION['error'] = "Instrument not update !!!";
            header("Location: instruments.php");
        }
    }
}

    //function modifier instrument
function EditInstruments(){
    global $connection;
    $id = $_POST['id'];
    $image = $_FILES["image"]["name"];
    $title = Validation($_POST['title']);
    $quantite = Validation($_POST['quantite']);
    $prix = Validation($_POST['prix']);
    $types = $_POST['types'];
    if(empty($image)){
        $sql="UPDATE `instruments` SET `title`='$title',`quantite`='$quantite',`prix`='$prix',`id_type`='$types' WHERE id=$id";
        mysqli_query($connection,$sql);
        $_SESSION['message'] = "Instrument has been update successfully";
        header("Location: instruments.php");
    }else{
        $img="SELECT image from instruments where id = $id";
        $sul=mysqli_query($connection,$img);
        $resul=mysqli_fetch_assoc($sul);
        $image=$resul['image'];
        $path="./assets/img/".$image;
        unlink($path);
        
        $image = uniqid($_FILES["image"]["name"]);
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "./assets/img/" . $image;

        move_uploaded_file($tempname, $folder);

        $sql="UPDATE `instruments` SET `image`='$image' WHERE id=$id";
        mysqli_query($connection,$sql);
        $_SESSION['message'] = "Instrument has been update successfully";
        header("Location: instruments.php");
    }       
}

    //function return les information de user 
function infoUser($id){
    global $connection;
    $sql="SELECT * FROM admins where id =$id";
    $res = mysqli_query($connection,$sql);
    $element= mysqli_fetch_assoc($res);
    return $element;
}

    //function afficher category
function categoty(){
    global $connection;
    $nbr=1;
    $sql="SELECT * FROM types";
    $res = mysqli_query($connection,$sql);
    while($element= mysqli_fetch_assoc($res)){?>
        <tr>
            <td>
                <?php echo $nbr;?>
            </td>
            <td>
                <p class="fw-normal mb-1"><?php echo $element['title']?></p>
            </td>
            <td>
                <button type="button" class="btn btn-link btn-sm btn-rounded" name="deletecategoty" onclick="location.href='scripts.php?idcategory=<?php echo $element['id']?>'" ><i class="fas fa-trash"></i></button>
            </td>
        </tr>
    <?php
    $nbr++;
    }  
}

    //function ajouter category
function  AddCategoty(){
    global $connection;
    $titleCategory=$_POST['titleCategory'];
    $sql="INSERT INTO `types`(`title`) VALUES ('$titleCategory')";
    mysqli_query($connection,$sql);
    $_SESSION['message'] = "Category has been added successfully";
    header("Location: category.php");
}

    //function supprimer category
function  deleteCategoty(){
    if(!isset($_SESSION["user_name"]) || !isset($_SESSION['id'])){
		header("location: login.php");
		exit;
	}
    else{
        global $connection;
        $id=$_GET['idcategory'];
        $sql="DELETE FROM `types` WHERE id='$id'";
        mysqli_query($connection,$sql);
        $_SESSION['message'] = " Delete Category has been successfully";
        header("Location: category.php");
    }
}






























?>