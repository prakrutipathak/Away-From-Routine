<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['first_name']) && isset($_POST['last_name']) &&
         isset($_POST['email']) &&
        isset($_POST['area_code']) && isset($_POST['phone'])
        && isset($_POST['city']) && isset($_POST['people'])) {
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $area_code = $_POST['area_code'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $people = $_POST['people'];

       

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "useform";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM registration WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO registration(first_name,last_name,email,area_code,phone,city,people) values(?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssiiss",$first_name,$last_name, $email, $area_code, $phone,$city,$people,);
                if ($stmt->execute()) {
                    echo "Your record is sucessfully inserted,Its time for payment.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>