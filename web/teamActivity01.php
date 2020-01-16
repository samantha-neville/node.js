<!DOCTYPE html>
<html>
    <head>
    <title>PHP Team Activity</title>
    
    </head>
    <body>
        <header style='text-align: center'>PHP Team Activity</header>
        <?php

        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 === 0) {
                echo "<div style='color:pink; float:left;'>This is div #". $i . "</div><br>";
                echo "<div style='color:pink; float:right;'>This is div #". $i . "</div><br>";

            }
            else {
                echo "<div style='color:blue; float:left;'>This is div #". $i . "</div><br>";
                echo "<div style='color:blue; float:right;'>This is div #". $i . "</div><br>";
            }
        }

        ?>
    </body>
</html>