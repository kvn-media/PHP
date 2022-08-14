<?php
    // How to properly sanitize user input for MySQL
    function mysql_fix_string($conn, $string)
    {
        if (get_magic_quotes_gpc()) $string = stripcslashes($string);
        return $conn->real_escape_string($string);
    }
?>

