<html>
    <head>
        <title>Calling Function in php with parameters</title>
    </head>
    <body>
        <?php
            function call($n1,$n2)
            {
                echo "This is the way of calling Function in PHP";
                echo"<br>";
                $sum=$n1+$n2;
                echo "Sum is : $sum";
            }
            call(7,10);
        ?>
    </body>
</html>     