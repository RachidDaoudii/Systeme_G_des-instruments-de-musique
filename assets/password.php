<?php
include('database.php');

global $connection;

$password =$_POST['upPassword'];
$sql="SELECT password from admins where passaword ='$password'";
$checkpassword = mysqli_query($connection,$sql);

if(mysqli_num_rows($$checkpassword) == 1){

}else{
    
}


?>