<?php
if(isset($_POST['submit'])) {
    $to = 't.backens@web.de';
    $from = $_POST['email'];
    $message = $_POST['message'];

    $subject = "New Form Entry";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail sent.";
    }
    else {
        echo "failed"
    }
}
?>