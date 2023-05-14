<?php
    class creatdb {

        public $servername;
        public $user;
        public $password;
        public $dbname;
        public $conn;
        public $tablename;

        public function __construct(
            $servername="localhost",
            $user="root",
            $password="",
            $dbname="dawproject",
            $tablename='menu',
            $tablename2='menu',
        ) {
            $this->servername= $servername;
            $this->user=$user;
            $this->password=$password;
            $this->dbname=$dbname;
            $this->tablename=$tablename;

            // creat connection
            $this->conn=mysqli_connect($servername,$user,$password);
            if(!$this->conn) {
                die('connection failed'.mysqli_connect_error());
            }

            // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->conn, $sql)){

            $this->conn = mysqli_connect($servername, $user, $password, $dbname);

            // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $tablename
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             product_name VARCHAR (25) NOT NULL,
                             product_price FLOAT,
                             product_image VARCHAR (100),
                             product_ingrediant VARCHAR (100)
                            );";

        }
        if (!mysqli_query($this->conn, $sql)){
            echo "Error creating table : " . mysqli_error($this->con);
        }else{
        return false;
    }




    }






    public function getdata_breakfast(){
        $sql = "SELECT * FROM $this->tablename where type='breakfast'";

        $result = mysqli_query($this->conn, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getdata_lunch(){
        $sql = "SELECT * FROM $this->tablename where type='lunch'";

        $result = mysqli_query($this->conn, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function getdata_dinner(){
        $sql = "SELECT * FROM $this->tablename where type='dinner'";

        $result = mysqli_query($this->conn, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function getdata_desserts(){
        $sql = "SELECT * FROM $this->tablename where type='desserts'";

        $result = mysqli_query($this->conn, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function getdata_traditional(){
        $sql = "SELECT * FROM $this->tablename where type='traditional'";

        $result = mysqli_query($this->conn, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function getdata_drinks(){
        $sql = "SELECT * FROM $this->tablename where type='drinks'";

        $result = mysqli_query($this->conn, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function getdata(){
        $sql = "SELECT * FROM $this->tablename ";

        $result = mysqli_query($this->conn, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }


        public function reserve() {
            if(isset($_POST['submit'])) {
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $phone=$_POST['phone'];
                $email=$_POST['mail'];
                $guest=$_POST['table'];
                $date=$_POST['date'];
                $time=$_POST['time'];
            
                $sql="INSERT INTO reservation(fname,lname,phone,email,number,date,time) VALUES('$fname','$lname','$phone','$email','$guest','$date','$time')";
                if(mysqli_query($this->conn,$sql)) {
                    echo "<div class='res-container'> <p class='reservation'> reservation successfully created </p> <i class='fa-sharp fa-light fa-check'></i></div> ";
                }else {
                    echo "error:" .$sql."<br>".mysql_error($this->conn);
                }


                // Send a confirmation email to the customer
        // $to = $email;
        // $subject = "Booking Confirmation";
        // $message = "Dear $fname,\n\nThank you for booking with us! Your booking details are as follows:\n\n";
        // // $message .= "Booking ID: " . $_SESSION['booking_id'] . "\n";
        // $message .= "Check-in Date: $date\n";
        // // $message .= "Check-out Date: $checkout_date\n";
        // $message .= "Number of Guests: $guest\n\n";
        // $message .= "We look forward to seeing you!\n\nBest regards,\nThe Booking System Team";
        // $headers = "From: saminouicer3@gmail.com" . "\r\n" .
        //            "Reply-To: '.$email'" . "\r\n" .
        //            "X-Mailer: PHP/" . phpversion();
        //            if (mail($to, $subject, $message, $headers)) {
        //             echo "Booking confirmed! An email has been sent to $email with your booking details.";
        //         } else {
        //             echo "Error sending confirmation email.";
        //         }

            }
        }
        


        public function confirm() {
            if(isset($_POST['confirm'])) {
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];               
                $email=$_POST['email'];
                $payment=$_POST['payment'];

                $sql="INSERT INTO ordering(fname,lname,email,payment) VALUES('$fname','$lname','$email','$payment')";
                
                if(!mysqli_query($this->conn,$sql)) {
                 
                    echo "error:" .$sql."<br>".mysql_error($this->conn);
                }
            }
           

        }


 


    }










    // $servername="localhost";
    // $user="root";
    // $password="";
    // $dbname="dawproject";
    
    // $conn=mysqli_connect($servername,$user,$password,$dbname);
    
    // if(!$conn) {
    //     die("connection failed:".mysqli_connect_error());
    // }else{
    //     echo 'done';
    // }
    
    