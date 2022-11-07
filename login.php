<?php   

//you need this piece of code to understand whats going on
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 session_start();  
 require_once("config.php");
 
 $msg="";  
 //user
 if (isset($_POST['submit'])) {
$user;	 
      
      $id=$_POST['idd'];  

	     $password = $_POST['password'];

      $sql=mysqli_query($conn,"select * from pharmacist where ID='$id'");  
      $num=mysqli_num_rows($sql);  
      if ($num>0){  
           //echo "found";  
           $row=mysqli_fetch_assoc($sql); 
// encrypt the user's password
    $password = md5($password);
//echo $password; 	
 // compare the passwords to make sure they match
    if ($password === $row['Password']){
		
           $_SESSION['USER_ID']=$row['ID'];  
           $_SESSION['USER_NAME']=$row['Phname']; 
		   $_SESSION['email']=$row['email']; 
		 
		   $_SESSION["login"] = "OK";
          
          header("location:homePage.php");  
      }else{  
           echo '<script>alert("Wrong password")</script>';
      }  
 }else{  
           echo '<script>alert("ID not found please register")</script>';
           
      }  
 } 
	  
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RDM-login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
     
       
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Login</h1> 
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="">
        <div class="container">
            <div class="row g-5 align-items-end">
                    <div class="container-fluid footer mt-5 py-5 wow fadeIn">
                        <form method="post" action="login.php">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="idd" placeholder="Your ID" required>
                                        <label for="ID">Your ID</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="pswd" name="password" placeholder="Your password" required>
                                        <label for="password">Your password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary rounded-pill py-3 px-5" name="submit" type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--/.form-section-->
                    
                  </div>
                </div>
            </div>
        </div>
    </div>
    
   <!-- Footer Start -->
   <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.8s">
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