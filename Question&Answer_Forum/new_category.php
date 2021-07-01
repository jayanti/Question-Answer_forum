<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome to Discussion forum</title>
</head>

<body>

    <?php include 'partials/dbconnect.php';?>
    <?php include 'partials/_header.php' ; ?>
<!--     
    <?php 
    $id= $_GET['catid'];
    $sql ="SELECT * FROM `category` WHERE category_id= $id ";
    $result=mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){

        $catname = $row['category_name'];
        $catdesc = $row['description'];
     }
        
    ?> -->
    <?php 
    $showAlert=false;
    $method = $_SERVER['REQUEST_METHOD'];
    // echo $method;
    if($method== 'POST'){
        // insert into db
        $category_name=$_POST['add_category'];
        $description=$_POST['add_desc'];

       $sql=" INSERT INTO `category` (`category_name`, `description`, `date`) 
       VALUES ('$category_name', '$description', current_timestamp());";
         $result=mysqli_query($conn, $sql);
         $showAlert =true;
         if ($showAlert){
             echo '
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Success! </strong>  Your question has been added! Please wait while someone respond.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                
             ';

         }
    }

    ?>

    
    <!-- Add new category form started here-->

    <?php
     if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true ){
        echo '
    <div class="container my-4 xy-2">
         
            <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Add Category </label>
                        <input type="text" class="form-control" id="add_category" name = "add_category" 
                        aria-describedby="emailHelp" required>
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Discription</label>
                        <textarea class="form-control" id="desc" name = "add_desc" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            
            </div>';
     }

     else{
        echo '<div class="container my-4">
        <center>
                <h1 class="py-2">You are not logged in ...</h1>
                     <p class="lead">  please login to Add New Categories.</p></center>
            </div>
        ';

    }
            ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>