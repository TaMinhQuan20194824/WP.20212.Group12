<html>
    <head>
        <title>Create Class </title>
    </head>
    <body>
        <?php 
            class ObjectTracker {
                private static $nextSerial = 0;
                private $id, $name;
                function __construct($name) {
                    $this->name = $name;
                    $this->id = ++self::$nextSerial;
                }
                function __clone(){
                    $this->name = "Clone of $this->name";
                    $this->id = ++self::$nextSerial;
                }
                function getId() { 
                    return($this->id); 
                }
                function getName() { 
                    return($this->name); 
                }
                function setName($name) { 
                    $this->name = $name; 
                }
            }
            $ot = new ObjectTracker("Zeev's Object");
            // $ot2 = clone $ot; 
            $ot2 = $ot; 
            $ot2->setName("Another object");
            print($ot->getId(). " " .$ot->getName(). "<br>");
            print($ot2->getId(). " " .$ot2->getName(). "<br>");
            //if using operator =, u $ot and $ot2 point to the same underlying instance of ObjectTracker
            //Changing $ot attributes’ value also make $ot2 attributes changing
        ?>
    </body>
</html>