<?php
    $y = 3 * (abs(2 * $x) + 4);
?>

<?php
    // Outputting the values of TRUE and FALSE
    echo "a: [" . TRUE . "]<br>";
    echo "b: [" . FALSE . "]<br>";
?>

<?php
    echo "a: [" . (20 > 9) . "]<br>";
    echo "b: [" . (5 == 6) . "]<br>";
    echo "c: [" . (1 == 0) . "]<br>";
    echo "d: [" . (1 == 1) . "]<br>";
?>

<?php
    // Literals and variables
    $myName = "Brian";
    $myAge = 37;

    echo "a: " . 73 . "<br>"; // Numeric literal
    echo "b: " . "Hello" . "<br>"; // String literal
    echo "c: " . FALSE . "<br>"; // Constant literal
    echo "d: " . $myname . "<br>"; // String variable
    echo "e: " . $myage . "<br>"; // Numeric variable
?>

<?php
    // An expression and a statement
    $days_to_new_year = 366 - $days_number; // Expressions

    if ($days_to_new_year < 30)
    {
        echo "Not long now till new year"; // Statement
    }
?>

<?php
    // Operator Precedence
    // Three equivalent expressions
    1 + 2 + 3 - 4 + 5;
    2 - 4 + 5 + 3 + 1;
    5 + 2 - 4 + 1 + 3;

    // Three expressions that are also equivalent
    1 * 2 * 3 / 4 * 5;
    2 / 4 * 5 * 3 * 1;
    5 * 2 / 4 * 1 * 3;

    // Three expressions using operators of mixed precedence
    1 + 2 * 3 - 4 * 5;
    2 - 4 * 5 * 3 + 1;
    5 + 2 - 4 + 1 * 3;

    // Three expressions showing implied parentheses
    1 + (2 * 3) - (4 * 5);
    2 - (4 * 5 * 3) + 1;
    5 + 2 - 4 + (1 * 3);

    // After evaluating the subexpressions in parentheses
    1 + (6) - (20);
    2 - (60) + 1;
    5 + 2 - 4 + (3);

    // Forcing left-to-right evaluation
    ((1 + 2) * 3 - 4) * 5;
    (2 - 4) * 5 * 3 + 1;
    (5 + 2 - 4 + 1) * 3;
?>

<?php
    // Associativity
    //  A multiple-assignment statement
    $level = $score = $time = 0;

    // Assigning a value and testing for equality
    $month = "March";

    if ($month == "March") echo "It's springtime";
?>

<?php
    // The equality and identity operators
    $a = "1000";
    $b = "+1000";

    if ($a == $b) echo "1";
    if ($$a === $b) echo "2";
?>

<?php
    // The inequality and not-identical operators
    $a = "1000";
    $b = "+1000";

    if ($a != $b) echo "1";
    if ($a !== $b) echo "2";
?>

<?php
    // The four comparison operators
    $a = 2; $b = 3;

    if ($a > $b) echo "$a is greater than $b<br>";
    if ($a < $b) echo "$a is less than $b<br>";
    if ($a >= $b) echo "$a is greater than or equal to $b<br>";
    if ($a <= $b) echo "$a is less than or equal to $b<br>";
?>

<?php
    // The logical operators in use
    $a = 1; $b = 0;

    echo ($a AND $b) . "<br>";
    echo ($a or $b) . "<br>";
    echo ($a XOR $b) . "<br>";
    echo !$a        . "<br>";
?>

<?php
    // A statement using the OR operator
    if ($finished == 1 OR getNext() === 1) exit;
?>

<?php
    // The if...OR statement modified to ensure calling of getnext
    $gn = getnext();

    if ($finished == 1 OR $gn == 1) exit;
?>

<?php
    // Conditional
    // if statement
    if ($bank_balance < 100)
    {
        $money        = 1000;
        $bank_balance += $money;
    }
    // else statement
    elseif ($bank_balance > 200)
    {
        $savings    += 100;
        $bank_balance -= 100;
    }
    // elseif statement
    else
    {
        $savings += 50;
        $bank_balance -=50;
    }
?>

<?php
    // A multiple-line if...elseif...else statement
    if     ($page == "Home")  echo "You selected Home";
    elseif ($page == "About") echo "You selected About";
    elseif ($page == "News")  echo "You selected News";
    elseif ($page == "Login") echo "You selected Login";
    elseif ($page == "Links") echo "You selected Links";
    else                      echo "Unrecognized selection";
?>

<?php
    // A switch statement
    switch ($page)
    {
        case "Home";
            echo "You selected Home";
            break;
        case "About";
            echo "You selected About";
            break;
        case "News";
            echo "You selected News";
            break;
        case "Login";
            echo "You selected Login";
            break;
        case "Links";
            echo "You selected Links";
            break;
        // A default statement to add to    
        default:
            echo "Unrecognized selection";
            break;    
    }
?>

<?php
    // Alternate switch statement syntax
    switch ($page):
        case "Home";
            echo "You selected Home";
            break;
    // etc
        case "Links";
            echo "You selected Links";
            break;
    endswitch;                
?>

<?php
    // Using the ? operator
    echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
?>

<?php
    // Assigning a ? conditional result to a variable
    $enough = $fuel <= 1 ? FALSE : TRUE;
?>

<?php
    // while loop
    $fuel = 10;
    while ($fuel > 1)
    {
    // Keep driving...
    echo "There's enough fuel";
    }
?>

<?php
    // A while loop to print the 12 times table
    $count = 1;

    while ($count <= 12)
    {
        echo "$count times 12 is " . $count * 12 . "<br>";
        ++$count;
    }
?>

<?php
    // A shortened version of
    $count = 0;
    while (++$count <= 12)
    echo "$count times 12 is " . $count * 12 . "<br>";
?>

<?php
    // A do...while loop for printing the 12 times table
    $count = 1;
    do { //  Expanding to use curly braces
      echo "$count times 12 is " . $count * 12; 
      echo "<br>";
    } while (++$count <= 12);  
?>

<?php
    // Outputting the 12 times table from a for loop
    for ($count = 1 ; $count <= 12 ; ++$count)
    echo "$count times 12 is " . $count * 12 . "<br>";
?>

<?php
    // The for loop from with added curly braces
    for ($count = 1 ; $count <= 12 ; ++$count)
    {
    echo "$count times 12 is " . $count * 12;
    echo "<br>";
    }
?>

<?php
    // Writing a file using a for loop with error trapping
    $fp = fopen("text.txt", 'wb');
    for ($j = 0 ; $j < 100 ; ++$j)
    {
        $written = fwrite($fp, "data");
    if  ($written == FALSE) break;
    }
    fclose($fp);
?>

<?php
    // Trapping division-by-zero errors using continue
    $j = 10;

    while ($j > -10)
    {
      $j--;
      if ($j == 0) continue;
      echo (10 / $j) . "<br>";
    }
?>

<?php
    // This expression returns a floating-point number
    $a = 56;
    $b = 12;
    $c = $a / $b;
    echo $c;
?>