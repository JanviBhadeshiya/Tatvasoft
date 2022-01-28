<?php
class HelperlandController
{
    function __construct()
    {
        include('Models/Connection.php');
        $this->model = new Helperland();
        session_start();
    }
    public function Homepage()
    {
       
        include("./views/index.php");
        
    }
    public function ContactUs()
    {
        if (isset($_POST)) {
            $base_url = "http://localhost/Final_Homepage";
            $mobile =  $_POST['phone'];
            $email = $_POST['email'];
            $subject = $_POST['sub'];
            $message = $_POST['message'];
            $name = $_POST['fname'] . " " . $_POST['lname'];
            $array = [
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'mobile' => $_POST['mobile'],
                'message' => $message,
                'creationdt' => date('Y-m-d H:i:s'),
                'status' => 'success',
                'priority' => 4,
            ];
            $result = $this->model->Contactus($array);
            $results = $this->model->ResetKey($email);
            $_SESSION['firstname'] = $results[0];
            $_SESSION['status_msg'] = $result[0];
            $_SESSION['status_txt'] = $result[1]; 
            $_SESSION['status'] = $result[2];
            header('Location:' . $base_url);
        }
    }

}    
?>