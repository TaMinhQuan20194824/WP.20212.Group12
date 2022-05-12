<html>
    <head><title>Business Registation</title></head>
    <body>
        <h1>Business Registation</h1>
        <form action="add_biz.php" method=post>
            <?php
                $host = 'localhost:3306';
                $user = 'root';
                $passwd = 'Vuivai123';
                $database = 'business_service';
                $connect = mysqli_connect($host, $user, $passwd);
                mysqli_select_db($connect, $database);

                if(array_key_exists("buzName", $_POST)){
                    $buzName = $_POST["buzName"];
                    $address = $_POST["address"];
                    $city = $_POST["city"];
                    $tele = $_POST["tele"];
                    $url = $_POST["url"];
                    $query = "INSERT INTO Businesses VALUES('1', '$buzName','$address','$city', '$tele', '$url')";
                    mysqli_query($connect, $query);

                    if(array_key_exists("categories", $_POST)){
                        $categories = $_POST["categories"];
    
                        $query = "SELECT BusinessID FROM Businesses WHERE Name like '%$buzName%'";
                        $results_id = mysqli_query($connect, $query);
                        $buzID = mysqli_fetch_row($results_id);
                        
                        for($i = 0; $i < count($categories); $i++){
                            $query = "INSERT INTO Biz_Categories VALUES('$buzID[0]','$categories[$i]')";
                            mysqli_query($connect, $query);
                        }
                    }
                    
                    echo 'Record inserted as shown in below<br><br>';
                }
            ?>
            <table>
                <tr>
                    <td>
                        <?php
                            if (!isset($_POST['buzName'])) {
                                print 'Click on one, or control-click <br> on multiple categories';
                            }
                        ?>
                        <br><br>
                        <select name="categories[]" size=4 multiple>
                            <?php
                                $query = "SELECT CategoryID, Title FROM Categories";
                                $results_id = mysqli_query($connect, $query);

                                if ($results_id) {                             
                                    while ($row = mysqli_fetch_row($results_id)){
                                        ?>
                                        <option value="<?php echo $row[0] ?>" <?php if (isset($_POST['categories']) && in_array($row[0], $_POST['categories'])) { ?>selected="true" <?php }; ?>> <?php echo $row[1] ?> </option>
                                        <?php
                                    }
                                } else { 
                                    die ("Query=$query failed!"); 
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td>Business Name: </td>
                                <td><INPUT TYPE="text" NAME="buzName" SIZE=50 MAXLENGTH=50 value="<?php if (isset($_POST['buzName'])) echo $_POST['buzName'];?>"></td >
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><INPUT TYPE="text" NAME="address" SIZE=50 MAXLENGTH=50 value="<?php if (isset($_POST['address'])) echo $_POST['address'];?>"></td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td><INPUT TYPE="text" NAME="city" SIZE=50 MAXLENGTH=50 value="<?php if (isset($_POST['city'])) echo $_POST['city'];?>"></td>
                            </tr>
                            <tr>
                                <td>Telephone:</td>
                                <td><INPUT TYPE="text" NAME="tele" SIZE=50 MAXLENGTH=50 value="<?php if (isset($_POST['tele'])) echo $_POST['tele'];?>"></td>
                            </tr>
                            <tr>
                                <td>URL:</td>
                                <td><INPUT TYPE="text" NAME="url" SIZE=50 MAXLENGTH=50 value="<?php if (isset($_POST['url'])) echo $_POST['url'];?>"></td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </table>
            <br>
            <?php
                if(array_key_exists("buzName", $_POST)){
                    print '<a href="http://localhost/WP.20212.Group12/Lab05/add_biz.php">Add Another Business</a>';
                } else {
                    print '<input type="submit" value="Add Bussiness" style="background-color: lightgray;">';
                }
            ?>
        </form>
    </body>
</html>