<head>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css" >
</head>

<body>
<div id="nwUsrFrm">
    <!--Form Title-->   
    <header>
        <h2>Creating a new user</h2>
    </header>

    <img src="../images/addUser.png" style="width: 100px; height: 100px;">
    <!--Form to user data-->
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
        <button type="submit" name="confirmUser" class="confirmbtn">Confirm</button>
        <button type="reset" name="resetUserForm"class="redbtns">Reset</button>
        <input type="button" value="Close" onclick="history.close()" class="regularbtns" >
    </form>
</div>
</body>