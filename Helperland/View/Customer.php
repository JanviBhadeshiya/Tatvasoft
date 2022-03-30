<?php include('./header.php'); 

$base_url = "http://localhost:8080/Helperland/";
?>


<link rel="stylesheet" href="./assets/css/Customer.css">


<title>Customer</title>
</head>

<body>
    <header>
        <?php include('./navbar.php'); ?>
    </header>
    <!--add or edit address-->
    <div class="modal fade" id="addedit_address_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" id="mod" role="document">
            <div class="modal-content addmodal">
          
            </div>
        </div>
    </div>
    <!--Service detail Modal-->
    <div class="modal fade" id="servicedetailmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" id="mod" role="document">
            <div class="modal-content SD">
                
            </div>
        </div>
    </div>
    <!--reschedule modal-->
    <div class="modal fade" id="reschedule_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Reschedule Service Request</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="register-inputs me-0 ms-0">
                        <label class="cancel-question "><b>Select New Date and Time</b></label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="input-element rescheduledate" type="date" id="formdate" name="formdate" data placeholder="From Date">                   
                            </div>
                            <div class="col-sm-6">
                                <select name="booktime" class="rescheduletime" id="booktime">
                                    <option value=0>00:00</option>
                                    <option value="3:00">3:00 PM</option>
                                    <option value="4:00">4:00 PM</option>
                                    <option value="5:00">5:00 PM</option>
                                    <option value="6:00">6:00 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-update">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!--cancel-->
    <div class="modal fade" id="cancel_bookingrequest_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle"><b>Cancel Service Request</b></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="register-inputs me-0 ms-0">
                        <label class="cancel-question temp"><b>Why you want to cancel the service request?</b></label>
                        <textarea class="why-cancel" name="whycancel"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="submit" class="btn btn-cancelnow">Cancel Now</button>
                </div>
            </div>
        </div>
    </div>

    <!--Rate SP-->
    <div class="modal fade" id="ratesp_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ratesp">
               
            </div>
        </div>
    </div>

     <!--section-2-1--> 
     <section class="section-2-1">
     <div class="container">
        <h2 class="text-center">
         Welcome, <strong> <?php echo $_SESSION['name']; ?> !</strong>
        </h2> 
     </div>
    </section>
     <!--section-2-2-->
    <section class="section-2-2">
        <div class="row dashboard justify-content-center" id="dashboard">
            <!-- left nav -->
            <div class="col-3">
                <div class="nav flex-column nav-pills leftsidebar" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">Dashboard</a>
                    <a class="nav-link" id="v-pills-history-tab" data-toggle="pill" href="#v-pills-history" role="tab" aria-controls="v-pills-history" aria-selected="false">Service History</a>
                    <a class="nav-link" id="v-pills-schedule-tab" data-toggle="pill" href="#v-pills-schedule" role="tab" aria-controls="v-pills-schedule" aria-selected="false">Service Schedule</a>
                    <a class="nav-link" id="v-pills-favpro-tab" data-toggle="pill" href="#v-pills-favpro" role="tab" aria-controls="v-pills-favpro" aria-selected="false">Favourite Pros</a>
                    <a class="nav-link" id="v-pills-invoice-tab" data-toggle="pill" href="#v-pills-invoice" role="tab" aria-controls="v-pills-invoice" aria-selected="false">Invoices</a>
                    <a class="nav-link" id="v-pills-notification-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-notification" aria-selected="false">Notifications</a>
                </div>
            </div>
            <!-- ended nav -->
            <!-- content -->
            <div class="col-9" id="rightside">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                        <div class="container-fluid row">
                            <div class="mr-auto "><h3 class="serhist">Current Service Requests</h3></div>
                            <a class="btn ml-auto export text-white" href="http://localhost:8080/Helperland/?controller=Helperland&function=gotobookservicepage">Add New Service Request</a>
                        </div>
                        <div class="container-fluid row db" > 
                            <div class="col dboard">
                               
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
                        <div class="container-fluid row">
                            <div class="mr-auto  "><h3 class="serhist">Service History</h3></div>
                            <form method="POST" action="http://localhost:8080/Helperland/?controller=Helperland&function=exporthistory">
                                <button type="submit" class="btn ml-auto export" id="export">Export</button>
                            </form>
                            
                        </div>
                        <div class="container-fluid row" id="rightsidebar"> 
                            <div class="col history">
                               
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-schedule" role="tabpanel" aria-labelledby="v-pills-schedule-tab">
                        <span> Nice to have feature </span>
                    </div>
                    <div class="tab-pane fade    show active" id="v-pills-favpro" role="tabpanel" aria-labelledby="v-pills-favpro-tab">
                        <div class="card-customer favpro">
                            <div class="card">
                                <div class="customer-image"><img src="./assets/Image/forma-1-copy-19.png" alt="" alt=""></div>
                                <div class="customer-name"><b></b></div>
                                <div class="row rates justify-content-center">
                                    <div class="rateyo fav" id= "rating"  data-rateyo-rating=""></div>
                                </div>
                                <div class="cleanings text-center mb-2"><span>1 Cleanings</span></div>
                                <div class="block-unblock-button">
                                    <button class="add-button">Remove</button>
                                    <button class="block-button">Block</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="customer-image"><img src="./assets/Image/forma-1-copy-19.png" alt="" alt=""></div>
                                <div class="customer-name"><b></b></div>
                                <div class="row rates justify-content-center">
                                    <div class="rateyo fav" id= "rating"  data-rateyo-rating=""></div>
                                </div>
                                <div class="cleanings text-center mb-2"><span>1 Cleanings</span></div>
                                <div class="block-unblock-button">
                                    <button class="add-button">Remove</button>
                                    <button class="block-button">Block</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-invoice" role="tabpanel" aria-labelledby="v-pills-invoice-tab"></div>
                    <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab">
                        <div class="customer-table mysetting">
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-setting details active">My Details</button>
                                <button class="btn btn-setting addresses">My Addresses</button>
                                <button class="btn btn-setting password">Change Password</button>
                            </div>
                            <div class="button-body">
                                <div class="details-body">
                                   
                                </div>
                                <div class="address-body">
                                    <table class="address-table">
                                        <thead>
                                            <tr>
                                                <th>Addresses</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="addressinsettings">
                                          
                                        </tbody>
                                    </table>
                                    <div><button class="addnewaddress">Add New Address</button></div>
                                </div>
                                <div class="password-body">
                                    <div class="password_error text-danger"></div>
                                    <div>
                                        <label class="password-label" for="oldpassword">Old Password</label> <br>
                                        <input class="password-input" type="password" name="oldpassword" placeholder="Current Pasword">
                                    </div>
                                    <div>
                                        <label class="password-label" for="newpassword">New Password</label> <br>
                                        <input class="password-input" type="password" name="newpassword" placeholder="Password">
                                    </div>
                                    <div>
                                        <label class="password-label" for="confirmpassword">Confirm Password</label> <br>
                                        <input class="password-input" type="password" name="confirmpassword" placeholder="Confirm Password">
                                    </div>
                                    <div><button class="password-save">Save</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--content ended -->
        </div>
    </section>
    
    <?php include('./footer.php'); ?>
    <script src="./assets/js/customer.js"></script>
    <script src="./assets/js/session.js"></script>
    
    
</body>
</html>