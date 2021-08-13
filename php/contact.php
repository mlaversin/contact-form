<?php

    $firstname = $lastname = $email = $phone = $message = "";
    $firstnameError = $lastnameError = $emailError = $phoneError = $messageError = "";
    $isSuccess = false;
    $emailTo = "rushsander@gmail.com";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $firstname = verifyInput($_POST["firstname"]);
        $lastname = verifyInput($_POST["lastname"]);
        $email = verifyInput($_POST["email"]);
        $phone = verifyInput($_POST["phone"]);
        $message = verifyInput($_POST["message"]);
        $isSuccess = true;
        $emailText = "";
        
        if (empty($firstname))
        {
            $firstnameError = "Merci de renseigner votre prénom !";
            $isSuccess = false;
        } 
        else
        {
            $emailText .= "Firstname: $firstname\n";
        }

        if (empty($lastname))
        {
            $lastnameError = "Merci de renseigner votre nom !";
            $isSuccess = false;
        } 
        else
        {
            $emailText .= "Lastname: $lastname\n";
        }

        if(!isEmail($email))
        {
            $emailError = "Merci de renseigner un email valide !";
            $isSuccess = false;
        } 
        else
        {
            $emailText .= "Email: $email\n";
        }

        if (!isPhone($phone))
        {
            $phoneError = "Merci de renseigner votre n° de téléphone !";
            $isSuccess = false;
        }
        else
        {
            $emailText .= "Phone: $phone\n";
        }

        if (empty($message))
        {
            $messageError = "Merci de saisir votre message !";
            $isSuccess = false;
        }
        else
        {
            $emailText .= "Message: $message\n";
        }
        
        if($isSuccess) 
        {
            $headers = "From: $firstname $lastname <$email>\r\nReply-To: $email";
            mail($emailTo, "Un message de votre site", $emailText, $headers);
            $firstname = $lastname = $email = $phone = $message = "";
        }

    }

    function isEmail($var) 
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }
    function isPhone($var) 
    {
        return preg_match("/^[0-9 ]*$/",$var);
    }
    function verifyInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
?>


