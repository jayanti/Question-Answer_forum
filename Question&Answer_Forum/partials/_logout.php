<?php 
session_start();

echo 'login you out ......... please wait...';
session_destroy();
header("Location: /Q&Aforum");



?>