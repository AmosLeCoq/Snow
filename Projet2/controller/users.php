<?php

/**
 * @param $loginRequest
 * @return void
 */
function login($loginRequest){
    if (isset($loginRequest['email']) && (isset($loginRequest['userPswd'])))
    {
        $inputUserEmail = $loginRequest['email'];
        $inputUserPsw = $loginRequest['userPswd'];
        $inputUserPsw = md5($inputUserPsw);

        //Try to check if email an password match
        require_once "model/userManager.php";

        $logic=isLoginCorrect($inputUserEmail, $inputUserPsw);

        if (($logic=='admin')||($logic==1))
        {
            if($logic=='admin')
            {
                $_SESSION['type']=1;
            }
            else
            {
                $_SESSION['type']=null;
            }
            $_SESSION['userEmailAddress']=$inputUserEmail;
            require "view/home.php";
        }else{
            $loginErrorMessage= "Faux";
            require "view/login.php";
        }
    }
    else
    {
        $loginErrorMessage= "rien";
        require "view/login.php";

    }
}

function logout(){
    session_destroy();
    require "view/home.php";
}


function register($info){
    if (isset($info['email']) && (isset($info['userPswd'])))
    {
        $inputUserEmail = $info['email'];
        $inputUserPsw = $info['userPswd'];
        $inputUserPsw = md5($inputUserPsw);

        //Try to check if email an password match
        require_once "model/userManager.php";

        if(registerDB($inputUserEmail, $inputUserPsw))
        {
            registerInDB($inputUserEmail, $inputUserPsw);
            $_SESSION['userEmailAddress']=$inputUserEmail;
            require "view/home.php";
        }
        else
        {
            $loginErrorMessage= "Faux";
            require "view/register.php";
        }
    }
    else
    {
        $loginErrorMessage= "rien";
        require "view/register.php";
    }
}