
<?php

@include 'connection.php';
session_start();


   $name = $_POST['username'];
   $pass = $_POST['password'];

   $select = " SELECT * FROM login WHERE username = '$name' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      //$row = mysqli_fetch_array($result);

      header("Location: dashboard.php");
      exit;
      /*if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }*/
     
   }
   else{
      header("Location: index.php");
   }

?>