<?php

include "../connect.php";

$lid=$_POST['txtlid'];
$lname=$_POST['txtlname'];
$mob=$_POST['txtmob'];
$status=$_POST['txtstatus'];
$pos=$_POST['txtpos'];

$tmpname=$_FILES['lpImg']['tmp_name'];
$fname=$_FILES['lpImg']['name'];

$imgpath="../Uploads/".time()."$fname";

echo "$lid <br> $lname <br> $mob  <br>$status <br> $rev <br> $imgpath"; 

if(move_uploaded_file($tmpname,"../Uploads/".time()."$fname"))
{  
    $x=pg_query($con,"insert into trek_l values($lid,'$lname','$mob','$status','$imgpath','$pos')");

    if($x)
    {
        ?>
        <script>
            if(confirm("Added Successfully"))
                location="admindashboard.php";
            else
                location="admindashboard.php";

        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            if(confirm("Error in Adding leader"))
                location="admindashboard.php";
            else
                location="admindashboard.php";

        </script>
        <?php
    }
}
else
{
        ?>
        <script>
            if(confirm("Image Uploading Error"))
                location="admindashboard.php";
            else
                location="admindashboard.php";

        </script>
        <?php
}

?>
