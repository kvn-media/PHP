<?php
    // $html = file_get_contents($site) or die("Cannot download from $site");
    // $ingredient = $ammonia xor $bleach;
    
    // variable assignment
    $x += 10;
    $y -= 10;

    // increment and decrement
    ++$x;
    --$y;

    // conjunction if statement
    if (++$x == 10) echo $x;
    if ($y-- == 0) echo $y;
    

    // string concatenation
    echo "You have " . $msgs . "messages";
    $bulletin .= $newsflash;

    // string types
    $info = 'Preface variables with a $ like this: $variables';
    echo "This week $count people have viewed your profile";

    // escaping characters
    // $text = 'My spelling's astroshus'; // Erroneus syntax
    $text = 'My spelling\s still astroshus'; // to correct insert special characters
    $text = "She wrote upon it, \"Return to sender \".";
    $heading = "Date\tName\tPayment";
?>

<?php
    // multiple line commands
    $author = "Steve Ballmer";

    echo "Developers, developers, developers, developers, developers,
    developers, developers, developers, developers!
    
    - $author.";
?>

<?php
    // multiline string assignment
    $author = "Bill Gates";
    $text = "Measuring programming progress by lines of code is like
    Measuring aircraft building progress by weight.
    
    - $author";
?>

<?php
    // alternative multiline echo statement
    $author = "Brian W. Kernighan";
    echo <<<_END

    - $author.
    _END;
?>

<?php
    $author = "Scott Adams";

    $out = <<<_END

    - $author.
    _END;
    echo $out;
?>

<?php
    // variable typing
    // Automatic conversion from a number to a string
    $number = 12345 * 67890;
    echo substr($number, 3, 1);
?>

<?php
    // Automatically converting a string to a number
    $pi = "3.1415927";
    $radius = 5;
    echo $pi * ($radius * $radius);

    // constant
    $directory = ROOT_LOCATION;
    echo "This is line " . __LINE__ . "of file " . __FILE__;

    // The Difference Between the echo and print Commands
    $b ? print "TRUE" : print "FALSE";
?>
