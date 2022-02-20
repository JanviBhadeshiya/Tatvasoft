<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>book_service</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../assets/css/book_service.css" />
    <link rel="stylesheet" href="../assets/css/footer.css"/>
  </head>
  <body>
     
    <nav class="d-flex justify-content-between align-items-center text-white">
      <div class="nav-block">
        <div class="header-minilogo">
          <a class="d-block" href="index.html">
            <img src="../assets/img/logo-small.png" alt="logo" />
          </a>
         
        </div>
        <div class="responsive_nav">
          <button id="booknow" href="#">Book now</button>
          <button id="priceandservice" href="prices.php">Prices & service</button>
          <a class="header-navbar" href="#">Warranty</a>
          <a class="header-navbar" href="#">Blog</a>
          <a class="header-navbar" href="#">Contact</a>
          <button id="loginbttn" class="sp-btn">Login</button>
          <button id="becomehelper" class="sp-btn">Become a Helper</button>
        </div>
      </div>
    </nav>
    <section class="faq-banner">
			<img src="../assets/img/book-service-banner.jpg" alt="faqHeaderImage" style="max-width:100%;height:auto;">
		</section>
    <section class="faqTop container">
			<div class="flex-column d-flex align-items-center justify-content-center">
				<div class="faqHeader">Set up your cleaning service</div>
				<div class="faHeaderDecoration w-100 d-flex align-items-center justify-content-center">
					<span></span>
					
					<img src="../assets/img/forma-1-copy-5.png" />
					<span></span>
				</div>			
			</div>
      <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-3 booktab tabclick" id="tab1" onclick="Tab1Click()" >
                            <p>
                                <img src="../assets/img/setup-service.png">
                                <span>Setup Service</span>
                            </p>
                            <div class="box arrow_rotate">

                            </div>
                        </div>
                        <div class="col-3  booktab" id="tab2" onclick="Tab2Click()">
                            <p>
                                <img src="../assets/img/schedule.png">
                                <span>Schedule & Plan</span>
                            </p>
                            <div class="box">

                            </div>
                        </div>
                        <div class="col-3 booktab" id="tab3" onclick="Tab3Click()">
                            <p>
                                <img src="../assets/img/details.png" style="margin-top: -5px;">
                                <span>Your Details</span>
                            </p>
                            <div class="box">

                            </div>
                        </div>
                        <div class="col-3 booktab" id="tab4"  onclick="Tab4Click()">
                            <p>
                                <img src="../assets/img/payment.png">
                                <span>Make Payment</span>
                            </p>
                            <div class="box">

                            </div>
                        </div>
                    </div>

                    <!------------------------------------ SetUp Service  ------------------------------------------->
                    <section id="setup_service" >
                        <p class="postal_code_hd">Postal Code</p>

                        <div class="postal_input">
                            <input class="postal" type="number" placeholder="Postal Code">
                            <button type="button" class="buttonaccept" id="check_availability" onclick="SearchZipCode()">Check Availability</button>
                        </div>
                    </section>
                    <!------------------------------------End of  SetUp Service  ------------------------------------------->

                    <!--------------------------------------- Schedule & Plan  ------------------------------------------->
                    <section id="schedule_plan" >
                        <div class="row">
                            <div class="col-md-5">
                                <p class="need_cleaner">When do you need the cleaner?</p>

                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group" style="width: 100%;">
                                            <div class='input-group date' id='datetimepicker1' class="date">
                                              
                                        <input type="date" class="form-control date_SP" placeholder="To Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 ">
                                        <select id="inputState" class="form-control">
                                            <option selected>8:00</option>
                                            <option>9:00</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-6">
                                <p class="need_cleaner">How long do you need cleaner to stay?</p>

                                <select id="inputState" class="form-control" style="width: 100px;">
                                    <option>8:00</option>
                                    <option>9:00</option>
                                </select>
                            </div>
                        </div>

                        <hr>
                    <!--------------------------------------- End Schedule & Plan  ------------------------------------------->

                        <!------------------------------------ Extra Service Option  ---------------------------------------->
                        <div class="extra_service">
                            <p class="need_cleaner">Extra Service</p>

                            <div class="services">
                                <button class="Extra_service_btn" >
                                <div class="extra_service_option" >
                                    <div>
                                        <img id="img1" onclick="cabinet()" src="../assets/img/3.png">
                                        <img id="img2" onclick="cabinet_book()" src="../assets/img/3-green.png">
                                    </div>
                                    <p class="text-center">Inside Cabinet</p>
                                </div>
                                </button>
                                <button class="Extra_service_btn">
                                <div class="extra_service_option" >
                                    <div>
                                        <img id="img3" onclick="fridge()" src="../assets/img/5.png">
                                        <img id="img4" onclick="fridge_book()" src="../assets/img/5-green.png">
                                    </div>
                                    <p class="text-center">Inside fridge</p>
                                </div>
                                </button>
                                <button class="Extra_service_btn">
                                <div class="extra_service_option">
                                    <div>
                                        <img id="img5" onclick="oven()"src="../assets/img/4.png" >
                                        <img  id="img6" onclick="oven_book()" src="../assets/img/4-green.png">
                                    </div>
                                    <p class="text-center">Inside oven</p>
                                </div>
                                </button>
                                <button class="Extra_service_btn">
                                <div class="extra_service_option" >
                                    <div>
                                        <img id="img7" onclick="washing()" src="../assets/img/2.png" >
                                        <img  id="img8" onclick="washing_book()" src="../assets/img/2-green.png">
                                    </div>
                                    <p class="text-center">Laundry wash & dry</p>
                                </div>
                                </button>
                                <button class="Extra_service_btn">
                                <div class="extra_service_option" >
                                    <div>
                                        <img id="img9" onclick="window1()" src="../assets/img/1.png">
                                        <img  id="img10" onclick="window_book1()" src="../assets/img/1-green.png">
                                    </div>
                                    <p class="text-center">Inferior window</p>
                                </div>
                                </button>
                            </div>
                        </div>

                        <hr>

                        <p class="need_cleaner comments">Comments</p>

                        <textarea id="comments" name="comments" class="comment_textbox" rows="3"
                            style="width: 100%; resize: none;" placeholder="Comments"></textarea>

                        <div class="my-2">
                            <input type="checkbox" id="pets" name="pets">
                            <label for="pets">I have pets at home</label>
                        </div>

                        <hr>

                        <div>
                            <button class="buttonaccept float-right" id="continue_schedulePlan" onclick="SaveServiceDetail();">Continue</button>
                        </div>

                    </section>
                        <!------------------------------------ End of Extra Service Option  ---------------------------------------->

                    <!------------------------------------ Your Details  ------------------------------------------------>
                    <section id="your_details" style="display: none;" >
                        <p class="need_cleaner">Enter your contact details, so we can serve you in better way!</p>
                        <div class="new_address">

                        <div class="radio_address">
                            <div class="row">
                                <div class="col-1" style="margin: auto;width: 100%;">
                                    <input type="radio" id="address_ckbox" name="address" value="address1"
                                        style="margin: 0 auto;">
                                </div>
                                <div class="col-11">
                                    <label for="address1">
                                        <p style="margin-bottom: 0px;"><b>Address:</b> <div class="add">Koenigstrasse 112,Tambach-Dietharz  99897
                     
                                            </div></p>
                                        <p style="margin-bottom: 0px;"><b>Phone number:</b> 9955648797</p>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="radio_address my-2">
                            <div class="row">
                                <div class="col-1" style="margin: auto;width: 100%;">
                                    <input type="radio" id="address_ckbox" name="address" value="address2"
                                        style="margin: 0 auto;">
                                </div>
                                <div class="col-11">
                                    <label for="address2">
                                        <p style="margin-bottom: 0px;"><b>Address:</b> Koenigstrasse 111,
                                            Tambach-Dietharz
                                            99897</p>
                                        <p style="margin-bottom: 0px;"><b>Phone number:</b> 9955648797</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        </div>

                        <button class="add_address" onclick="add_address()"> + Add New Address</button>
                    <!------------------------------------End of Your Details  ------------------------------------------------>

                        <!-------------------------------------- Add New Address Form  ----------------------------------------->

                        <div class="add_new_address" id="new_address" style="display: none;">
                        <?php $base_url='../index1.php'?>
                            <form method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="street_name"  class="m-1" >Street Name</label>
                                        <input type="text" id="street" name="street" class="form-control" placeholder="Street name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="house_no" class="m-1" >House No</label>
                                        <input type="number" id="houseno" name="houseno" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="postal_code"  class="m-1">Postal Code</label>
                                        <input type="number" id="pincode" name="postal" class="form-control" placeholder="Postal_code">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city"   class="m-1">City</label>
                                        <input type="text" id="location"  name="city" class="form-control" placeholder="City">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="postal_code" class="m-1">Phone number</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">+49</div>
                                            </div>
                                            <input type="text"  id="mobilenum" name="mobilenum" class="form-control" id="inlineFormInputGroup"
                                                placeholder="Phone number">
                                        </div>
                                    </div>
                                </div>

                                <button class="buttonaccept addresssave" id="save_address_btn"  style="padding: 5px 15px;">Save</button>
                                <button class="buttonaccept" type="button" onclick="cancel_address()">Cancel</button>

                            </form>

                        </div>

                        <p class="need_cleaner">Your Favourite Service Provider</p>
                        <hr style="margin: 2px;">
                        <p>You can choose your favourite service provider from the below list</p>                   

                        <hr>

                        <div>
                            <button class="buttonaccept float-right" id="continue_details" onclick="SaveAddress()">Continue</button>
                        </div>


                    </section>
                        <!--------------------------------------End of  Add New Address Form  ----------------------------------------->

                    <!------------------------------------- Make Payment  ------------------------------------------------------>
                    <section id="make_payment" style="display: none;">
                        <p class="need_cleaner">Pay securely with Helperland payment gateway!</p>

                        <p class="mb-0 mt-3 mx-1">Promo Code (Optional)</p>

                        <div class="postal_input">
                            <input type="text" class="promocode" placeholder="Promo Code (Optional)">
                            <button type="button" class="add_address ml-2" style="display: inline;">Apply</button>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-sm-8 card_input">
                                <i class="far fa-credit-card"></i>
                                <input type="text" class="card_number" placeholder="Card Number" name="card_number">
                            </div>
                            <div class="col-sm-2 card_input">
                                <input type="text" class="mmyy" placeholder="MM/YY" name="mmyy">
                            </div>
                            <div class="col-sm-2 card_input">
                                <input type="text" class="cvc" placeholder="CVC" name="cvc" style="width: 100%;">
                            </div>
                        </div>

                        <hr style="margin: 2px 0px 16px;">

                        <p class="accpted_card">Accepted Card</p>
                        <div class="card_accepted">
                            <img src="../assets/img/american-express.jpg">
                            <img src="../assets/img/mastercard.png">
                            <img src="../assets/img/Visa.png">
                        </div>

                        <hr style="clear: both;">
                        <div style="clear: both;" class="terms">

                            <div class="row">
                                <div class="col-1">
                                    <input type="checkbox" name="terms" style="margin: auto;" required>
                                </div>
                                <div class="col-11 pl-2">
                                    <label for="terms">I accepted terms and condition, the cancellation policy and the
                                        privacy
                                        policy. I confirm that helperland start to execute the contract before the
                                        expiry of the
                                        withdrawal period and I lose my right of withdrawal as a consumer with full
                                        performance of the contract.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div>
                            <button type="submit" class="buttonaccept float-right"  id="complete_booking" >Complete Booking</button>
                        </div>
                        <!-- <div>
                            <button class="buttonaccept float-right" id="complete_booking" data-toggle="modal"
                                data-target="#complete_booking_modal">Complete Booking</button>
                        </div> -->
                    <!------------------------------------- End of Make Payment  ------------------------------------------------------>

                        <!------------------------------------------ Complete Booking Modal ------------------------------------------>

                        <!-- <div class="modal fade" id="complete_booking_modal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="border-bottom:none ;">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="complete_box">
                                            <img src="image1/paymentdone.png" alt="">
                                            <p>Booking has been successfully submitted</p>
                                            <p class="request_id">Service Request Id: 8488</p>
                                            <button class="buttonaccept" style="width: 80px; margin: 0 auto;"
                                                data-dismiss="modal">Ok</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </section>
                        <!------------------------------------------End of  Complete Booking Modal ------------------------------------------>


                </div>
                <div class="col-lg-4">

                    <!----------------------------------------- Payment Summary  ------------------------------------------------>
                    <div class="payment_summary">
                        <div class="heading_ps">
                            <p>Payment Summary</p>
                        </div>

                        <div class="duration">
                            <p>Duration</p>
                            <p>Basic <span>0 Hrs</span></p>
                        </div>

                        <div class="schedule_price">
                            <div class="duration">
                                <p>Extras</p>
                                <p>Inside Cabinet <span>30 min</span></p>
                                <p>Inside fridge <span>30 min</span></p>
                            </div>
                        </div>

                        <hr>

                        <div class="duration pt-0">
                            <p>Total Service Time <span class="total_time">3 Hrs</span></p>
                        </div>

                        <hr>

                        <div class="duration pt-0">
                            <p>Per Cleaning <span>30 €</span></p>
                        </div>

                        <hr>

                        <div class="total_payment">
                            <p>Total Payment <span class="total_pay">600 €</span></p>
                        </div>

                        <div class="what_included">
                            <p>
                                <i class="far fa-smile"></i>
                                See what is always included
                            </p>
                        </div>

                    </div>

                    <div class="question">
                        <p class="question_heading">Question?</p>

                        <p class="accordion">
                            <img src="../assets/img/right-arrow-grey.png" alt="" >&nbsp;
                            What's included in training?
                        </p>
                        <div class="panel">
                            <p>Lorem</p>
                        </div>

                        <hr>
                        <p class="accordion">
                            <img src="../assets/img/right-arrow-grey.png" alt="" >&nbsp;
                            Which helperland profession will come to my place?
                        </p>
                        <div class="panel">
                            <p>Lorem</p>
                        </div>

                        <hr>
                        <p class="accordion">
                            <img src="../assets/img/right-arrow-grey.png" alt="" ">&nbsp;
                            Can I skip or Reschedule booking?
                        </p>
                        <div class="panel">
                            <p>Lorem</p>
                        </div>

                        <hr>

                        <p class="more_help">For more help</p>
                    </div>

                </div>
            </div>
        </div>

		</section>
<section>
    <?php include('footer.php')?>
</section>
        
        <script type="text/javascript" src="../assets/js/boo_service.js"></script>   
        <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </body>
</html>
      