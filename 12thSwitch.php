<html>
    <head>
        <title>Switch Statement</title>
    </head>
    <body>
        <h1>Working of Switch Statement</h1>
        <?php
            $today=5;
            switch($today)
            {
                case 1:
                echo "It's Monday";
                break;

                case 2:
                echo "It's Tuesday";
                break;

                case 3:
                echo "It's Wednesday";
                break;

                case 4:
                echo "It's Thursday";
                break;

                case 5:
                echo "It's Friday";
                break;

                case 6:
                echo "It's Saturday";
                break;

                case 7:
                echo "It's Sunday";
                break;

                default:
                echo "It's Wrong number";
                break;
            }
        ?>
    </body>
</html>