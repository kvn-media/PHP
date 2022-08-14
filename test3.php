
<?php
    // A simple function declaration
    function longdate($timestamp)
    {
        return date("l F jS Y", $timestamp);
    }
    echo longdate(time());
    echo longdate(time() - 17 * 24 * 60 * 60);
?>

<?php
    // An expanded version of the longdate function
    function longdate($timestamp)
    {
        $temp = date("l F jS Y", $timestamp);
        return "The date is $temp";
    }
?>

<?php
    // This attempt to access $temp in function longdate will fail
    $temp = "The date is ";
    echo longdate($timestamp)

    // function longdate($timestamp)
    // {
        // return $temp . date("l F jS Y", $timestamp);
    // }
?>

<?php
    // Rewriting to refer to $temp within its local scope fixes the problem
    $temp = "The date is ";
    echo $temp . longdate(time());

    function longdate($timestamp)
    {
        return date("l F jS Y", $timestamp);
    }
?>

<?php
    // An alternative solution: passing $temp as an argument
    $temp = "The date is ";
    echo longdate($temp, time());

    function longdate($text, $timestamp)
    {
        return $text . date("l F jS Y", $timestamp);
    }
?>