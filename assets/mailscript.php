<?php  

if ( isset( $_POST['submit'] ) ) {
        // exectute mail function here
        $name = $_POST['name'];
        $message = $_POST['message'];

        $message = wordwrap($message, 70, "\r\n");

        mail('joshuawd@gmail.com', $name, $message);
        
    }

?>
