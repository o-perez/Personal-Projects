<?php require('../include/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<html>

    <!--Title tab and other features-->
    <head>
        <title>PSD Locations</title>
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css" >
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <header>
            <?php include('../screens/pageHeader2.php'); ?>
            <hr>
        </header>

        <main>
            <h2>Locations</h2>
            <div class="genIMGS">
                <img src="../images/showcaseImg/location.jpg">
            </div>
            

            <p class="genPar">Perez Software Development have a several locations around the United States and Puerto Rico.
            </p>

            <ul>
                <li><strong>United States</strong></li>
                <li>Washington</li>
                <li>California</li>
                <li>Orlando Florida</li>
                <ul>
                    <li>Salt Lake</li>
                    <li>Miami</li>
                    <li>Orlando City</li>

                </ul>
            </ul>

            <ul>
                <li><strong>Puerto Rico</strong></li>
                <li>San Juan</li>
                <li>Ponce</li>
                <li>Mayaguez</li>
            </ul>
        </main>

        <footer>
            <?php include('../include/footer.php'); ?>   
        </footer>
    </body>
</html>