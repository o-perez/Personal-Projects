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
            // var jsPrdctName,
            //     jsPrctCat,
            //     jsPrctPrice;
            
            // function showByName(strName) {
            //     jsPrdctName = strName;
            // }

            // function showByCategory(strCategory) {
            //     jsPrctCat = strCategory;
            // }

            // function showByPrice(strPrice) {
            //     jsPrctPrice = strPrice;
            // }

            function sendValues(){

                var jsPrdctName,
                    jsPrdctCat,
                    jsPrdctPrice;

                 jsPrdctName = document.getElementById('inputName').value;
                 jsPrdctCat = document.getElementById('selectCat').value;
                 jsPrdctPrice = document.getElementById('selectPrice').value;

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("filterLists").innerHTML = this.responseText;
                       
                    }
                };
            xmlhttp.open("POST","filters.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("n="+jsPrdctName+"&c="+jsPrdctCat+"&p="+jsPrdctPrice);
            }

            function resetFiltersForm(){
                var resetConfirm = "true";
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("filterLists").innerHTML = this.responseText;
                       
                    }
                };
                xmlhttp.open("POST","filters.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("r="+resetConfirm);
            }
            
            // $('#SendInfo').click(function(){
            //     var jsPrdctName,
            //         jsPrdctCategory,
            //         jsPrdctPrice;

            //     jsPrdctName = document.getElementById('inputName').value;
            //     jsPrdctCategory = document.getElementById('selectCat').value;
            //     jsPrdctPrice = document.getElementById('selectPrice').value;

            //     filtersToSend = "n="+jsPrdctName+"&c="+jsPrdctCategory+"&p="+jsPrdctPrice; 
            //     $.ajax({
            //         url:'filters.php',
            //         type: 'POST',
            //         data: filtersToSend,
            //     })

            //     .done(function(ans){
            //         $('#filterLists').html(ans)
            //     });
            // })
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
                    <form  class="filteringForm" target="_SELF">
                        <h3>Filter by:</h3>
                        <label for="NameProduct">Name</label>
                        <input name="productName" type="search" id="inputName" placeholder="Product Name" label="Search">
                        <label for="prdctCat">Categories:</label>
                        <select name="productCategories" id="selectCat">
                            <option value="All" SELECTED>All</option>

                            <?php 
                                $catQuery = "SELECT * FROM categories;";
                                $catResult =  $conn -> query($catQuery);
                                while($row=$catResult->fetch_assoc()) {
                                $categoryID = $row['CatID'];
                                $categoryName = $row['Cat_Name'];
                                echo "<option value='$categoryName'>$categoryName</option>";
                                }
                            ?>
                        </select>

                        <label for="pricesLBL">Price</label>
                        <select name="productPrices" id="selectPrice">

                            <option value="All" SELECTED>All</option>
                            <option value="1">+$150</option>
                            <option value="2">+$50 and -$150</option>
                            <option value="3">$50</option>
                            <option value="4">+$1 and -$50</option>
                            <option value="5">Free</option>
                        </select>
                        <button type="button" onclick="sendValues()"><img src="../images/icons/icons8_Search.ico"></button>
                        <button type="reset" onclick="resetFiltersForm()">Reset</button>
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
            </div>
        </main>
        
        <footer>
            <?php include('../include/footer.php'); ?>
        </footer>
    </body>
</html>

