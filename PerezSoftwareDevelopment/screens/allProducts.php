<?php require('../include/connect.php');

?>
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

        <!--Ajax scripts-->
        <script>
            var keepAllProducts = true;
            
            function showByName(strName) {
            if (strName == "") {
                document.getElementById("filterLists").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        //document.getElementById("noFilters").style.display = 'none';
                        document.getElementById("filterLists").innerHTML = this.responseText;
                        
                    }
                };
            xmlhttp.open("GET","filters.php?n="+strName,true);
            xmlhttp.send();
                }
            }

            function showByCategory(strCategory) {
            if (strCategory == "") {
                document.getElementById("filterLists").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        //document.getElementById("noFilters").style.display = 'none';
                        document.getElementById("filterLists").innerHTML = this.responseText;
                       
                    }
                };
            xmlhttp.open("GET","filters.php?c="+strCategory,true);
            xmlhttp.send();
                }
            }

            function showByPrice(strPrice) {
            if (strPrice == "") {
                document.getElementById("filterLists").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        //document.getElementById("noFilters").style.display = 'none';
                        document.getElementById("filterLiss").innerHTML = this.responseText;
                        
                    }
                };
            xmlhttp.open("GET","filters.php?p="+strPrice,true);
            xmlhttp.send();
                }
            }

        </script>
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
                    <form class="filteringForm" target="_SELF">
                        <h3>Filter by:</h3>
                        <label for="productName">Name</label>
                        <input name="productName" type="search" placeholder="Product Name" label="Search"? onchange="showByName(this.value)">
                        <label for="prdctCat">Categories:</label>
                        <select name="productCategories" onchange="showByCategory(this.value)">
                            <option value="<?php $getVarCatName = "";?>" SELECTED></option>

                            <?php 
                                $catQuery = "SELECT * FROM categories;";
                                $catResult =  $conn -> query($catQuery);
                                while($row=$catResult->fetch_assoc()) {
                                $categoryID = $row['CatID'];
                                $categoryName = $row['Cat_Name'];
                                echo "<option value='$getVarCatName = $categoryName'>$categoryName</option>";
                                }
                            ?>
                        </select>

                        <label for="pricesLBL">Price</label>
                        <select name="productPrices" onchange="showByPrice(this.value)">

                            <option value="0" SELECTED></option>
                            <option value="1">+$150</option>
                            <option value="2">+$50 and -$150</option>
                            <option value="3">$50</option>
                            <option value="4">+$1 and -$50</option>
                            <option value="5">Free</option>
                        </select>
                        <!-- <button type="submit"><img src="../images/icons/icons8_Search.ico"></button> -->

                    </form>
                    <hr class="divisor">
                </div>
                
                <div class="allProductsLST" id="filterLists">
                <?php  
                    $query = "SELECT `ProductID`, `Product_Img` FROM `products`;";
                            // // $officialQuery = printProducts();     
                    $result = $conn -> query($query);
                    while($row=$result->fetch_assoc()) {
                    $idProduct = $row['ProductID'];
                    $ProductIMG = $row['Product_Img'];?>
                    
                    <div class="listOfProducts">
                        <div class="prdList" id="filterLists">
                            <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                <div >
                                    <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                                </div>
                            </a>
                        </div>
                    </div> 
                    <?php }?>               
                </div>

                <!-- <div class="allProdcutsLST" id="filterLists"></div> -->
            </div>
        </main>
        
        <footer>
            <?php include('../include/footer.php'); ?>
        </footer>
    </body>
</html>

https://www.delftstack.com/es/howto/php/onclick-php/