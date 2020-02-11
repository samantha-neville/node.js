<?php
  require 'dbConnection.php';
?>
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="displayScriptures.php" method='POST'>
  Book:<br>
  <input type="text" name="book">
  <br>
  <br><br>
  <input type="submit" value="Submit">
</form> 
<!-- form 2 -->
<form action="bleah.php" method='POST'>
  Book:<br>
  <input type="text" name="book">
  <br>
  Chapter:<br>
  <input type="text" name="chapter">
  <br>
  Verse:<br>
  <input type="text" name="verse">
  <br>
  Content:<br>
  <textarea name="content"></textarea>
  <br>
  <select name="topic">
  <?php 
      $db = getDB();
      $statement = $db->prepare("SELECT * FROM topics");
      $statment->execute();
      while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $topicID = $row['id'];
        $name    = $row['name'];
        echo "<option value='$topicID'>$name</option>";
      }
  ?>
  </select>
  <h1>we out here</h1>
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>

<?php

    // $familyMembers = $db->prepare("SELECT * FROM w5_family_members");
    // $familyMembers->execute();

    // while($row = $familyMembers->fetch(PDO::FETCH_ASSOC)) {
    //     $fname = $row['first_name'];
    //     $lname = $row['last_name'];
    //     $relationshipID = $row['relationship_id'];

    //     $relationship = $db->prepare("SELECT description FROM w5_relationships WHERE id=$relationshipID");
    //     $relationship->execute();
    //     while($row2 = $familyMembers->fetch(PDO::FETCH_ASSOC)) {
    //         $relationship = $row2['description'];
    //     }

    //     echo "<p>$fname $lname is my $relationship ($relationshipID)</p>";
    // }


?>