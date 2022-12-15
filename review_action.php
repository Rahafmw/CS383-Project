<?php
 include_once ("dbconnection.php");
 //if the connection is work    
 // Taking the values from the form data(input)

 $reviewer_name =  $_REQUEST['name'];
 $reviewer_msg =  $_REQUEST['message'];
 $reviewer_job =  $_REQUEST['subject'];
 $reviewer_gender = $_REQUEST['taskOption'];
 switch ( $reviewer_gender) {
        case '1':
        $reviewer_gender = "M";
            break;
        case '2':
        $reviewer_gender = "F";
            break;
        default:
            # code...
            break;
    }
          
 // Performing insert query execution
 // the table name is review_card2

 $sql = "INSERT INTO review (reviewer_name, reviewer_msg,reviewer_job, reviewer_img)  VALUES ('$reviewer_name', '$reviewer_msg','$reviewer_job','$reviewer_gender')";

  if(mysqli_query($conn, $sql))
  {
   ""; //do nothing
  }
  else
  {
   echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
  }

 //Close connection

   mysqli_close($conn);
   header("Location:home.php");  
?>
