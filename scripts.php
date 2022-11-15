<?php include('database.php'); 
session_start();

if(isset($_POST['signup']))            Signup();
if(isset($_POST['register']))          register();
if(isset($_POST['updateProfil']))      profil();


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
        $email = $_POST['registerEmail'];
        $password = $_POST['registerPassword'];
        // $md5password = md5($password);
        $sql ="INSERT INTO `admins`(`nom`, `prenom`, `image`, `dateNaissance`, `ville`, `email`, `password`, `id_instrument`) 
        VALUES ('$nom','$prenom',NULL,NULL,NULL,'$email','$password',NULL)";
        $res = mysqli_query($connection,$sql);
        $_SESSION['erreur'] = "Erreur";
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
                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="rounded-circle" height="150"/>
                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo $element['email']; ?></p>
                    <p class="card-text"><?php echo $element['ville']; ?></p>
                </div>
                <div class="card-footer text-muted"><i class="fas fa-laptop text-danger"></i>Connected</div>
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






































?>