<?php require('../include/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<html>

    <!--Title tab and other features-->
    <head>
        <title>PSD All products</title>
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
            <div class="allProducts">
                <div class="allProductsLST">
                    <?php
                        $query = "SELECT `ProductID`, `Product_Img` FROM `products`;";
                        $result = $conn -> query($query);
                        while($row=$result->fetch_assoc()) {
                            $idProduct = $row['ProductID'];
                            $ProductIMG = $row['Product_Img'];
                    ?>
                        <div class="listOfProducts">
                            <div class="prdList">
                                <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                    <div >
                                        <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                                    </div>
                                </a>
                            </div>
                        </div>                 
                    <?php }?>
                </div>
            </div>
        </main>
        
        <footer>
            <?php include('../include/footer.php'); ?>
        </footer>
    </body>
</html>