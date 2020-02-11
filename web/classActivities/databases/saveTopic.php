<?php
  require 'dbConnection.php';
  $db = getDB();
 //query1
 try {
  $query  = "INSERT INTO scriptures (book, chapter, verse, content) VALUES ($_POST['book'], $_POST['chapter'], $_POST['verse'], $_POST['content'])";
  echo $query;
  $statement = $db->prepare($query);
  $statement->execute();
  $scriptureID = $db->lastInsertId("scriptures_id_seq");
  //query2
  $query2 = "INSERT INTO scripture_topics (scripture_id, topic_id) VALUES $scriptureID, $_POST['topics']";
  echo $query2;
  $statement2 = $db->prepare($query2);
  $statement2->execute();
 }
 catch(Exception $e) {
     echo "error with Db $e";
     die();
 }
header("saveTopic.php/?scriptureID=$scriptureID");
 die();

?>