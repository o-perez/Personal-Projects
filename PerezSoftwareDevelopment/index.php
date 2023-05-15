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
            <div id="frame">
                <iFrame name="displayer" width="1500" height="500" src="screens/generalFrame.php"></iFrame>
            </div>
            
            <div id="mostSell">
                <div class="article">
                <?php
                $query = "SELECT `ProductID`, `Name`, `Product_Img` FROM `products` WHERE 1;";;
                $result = $conn -> query($query); 
                for($counter = 0; $counter <= 5; $counter = $counter + 1){?>
                    <?php while($row=$result->fetch_assoc()){
                            $idArt = $row['ProductID'];
                            $nameArt = $row['Name'];
                            // $descriptionArt = $row['Description'];
                            // $price = $row['Price'];
                            $imageArt = $row['Product_Img'];
                            // $nombreCat = $row['NombreCat'];
                    ?>

                        <a>
                                <?php echo $idArt;?>
                                <?php echo $nameArt;?>
                                <img src="<?php echo $imageArt;?>"> 
                        </a>
                    <?php }?>
                <?php }?>
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