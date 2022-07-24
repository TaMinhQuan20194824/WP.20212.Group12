<?php

require 'credentials.php';

$connect = mysqli_connect($host, $user, $password);
mysqli_select_db($connect, $database);

$id = $_GET["eid"];
$query = sprintf("DELETE FROM login WHERE id = $id");
if (mysqli_query($connect, $query)) {
    echo' <script language="javascript" type="text/javascript"> alert("Deleted") </script>';
    mysqli_close($connect);
}
echo '<meta http-equiv="refresh" content="1; URL=usersettings.php" />';
?>

