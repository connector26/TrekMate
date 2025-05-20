<?php
$uname=$_POST['uname'];
$uemail=$_POST['uemail'];
$udate=$_POST['udate'];
$udes=$_POST['udes'];
$umsg=$_POST['umsg'];

include "connect.php";

$rs=pg_query($con,"select * from treks where tname='$udes'");
$row=pg_fetch_array($rs);
?>

<script>
    alert("Are you sure u want Book trek");
    alert("Thank you for confirmation and payment");

</script>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <title>Trekmate | Bill</title>
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
    <script>
       function printpage()
       {  
            window.print();   
       }
    </script>

  </head>
  
  <?php
    
       $traval = ($row[4] * 35)/100 ;
       $Hotel =  ($row[4] * 30)/100 ;
       $fun =  ($row[4] * 15)/100 ;
       $guid =  ($row[4] * 11)/100 ;
       $food =  ($row[4] * 9)/100 ;

  
  ?>
  <body>
    <div id="cont" class="container my-4">
        <div class="row shadow-lg p-3 mb-5 bg-white rounded">
            <div class=col-12>
                <div class="section inclusion-exclusion-section" id="inclusions_exclusions">
                    <div class="content row">
                        <!-- Inclusions -->
                        <div class="inclusions col-2">
                            <img src='img/Logo.png' alt="err" height=100px width=100px>
                        </div>
                        <div class="inclusions col-8">
                            <center><h2 class="text-success">Trekmate</h2>
                            <p class="text-black-50">256 Karve Street,Pune-411030 ,Maharashtra,India | Phone- +91 9881048071 | Mail- support@trekmate.com</p>
                            </center>
                        </div>
                    </div>
                </div>
                <hr>
                
                <hr><br>
                <div class="section inclusion-exclusion-section" id="inclusions_exclusions">
                    <div class="content row">
                        <div class="inclusions col-9">
                        <h4><b>Trek Details:</b></h4>
                            <label><b>Trip Name : </label><?php echo " $row[0]" ;?></b><br>
                            <label><b>Location : </label><?php echo " $row[1]" ;?></b><br>
                            <label><b>Duration : </label><?php echo " $row[2]" ;?></b><br>
                            <label><b>Package for : </label><?php echo " $row[3] mates" ;?></b><br>
                        </div>
                        <div class="inclusions col-3">
                            <h4><b>Trekers Details:</b></h4>
                            <label><b>Name : </label><?php echo " $uname" ;?></b><br>
                            <label><b>Email : </label><?php echo " $uemail" ;?></b><br>
                            <label><b>Destination : </label><?php echo " $udes" ;?></b><br>
                            <label><b>Total amount : </label><?php echo " $row[4] mates" ;?></b><br>
                        </div>
                    </div>
                </div> 
                <hr>   
                    <div class="section inclusion-exclusion-section" id="inclusions_exclusions">
                        <div class="content row">
                        <!-- Inclusions -->
                        <div class="inclusions col-5">
                            <h3 class="title">Amount Destribution</h3>
                            <table>
                                <tr><th>Transportation & Traval:</th><td> <?php echo $traval ; ?></td></tr>
                                <tr><th>Hotel & Camping  Expenses :</th><td> <?php echo $Hotel ; ?></td></tr>
                                <tr><th>Breakfast & Dinner Expenses :</th><td> <?php echo $food ; ?></td></tr>
                                <tr><th>Adventures & fun Activities :</th><td> <?php echo $fun ; ?></td></tr>
                                <tr><th>Guidence & Other Expenses :</th><td> <?php echo $guid ; ?></td></tr>
                                <tr><th>Total Expense :</th><td> <?php echo $row[4] ; ?></td></tr>
                            </table>
                        </div>
                    </div>
                    <br>
               
                <center><img src="<?php echo substr($row[6],3); ?>" hight=800px width=800px>
                <h1>Welcome to our Family</h1></center>
                <br>
                <label><p>Note: your pickup point is near Garware Collage pune </p> </label><br>
            </div>
        </div>
    </div>
    <button onclick="printpage()" class="btn btn-success">Print</button>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>