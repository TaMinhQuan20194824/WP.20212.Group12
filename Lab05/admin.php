<html>
    <head><title>Categories Administration</title></head>
    <body>
        <h1>Categories Administration</h1>
        <form action="admin.php" method=post>
            <?php
                $host = 'localhost:3306';
                $user = 'root';
                $passwd = 'Vuivai123';
                $database = 'business_service';
                $connect = mysqli_connect($host, $user, $passwd);
                mysqli_select_db($connect, $database);

                $table_name = 'Categories';

                if(array_key_exists("catID", $_POST)){
                    $catID = $_POST["catID"];
                    $title = $_POST["title"];
                    $description = $_POST["description"];
                    $query = "INSERT INTO $table_name VALUES('$catID','$title','$description')";
                    mysqli_query($connect, $query);
                }

                $query = "SELECT * FROM $table_name";
                $results_id = mysqli_query($connect, $query);
                if ($results_id) {
                    print '<table cellspacing="1">';
                    print '<th style="background-color: lightgrey;" >CatID <th style="background-color: lightgrey;" >Title <th style="background-color: lightgrey;">Description';
                    while ($row = mysqli_fetch_row($results_id)){
                        print '<tr>';
                        foreach ($row as $field) {
                            print "<td>$field</td>";
                        }
                        print '</tr>';
                    }
                } else { 
                    die ("Query=$query failed!"); 
                }
                mysqli_close($connect);
            ?>
            <tr>
            <td><INPUT TYPE="text" NAME="catID" SIZE=20 MAXLENGTH=50></td>
            <td><input TYPE="text" NAME="title" SIZE=50 MAXLENGTH=50></td>
            <td><input TYPE="text" NAME="description" SIZE=50 MAXLENGTH=50></td>
            </tr>
            </table>

            <input type="submit" value="Add Category" style="background-color: lightgray;">
        </form>
    </body>
</html>