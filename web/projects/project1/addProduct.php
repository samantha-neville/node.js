<?php 

 //create and set our cart items variable in the session
//   // Start the session
//     session_start();// $_SESSION['cartItems'] = $cartItems;

?>
<!-- post idea from https://stackoverflow.com/questions/24370537/set-a-session-variable-on-button-click -->
<!-- so somehow we need to get the id or name or whatever tshirt they clicked
then we need to set a session variable that says that they want that in their cart -->
<script>
// var cartItems = [];

$('#moonT').click(function() {
    if ($('#moonT').html() == 'Add to Cart') {
        //add to cart and show they added it
        var name = $(this).attr('name');
        $.ajax({
            type: 'POST',
            url: 'addToSession.php',
            data: {
                item: name
            }
        });
        $('#moonT').html('Added');
    }
    else {
        //remove from cart but make it so they can add it again
        $('#moonT').html('Add to Cart');
    }
});
$('#beeT').click(function() { 
    if ($('#beeT').html() == 'Add to Cart') {
        //add to cart and show they added it
        var name = $(this).attr('name');
        $('#beeT').html('Added');
        $.ajax({
            type: 'POST',
            url: 'addToSession.php',
            data: {
                item: name
            }
        });
    }
    else {
        //remove from cart but make it so they can add it again
        $('#beeT').html('Add to Cart');
    }
});
$('#everyoneT').click(function() { 
    if ($('#everyoneT').html() == 'Add to Cart') {
        //add to cart and show they added it
        var name = $(this).attr('name');
        $('#everyoneT').html('Added');
        $.ajax({
            type: 'POST',
            url: 'addToSession.php',
            data: {
                item: name
            }
        });
    }
    else {
        //remove from cart but make it so they can add it again
        $('#everyoneT').html('Add to Cart');
    }
});
$('#lionT').click(function() { 
    $('#lionT').html('Added');
});
$('#peachyT').click(function() { 
    $('#peachyT').html('Added');
});
$('#pinkT').click(function() { 
    $('#pinkT').html('Added');
});
$('#plantT').click(function() {
     $('#plantT').html('Added');
});
$('#saltyT').click(function() { 
    $('#saltyT').html('Added');
});
$('#skullT').click(function() { 
    $('#skullT').html('Added');
});
$('#strawberryT').click(function() { 
    $('#strawberryT').html('Added');
});
$('#whaleT').click(function() { 
    $('#whaleT').html('Added');
});
$('#donutsT').click(function() { 
    $('#donutsT').html('Added');
});
</script>
<?php
function check($cartItems) {
    $key = array_search('moonT', $cartItems);
    if ($key === false) {
        error_log('no moon here<br>');
    }
    else {
        error_log('we have a moon<br>'); 
        // echo "<script>$('#moonT').html('Added');</script>";
    }
    // Set session variables
    $_SESSION["cartItems"] = $cartItems;
    $cart = print_r($cartItems, true);
    error_log("cart items $cart");
    // if (isset($_POST['submit'])) {
    //     $_SESSION['picURL'] = $_POST['picture'];      
    //  }
}
?>