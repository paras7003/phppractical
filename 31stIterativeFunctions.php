<html>
    <head>
        <title>Array</title>
    </head>
    <body>
    <h1>Foreach Loop</h1>
    <?php
    $fruits = array("Apple", "Banana", "Cherry", "Date");
    reset($fruits);
    echo "Current element: " . current($fruits) . "\n";
    echo"<br>";
    next($fruits);
    echo "Next element: " . current($fruits) . "\n"; 
    echo"<br>";
    prev($fruits);
    echo "Previous element: " . current($fruits) . "\n"; 
    echo"<br>";
    end($fruits);
    echo "Last element: " . current($fruits) . "\n"; 
    ?>
    </body>
</html>


