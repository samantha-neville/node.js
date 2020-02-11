    
    <?php
    require 'dbConnection.php';
    $db = getDB();
    
    $book = $_POST['book'];
    $scriptures = $db->prepare("SELECT * FROM scriptures WHERE book='$book'");
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