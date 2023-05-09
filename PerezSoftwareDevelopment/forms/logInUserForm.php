<head>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css" >
</head>
<body>
<div>
    <div>
        <header>
            <h2>Log In</h2>
        </header>
    
        <div>
            <img src="../images/currentUser.png" style="width: 100px; height: 100px;">
        </div>
    </div>

    <div class="logForm">
        <form name="logInUser" action="logInUsr.php" method="POST">
            <label>Email: &nbsp;&nbsp;&nbsp;<input type="email" name="userEmail" ></label>
            <br>
            <label>Password: &nbsp;&nbsp;&nbsp;<input type="password" name="userPass" ></label>
            <br>
            <button type="submit" name="confirmUser" class="confirmbtn">Confirm</button>
            <button type="reset" name="resetUserForm"class="redbtns">Reset</button>
            <button type="button" name="closeUserForm">Close</button>
        </form>
    </div>
</div>
</body>