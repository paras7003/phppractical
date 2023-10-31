<html>
    <head>
        <title>Connecting to the Database Server</title>
    </head>
    <body>
    <h1>Connecting Database</h1>
    <?php
        $CONNECTION=mysqli_connect("localhost","root","obeygod","college_pggc11");
        if(!$CONNECTION)
        {
            die("Couldn't connect to server");
        }
        echo "Connected Successfully<br><br>";
        
        $sql_query="create table employee(
            emp_id int primary key,
            emp_name varchar(20),
            emp_dept varchar(20),
            emp_city varchar(20))";

        mysqli_query($CONNECTION,$sql_query);
        echo "Table created successfully";
        mysqli_close($CONNECTION);
        
    ?>
</body>
</html>


