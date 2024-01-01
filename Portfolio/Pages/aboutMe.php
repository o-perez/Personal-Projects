<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Orlando X Perez Portfolio</title>
        <link rel="stylesheet" type="text/css" href="../CSS/stylesheet.css" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <header id="mySelfHeader2">
            <div id="MySelfPresentation">
                <img src="../Imgs\currentUser.png" alt="Image of myself.">
                <nav>
                    <div id="goingBackArrow" class="goingBackArrowCL"><button><i class="material-icons">arrow_back</i></button></div>
                    <?php include('../Include/navbar.php');?>
                </nav>  
            </div>
        </header>
        <main>
            <div class="aboutMePar">
                <p>Hi! my name is Orlando X Pérez Varela I am recent Recent Computer Science graduate with 
                experience on building and managing Web Pages and the desire to learn new things. I would like to 
                specialize my carrer on Software Development and later emphasize my career in Cybersecurity. The porpuse of this 
                virtual Portfolio is publishing some of my personal projects where I undertake my knowledge of Computer Science. 
                To know more about me you can Contact Me or find me on GitHub and LinkedIn.</p>
            </div>

            <?php include('../Include/profilesFrames.php')?>
        </main>
        <footer></footer>
        <script type = "text/javascript" src="../JavaScript/pageFunctions.js"></script>
    </body>
</html>