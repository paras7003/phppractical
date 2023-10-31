<?php
session_start();
?>
<html>
    <head>
        <title>Session Variables</title>
    </head>
    <body>
    <h1>Register Session Variables</h1>
    <?php
        $_SESSION["Title"]="Web Application Development using PHP";
        $_SESSION["Author"]="Paras";
        echo "Session Variable are set";
    ?>
</body>
</html>


