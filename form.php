<?php 

if (isset($_GET['submit'])) {
    $to = "mobiusdev777@gmail.com";
    $subject = $_GET['name'];
    $message = $_GET['message'];
    $from = "zenphoto@example.com";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}

?>
