<?php
require 'Entity/TableEntity.php';

class TableModel {
    
    function InsertTableRecord(TableEntity $table)
    {
        require 'credentials.php';
        $connect = mysqli_connect($host,$user,$password);
        mysqli_select_db($connect, $database);
        $query = sprintf("INSERT INTO tablebook(Title,FName,LName,Email,National,Country,Phone,Tbltyp,Purpose,Meal,time,date,status)VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
                mysqli_real_escape_string($connect, $table->Title),
                mysqli_real_escape_string($connect, $table->FName),
                mysqli_real_escape_string($connect, $table->LName),
                mysqli_real_escape_string($connect, $table->Email),
                mysqli_real_escape_string($connect, $table->National),
                mysqli_real_escape_string($connect, $table->Country),
                mysqli_real_escape_string($connect, $table->Phone),
                mysqli_real_escape_string($connect, $table->Tbltyp),
                mysqli_real_escape_string($connect, $table->Purpose),
                mysqli_real_escape_string($connect, $table->Meal),
                mysqli_real_escape_string($connect, $table->time),
                mysqli_real_escape_string($connect, $table->date),
                mysqli_real_escape_string($connect, $table->status));
        $result = mysqli_query($connect, $query);
        if($result==true)
        {
            echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
            mysqli_close($connect);
        }
        else
        {
            echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
        }
    }
}
