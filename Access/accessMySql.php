<?php
    // Connecting to a MySQL server with mysqli
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die("Fatal Error");
?>

<?php
    // Querying a database with mysqli
    $query = "SELECT * FROM classics";
    $result = $conn->query($query);
    if (!$result) die("Fatal Error");
?>
