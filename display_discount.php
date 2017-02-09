<?php 


	$desc     = $_POST["product_description"];
	$lprice   = $_POST["list_price"];
	$discperc = $_POST["discount_percent"];
	
	$disc      = $lprice * $discperc * .01;
	$discprice = $lprice - $disc;
	
	$lprice_format    = "$" . number_format($lprice, 2);
	$discperc_format  =  $discperc . "%";
	$disc_format      = "$" . number_format($disc, 2);
	$discprice_format = "$" . number_format($discprice , 2);

	$product_description_escaped = htmlspecialchars($desc);


?>


<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $desc ; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $lprice; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discperc; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $disc; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discprice; ?></span><br>
    </main>
</body>
</html>
