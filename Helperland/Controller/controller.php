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
                    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
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
            $pass = password_hash($newpass, PASSWORD_BCRYPT);
            $cpass = password_hash($newcpass, PASSWORD_BCRYPT);
            if ($newpass == $newcpass) {
                $array = [
                    'password' => $pass,
                    'updatedate' => $update_date,
                    'modifiedby' => 0,
                    'resetkey' => $resetkey,
                ];
                $result = $this->model->ResetPass($array);
                
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
                    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
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

}    
?>