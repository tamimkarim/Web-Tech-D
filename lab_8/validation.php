<?php 
session_start();

if(!isset($_SESSION["loginUser_Name"])){
    header('Location:../profile page.php');
}

    $name = "";
    $nameError = "";

    $email = "";
    $emailError = "";

    $password = "";
    $passwordError = "";

    $gender = "";
    $genderError = "";

    $phone = "";
    $phoneError = "";
    
    $address = "";
    $addressError = "";


    $_SESSION['S_nameError'] = "";
    $_SESSION['S_emailError'] = "";
    $_SESSION['S_passwordError'] = "";
    $_SESSION['S_genderError']  = "";
    $_SESSION['S_phoneError'] = "";
    $_SESSION['S_addressError'] = "";

    $delete_flag_mail = $_SESSION["P_mail"];
    $email = $_SESSION["P_mail"];
    $updatedImage = "";






    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $wordCount = str_word_count($name);
            // echo $wordCount;
            if (empty($name)) {
                $nameError = "Name is required";
                $_POST['name'] = "";
                $name = "";
                $everythingOK = FALSE;
                $everythingOKCounter += 1;
            } elseif($wordCount < 2){
                $nameError = "Write at least 2 words";
                $_POST['name'] = "";
                $name = "";
                $everythingOK = FALSE;
                $everythingOKCounter += 1;
               
            } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)){
                $nameError = "Only letters and white space and dash allowed";
                $_POST['name'] = "";
                $name = "";
                $everythingOK = FALSE;
                $everythingOKCounter += 1;
            
            }else{
                $everythingOK = TRUE;
            }
        }

        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $gender = $_POST['gender'] ;
            if (empty($gender)) {
                $genderError = "Gender is required";
                $_POST['gender'] = "";
                $gender = "";
                $everythingOK = FALSE;
                $everythingOKCounter += 1;
                
            } else{
                $gender = $_POST['gender'];
                $everythingOK = TRUE;
            }
        }


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $phone = $_POST['phone'];
            if (empty($phone)) {
                $phoneError = "Phone is required";
                $_POST['phone'] = "";
                $phone = "";
                $everythingOK = FALSE;
                $everythingOKCounter += 1;

                
            } 
            else {
                $everythingOK = TRUE;
            }
        }

    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $address = $_POST['address'];
            if (empty($address)) {
                $addressError = "Phone is required";
                $_POST['address'] = "";
                $email = "";
                $everythingOK = FALSE;
                $everythingOKCounter += 1;

                
            }else {
                $everythingOK = TRUE;
            }
        }

       




        $new_data = array(
            'profile_mail'          =>      $email,
            'password'     =>     $_SESSION['P_password'],
            'profile_name'               =>     $_POST['name'],
            'profile_phone'     =>     $_POST['phone'],
            'profile_image'     =>     $updatedImage,
            'profile_gender'     =>     $_POST['gender'],
            'profile_address'     =>     $_POST['address'],
            'profile_status'    =>     $tempAdoption_status
        );
        
        $copiedData = $new_data;
        $isSuccessful = update_data("profile_mail",$email,$new_data);
        if($isSuccessful){
            header("Location: ../profile page.php");
        }else{
            header("Location: ../profile page.php");
        }

        }else{

            $_SESSION['S_nameError'] = $nameError;
            $_SESSION['S_emailError'] = $emailError;
            $_SESSION['S_passwordError'] = $passwordError;
            $_SESSION['S_genderError'] = $genderError;
            $_SESSION['S_phoneError'] = $phoneError;
            $_SESSION['S_addressError'] = $addressError;
            
            echo "Everything is Not ok, There are errors and we are sending to the front page <br>";
            header('Location:../profile page.php');
        }


    }