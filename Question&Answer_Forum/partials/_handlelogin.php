<?php
$showError = "false";
if($_SERVER['REQUEST_METHOD']== "POST"){

    include 'dbconnect.php';
    $user_name=$_POST['username'];
    $email = $_POST['loginemail'];
    $pass = $_POST['loginpass'];
    
    $sql ="SELECT * FROM `users` WHERE user_name='$user_name'";
    $result=mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);

    if($numRows==1){

       $row = mysqli_fetch_assoc($result);
        if(password_verify($pass,$row['user_pass'])){
            session_start();
                $_SESSION['loggedin']= true;

                $_SESSION['user_id']= $user_id;
                $_SESSION['user_name']= $user_name;
                $_SESSION['user_email']= $email;
           
                echo "logged in ". $user_name ;


       }
       header("Location: /Q&Aforum/index.php");
     

       
    }
    
    header("Location: /Q&Aforum/index.php");
}
?>