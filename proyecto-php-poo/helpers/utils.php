<?php


class Utils
{

    public static function deletesession($name)
    {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public  static  function  isAdmin(){
        if(isset($_SESSION['admin'])){
            header("Location:".base_url);

        }else{
            return true;
        }
    }
}
