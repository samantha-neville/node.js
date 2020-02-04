<?php
    require 'dbConnect.php';
    $database = getDB();
    $familyMembers = $database->prepare("SELECT * FROM w5_family_members");
    $familyMembers->execute();

    while($row = $familyMembers->fetch(PDO::FETCH_ASSOC)) {
        $fname = $row['first_name'];
        $lname = $row['last_name'];
        $relationshipID = $row['relationship_id'];

        echo "<p>$fname $lname is my $relationshipID</p>";
    }

?>