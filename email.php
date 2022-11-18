<?php include('database.php'); 


global $connection;
$email = $_POST["email"];
$sql="SELECT email from admins where email ='$email'";
$checkEmail = mysqli_query($connection,$sql);
if(mysqli_num_rows($checkEmail) == 1){
    echo'<b class="text-danger">This Email is not Available. </b>';
}else{
    echo'<b class="text-success">This Email is Available. </b>';
}