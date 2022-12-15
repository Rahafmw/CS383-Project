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
        <title>Dashboard</title>

        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <link href="assets/css/stdDashboard_style.css" rel="stylesheet">
         <meta charset="utf-8">
        <!-- edit profile account details -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <?php
    
    include("dbconnection.php");

    //UPDATE PICTURE
    if(array_key_exists('update_pic', $_POST)) {
        Update_Pic();
    }

    function Update_Pic() 
        {

            $file_name = $_FILES['stu_pic']['name'];
            $file_tmp = $_FILES['stu_pic']['tmp_name'];
        
            move_uploaded_file($file_tmp,"uploads/".$file_name);

                            
        $sql = "UPDATE student set stu_pic='$file_name' WHERE stu_id='1'";

        if(mysqli_query($conn, $sql)){
            header('Location: stdDashboard.php');
                } else{
                    echo "ERROR: Hush! Sorry $sql. " 
                        . mysqli_error($conn);
                }
        // Close connection
        mysqli_close($conn);
                
        } //end function 


        //UPDATE PROFILE
        //When the form button is clicked 
        if(array_key_exists('update_button', $_POST)) {
                    Update_Profile();
                }

        //function to store the input data to the database 
        function Update_Profile() 
        {
        
        //if the connection is working   
        // Taking all 8 values from the form data(input)
        $Fname =  $_REQUEST['FirstName'];
        $Lname =  $_REQUEST['LastName'];
        $Email =  $_REQUEST['Email'];
        $Contact =  $_REQUEST['Phone'];
        $Overview =  $_REQUEST['Overview'];
        $Birthday =  $_REQUEST['Birthday'];
        $Skill1 =  $_REQUEST['skill1'];
        $Skill2 =  $_REQUEST['skill2'];
        $Skill3 =  $_REQUEST['skill3'];
        $Skill4 =  $_REQUEST['skill4'];

                
        $sql = "UPDATE student
        set stu_fname= '$Fname', stu_lname= '$Lname', stu_email= '$Email', stu_contact= '$Contact', stu_description= '$Overview',stu_birthday= '$Birthday', stu_skill1= '$Skill1', stu_skill2= '$Skill2', stu_skill3= '$Skill3', stu_skill4= '$Skill4'
        WHERE stu_id='1'";

        if(mysqli_query($conn, $sql)){
            header('Location: stdDashboard.php');
                } else{
                    echo "ERROR: Hush! Sorry $sql. " 
                        . mysqli_error($conn);
                }
        // Close connection
        mysqli_close($conn);
                
        } //end function 

?>

         <?php include("StuHeader.php"); ?>
           <div id="page-top">

             <?php   
             include("dbconnection.php");
             $query = "SELECT * FROM student where stu_id = 1";
             $result = mysqli_query($conn , $query);
            if(!$result || mysqli_num_rows($result) >  0)
                {
            if (is_iterable($result))
                {
             foreach($result as $rows) 
             {
                $imgURL = 'uploads/'.$row["stu_pic"];
             ?>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none"><?php echo $rows['stu_fname']; ?></span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo $imgURL ?>" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#edit">Edit Profile</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <span class="text-primary"><?php echo $rows['stu_fname']; ?></span>, <?php echo $rows['stu_lname']; ?>
                    </h1>
                    <div class="subheading mb-5">
                         <?php echo $rows['stu_place'];?>, <?php echo $rows['stu_contact'];?> ·
                        <a class="text-primary"><?php echo $rows['stu_email']; ?></a>
                    </div>
                    <p class="lead mb-5"><?php echo $rows['stu_description']; ?></p>
                    <div class="social-icons">
                        <a class="social-icon social-icon-LinkedIn" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon social-icon-github" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon social-icon-twitter" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon social-icon-facebook" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
                     <!-- Edit-->
            <section class="resume-section" id="edit">
                <div class="resume-section-content">
                    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">

            
                <form method="post" enctype="multipart/form-data">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo $rows['stu_pic']; ?>" />
                    <input class="form-control" name="stu_pic" type="file">
                    <!-- Profile picture upload button-->
                    <div class="p-4"><button class="btn btn-primary" type="submit" name="update_pic">Upload new image</button></div>
                </div>
            </div>
        </div>
             </form>
        <div class="col-xl-8">
            <!-- Account details card-->
            <form method="post">
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1">First name</label>
                                <input class="form-control" name="FirstName" type="text" value="<?php echo $rows['stu_fname'];?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1">Last name</label>
                                <input class="form-control" name="LastName" type="text" value="<?php echo $rows['stu_lname'];?>">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1">Email address</label>
                            <input class="form-control" name="Email" type="email" value="<?php echo $rows['stu_email'];?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1">Phone number</label>
                                <input class="form-control" name="Phone" type="tel" value="<?php echo $rows['stu_contact'];?>">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1">Birthday</label>
                                <input class="form-control" name="Birthday" type="text" value="<?php echo $rows['stu_birthday'];?>">
                            </div>
                        </div>
                           <div class="row gx-3 mb-3">
                            <!-- skill1-->
                            <div class="col-md-6">
                                <label class="small mb-1">Skill 1</label>
                                <input class="form-control" name="skill1" type="text" value="<?php echo $rows['stu_skill1'];?>">
                            </div>
                            <!-- skill2-->
                            <div class="col-md-6">
                                <label class="small mb-1">Skill 2</label>
                                <input class="form-control" name="skill2" type="text" value="<?php echo $rows['stu_skill2'];?>">
                            </div>
                             <div class="col-md-6">
                                <label class="small mb-1">Skill 3</label>
                                <input class="form-control" name="skill3" type="text" value="<?php echo $rows['stu_skill3'];?>">
                            </div>
                             <div class="col-md-6">
                                <label class="small mb-1">Skill 4</label>
                                <input class="form-control" name="skill4" type="text" value="<?php echo $rows['stu_skill4'];?>">
                            </div>
                        </div>

                        <div class="row gx-3 mb-3">
                           <div class="col-md-12 py-2"><label class="labels">Overview:</label><textarea name="Overview" class="form-control" rows="3"><?php echo $rows['stu_description'];?></textarea>
                           </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit" name="update_button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
            }
          }
        }
      ?>
 </div>
  </section>
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Yanbu Industrial Collage YIC</h3>
                            <div class="subheading mb-3">Bachelor of Computer Science</div>
                            <div>Computer Science - Web Development Track</div>
                            <p>GPA: 3.92</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2018 - May 2023</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Secondary High School</h3>
                            <div class="subheading mb-3">Natural Science</div>
                            <p>GPA: 99.43</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2015 - May 2018</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                        <li class="list-inline-item"><i class="fab fa-react"></i></li>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                        <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                        <li class="list-inline-item"><i class="fab fa-less"></i></li>
                        <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                        <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                        <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mobile-First, Responsive Design
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Browser Testing & Debugging
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Functional Teams
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Mobile Web Specialist - Google Certification
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place -  - Emerging Tech Competition 2009
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - Yanbu Industrial Collage YIC - Adobe Creative Jam 2020 (UI Design Category)
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            2
                            <sup>nd</sup>
                            Place - Yanbu Industrial Collage YIC - Emerging Tech Competition 2021
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - Secondary High School - Hackathon 2016
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>