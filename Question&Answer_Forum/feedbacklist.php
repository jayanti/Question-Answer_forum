
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }
    table thead  th {
	background-color: #54585d;
	color: "yellow";
	font-weight: bold;
	font-size: 16px;
	border: 5px solid #54585d;
}



</style>

<body>

<div class="table-scrol">
    <h1 align="center">Feedback of  Users</h1>
    <div align="right">Want to Leave the Page? <br><a href="adminlogout.php">Logout</a></div>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed" width=100%>
        <thead>

        <tr>

            <th>Name</th>
            <th>Email id</th>
            <th>Contact No</th>
            <th>Feedback</th>
           
        </tr>
        </thead>

        <?php
        include 'partials/dbconnect.php';
        $view_users_query="select * from contactdata";
        $run=mysqli_query($conn,$view_users_query);

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $id=$row[0];
            $firstname=$row[1];
            $email=$row[4];
            $phone=$row[3];
            $message=$row[5];
           



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $firstname;  ?></td>
            <td><?php echo $email;  ?></td>
            <td><?php echo $phone;  ?></td>
            <td><?php echo  $message;  ?></td>
              </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
