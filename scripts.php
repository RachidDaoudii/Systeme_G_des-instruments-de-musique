<?php include('database.php'); 
session_start();

if(isset($_POST['signup']))            Signup();
if(isset($_POST['register']))          register();
if(isset($_POST['updateProfil']))      profil();
if(isset($_POST['save']))              AddInstruments();
if(isset($_GET['id']))                 DeleteInstruments();
if(isset($_POST['edit']))              EditInstruments();


function Validation($input){
    //Supprime les espaces debut et fin 
    $input = trim($input);
    //Supprimer quote string (\n \t \)
    $input = stripcslashes($input);
    //Convertit les balise html en string
    $input = htmlspecialchars($input);
    //Supprime les espaces center 
    $input = preg_replace('/\s+/', ' ', $input);
    return $input;
}

function Signup(){    
    global $connection;
    $email = mysqli_real_escape_string($connection,$_POST['loginEmail']);
    $password = mysqli_real_escape_string($connection,$_POST['loginPassword']);
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
    }else{
        $_SESSION['erreur'] = "Admin n'est existe pas de la base donner";
        header("Location: login.php");
    }

}

function register(){
    global $connection;
    // if(empty($_POST['registerFirstName']) || empty($_POST['registerLastName']) || empty($_POST['registerEmail']) || empty($_POST['registerPassword']) ){
    //     $_SESSION['erreur'] = "Erreur!!!!";
    //     header('location: login.php');
    // }else{
        $nom = $_POST['registerFirstName'];
        $prenom = $_POST['registerLastName'];
            //uniqid pathinfo  +
        $image = uniqid($_FILES["image"]["name"]);
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "./assets/user/" . $image;

        $date = $_POST['registerDate'];
        $city = $_POST['registerCity'];
        $email = $_POST['registerEmail'];
        $password = $_POST['registerPassword'];
        // $md5password = md5($password);
        $sql ="INSERT INTO `admins`(`nom`, `prenom`, `image`, `dateNaissance`, `ville`, `email`, `password`) 
        VALUES ('$nom','$prenom','$image','$date','$city','$email','$password')";
        mysqli_query($connection,$sql);
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }
        header("Location: login.php");
    // }
}

function users(){
    global $connection;
    $sql ="SELECT * from `admins` limit 4";
    $res =mysqli_query($connection,$sql);
    while ($element = mysqli_fetch_assoc($res)){?>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card text-center">
                <div class="card-header"><?php echo $element['nom']; ?></div>
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="./assets/user/<?php echo $element['image']; ?>" style="width: 150px;" class="rounded-circle">
                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo $element['email']; ?></p>
                    <p class="card-text"><?php echo $element['ville']; ?></p>
                </div>
                <div class="card-footer text-muted"><i class="fas fa-laptop on"></i>Connected</div>
            </div>
        </div>
    <?php
    }
}

function profil(){
    global $connection;
    $id = $_POST['id'];
    $nom = $_POST['upFirstName'];
    $prenom = $_POST['upLastName'];
    $date = $_POST['upDate'];
    $ville = $_POST['upCity'];
    $password = $_POST['upPassword'];
    $sql ="UPDATE `admins` SET `nom`='$nom',`prenom`='$prenom',`image`=''
    ,`dateNaissance`='$date',`ville`='$ville',`password`='$password'
    WHERE `id` = '$id'";
    $res=mysqli_query($connection,$sql);
    $_SESSION['user_name'] = $nom.' '.$prenom;
    header("location: index.php");
}

function Counts(){
    global $connection;
    $sql="SELECT count(id) FROM admins";
    $res = mysqli_query($connection,$sql);
    $nbr= mysqli_fetch_array($res);
    echo $nbr[0];
}

function CountsInstruments(){
    global $connection;
    $sql="SELECT count(id) FROM instruments";
    $res = mysqli_query($connection,$sql);
    $nbr= mysqli_fetch_array($res);
    echo $nbr[0];
}

function category(){
    global $connection;
    $sql="SELECT * from types";
    $res=mysqli_query($connection,$sql);
    while($type = mysqli_fetch_assoc($res)){?>
        <option value="<?php echo $type['id']?>"><?php echo $type['title']?></option>
    <?php
    }
}

function AddInstruments(){
    global $connection;
    $image = uniqid();//name image
    $tempname = $_FILES["image"]["name"];
    $fileType= pathinfo($tempname, PATHINFO_EXTENSION);//png
    $basename = $image . "." .$fileType; //name.png
    $folder = "./assets/img/" . $basename;

    $title = $_POST['title'];
    $quantite = $_POST['quantite'];
    $prix = $_POST['prix'];
    $types = $_POST['types'];
    $sql="INSERT INTO `instruments`(`image`, `title`, `quantite`, `prix`, `id_type`) VALUES ('$basename','$title','$quantite','$prix','$types')";
    mysqli_query($connection,$sql);
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
    header("Location: instruments.php");
}

function DisplayInstruments(){
    global $connection;
    $nbr=1;
    $sql ="SELECT ins.* ,ty.title as nameType FROM instruments as ins INNER JOIN types as ty ON ins.id_type = ty.id";
    $res = mysqli_query($connection,$sql);
    while($element = mysqli_fetch_assoc($res)){?>
    
        <tr id="<?php echo $element['id'];?>">
            <td>
                <?php echo $nbr;?>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <img src="./assets/img/<?php echo $element['image']; ?>" style="width: 45px; height: 45px" class="rounded-circle">
                    <!-- <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle"/> -->
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1" data="<?php echo $element['title'];?>" id="title"><?php echo $element['title'];?></p>
            </td>
            <td>
                <span class="badge badge-success rounded-pill d-inline" data="<?php echo $element['nameType'];?>"><?php echo $element['nameType'];?></span>
            </td>
            <td>
                <span data="<?php echo $element['quantite'];?>"><?php echo $element['quantite'];?></span>
            </td>
            <td>
                <span data="<?php echo $element['prix'];?>"><?php echo $element['prix'];?></span>
            </td>
            <td>
                <button type="button" class="btn btn-link btn-sm btn-rounded" data-mdb-toggle="modal" data-mdb-target="#exampleModal" onclick="returnInfo(<?php echo $element['id'];?>)"><i class="far fa-edit"></i></button>
                <button type="button" class="btn btn-link btn-sm btn-rounded" name="delete" onclick="location.href='scripts.php?id=<?php echo $element['id']?>'"><i class="fas fa-trash"></i></button>
                <button type="button" class="btn btn-link btn-sm btn-rounded" data-mdb-toggle="modal" data-mdb-target="#view" onclick="returnInfo(<?php echo $element['id'];?>)"><i class="far fa-eye"></i></button>
            </td>
        </tr>
    <?php
    $nbr++;
    }
}


function DeleteInstruments(){
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
        $_SESSION['msg']="Delete instrument";
        header("Location: instruments.php");
        
    }else{
        $_SESSION['erreur']="";
        header("Location: instruments.php");
    }
}

function EditInstruments(){
    global $connection;
    $id = $_POST['id'];
    $image = $_FILES["image"]["name"];
    $title = $_POST['title'];
    $quantite = $_POST['quantite'];
    $prix = $_POST['prix'];
    $types = $_POST['types'];
    if(empty($image)){
        $sql="UPDATE `instruments` SET `title`='$title',`quantite`='$quantite',`prix`='$prix',`id_type`='$types' WHERE id=$id";
        mysqli_query($connection,$sql);
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

        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }

        $sql="UPDATE `instruments` SET `image`='$image' WHERE id=$id";
        mysqli_query($connection,$sql);


        
        header("Location: instruments.php");

    }
    
    
    // if (move_uploaded_file($tempname, $folder)) {
    //     echo "<h3>  Image uploaded successfully!</h3>";
    // } else {
    //     echo "<h3>  Failed to upload image!</h3>";
    // }
    // $_SESSION['msg']="Edit instrument";
    // header("Location: instruments.php");
        
}


function infoUser($id){
    global $connection;
    $sql="SELECT * FROM admins where id =$id";
    $res = mysqli_query($connection,$sql);
    $element= mysqli_fetch_assoc($res);
    return $element;
}


































?>