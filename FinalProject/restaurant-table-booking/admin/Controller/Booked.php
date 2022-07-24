<?php


class Booked {
    
    function Book()
    {
        require 'credentials.php';
        
        $connect = mysqli_connect($host,$user,$password);
        mysqli_select_db($connect, $database);
        $query = "SELECT * FROM table";
        $res = mysqli_query($connect, $query);
        $r = 0;
        $sc = 0;
        $gh = 0;
        $sr = 0;
        $dr = 0;
        
        while ($row = mysqli_fetch_array($res))
        {
            $r = $r + 1;
            $s = $row["type"];
            $p = $row["place"];
            if ($s == 2) 
            {
                $sc = $sc + 1;
            }
            if ($s == 3) {
                $gh = $gh + 1;
            }
            if ($s == 4) {
                $sr = $sr + 1;
            }
            if ($s == 5) {
                $dr = $dr + 1;
            }
        }
    }
}
