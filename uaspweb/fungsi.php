<?php

session_start();

//membuat koneksi ke data base
$conn = mysqli_connect("localhost","root","","web");


//contact me
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
   

    $addtotable = mysqli_query($conn,"insert into web (name, email ) values ('$name','$email')");
    if($addtotable){
         header('locatioan:index.php');
    }else{
        echo 'Gagal';
        header('location:index.php');
    }
};
  


?>



