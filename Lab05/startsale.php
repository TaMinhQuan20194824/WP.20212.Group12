<html>
    <head><title>Search Results</title></head>
    <body>
        <font size="5" color="blue"> Select Product We Just Sold: </font><br>
        <form action="sale.php" method=post>
            <?php
                $host = 'localhost:3306';
                $user = 'root';
                $passwd = 'Vuivai123';
                $database = 'sys';
                $connect = mysqli_connect($host, $user, $passwd);
                $table_name = 'Products';
                mysqli_select_db($connect, $database);

                $product_name_query = "SELECT Product_desc FROM $table_name";
                $results_id = mysqli_query($connect, $product_name_query);

                if ($results_id) {

                    while ($row = mysqli_fetch_row($results_id)) {
                        foreach ($row as $field) {
                            print "$field<input type=\"radio\" name=\"Product\" value=\"$field\"> ";
                        }
                    }
                } else { 
                    die ("query = $Query Failed");
                }

            ?>
            <br>
            <input type="submit" value="Click to Submit">
            <input type="reset" value="Reset">
        </form>

        <?php
            $query = "SELECT * FROM $table_name";
            print "The query is <i>$query</i>";
            $results_id = mysqli_query($connect, $query);
            if ($results_id) {
                print '<br><table border=1>';
                print '<th>Num<th>Product<th>Cost<th>Weight <th>Count';
                while ($row = mysqli_fetch_row($results_id)) {
                    print '<tr>';
                    foreach ($row as $field) {
                        print "<td>$field</td> ";
                    }
                    print '</tr>';
                }
            } else { 
                die ("query = $Query Failed");
            }
            mysqli_close($connect);
        ?> 
    </body>
</html>