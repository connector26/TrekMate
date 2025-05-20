<?php
  
    include "connect.php";
    
    //echo "'$uname',',$uemail','$udes','$udate','$umsg'";

    $x=pg_query("insert into Bookings values('$uname','$uemail','$udes','$udate','$umsg')");
    if($x)
    {
            ?>
            <script>
                if(confirm("Booked Successfully"))
                    
                else
                    location="index.php";

            </script>
            <?php
    }
    else
    {
        ?>
        <script>
            if(confirm("Error in Booking trek"))
                location="index.php";
            else
                location="index.php";
        </script>
        <?php
    }

?>