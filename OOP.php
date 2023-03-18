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

		// method to display info, including newVar
		public function printInfo() {
			parent::displayInfo();
			echo "New: " . $this->newVar . "<br>";
		}
	}

	// instantiate objects
	$obj1 = new ParentClass("hello", 123, true);
	$obj2 = new ChildClass("world", 456, false, "new");

	// display object info
	echo "<h3>Parent Object:</h3>";
	$obj1->displayInfo();
	echo "<h3>Child Object:</h3>";
	$obj2->printInfo();

	// grandchild class
class GrandChildClass extends ChildClass {
    private $extraVar;

    // constructor with additional parameter
    public function __construct($str, $int, $bool, $new, $extra) {
        parent::__construct($str, $int, $bool, $new);
        $this->extraVar = $extra;
    }

    // getter for extraVar
    public function getExtraVar() {
        return $this->extraVar;
    }

    // method to display info, including extraVar
    public function printExtraInfo() {
        parent::printInfo();
        echo "Extra: " . $this->extraVar . "<br>";
    }
}

// instantiate objects
$obj3 = new GrandChildClass("hello", 123, true, "new", "extra");

// display object info
echo "<h3>Grandchild Object:</h3>";
$obj3->printExtraInfo();

// second child class
class SecondChildClass extends ParentClass {
    private $secondVar;

    // constructor with additional parameter
    public function __construct($str, $int, $bool, $second) {
        parent::__construct($str, $int, $bool);
        $this->secondVar = $second;
    }

    // getter for secondVar
    public function getSecondVar() {
        return $this->secondVar;
    }

    // method to display info, including secondVar
    public function printSecondInfo() {
        parent::displayInfo();
        echo "Second: " . $this->secondVar . "<br>";
    }
}

// instantiate objects
$obj4 = new SecondChildClass("hello", 123, true, "second");

// display object info
echo "<h3>Second Child Object:</h3>";
$obj4->printSecondInfo();

echo "<h3>Parent Object:</h3>";
$obj1->displayInfo();



	
	?>

</body>
</html>