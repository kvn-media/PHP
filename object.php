<!-- When creating a program to use objects, you need to design a composite of data and
code called a class. Each new object based on this class is called an instance (or occurrence) of that class. -->

<!-- The data associated with an object is called its properties; the functions it uses are
called methods. In defining a class, you supply the names of its properties and the
code for its methods. -->

<!-- When creating a new object, you can pass a list of arguments to the class being called.
These are passed to a special method within the class, called the constructor, which
initializes various properties. -->

<?php
    // Declaring a class and examining an object
    $object = new User;
    print_r($object);

    class User
    {
        public $name, $password;

        function save_user()
        {
            echo "Save User code goes here";
        }
    }
?>

<?php
    // Creating and interacting with an object
    $object = new User;
    print_r($object);

    $object->name       = "Joe";
    $object->password   = 'myPass';
    print_r($object); echo "<br>";

    $object->save_user();

    class User
    {
        public $name, $password;

        function save_user()
        {
            echo "Save User code goes here";
        }
    }
?>

<?php
    // Copying an object?
    $object1    = new User();
    $object1->name  = "Alice";
    $object2    = $object1;
    $object2->name  = "Amy";

    echo "object1 name " . $object1->name . "<br>";
    echo "object2 name " . $object1->name;

    class User
    {
        public $name;
    }
?>

<?php
    // Cloning an object
    $object1        = new User();
    $object1->name  = "Alice";

    $object2        = clone $object1;
    $object2->name  = "Amy";
    
    echo "object1 name = " . $object1->name . "<br>";
    echo "object2 name = " . $object2->name;

    class User
    {
        public $name;
    }
?>

<?php
    // Creating a constructor method
    class User
    {
        function __construct($param1, $param2)
        {
            // Constructor statements goes here
            // public $username = "Guess";
        }
    }
?>

<?php
    // Creating a destructor method
    class User
    {
        function __destruct()
        {
            // Destructor code goes here
        }
    }
?>

<?php
    class User
    {
        public $name, $password;

        // Using the variable $this in a method
        function get_password()
        {
            return $this->password;
        }
    }
?>

<?php
    // Defining a property implicitly
    $object1    = new User();
    $object1->name  = "Alice";

    echo $object1->name;

    class User{}
?>

<?php
    // Valid and invalid property declarations
    class Test
    {
        public $name    = "Paul Smith"; // Valid
        public $age     = 42;           // Valid
        // public $time    = time();       // Invalid - calls a function
        // public $score   = $level * 2;   // Invalid - uses an expression
    }
?>

<?php
    // Defining constants within a class
    Translate::lookup();

    class Translate
    {
        const ENGLISH = 0;
        const JAPANESE = 1;
        const FRENCH  = 2;
        const GERMAN  = 3;
        // ...

        static function lookup()
        {
            echo self::JAPANESE;
        }
    }
?>

<?php
    // Changing property and method scope
    class Example
    {
        var $name       = "Michael"; // Same as public but deprecated
        public $age     = 23;        // Public property
        protected $userCount;        // Protected property

        private function admin() // Private method
        {
            // Admin code goes here
        }
    }
?>

<?php
    // Creating and accessing a static method
    User::pwd_string();

    class User
    {
        static function pwd_string()
        {
            echo "Please enter your password";
        }
    }
?>

<?php
    // Defining a class with a static property
    $temp = new Test();

    echo "Test A: " . Test::$static_property . "<br>";
    echo "Test B: " . $temp->get_sp() . "<br>";
    echo "Test C: " . $temp->static_property . "<br>";
    
    class Test
    {
        static $static_property = "I'm static";

        function get_sp()
        {
            return self::$static_property;
        }
    }
?>

<?php
    // Inheriting and extending a class
    $object             = new Subscriber;
    $object->name       = "Fred";
    $object->password   = "pword";
    $object->phone      = "012 345 6789";
    $object->email      = "fred@blogs.com";
    $object->display();

    class User
    {
        public $name, $password;

        function save_user()
        {
            echo "Save User code goes here";
        }
    }

    class Subscriber extends User
    {
        public $phone, $email;

        function display()
        {
            echo "Name:  " . $this->name    . "<br>";
            echo "Pass:  " . $this->password . "<br>";
            echo "Phone: " . $this->phone   . "<br>";
            echo "Email: " . $this->email;
        }
    }
?>

<?php
    // Overriding a method and using the parent operator
    $object = new Son;
    $object->test();
    $object->test2();

    class Dad
    {
        function test()
        {
            echo "[Class Dad] I am your Father<br>";
        }
    }

    class Son extends Dad
    {
        function test()
        {
            echo "[Class Son] I am Luke<br>";
        }
        function test2()
        {
            parent::test();
        }
    }
?>

<?php
    // Calling the parent class constructor
    $object = new Tiger();

    echo "Tigers have...<br>";
    echo "Fur: " . $object->fur . "<br>";
    echo "Stripes: " . $object->stripes;

    class Wildcat
    {
        public $fur; // Wildcat have fur

        function __construct()
        {
            $this->fur = "True";
        }
    }

    class Tiger extends Wildcat
    {
        public $stripes; // Tigers have stripes

        function __construct()
        {
            parent::__construct(); // Call parent constructor first
            $this->stripes = "True";
        }
    }
?>

<?php
    class User
    {
        final function copyright()
        {
            echo "This class was written by Joe Smith";
        }
    }
?>