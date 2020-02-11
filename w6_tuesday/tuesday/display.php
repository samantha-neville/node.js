<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
         $personId - $_GET['personId'];
         $statment = $db->prepare('SELECT * FROM w6_user WHERE ID = :personId');
         $statment->bindValue(':personId', $personId);
         $statment->execute();
         while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id      = $row['id'];
            $first   = $row['first_name'];
            $last    = $row['last_name'];
            $food_id = $row['food_type'];
            $personId - $_GET['personId'];

            $statment2 = $db->prepare('SELECT food FROM w6_food WHERE ID = $food_id');
            $statment2->execute();
            while($row2 = $statement2->fetch(PDO::FETCH_ASSOC)) {
               $food = $row2['food'];
               echo "<h1>$first $last's favorite food is $food</h1>";
            }
         }
            // retrieve url parameter
            // execute query to pull up data from that id
            // execute another query to get food data
            // display name and favorite food
         ?>

		</div>
	</body>
</html>