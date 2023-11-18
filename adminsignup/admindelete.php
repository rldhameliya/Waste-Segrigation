<?php

$con = new mysqli('localhost', "root", "", "waste");
   $id = $_GET['i'];
    $query = "delete  from garbageinfo WHERE id = '$id'" ;

    $data = mysqli_query($con,$query);
    
    if($data) {

      header('Location: http://localhost/waste/adminsignup/index.php');
      exit;
    }
    else {
        echo "<font color='red'>Failed to delete!";
    }

?>