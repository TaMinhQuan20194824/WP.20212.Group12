<html>
    <head><title>Date Time Function </title></head>
    <body>
        <font size=5 color="orange"> Get information from two birthdays </font>
        <br></br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            Enter the first name: 
            <input type="text" name="name1" size="15" maxlength="20">

            <br><br>Enter the first birthday:
            <br>
            Day:  
            <input type="text" name="day1" size="1" maxlength="2">
            Month:  
            <input type="text" name="month1" size="1" maxlength="2">
            Year:  
            <input type="text" name="year1" size="2" maxlength="4">
            <br></br><br>

            Enter the second name: 
            <input type="text" name="name2" size="15" maxlength="20">

            <br><br>Enter the second birthday:
            <br>
            Day:  
            <input type="text" name="day2" size="1" maxlength="2">
            Month:  
            <input type="text" name="month2" size="1" maxlength="2">
            Year:  
            <input type="text" name="year2" size="2" maxlength="4">
            <br></br>

            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
            <br></br>

            <?php
                function displayBirthday($name, $month, $day, $year){
                    $tmp = date( 'l, F d, Y', mktime(0,0,0,$month,$day,$year));
                    print("<br>$name's birthday is $tmp");
                }

                function differenceDay($month1, $day1, $year1, $month2, $day2, $year2){
                    $date1 = strtotime("$year1-$month1-$day1");
                    $date2 = strtotime("$year2-$month2-$day2");
                    $datediff = abs($date1 - $date2);
                    return floor($datediff / (60*60*24));
                }

                function getAge($year){
                    $age = (int)date('Y') - (int)$year;
                    return $age;
                }

                if(array_key_exists("day1", $_GET)){
                    $name1 = $_GET["name1"];
                    $day1 = $_GET["day1"];
                    $month1 = $_GET["month1"];
                    $year1 = $_GET["year1"];

                    $name2 = $_GET["name2"];
                    $day2 = $_GET["day2"];
                    $month2 = $_GET["month2"];
                    $year2 = $_GET["year2"];


                    if(is_numeric($month1)&& is_numeric($day1)&& is_numeric($year1) && is_numeric($month2) && is_numeric($day2) && is_numeric($year2)){
                        if(checkdate($month1, $day1, $year1)==false){
                            print("The first birthday is not valid!");
                        } elseif(checkdate($month2, $day2, $year2)==false) {
                            print("The second birthday is not valid!");
                        } else {
                            displayBirthday($name1, $month1, $day1, $year1);
                            displayBirthday($name2, $month2, $day2, $year2);

                            $diff = differenceDay($month1, $day1, $year1, $month2, $day2, $year2);
                            print("<br>The difference in days between two dates is $diff days");
                            
                            $age1 = getAge($year1);
                            $age2 = getAge($year2);
                            print("<br>$name1 is $age1 years old");
                            print("<br>$name2 is $age2 years old");
                        }
                    } else {
                        print("The birthdays is not valid!");
                    } 
                }
            ?>
        </form>
    </body>
</html>