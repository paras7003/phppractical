<html>
    <head>
        <title>Insert a record</title>
    </head>
    <body>
    <?php
        $CONNECTION=mysqli_connect("localhost","root","obeygod","paras");
        if(!$CONNECTION)
        {
            die("Couldn't connect to server");
        }
        echo "Connected Successfully<br><br>";

        if(!mysqli_select_db($CONNECTION,'paras'))
        {
            echo "Database not selected.";
        }
        $txtname=$_POST['textname'];
        $txtemail=$_POST['textemail'];
        $txtphone=$_POST['textphone'];
        $txtaddress=$_POST['textaddress'];
        $gender=$_POST['gender'];

        $sql_query="insert into paras1(name,email,phone,address,gender)
        values('$txtname','$txtemail','$txtphone','$txtaddress','$gender')";
        
        if(!mysqli_query($CONNECTION,$sql_query))
        {
            echo "Record Not Inserted";
        }
        else
        {
            echo "Record Inserted Successfully";
        }
        ?>
    </body>
</html>