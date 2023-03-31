<?php
    require('../include/connect.php');
    $Name = mysqli_real_escape_string($conn, $_POST['name']);
    $Lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $PhoneNumber = mysqli_real_escape_string($conn, $_POST['phone']);
    $Address = mysqli_real_escape_string($conn, $_POST['address']);
    $Email = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $Password = mysqli_real_escape_string($conn, $_POST['userPass']);

    $query = "INSERT INTO users(FirstName, LastName, PhoneNumber, UserAddress, Email, UserPassword)
    VALUES ('$Name', '$Lastname', '$PhoneNumber', '$Address', '$Email', '$Password')";

    if(!mysqli_query($conn, $query))
    {
        die('Error: '.mysqli_error($conn));
    }

    else 
    {
        echo '<script type="text/javascript">
        alert("Succefully saved");
        window.location.href="../index.php"
        </script>';
    }
?>

 