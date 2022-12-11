<?php
session_start();
    $id = $_SESSION['userid'];
   if(!isset($_SESSION['userid'])) // If session is not set then redirect to Login Page
   {
     header("Location:..login.html");  
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="https://icon-library.com/images/companies-icon/companies-icon-4.jpg" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet"/>
         <meta charset="utf-8">

        <!-- edit profile account details -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        
        <!--Bootstrap Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

        <!--Rich Text Editor-->
        <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>


        <!-- Favicons -------------> 
        <link href="../assets/img/favicon.png" rel="icon">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="../assets/css/stylle.css" rel="stylesheet">
        <script src="../assets/js/main.js"></script>


        <title>Dashboard</title>
    </head>
    <body class="bg-gray-100">

            <?php

        //When the form button is clicked 
        if(array_key_exists('update_button', $_POST)) {
                    Update_Profile();
                }

        //function to store the input data to the database 
        function Update_Profile() 
        {
        
            include("../dbconnection.php");
        //if the connection is working   
        // Taking all 8 values from the form data(input)
        $Email =  $_REQUEST['Email'];
        $Contact =  $_REQUEST['Contact'];
        $Location =  $_REQUEST['Location'];
        $Overview =  $_REQUEST['Overview'];
        $LinkedIn = $_REQUEST['LinkedIn'];
        $Twitter = $_REQUEST['Twitter'];
        $Facebook = $_REQUEST['Facebook'];
        $Website = $_REQUEST['Website'];
                
        $sql = "UPDATE organization
        set org_email= '$Email', org_contact= '$Contact', org_place= '$Location', org_description= '$Overview', org_linkedin= '$LinkedIn', 
        org_twitter= '$Twitter', org_facebook= '$Facebook', org_website= '$Website'
        WHERE org_id='1'";

        if(mysqli_query($conn, $sql)){
            header('Location: Org_Dashboard.php');
                } else{
                    echo "ERROR: Hush! Sorry $sql. " 
                        . mysqli_error($conn);
                }
        // Close connection
        mysqli_close($conn);
                
        } //end function 

?>

    <!-- Navigation -->
    <?php include("Header&Footer/header.php"); ?> 
           <div id="page-top">


           <?php   
             include("../dbconnection.php");
             $query = "SELECT * FROM organization where org_id = 1";
             $result = mysqli_query($conn , $query);
            if(!$result || mysqli_num_rows($result) >  0)
                {
            if (is_iterable($result))
                {
             foreach($result as $rows) 
             {
             ?>

        <!-- Side bar Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#Profile">
                <span class="d-block d-lg-none"><?php echo $rows['org_name']; ?> Dashboard</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo $rows['org_logo']; ?>" alt="Company Logo"/></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Edit">Edit Profile</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Post">Posted Opportunities</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Table">Applicants Requests</a></li>
                </ul>
            </div>
        </nav>


        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="Profile">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <span class="text-primary"><?php echo $rows['org_name']; ?></span>, <?php echo $rows['org_subtype']; ?></h1>
                    
                    <div class="subheading mb-5">
                        <?php echo $rows['org_place'];?>, <?php echo $rows['org_contact'];?> ·
                        <a class="text-primary"><?php echo $rows['org_email']; ?></a>
                    </div>
                    <p class="lead mb-5"><?php echo $rows['org_description']; ?></p>
                    <div class="social-icons">
                        <a class="social-icon social-icon-LinkedIn" href="<?php echo $rows['org_linkedin']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon social-icon-twitter" href="<?php echo $rows['org_twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon social-icon-facebook" href="<?php echo $rows['org_facebook']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-icon" href="<?php echo $rows['org_website']; ?>" target="_blank"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0"/>


            <!-- Edit Profile-->
            <section class="resume-section" id="Edit">
                <div class="resume-section-content">
                <div class="container rounded bg-white">
                    <div class="row">
                        <div class="col-md-4 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="img-fluid mt-5" style="width: 120px; border-radius: 10px;" src="<?php echo $rows['org_logo']; ?>">
                                <span class="pt-3 font-weight-bold"><?php echo $rows['org_name']; ?></span><span class="text-black-50"><?php echo $rows['org_subtype']; ?></span></div>
                        </div>
                        <div class="col-md-8">
                            <div class="p-3 py-5">
                                <div class="row mt-3">
                                    <form method="post">
                                    <div class="col-md-12 py-2"><label class="labels">Email:</label><input name="Email" type="email" class="form-control" value="<?php echo $rows['org_email'];?>"></div>
                                    <div class="col-md-12 py-2"><label class="labels">Contact Number:</label><input name="Contact" type="text" class="form-control" value="<?php echo $rows['org_contact'];?>"></div>
                                    <div class="col-md-12 py-2"><label class="labels">Location:</label><input name="Location" type="text" class="form-control" value="<?php echo $rows['org_place'];?>"></div>
                                    <div class="col-md-12 py-2"><label class="labels">Overview:</label><textarea name="Overview" class="form-control" rows="3"><?php echo $rows['org_description'];?></textarea></div>
                                    
                                    <div class="row px-3">
                                    <div class="d-sm-flex align-items-center">
                                    <h3 class="h3 pt-5 text-gray-800">Social Media:</h3>
                                    </div><hr>
                                    <div class="col-md-6 py-2"><label class="labels">LinkedIn:</label><input name="LinkedIn" type="text" class="form-control" value="<?php echo $rows['org_linkedin'];?>" ></div>
                                    <div class="col-md-6 py-2"><label class="labels">Twitter:</label><input name="Twitter" type="text" class="form-control" value="<?php echo $rows['org_twitter'];?>"></div>
                                    <div class="col-md-6 py-2"><label class="labels">Facebook:</label><input name="Facebook" type="text" class="form-control" value="<?php echo $rows['org_facebook'];?>"></div>
                                    <div class="col-md-6 py-2"><label class="labels">Website:</label><input name="Website" type="text" class="form-control" value="<?php echo $rows['org_website'];?>"></div>
                                    </div>

                                </div>
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="update_button">Update Profile</button></div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <hr class="m-0" />
            <?php
            }
          }
        }
      ?>


            <!-- Posted Opportunities-->
            <section class="resume-section" id="Post">
                `
                <div class="row">
                    <div class="col">
                    <!-- Page Heading -->
                    <div class="row">
                    <div class="d-flex justify-content-end mb-4">
                    <a href="#NewPost" class="mt-1 btn btn-primary">
                        <span class="icon text-white-50 px-2">
                            <i class="text-white bi bi-plus-square"></i>
                        </span>
                        <span class="text">Post New Opportunity</span>
                    </a>
                    </div>
                </div>
                </div>
                <?php

                if (isset($_GET['post_id'])){
                    $id = $_GET['post_id'];
                    $delete = mysqli_query($conn, "DELETE FROM `post` WHERE `post_id`='$id'");
                }
                $select = "SELECT * FROM `post`";
                $query = mysqli_query($conn,$select);
                $num = mysqli_num_rows($query);

                if($num>0){
                    while($result=mysqli_fetch_assoc($query)){
                        
                 ?>
                <div class="row py-4">
                <div class="container rounded bg-white">
                    <div class="row">
                        <div class="col"><div class="row">
        
                        <div class="offset-1 col-11 mt-4 justify-content-between d-flex">
                            <h3><?php echo $result['post_title'] ?></h3>
                            <div class="mr-2">
                                <a href="#"><i class="p-2 bi bi-pencil-square text-secondary"></i></a>
                                <?php echo "<a href='Org_Dashboard.php?post_id=".$result['post_id']."'><i class='p-2 bi bi-trash text-danger'></i></a>";?>
                            </div>
                        </div>

                        <div class ="offset-1 col-4">Application Start Date: <?php echo $result['post_sdate'] ?></div>

                        </div></div></div>
                        <hr>
                        <div class="p-5">
                        <?php echo $result['post_info'] ?>
                    </div>
                </div>
                </div>
                <?php
                   }
                }
                else
                {
                    echo "</div><h3 class='row offset-3'>No Date Found</h3>";
                }

                ?>
            </div>
                
            </section>
            <hr class="m-0"/>


            <!--New Post Form-->
            <section class="resume-section" id="NewPost">
            <div class="container-fluid bg-white">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center">
                    <h1 class="h3 pt-5 ml-4 text-gray-800">Create new Post</h1>
                </div><hr>
                
                <?php

                //When the form button is clicked 
                if(array_key_exists('NewPost_button', $_POST)) {
                            Create_newPost();
                        }

                //function to store the input data to the database 
                function Create_newPost() 
                {

                    include("../dbconnection.php");
                //if the connection is working   
                // Taking all 5 values from the form data(input)
                $Title =  $_REQUEST['Title'];
                $Reg_Start =  $_REQUEST['Reg_Start'];
                $Reg_End =  $_REQUEST['Reg_End'];
                $Imp_date =  $_REQUEST['Imp_date'];
                $editor = $_REQUEST['editor1'];
                        
                $sql = "INSERT INTO post (post_title, post_sdate, post_edate, post_impdate, post_info) 
                VALUES ('$Title', '$Reg_Start', '$Reg_End', '$Imp_date', '$editor')";

                if(mysqli_query($conn, $sql)){
                    header('Location: Org_Dashboard.php');
                        } else{
                            echo "ERROR: Hush! Sorry $sql. " 
                                . mysqli_error($conn);
                        }
                // Close connection
                mysqli_close($conn);
                        
                } //end function 

                ?>
                <!--Start Page Contents-->
                <div class="container rounded px-5 py-4">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-12 pb-4"><label class="labels">Title:</label><input name="Title" type="text" class="form-control" placeholder="Enter Post Title"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 py-2"><label class="labels">Registration Start Date:</label><input name="Reg_Start" type="date" class="form-control"></div>
                                        <div class="col-md-6 py-2"><label class="labels">Registration End Date:</label><input name="Reg_End" type="date" class="form-control"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 py-4"><label class="labels">Important Dates:</label><textarea name="Imp_date" class="form-control" rows="3"></textarea></div>
                                       </div>

                                    <div class="row">
                                        <div class="col">
                                            <label class="labels">Detailed Description of the Program:</label>
                                        <textarea name="editor1"></textarea>
                                            <script>
                                                    CKEDITOR.replace( 'editor1' );
                                            </script>
                                        </div>
                                    </div>
                                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" name="NewPost_button" type="submit">Post the Opportunity</button></div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
            </section>

            <hr class="m-0"/>


            <!-- Applicants Request-->
            <section class="resume-section Applicant-Table-section" id="Table">
                <div class="resume-section-content">

                    <!--Datatable of Applicants Request-->
                    <div class="card mb-4">
                        <div class="card-body">

                            <!--Table Heading-->
                            <div class="row mb-4">
                                <div class="col"><h1 class="h3 ml-2 text-gray-800">Recent Applicants Requests</h1>
                                    <p class="ml-2 text-xs">To See All Applicants Request Click on Full View</p></div>
                                <div class="col text-right">
                                    <a class="text-secondary Link-style" href="Org_DataTable.html"><i class="bi bi-fullscreen px-2"></i>Full view</a>
                                </div>
                            </div>

                            

                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>CV</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Rahaf</td>
                                            <td>Alweldi</td>
                                            <td>3910322@stu.rcyci.edu.sa</td>
                                            <td><a href="https://drive.google.com/file/d/19Hqp45NEskr8j72QyGWiJJGZFaJ_W6Bn/view" target="_blank">Rahaf_CV</td>
                                            <td><div class="p-2 bg-warning text-white text-center" style="border-radius: 5px;">Waiting for Reply</div></td>
                                        </tr>

                                        <tr>
                                            <td>Rahaf</td>
                                            <td>Alweldi</td>
                                            <td>3910322@stu.rcyci.edu.sa</td>
                                            <td><a href="https://drive.google.com/file/d/19Hqp45NEskr8j72QyGWiJJGZFaJ_W6Bn/view" target="_blank">Rahaf_CV</td>
                                            <td><div class="p-2 bg-success text-white text-center" style="border-radius: 5px;">Accepted</div></td>
                                        </tr>

                                        <tr>
                                            <td>Rahaf</td>
                                            <td>Alweldi</td>
                                            <td>3910322@stu.rcyci.edu.sa</td>
                                            <td><a href="https://drive.google.com/file/d/19Hqp45NEskr8j72QyGWiJJGZFaJ_W6Bn/view" target="_blank">Rahaf_CV</td>
                                            <td><div class="p-2 bg-danger text-white text-center" style="border-radius: 5px;">Declined</div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
