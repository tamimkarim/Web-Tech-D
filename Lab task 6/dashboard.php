<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6</title>
</head>
<body>
    <table border="1" cellspacing="0" height="50px" width="100%">
        <tr>
            <td style="text-align: right;">
                <a href="">Home</a>
                <p style="display: inline;">|</p>
                <a href="">Login</a>
                <p style="display: inline;">|</p>
                <a href="registration.html">Registration</a>
            </td>
        </tr>
        </table>
        <table border="1" cellspacing="0" height="250px" width="100%">
        <tr>
            <td width="250px">
                <h1>Account</h1><hr>
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li><a href="">View Profile</a></li>
                    <li><a href="">Edit Profile</a></li>
                    <li><a href="">Change Profile Picture</a></li>
                    <li><a href="">Change Password</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </td>
            <td>
                <section>
                    <legend>
                        <h3>PROFILE</h3>
                    </legend>
                    <?php echo 'Name: '.$_COOKIE['name'];?>
                    <br>
                    <?php echo 'Email: '.$_COOKIE['email'];?>
                    <br>
                    <?php echo 'Gender: '.$_COOKIE['gender'];?>
                </section>
            </td>
        </tr>
        </table>
        <table border="1" cellspacing="0" height="30px" width="100%">
        <tr>
            <td>
                <footer style="text-align: center;">Copyright © Tamim Karim</footer>
            </td>
        </tr>
    </table>
</body>
</html>