<?php
    require 'dbConnection.php';
    $db = getDB();
    // $type       = $_POST['type'];
    // $start_date = $_POST['start_date'];
    // $end_date   = $_POST['end_date'];
    // $num_ppl    = $_POST['choices-single-defaul'];

    //idea 1 for searching. If they don't have a start date, make the start date today to the end of the year
    $_POST['type']       != NULL ? $type       = $_POST['type']       : $type       = 'paint';
    $_POST['start_date'] != NULL ? $start_date = $_POST['start_date'] : $start_date = '2020-02-19'; 
    $_POST['end_date']   != NULL ? $end_date   = $_POST['end_date']   : $end_date   = '2020-12-31';
    $_POST['num_ppl']    != NULL ? $num_ppl    = $_POST['num_ppl']    : $num_ppl    = '1';

    echo "type $type<br> dates $start_date $end_date <br>ppl $num_ppl";
    $query = "SELECT * FROM retreats WHERE type='$type' AND start_date >= '$start_date' AND start_date <= '$end_date' AND end_date >= '$start_date' AND end_date <= '$end_date'";
    echo $query;


    $retreats = $db->prepare($query);
    $retreats->execute();

    //     9/10-9/17
    ?>
  

<!DOCTYPE html>
<html>
<head>
<style>
/* flexbox stuff is from w3 schools */
.flex-container {
  display: flex;
  flex-direction: column;
}

.flex-container > div {
    background-color: #f1f1f1;
    width: 80%;
    margin: 10px;
    text-align: center;
    text-align: center;
    margin:10px 10% 10px 10%;
    padding:20px;
    border-radius:10px;
}

h1 {
    text-align:center;
}
p {
    text-align:center;
}
.left-align {
  text-align:left;
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
<?php
require 'navbar.php';
?>
<h1>Retreats for You</h1>

<p>Click on a retreat to learn more!</p>

<div class="flex-container">
<?php
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

    echo "<div>
    <p><b>$name</b><br> $desc</p>
    <br><b><p class='left-align'>Location:</b> $location</p>
    <b><p class='left-align'>Price:</b> $$price</p>
    <b><p class='left-align'>Language:</b> $lang</p>
    <b><p class='left-align'>Group Size:</b> $size people</p>
    <b><p class='left-align'>Duration:</b> $duration days</p>
    <b><p class='left-align'>Dates:</b> $sDate - $eDate</p>
    </div>";
}
?>
</div>

</body>
</html> 
 