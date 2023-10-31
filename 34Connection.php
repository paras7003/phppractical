<html>
    <head>
        <title>Connecting to the Database Server</title>
    </head>
    <body>
    <h1>Connecting Database</h1>
    <?php
        $CONNECTION=mysqli_connect("localhost","root","obeygod");
        if(!$CONNECTION)
        {
            die("Couldn't connect to server");
        }
        echo "Connected Successfully";
        /*
        $sql_query="CREATE DATABASE my_db";
        mysqli_query($CONNECTION,$sql_query);
        mysqli_close($CONNECTION);
        */
    ?>
</body>
</html>


