<?php
    include"../connect.php";
       $rs=pg_query($con,"select count(*) from customer");
       $row=pg_fetch_array($rs);
       $rs1=pg_query($con,"select count(*) from treks");
       $row1=pg_fetch_array($rs1);
       $rs2=pg_query($con,"select count(*) from trek_l");
       $row2=pg_fetch_array($rs2);
        
?>



<main role="main" class="col-md-12 ml-sm-auto col-lg-10 px-md-0 ">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        </div>
    <div class="container">
        <div class=row>
            <div class=col-3>
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total Customer</div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "$row[0]" ; ?></h5>
                        <p class="card-text">Here we have our total numbers of customer,that are using our service and log into the web site.</p>
                    </div>
                </div>
            </div>
            <div class=col-3>
                <div class="card bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total Treks</div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "$row1[0]" ; ?></h5>
                        <p class="card-text">Here we have our total numbers of treks,that we are planning right now and provides Management .</p>
                    </div>
                </div>
            </div>
            <div class=col-3>
                <div class="card bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">Leaders</div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "$row2[0]" ; ?></h5>
                        <p class="card-text">Here we have our total numbers of Trek Leaders,that are helping us to provide this  service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>       
       
      
</main>
