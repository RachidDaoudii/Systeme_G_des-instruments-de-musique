<?php 
    include('database.php'); 
    
    global $connection;
    $email = $_POST["email"];
    $sql="SELECT email from admins where email ='$email'";
    $checkEmail = mysqli_query($connection,$sql);
    if(mysqli_num_rows($checkEmail) == 1){
        echo'<span class="text-danger">This Email is not Available. </span>';
    }else{
        echo'<span class="text-success">This Email is Available. </span>';
    }