<?php
    //idea 1 for searching. If they don't have a start date, make the start date today to the end of the year
    $name     = $_POST['name'];
    $desc     = $_POST['description'];
    $location = $_POST['location'];
    $price    = $_POST['price'];
    $type     = $_POST['type'];
    $lang     = $_POST['language'];
    $size     = $_POST['group_size'];
    $duration = $_POST['duration'];
    $cancel   = $_POST['cancel_policy'];
    $sDate    = $_POST['start_date'];
    $eDate    = $_POST['end_date'];
    echo $name;
    // echo "type $type<br> dates $start_date $end_date <br>ppl $num_ppl";
    ?>
  

<!DOCTYPE html>
<html>
<head>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="css/landing-page.min.css" rel="stylesheet">
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
.column {
  max-width:50%;
}
.retreat-title {
  font-size:18px;
}
</style>
</head>
<body>
<?php
require 'navbar.php';
?>
<br><br><br>
<h1>Review Info</h1>

<!-- <p>Click on a retreat to learn more!</p> -->

<div class="flex-container">
<?php
    echo "
    <div>
      <p><b class='retreat-title'>$name</b><br><br> $desc</p><br><br>
          <br><b><p class='left-align'>Location:</b> $location</p>
          <b><p class='left-align'>Price:</b> $$price</p>
          <b><p class='left-align'>Language:</b> $lang</p>
          <b><p class='left-align'>Group Size:</b> $size people</p>
          <b><p class='left-align'>Duration:</b> $duration days</p>
          <b><p class='left-align'>Dates:</b> $sDate - $eDate</p>     
    </div>";
    echo "<a href='insertRetreat' class='submit'  value='Next'>";

?>
</div>

</body>
</html> 
 