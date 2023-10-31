<html>
    <head>
        <title>Recursion</title>
    </head>
    <body>
        <h1>Calculate the factorial using Recursion</h1>
        <?php
            $x=5;
            echo "Factorial of $x is ",fact($x);
            function fact($n)
            {
                if($n<=0)
                {
                    return 1;
                }
                else
                {
                    return $n*fact($n-1);
                }
            }
        ?>
    </body>
</html>     