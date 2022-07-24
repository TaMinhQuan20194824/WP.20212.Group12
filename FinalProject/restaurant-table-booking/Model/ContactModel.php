<?php
require 'Entity/ContactEntity.php';

class ContactModel {
    
    function InsertContact(ContactEntity $contact)
    {
        require 'credentials.php';
        $connect = mysqli_connect($host,$user,$password);
        mysqli_select_db($connect, $database);
        $query = sprintf("INSERT INTO `contact`(fullname, phoneno, email,approval)VALUES('%s','%s','%s','%s')",
                mysqli_real_escape_string($connect, $contact->fullname),
                mysqli_real_escape_string($connect, $contact->phoneno),
                mysqli_real_escape_string($connect, $contact->email),
                mysqli_real_escape_string($connect, $contact->approval));
        if(mysqli_query($connect, $query))
        {
            echo "<script type='text/javascript'> alert('Newsletter subscription request sent')</script>";
            mysqli_close($connect);
        }
        else
        {
            echo "<script type='text/javascript'> alert('Something might not right')</script>";
        }
    }
}
