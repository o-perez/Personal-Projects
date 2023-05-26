<?php require('../include/connect.php'); 
$selectedPRDCT = $_GET["GetID"];
$query1 = "SELECT `ProductID`, `Name`, `Description`, `Cat_Name`, `Product_Img`, `Price` FROM products WHERE ProductID = $selectedPRDCT;";
$result = $conn -> query($query1);

while($row = mysqli_fetch_assoc($result)){
    $productName = $row['Name'];
    $productDSCPTN = $row['Description'];
    $category = $row['Cat_Name'];
    $prdctIMGS = $row['Product_Img'];
    $price = $row['Price'];
}?>

<!DOCTYPE html>
<html lang="en">
<html>

    <!--Title tab and other features-->
    <head>
        <title>PSD product Info</title>
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css" >
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <!--Logo,menu etc.-->
        <div class="indexHDR">
            <header>
                <?php include('../screens/pageHeader2.php'); ?>
                <hr>
            </header>
        </div>

        <main>
            <div class="product">
                <div class="information">
                    <div class="photosFrame">
                        <img src="<?php echo "../".$prdctIMGS;?>" class="photo">
                    </div>

                    <div class="infoBody">
                        <label><h2><?php echo $productName;?></h2></label>
                        <hr>
                        <br>
                        <label><strong>Description:</strong><?php echo " ".$productDSCPTN?></label>
                        <hr>
                        <br>
                        <label><strong>Category:</strong><?php echo " ".$category?></label>
                        <hr>
                        <br>
                        <label><strong>Price:</strong><?php echo " $".$price?></label>
                        <hr>
                        <br>

                        <div class="infoBTNNS">
                            <input type="button" value="Back" onclick="history.back()" class="backBTTNS">
                            <button type="submit" name="addToCart" id="miBoton" class="cart">Add to Cart</button>
                            <button type="submit" name="buyNow" id="miBoton" class="buy">Buy now</button>
                        </div>
                    </div>

                    
                </div>
            </div>
        </main>
        
        <footer>
            <?php include('../include/footer.php'); ?>
        </footer>
    </body>
</html>