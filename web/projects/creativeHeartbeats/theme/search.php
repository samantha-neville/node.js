<!DOCTYPE html>
<html>
<head>
<style>
.flex-container {
  display: flex;
  flex-direction: column;
}

.flex-container > div {
    background-color: #f1f1f1;
    width: 80%;
    margin: 10px;
    text-align: center;
    line-height: 75px;
    font-size: 30px;
    text-align: center;
    margin:10px 10% 10px 10%;
}

h1 {
    text-align:center;
}
p {
    text-align:center;
}

</style>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="css/landing-page.min.css" rel="stylesheet">
</head>
<body>
<h1>Retreats for You</h1>

<p>Click on a retreat to learn more!</p>

<div class="flex-container">
  <div>1</div>
  <div>2</div>
  <div>3</div>  
</div>

</body>
</html> 
    <?php
    require 'dbConnection.php';
    $db = getDB();
    // $type       = $_POST['type'];
    // $start_date = $_POST['start_date'];
    // $end_date   = $_POST['end_date'];
    // $num_ppl    = $_POST['choices-single-defaul'];

    isset($_POST['type'])       ? $type       = $_POST['type']       : $type       = 'paint';
    isset($_POST['start_date']) ? $start_date = $_POST['start_date'] : $start_date = '2020-02-19'; 
    $_POST['end_date'] != NULL  ? $end_date   = $_POST['end_date']   : $end_date   = '2020-02-22';
    isset($_POST['num_ppl'])    ? $num_ppl    = $_POST['num_ppl']    : $num_ppl    = '1';

    echo "type $type<br> dates $start_date $end_date <br>ppl $num_ppl";
    $query = "SELECT * FROM retreats WHERE type=`$type`";
    echo $query;
    $retreats = $db->prepare($query);
    $retreats->execute();

    while($rRow  = $retreats->fetch(PDO::FETCH_ASSOC)) {
        $name     = $rRow['name'];
        $desc     = $rRow['description'];
        $location = $rRow['location'];
        $price    = $rRow['price'];
        $type     = $rRow['type'];
        $lang     = $rRow['language'];
        $size     = $rRow['group_size'];
        $duration = $rRow['duration'];
        $cancel   = $rRow['cancel_policy'];
        $sDate    = $rRow['start_date'];
        $eDate    = $rRow['end_date'];

        echo "<p><b>$name</b><br> $desc</p><br>";
    }
    ?>
