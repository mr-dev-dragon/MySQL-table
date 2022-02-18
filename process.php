<?php
session_start();

$mysqli = new mysqli('localhost', 'root', 'mypass123', 'crud') or die(mysqli_error($mysqli));
$id = 0;
if (isset($_POST['save'])){
  $name = $_POST['name'];
  $location = $_POST['location'];
  $mysqli->query("INSERT INTO data (name,location) VALUES('$name', '$location')") or 
  die($mysqli->error);
  $_SESSION['message'] =  "Record has been saved!";
  $_SESSION['msg_type'] = 'success';
  header("location:index.php");
}


 if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("delete from data where id = '$id'") or die($mysqli->error());
    $_SESSION['message'] =  "Record has been Delete!";
    $_SESSION['msg_type'] = 'danger';
    header("location:index.php");
 }


 if (isset($_GET['edit'])){
   $id = $_GET['edit'];
   $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());

      $row = $result->fetch_array();
      $name = $row['name'];
      $location = $row['location'];
      $update = true;

 }
 else{
   $name = '';
   $location ='';
   $update = false;
 }

 if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $mysqli->query("UPDATE data SET name='$name', location='$location' WHERE id='$id'")or die($mysqli->error()); 
    $_SESSION['message'] = "the update was successful";
    $_SESSION['msg_type'] = 'warning';
    header("Location:index.php");

 }

?>