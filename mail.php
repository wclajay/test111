<?php
    $from = "yadavajay.81@gmail.com"; // sender
    $subject = "Test Mail";
    $message = "Test Message";
    // message lines should not exceed 70 characters (PHP rule), so wrap it
   // $message = wordwrap($message, 70);
    // send mail
    mail("ajaybahaduar@williamscommerce.com",$subject,$message,"From: $from\n");


?>