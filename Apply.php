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
   <?php include("header.php"); ?>

   <div class="container"> <br><br><br><br>
     <div class="row">
      <div class="mt-5 pt-4 col-lg a">
      <form action="Apply_db.php">
      <label for="formFileMultiple" class=" form-label ">Upload your CV</label>
      <input class="form-control" type="file" id="formFileMultiple" multiple /> 
      <label for="formFileMultiple" class=" form-label ">Upload your National ID</label>
      <input class="form-control" type="file" id="formFileMultiple2" multiple />
      <label for="formFileMultiple" class=" form-label ">Upload your Transcript</label>
      <input class="form-control" type="file" id="formFileMultiple3" multiple />
     </div>
     </div>
     <div class="mt-2 pb-2 col-lg-12 col-md-12 text-center" id="show">
        <a href="#" class="team-btn align-middle" type="submit" >Apply</a>
      </div>
  </form>
 </div>
</body>
</html>