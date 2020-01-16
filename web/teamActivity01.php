<!DOCTYPE html>
<html>
    <head>
    <title>PHP Team Activity</title>
    
    </head>
    <body>
        <header style='text-align: center'>PHP Team Activity</header>
        <?php

        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 === 0)
                echo "<div style='color:pink'>This is div #". $i . "</div><br>";
            else
                echo "<div style='color:blue'>This is div #". $i . "</div><br>";
        }

        ?>
    </body>
</html>