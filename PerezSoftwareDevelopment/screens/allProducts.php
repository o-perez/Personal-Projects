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
                <div class="filtering">
                    <form class="filteringForm" name="fiters" action="" method="$_POST">
                        <h3>Filter by:</h3>
                        <label for="productName">Name</label>
                        <input type="search" placeholder="Product Name" label="Search"> 
                        <label for="category">Categories:</label>
                        <select name="prdctCat">
                            <option value="none"></option>
                            <?php 
                                $catQuery = "SELECT * FROM categories;";
                                $catResult =  $conn -> query($catQuery);
                                while($row=$catResult->fetch_assoc()) {
                                $categoryID = $row['CatID'];
                                $categoryName = $row['Cat_Name'];
                            ?>
                                <option value="<?php $categoryID?>"><?php echo $categoryName?></option>
                            <?php }?>
                        </select>

                        <label for="price">Price</label>
                        <select name="prices">
                            <option value="none"></option>
                            <option value="over150">+$150</option>
                            <option value="between50AND150">+$50 and -$150</option>
                            <option value="equals50">$50</option>
                            <option value="between50AND1">+$1 and -$50</option>
                            <option value="free">Free</option>
                        </select>
                        <button type="submit"><img src="../images/icons/icons8_Search.ico"></button>
                    </form>
                    <hr class="divisor">
                </div>

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