<html>
    <body>
        <?php 
        $fp = fopen('data.txt','r');
        $counter = (int) fread($fp,10);
        $counter++;
        echo "<h1>You are visitor no $counter</h1>";
        fclose($fp);

        $fp = fopen('data.txt', 'w');
        fwrite($fp, $counter);
        fclose($fp);
        ?>
    </body>
</html>