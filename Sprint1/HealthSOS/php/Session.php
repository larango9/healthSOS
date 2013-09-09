<?php

    session_start();
    
    function createSession($admin){
        $_SESSION['admin'] = $admin;
        return true;
    }
    
    function closeSession(){
        session_destroy();
        return true;
    }
    
    function getSession(){
        if(isset($_SESSION['admin'])){
            return true;
        }
        return false;
    }
    
?>
