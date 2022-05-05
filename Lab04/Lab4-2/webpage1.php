<?php
    include "exercise5-9.php";
    
    $newpage = new Page("A new page", "New page", "2022", "User 1");
    $newpage->addContent("First page");
    $newpage->get();
?>