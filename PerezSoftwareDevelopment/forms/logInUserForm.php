<head><link rel="stylesheet" type="text/css" href="../css/stylesheet.css" ></head>

<header>
        <h2>Log In</h2>
</header>

<img src="../images/currentUser.png" style="width: 100px; height: 100px;">
<form name="logInUser" action="logInUsr.php" method="POST">
<label>
    <label>Email: &nbsp;&nbsp;&nbsp;<input type="email" name="userEmail" ></label>
    <br>
    <label>Password: &nbsp;&nbsp;&nbsp;<input type="password" name="userPass" ></label>
    <button type="submit" name="confirmUser" class="confirmbtn">Confirm</button>
    <button type="reset" name="resetUserForm"class="redbtns">Reset</button>
</form>