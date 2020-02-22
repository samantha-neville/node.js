<?php
    require 'dbConnection.php';
    $db = getDB();
     
    $_POST['type']       != NULL ? $type       = $_POST['type']       : $type       = 'paint';
    $_POST['start_date'] != NULL ? $start_date = $_POST['start_date'] : $start_date = '2020-02-19'; 
    $_POST['end_date']   != NULL ? $end_date   = $_POST['end_date']   : $end_date   = '2020-12-31';
    $_POST['num_ppl']    != NULL ? $num_ppl    = $_POST['num_ppl']    : $num_ppl    = '1';
 
    $query = "SELECT * FROM retreats WHERE type='$type' AND start_date >= '$start_date' AND start_date <= '$end_date' AND end_date >= '$start_date' AND end_date <= '$end_date'";
    $retreats = $db->prepare($query);
    $retreats->execute();

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
<h1>Retreats for You</h1>
<br><br>
<!-- <p>Click on a retreat to learn more!</p> -->

<div class="flex-container">
<?php
  $count = 0;
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
    $host     = $rRow['host_id'];


    $query2 = "SELECT about_host FROM hosts WHERE id=$host";
    $statement = $db->prepare($query2);
    $statement->execute();
    while($hRow  = $statement->fetch(PDO::FETCH_ASSOC)) {
      $host = $hRow['about_host'];
    }



    echo "
    <div>
    <form>
      <p><b value='$name' name='name' class='retreat-title'>$name</b><br><br> $desc</p><br><br><br>
          <b><p value='$location' name='location' class='left-align'>Location:</b> $location</p>
          <b><p value='$price' name='price' class='left-align'>Price:</b> $$price</p>
          <b><p value='$lang' name='language' class='left-align'>Language:</b> $lang</p>
          <b><p value='$size' name='size' class='left-align'>Group Size:</b> $size people</p>
          <b><p class='left-align'>Duration:</b> $duration days</p>
          <b><p class='left-align'>Dates:</b> $sDate - $eDate</p>   
          <b><p class='left-align'>About the host:</b> $host</p>
          <p class='left-align margin-40'><button class='search-btn no-margin' type='submit' href='retreatSignUp.php'>Sign Up</button></p>       
    </form>
    </div>";

  //   if ($count % 2 == 0) {
  //     echo "
  //     <div class='flex-container'>
  //     <div>
  //       <p><b class='retreat-title'>$name</b><br><br> $desc</p><br><br>
  //           <br><b><p class='left-align'>Location:</b> $location</p>
  //           <b><p class='left-align'>Price:</b> $$price</p>
  //           <b><p class='left-align'>Language:</b> $lang</p>
  //           <b><p class='left-align'>Group Size:</b> $size people</p>
  //           <b><p class='left-align'>Duration:</b> $duration days</p>
  //           <b><p class='left-align'>Dates:</b> $sDate - $eDate</p>   
  //           <b><p class='left-align'>About the host:</b> $host</p>  
  //           <p class='left-align margin-40'><a class='search-btn no-margin' href='displayAll.php'>Sign Up</a></p>
  //     </div>";
  // }
  // else {
  //     echo "
  //     <div>
  //       <p><b class='retreat-title'>$name</b><br><br> $desc</p><br><br>
  //           <br><b><p class='left-align'>Location:</b> $location</p>
  //           <b><p class='left-align'>Price:</b> $$price</p>
  //           <b><p class='left-align'>Language:</b> $lang</p>
  //           <b><p class='left-align'>Group Size:</b> $size people</p>
  //           <b><p class='left-align'>Duration:</b> $duration days</p>
  //           <b><p class='left-align'>Dates:</b> $sDate - $eDate</p>   
  //           <b><p class='left-align'>About the host:</b> $host</p>  
  //           <p class='left-align margin-40'><a class='search-btn no-margin' href='displayAll.php'>Sign Up</a></p>
  //     </div>
  //     </div>";
  // }


  // $count = $count + 1;
}

//idea: splitting it into columns and having a register button on the right side
// echo "
// <div>
//   <div class='row'>
//   <p><b class='retreat-title>$name</b><br><br> $desc</p><br><br>
//     <div class='column'>
//       <br><b><p class='left-align'>Location:</b> $location</p>
//       <b><p class='left-align'>Price:</b> $$price</p>
//       <b><p class='left-align'>Language:</b> $lang</p>
//       <b><p class='left-align'>Group Size:</b> $size people</p>
//       <b><p class='left-align'>Duration:</b> $duration days</p>
//       <b><p class='left-align'>Dates:</b> $sDate - $eDate</p>
//     </div>
//     <div class='column'>
//       <button>Register</button>
//     </div>
//   </div>
// </div>";
?>
</div>

</body>
</html> 
 