<html>
    <head>
        <title>Cookie</title>
        <?php
            setcookie("message","PHP Programming",time()+60*60*24*30);
        ?>
    </head>
    <body>
    <h1>Create Cookie</h1>
    <?php
        echo "The cookie is set for next 30 days";
    ?>
</body>
</html>


