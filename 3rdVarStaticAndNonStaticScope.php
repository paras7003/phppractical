<html>
    <head>
        <title>Variable Scope</title>
    </head>
    <body>
        <h1>Non-Static scope of variable</h1>
        <?php
            function test()
            {
                $a=0;
                echo $a;
                echo"<br>";
                $a++;
            }
            test();
            test();
            test();
        ?>

        <h1>Static scope of variable</h1>
        <?php
            function testing()
            {
                static $a=0;
                echo $a;
                echo"<br>";
                $a++;
            }
            testing();
            testing();
            testing();
        ?>
    </body>
</html>
