<?php
session_start();
$addbtn = true;
$mysqli = new mysqli('localhost', 'root', '', 'ahmed') or die(mysqli_error($mysqli));
$id = 0;
if (isset($_POST['save'])){
  $id = $_POST['id'];
  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $date_of_birth = $_POST['date-of-birth'];
  $department = $_POST['department'];
  $salary = $_POST['salary'];
  $f_unction = $_POST['function'];
  $photo = $_POST['photo'];
  $mysqli->query("INSERT INTO `employees` ( `first_name`, `last_name`, `date_of_birth`, `department`, `salary`, `function`, `photo`) VALUES ('$first_name', '$last_name', '$date_of_birth', '$department', '$salary', '$f_unction', '$photo');") or die($mysqli->error());
  $_SESSION['message'] =  "Record has been saved!";
  $_SESSION['msg_type'] = 'success';
  $addbtn = true;
  header("location:index.php");
}
else{
   $addbtn = false;
}


 if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("delete from employees where id = '$id'") or die($mysqli->error());
    $_SESSION['message'] =  "Record has been Delete!";
    $_SESSION['msg_type'] = 'danger';
    header("location:index.php");
 }


 if (isset($_GET['edit'])){
   $id = $_GET['edit'];
   $result = $mysqli->query("SELECT * FROM employees WHERE id=$id") or die($mysqli->error());

      $row = $result->fetch_array();
       $first_name = $row['first_name'];
       $last_name = $row['last_name'];
       $date_of_birth = $row['date_of_birth'];
       $department = $row['department'];
       $salary = $row['salary'];
       $f_unction = $row['function'];
       $photo = $row['photo'];
     $update = true;
        $addbtn = false;


 }
 else{

  $first_name = '';
  $last_name = '';
  $date_of_birth = '';
  $department ='';
  $salary = '';
  $f_unction = '';
  $photo = '';
  $update = false;
     $addbtn = true;

 }

 if (isset($_POST['update'])){
    $id = $_POST['id'];
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $date_of_birth = $_POST['date-of-birth'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $f_unction = $_POST['function'];
    $photo = $_POST['photo'];
    $mysqli->query("UPDATE employees SET first_name='$first_name', last_name='$last_name', date_of_birth='$date_of_birth', department='$department', salary='$salary', function='$f_unction' , photo='$photo'  WHERE id='$id'")or die($mysqli->error()); 
    $_SESSION['message'] = "the update was successful";
    $_SESSION['msg_type'] = 'warning';
    $addbtn = true   ;

    header("Location:index.php");

 }
 if (isset($_POST['addbtn'])){

 $addbtn = false ;  

 }




?>
