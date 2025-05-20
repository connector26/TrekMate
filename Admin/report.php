<?php

include"checklogin.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Trekmate | Admin Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <script src="../js/jquery.js"></script>
    <script src="../js/form_val.js"></script>
    
        <script>
        function showdashboard()
        {
            ob=new XMLHttpRequest();
            ob.open("GET","dashboard.php");
            ob.send();
            ob.onreadystatechange=function()
            {
                if(ob.readyState==4)
                {
                  document.getElementById("showResults").innerHTML=ob.responseText;
                }
                 
            }   
        }

      function showAddtrekForm()
       {
          ob=new XMLHttpRequest();//creating object of ajax.
          ob.open("GET","addnewtrek.php");//configrating that object.
          ob.send();//send that object to newtrek.php to collect info.
          //here we change states of object so we check if object is on readystate or not.
          ob.onreadystatechange=function()
          {
            if(ob.readyState==4)
            {
              document.getElementById("showResults").innerHTML=ob.responseText;
            }
               
          }   
        }
        function showAddleadForm()
       {
          ob=new XMLHttpRequest();//creating object of ajax.
          ob.open("GET","addnewleader.php");//configrating that object.
          ob.send();//send that object to newtrek.php to collect info.
          //here we change states of object so we check if object is on readystate or not.
          ob.onreadystatechange=function()
          {
            if(ob.readyState==4)
            {
              document.getElementById("showResults").innerHTML=ob.responseText;
            }
               
          }   
        }



</script>    


<link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">TrekMate</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>


<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                <a class="nav-link active" href="admindashboard.php">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admindashboard.php">
                    <span data-feather="file"></span>
                    Add New Trek
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admindashboard.php">
                    <span data-feather="bar-chart-2"></span>
                    Add New Leaders
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="showallleaders.php">
                    <span data-feather="bar-chart-2"></span>
                    Leaders
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="showalltreks.php">
                    <span data-feather="shopping-cart"></span>
                    All Treks
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Booking.php">
                    <span data-feather="file"></span>
                    Bookings
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="customer.php">
                  <span data-feather="file"></span>
                  Customer
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="report.php">
                    <span data-feather="layers"></span>
                    Reports
                </a>
                </li>
            </ul>
        </div>
    </nav>

    
    <!--- body part-->
    <div class=col-9>
      
      <div class=container-fluid>
        <div class="row my-1">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Reports</h1>
            </div>
            <div class=container>
                <div class=row>
                    <div class=col-10>
                        <table class=table>
                            <tr><th>Customer Name</th><th>Email</th><th>Meassage</th></tr> 
                            <?php
                                include"../connect.php";
                                $res=pg_query($con,"select * from contactus");
                                while($row=pg_fetch_array($res))
                                {
                            ?>
                            <tr><td><?php echo $row[0];?></td><td><?php echo $row[1];?></td><td><?php echo $row[2];?></td></tr>

                            <?php
                            }
                            ?>
                        </table>
                    </div>           
                </div>
             </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="dashboard.js"></script>
  </body>
</html>


