<?php
error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"])) 


$nameError = "";
$emailError = "";
$passwordError = "";
$genderError = "";
$phoneError = "";
$addressError = "";

$fileName = $_SESSION['profile page'];


if (isset($_SESSION['S_nameError'])) {
    $nameError = $_SESSION['S_nameError'];
    unset($_SESSION['S_nameError']);
}


if (isset($_SESSION['S_emailError'])) {
    $emailError = $_SESSION['S_emailError'];
    unset($_SESSION['S_emailError']);
}


if (isset($_SESSION['S_passwordError'])) {
    $passwordError = $_SESSION['S_passwordError'];
    unset($_SESSION['S_passwordError']);
}

if (isset($_SESSION['S_genderError'])) {
    $genderError = $_SESSION['S_genderError'];
    unset($_SESSION['S_genderError']);
}

if (isset($_SESSION['S_phoneError'])) {
    $phoneError = $_SESSION['S_phoneError'];
    unset($_SESSION['S_phoneError']);
}

if (isset($_SESSION['S_addressError'])) {
    $addressError = $_SESSION['S_addressError'];
    unset($_SESSION['S_addressError']);
}

$P_name = $_SESSION["P_name"];
$P_mail = $_SESSION["P_mail"];
$P_gender = $_SESSION["P_gender"];
$P_phone = $_SESSION["P_phone"];
$P_address = $_SESSION["P_address"];
$P_password = $_SESSION["P_password"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>


    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    
    header {
        background-color: #333;
        color: white;
        padding: 10px;
        text-align: center;
    }

   

    .box {
        margin-bottom: 15px;
    }

    .icon-holder {
        position: relative;
    }

    .icon-holder p {
        margin-left: 15px;
    }

    input[type="text"],
    input[type="password"] {
        display: block;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 16px;
        margin-bottom: 5px;
    }

    input[type="text"]:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    input[type="file"] {
        margin-top: 10px;
    }

    input[type="number"] {
        display: block;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 16px;
        margin-bottom: 5px;
    }

    input[type="number"]:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .required {
        color: red;
        font-size: 14px;
        font-weight: bold;
    }


    </style>


    <script>
    function validateInput(input) {
        const currentDate = new Date();

        const inputId = input.id;
        const submitButton = document.getElementById('submitButton');



        if ((input.value.trim() === 'mm/dd/yyyy' || input.value.trim() === '') && inputId === 'dateOfBirth') {
            document.getElementById('dateOfBirthError').innerHTML = "This Field is Required";
            submitButton.disabled = true;
        } else if (input.value.trim() >= currentDate && inputId === 'dateOfBirth') {
            document.getElementById('dateOfBirthError').innerHTML = "Date of Birth Can not be Future";
            submitButton.disabled = true;
        } else {
            if (input.value.trim() === '') {
                document.getElementById(inputId + 'Error').innerHTML = inputId + " field is Required";
                submitButton.disabled = true;
            } else {
                document.getElementById(inputId + 'Error').innerHTML = "";
                submitButton.disabled = false;
            }
        }

    }
    </script>

</head>

<body>
    <?php include '../validation.php'; ?>


    <div class="container">
        <div class="left">
            <p>
            <h3>My Profile</h3>
            <hr>
            <ul>
                <li><a href="Profile.php" class="selected">My Profile</a></li>
               
            </ul>

            </p>


        </div>
        <div class="right">

            <form action="../valiation.php" method="POST" enctype="multipart/form-data">


                <div class="box icon-holder">
                    <p class="label-margin">Name </p>
                    <input type="text" name="name" id="name" placeholder="Enter Your name"
                        value="<?php echo $P_name; ?>">
                    <span class="required">&nbsp; * &nbsp;<?php echo $nameError; ?></span>
                </div>

                <div class="box icon-holder">
                    <p class="label-margin">E-mail </p>
                    <input type="text" name="email" id="email" placeholder="Enter Your Email"
                        value="<?php echo $P_mail; ?>" >
                    <span class="required">&nbsp; * &nbsp;<?php echo $emailError; ?></span>
                </div>

                <div class="box icon-holder">
                    <p class="label-margin">Gender </p>
                    <input type="radio" name="gender" value="Male" <?php if ($P_gender === "Male") {
                                                                        echo "checked";
                                                                    } ?> />
                    Male
                    <input type="radio" name="gender" value="Female" <?php if ($P_gender === "Female") {
                                                                            echo "checked";
                                                                        } ?> />
                    Female
                    <input type="radio" name="gender" value="Other" <?php if ($P_gender === "Other") {
                                                                        echo "checked";
                                                                    } ?> /> Other
                    <span class="required"> &nbsp; * &nbsp;<?php echo $genderError; ?></span>
                </div>

                <div class="box icon-holder">
                    <p class="label-margin">Phone </p>
                    <input type="text" name="phone" id="phone" placeholder="Enter Your Phone"
                        value="<?php echo $P_phone; ?>">
                    <span class="required">&nbsp; * &nbsp;<?php echo $phoneError; ?></span>
                </div>


                <div class="box icon-holder">
                    <p class="label-margin">Address </p>
                    <input type="text" name="address" id="address" placeholder="Enter Your Address"
                        value="<?php echo $P_address; ?>">
                    <span class="required">&nbsp; * &nbsp;<?php echo $addressError; ?></span>
                </div>

                <div class="box icon-holder">
                    <p class="label-margin">Profession </p>
                    <input type="text" name="profession" id="profession" placeholder="Enter Your Profession"
                        value="<?php echo $P_profession; ?>">
                    <span class="required">&nbsp; * &nbsp;<?php echo $professionError; ?></span>
                </div>

                
                <div class="button-container">
                    <input type="submit" class="request-button" value="Update"></input>
                    </span></p>
                </div>
            </form>


        </div>
    </div>


</body>

</html>