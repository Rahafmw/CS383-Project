<?php
session_start();

include("dbconnection.php");

$errors = array();

if (isset($_POST['login_button'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (count($errors) == 0) {

  	$query = "SELECT * FROM student WHERE stu_username='$username' AND stu_password ='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
        $query = "SELECT stu_id FROM student WHERE stu_username='$username' AND stu_password='$password'";
        $results = mysqli_query($conn, $query);
        $rows = mysqli_fetch_assoc($results);
        $_SESSION["userid"] = $rows['stu_id'];
        $_SESSION['type_of_user'] = "std";
  	    header('location:home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
          echo '<script language="javascript">';
          echo 'alert("Wrong username or password combination")';
          echo '</script>';
  	}
  }

}

// Orgnization
if (isset($_POST['loginOrg_button'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (count($errors) == 0) {

    $query = "SELECT * FROM organization WHERE org_name ='$username' AND org_password ='$password'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $query = "SELECT org_name FROM organization WHERE org_name='$username' AND org_password='$password'";
        $results = mysqli_query($conn, $query);
        $rows = mysqli_fetch_assoc($results);
        $_SESSION["userid"] = $rows['org_name'];
        $_SESSION['type_of_user'] = "org";
        header('location:home.php');
      
    }else {
      array_push($errors, "Wrong username/password combination");
          echo '<script language="javascript">';
          echo 'alert("Wrong username or password combination")';
          echo '</script>';
    }
  }

}


?>