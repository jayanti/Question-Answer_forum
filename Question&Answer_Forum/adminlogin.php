<html >
  <head>
    <meta charset="utf-8">
    <title>َAdmin Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<form class="box" action="authentication.php" method="post">
  <h1>Login</h1>
  <input type="text" name="user" placeholder="Username">
  <input type="password" name="pass" placeholder="Password">
  <input type="submit" name="" value="Login">
</form>

 
<script>  
  function validation()  
  {  
      var id=document.f1.user.value;  
      var ps=document.f1.pass.value;  
      if(id.length=="" && ps.length=="") {  
          alert("User Name and Password fields are empty");  
          return false;  
      }  
      else  
      {  
          if(id.length=="") {  
              alert("User Name is empty");  
              return false;  
          }   
          if (ps.length=="") {  
          alert("Password field is empty");  
          return false;  
          }  
      }                             
  }  
</script>
  </body>
</html>
