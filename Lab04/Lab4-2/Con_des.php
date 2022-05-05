<?php    
    class BaseClass {
        function __construct() {
            print ("In BaseClass constructor<br>");
        }
    }
    class SubClass extends BaseClass {
        function __construct() {
            parent::__construct();
            print ("In SubClass constructor<br>");
        }       
    }
    $obj = new BaseClass();
    //when create a new BaseClass the construction will be called so that it print out the line "In BaseClass constructor"
    $obj = new SubClass();
    //when create a new SubClass, the construction which included the function contruct of parent class will be called 
    //so that it print out two lines
?>