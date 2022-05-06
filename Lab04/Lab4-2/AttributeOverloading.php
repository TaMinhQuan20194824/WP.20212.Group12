<html>
    <head>
        <title>Create Class </title>
    </head>
    <body>
        <?php 
            class PropertyTest {
                /** Location for over loaded data */
                private $data = array();

                /** Overloading not used on declared properties. */
                public $declared = 1;

                /** Overloading only used on this when accessed outside the class. */
                private $hidden = 2;

                public function __set($name, $value) {
                    echo "Setting '$name' to '$value'<br>";
                    $this->data[$name] = $value;
                }

                public function __get($name) {
                    echo "Getting '$name'<br>";
                    if (array_key_exists($name, $this->data)) {
                        return $this->data[$name];
                    }
                }

                public function __isset($name) {
                    echo "Is '$name' set?<br>";
                    return isset($this->data[$name]);
                }

                public function __unset($name) {
                    echo "Unsetting '$name'<br>";
                    unset($this->data[$name]);
                }

                public function getHidden() {
                    return $this->hidden;
                }
            }

            $obj = new PropertyTest;

            $obj->a = 1;
            echo $obj->a."<br><br>";

            var_dump(isset($obj->a));
            unset($obj->a);
            var_dump(isset($obj->a));
            echo "\n";

            echo $obj->declared."<br><br>";

            //privates are visible inside the class, so __get() not used
            echo $obj->getHidden()."<br>";

            //privates are not visible inside the class, so __get() is used
            echo $obj->hidden."<br>";
        ?>
    </body>
</html>