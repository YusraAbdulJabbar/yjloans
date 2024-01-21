<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "", "yjl", 3308);
echo "aaa";
if (isset($_POST['s'])) {
   // Escape user inputs for security
   $title = $_POST['title'];
   $define = $_POST['define'];
   $id = $_POST['id'];
   $query = "UPDATE loanterms SET title = '$title', define = '$define' WHERE id = '$id' ";
   echo $query;
   if (mysqli_query($link, $query)) {

      header("location: loanterms-table.php");
   } else {
      echo "Error updating record: " . mysqli_error($link);
   }
}
?>