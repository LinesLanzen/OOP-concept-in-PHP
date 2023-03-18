<!DOCTYPE html>
<html>
<head>
	<title>PHP Inheritance</title>
</head>
<body>

	<?php

// parent class
class ParentClass {
    private $strVar;
    private $intVar;
    private $boolVar;

    // constructor
    public function __construct($str, $int, $bool) {
        $this->strVar = $str;
        $this->intVar = $int;
        $this->boolVar = $bool;
    }

    // getter and setter for strVar
    public function getStrVar() {
        return $this->strVar;
    }
    public function setStrVar($str) {
        $this->strVar = $str;
    }

    // getter and setter for intVar
    public function getIntVar() {
        return $this->intVar;
    }
    public function setIntVar($int) {
        $this->intVar = $int;
    }

    // getter and setter for boolVar
    public function getBoolVar() {
        return $this->boolVar;
    }
    public function setBoolVar($bool) {
        $this->boolVar = $bool;
    }

    // method to display info
    public function displayInfo() {
        echo "String: " . $this->strVar . "<br>";
        echo "Integer: " . $this->intVar . "<br>";
        echo "Boolean: " . ($this->boolVar ? 'true' : 'false') . "<br>";
    }
}

// child class
class ChildClass extends ParentClass {
    private $newVar;

    // constructor with additional parameter
    public function __construct($str, $int, $bool, $new) {
        parent::__construct($str, $int, $bool);
        $this->newVar = $new;
    }

    // getter for newVar
    public function getNewVar() {
        return $this->newVar;
    }

    // override the displayInfo() method to add newVar
    public function displayInfo() {
        parent::displayInfo();
        echo "New: " . $this->newVar . "<br>";
    }

    // overload the printInfo() method to accept a parameter
    public function printInfo($param) {
        echo "Parameter: " . $param . "<br>";
        $this->displayInfo();
    }
}

// instantiate objects
$obj1 = new ParentClass("hello", 123, true);
$obj2 = new ChildClass("world", 456, false, "new");

// display object info
echo "<h3>Parent Object:</h3>";
$obj1->displayInfo();
echo "<h3>Child Object:</h3>";
$obj2->printInfo("hello");


	?>

</body>
</html>