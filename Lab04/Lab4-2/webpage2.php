<?php
    include "exercise5-9.php";
    
    $newpage = new Page("A new page 2", "New page 2", "2022", "User 2");
    $newpage->addContent("Second page");
    $newpage->addContent("Doesnt have content");
    $newpage->get();
?>