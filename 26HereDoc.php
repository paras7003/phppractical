<html>
    <head>
        <title>Heredoc Operator</title>
    </head>
    <body>
        <h1>HereDoc Operator</h1>
        <?php
            $var="Variables";
            $str=<<<END
            we can use 'single quotes'<br>
            we can use "double quotes"<br>
            we can use $var too, which will properly converted to their values.
            END;
            echo $str;
        ?>
    </body>
</html>     