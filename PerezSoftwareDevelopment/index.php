<?php require('include/connect.php'); ?>
<!DOCTYPE html>
<html lang="es">
<html>

    <!--Title tab and other features-->
    <head>
        <title>Perez Software Company</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css" >
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script>
            function showAllProducts() {
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
        </script>
    </head>

    <body>
        <!--Logo,menu etc.-->
        <div class="indexHDR">
            <header>
                <?php include('include/pageHeader.php'); ?>
                <hr>
            </header>
        </div>

        <main>
            <!-- Frame to present Carousel. -->
            <div id="frame">
                <iFrame name="displayer" width="1500" height="500" src="screens/generalFrame.php"></iFrame>
            </div>
            
            <!-- Most sell category -->
            <div id="mostSell"> 
                <div class="highligtsPrdts">
                    <h3 class="secTitle">OUR MOST SELL</h3>
                    <a href="screens/allProducts.php" class="viewALLPrdcts">View all our products</a>
                </div>

                <div class="article">
                    <?php
                        $query = "SELECT `ProductID`, `NameProducts`, `Product_Img` FROM `products` WHERE Price > 0.00 AND Sold >= 50;";
                        $result = $conn -> query($query); 
                        for($counter = 0; $counter <= 5; $counter = $counter + 1){?>
                            <?php while($row=$result->fetch_assoc()){
                                $idArt = $row['ProductID'];
                                $nameArt = $row['NameProducts'];
                                // $descriptionArt = $row['Description'];
                                // $price = $row['Price'];
                                $imageArt = $row['Product_Img'];
                                // $nombreCat = $row['NombreCat'];
                            ?>
                            <ul mstSellLst>
                                <li class="artList">
                                    <a  href="screens/productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                        <div >
                                            <img src="<?php echo $imageArt;?>" class="artPhoto"> 
                                        </div>

                                        <div class="artName">
                                            <?php echo $nameArt;?>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        <?php }?>
                    <?php }?>
                </div>                     
            </div>
            
            <!-- Free products -->
            <div id="freeProducts"> 
                <div class="highligtsPrdts">
                    <h3 class="secTitle">TOP FREE PRODUCTS</h3>
                    <a href="screens/allProducts.php"class="viewALLPrdcts">View all our products</a>
                </div>

                <div class="article">
                    <?php
                        $query2 = "SELECT `ProductID`, `NameProducts`, `Product_Img` FROM `products` WHERE Price = 0.00 AND Sold >= 50;";
                        $result2 = $conn -> query($query2); 
                        for($counter2 = 0; $counter2 <= 5; $counter2 = $counter2 + 1){?>
                            <?php while($row=$result2->fetch_assoc()){
                                $idArt = $row['ProductID'];
                                $nameArt = $row['NameProducts'];
                                // $descriptionArt = $row['Description'];
                                // $price = $row['Price'];
                                $imageArt = $row['Product_Img'];
                                // $nombreCat = $row['NombreCat'];
                            ?>
                            <ul mstSellLst>
                                <li class="artList">
                                    <a href="screens/productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                        <div >
                                            <img src="<?php echo $imageArt;?>" class="artPhoto"> 
                                        </div>

                                        <div class="artName">
                                            <?php echo $nameArt;?>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        <?php }?>
                    <?php }?>
                </div>                     
            </div>
        </main>

        <footer>
            <?php include('include/footer.php'); ?>
        </footer>
        <!-- <script type="text/javascript">
        // document.querySelector("#logBTTNS").addEventListener("click", function(){
        //     document.querySelector(".popHeaderForms").classList.add("active")
        // });

        // document.querySelector("#logBTTNS").addEventListener("click", function(){
        //     document.querySelector(".popHeaderForms").classList.remove("active")
        // });

            let popUP = document.getElementById("popHeaderForms");

            function opnPOPForm(){
              popUP.classList.add("open-popup");  
            }

            function clsePOPFrm(){
                popUP.classList.remove("open-popup");
            }
        </script> -->
    </body>
</html>