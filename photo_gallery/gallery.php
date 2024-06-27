<!DOCTYPE html>
<html>

<head>
    <title>Table</title>
    <style>
        table {
            margin: 20px auto;
            height: 50%;
            width: 50%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            height: 50px;
            width: 50px;
        }
        img{
            height: 300px;
            width: 300px;

        }
    </style>
</head>

<body>
    <table>
        <?php
        $thumbs = array("car1tn.jpg", "car2tn.jpg", "car3tn.jpg", "car4tn.jpg", "car5tn.jpg", "car6tn.jpg", "car7tn.jpg", "car8tn.jpg", "car9tn.jpg");
        $cars = array("car1.jpg", "car2.jpg", "car3.jpg", "car4.jpg", "car5.jpg", "car6.jpg", "car7.jpg", "car8.jpg", "car9.jpg");
            $counter = 0;
        for ($row = 0; $row < 3; $row++) {
            echo "<tr>\n";
            for ($col = 0; $col < 3; $col++) {
                echo "<td>\n";
                echo "<a href='cars/" . $cars[$counter] ."'>";
                echo "<img src='thumbs/" . $thumbs[$counter] . "'>";
                echo '</a>';
                echo "</td>\n";
                $counter++;
            }
            echo "</tr>\n";
        }
        ?>
    </table>
</body>

</html>