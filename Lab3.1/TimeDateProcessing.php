<html>
    <head><title>Square and Cube</title></head>
    <body>
        <font size="5" color="blue"> Enter your name and select date and time for the appointment </font>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <?php
            if(array_key_exists("name", $_GET)){
                $name = $_GET["name"];
                $day = $_GET["day"];
                $month = $_GET["month"];
                $year = $_GET["year"];
                $hour = $_GET["hour"];
                $min = $_GET["min"];
                $sec = $_GET["sec"];
            } else {
                $name = "None";
                $day = 0 ;
                $month = 0;
                $year = 0;
                $hour = 0;
                $min = 0;
                $sec = 0;
            }
        ?> 
        <br>
        Your name: <input type="text" name="name">
            <table>
                <tr>
                    <td>Date: </td>
                    <td>
                        <select name="day">
                        <?php
                            for($i = 0; $i <= 31; $i++){
                                if($day == $i){
                                    print("<option selected> $i </option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                        ?>
                        </select>
                    </td>
                    <td>
                        <select name="month">
                        <?php
                            for($i = 0; $i <= 12; $i++){
                                if($month == $i){
                                    print("<option selected> $i </option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                        ?>
                        </select>
                    </td>
                    <td>
                        <select name="year">
                        <?php
                            for($i = 2022; $i <= 3000; $i++){
                                if($year == $i){
                                    print("<option selected> $i </option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Time: </td>
                    <td>
                        <select name="hour">
                        <?php
                            for($i = 0; $i <= 23; $i++){
                                if($hour == $i){
                                    print("<option selected> $i </option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                        ?>
                        </select>
                    </td>
                    <td>
                        <select name="min">
                        <?php
                            for($i = 0; $i <= 59; $i++){
                                if($min == $i){
                                    print("<option selected> $i </option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                        ?>
                        </select>
                    </td>
                    <td>
                        <select name="sec">
                        <?php
                            for($i = 0; $i <= 59; $i++){
                                if($sec == $i){
                                    print("<option selected> $i </option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"><input type="submit" value="Submit"></td>
                    <td align="left"><input type="reset" value="Reset"></td>
                </tr>
            </table>
        <?php
            if(array_key_exists("name", $_GET)){
                $name = $_GET["name"];
                $day = $_GET["day"];
                $month = $_GET["month"];
                $year = $_GET["year"];
                $hour = $_GET["hour"];
                $min = $_GET["min"];
                $sec = $_GET["sec"];
                $numOfDays = 0;
                $isLeapYear = false;
                if($year % 4 == 0){
                    $isLeapYear = true;
                    if($year % 100 == 0 && $year % 400 != 0){
                        $isLeapYear = false;
                    }
                }
                switch($month){
                    case 1:
                    case 3:
                    case 5:
                    case 7:
                    case 8:
                    case 10:
                    case 12:
                        $numOfDays = 31;
                        break;
                    case 4:
                    case 6:
                    case 9:
                    case 11:
                        $numOfDays = 30;
                        break;
                    case 2:
                        if($isLeapYear)
                            $numOfDays = 29;
                        else
                            $numOfDays = 28;
                        break;
                }
                print("Hi $name!");
                if($day > $numOfDays){
                    print("Wrong day's choice, do it again!");
                } else {
                    print("You have chosen to have an appointment on $hour:$min:$sec, $day/$month/$year");
                    print("<br>");

                    print("More information");
                    print("<br>");
                    $time_concor = "AM";
                    if($hour > 12){
                        $time_concor = "PM";
                    }
                    $hour = $hour % 12;
                    print("In 12 hours, the time and date is $hour:$min:$sec $time_concor $day/$month/$year");
                    print("<br>");
                    print("This month has $numOfDays");
                }
            }
        ?>
        </form>
    </body>
</html>