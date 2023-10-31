<html>
    <head>
        <title>Insert Record</title>
    </head>
    <body>
    <h1>Inserting Record</h1>
    <?php
        $CONNECTION=mysqli_connect("localhost","root","obeygod","college_pggc11");
        if(!$CONNECTION)
        {
            die("Couldn't connect to server");
        }
        echo "Connected Successfully<br><br>";

        $sql_query="insert into employee (emp_id,emp_name,emp_dept,emp_city)
        values(7003,'Paras','Web Development','Mohali')";
        
        

        mysqli_query($CONNECTION,$sql_query);
        echo "Record Inserted Successfully";
        mysqli_close($CONNECTION);
        
    ?>
</body>
</html>


