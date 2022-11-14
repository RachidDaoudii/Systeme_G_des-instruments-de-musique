<?php include('database.php'); 
session_start();

if(isset($_POST['signup']))        Signup();
if(isset($_POST['register']))      register();


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
        VALUES ('sdf','dsfds',NULL,'1996/04/04','agadir','$email','fsdf','1')";
        $res = mysqli_query($connection,$sql);
        $_SESSION['erreur'] = "mlfsdlf:fjkjd";
        header("Location: login.php");
    // }
}





































?>