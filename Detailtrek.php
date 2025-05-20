<?php

include "connect.php";

$tname=$_GET['tname'];

$res=pg_query($con,"select * from treks where tname='$tname'");
$row=pg_fetch_array($res);

?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <title>Trekmate | Detail Treks</title>
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
  <body>
    <div id="cont" class="container my-4">
        <div class="row shadow-lg p-3 mb-5 bg-white rounded">
            <div class=col-12>
                <center><h2 class="text-success">Trekmate</h2>
                    <p class="text-black-50">256 Karve Street,Pune-411030 ,Maharashtra,India | Phone- +91 9881048071 | Mail- support@trekmate.com</p>
                </center>
                <hr>
                <h4><b>Trek Details:</b></h4>
                <center><img src="<?php echo substr($row[6],3); ?>" hight=800px width=800px></center>
                <br>
                <label><b>Trip Name : </label><?php echo " $row[0]" ;?></b><br>
                <label><b>Location : </label><?php echo " $row[1]" ;?></b><br>
                <label><b>Duration : </label><?php echo " $row[2]" ;?></b><br>
                <label><b>Package for : </label><?php echo " $row[3] mates" ;?></b><br>
                <div class="section inclusion-exclusion-section" id="inclusions_exclusions">
                    <div class="content row">
                        <!-- Inclusions -->
                        <div class="inclusions col-5">
                            <h3 class="title">What is included in the tour</h3>
                            <ul>
                                <li>Transportation in non ac sleeper or seater&nbsp;buses from Pune and back</li>
	                            <li>Transportation from Hospet to <?php echo $row[1];?> and back</li>
                                <li><?php echo $row[2];?> sightseeing tour</li>
                                <li>Accommodation</li>
                                <li>Entry charges to the monuments</li>
                                <li>Bonfire ( If available)</li>
                                <li><?php echo substr($row[2],0,2);?>Breakfast and <?php echo substr($row[2],0,2);?> Dinners</li>
                                <li>Coracle ride</li>
                                <li>Cliff Jumping charges</li>
                                <li>Auto Sightseeing charges for day 2</li>
                                <li>Bike charges (with 1 liter petrol)</li>
                                <li>All internal transfers</li>
                                <li>Fun games</li>
                                <li>Trekmate expertise</li>
                                <li>Guide charges</li>
                            </ul>
                        </div>
                        <!-- Exclusions -->
                        <div class="exclusions col-5">
                            <h3 class="title">What is NOT included in the tour</h3>
                            <ul>
                                <li>Anything not mentioned above</li>
                                <li>Lunch</li>
                                <li>Food during bus travel</li>
                                <li>Any personal medical/emergency/evacuation charges etc</li>
                                <li>5% GST will be added during checkout</li>
                                <li>Transaction charges depending upon the mode of payment will be charged by Razorpay(Use NEFT option to pay and save gateway charges)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="additional-field-as-section">
                        <div class="section-title">
                            <div class="heading uppercase title h2">
                            FAQ's
                        </div>
                    </div>
                    <div class="content">
                        <p class="title"> <strong>1. Is traveling solo a feasible plan?</strong></p>
                        <ul>	
                            <li>Solo trips are quite enjoyable. We are sure you will find your very own traveling family here.</li>
                        </ul>
                        <p><strong>2. If I’m the only Female on the <?php echo " $row[0]" ;?>, is it safe for me to travel?</strong></p>
                        <ul>
                            <li>We generally have many females&nbsp;joining us on our trips so there are high chances that you are not the only female&nbsp;on the <?php echo " $row[0]" ;?>. We have well-trained staff ( Both local support and team joining from respective city) &amp; girls safety is of prime importance to us. We assure&nbsp;you that you will be with safe and reliable people throughout the trip. In case you face any issues regarding female safety, get in touch with safety cell - 8669021690</li>
                        </ul>
                        <p><strong>3. What is the group size for this trip?</strong></p>
                        <ul>
                            <li>We prefer to have a group of 5-15 people on our&nbsp;Trip as we intend to have more fun and give personal care.</li>
                        </ul>
                        <p><strong>4. Who will accompany us on the&nbsp;Trip?</strong></p>
                        <ul>
                            <li>All events are led by professional and trained team captains, who assure that your trip runs smoothly as per mentioned plan or are in charge of any change of plan in case of any natural calamity or things/events not in human control.</li>
                        </ul>
                        <p><strong>5. What type of accommodation is provided on the <?php echo " $row[0]" ;?>?</strong></p>
                        <ul>	
                            <li>We provide accommodation on a dual/triple sharing basis at our Hotel in trip Location. All rooms are well equipped with basic facilities like clean mattresses, cushions, blankets, and clean and sanitized washrooms.</li>
                        </ul>
                        <p><strong>6. How many trippers will be in a room on the <?php echo " $row[0]" ;?>?</strong></p>
                        <ul>
                            <li>Usual sharing would be dual occupancy with the same gender. We might have triple occupancy&nbsp;in case of an odd male-female ratio. We also have a "Couple&nbsp;Room Option" available with us, which you can select will booking.&nbsp;</li>
                        </ul>
                        <p><strong>7. Will we be provided Jain food on the <?php echo " $row[0]" ;?>?</strong></p>
                        <ul>
                            <li>Yes, for the breakfast included in our package we will provide Jain food. For other meals which are not included, we will make sure that we visit the cafes that provide Jain food. Please inform us of your food preferences in the notes section while making the bookings.</li>
                        </ul>
                        <p><strong>8. Can we drink alcohol or smoke during the <?php echo " $row[0]" ;?>?</strong></p>
                        <ul>
                            <li>Yes, you can drink alcohol only on the day of your stay in Hotel (only at night). Smokers can smoke but you have to make sure that you don’t make others uncomfortable.</li>
                        </ul>
                       
                    </div>
                </div>
                <label><b>Pickup Point : Near Garware Collage pune </label></b><br>
            </div>
        </div>
    </div>
    <button onclick="printpage()" class="btn btn-success" >Print</button>


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