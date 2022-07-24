<?php
require 'credentials.php';

$eid = $_GET["eid"];
$approval ="Allowed";
$napproval="Not Allowed";

$connect = mysqli_connect($host,$user,$password);
        mysqli_select_db($connect, $database);
$query = "SELECT * FROM contact where id = '$eid'";
$res = mysqli_query($connect, $query);

while ($row = mysqli_fetch_array($res))
{
    $id =$row["approval"];
}

if($id == "Not Allowed")
{
    $queryupd = "UPDATE contact SET `approval`= '$approval' WHERE id = '$eid'";
    if(mysqli_query($connect, $queryupd))
    {
        echo '<script>alert("Subscriber status changed to Allowed") </script>' ;
        //header('Location: messages.php');
        echo '<meta http-equiv="refresh" content="1; URL=messages.php" />';
    }
}
else
{
    $queryup ="UPDATE contact SET `approval`= '$napproval' WHERE id = '$eid' ";
    if(mysqli_query($connect, $queryup))
    {
        echo '<script>alert("Subscriber status changed to Not Allowed") </script>' ;
	//header('Location: messages.php');
        echo '<meta http-equiv="refresh" content="1; URL=messages.php" />';
    }
}
?>

