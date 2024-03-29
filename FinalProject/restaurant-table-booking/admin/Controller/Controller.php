<?php
require 'Model/TableModel.php';

class Controller {
    
    function InsertTableRecord()
    {   
        $title = $_POST["title"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $nation = $_POST["nation"];
        $country = $_POST["country"];
        $phone = $_POST["phone"];
        $tble = $_POST["table"];
        $purpose = $_POST["purpose"];
        $meal = $_POST["meal"];
        $time = $_POST["tme"];
        $date = $_POST["dte"];
        $status = "NOT CONFIRM";
        
        $table = new TableEntity(-1,$title, $fname, $lname, $email, $nation, $country, $phone, $tble, $purpose, $meal, $time, $date, $status);
        $tableModel = new TableModel();
        $tableModel->InsertTableRecord($table);
    }
    function CheckCode()
    {
        require '../credentials.php';
        
        //Check if the code is valid or not.
        $codel = $_POST["cde"];
        $code = $_POST["cd"];
        $email = $_POST["email"];
        if($codel == $code)
        {
            $connect = mysqli_connect($host,$user,$password);
            mysqli_select_db($connect, $database);
            $query = "SELECT * from tablebook where email = '$email'";
            $result = mysqli_query($connect, $query);
            $data = mysqli_fetch_array($result,MYSQLI_NUM);
            // check if user is booked any table or not
            if($data != false)
            {
                echo "<script type='text/javascript'> alert('User already in existence')</script>";
            }
            else
            {
                $controller = new Controller();
                $controller->InsertTableRecord();
            }
        }
        else 
        {
            echo "<script type='text/javascript'> alert('Entered code is invalid')</script>";
        }
    }
    function LoginCheck()
    {
        require '../credentials.php';
        
        $username = $_POST["user"];
        $pwd = $_POST["pass"];
        $connect = mysqli_connect($host,$user,$password);
        mysqli_select_db($connect, $database);
        $query = "SELECT id FROM login WHERE uname = '$username' and pass = '$pwd'";
        $res = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($res);
        
        if($row != false)
        {
            $_SESSION["user"] = $username;
            //header("location: ../home.php");
            echo '<meta http-equiv="refresh" content="1; URL=home.php" />';
        }
        else
        {
            echo '<script>alert("Your Login Name or Password is invalid") </script>';
        }
    }
    function AvailableTables()
    {
        require '../credentials.php';
        $connect = mysqli_connect($host,$user,$password);
        mysqli_select_db($connect, $database);
        
        $querys = "SELECT * FROM alltables";
        $result = mysqli_query($connect, $querys);
        while ($row = mysqli_fetch_array($result))
        {
            $type = $row["type"];
            if ($type == "Table for 2")
            {
                echo "<div class='col-md-3 col-sm-12 col-xs-12'>
                        <div class='panel panel-primary text-center no-boder bg-color-blue'>
                            <div class='panel-body'>
                                <i class='fa fa-users fa-5x'></i>
                                <h3>" . $row["purpose"] . "</h3>
                            </div>
                            <div class='panel-footer back-footer-blue'>
                                " . $row["type"] . "
                            </div>
                            <div class='panel-footer back-footer-blue'>
                                " . $row["status"] . "
                            </div>
                        </div>
                      </div>";
            }
            else if ($type == "Table for 3")
            {
                 echo "<div class='col-md-3 col-sm-12 col-xs-12'>
                        <div class='panel panel-primary text-center no-boder bg-color-green'>
                            <div class='panel-body'>
                                <i class='fa fa-users fa-5x'></i>
				<h3>" . $row["purpose"] . "</h3>
                            </div>
                            <div class='panel-footer back-footer-green'>
				" . $row["type"] . "
                            </div>
                            <div class='panel-footer back-footer-green'>
				" . $row["status"] . "
                            </div>
                        </div>
                      </div>";
            }
            else if ($type == "Table for 4")
            {
                echo "<div class='col-md-3 col-sm-12 col-xs-12'>
                        <div class='panel panel-primary text-center no-boder bg-color-brown'>
                            <div class='panel-body'>
				<i class='fa fa-users fa-5x'></i>
				<h3>" . $row["purpose"] . "</h3>
                            </div>
                            <div class='panel-footer back-footer-brown'>
                                " . $row["type"] . "
                            </div>
                            <div class='panel-footer back-footer-brown'>
                                " . $row["status"] . "
                            </div>
                        </div>
                     </div>";
            }
            else if ($type == "Table for 5")
            {
                echo "<div class='col-md-3 col-sm-12 col-xs-12'>
                        <div class='panel panel-primary text-center no-boder bg-color-red'>
                            <div class='panel-body'>
				<i class='fa fa-users fa-5x'></i>
				<h3>" . $row["purpose"] . "</h3>
                            </div>
                            <div class='panel-footer back-footer-red'>
                                " . $row["type"] . "
                            </div>
                            <div class='panel-footer back-footer-red'>
                                " . $row["status"] . "
                            </div>
                        </div>
                      </div>";
            }
        }
    }
}
