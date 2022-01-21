--
-- Database: `helperland`
--

CREATE TABLE `for_customer` (
  `Customer_id` int(11) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile_Number` int(10) NOT NULL,
  `Birthdate` date DEFAULT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `Confirm_Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `for_service_providr` (
  `Service_Provider_id` int(11) NOT NULL,
  `First_Name` varchar(150) NOT NULL,
  `Last_Name` varchar(150) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile_Number` int(10) NOT NULL,
  `Nationality` varchar(30) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL,
  `Address_Title` varchar(255) DEFAULT NULL,
  `Address_Houseno` varchar(30) DEFAULT NULL,
  `PostalCode` varchar(10) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `TaxNumber` int(11) DEFAULT NULL,
  `Password` varchar(100) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `admin` (
  `Admin_id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_assword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `address` (
  `Address_id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Street_Address` varchar(255) NOT NULL,
  `HouseNumber` int(10) NOT NULL,
  `Postal_Code` int(6) NOT NULL,
  `Telephone_Number` int(10) NOT NULL,
  `City` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `for_booking` (
  `Service_id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Address` int(11) NOT NULL,
  `Pets_at_Home` varchar(255) NOT NULL,
  `Service_Inside_Cabinets` time DEFAULT NULL,
  `Service_Inside_Fridge` time DEFAULT NULL,
  `Service_Inside_Oven` time DEFAULT NULL,
  `Service_Laundry_wash_dry` time DEFAULT NULL,
  `Service_Interior_windows` time DEFAULT NULL,
  `Service_Need_Time` time NOT NULL,
  `Comments` varchar(255) DEFAULT NULL,
  `Service_Provider_id` int(11) NOT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `Admin_id` int(11) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `admin_refund` (
  `Refund_id` int(11) NOT NULL,
  `Admin_id` int(11) NOT NULL,
  `Paid_id` int(11) NOT NULL,
  `Refunded_amount` float NOT NULL,
  `Total_Refund_Amount` float NOT NULL,
  `Refund_Comment` varchar(255) NOT NULL,
  `CallCenter_Comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `favourite_sp` (
  `Favourite_id` int(11) NOT NULL,
  `Service_Provider_id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Favourite` varchar(100) DEFAULT NULL,
  `Unfavourite` varchar(100) DEFAULT NULL,
  `Block_SP` varchar(255) DEFAULT NULL,
  `Block_Customer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `notifications` (
  `Notification_id` int(11) NOT NULL,
  `Customer_id` int(11) DEFAULT NULL,
  `Service_Provider_id` int(11) DEFAULT NULL,
  `Admin_id` int(11) DEFAULT NULL,
  `Notification_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `sp_rating` (
  `Rating_id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Service_id` int(11) NOT NULL,
  `Service_provider_id` int(11) NOT NULL,
  `On_time_arrival` float NOT NULL,
  `Friendly` float NOT NULL,
  `Quality_Of_service` float NOT NULL,
  `Feedback_ServiceProvider` varchar(255) DEFAULT NULL,
  `Average_Rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Primary key
--
ALTER TABLE `for_customer`
  ADD PRIMARY KEY (`Customer_id`);

ALTER TABLE `for_service_provider`
  ADD PRIMARY KEY (`Service_Provider_id`);

ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

ALTER TABLE `address`
  ADD PRIMARY KEY (`Address_id`),
  ADD KEY `Customer_id` (`Customer_id`);

ALTER TABLE `admin_refund`
  ADD PRIMARY KEY (`Refund_id`),
  ADD KEY `Paid_id` (`Paid_id`),
  ADD KEY `Admin_id` (`Admin_id`);

ALTER TABLE `for_booking`
  ADD PRIMARY KEY (`Service_id`),
  ADD KEY `Service_Provider` (`Service_Provider`),
  ADD KEY `Customer_id` (`Customer_id`),
  ADD KEY `Address` (`Address`),
  ADD KEY `Admin_id` (`Admin_id`);

ALTER TABLE `favourite_sp`
  ADD PRIMARY KEY (`Favourite_id`),
  ADD KEY `Customer_id` (`Customer_id`),
  ADD KEY `Service_Provider_id` (`Service_Provider_id`);

sALTER TABLE `notifications`
  ADD PRIMARY KEY (`Notification_id`),
  ADD KEY `Admin_id` (`Admin_id`),
  ADD KEY `Customer_id` (`Customer_id`),
  ADD KEY `Service_Provider_id` (`Service_Provider_id`);


ALTER TABLE `sp_rating`
  ADD PRIMARY KEY (`Rating_id`),
  ADD KEY `Service_provider_id` (`Service_provider_id`),
  ADD KEY `Booking_id` (`Booking_id`),
  ADD KEY `Customer_id` (`Customer_id`);



--
--auto_increment
--

ALTER TABLE `admin_refund`
  MODIFY `Refund_id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `for_customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `for_service_provider`
  MODIFY `Service_Provider_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `address`
  MODIFY `Address_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `favourite_sp`
  MODIFY `Favourite_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `notifications`
  MODIFY `Notification_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `sp_ratting`
  MODIFY `Rating_id` int(11) NOT NULL AUTO_INCREMENT;



--
-- Constraints 
--

ALTER TABLE `for_customer`
  ADD CONSTRAINT `for_customer_ibfk_2` FOREIGN KEY (`Customer_id`) REFERENCES `customer_details` (`Customer_id`),
  ADD CONSTRAINT `for_customer_ibfk_3` FOREIGN KEY (`Address`) REFERENCES `address` (`Address_id`),
  ADD CONSTRAINT `for_customer_ibfk_4` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`Admin_id`);

ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `customer_details` (`Customer_id`);
 
ALTER TABLE `admin_refund`
  ADD CONSTRAINT `admin_refund_ibfk_1` FOREIGN KEY (`Paid_id`) REFERENCES `for_customer` (`Service_id`),
  ADD CONSTRAINT `admin_refund_ibfk_2` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`Admin_id`);

ALTER TABLE `favourite_sp`
  ADD CONSTRAINT `favourite_sp_ibfk_1` FOREIGN KEY (`Customer_id`) REFERENCES `customer_details` (`Customer_id`),
  ADD CONSTRAINT `favourite_sp_ibfk_2` FOREIGN KEY (`Service_Provider_id`) REFERENCES `for_service_provider` (`Service_Provider_id`);


ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`Admin_id`),
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`Customer_id`) REFERENCES `customer_details` (`Customer_id`),
  ADD CONSTRAINT `notifications_ibfk_3` FOREIGN KEY (`Service_Provider_id`) REFERENCES `for_service_provider` (`Service_Provider_id`);


ALTER TABLE `sp_rating`
  ADD CONSTRAINT `sp_rating_ibfk_1` FOREIGN KEY (`Service_provider_id`) REFERENCES `for_service_provider` (`Service_Provider_id`),
  ADD CONSTRAINT `sp_rating_ibfk_2` FOREIGN KEY (`Booking_id`) REFERENCES `for_service_provider` (`Service_Provider_id`),
  ADD CONSTRAINT `sp_rating_ibfk_3` FOREIGN KEY (`Booking_id`) REFERENCES `for_customer` (`Service_id`),
  ADD CONSTRAINT `sp_rating_ibfk_4` FOREIGN KEY (`Customer_id`) REFERENCES `customer_details` (`Customer_id`);
COMMIT;









