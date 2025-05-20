<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TrekMate | Registeration</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php
        include "Topbar.html";    
    ?>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
    <?php
        include "Navbar.html";    
    ?>
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Registration</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Registration</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- 404 Start -->
  
    <div class="container my-5">
        <div class=row> 
            <div class="col-5 offset-1 shadow-lg p-3 mb-5 bg-white rounded">
                <form action=register.php method="POST">
                    <div class="form-group">
	                    <H1 for="Name" class="animate__animated animate__bounce">Customer Registration</H1>
                    </div>
                    <div class="form-group">
                        <label for="Name">Customer Name</label>
                        <input type="text" name="txtName" class="form-control"id="exampleInputPassword1" onblur="validateName(this,document.getElementById('nameErr'),'Invalid name')">
                        <small id="nameErr" class="form-text text-danger"></small>  
                    </div>
                    <div class="form-group">
                        <label for="Name">Mobile</label>
                        <input type="text" name="txtMobile" class="form-control"id="exampleInputPassword1" onblur="validateMobile(this,document.getElementById('mobErr'),'Invalid Mobile Number')">
                        <small id="mobErr" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                    <label for="Name">Email</label>
                    <input type="text" name="txtEmail" class="form-control"id="exampleInputPassword1" onblur="validateEmail(this,document.getElementById('emailErr'),'Invalid Email')">
                    <small id="emailErr" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                    <label for="Name">Address</label>
                    <textarea name="txtAddress" class="form-control"id="exampleInputPassword1"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="Name">Area</label>
                    <input type="text" name="txtArea" class="form-control"id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                    <label for="Name">User Name</label>
                    <input type="text" name="txtUname" class="form-control"id="exampleInputPassword1" onblur="validateUsername(this,document.getElementById('unameErr'),'Invalid username')">
                    <small id="unameErr" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="Password" name=txtPassword class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" onblur="validatePassword(this,document.getElementById('passErr'),'Invalid Password')">
                        <small id="passErr" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password</label>
                        <input type="Password" name=txtCPassword class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <HR>
                        <input type="submit" class="btn btn-primary" value=Register>
  
                </form>
            </div>      
        </div>
    </div>
</div>

    <!-- 404 End -->
        

    <!-- Footer Start -->
    <?php
        include "Footer.html";
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>