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
  Chapter:<br>
  <input type="text" name="chapter">
  <br>
  Verse:<br>
  <input type="text" name="verse">
  <br>
  Content:<br>
  <textarea name="content"></textarea>
  <br>
  <?php 
      
  ?>
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