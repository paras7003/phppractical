<html>
    <head>
        <title>Library Function</title>
    </head>
    <body>
        <h1>Library Function to find largest of three integers</h1>
        <?php
            $x=20;
            $y=30;
            $z=25;
            $largest=greater($x,$y,$z);
            echo "Largest number is $largest";
            function greater($x,$y,$z)
            {
                if($x>$y && $x>$z)
                return $x;
                if($y>$x && $y>$z)
                return $y;
                else
                return $z;
            }
        ?>
    </body>
</html>     