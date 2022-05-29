<?php
  $db = mysqli_connect('localhost', 'root', '', 'ekia');

  if(isset($_POST['cart'])){
    $product_code = $_POST['product_code'];
    $click = $_POST['click'];

    if($click==0){
      $query_insert = "DELETE FROM cart WHERE product_code = '$product_code'";
      mysqli_query($db, $query_insert);
    } 
    elseif($click==1) {
      $query_insert = "INSERT INTO cart(click, product_code) VALUES ('$click', '$product_code')";
      mysqli_query($db, $query_insert);  
    }
  }


  if(isset($_POST['faves'])){
    $product_code = $_POST['product_code'];
    $click = $_POST['click'];

    if($click==0){
      $query_insert = "DELETE FROM favorites WHERE product_code = '$product_code'";
      mysqli_query($db, $query_insert);
    } 
    elseif($click==1) {
      $query_insert = "INSERT INTO favorites(click, product_code) VALUES ('$click', '$product_code')";
      mysqli_query($db, $query_insert);  
    }
  } 
?>