<html>
    <head><title>Convert Radians to Degrees and vice versa </title></head>
    <body>
        <font size=5 color="blue"> Convert Radians to Degrees and vice versa </font>
        <br></br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <input type="radio" name="rd" value="1" checked> Radians to Degrees
            <br>
            <input type="radio" name="rd" value="0"> Degrees to Radians
            <br>
            Enter a number to convert:
            <input type="text" name="number" size="5" maxlength="3">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
            <br></br>
            <?php
                function convert($rd, $number){
                    $pi = 3.141592654;
                    if($rd==1){
                        $ret = $number * 180/$pi;
                    } else{
                        $ret = $number * $pi/180;
                    }
                    return $ret;
                }
                if(array_key_exists("number", $_GET)){
                    $number = $_GET["number"];
                    $rd = $_GET["rd"];
                    $ret = convert($rd, $number);
                    if($rd==1){
                        print("$number radians is $ret degrees");
                    } else{
                        print("$number degrees is $ret radians");
                    }
                }
            ?>
        </form>
    </body>
</html>