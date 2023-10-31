<html>
    <head>
        <title>File Handling</title>
    </head>
    <body>
    <h1>Closing a File</h1>
    <?php
    $filename = "file.txt";
    $file = fopen($filename, "w");

    if ($file) {
    fwrite($file, "Hello, world!\n");
    fclose($file);
    echo "File closed successfully.";
    } else {
    echo "Failed to open the file.";
    }
?>

</body>
</html>


