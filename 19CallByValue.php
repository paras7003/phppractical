<html>
    <head>
        <title>Call by Value</title>
    </head>
    <body>
        <h1>Call By Value</h1>
        <?php
        $var=7;
        echo"The value inside the function is " ,call($var)."<br>";
        function call($x)
        {
            $x=$x+7;
            return($x);
        }
        echo"Value outside function is $var";
        ?>
    </body>
</html>     