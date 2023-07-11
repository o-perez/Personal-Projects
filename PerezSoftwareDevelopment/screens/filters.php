<?php require('../include/connect.php');

$name = strval($_GET['n']?? null);
$price = strval($_GET['p']?? null) ;
$category = $_GET['c']?? null;

// mysqli_select_db($conn,"perezsoftwarecompdb");

if($name != null AND $category != null){
    if($price != "0"){
        switch($price){
            case 1:
                $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where 'NameProducts' LIKE '%$name%' AND 'Cat_Name' = '$category' AND Price >= 150.00;";
                $result = $conn -> query($sql);
                while($row=$result->fetch_assoc()) {
                $idProduct = $row['ProductID'];
                $ProductIMG = $row['Product_Img'];?>
                <div class="listOfProducts">
                    <div class="prdList">
                        <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                            <div >
                                <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                            </div>
                        </a>
                    </div>
                </div> 
                <?php }
                break;
                                                                    
            case 2:
                $sql = "SELECT ProductID, Product_Img FROM products where NameProducts LIKE '%$name%' AND 'Cat_Name' = '$category' AND Price Between 51.00 AND 149.99;";
                $result = $conn -> query($sql);
                while($row=$result->fetch_assoc()) {
                $idProduct = $row['ProductID'];
                $ProductIMG = $row['Product_Img'];?>
                <div class="listOfProducts">
                    <div class="prdList">
                        <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                            <div >
                                <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                            </div>
                        </a>
                    </div>
                </div> 
                <?php }
                break;
                                                                    
            case 3:
                $sql = "SELECT ProductID, Product_Img FROM products where NameProducts LIKE '%$name%' AND Cat_Name = '$category' AND Price = 50.00;";
                $result = $conn -> query($sql);
                while($row=$result->fetch_assoc()) {
                $idProduct = $row['ProductID'];
                $ProductIMG = $row['Product_Img'];?>
                <div class="listOfProducts">
                    <div class="prdList">
                        <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                            <div >
                                <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                            </div>
                        </a>
                    </div>
                </div> 
                <?php }
                break;
                                                                    
            case 4:
                $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where 'NameProducts' LIKE %$name% AND 'Cat_Name' = $category AND Price Between 1.00 AND 49.99;";
                $result = $conn -> query($sql);
                while($row=$result->fetch_assoc()) {
                $idProduct = $row['ProductID'];
                $ProductIMG = $row['Product_Img'];?>
                <div class="listOfProducts">
                    <div class="prdList">
                        <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                            <div >
                                <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                            </div>
                        </a>
                    </div>
                </div> 
                <?php }
                break;
            
            case 5:
                $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where 'NameProducts' LIKE '%$name%' AND 'Cat_Name' = $category AND Price = 0.00;";
                $result = $conn -> query($sql);
                while($row=$result->fetch_assoc()) {
                $idProduct = $row['ProductID'];
                $ProductIMG = $row['Product_Img'];?>
                <div class="listOfProducts">
                    <div class="prdList">
                        <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                            <div >
                                <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                            </div>
                        </a>
                    </div>
                </div> 
                <?php }
                break;
        }
    }
    else {
        $sql="SELECT `ProductID`, `Product_Img` FROM `products` where 'NameProducts' LIKE '%$name%' AND 'Cat_Name' = $category;";
        $result = $conn -> query($sql);
        while($row=$result->fetch_assoc()) {
        $idProduct = $row['ProductID'];
        $ProductIMG = $row['Product_Img'];?>
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
    <?php }
    }
    
else{
    if($name == null){
        if($category != "" AND $price == "0"){
            $sql="SELECT `ProductID`, `Product_Img` FROM `products` where 'Cat_Name' = $category;";
            $result = $conn -> query($sql);
            while($row=$result->fetch_assoc()) {
            $idProduct = $row['ProductID'];
            $ProductIMG = $row['Product_Img'];?>
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
        <?php }

        else{
            switch($price){
                case 1:
                    $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where Price >= 150.00;";
                    $result = $conn -> query($sql);
                    while($row=$result->fetch_assoc()) {
                    $idProduct = $row['ProductID'];
                    $ProductIMG = $row['Product_Img'];?>
                    <div class="listOfProducts">
                        <div class="prdList">
                            <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                <div >
                                    <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                                </div>
                            </a>
                        </div>
                    </div> 
                    <?php }
                    break;
                                                                        
                case 2:
                    $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where Price Between 51.00 AND 149.99;";
                    $result = $conn -> query($sql);
                    while($row=$result->fetch_assoc()) {
                    $idProduct = $row['ProductID'];
                    $ProductIMG = $row['Product_Img'];?>
                    <div class="listOfProducts">
                        <div class="prdList">
                            <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                <div >
                                    <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                                </div>
                            </a>
                        </div>
                    </div> 
                    <?php }
                    break;
                                                                        
                case 3:
                    $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where Price = 50.00;";
                    $result = $conn -> query($sql);
                    while($row=$result->fetch_assoc()) {
                    $idProduct = $row['ProductID'];
                    $ProductIMG = $row['Product_Img'];?>
                    <div class="listOfProducts">
                        <div class="prdList">
                            <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                <div >
                                    <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                                </div>
                            </a>
                        </div>
                    </div> 
                    <?php }
                    break;
                                                                        
                case 4:
                    $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where Price Between 1.00 AND 49.99;";
                    $result = $conn -> query($sql);
                    while($row=$result->fetch_assoc()) {
                    $idProduct = $row['ProductID'];
                    $ProductIMG = $row['Product_Img'];?>
                    <div class="listOfProducts">
                        <div class="prdList">
                            <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                <div >
                                    <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                                </div>
                            </a>
                        </div>
                    </div> 
                    <?php }
                    break;
                
                case 5:
                    $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where Price = 0.00;";
                    $result = $conn -> query($sql);
                    while($row=$result->fetch_assoc()) {
                    $idProduct = $row['ProductID'];
                    $ProductIMG = $row['Product_Img'];?>
                    <div class="listOfProducts">
                        <div class="prdList">
                            <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                <div >
                                    <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                                </div>
                            </a>
                        </div>
                    </div> 
                    <?php }
                    break;
            }
        }
    }

    else{
        if($price != "0"){
            switch($price){
                case 1:
                    $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where Price >= 150.00;";
                    $result = $conn -> query($sql);
                    while($row=$result->fetch_assoc()) {
                        $idProduct = $row['ProductID'];
                        $ProductIMG = $row['Product_Img'];?>
                        <div class="listOfProducts">
                            <div class="prdList">
                                <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                    <div >
                                        <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                                    </div>
                                </a>
                            </div>
                        </div> 
                    <?php }
                break;
                                                                    
                case 2:
                    $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where Price Between 51.00 AND 149.99;";
                    $result = $conn -> query($sql);
                    while($row=$result->fetch_assoc()) {
                        $idProduct = $row['ProductID'];
                        $ProductIMG = $row['Product_Img'];?>
                        <div class="listOfProducts">
                            <div class="prdList">
                                <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                    <div >
                                        <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                                    </div>
                                </a>
                            </div>
                        </div> 
                    <?php }
                break;
                                                                    
                case 3:
                    $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where Price = 50.00;";
                    $result = $conn -> query($sql);
                    while($row=$result->fetch_assoc()) {
                        $idProduct = $row['ProductID'];
                        $ProductIMG = $row['Product_Img'];?>
                            <div class="listOfProducts">
                                <div class="prdList">
                                    <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                        <div >
                                            <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                                        </div>
                                    </a>
                                </div>
                            </div> 
                        <?php }
                break;
                                                                    
                case 4:
                    $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where Price Between 1.00 AND 49.99;";
                    $result = $conn -> query($sql);
                    while($row=$result->fetch_assoc()) {
                        $idProduct = $row['ProductID'];
                        $ProductIMG = $row['Product_Img'];?>
                        <div class="listOfProducts">
                            <div class="prdList">
                                <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                    <div >
                                        <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                                    </div>
                                </a>
                            </div>
                        </div> 
                    <?php }
                break;
            
                case 5:
                    $sql = "SELECT `ProductID`, `Product_Img` FROM `products` where Price = 0.00;";
                    $result = $conn -> query($sql);
                    while($row=$result->fetch_assoc()) {
                        $idProduct = $row['ProductID'];
                        $ProductIMG = $row['Product_Img'];?>
                        <div class="listOfProducts">
                            <div class="prdList">
                                <a href="productInfo.php?GetID=<?php echo $row['ProductID']; ?>"> 
                                    <div >
                                        <img src="<?php echo "../".$ProductIMG;?>" class="artPhoto"> 
                                    </div>
                                </a>
                            </div>
                        </div> 
                    <?php }
                break;
            }   
        }
    }
}?>