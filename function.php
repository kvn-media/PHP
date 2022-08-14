<?php
    // Three string functions
    echo strrev(" .dlrow olleH"); // Reverse string
    echo str_repeat("Hip ", 2); // Repeat string
    echo strtoupper("hooray!"); // String to uppercase
?>

<?php
    // // returning value // cleaning up a full name
    // echo fix_names("WILLIAM", "henry", "gatES");
    // // defining function
    // function fix_names($n1, $n2, $n3)
    // {
    //     $n1 = ucfirst(strtolower($n1));
    //     $n2 = ucfirst(strtolower($n2));
    //     $n3 = ucfirst(strtolower($n3));
        
    //     return $n1 . "" . $n2 . "" . $n3;
    // }
?>

<?php
    // Returning multiple values in an array
    // $name = fix_names("WILLIAM", "henry", "gatES");
    // echo $names[0] . " " . $names[1] . " " . $names[2];

    // function fix_names($n1, $n2, $n3)
    // {
    //     $n1 = ucfirst(strtolower($n1));
    //     $n2 = ucfirst(strtolower($n2));
    //     $n3 = ucfirst(strtolower($n3));

    //     return array($n1, $n2, $n3);
    // }
?>

<?php
    // Passing values to a function by reference
    // $a1= "WILLIAM";
    // $a2 = "henry";
    // $a3 = "gatES";

    // echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    // fix_names($a1, $a2, $a3);
    // echo $a1 . " " . $a2 . " " . $a3;

    // function fix_names(&$n1, &$n2, &$n3)
    // {
    //     $n1 = ucfirst(strtolower($n1));
    //     $n2 = ucfirst(strtolower($n2));
    //     $n3 = ucfirst(strtolower($n3));
    // }
?>

<?php
    // Returning values in global variables
    $a1 = "WILLIAM";
    $a2 = "henry";
    $a3 = "gatES";

    echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    fix_names();
    echo $a1 . " " . $a2 . " " . $a3;

    function fix_names()
    {
    global $a1; $a1 = ucfirst(strtolower($a1));
    global $a2; $a2 = ucfirst(strtolower($a2));
    global $a3; $a3 = ucfirst(strtolower($a3));
    }
?>

<?php
    // include a php file // include a php file only once
    // include_once "library.php"

    // your code goes here
    // Checking for a function’s existence
    if (function_exists("array_combine"))
    {
        echo "Function exits";
    }
    else
    {
        echo "Function does not exits - better write our own";
    }
?>