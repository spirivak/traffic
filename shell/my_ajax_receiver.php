<?php

   include_once("bd.php");

   
   $id = $_POST['id'];
   $slctd_val = $_POST['slctd_val'];
   
   $st_id=mysqli_fetch_assoc(mysqli_query($db, "SELECT status_id FROM status WHERE status_value='$slctd_val'"))["status_id"];
  
   mysqli_query($db,"UPdaTE sub_offers SET st = '$st_id' WHERE suboff_id='$id'"); 
   
   echo "Запись была изменена";
?>