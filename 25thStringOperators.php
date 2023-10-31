<html>
    <head>
        <title>String Operators</title>
    </head>
    <body>
        <h1>Concatenation operator (.)</h1>
        <?php
            $a1="Welcome ";
            $a2="to ";
            $a3="PHP ";
            $a4="Programming ";
            echo $a1.$a2.$a3.$a4;
        ?>
        <h1>Concatenating Assignment operator (.=)</h1>
        <?php
            $a1="Welcome to PHP ";
            echo $a1.="Programming.";
        ?>
    </body>
</html>     