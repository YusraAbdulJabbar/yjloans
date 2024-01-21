<?php
$eid = $_GET['eid'];
echo "eid";
$link = mysqli_connect("localhost", "root", "", "yjl", 3308);

if (isset($_POST['s'])) {


   // Escape user inputs for security

   $ebank = $_POST['ebank'];
   $e1 = $_POST['e1'];
   $e2 = $_POST['e2'];
   $e3 = $_POST['e3'];
   $e4 = $_POST['e4'];
   $e5 = $_POST['e5'];
   $e6 = $_POST['e6'];
   $e7 = $_POST['e7'];
   $cstatus = $_POST['cstatus'];
   $eid = $_POST['eid'];



   $query = "UPDATE criteria SET ebank = '$ebank', e1 = '$e1' , e2 = '$e2' , e3 = '$e3',e4 = '$e4' , e5 = '$e5' , e6 = '$e6' , e7 = '$e7' WHERE eid = '$eid' ";



   echo $query;



   if (mysqli_query($link, $query)) {

      header("location: criteria-table.php");


   } else {
      echo "Error updating record: " . mysqli_error($link);
   }


}
?>