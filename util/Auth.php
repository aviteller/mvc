<?php
/**
 * 
 */
class Auth
{
    
    public static function handleLogin()
    {
        $logged = $_SESSION['loggedIn'];
        if ($logged == false) {
            session_destroy();
            Redirect::to('../login');
        }
    }
    
}