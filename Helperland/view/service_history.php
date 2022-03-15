<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service_History</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../assets/css/service_history.css" />
    <link rel="stylesheet" href="../assets/css/book_service.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="d-flex justify-content-between align-items-center text-white">
    <div class="nav-block ">
      <div class="header-minilogo">
        <a class="d-block" href="index.html">
          <img src="../assets/img/logo-small.png" alt="logo" />
        </a>
        <!-- <div class="hamburger h1 me-3"></div> -->
      </div>
      <div>
        <div class="menu nav">
          <ul class="nav">
            <li>
              <button class="booknow" href="#">Book now</button>
            </li>

          <a class="header-navbar" href="#">Prices & service</a>
          <a class="header-navbar" href="#">Warranty</a>
          <a class="header-navbar" href="#">Blog</a>
          <a class="header-navbar" href="#">Contact</a>
        <li class>
          <div class="vertical_line">
        </li>
        <li class="notification">
          <div
            class="align-items-center justify-content-center"
            id="notification"
          >
            <a href="#"></a>
               <img src="../assets/img/icon-notification.png"/>
            </a>
          </div>
        </li>
        <li>
          <div class="vertical_line"></div>
        </li>
        <li class="dropdown">
         
            <img src="../assets/img/user.png" class="arow" />
            <img class="dropdown" src="../assets/img/sp-arrow-down.png" />
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><p>Welcome,Gaurang</p></li>
            <hr>
            <li><a onclick="dashboard()" href="#">My Dashboard</a></li>
            <li><a onclick="mysetting()" href="#">My Setting</a></li>
            <li><a href="#">Log Out</a></li>
          </ul>
          
         
        </li>
      </ul>
      </div>
    </div>
  </div>
  </nav>
           
    
      <div id="hellosandip">
        
        <div id="hellosandipfontsize">Welcome, <b>Gaurang!</b></div>
        
  
      </div>
      <div class="left_table">
        <div class="nav">
          <div class="l_table_row">
            <p onclick=" dashboard()" class="l_table_text">Dashboard</p>
            <div class="l_table_line"></div>
            <div class="green">
              <p onclick="service_history()" class="l_table_text">Service History</p>
            </div>
            <div class="l_table_line"></div>

            <p class="l_table_text">Services Schedule</p>
            <div class="l_table_line"></div>

            <p class="l_table_text">Favourite Pros</p>
            <div class="l_table_line"></div>

            <p class="l_table_text">Invoices</p>
            <div class="l_table_line"></div>

            <p class="l_table_text">Notifications</p>
            <div class="l_table_line"></div>
          </div>
          
          <div id="my_setting" style="display: none;">
          <div class="row1">
                        <div class="col-7 booktab tabclick" id="tab1" onclick="Tab1Click()" >
                            <p>
                                
                                <span>My details</span>
                            </p>
                            <div class="box arrow_rotate">

                            </div>
                        </div>
                        <div class="col-7 booktab" id="tab2" onclick="Tab2Click()">
                            <p>
                                
                                <span>My Address</span>
                            </p>
                            <div class="box">

                            </div>
                        </div>
                        <div class="col-7 booktab" id="tab3" onclick="Tab3Click()">
                            <p>
                                
                                <span>Change Password</span>
                            </p>
                            <div class="box">

                            </div>
                        </div>
                       
                    </div>
           
                    <!-- My details -->
                    <div class="my_details" id="My_details">
            <div class="my_details_content">
              <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group" >
                                    <label>First name</label>
                                    <input type="text" id="fname" value="firstname" class="form-control" placeholder="Firstname">
                                </div>

                            </div>
                            <div class="col-sm-4 ">
                                <div class="form-group" >
                                    <label>Last name</label>
                                    <input type="text"id="lname" value="lastname" class="form-control" placeholder="Lastname">
                                </div>
                            </div>
                            <div class="col-sm-4" >
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" id="mail" value="email" class="form-control" placeholder="123@gmail.com">
                                </div>
                            </div>
              </div>
              <div class="row2">
                               <div class="col-sm-4">
                                <label>Mobile Number</label>
                                <div class="input-group">
                                    <span class="input-group-text" >+49</span>
                                    <input type="text" id="mobilenum" class="form-control" placeholder="Phone Number">
                                  </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" id="dob" value="birthdate" class="form-control" placeholder="26/03/2001">
                                </div>
                            </div>
              </div>
              <div>
              <button onclick="detailes_save()" class="cancel-btn cancel-text">
                    Save
                  </button>
              </div>
            </div>
            
          </div> 
          <!-- My Address -->
          <div class="My_address" id="my_address" style="display: none;">
            <table class="r_table_row"  ><thead>
              <tr class="background-grey">
                <th>
                  Address
                </th>
                <th class="add_space">
                  Action
                </th>
              </tr>
              </thead>
              <tbody class="addressbody">
              <tr>
                <td>
                  <div><b>Address:</b> Second Street 23, 53225 Bonn</div> 
                  <div><b>Phone number:</b> 9988556644</div>
                </td>
                <td class="add_space">
                <button onclick="edit_address()" class="reschedule-btn cancel-text">
                      Edit
                    </button>
                    <button class="cancel-btn2 cancel-text">
                      Delete
                    </button>
                </td>
             </tr>
              </tbody>
            </table>
             <!-- <tr>
                <td>
                  <div><b>Address:</b> Second Street 23, 53225 Bonn</div> 
                  <div><b>Phone number:</b> 9988556644</div>
                </td>
                <td class="add_space">
                <button  onclick="edit_address()" class="reschedule-btn cancel-text">
                      Edit
                    </button>
                    <button class="cancel-btn2 cancel-text">
                      Delete
                    </button>
                </td>
             </tr>
             <tr>
                <td>
                  <div><b>Address:</b> Second Street 23, 53225 Bonn</div> 
                  <div><b>Phone number:</b> 9988556644</div>
                </td>
                <td class="add_space">
                <button  onclick="edit_address()" class="reschedule-btn cancel-text">
                      Edit
                    </button>
                    <button class="cancel-btn2 cancel-text">
                      Delete
                    </button>
                </td>
             </tr>
             <tr>
                <td>
                  <div><b>Address:</b> Second Street 23, 53225 Bonn</div> 
                  <div><b>Phone number:</b> 9988556644</div>
                </td>
                <td class="add_space">
                <button  onclick="edit_address()" class="reschedule-btn cancel-text">
                      Edit
                    </button>
                    <button class="cancel-btn2 cancel-text">
                      Delete
                    </button>
                </td>
             </tr>           -->
              

            
            <div>
                <button class="update-btn" onclick="newaddress()">Add new Address</button>
              </div>
          </div>
          <div class="add_new_address" id="new_address" style="display: none;">
                      
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
                        <!-- edit address -->
                        <div class="add_new_address" id="edit_address" style="display: none;">
                      
                      <!-- <form method="POST">
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

                          <button type="button" class="buttonaccept edit_address" id="save_address_btn" onclick="edit_address_MYSETTING()"  style="padding: 5px 15px;">Edit</button>
                          <button class="buttonaccept" type="button" onclick="cancel_address()">Cancel</button>

                      </form> -->

                  </div>
                                               <!-- change password -->
                      <div  id="change_pass" style="display: none;" >
                        <div class="form-group ">
                            <label>Old Password</label>
                            <input id="old_pass" type="password" class="form-control" placeholder="Old password ">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input id="new_pass" type="password" class="form-control" placeholder="New password">
                        </div>
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label>Confirm Password</label>
                            <input id="conform_pass" type="password" class="form-control" placeholder="Confirm password">
                        </div>
                        <div>
                        <button onclick="updatepassword()" class="reschedule-btn cancel-text update_pass">
                            Save
                        </button>
                        </div>
                      </div>
                      



          
          </div>
          


    

          
          <div  class="DB"  id="Db">
          <table class="r_table_row">
              <tr class="background-grey">
                <thead>
                <th>
                  Service Details 
                  <img
                    src="../assets/img/sort.png"
                    alt=""
                    class="arrow_img"
                  />
                </th>
                <th>
                  Service provider
                  <img
                    src="../assets/img/sort.png"
                    alt=""
                    class="arrow_img"
                  />
                </th>
                <th>
                  Payments
                  <img
                    src="../assets/img/sort.png"
                    alt=""
                    class="arrow_img"
                  />
                </th>
                <th>
                </th>
                <th class="action_space">
                  Action                
                </th>
              </tr>
              </thead>
              <tbody class="dashboard_body">

              </tbody>
          </table>
         
              
            </table> 
          </div>
          <div class="SH" id="SH" style="display: none;">
          <div class="r_table">
            <div class="export1">               
              <div>
                <p id="service_text"><b>Service history</b></p>
              </div>
              <div>
                <button id="export_btn" href="#">Export</button>
              </div>
            </div>
            <div id=space>
              <!-- Service History -->
            
            <table class="r_table_row">
              <tr class="background-grey">
                <thead>
                <th>
                  Service Details 
                  <img
                    src="../assets/img/sort.png"
                    alt=""
                    class="arrow_img"
                  />
                </th>
                <th>
                  Service provider
                  <img
                    src="../assets/img/sort.png"
                    alt=""
                    class="arrow_img"
                  />
                </th>
                <th>
                  Payments
                  <img
                    src="../assets/img/sort.png"
                    alt=""
                    class="arrow_img"
                  />
                </th>
                <th>
                  Status
                  <img
                    src="../assets/img/sort.png"
                    alt=""
                    class="arrow_img"
                  />
                </th>
                <th>
                  Rate sp                  
                </th>
              </tr>
            </thead>
            <tbody class="service_history_body">

            </tbody>

      
              <!-- <tr>
                <td>
                  <p>
                    <img 
                      src="../assets/img/calendar.png"
                      alt="calander"
                      class="calander_img"/>
                      31/03/2018                      
                  </p>
                  <p class="time">
                    12:00-04:00
                  </p>
                </td>
                <td>
                  <div class="nav">
                  <div class="navv">
                    <img 
                      src="../assets/img/cap.png"
                      alt="cap_img"
                      class="second_row_element"/>
                     
                  </div>
                  <div class="lyuman_text">
                    <p>
                      lyuman watson
                    </p>
                    <p>
                      <div class="nav star_img">
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star2.png"/>
                      </div>
                      <div class="ranking_number">
                        <p>4</p>
                      </div>
                      </div>
                    </p>
                  </div>
                  </div>
                </td>
                <td>
                  <p class="payment_number"><b>€63</b></p>
                  
                </td>
                <td>                  
                  <p class="status1">
                    completed
                  </p>
                </td>
                <td>
                  <button class="cancel-btn cancel-text">
                    Rate SP
                  </button>
                </td>
              </tr>
              
              <tr>
                <td>
                  <p>
                    <img 
                      src="../assets/img/calendar.png"
                      alt="calander"
                      class="calander_img"/>
                      15/03/2018                      
                  </p>
                  <p class="time">
                    12:00-04:00
                  </p>
                </td>
                <td>
                  <div class="nav">
                  <div class="navv">
                    <img 
                      src="../assets/img/cap.png"
                      alt="cap_img"
                      class="second_row_element"/>
                     
                  </div>
                  <div class="lyuman_text">
                    <p>
                      lyuman watson
                    </p>
                    <p>
                      <div class="nav star_img">
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star2.png"/>
                      </div>
                      <div class="ranking_number">
                        <p>4</p>
                      </div>
                      </div>
                    </p>
                  </div>
                  </div>
                </td>
                <td>
                  <p class="payment_number"><b>€63</b></p>
                  
                </td>
                <td>                  
                  <p class="status1">
                    completed
                  </p>
                </td>
                <td>
                  <button class="cancel-btn cancel-text">
                    Rate SP
                  </button>
                </td>
              </tr>
              
              <tr>
                <td>
                  <p>
                    <img 
                      src="../assets/img/calendar.png"
                      alt="calander"
                      class="calander_img"/>
                      10/03/2018                      
                  </p>
                  <p class="time">
                    12:00-04:00
                  </p>
                </td>
                <td>
                  <div class="nav">
                  <div class="navv">
                    <img 
                      src="../assets/img/cap.png"
                      alt="cap_img"
                      class="second_row_element"/>
                     
                  </div>
                  <div class="lyuman_text">
                    <p>
                      lyuman watson
                    </p>
                    <p>
                      <div class="nav star_img">
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star2.png"/>
                      </div>
                      <div class="ranking_number">
                        <p>4</p>
                      </div>
                      </div>
                    </p>
                  </div>
                  </div>
                </td>
                <td>
                  <p class="payment_number"><b>€63</b></p>
                  
                </td>
                <td>                  
                  <p class="status1">
                    completed
                  </p>
                </td>
                <td>
                  <button class="cancel-btn cancel-text">
                    Rate SP
                  </button>
                </td>
              </tr>
              
              <tr>
                <td>
                  <p>
                    <img 
                      src="../assets/img/calendar.png"
                      alt="calander"
                      class="calander_img"/>
                      28/02/2018                      
                  </p>
                  <p class="time">
                    12:00-04:00
                  </p>
                </td>
                <td>
                  <div class="nav">
                  <div class="navv">
                    <img 
                      src="../assets/img/cap.png"
                      alt="cap_img"
                      class="second_row_element"/>
                     
                  </div>
                  <div class="lyuman_text">
                    <p>
                      lyuman watson
                    </p>
                    <p>
                      <div class="nav star_img">
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star2.png"/>
                      </div>
                      <div class="ranking_number">
                        <p>4</p>
                      </div>
                      </div>
                    </p>
                  </div>
                  </div>
                </td>
                <td>
                  <p class="payment_number"><b>€63</b></p>
                  
                </td>
                <td>                  
                  <p class="status2">
                    canceled
                  </p>
                </td>
                <td>
                  <button class="cancel-btn cancel-text">
                    Rate SP
                  </button>
                </td>
              </tr>
              
              <tr>
                <td>
                  <p>
                    <img 
                      src="../assets/img/calendar.png"
                      alt="calander"
                      class="calander_img"/>
                      15/02/2018                      
                  </p>
                  <p class="time">
                    12:00-04:00
                  </p>
                </td>
                <td>
                  <div class="nav">
                  <div class="navv">
                    <img 
                      src="../assets/img/cap.png"
                      alt="cap_img"
                      class="second_row_element"/>
                     
                  </div>
                  <div class="lyuman_text">
                    <p>
                      lyuman watson
                    </p>
                    <p>
                      <div class="nav star_img">
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star2.png"/>
                      </div>
                      <div class="ranking_number">
                        <p>4</p>
                      </div>
                      </div>
                    </p>
                  </div>
                  </div>
                </td>
                <td>
                  <p class="payment_number"><b>€63</b></p>
                  
                </td>
                <td>                  
                  <p class="status1">
                    completed
                  </p>
                </td>
                <td>
                  <button class="cancel-btn cancel-text">
                    Rate SP
                  </button>
                </td>
              </tr>
              
              <tr>
                <td>
                  <p>
                    <img 
                      src="../assets/img/calendar.png"
                      alt="calander"
                      class="calander_img"/>
                      11/02/2018                      
                  </p>
                  <p class="time">
                    12:00-04:00
                  </p>
                </td>
                <td>
                  <div class="nav">
                  <div class="navv">
                    <img 
                      src="../assets/img/cap.png"
                      alt="cap_img"
                      class="second_row_element"/>
                     
                  </div>
                  <div class="lyuman_text">
                    <p>
                      lyuman watson
                    </p>
                    <p>
                      <div class="nav star_img">
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star2.png"/>
                      </div>
                      <div class="ranking_number">
                        <p>4</p>
                      </div>
                      </div>
                    </p>
                  </div>
                  </div>
                </td>
                <td>
                  <p class="payment_number"><b>€63</b></p>
                  
                </td>
                <td>                  
                  <p class="status2">
                    canceled
                  </p>
                </td>
                <td>
                  <button class="cancel-btn cancel-text">
                    Rate SP
                  </button>
                </td>
              </tr>
              
              <tr>
                <td>
                  <p>
                    <img 
                      src="../assets/img/calendar.png"
                      alt="calander"
                      class="calander_img"/>
                      31/01/2018                      
                  </p>
                  <p class="time">
                    12:00-04:00
                  </p>
                </td>
                <td>
                  <div class="nav">
                  <div class="navv">
                    <img 
                      src="../assets/img/cap.png"
                      alt="cap_img"
                      class="second_row_element"/>
                     
                  </div>
                  <div class="lyuman_text">
                    <p>
                      lyuman watson
                    </p>
                    <p>
                      <div class="nav star_img">
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star2.png"/>
                      </div>
                      <div class="ranking_number">
                        <p>4</p>
                      </div>
                      </div>
                    </p>
                  </div>
                  </div>
                </td>
                <td>
                  <p class="payment_number"><b>€63</b></p>
                  
                </td>
                <td>                  
                  <p class="status1">
                    completed
                  </p>
                </td>
                <td>
                  <button class="cancel-btn cancel-text">
                    Rate SP
                  </button>
                </td>
              </tr>
              
              <tr>
                <td>
                  <p>
                    <img 
                      src="../assets/img/calendar.png"
                      alt="calander"
                      class="calander_img"/>
                      19/01/2018                      
                  </p>
                  <p class="time">
                    12:00-04:00
                  </p>
                </td>
                <td>
                  <div class="nav">
                  <div class="navv">
                    <img 
                      src="../assets/img/cap.png"
                      alt="cap_img"
                      class="second_row_element"/>
                     
                  </div>
                  <div class="lyuman_text">
                    <p>
                      lyuman watson
                    </p>
                    <p>
                      <div class="nav star_img">
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star2.png"/>
                      </div>
                      <div class="ranking_number">
                        <p>4</p>
                      </div>
                      </div>
                    </p>
                  </div>
                  </div>
                </td>
                <td>
                  <p class="payment_number"><b>€63</b></p>
                  
                </td>
                <td>                  
                  <p class="status1">
                    completed
                  </p>
                </td>
                <td>
                  <button class="cancel-btn cancel-text">
                    Rate SP
                  </button>
                </td>
              </tr>
              
              <tr>
                <td>
                  <p>
                    <img 
                      src="../assets/img/calendar.png"
                      alt="calander"
                      class="calander_img"/>
                      05/01/2011                      
                  </p>
                  <p class="time">
                    12:00-04:00
                  </p>
                </td>
                <td>
                  <div class="nav">
                  <div class="navv">
                    <img 
                      src="../assets/img/cap.png"
                      alt="cap_img"
                      class="second_row_element"/>
                     
                  </div>
                  <div class="lyuman_text">
                    <p>
                      lyuman watson
                    </p>
                    <p>
                      <div class="nav star_img">
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star2.png"/>
                      </div>
                      <div class="ranking_number">
                        <p>4</p>
                      </div>
                      </div>
                    </p>
                  </div>
                  </div>
                </td>
                <td>
                  <p class="payment_number"><b>€63</b></p>
                  
                </td>
                <td>                  
                  <p class="status2">
                    canceled
                  </p>
                </td>
                <td>
                  <button class="cancel-btn cancel-text">
                    Rate SP
                  </button>
                </td>
              </tr>
              
              <tr>
                <td>
                  <p>
                    <img 
                      src="../assets/img/calendar.png"
                      alt="calander"
                      class="calander_img"/>
                      01/01/2018                      
                  </p>
                  <p class="time">
                    12:00-04:00
                  </p>
                </td>
                <td>
                  <div class="nav">
                  <div class="navv">
                    <img 
                      src="../assets/img/cap.png"
                      alt="cap_img"
                      class="second_row_element"/>
                     
                  </div>
                  <div class="lyuman_text">
                    <p>
                      lyuman watson
                    </p>
                    <p>
                      <div class="nav star_img">
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star1.png"/>
                      </div>
                      <div>
                        <img src="../assets/img/star2.png"/>
                      </div>
                      <div class="ranking_number">
                        <p>4</p>
                      </div>
                      </div>
                    </p>
                  </div>
                  </div>
                </td>
                <td>
                  <p class="payment_number"><b>€63</b></p>
                  
                </td>
                <td>                  
                  <p class="status2">
                    canceled
                  </p>
                </td>
                <td>
                  <button class="cancel-btn cancel-text">
                    Rate SP
                  </button>
                </td>
              </tr> -->
              
            </table>
            </div>
            </div>
           </div>
         </div>
        </div>
</div>
<!-- modals -->

<div class="modal_service_request" id="dashboard_popup" style="display: none;">
          <p onclick="cancel_dashboard_popup()" id="cancel_dashboard_popup" class="cancel_icon">&times;</p>
            <div class="modal-contenet">
               <div>
               
               
               <p class="head">Service Details</p>
               
               <p class="time1">07/10/2021 08:00 -11:00 </p>
               <p>Duration: 3 Hrs </p>
               </div>
               <!-- <div class="l_table_line2"></div> -->
               <hr>
               <div>
               <p class="head">Service Id: 8488.</p>
               <p class="time2">Extras:Inside Cabinets</p>
               <p>Net Amount: <span class="currency">56 €</p>
               </div>
               <hr>
               <div>
               <p class="time3">Service Address: Koenigstrasse 112,99897 Tambach-Dietharz</p>
               <p class="time3" >Billing Address:Same as Cleaning Address</p>
               <p class="time3">Phone:+49 9955648797</p>
               <p>Email:123@gmail.com</p>
               </div>
               <hr>
               <div>
               <p class="head">Comments</p>
               <p><span class="red_circle">X</span> I dont't have pets at home</p>
               </div>
               <hr>
               <div>
               <button class="reschedule-btn cancel-text">
                    Reschedule
                  </button>
                  <button class="cancel-btn2 cancel-text">
                    Cancel
                  </button>
               </div>
            </div>
            

                                
          </div>  

          <div class="modal_reschedule_date " style="display: none;" >
          <p class="cancel_icon2">&times;</p>
            <div class="modal-contenet2 ">
              <div class="time1">
               Cancel Service Request
              </div>
            
              <div>
                <p class="time4">why you want to cancel the service request?</p>
              </div>
              <div class="date_time">
              <textarea id="textarea" name="textarea" rows="4" cols="40" placeholder="reason">
              </textarea>
               
              </div>
              <div>
                <button class="update-btn">Cancel Now</button>
              </div>
            </div>
          </div>


          <!-- MY ADDRESS -->

 
    
   
    


        <!-- footer -->
    
       <?php include('footer.php')?>
         
       <script type="text/javascript" src="../assets/js/service_history.js"></script>   
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>