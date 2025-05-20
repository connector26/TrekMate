<?php

include"checklogin.php";

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-0">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Add New Leader</h1>
    </div>
    <div class=container>
        <div class=row>
            <div class=col-12> 
                <form action=newleaddata.php method=post enctype="multipart/form-data">
                    <div class="form-group">
                         <h2 for="exampleInputEmail1"></h2>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Leader ID</label>
                        <input type="text" name=txtlid class="form-control" required>
                        <small id="lidErr" class="form-text text-danger"></small>                  
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Leader Name</label>
                        <input type="text" name=txtlname class="form-control" required>
                        <small id="tnameErr" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mobile</label>
                        <input type="text" name=txtmob class="form-control" required >
                        <small id="mobErr" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
                        <input type="text" name=txtstatus class="form-control" required>
                        <small id="tstatusErr" class="form-text text-danger"></small>
                    </div>    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Leader's Image</label>
                        <input type="file" name=lpImg class="form-control">
                        <small id="" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Position</label>
                        <input type="text" name=txtpos class="form-control" onblur="validateName(this,document.getElementById('tleadErr'),'Invalid Name')" required >
                        <small id="tleadErr" class="form-text text-danger"></small>
                    </div>
                    <hr>
                    <input type="submit" class="btn btn-primary" value="Add Leader">
                </form>
            </div>
        </div> 
    </div>
</main>
