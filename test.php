<?php
  $db = mysqli_connect('localhost', 'root', '', 'ekia');

  if(isset($_POST['submit-btn'])){
    $product_code = $_POST['product_code'];
    $click = $_POST['click'];

    if($click==0){
      $query_insert = "DELETE FROM test WHERE product_code = '$product_code'";
      mysqli_query($db, $query_insert);
    } 
    elseif($click==1) {
      $query_insert = "INSERT INTO test(click, product_code) VALUES ('$click', '$product_code')";
    mysqli_query($db, $query_insert);  
    }
  } 

  $query_select = "SELECT product_code FROM test WHERE product_code = '001'";
  $product = mysqli_query($db, $query_select);
  $row = mysqli_fetch_assoc($product); 

  if('category'!==null) {
    $category = "featured";
  }
  else{
    $category = $_GET['category'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  </style>
</head>
<body>

<p>product 1:</p>

  <?php 
    $query = "SELECT * FROM test WHERE product_code = '001'";
    $result = mysqli_query($db, $query);
  if($result) { if(mysqli_num_rows($result) > 0){ ?> 
          <form action="test.php" method="POST">
            <input type="text" name="click" value="0" hidden>
            <input type="text" value="001" name="product_code" hidden>
            <button type="submit" name="submit-btn">Remove</button>
          </form>
    <?php } else { ?>
          <form action="test.php" method="POST">
            <input type="text" name="click" value="1" hidden>   
            <input type="text" value="001" name="product_code" hidden>
            <button type="submit" name="submit-btn">Add to cart</button>
          </form>
    <?php } }else {
      echo "error";
    } ?>  
    <br><br>

    <p>product 2:</p>

    <?php 
    $query = "SELECT * FROM test WHERE product_code = '002'";
    $result = mysqli_query($db, $query);
  if($result) { if(mysqli_num_rows($result) > 0){ ?> 
          <form action="test.php" method="POST">
            <input type="text" name="click" value="0" hidden>
            <input type="text" value="002" name="product_code" hidden>
            <button type="submit" name="submit-btn">Remove</button>
          </form>
    <?php } else { ?>
          <form action="test.php" method="POST">
            <input type="text" name="click" value="1" hidden>   
            <input type="text" value="002" name="product_code" hidden>
            <button type="submit" name="submit-btn">Add to cart</button>
          </form>
    <?php } }else {
      echo "error";
    } ?>  

    <a href="cart.php">cart kuno</a>

    <br><br>

    <a href="test.php?category=living-room">Living Room</a>
    <a href="test.php?category=kitchen">Kitchen</a>
    <a href="test.php?category=bedroom">Bedroom</a>

    <br><br>

    <?php
      if($category=='living-room'){
        echo "living room section";
      }
      elseif($category=='kitchen'){
        echo "Ktchen section";
      }
      elseif($category=='bedroom'){
        echo "bedroom section";
      }
      else{
        echo "featured";
      }
    ?>
</body>
</html>

