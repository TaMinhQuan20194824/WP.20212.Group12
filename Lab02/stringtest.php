<html>
    <head>
        <title>
            String test
        </title>
    </head>
    <body>
        <?php
        $firstname = "John";
        $lastname = "Smith";
        $fullname = $firstname . $lastname;
        print ("Fullname=$fullname<br>");
        ?> 

        <?php
        $fullname2 = "$firstname $lastname";
        print("Fullname=$fullname2<br>");
        ?>

        <?php
        $comments = "Good Job";
        $len = strlen($comments);
        print ("Length=$len<br>");
        ?>

        <?php
        $in_name = " Joe Jackson ";
        $name = trim($in_name);
        print ("name=$name$name<br>");
        ?>

        <?php
        $inquote = "Now Is The Time";
        $lower = strtolower($inquote);
        $upper = strtoupper($inquote);
        print ("upper=$upper lower=$lower<br>");
        ?>

        <?php
        $date = "12/25/2002";
        $month = substr($date, 0, 2);
        $day = substr($date, 3, 2);
        $year = substr($date, 6);
        print ("Month=$month Day=$day Year=$year<br>");
        ?>
    </body>
</html>