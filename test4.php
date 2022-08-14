<?php
    // Global Variables
    // A function using a static variable
    function test()
    {
        static $count = 0;
        echo $count;
        $count++;
    }
?>

<?php
    static $int = 0;    // Allowed
    static $int = 1 + 2; // Disallowed (will produce a parse error)
    // static $int = sqrt(144); // Disallowed
?>

<?php
    // Superglobal variables // 
    $came_from = $_SERVER['HTTP_REFERER'];
?>