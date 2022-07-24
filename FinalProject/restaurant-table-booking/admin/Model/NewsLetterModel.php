<?php
require 'Entity/NewsLetterEntity.php';

class NewsLetterModel {
    
    function InsertNewsLetters(NewsLetterEntity $news)
    {
        require 'credentials.php';
        
        $connect = mysqli_connect($host,$user,$password);
        mysqli_select_db($connect, $database);
        $query = sprintf("INSERT INTO newsletterlog(title,subject,news)VALUES('%s','%s','%s')",
                mysqli_real_escape_string($connect, $news->title),
                mysqli_real_escape_string($connect, $news->subject),
                mysqli_real_escape_string($connect, $news->news));
        if(mysqli_query($connect, $query))
        {
            echo "<script type='text/javascript'> alert('NewsLetter has been sent')</script>";
            mysqli_close($connect);
        }
        else
        {
            echo "<script type='text/javascript'> alert('Something might not right')</script>";
        }
    }
}
