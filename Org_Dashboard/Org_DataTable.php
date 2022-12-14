<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Organization Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!--Custom style for button-->
    <link href="css/Buttons.css" rel="stylesheet">

    <!-- Custom styles for table -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">


            <!-- Begin Page Content -->
            <div class="container mt-5 DataTables">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Applicants Requests</h1>

                    <!--Back Button-->
                    <a href="Org_Dashboard.php" class="Back-Button"><span><i class="bi bi-arrow-left-square pr-3"></i>Back to Dashboard</span></a>
                </div>

                    <!-- DataTales Example -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>CV</th>
                                            <th>State</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include("../dbconnection.php");
                                        $select = "SELECT * FROM applicant";
                                        $query = mysqli_query($conn,$select);
                                        $num = mysqli_num_rows($query);
                    
                                        if($num>0){
                                            while($row=mysqli_fetch_assoc($query)){
                                                $pdfURL_cv = '../uploads/'.$row["cv"];
                                                $pdfURL_NationalId = '../uploads/'.$row["National_id"];
                                                $pdfURL_Transcript = '../uploads/'.$row["Transcript"];
                                        ?>
                                        <tr>
                                            <td><?php echo $row['stu_fname'] ?></td>
                                            <td><?php echo $row['stu_lname'] ?></td>
                                            <td><a href="<?php echo $pdfURL_cv ?>" target="_blank"><?php echo $row['cv'] ?></td>
                                            <td><a href="<?php echo $pdfURL_NationalId ?>" target="_blank"><?php echo $row['National_id'] ?></td>
                                            <td><a href="<?php echo $pdfURL_Transcript ?>" target="_blank"><?php echo $row['Transcript'] ?></td>
                                        </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
          </div>
        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->



   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>
</html>