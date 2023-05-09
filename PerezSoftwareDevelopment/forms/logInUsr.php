<?php
    require('../include/connect.php');
    require('../screens/logedUser.php');

    $Email = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $Password = mysqli_real_escape_string($conn, $_POST['userPass']);
    
    

    if(empty($Email))
    {
        echo '<script type="text/javascript">
              alert("Please enter your email.");
              </script>';
    }

    else if(empty($Password))
    {
        echo '<script type="text/javascript">
              alert("Please enter your Password.");
              </script>';
    }

    else
    {
        $query = "SELECT * FROM users WHERE Email='$Email' AND UserPassword='$Password'";
        $result = $conn -> query($query);

        if(mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);
            if($row['Email'] === $Email && $row['UserPassword'] === $Password)
            {
                $userFRSTName = "SELECT FirstName FROM users WHERE Email='$Email' AND UserPassword='$Password'";
                $userLSTName = "SELECT Lastname FROM users WHERE Email='$Email' AND UserPassword='$Password'";
                userCRDTS($userFRSTName, $userLSTName);
                echo '<script type="text/javascript">
                alert("Succefully logged.");
                window.location.href="../screens/logedUser.php"
                </script>';
            }

            else
            {
                echo '<script type="text/javascript">
                      alert("The email or password are incorrect.");
                      </script>';
            }
        }
    }
?>