<?php
require 'conn.php';

        

        // Escape user inputs for security
        $name = $conn->real_escape_string($_POST['name']); // Assuming 'username' is the field for rescuer's name
        $phone = $conn->real_escape_string($_POST['phone']); // Assuming 'email' field is used for phone number
        $license = $conn->real_escape_string('Licence Number'); // Placeholder, replace with actual OCR extraction logic
        $verified = $conn->real_escape_string('no'); // Default to 'no', change based on your verification logic
        $district = $conn->real_escape_string('Not yet'); // Placeholder, adjust based on actual input
        $ussd = $conn->real_escape_string('not yet'); // Placeholder, adjust based on actual input // Replace with the actual path from image upload handling
        $car = $conn->real_escape_string($_POST['car']); // Assuming 'subject' dropdown is for car type
        $village = $conn->real_escape_string('Not yet'); // Placeholder, adjust based on actual input


        include 'handleImagePath.php';

        // Attempt insert query execution
        $sql = "INSERT INTO rescuer (name, phone, license, verified, district, ussd, image, car, village) VALUES ('$name', '$phone', '$license', '$verified', '$district', '$ussd', '$image', '$car', '$village')";

        if($conn->query($sql) === true){
            // Echoing JavaScript to show an alert and then redirect
            echo "<script>alert('New rescuer added successfully.'); window.location.href='profile.php';</script>";
        } else{
            // Handle error without redirection, possibly show error message directly or via alert
            echo "ERROR: Could not execute $sql. " . $conn->error;
        }


        // Close connection
$conn->close();
?>
