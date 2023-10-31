<html>
    <head>
        <title>Constants</title>
    </head>
    <body>
        <h1>Creating a constant using define() function</h1>
        <?php 
            define("CALL","Through define() function, This line is printed.");
            echo CALL;
            ?>

        <h1>Creating a constant using const keyword</h1>
        <?php 
            const CALLING="Through const keyword, This line is printed.";
            echo CALLING;
            ?>
    </body>
</html>