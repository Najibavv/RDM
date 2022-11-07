<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
require_once("config.php");
//you need this piece of code to understand whats going on
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$id=$_POST['id'];
$name=$_POST['name'];
$phoneNo=$_POST['number'];
$time=$_POST['time'];
$phid=$_SESSION['USER_ID'];
$gender=$_POST['gender'];
$Medication=$_POST['medication'];
$message=$_POST['message'];


if($id!=0){


$sql = "INSERT INTO patient (pID, name, phoneNo, Medication, time, gender,message, pharmcist_id) VALUES ('$id','$name','$phoneNo' ,'$Medication' ,'$time','$gender','$message','$phid')";

if($conn->query($sql)===TRUE) {
		echo "New record created successfully";
	 
        }else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

//close conn
mysqli_close($conn);
}
else
echo '<script>alert("please fill information")</script>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RDM -Service</title>
    
   

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">RDM</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        
    </nav>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header3 py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Regiter Patient</h1>
            <nav aria-label="breadcrumb animated slideInDown">
              
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary1 px-3">Register a new patient</p>
                
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Please enter the correct information of the patient</h3>
                    
                    <form method="post" action="registerPatients.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="Pname" placeholder="Name" >
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control"name="number" id="number" placeholder="Number" required>
                                    <label for="number">Number</label>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control"name="id" id="number" placeholder="ID" required>
                                    <label for="id">ID</label>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="medication" required>
                                    <label for="medication">Medication</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                <input type="time" class="form-control" id="time" value="09:12" name="time" required >
                                    <label for="time">Time</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                            <label for="gender">Choose a gender:</label>
                    </br></br>

<select name="gender" id="gender" >
  <option value="Female">Female</option>
  <option value="male">Male</option>
  
</select> 
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" style="height: 250px"></textarea>
                                    <label for="Leave a message here (Optional)">Leave a message here (Optional)</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
               

                    

                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Airport st, Hail, KSA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+966 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@rdm.com</p>
                    
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Business Hours</h5>
                    <p class="mb-1">Sunday - Thursday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Friday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="index.php">RDM</a>, All Right Reserved.
                </div>
               
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

</html>