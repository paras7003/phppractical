<html>
    <head>
        <title>Array</title>
    </head>
    <body>
        <h1>Multidimensional array</h1>
    <?php
        $studentData = array(
            array("Paras", 85, 90, 88),
            array("Praveen", 92, 88, 95),
            array("Bharat", 78, 86, 92),
            array("Aayush", 89, 94, 90)
        );
        echo "Student Data:\n";
        for ($i = 0; $i < count($studentData); $i++) {
            echo "Student: " . $studentData[$i][0] . "\n";
            echo"<br>";
            echo "Math Score: " . $studentData[$i][1] . "\n";
            echo"<br>";
            echo "English Score: " . $studentData[$i][2] . "\n";
            echo"<br>";
            echo "Science Score: " . $studentData[$i][3] . "\n";
            echo"<br>";
            echo "----------------\n";
        }
        ?>
    </body>
</html>


