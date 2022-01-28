<?php
class Helperland
{

    /* Creates database connection */
    public function __construct()
    {
        try {
            /* Properties */
            $dsn = 'mysql:dbname=Helperland(1);host=localhost';
            $user = 'root';
            $password = '';
            $this->conn = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "";
            die();
        }
    }
    public function Contacts($array)
    {
        $sql = "INSERT INTO contactus (Name , Email , Subject , PhoneNumber , Message , CreatedOn , Status , Priority )
        VALUES (:name ,  :email , :subject , :mobile , :message , :creationdt , :status , :priority )";
        $stmt =  $this->conn->prepare($sql);
        $result = $stmt->execute($array);
        // return $result;
        if ($result) {
            $_SESSION['status_msg'] = "Message Has Been Sent Succesfully";
            $_SESSION['status_txt'] = "";
            $_SESSION['status'] = "success";
            // $_SESSION['msg'] = "Your Account has been Created Please Verify Your Email.";
        } else {
            $_SESSION['status_msg'] = "Your Message is not Sent Please Try Again.";
            $_SESSION['status_txt'] = "";
            $_SESSION['status'] = "alert";

        }
        return array($_SESSION['status_msg'], $_SESSION['status_txt'], $_SESSION['status']);
    }

}

?>