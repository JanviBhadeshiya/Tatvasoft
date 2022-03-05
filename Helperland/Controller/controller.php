<?php
class HelperlandController
{
    function __construct()
    {
        include('Models/model.php');
        $this->model = new Helperland();
        session_start();
    }
    public function Homepage()
    {
       
        include("./View/index.php");
        
    }
    public function ContactUs()
    {
        if (isset($_POST)) {
            $base_url = "http://localhost:8080/Final_Homepage/View/ContactUs.php";
            $mobile =  $_POST['phone'];
            $email = $_POST['email'];
            $subject = $_POST['Subjects'];
            $message = $_POST['message'];
            $name = $_POST['fname'] . " " . $_POST['lname'];
            $array = [
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'mobile' => $_POST['phone'],
                'message' => $message,
                'creationdt' => date('Y-m-d H:i:s'),
                'status' => 'success',
                'priority' => 4,
            ];
            $result = $this->model->Contactus($array);
            $_SESSION['msg1'] = $result;
            header('Location:' . $base_url);
        }
    }
    public function InsertUser()
    {
        
        $base_url = 'http://localhost:8080/Final_Homepage/view/#myModal';
        if (isset($_POST['CustomerSignup'])) {
            $resetkey = bin2hex(random_bytes(15));
            $email = $_POST['email'];
            $count = $this->model->EmailExists($email);
            // echo '<script>alert('.$count.');</script>';
            if ($count == 0) {
                $array = [
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'email' => $email,
                    'mobile' => $_POST['mobile'],
                    'password' => $_POST['password'],
                    'usertypeid' => 0,
                    'roleid' => 'Customer',
                    'resetkey' => $resetkey,
                    'creationdt' => date('Y-m-d H:i:s'),
                    'status' => 'New',
                    'isactive' => 'No',
                    'isregistered' => 'yes',
                ];
                $result = $this->model->InsertCustomer_SP($array);
              
               
                $_SESSION['registration'] = $result;
                header('Location:' . $base_url);
                
            } else {
               
                
                header("Location:" . $base_url);
                $_SESSION['registration']="email already exists";
            }
        }
    }
    public function ForgotMail()
    {
        // forgot Password mail sent
        if (isset($_POST['forget_submit'])) {
            $base_url = 'http://localhost:8080/Final_Homepage/view/#myModal';
            $email = $_POST['forget'];
            $result = $this->model->ResetKey($email);
            $username = $result[0];
            $resetkey = $result[1];
            $count = $result[2];
            if ($count == 1) {             
                
                $subject = "Forget Password";
                $body = "<h6 style='font-size:16px; color:green;'>Hi, $username .Click Here to Reset Your Password</h6>

                <h5 style='font-size:17px; color:red;'>Please Click This and Reset Your Password </h5>
                <br>
             
                <a href='http://localhost:8080/Final_Homepage/view/resetpass.php?controller=Helperland&function=ResetPassword&parameter=$resetkey'> http://localhost:8080/Final_Homepage/view/reset.php?controller=Helperland&function=ResetPassword&parameter=$resetkey</a>
              </div>";
                $headers = "From: helperlandxyz@gmail.com ";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                mail($email, $subject, $body, $headers);
                $_SESSION['forget1']="Reset Password Link has been sent successfully!";              
                
                header('Location:' . $base_url);
            } else {
                $_SESSION['forget1'] = "Please enetr a valid email";
                
                header('Location:' . $base_url);
            }
        }
    }
    public function ResetPassword()
    {
        $resetkey = $_GET['parameter'];
        include('./View/resetpass.php');
    }

    public function ResetKeyPassword()
    {
        if (isset($_POST)) {
            $base_url = "http://localhost:8080/Final_Homepage/View/index.php";
            $resetkey = $_POST['reset'];
            $newpass = $_POST['newpassword'];
            $newcpass = $_POST['newcpassword'];
            $update_date = date('Y-m-d H:i:s');
            $pass = $newpass;
            $cpass =$newcpass;
            if ($newpass == $newcpass) {
                $array = [
                    'password' => $pass,
                    'updatedate' => $update_date,
                    'modifiedby' => 0,
                    'resetkey' => $resetkey,
                ];
                $result = $this->model->resetpass($array);
                
                echo '<script type="text/javascript"> window.location="http://localhost:8080/Final_Homepage/View/index.php";</script>';
               
            } else {
               
                echo '<script type="text/javascript"> window.location="http://localhost:8080/Final_Homepage/View/index.php";</script>';
                
            }
        }
    }
    public function InsertServiceProvider(){
        $baseurl = "http://localhost:8080/Final_Homepage/view/become_A_provider";
        $base_url = 'http://localhost:8080/Final_Homepage/view/#myModal';
        if (isset($_POST['baa_submit'])) {
            $resetkey = bin2hex(random_bytes(15));
            $email = $_POST['email'];
            $count = $this->model->EmailExists($email);
            // echo '<script>alert('.$count.');</script>';
            if ($count == 0) {
                $array = [
                    'firstname' => $_POST['fname'],
                    'lastname' => $_POST['lname'],
                    'email' => $email,
                    'mobile' => $_POST['mobile'],
                    'password' =>$_POST['password'],
                    'usertypeid' => 1,
                    'roleid' => 'ServiceProvider',
                    'resetkey' => $resetkey,
                    'creationdt' => date('Y-m-d H:i:s'),
                    'status' => 'Pending',
                    'isactive' => 'No',
                    'isregistered' => 'yes',
                ];
                $result = $this->model->InsertCustomer_SP($array);
               
                $_SESSION['registration'] = $result;
                header('Location:' . $base_url);
            } else {
                header("Location:" . $baseurl);
                $_SESSION['registration']="email already exists";
            }
        }

    }
    public function ActivateAccount()
    {
        $base_url = 'http://localhost:8080/Final_Homepage/view/#myModal';
        if (isset($_GET)) {
            $resetkey = $_GET['parameter'];
            $result = $this->model->Activation($resetkey);
            header('Location:' . $base_url);
        }
    }

    public function login(){
        $base_url = "http://localhost:8080/Final_Homepage/view/#myModal";
        $customer = "http://localhost:8080/Final_Homepage/view";
                
        if (isset($_POST)) {
            $email = $_POST['loginemail'];
            $pass = $_POST['password'];
            if (isset($_POST['remember'])) {
                setcookie('email_cookie', $email, time() + 86400, '/');
                setcookie('password_cookie', $pass, time() + 86400, '/');
            }
            $count = $this->model->Login($email, $pass);
            
           
        }
    }
    
    public function newaddress(){
        if (isset($_POST)) {
            $street = $_POST['street'];
            $houseno = $_POST['houseno'];
            $pincode = $_POST['postal'];
            $city = $_POST['city'];
            $mobilenum = $_POST['mobilenum'];
            // $email = $_POST['username'];
            // $result = $this->model->ResetKey($email);
            // $userid = $result[3];
            $type = 0;
            // $getstate = $this->model->CityLocation($pincode);
            // $state = $getstate[1];
            $array = [
                // 'userid' => $userid,
                'street' => $street,
                'houseno' => $houseno,
                'postal' => $pincode,
                'city' => $city,
                // 'state' => $state,
               
                'mobilenum' => $mobilenum,
                // 'email' => $email,
                // 'type' => $type,

            ];
            
            
            $result = $this->model->InsertAddress($array);
            print_r ($result);
                       

        }
    }
    public function GetAddress()
    {
        if (isset($_POST)) {
            // $email = $_POST['username'];
            $mobilenum = $_POST['mobilenum'];
            $result = $this->model->getAddress($mobilenum);
            // echo $result ;
            if (count($result)) {
                foreach ($result as $row) {
                    $street = $row['AddressLine1'];
                    $houseno = $row['AddressLine2'];
                    $city = $row['City'];
                    $pincode = $row['PostalCode'];
                    $mobile = $row['Mobile'];
                    $isdefault = $row['IsDefault'];
                    $isdeleted = $row['IsDeleted'];
                    $addressid = $row['AddressId'];
                    if ($isdefault == 1) {
                        $isdefault =  'checked';
                    } else {
                        $isdefault = '';
                    }
                    if ($isdeleted == 0) {
                        $output = '<div class="radio_address my-2">
                        <div class="row">
                            <div class="col-1" style="margin: auto;width: 100%;">
                                <input type="radio" id="address_ckbox" name="address" value= ' . $addressid.'
                                    style="margin: 0 auto;">
                            </div>
                            <div class="col-11">
                                <label for="address2">
                                    <p style="margin-bottom: 0px;"><b>Address:</b> '. $street .' ' . $houseno . ' , 
                                        '.$city.'  
                                    </p>
                                    <p style="margin-bottom: 0px;"><b>Phone number:</b> '. $mobile .'</p>
                                </label>
                            </div>
                        </div>
                    </div>' ;

                        echo $output;
                    }
                   
                }
            
        }
    }
}
   public function completebooking(){
       if(isset($_POST)){
        $base_url = "http://localhost:8080/Final_Homepage/View/book_service.php";
        $zipcode= $_POST['zipcode'];
        $total_pay= $_POST['total_pay'];
        $total_time= $_POST['total_time'];
        $date= $_POST['date_sp'];
        $comments= $_POST['comments'];
        $pets= $_POST['pets'];
        // $promo= $_POST['promo'];
        // $card_name= $_POST['card_name'];
        // $mmyy= $_POST['mmyy'];
        // $cvc= $_POST['cvc'];
         
        
        $array = [
            'zipcode' => $zipcode,
            'total_pay' =>  $total_pay ,
            'total_time' =>  $total_time,
            'date_sp' =>  $date,
            'comments' =>  $comments,
            'pets' =>  $pets,
            // 'promo' =>  $promo,
            // 'card_name'  =>  $card_name,
            // 'mmyy'  => $mmyy,
            // 'cvc'  =>  $cvc,
        ];
        $result = $this->model->CompleteBooking($array);
       }
       print_r($result);
       
   }
public function servicedetails(){
    if (isset($_POST)) {
        // $email = $_POST['username'];
        // $mobilenum = $_POST['mobilenum'];
        $result = $this->model->servicedetails();
        // echo $result ;
        if (count($result)) {
            foreach ($result as $row) {
                $date = $row['ServiceStartDate'];
                $totalcost = $row['TotalCost'];
                
                    $output=' 
                    <tr class="dashboard_popup" onclick="dashboard_popup()">
                    <td>
                      <p>
                        <img 
                          src="../assets/img/calendar.png"
                          alt="calander"
                          class="calander_img"/>
                          '.$date.'                     
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
                      <p class="payment_number"><b>'.$totalcost.'</b></p>
                      
                    </td>
                    <td>                  
    
                    </td>
                    <td class="action_space" >
                      <button onclick="update_date()" class="reschedule-btn cancel-text reschedule">
                        Reschedule
                      </button>
                      <button class="cancel-btn2 cancel-text">
                        Cancel
                      </button>
                    </td>
                  </tr>
                
                  <div class="modal_service_request" id="dashboard_popup" style="display : none;">
                  <p onclick="cancel_dashboard_popup()" id="cancel_dashboard_popup" class="cancel_icon">&times;</p>
                  <div class="modal-contenet">
                  <div>
               
               
                  <p class="head">Service Details</p>
                  
                  <p class="time1"> '.$date.' 08:00 -11:00 </p>
                  <p>Duration: 3 Hrs </p>
                  </div>
                  <hr>
                  <div>
                  <p class="head">Service Id: 8488.</p>
                  <p class="time2">Extras:Inside Cabinets</p>
                  <p>Net Amount: <span class="currency">'.$totalcost.' €</p>
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
                  <p><span class="red_circle">X</span> I do not have pets at home</p>
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
                <div class="modal_reschedule_date" id="update_date" style="display: none;">
                <p onclick="close_popup()" id="close_popup" class="cancel_icon2">&times;</p>
                  <div class="modal-contenet2 ">
                    <div class="time1">
                     Reschedule Service Request
                    </div>
                  
                    <div>
                      <p class="time4">Select new date and time</p>
                    </div>
                    <div class="date_time">
                      <input type="date" value="reschedule_date">
                      <input type="time" value="update_time">
                    </div>
                    <div>
                      <button class="update-btn">update</button>
                    </div>
                  </div>
                </div>';
                  echo $output;
                }
            }
        
    }
}
public function servicehistory(){
    if (isset($_POST)) {
        // $email = $_POST['username'];
        // $mobilenum = $_POST['mobilenum'];
        $result = $this->model->servicehistory();
        // echo $result ;
        if (count($result)) {
            foreach ($result as $row) {
                $date = $row['ServiceStartDate'];
                $totalcost = $row['TotalCost'];
                
                    $output=' 
                    <tr>
                      <td>
                        <p>
                          <img 
                            src="../assets/img/calendar.png"
                            alt="calander"
                            class="calander_img"/>
                            '.$date.'             
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
                        <p class="payment_number"><b>'.$totalcost.'</b></p>
                        
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
                    </tr>';
                    echo $output;
            }
        }
    }

}
public function editaddress(){
  {
    if (isset($_POST)) {
        // $email = $_POST['username'];
        $mobilenum = $_POST['id'];
        $result = $this->model->Getaddress2($mobilenum);
      
        // echo $result ;
        if (count($result)) {
            foreach ($result as $row) {
                $street = $row['AddressLine1'];
                $houseno = $row['AddressLine2'];
                $city = $row['City'];
                $pincode = $row['PostalCode'];
                $mobile = $row['Mobile'];
                $isdefault = $row['IsDefault'];
                $isdeleted = $row['IsDeleted'];
                $addressid = $row['AddressId'];
                if ($isdefault == 1) {
                    $isdefault =  'checked';
                } else {
                    $isdefault = '';
                }
                if ($isdeleted == 0) {
                    $output = '
                    <tr>
                      <td>
                        <div><b>Address:</b> '. $street .' ' . $houseno . ' , 
                        '.$city.' </div> 
                        <div><b>Phone number:</b>'. $mobile .'</div>
                      </td>
                      <td class="add_space">
                      <button onclick="edit_address()" class="reschedule-btn cancel-text">
                            Edit
                          </button>
                          <button onclick="updateaddress()" class="cancel-btn2 cancel-text deletebutton">
                            Delete
                          </button>
                      </td>
                   </tr>
                  ' ;

                    echo $output;
                }
               
            }
        
    }
}
}
}
public function updateaddress(){
  {
    if (isset($_POST)) {
        // $email = $_POST['username'];
        $mobilenum1 = $_POST['id1'];
        $mobilenum2 = $_POST['id2'];
        $result1 = $this->model->updateaddress($mobilenum1);
        if($result1=='success'){
        $result = $this->model->Getaddress2($mobilenum2);
      
        // echo $result ;
        if (count($result)) {
            foreach ($result as $row) {
                $street = $row['AddressLine1'];
                $houseno = $row['AddressLine2'];
                $city = $row['City'];
                $pincode = $row['PostalCode'];
                $mobile = $row['Mobile'];
                $isdefault = $row['IsDefault'];
                $isdeleted = $row['IsDeleted'];
                $addressid = $row['AddressId'];
                if ($isdefault == 1) {
                    $isdefault =  'checked';
                } else {
                    $isdefault = '';
                }
                if ($isdeleted == 0) {
                    $output = '
                    <tr>
                      <td>
                        <div><b>Address:</b> '. $street .' ' . $houseno . ' , 
                        '.$city.' </div> 
                        <div><b>Phone number:</b>'. $mobile .'</div>
                      </td>
                      <td class="add_space">
                      <button onclick="edit_address()" class="reschedule-btn cancel-text">
                            Edit
                          </button>
                          <button onclick="updateaddress()" class="cancel-btn2 cancel-text">
                            Delete
                          </button>
                      </td>
                   </tr>
                  ' ;

                    echo $output;
                }
              
               
            }
        
    }
  }
}
}
}
public function add_address(){
  if (isset($_POST)) {
    $street = $_POST['street'];
    $houseno = $_POST['houseno'];
    $pincode = $_POST['postal'];
    $city = $_POST['city'];
    $mobilenum = $_POST['mobilenum'];
    // $email = $_POST['username'];
    // $result = $this->model->ResetKey($email);
    // $userid = $result[3];
    $type = 0;
    
    $array = [
        // 'userid' => $userid,
        'street' => $street,
        'houseno' => $houseno,
        'postal' => $pincode,
        'city' => $city,
        // 'state' => $state,
       
        'mobilenum' => $mobilenum,
        // 'email' => $email,
        // 'type' => $type,

    ];
    
    
    $result = $this->model->InsertAddress($array);
    print_r ($result);
               

}
}
public function show_address()
{
    if (isset($_POST)) {
        // $email = $_POST['username'];
        $mobilenum = $_POST['mobilenum'];
        $result = $this->model->getAddress($mobilenum);
        // echo $result ;
        if (count($result)) {
            foreach ($result as $row) {
                $street = $row['AddressLine1'];
                $houseno = $row['AddressLine2'];
                $city = $row['City'];
                $pincode = $row['PostalCode'];
                $mobile = $row['Mobile'];
                $isdefault = $row['IsDefault'];
                $isdeleted = $row['IsDeleted'];
                $addressid = $row['AddressId'];
                if ($isdefault == 1) {
                    $isdefault =  'checked';
                } else {
                    $isdefault = '';
                }
                if ($isdeleted == 0) {
                    $output = '<tr>
                    <td>
                      <div><b>Address:</b> '. $street .' ' . $houseno . ' , 
                      '.$city.' </div> 
                      <div><b>Phone number:</b>'. $mobile .'</div>
                    </td>
                    <td class="add_space">
                    <button onclick="edit_address()" class="reschedule-btn cancel-text">
                          Edit
                        </button>
                        <button onclick="updateaddress()" class="cancel-btn2 cancel-text">
                          Delete
                        </button>
                    </td>
                 </tr>' ;

                    echo $output;
                }
               
            }
        
    }
}
}
public function UPDATE_ADDRESS(){
  
      if (isset($_POST)) {
          $street = $_POST['street'];
          $houseno = $_POST['houseno'];
          $pincode = $_POST['postal'];
          $location = $_POST['city'];
          $mobilenum = $_POST['mobilenum'];
          $addressid = $_POST['addressid'];

          $array = [
              'street' => $street,
              'houseno' => $houseno,
              'city' => $location,
              'postal' => $pincode,
              'mobilenum' => $mobilenum,
              'addressid' => $addressid,

          ];
          $result = $this->model->UpdateCustomerAddress($array);
          $count = $result[0];
          if ($count == 1) {
            echo 1;
        } else {
            echo 0;
        }
    
         
      }
  
}
public function new_customer_Details()
{
    if (isset($_POST)) {
        $firstname =   $_POST['firstname'];
        $lastname =   $_POST['lastname'];
        $email =   $_POST['email'];
        $mobile =   $_POST['mobile'];
        $birthdate =   $_POST['birthdate'];
        $array = [
            'fistname' => $firstname,
            'lastname' => $lastname,
            'mobile' => $mobile,
            'birthdate' => $birthdate,
            'email' => $email,
        ];
        $result = $this->model->update_Customer($array);
        
    }
}
public function UpdatePassword()
    {
        if (isset($_POST)) {
            $email = $_POST['username'];
            $currentpassword = $_POST['currentpassword'];
            $newpassword = $_POST['newpassword'];
            $confirmpassword = $_POST['newconfirmpassword'];
            $modifiedby = $_POST['modifiedby'];
            $password = $this->model->GetUserDetails($email);
            if (count($password)) {
                foreach ($password as $pass) {
                    $databasepassword = $pass['Password'];
                    $resetkey = $pass['ResetKey'];
                    if (password_verify($currentpassword, $databasepassword)) {
                        if ($newpassword == $confirmpassword) {
                            $update_date = date('Y-m-d H:i:s');
                            $newpass = $newpassword;
                            $cpass = $confirmpassword;
                            $array = [
                                'password' => $newpass,
                                'updatedate' => $update_date,
                                'modifiedby' => $modifiedby,
                                'resetkey' => $resetkey,
                            ];
                            $result = $this->model->resetpass($array);
                                                                                
                        }
                    } 
                }
            }
        }
    }
               

}
