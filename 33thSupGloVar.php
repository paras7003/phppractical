<html>
    <head>
        <title>Super Global Variable</title>
    </head>
    <body>
    <h1>$GLOBAL variable</h1>
    <?php
        $var1=7;
        $var2=17;
        function sum()
        {
            $GLOBALS['result']=$GLOBALS['var1']+$GLOBALS['var2'];
        }
        sum();
        echo "The sum of $var1 and $var2 is $result";
    ?>
</body>
</html>


