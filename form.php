<?php 

if (isset($_POST['submit'])) {
    $to = "mobiusdev777@gmail.com";
    $subject = $_POST['name'];
    $message = $_POST['message'];
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