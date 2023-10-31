<html>
    <head>
        <title>Select Statement</title>
    </head>
    <body>
    <h1>Fetching Records</h1>
    <?php
        $CONNECTION=mysqli_connect("localhost","root","obeygod","college_pggc11");
        if(!$CONNECTION)
        {
            die("Couldn't connect to server");
        }
        echo "Connected Successfully<br><br>";

        $sql_query="select * from employee";
        $query_result=mysqli_query($CONNECTION,$sql_query);
        $record=mysqli_fetch_array($query_result);
        echo "Employee id : ",$record["emp_id"];
        echo "<br>Employee name : ",$record["emp_name"];
        echo "<br>Employee department : ",$record["emp_dept"];
        echo "<br>Employee city : ",$record["emp_city"];
        mysqli_close($CONNECTION);
        
    ?>
</body>
</html>


