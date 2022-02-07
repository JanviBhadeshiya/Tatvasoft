<?php
class Helperland
{

    /* Creates database connection */
    public function __construct()
    {
        try {
            $dsn = 'mysql:dbname=Helperland;host=localhost';
            $user = 'root';
            $password = '';
            $this->conn = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "";
            die();
        }
    }
    public function Contactus($array)
    {
        $sql = "INSERT INTO contactus (Name , Email , Subject , PhoneNumber , Message , CreatedOn , Status , Priority )
        VALUES (:name ,  :email , :subject , :mobile , :message , :creationdt , :status , :priority )";
        $stmt =  $this->conn->prepare($sql);
        $result = $stmt->execute($array);
        // return $result;
        if ($result) {
            
            $_SESSION['msg1'] = "Message Has Been Sent Succesfully";
           
        } else {
            $_SESSION['msg1'] = "Your Message is not Sent Please Try Again.";
           

        }
        return array($_SESSION['msg']);
    }
    public function InsertCustomer_SP($array)
    {
        $sql = "INSERT INTO user (FirstName,LastName, Email , Mobile , Password , UserTypeId , RoleId , ResetKey , CreatedDate , Status , IsActive , IsRegisteredUser)
        VALUES (:firstname , :lastname , :email , :mobile , :password , :usertypeid , :roleid , :resetkey , :creationdt , :status , :isactive , :isregistered )";
        $stmt =  $this->conn->prepare($sql);
        $result = $stmt->execute($array);
        if ($result) {
           
            return "Your account has been created";
        } else {
            
            return "your account is not created please try again";
        }
        return array($_SESSION['status_msg'], $_SESSION['status_txt'], $_SESSION['status']);
    }
    public function EmailExists($email)
    {
        $sql = "select * from user where Email = '$email'";
        $stmt =  $this->conn->prepare($sql);
        $stmt->execute();
        $count = $stmt->rowCount();
        return $count; 
        
    }
    public function ResetKey($email)
    {
        $sql = "select * from user where Email = '$email'";
        $stmt =  $this->conn->prepare($sql);
        $stmt->execute();
        $row  = $stmt->fetch(PDO::FETCH_ASSOC);
        $username = $row['FirstName'];
        $resetkey = $row['ResetKey'];
        $count = $stmt->rowCount();
        return array($username, $resetkey, $count);
    }
    public function resetpass($data){
        $sql = "UPDATE user SET Password = :password , ModifiedDate = :updatedate , ModifiedBy = :modifiedby WHERE ResetKey = :resetkey";
        $stmt =  $this->conn->prepare($sql);
        $result = $stmt->execute($data);
        
        if($result){
            $_SESSION['msg']="New Password set !";
            
            
        }else{
            $_SESSION['msg']="Password Not set !";
            
        }
    }

    public function Login($email,$pass){
        $sql="select * from user where Email = '$email'";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count=$stmt->rowCount();
        $usertypeid = $row['UserTypeId'];
        $customer = "http://localhost:8080/Final_Homepage/view/faq.php";
        $service_provider = "http://localhost:8080/Final_Homepage/view/contactus.php";
        $base_url = "http://localhost:8080/Final_Homepage/view/index.php";

        if($count==1){
            if ($pass == $row['Password']){
                if ($usertypeid == 0) {
                    $_SESSION['username'] = $email;
                    
                    header('Location:' . $customer);
                } else if ($usertypeid == 1) {
                    $_SESSION['username'] = $email;
                    
                    header('Location:' . $service_provider);
                }
            }else{
               
                $_SESSION['for_login']="Invalid Password";
                header('Location:' . $base_url);
            }
        }else{
            
            $_SESSION['for_login']="User not exists";
           
            header('Location:' . $base_url);
        }
    }


}

?>