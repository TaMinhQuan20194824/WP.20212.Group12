<html>

    <head>
        <title>User sorting Program</title>
    </head>

    <body>
        <?php
            function user_sort($a, $b)
            {
                // smarts is all-important, so sort it first
                if ($b == 'smarts') {
                    return 1;
                } else if ($a == 'smarts') {
                    return -1;
                }
                return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
            }
            $values = array('name' => 'Buzz Lightyear', 'email_address' => 'buzz@starcommand.gal', 'age' => 32, 'smarts' => 'some');
            if ($submitted) {
                if ($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
                    $sort_type($values, 'user_sort');
                } else {
                    $sort_type($values);
                }
            }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <p>
                <input type="radio" name="sort_type" value="sort" checked="checked" />Standard sort<br />
                <input type="radio" name="sort_type" value="rsort" /> Reverse sort<br />
                <input type="radio" name="sort_type" value="usort" /> User-defined sort<br />
                <input type="radio" name="sort_type" value="ksort" /> Key sort<br />
                <input type="radio" name="sort_type" value="krsort" /> Reverse key sort<br />
                <input type="radio" name="sort_type" value="uksort" /> User-defined key sort<br />
                <input type="radio" name="sort_type" value="asort" /> Value sort<br />
                <input type="radio" name="sort_type" value="arsort" /> Reverse valuesort<br />
                <input type="radio" name="sort_type" value="uasort" /> User-defined value sort<br />
            </p>
            <p align="center"><input type="submit" value="Sort" name="submitted" /></p>
        </form>
        <?php
            $submitted = Null;
            $sort_type = ""
        ?>
        <?php if(isset($_POST['sort_type']) && isset($_POST['submitted'])): ?>
            <?php
                $submitted = $_POST['submitted'];
                $sort_type = $_POST['sort_type']; 
            ?>
        <?php endif; ?>
        <p>Values <?= $submitted ? "sorted by $sort_type" : "unsorted"; ?>:</p>
        <ul>
            <?php
            $sorted = true;
            switch($sort_type){
                case 'sort':
                    sort($values);
                    break;
                case 'rsort':
                    rsort($values);
                    break;
                case 'usort':
                    usort($values, 'user_sort');
                    break;
                case 'ksort':
                    ksort($values);
                    break;
                case 'krsort':
                    krsort($values);
                    break;
                case 'uksort':
                    uksort($values, 'user_sort');
                    break;
                case 'asort':
                    asort($values);
                    break;
                case 'arsort':
                    arsort($values);
                    break;
                case 'uasort':
                    uasort($values, 'user_sort');
                    break;
                default: 
                    $sorted = false;
                    break;
            }
            foreach ($values as $key => $value) {
                echo "<li><b>$key</b>: $value</li>";
            }
            print "<br>";
            ?>
        </ul>
    </body>

</html>