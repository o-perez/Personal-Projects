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
        <header>
            <?php include('include/pageHeader.php'); ?>
            <hr>
        </header>

        <main>
            <iFrame name="displayer" width="1500" height="500" src="screens/generalFrame.php"></iFrame>
        </main>
        <footer>
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