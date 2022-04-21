<html>
    <head>
        <title>Guess a number</title>
    </head>
    <body>
        <font size=5 color="blue"> Guess a number from 0 to 100 </font>
        <br>
        <form action="" method="POST">
            Your guess:
            <input type="text" name="number" size="5" maxlength="5">
            <br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Reset">
            <br>
            <?php
            session_start();
            $guess_times += 1;
            print("$random_num<br>");
            if (!$_POST['submit']) {
                $_SESSION["count"] = 0;
                $_SESSION["numtobeguessed"] = rand(0,100);
            } else {
                $_SESSION["count"]++;
                if (!is_numeric($_POST["number"])) {
                    print("You must enter a number!<br>");
                } else {
                    $number = $_POST["number"];
                    $random_num = $_SESSION["numtobeguessed"];
                    if ($number < $random_num) {
                        print("<br>Wrong. Please try a higher number. You have guessed ".$_SESSION["count"]." time!<br>");
                    } else if ($number > $random_num) {
                        print("<br>Wrong. Please try a lower number. You have guessed ".$_SESSION["count"]." time!<br>");
                    } else {
                        print("<br>Correct number! You guessed the right number in ".$_SESSION["count"]." attempt(s)!<br>");
                    }
                }
            }
            ?>
        </form>
    </body>
</html>
