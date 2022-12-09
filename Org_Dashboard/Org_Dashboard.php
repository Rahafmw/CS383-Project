<?php
session_start();
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

    <!-- Navigation -->
    <?php // include("Header&Footer/header.php"); ?> 
           <div id="page-top">

        <!-- Side bar Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#Profile">
                <span class="d-block d-lg-none">Aramco Dashboard</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="https://pbs.twimg.com/profile_images/1438548612464644101/yhtvY1Fk_400x400.png" alt="Company Logo"/></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Edit">Edit Profile</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Post">Posted Opportunities</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Table">Applicants Requests</a></li>

                    <br>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"><i class="bi bi-box-arrow-right px-2"></i>Log Out</a></li>
                </ul>
            </div>
        </nav>


        <!-- Page Content-->
        <div class="container-fluid p-0">
            
            <!-- About-->
            <section class="resume-section" id="Profile">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <span class="text-primary">Aramco</span>, Energy Company</h1>
                    
                    <div class="subheading mb-5">
                         Saudi Arabia · Dhahran, +966 11 297 8775 ·
                        <a class="text-primary">saempsa_webmaster@aramco.com</a>
                    </div>
                    <p class="lead mb-5">We’re a leading producer of the energy and chemicals that drive global commerce and enhance the daily lives of people around the globe by continuing delivering an uninterrupted supply of energy to the world.</p>
                    <div class="social-icons">
                        <a class="social-icon social-icon-LinkedIn" href="https://www.linkedin.com/company/aramco/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon social-icon-twitter" href="https://twitter.com/Aramco" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon social-icon-facebook" href="https://www.facebook.com/aramco/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-icon" href="https://www.aramco.com/" target="_blank"><i class="fas fa-globe"></i></a>
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
                                <img class="img-fluid mt-5" style="width: 120px; border-radius: 10px;" src="https://pbs.twimg.com/profile_images/1438548612464644101/yhtvY1Fk_400x400.png">
                                <span class="pt-3 font-weight-bold">Aramco</span><span class="text-black-50">Energy Company</span></div>
                        </div>
                        <div class="col-md-8">
                            <div class="p-3 py-5">
                                <div class="row mt-3">
                                    <form action="#">
                                    <div class="col-md-12 py-2"><label class="labels">Email:</label><input type="email" class="form-control" placeholder="saempsa_webmaster@aramco.com" value=""></div>
                                    <div class="col-md-12 py-2"><label class="labels">Contact Number:</label><input type="text" class="form-control" placeholder="+966 11 297 8775" value=""></div>
                                    <div class="col-md-12 py-2"><label class="labels">Location:</label><input type="text" class="form-control" placeholder="Dhahran, Saudi Arabia" value=""></div>
                                    <div class="col-md-12 py-2"><label class="labels">Website:</label><input type="text" class="form-control" placeholder="https://www.aramco.com/" value=""></div>
                                </div>
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Update Profile</button></div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <hr class="m-0" />


            <!-- Posted Opportunities-->
            <section class="resume-section" id="Post">
                `
                <div class="row">
                    <div class="col">
                    <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <span></span> <!--empty spam for changing the align for button-->
                    <a href="#NewPost" class="mt-1 btn btn-primary">
                        <span class="icon text-white-50 px-2">
                            <i class="text-white bi bi-plus-square"></i>
                        </span>
                        <span class="text">Post New Opportunity</span>
                    </a>
                </div>
                </div>
                <div class="container rounded bg-white">
                    <div class="row">
                        
                        <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2">
                        <img class="img-fluid p-4" style="width: 170px; border-radius: 10px;" src="https://pbs.twimg.com/profile_images/1438548612464644101/yhtvY1Fk_400x400.png">
                        </div>
                        
                        <div class="col"><div class="row">
        
                            <div class="col-12 mt-4 justify-content-between d-flex">
                            <h3>University Internship Program Registration</h3>
                            <div class="mr-2">
                                <a href="#"><i class="p-2 bi bi-pencil-square text-secondary"></i></a>
                                <a href="#"><i class="p-2 bi bi-trash text-danger"></i></a>
                                </div>
                            </div>

                        <span class ="col">Application Start Date: 04 Dec, 2022 - 8:00AM</span>

                        </div></div></div>

                        <div class="p-5">
                            <b>Eligibility:</b>
                            <p>Applicants eligible to apply for the program are those required by their universities to undergo practical training prior to graduation. They are considered for the program based on the availability of slots and the following criteria:</p>
                            <p>Applicants must have a minimum cumulative GPA of 2.00 out of 4 for technical majors and 2.50 out of 4 for nontechnical majors or equivalent. Priority is given to candidates with the highest GPAs.</p>
                            <ul>
                                <li>The duration of the training required by the school must be at least 8 weeks.</li>
                                <li>Applicant must not have graduated from his/her university.</li>
                                <li>Applicants must complete the training internship in full.</li>
                                <li>Accepted students must not be enrolled in university classes/modules during their training period.</li>
                            </ul>

                            <b>Required Documents</b>
                            <p>Candidates applying for the program need to provide the following documents:</p>
                            <ul>
                                <li>A copy of the Government ID.</li>
                                <li>A copy of the latest official transcript.</li>
                                <li>A letter from the university that shows the objectives and the length of the internship</li>
                            </ul>
                        </div>
                    </div>
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
                

                <!--Start Page Contents-->
                <div class="container rounded px-5 py-4">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-12 pb-4"><label class="labels">Title:</label><input type="text" class="form-control" placeholder="Enter Post Title" value=""></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 py-2"><label class="labels">Registration Start Date:</label><input type="date" class="form-control" placeholder="first name" value=""></div>
                                        <div class="col-md-6 py-2"><label class="labels">Registration End Date:</label><input type="date" class="form-control" value="" placeholder="surname"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 py-4"><label class="labels">Important Dates:</label><textarea class="form-control" rows="3"></textarea></div>
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
                                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Post the Opportunity</button></div>
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
