<html>
    <head><title> Receiving Input </title> </head>
    <body>
        <h1 style="color: darkblue;">Hanoi University of Science and Technology</h1>
        <h2> Thank You for Completing our survey! This is what you have filled in:</h2>
        <?php
            $name = $_POST["name"];
            $stuID = $_POST["stuID"];
            $year = $_POST["year"];
            $school = $_POST["school"];
            $skill = $_POST["skill"];
            $Comments = $_POST["Comments"];
            $pass = $_POST["pass"];

            print("<br>Your name is $name<br>");
            print("<br>Your Student ID Number is $stuID <br>");
            print("<br>You are $year student<br>");
            print("<br>You are student of $school<br>");
            print("<br>What you interested in this activity is: $skill<br>");
            print("<br>You have leave a comment: $Comments<br>");
            print("<br>Your password is: ");
            $i = 1;
            for($i=1; $i<=strlen($pass); $i++){
                print("*");
            }
            
            
        ?>
    </body>
</html>