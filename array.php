<?php
    //  Adding items to an array
    $paper[] = "Copier";
    $paper[] = "Inkjet";
    $paper[] = "Laser";
    $paper[] = "Photo";

    print_r($paper);
?>

<?php
    // Adding items to an array using explicit locations
    $paper[0] = "Copier";
    $paper[1] = "Inkjet";
    $paper[2] = "Laser";
    $paper[3] = "Photo";

    print_r($paper);
?>

<?php
    // Adding items to an array and retrieving them
    $paper[] = "Copier";
    $paper[] = "Inkjet";
    $paper[] = "Laser";
    $paper[] = "Photo";

    for ($j = 0; $j < 4; ++$j)
      echo "$j: $paper[$j]<br>";
?>

<?php
    // Adding items to an associative array and retrieving them
    $paper['copier'] = "Copier & Multipurpose";
    $paper['inkjet'] = "Inkjet Printer";
    $paper['laser'] = "Laser Printer";
    $paper['photo'] = "Photographic Paper";

    echo $paper['laser'];
?>

<?php
    // Adding items to an array using the array keyword
    $p1 = array("Copier", "Inkjet", "Laser", "Photo");

    echo "p1 element: " . $p1[2] . "<br>";

    $p2 = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");

    echo "p2 element: " . $p2['inkjet'] . "<br>";
?>

<?php
    // Walking through a numeric array using foreach...as
    $paper = array("Copier", "Inkjet", "Laser", "Photo");
    $j = 0;

    foreach($paper as $item)
    {
        echo "$j: $item<br>";
        ++$j;
    }
?>

<?php
    // Walking through an associative array using each and list
    $paper = array('copier' => "Copier & Multipurpose",
                   'inkjet' => "Inkjet Printer",
                   'laser' => "Laser Printer",
                   'photo' => "Photographic Paper");

    while (list($item, $description) = each($paper))
      echo "$item: $description<br>";
?>

<?php
    // Using the list function
    list($a, $b) = array('Alice', 'Bob');
    echo "a=$a b=$b";
?>

<?php
    // Creating a multidimensional associative array
    $products = array(

        'paper' => array(

            'copier' => "Copier & Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer",
            'photo' => "Photographic Paper"),

        'pens' => array(

            'ball' => "Ball Point",
            'hilite' => "Highlighters",
            'marker' => "Markers"),
        
        'misc' => array(
            'tape' => "Sticky Tape",
            'glue' => "Adhesives",
            'clips' => "Paperclips"
        )    
        );
        echo "<pre>"; 
        
        foreach($products as $section => $items)
          foreach($items as $key => $value)
            echo "$section:\t$key\t($value)<br>";

        echo "</pre>";
?>

<?php
    $chessBoard = array(
        array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
        array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
        array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R'),
    );

    echo "<pre>";

    foreach ($chessBoard as $row)
    {
        foreach ($row as $piece)
          echo "$piece ";

        echo "<br>";
    }

    echo "</pre>"
?>

<?php
    // Exploding a string into an array using spaces
    $temp = explode(' ', "This is a sentence with seven words");
    print_r($temp);
?>

<?php
    // Exploding a string delimited with *** into an array
    $temp = explode('***', "A***sentence***with***asterisks");
    print_r($temp);
?>

<?php
    // Using the compact function
    $firstName = "Doctor";
    $secondName = "Who";
    $planet = "Gallifrey";
    $system = "Gridlock";
    $constellation = "Kasterborous";
    
    $contact = compact('firstname', 'secondname', 'planet', 'system', 'constellation');

    print_r($contact);
?>

<?php
    // Using compact to help with debugging
    $j = 32;
    $temp = "Hello";
    $address = "1 Old Street";
    $age = 61;

    print_r(compact(explode(' ', 'j temp address age')));
?>