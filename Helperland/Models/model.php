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
    public function resetpass($array){
        $sql = "UPDATE user SET Password = :password , ModifiedDate = :updatedate , ModifiedBy = :modifiedby WHERE ResetKey = :resetkey";
        $stmt =  $this->conn->prepare($sql);
        $result = $stmt->execute($array);
        
        if($result){
            $_SESSION['msg']="New Password set !";
            
            
        }else{
            $_SESSION['msg']="Password Not set !";
            
        }
    }

    public function Login($email,$pass){
        $sql="SELECT * from user where Email = '$email'";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count=$stmt->rowCount();
        $usertypeid = $row['UserTypeId'];
        $customer = "http://localhost:8080/Final_Homepage/view/index.php";
        $service_provider = "http://localhost:8080/Final_Homepage/view/contactus.php";
        $base_url = "http://localhost:8080/Final_Homepage/view/index.php";

        if($count==1){
            if ($pass == $row['Password']){
                if ($usertypeid == 0) {
                    $_SESSION['username'] = $email;
                    $_SESSION['for_login']='login success';
                    header('Location:' . $customer);
                } else if ($usertypeid == 1) {
                    $_SESSION['username'] = $email;
                    $_SESSION['for_login']='login success';
                    header('Location:' . $service_provider);
                }
            }else{
               
                $_SESSION['for_login']='invalidpass';
                header('Location:' . $base_url);
            }
        }else{
            
            $_SESSION['for_login']="User not exists";
           
            header('Location:' . $base_url);
        }
    }
    // public function CityLocation($pincode)
    // {

    //     $sql  = " SELECT
    //     zipcode.ZipcodeValue,
    //     city.CityName, state.StateName  FROM zipcode 
    //   JOIN city
    //     ON zipcode.CityId = city.Id  AND ZipcodeValue = $pincode
	// 	JOIN state 
    //     ON state.Id = city.StateId";
    //     $stmt =  $this->conn->prepare($sql);
    //     $stmt->execute();

    //     $row  = $stmt->fetch(PDO::FETCH_ASSOC);

    //     $zipcode= $row['ZipcodeValue'];
    //     $city = $row['CityName'];
    //     $state = $row['StateName'];

    //     return array($city, $state);
    // }
    public function InsertAddress($array)
    {
        $sql = "INSERT INTO useraddress (UserId , AddressLine1	 , AddressLine2 , City ,  PostalCode , Mobile , Email )
        VALUES ('2' , :street ,  :houseno  , :city , :postal , :mobilenum , NULL )";
        $stmt =  $this->conn->prepare($sql);
        $result = $stmt->execute($array);
        return $array;
    
    }
    public function getaddress($mobilenum){
      
            $sql="SELECT * from useraddress WHERE Mobile='$mobilenum'";
            $stmt =  $this->conn->prepare($sql);
            $stmt->execute();
          
                $row  = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
                
            
           
             //   $output=mysqli_query($this->conn , "SELECT *   useraddress");
             //   $out=mysqli_fetch_assoc($output);
            return $row;
        
         

    }
    public function CompleteBooking($array){

          $sql = "INSERT INTO servicerequest(ZipCode,TotalCost, ServiceHours, ServiceStartDate,Comments, HasPets)
        
         VALUES (:zipcode,:total_pay,:total_time,:date_sp,:comments,:pets)";
        // $sql="INSERT INTO servicerequest(UserId,  ServiceStartDate, ZipCode,ServiceHours, ExtraHours, SubTotal)
        // VALUES ('2','45',:zipcode,'4','300','45')";
        
         $stmt =  $this->conn->prepare($sql);
         $result = $stmt->execute($array);
        //  return $array;
         if ($result) {
           
            return "Your request has been made";
        } else {
            
            return "your account is not created please try again";
        }



    }
    public function servicedetails(){
        $sql="SELECT * from servicerequest";
        $stmt =  $this->conn->prepare($sql);
        $stmt->execute();
      
            $row  = $stmt->fetchAll(PDO::FETCH_ASSOC);     
        
        return $row;
    }
    public function servicehistory(){
        $sql="SELECT * from servicerequest";
        $stmt =  $this->conn->prepare($sql);
        $stmt->execute();
      
            $row  = $stmt->fetchAll(PDO::FETCH_ASSOC);     
        
        return $row;
    }
    public function Getaddress2($mobilenum){
      
        $sql="SELECT * from useraddress WHERE UserId='$mobilenum' and IsDeleted=0";
        $stmt =  $this->conn->prepare($sql);
        $stmt->execute();
      
            $row  = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            
        
       
         //   $output=mysqli_query($this->conn , "SELECT *   useraddress");
         //   $out=mysqli_fetch_assoc($output);
        return $row;
    }
    public function updateaddress($mobilenum){
        $sql="UPDATE useraddress SET IsDeleted=1 WHERE AddressId='$mobilenum'";
        $stmt =  $this->conn->prepare($sql);
        $stmt->execute();
      
            $row  = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return 'success';
    }
    public function GetUserDetails($email)
    {
        $sql = "SELECT * from user where Email = '$email'";
        $stmt =  $this->conn->prepare($sql);
        $stmt->execute();
        $result  = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function UpdateCustomerAddress($array)
    {
        $sql = "UPDATE `useraddress` SET `AddressLine1`= :street ,`AddressLine2`= :houseno,`City`=:location,`State`= :state ,`PostalCode`= :pincode ,`Mobile`=:mobilenum WHERE `AddressId` = :addressid ";
        $stmt =  $this->conn->prepare($sql);
        $stmt->execute($array);
        $count = $stmt->rowCount();
        return array($count);
    }
    public function update_Customer($array)
    {
        $sql = "UPDATE `user` SET `FirstName`= :fistname,`LastName`=:lastname,`Mobile`=:mobile,`DateOfBirth`= :birthdate WHERE `Email`=:email";
        $stmt =  $this->conn->prepare($sql);
        $stmt->execute($array);
        $count = $stmt->rowCount();
        return array($count);
    }



}

?>