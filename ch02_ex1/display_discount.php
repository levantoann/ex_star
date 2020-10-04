<?php
    $product_description = filter_input(INPUT_POST, 'product_description');
    $price = filter_input(INPUT_POST, 'list_price'); 
    $percent = filter_input(INPUT_POST, 'discount_percent');
    $result= $price * $percent * .01;
    $result_price = $price - $result;
    $result1 = number_format($result_price , 2);
    $result_2 = number_format($result , 2);
	$list_price_f = "$".number_format($price, 2);
    $discount_percent_f = $percent."%";
    $discount_f = "$".number_format($result, 2);
    $discount_price_f = "$".number_format($result_price, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo 'Name Product: '.$product_description; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_f; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_f; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>
    </main>
</body>
</html>