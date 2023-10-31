<html>
    <head>
        <title>Form Submission</title>
    </head>
    <body>
        <h1>Reading Data after Form Submission</h1>
        <?php
        echo"<b>Your name is : </b>",$_REQUEST["textname"],"<br>";
        echo"<b>Your email id is : </b>",$_REQUEST["textemail"],"<br>";
        echo"<b>Your contact no is : </b>",$_REQUEST["textphone"],"<br>";
        $text_address=$_REQUEST["textaddress"];
        echo"<b>Your address is : </b><br>",str_replace("\n","<br>","$text_address");
        echo"<br><b>Your gender is : </b>";
        if(isset($_REQUEST["gender"]))
        echo $_REQUEST["gender"];
        else
        echo "No radio button selected";
        ?>
        
        </body>
        </html>