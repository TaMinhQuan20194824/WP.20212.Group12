<html>
    <head><title>Business Listings</title></head>
    <body>
        <h1>Business Listings</h1>
        <form action="biz_listing.php" method=get>
            <?php
                $host = 'localhost:3306';
                $user = 'root';
                $passwd = 'Vuivai123';
                $database = 'business_service';
                $connect = mysqli_connect($host, $user, $passwd);
                mysqli_select_db($connect, $database);
            ?>

            <table border="2">
                <tr><td><b>Click on a category to find bussiness listings</b></td></tr>
                    <?php
                        $query = "SELECT CategoryID, Title FROM Categories";
                        $results_id = mysqli_query($connect, $query);
                        if ($results_id) {
                            while ($row = mysqli_fetch_row($results_id)){
                                print "<tr><td><a href= \"http://localhost/WP.20212.Group12/Lab05/biz_listing.php?cat_id=$row[0]\">$row[1]</a></td></tr>";
                            }
                        } else { 
                            die ("Query=$query failed!"); 
                        }
                    ?>
            </table>

            <br>

            <?php
                if(array_key_exists("cat_id", $_GET)){
                    $cat_id = $_GET["cat_id"];
                    $query = "SELECT * FROM Businesses b join Biz_Categories bc on bc.BusinessID = b.BusinessID where bc.CategoryID like '$cat_id'";
                    $results_id = mysqli_query($connect, $query);
                    if ($results_id) {
                        print '<table border=1>';
                        while ($row = mysqli_fetch_row($results_id)){
                            print '<tr>';
                            foreach ($row as $field) {
                                print "<td>$field</td> ";
                            }
                            print '</tr>';
                        }
                        print '</table>';
                    } else { 
                        die ("Query=$query failed!"); 
                    }
                }
            ?>
        </form>
    </body>
</html>