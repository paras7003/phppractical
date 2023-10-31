<html>
    <head>
        <title>Variable Scope</title>
    </head>
    <body>
        <h1>Local scope of a variable</h1>
        <?php
            $var =5; //global scope
            function test_var()
            {
                $var=10; //local scope
                echo $var;
            }
            test_var();
        ?>
        <h1>Global scope of a variable</h1>
        <?php
            $var1=5;
            $var2=10;
            function testing_var()
            {
                global $var1, $var2;
                echo $var1;
                echo "<br>";
                echo $var2;
            }
            testing_var();
        ?>
    </body>    
</html>