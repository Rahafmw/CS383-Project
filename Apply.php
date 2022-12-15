<?php
session_start();
   if(!isset($_SESSION['userid'])) // If session is not set then redirect to Login Page
   {
     header("Location:login.html");  
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>apply</title>

        <style>
        	.a{
        		margin-top: 100px;
        	}
        </style>
    </head>

    <body>
   <?php include("header.php");  

      if (isset($_POST['File_submit'])) {
         include("dbconnection.php");

        $fname =  $_REQUEST['fname'];
        $lname =  $_REQUEST['lname'];

        $file_name_cv = $_FILES['CV']['name'];
        $file_tmp_cv = $_FILES['CV']['tmp_name'];

        $file_name_national_id = $_FILES['NationalId']['name'];
        $file_tmp_national_id = $_FILES['NationalId']['tmp_name'];

        $file_name_Transcript = $_FILES['Transcript']['name'];
        $file_tmp_Transcript = $_FILES['Transcript']['tmp_name'];

        move_uploaded_file($file_tmp_cv,"./uploads/".$file_name_cv);
        move_uploaded_file($file_tmp_national_id,"./uploads/".$file_name_national_id);
        move_uploaded_file($file_tmp_Transcript,"./uploads/".$file_name_Transcript);

        $sql = "INSERT INTO applicant (stu_fname, stu_lname, cv, National_id, Transcript) VALUES('$fname','$lname', '$file_name_cv', '$file_name_national_id', '$file_name_Transcript')";

        $id = $_SESSION['userid'];
     
      // Performing insert query execution so this infor will be displaying in the student dahsboard
      $sql = "INSERT INTO applicant_previous_requests (id, org_name, status) VALUES ('$id', 'Saudi Arabian Oil Company Aramco','Completed' )";


        if(mysqli_query($conn, $sql)){
          header('Location: training-details.php');
        
              } else{
                  echo "ERROR: Hush! Sorry $sql. " 
                      . mysqli_error($conn);
              }
      // Close connection
      mysqli_close($conn);

        }
   
  ?>


   <div class="container"> <br><br><br><br>
     <div class="row">
      <div class="mt-5 pt-4 col-lg">
      <form name="from_file_upload" method="post" enctype="multipart/form-data">

      <div class="row">
      <div class="col-md-6 py-2"><label class="labels pb-2">First Name:</label><input name="fname" type="text" class="form-control" placeholder="Enter Your First Name"></div>
      <div class="col-md-6 py-2"><label class="labels pb-2">Last Name:</label><input name="lname" type="text" class="form-control" placeholder="Enter Your Last Name"></div>
      </div>

      <label for="formFileMultiple" class=" form-label pt-3">Upload your CV</label>
      <input class="form-control" name="CV" type="file" id="formFileMultiple" multiple accept=".pdf" /> 

      <label for="formFileMultiple" class=" form-label pt-3">Upload your National ID</label>
      <input class="form-control" name="NationalId" type="file" id="formFileMultiple2" multiple accept=".pdf"/>

      <label for="formFileMultiple" class=" form-label pt-3">Upload your Transcript</label>
      <input class="form-control" name="Transcript" type="file" id="formFileMultiple3" multiple accept=".pdf"/>

      <p class="pt-4 text-danger">* Only PDF Files Are Accepted</p>
     </div>
     </div>
     <div class="mt-4 pb-2 col-lg-12 col-md-12 text-center" id="show">
      <button class="btn team-btn align-middle" type="submit" name="File_submit">Apply</button>
      </div>
  </form>
 </div>
</body>
</html>