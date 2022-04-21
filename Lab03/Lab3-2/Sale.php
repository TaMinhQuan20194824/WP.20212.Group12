<html>
    <head><title>Our Shop</title></head>
    <body>
        <?php
            $today = date('l, F d, Y');
            print("Welcome on $today to our huge blowout sale! </font>");
            $month = date('m');
            $year = date('Y');
            $dayofyear = date('z');
            if($month<12 & $year==2022){
                $daysleft = (365 - $dayofyear + 10);
                print("<br> There are $daysleft sales days left");
            } elseif($month==01 & $year==2023) {
                if($dayofyear<=10){
                    $daysleft = (10 -$dayofyear);
                    print("<br< There are $daysleft sales days left");
                } else {
                    print("<br>Sorry, our sale is over.");
                }
            } else {
                print("<br>Sorry, our sale is over.");
            }
            print("<br>Our Sales Ends January 10, 2023")

        ?>
    </body>
</html>