<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST["fname"];
        $femail = $_POST["femail"];
        $fsubject = $_POST["fsubject"];
        $fmessage = "Nama: $fname\nEmail: $femail\n\n" . $_POST["fmessage"]; // Include name and email in the message
        $to = "nasigorengspesial33@gmail.com";
        $header = "From: $femail"; // Fix the header format

        if (mail($to, $fsubject, $fmessage, $header)) { // Correct the order of parameters in the mail function
            echo "email sent";
        } else {
            echo "email sending failed";
        }
    }
?>
