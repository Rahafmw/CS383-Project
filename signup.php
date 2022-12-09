<?php
include("dbconnection.php");

$errors = array();

if (isset($_POST['signup_button'])) {

    // receive all input values from the signup.html form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
     
    //check if username or email doesnt exist in db.
    $get_all = "SELECT * FROM student WHERE stu_username='$username' OR stu_email='$email' LIMIT 1";
    $result = mysqli_query($conn, $get_all);
    $user = mysqli_fetch_assoc($result);

    if ($password != $confirm_password) { //confirm matching password
      array_push($errors, "Failed to Match");
      echo '<script language="javascript">';
      echo 'alert("Your password does not match with the confirm password <br>Please try again)';
      echo '</script>';
    }

    if ($user)
    { 
    // if user exists
       if ($user['stu_username'] === $username) {
        array_push($errors, "Username is already existed");
        echo '<script language="javascript">';
        echo 'alert("Username is already existed")';
        echo '</script>';
      }

       if ($user['stu_email'] === $email) { 
       //if email exists
        array_push($errors, "email is already existed");
        echo '<script language="javascript">';
        echo 'alert("email is already existed")';
        echo '</script>';
      }
    }

    // No error --> register 
      if (count($errors) == 0) {

        $register = "INSERT INTO student (stu_username,stu_email, stu_password)
        VALUES('$username', '$email', '$password')";
        mysqli_query($conn, $register);
         
        $query = "SELECT stu_id FROM student WHERE stu_username ='$username' AND stu_password='$password'";
        $results = mysqli_query($conn, $query);
        $rows = mysqli_fetch_assoc($results);

        session_start();
        $_SESSION["userid"] = $rows['stu_id'];
        header('location:home.php');
      
       }
    }
?>