<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="" method='POST'>
  Book:<br>
  <input type="text" name="book">
  <br>
  <br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>

<?php
    require 'dbConnection.php';
    $db = getDB();
    $familyMembers = $db->prepare("SELECT * FROM w5_family_members");
    $familyMembers->execute();

    while($row = $familyMembers->fetch(PDO::FETCH_ASSOC)) {
        $fname = $row['first_name'];
        $lname = $row['last_name'];
        $relationshipID = $row['relationship_id'];

        $relationship = $db->prepare("SELECT description FROM w5_relationships WHERE id=$relationshipID");
        $relationship->execute();
        while($row2 = $familyMembers->fetch(PDO::FETCH_ASSOC)) {
            $relationship = $row2['description'];
        }

        echo "<p>$fname $lname is my $relationship ($relationshipID)</p>";
    }


    $book = $_POST['book'];
    $scriptures = $db->prepare("SELECT * FROM scriptures WHERE book=$book");
    $scriptures->execute();

    echo "<br><br><h1>Scripture Resources</h1>";
    while($sRow  = $scriptures->fetch(PDO::FETCH_ASSOC)) {
        $book    = $sRow['book'];
        $chapter = $sRow['chapter'];
        $verse   = $sRow['verse'];
        $content = $sRow['content'];

        echo "<p><b>$book $chapter:$verse</b> - \"$content\"</p><br>";
    }


?>