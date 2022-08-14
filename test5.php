<?php
    // Creating a simple text file
    $fh = fopen("testfile.txt", "w") or die("Failed to create file");

    $text = <<<_END
    LINE 1
    LINE 2
    LINE 3
    _END;

    fwrite($fh, $text) or die("Could not write to file");
    fclose($fh);
    echo "File 'testfile.txt' written successfully";
?>

<?php
    // Reading a file with fgets
    $fh = fopen("testfile.txt", 'r') or
      die("File does not exist or you lack permission to open it");

    $line = fgets($fh);
    fclose($fh);
    echo $line;
?>

<?php
    // Reading a file with fread
    $fh = fopen("testfile.txt", 'r') or
      die("File does not exist or you lack permission to open it");

    $text = fread($fh, 3);
    fclose($fh);
    echo $text;
?>

<?php
    // Copying a file
    copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
    echo "File successfully copied to 'testfile2.txt'";
?>

<?php
    // Alternate syntax for copying a file
    if (!copy('testfile.txt', 'testfile2.txt')) echo "Could not copy file";
    else echo "File successfully copied to 'testfile2.txt'";
?>

<?php
    // Moving a file
    if (!rename('testfile2.txt', 'testfile2.new'))
      echo "Could not rename file";
    else echo "File successfully renamed to 'testfile2.new'";
?>

<?php
    // Deleting a file
    if (!unlink('testfile2.new')) echo "Could not delete file";
    else echo "File 'testfile2.new' successfully deleted";
?>

<?php
    // Updating a file
    $fh = fopen("testfile.txt", "r+") or die("Failed to open file");
    $text = fgets($fh);
    fseek($fh, 0, SEEK_END);
    fwrite($fh, "$text") or die("Could not write a file");
    fclose($fh);

    echo "File 'testfile.txt' successfully updated";
?>

<?php
    // Updating a file with file locking
    $fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
    $text = fgets($fh);
    
    if (flock($fh, LOCK_EX))
    {
        fseek($fh, 0, SEEK_END);
        fwrite($fh, "$text") or die("Could not write to file");
        flock($fh, LOCK_UN);
    }
    fclose($fh);
    echo "File 'testfile.txt' successfully updated";
?>

<?php
     // Using file_get_contents
    echo "<pre>"; // Enables display of line feeds
    echo file_get_contents("testfile.txt");
    echo "</pre>"; // Terminate <pre> tag
?>

<?php
    // Grabbing the O’Reilly home page
    echo file_get_contents("http://oreilly.com");
?>

<?php
    // Image uploader upload.php
    echo <<<_END
    <html><head><title>PHP Form Upload</title></head><body>
    <form method='POST' action='upload.php' enctype='multipart/form.data'>
    Select File: <input type='file' name='filename' size='10'>
    <input type='Submit' value='Upload'>
    </form>
    _END;

    if ($_FILES)
    {
        $name = $_FILES['filename']['name'];
        move_upload_file($_FILES['filename']['tmp_name'], $name);
        echo "Uploaded image '$name' <br><img src='$name'";
    }
    echo "</body></html>";
?>

<?php
    // A more secure version of upload.php
    echo <<<_END
    <html><head><title>PHP Form Upload</title></head><body>
    <form method='post' action='upload2.php' enctype='multipart/form-data'>
    Select a JPG, GIF, PNG or TIF File:
    <input type='file' name='filename' size='10'>
    <input type='submit' value='Upload'></form>
    _END;

    if ($_FILES)
    {
        $name = $_FILES['filename']['name'];

        switch($_FILES['filename']['type'])
        {
            case 'image/jpeg':   $ext = 'jpg'; break;
            case 'image/gif':    $ext = 'gif'; break;
            case 'image/png':    $ext = 'png'; break;
            case 'image/tiff':   $ext = 'tiff'; break;
            default:             $ext = '';  break;
        }
        if ($ext)
        {
            $n = "image.$ext";
            move_uploaded_file($_FILES['filename']['tmp_name'], $n);
            echo "Uploaded image '$name' as '$n':<br>";
            echo "<img src='$n'>";
        }
        else echo "'$name' is not an accepted image file";
    }
    else echo "No image has been  uploaded";

    echo "</body></html>";
?>