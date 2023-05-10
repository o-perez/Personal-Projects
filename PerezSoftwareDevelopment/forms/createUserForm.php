<head>
    <!-- <link rel="stylesheet" type="text/css" href="../css/stylesheet.css" > -->
    <style type="text/css">
        .form{
            align-items: center;
            justify-content: center;
            display: flex;
           
            position: relative;
        }
       .logForm{
            position: absolute;
            object-fit: cover;
            justify-content: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 30px;
            margin:auto;
            align-content: center;
            left: 40%;
        }

        .frmContent{
            font-size: 20px;
        }

        .frmContent label input{
            font-size: 20px;
            margin-left: 25px;
            justify-content: center;
            margin-bottom: 10px;
            border-radius: 15%;
        }

        h2{
            font-size: 70px;   
            margin-top: -10px; 
            left: 50%;      
        }

        body{
            background-color: cadetblue;
        }

        .decoIMG{
            margin-top: -40px;
            margin-bottom: 20px;
        }

        .frmBTNS{
            border-radius: 25%;
            background-color: cyan;
            margin-left: 5%;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: large;
        }

    </style>
</head>

<body>
    <div class="logForm">
        <!--Form Title-->   
        <div>
            <header>
                <h2>Creating a new user</h2>
            </header>

            <div class="decoIMG">
                <img src="../images/addUser.png" style="width: 250px; height: 250px;">
            </div>
        </div>
        <!--Form to user data-->
        <div class="frmContent">
            <form name="createUseer" action="saveNwUsr.php" method="POST">
                <input type="hidden" name="Id_Cliente">
                <label>Name: &nbsp;&nbsp;&nbsp;<input type="text" name="name" required></label>
                <br>
                <label>Lastname: &nbsp;&nbsp;&nbsp;<input type="text" name="lastname" requiere></label>
                <br>
                <label>Phone number: &nbsp;&nbsp;&nbsp;<input type="text" name="phone" required></label>
                <br>
                <label>Address: &nbsp;&nbsp;&nbsp;<input type="text" name="address" required></label>
                <br>
                <label>Email: &nbsp;&nbsp;&nbsp;<input type="email" name="userEmail" ></label>
                <br>
                <label>Password: &nbsp;&nbsp;&nbsp;<input type="password" name="userPass" ></label>
                <button type="submit" name="confirmUser" class="frmBTNS">Confirm</button>
                <button type="reset" name="resetUserForm" class="frmBTNS">Reset</button>
                <input type="button" value="Close" onclick="history.close()" class="frmBTNS" >
            </form>
        </div>
    </div>
</body>