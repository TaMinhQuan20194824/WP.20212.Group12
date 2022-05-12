<html>
    <head><title>Insert Results</title></head>
    <body>
        <?php
        $host = 'localhost:3306';
        $user = 'root';
        $passwd = 'Vuivai123';
        $database = 'sys';
        $connect = mysqli_connect($host, $user, $passwd);
        $table_name = 'Products';
        $Item = $_POST['Item'];
        $Weight = $_POST['Weight'];
        $Cost = $_POST['Cost'];
        $Quantity = $_POST['Quantity'];
        $query = "INSERT INTO $table_name VALUES ('0','$Item','$Cost','$Weight','$Quantity')";
        print "The Query is <i>$query</i><br>";
        mysqli_select_db($connect, $database);
        print '<br><font size="4" color="blue">';
        if (mysqli_query($connect, $query, )) {
            print "Insert into $database was successful!</font>";
        } else {
            print "Insert into $database failed!</font>";
        } mysqli_close($connect);
        ?>  
    </body>
</html>