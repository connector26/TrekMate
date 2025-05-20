<?php

include "../connect.php";

$tname=$_POST['txttname'];
$loc=$_POST['txttloc'];
$dur=$_POST['txttdate'];
$members=$_POST['txttpeople'];
$price=$_POST['txtprice'];
$rate=$_POST['txttrate'];
$type=$_POST['txtttype'];
$lead=$_POST['txtlead'];
$dec=$_POST['txtdec'];

$tmpname=$_FILES['tpImg']['tmp_name'];
$fname=$_FILES['tpImg']['name'];

$imgpath="../Uploads/".time()."$fname";

echo "$tname <br> $loc  <br>$dur <br>$members<br> $price <br>$rate<br>$type<br> $lead <br> $dec<br>$imgpath"; 

if(move_uploaded_file($tmpname,"../Uploads/".time()."$fname"))
{  
    $x=pg_query($con,"insert into treks values('$tname','$loc','$dur','$members',$price,$rate,'$imgpath','$type','$lead','$dec')");

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
            if(confirm("Error in Adding trek"))
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
