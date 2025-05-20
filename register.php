<?php

  include "connect.php";
      
    $un=$_POST['txtUname'];
    $ps=$_POST['txtPassword'];
    $cps=$_POST['txtCPassword'];
    $name=$_POST['txtName'];
    $mobile=$_POST['txtMobile'];
    $email=$_POST['txtEmail'];
    $address=$_POST['txtAddress'];
          
    $x=pg_query($con,"insert into customer values('$mobile','$name','$address','$email','$ps')");
     
    if($x)
    {
	  ?>
       <script>
          if(confirm("Registeration Successful"))
              location="index.php";
          else
              location="index.php";
        </script>
<?php
        }
       
?>