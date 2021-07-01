<?php
$showError = "false";
if($_SERVER['REQUEST_METHOD']== "POST"){

    include 'dbconnect.php';
    $user_name= $_POST['username'];
    $user_email = $_POST['useremail'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $age = $_POST['age'];
 

    #check whether this email exist or not ;

    $existSql= "SELECT * FROM `users` where user_name='$user_name' OR user_email ='$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);

    if($numRows>0){

        $showError= "Email is already assigned ...";
       
    }
    else{
        if($pass==$cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql ="INSERT INTO `users` ( `user_name`, `user_email`, `user_pass`, `age`,`timestamp`) 
            VALUES ('$user_name','$user_email', '$hash', '$age',  current_timestamp())";
            $result =  mysqli_query($conn, $sql);
            #echo $result;
            if ($result){
                $showAlert =true;
               header("Location: /Q&Aforum/index.php?signupsuccess=true");
                exit();
            }


        }
       
        else{
            $showError= "password do not match..."; 
           
        }
    }
   header("Location: /Q&Aforum/index.php?signupsuccess=false&error=$showError");

}



?>