<html>
    <head><title>Conditional Test</title></head>
    <body>
        <?php
            $first = $_GET["firstName"];
            $middle = $_GET["middleName"];
            $last = $_GET["lastName"];

            print("Hi $first! Your fulll name is $last $middle $fist. <br></br>");

            if($first == $last) {
                print("$first and $last are equal");
            }
            
            if($first < $last) {
                print("$first is less than $last");
            }

            if($first > $last) {
                print("$first is larger than $last");
            }
            print("<br></br>");

            $grade1 = $_GET["grade1"];
            $grade2 = $_GET["grade2"];

            $final = (2 * $grade1 + 3 * $grade2) / 5;

            if($final > 89){
                print("Your final grade is $final. You got an A. Congratulation!");
            }
            elseif($final > 79){
                print("Your final grade is $final. You got an B");
            }
            elseif($final > 69){
                print("Your final grade is $final. You got an C");
            }
            elseif($final > 59){
                print("Your final grade is $final. You got an D");
            }
            elseif($final >= 0){
                print("Your final grade is $final. You got an F");
            }
            else{
                print("Illegal grade less than 0. Final gradde = $final");
            }
        ?>
    </body>
</html>