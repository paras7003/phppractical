<html>
    <head>
        <title>Function and variable scope</title>
    </head>
    <body>
        <h1>Variable Scope in Functions</h1>
        <?php
        $x=70;
        function val()
        {
            $x=17;
            echo "value of x inside function is : ",$x,"<br>";
        }
        val();
        echo "value of x outside function is : ",$x;
        ?>
    </body>
</html>     