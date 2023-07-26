<?php //require('../include/connect.php'); 
$getName = strval($_POST['n']?? null);
$getPrice = strval($_POST['p']?? null);
$getCategory = strval($_POST['c']?? null);
$getResetConfirm = $_POST['r']?? null;

if($getName == ''){
    $getName = " ";
}


class Filters{
    // public $nameSearch,
    //        $categorySearch,
    //        $priceSearch;
    
    function applyDBQuerry($query)
    {
        require('../include/connect.php'); 
        
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
        <?php }
    }
    
    function name($nameToRecieve) : String{
        $sql="SELECT `ProductID`, `Product_Img` FROM `products` WHERE NameProducts LIKE '%$nameToRecieve%';";
        return $sql;
    }

    function categories($catToRecieve) : String{
        $sql = "SELECT ProductID, Product_Img FROM products WHERE Cat_Name  = '$catToRecieve';";
        return $sql;
    }

    function prices($priceToRecieve): string {
        $sqlPrice = "SELECT ProductID, Product_Img FROM products WHERE Price";
        switch($priceToRecieve){
            case 1:
                $sqlPrice .= " >= 150.00;";
                // self::applyDBQuerry($sqlPrice);
                break;

            case 2:
                $sqlPrice .=" Between 51.00 AND 149.99;";
                // self::applyDBQuerry($sqlPrice);
                // return $sqlPrice;
                break;
            
            case 3:
                $sqlPrice .= " = 50.00;";
                // return $sqlPrice;
                // self::applyDBQuerry($sqlPrice);
                break;

            case 4:
                $sqlPrice .= " Between 1.00 AND 49.99;";
                // self::applyDBQuerry($sqlPrice);
                // return $sqlPrice;
                break;
            
            case 5:
                $sqlPrice .= " = 0.00;";
                // self::applyDBQuerry($sqlPrice);
                // return $sqlPrice;
                break;
        }
        return $sqlPrice;
    }

    function prices2($priceToRecieve) : string {
        $sqlPrice = " ";
        switch($priceToRecieve){
            case 1:
                $sqlPrice .= ">= 150.00";
                // self::applyDBQuerry($sqlPrice);
                break;

            case 2:
                $sqlPrice .="Between 51.00 AND 149.99";
                // self::applyDBQuerry($sqlPrice);
                // return $sqlPrice;
                break;
            
            case 3:
                $sqlPrice .= "= 50.00";
                // return $sqlPrice;
                // self::applyDBQuerry($sqlPrice);
                break;

            case 4:
                $sqlPrice .= "Between 1.00 AND 49.99";
                // self::applyDBQuerry($sqlPrice);
                // return $sqlPrice;
                break;
            
            case 5:
                $sqlPrice .= "= 0.00";
                // self::applyDBQuerry($sqlPrice);
                // return $sqlPrice;
                break;
        }
        return $sqlPrice;
    }

    //Function that works when the all filters have been filled
    function allSelected($varName, $varCategory, $varPrice){

    }

    function twoSelctd($selection1, $selection2, $usePrice, $useCat){
        if($selection1 != " " AND $useCat == "true"){
            // $priceSql = self:: categories($selection2);
            $doubleSql = "SELECT `ProductID`, `Product_Img` FROM `products` WHERE NameProducts LIKE '%$selection1%' AND Cat_Name ='$selection2';";
            self::applyDBQuerry($doubleSql);
        }
        
        if($selection1 != " " AND $usePrice == "true"){
           
            $priceSql = self:: prices2($selection2);
            $doubleSql = "SELECT `ProductID`, `Product_Img` FROM `products` WHERE NameProducts LIKE '%$selection1%' AND Price = '$priceSql';";
            self::applyDBQuerry($doubleSql);
        }

        if($usePrice == true AND $useCat == "true"){
            $priceSql = self:: prices2($selection2);
            $doubleSql = "SELECT `ProductID`, `Product_Img` FROM `products` WHERE Cat_Name = '$selection1' AND Price = '$priceSql';";
            self::applyDBQuerry($doubleSql);
        }
    }

    //Function to reset page.
    function defaultDisplay(){
        $ofQuery = "SELECT `ProductID`, `Product_Img` FROM `products`;";
        self::applyDBQuerry($ofQuery);
    }
}

$nameSearch = new Filters();
$categorySearch = new Filters();
$priceSearch = new Filters();
$sendQuery = new Filters();
$resetFilters = new Filters();
$variousFields = new Filters();
$saveQuery;

if($getName != " " AND $getCategory != "All" AND $getPrice != "All"){

}

else {
    if($getName != " "){
        $keyWord = explode(" ", $getName);
        if($getCategory != "All" OR $getPrice != "All"){
            if($getCategory != "All"){
                $sql1="SELECT `ProductID`, `Product_Img` FROM `products` WHERE NameProducts LIKE '%$getName%' AND Cat_Name = '$getCategory';";
                $sendQuery -> applyDBQuerry($sql1);
            }

            else{
                $intValuePrice = intval($getPrice);
                $priceSql = $priceSearch->prices2($getPrice);
                $doubleSql = "SELECT `ProductID`, `Product_Img` FROM `products` WHERE NameProducts LIKE '%$getName%' AND Price = '$priceSql';";
                $sendQuery -> applyDBQuerry($doubleSql);
            }
        }

        else{
            $saveQuery = $nameSearch->name($getName);
            $sendQuery -> applyDBQuerry($saveQuery);
        }   
    }

    else if($getCategory != "All"){
        if($getPrice != "All"){
            $intValuePrice = intval($getPrice);
            $priceSql = $priceSearch->prices2($getPrice);
            $doubleSql = "SELECT `ProductID`, `Product_Img` FROM `products` WHERE Cat_Name = '$getCategory' AND Price = '$priceSql';";
            $sendQuery -> applyDBQuerry($doubleSql);
        }

        else{
            $saveQuery = $categorySearch->categories($getCategory);
            $sendQuery -> applyDBQuerry($saveQuery);
        }
    }

    else if($getPrice != "All"){
        $intValuePrice = intval($getPrice);
        $saveQuery = $priceSearch->prices($intValuePrice);
        $sendQuery -> applyDBQuerry($saveQuery);
    }

    else{
        if($getResetConfirm == "true"){
            $resetFilters->defaultDisplay();
        }
    }
}