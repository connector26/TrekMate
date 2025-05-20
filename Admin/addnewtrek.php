<?php

include "checklogin.php";

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-0">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Add New Treks</h1>
    </div>
    <div class=container>
        <div class=row>
            <div class=col-12> 
                <form action=newtrekdata.php method=post enctype="multipart/form-data">
                    <div class="form-group">
                         <h2 for="exampleInputEmail1"></h2>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trek Name</label>
                        <input type="text" name=txttname class="form-control" required>
                        <small id="tnameErr" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Location</label>
                        <input type="text" name=txttloc class="form-control" required >
                        <small id="tlocErr" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Duration</label>
                        <input type="text" name=txttdate class="form-control" required>
                        <small id="tdateErr" class="form-text text-danger"></small>
                    </div>  
                    <div class="form-group">
                        <label for="exampleInputPassword1">Members</label>
                        <select name=txttpeople class="form-control" required >
                            <option value='1'>Solo</option>
                     
                            <option value='2'>Two</option>

                            <option value='4'>Four</option>
                        
                            <option value='6'>Six</option>
                        </select>
                    </div>
                     
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trek Price Rs.</label>
                        <input type="text" name=txtprice class="form-control" onblur="validatePrice(this,document.getElementById('priceErr'),'Invalid Price')" required >
                        <small id="priceErr" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Rating</label>
                        <select name=txttrate class="form-control" required >
                            <option value='1'>one</option>
                     
                            <option value='2'>Two</option>

                            <option value='3'>Three</option>
                        
                            <option value='4'>Four</option>

                            <option value='5'>Five</option>
                        </select>
                    </div> 
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Select Cover Image</label>
                        <input type="file" name=tpImg class="form-control" required >
                        <small id="" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trek Type</label>
                        <select name=txtttype class="form-control" required >
                            <option value='Camping'>Camping</option>
                     
                            <option value='Road trips'>Road trips</option>

                            <option value='Monsoon'>Monsoon</option>
                        
                            <option value='Forts'>Forts</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trek Leader</label>
                        <input type="text" name=txtlead class="form-control" onblur="validateName(this,document.getElementById('tleadErr'),'Invalid Name')" required >
                        <small id="tleadErr" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trek description</label>
                        <input type="text" name=txtdec class="form-control" onblur="validateName(this,document.getElementById('tleadErr'),'Invalid Name')" required >
                        <small id="tleadErr" class="form-text text-danger"></small>
                    </div>
                    <hr>
                    <input type="submit" class="btn btn-primary" value="Save Trek">
                </form>
            </div>
        </div> 
    </div>
</main>
