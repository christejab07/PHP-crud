<?php 
include "connect.php";
if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $pass=$_POST['password'];
     $password = Md5($pass);
     $sql = "INSERT INTO customers (name, email, password) VALUES('$name', '$email', '$password')"; 
     $result = mysqli_query($conn, $sql);

     if($result){
          header('Location: read.php');
     }
     else{
          die(mysqli_error($conn));
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Crud operation</title>
     <style>
          .container{
               margin: 50px 10%;
          }
          input{
               height: 30px;
               width: 100%;
               margin: 10px;
               text-align: left;
               border: 1px solid grey;
               border-radius: 2px;
          }
          label{
               font-size: 14px;
               margin: 5px 5px 5px 1%;
               font-weight: 500;
               font-family: sans-serif;
          }
          button{
               padding: 8px 15px;
               color: white;
               border: none;
               margin: 30px 0 0 10px;
               background-color: rgb(0, 102, 255);
               border-radius: 2px;
          }
     </style>
</head>
<body>
     <div class="container">
          <form action="" method="post">
               <label for="name">Name</label><br>
               <input type="text" name="name" id="name" placeholder="Enter your name"><br>
               <label for="email">Email</label><br>
               <input type="email" name="email" id="email" placeholder="Enter your email"><br>
               <label for="password">Password</label><br>
               <input type="password" name="password" id="password" placeholder="Enter your password"><br>
               <button type="submit" name="submit">Submit</button>
          </form>
     </div>
</body>
</html>