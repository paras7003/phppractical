<?php
session_start();
?>
<html>
    <head>
        <title>Session Variables</title>
    </head>
    <body>
    <h1>Accessing Session Variables</h1>
    <?php
        echo "Title : ",$_SESSION["Title"],"<br>";
        echo "Author : ",$_SESSION["Author"];
    ?>
</body>
</html>


