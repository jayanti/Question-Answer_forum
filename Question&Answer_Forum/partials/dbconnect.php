<!--  

$conn= new mysqli_connect('localhost','root','','question_answer_db')
or die("Could not connect to mysql".mysqli_error($con)); -->

<?php
// Script to connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "question_answer_db";

$conn = mysqli_connect($servername, $username, $password, $database);

?>