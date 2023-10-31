<html>
    <head>
        <title>Call by Reference</title>
    </head>
    <body>
        <h1>Call by Reference</h1>
        <?php
        $var=17;
        echo"The value inside the function is ",call($var)."<br>";
        function call(&$x)
        {
            $x=$x+17;
            return($x);
        }
        echo"Value outside function is $var";
        ?>
    </body>
</html>     