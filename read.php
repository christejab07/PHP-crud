<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Crud operation</title>
     <style>
          .container {
               margin: 100px 10%;
          }
          .edit {
               background-color: rgb(0, 85, 255);
               border: none;
               color: white;
               border-radius: 5px;
               padding: 8px 20px;
          }
          .delete{
               border: none;
               border-radius: 5px;
               padding: 8px 20px;
               color: white;
               background-color: rgb(255, 34, 0);
          }
          button{
               margin: 5px;
               cursor: pointer;
          }
          td, th{
               border: 0.5px solid grey;
          }
          .add{
               background-color: rgb(0, 85, 255);
               border: none;
               padding: 8px 20px;
               border-radius: 5px;
               margin-bottom: 3em;
               color: white;
          }
          a{
               text-decoration: none;
               color: white;
          }
          
     </style>
</head>
<body>
     <div class="container">
          <button class="add"><a href="user.php">Add User</a></button>
          <table border="1px" cellpadding="15px" cellspacing="0">
               <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Operations</th>
               </thead>
               <tbody>
                    <?php
                    include "connect.php";
$sql = "SELECT * FROM customers";
$result = mysqli_query($conn, $sql);
if($result){
     while ($row = mysqli_fetch_assoc($result)) {
         $id = $row['id'];
         $name = $row['name'];
         $email = $row['email'];
         $password = $row['password'];
         echo '<tr>
         <td>'.$id.'</td>
         <td>'.$name.'</td>
         <td>'.$email.'</td>
         <td>'.$password.'</td>
         <td><button class="edit"><a href="update.php? updateid='.$id.'">Edit</a></button>
         <button class="delete"><a href="delete.php? deleteid='.$id.'">Delete</a></button></td>
    </tr>';
     }
}
?>
                    
               </tbody>
          </table>
     </div>
</body>
</html>