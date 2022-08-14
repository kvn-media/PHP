<?php
    // Precision setting
    echo "<pre>"; // Enables viewing of the spaces

    // Pad to 15 spaces
    printf("The result is $%15f\n", 123.42 / 12);

    // Pad to 15 spaces, fill with zeros
    printf("The result is $%015f\n", 123.42 / 12);

    // Pad to 15 spaces, 2 decimal places precision
    printf("The result is $%15.2f\n", 123.42 / 12);

    // Pad to 15 spaces, 2 decimal places precision, fill with zeros
    printf("The result is $%015.2f\n", 123.42 / 12);

    // Pad to 15 spaces, 2 decimal places precision, fill with # symbol
    printf("The result is $%'#15.2f\n", 123.42 / 12);
?>

<?php
    // String padding
    echo "<pre>"; // Enables viewing of the spaces

    $h = "Rasmus";

    printf("[%s]\n",        $h); // Standard string output
    printf("[%12s]\n",      $h); // Right justify with spaces to width 12
    printf("[%-12s]\n",     $h); // Left justify with spaces
    printf("[%012s]\n",     $h); // Pad with zeros
    printf("[%'#12s]\n\n",  $h); // Use the custom paddling characters '#'

    $d = 'Rasmus Lerdorf';       // The original creator of PHP

    printf("[%12.8s]\n",    $d); // Right justify, cutoff of 8 characters
    printf("[%-12.12s]\n",  $d); // Left justify, cutoff of 12 characters
    printf("[%'@12.10s]\n", $d); // Left justify, pad with '@', cutoff 10 chars
?>

<?php
    // Date constants
    // Using checkdate // Checking for the validity of a date
    $month = 9; // September (only has 30 days)
    $day = 31; // 31st
    $year = 2022; // 2022

    if (checkdate($month, $day, $year)) echo "Date is valid";
    else echo "Date is invalid";
?>

<?php
    // Executing a system command
    $cmd = "dir"; // Windows
    // $cmd = "ls"; // Linux, Unix & Mac

    exec(escapeshellcmd($cmd), $output, $status);

    if ($status) echo "Exec command failed";
    else
    {
        echo "<pre>";
        foreach($output as $line) echo htmlspecialchars("$line\n");
        echo "</pre>";
    }
?>