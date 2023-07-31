<?php
class Authentication{
    static function login( $uid ){        
        //$_SESSION['authenticated'] = true;
        $_SESSION['uid'] = $uid;
    }
    static function check(){
        return isset( $_SESSION['uid'] );
    }
    static function uid(){
        return $_SESSION['uid'];
    }
    static function logout(){
        // session_unset();
        // session_destroy();
        unset( $_SESSION['uid'] );
    }
}


class Authorization
{
	static function role($roll)
	{
		$_SESSION['Rolls'] = $roll;
	}
	
	static function check()
	{
		return isset($_SESSION['Rolls']);
	}
	
	static function Rolls()
	{
		return $_SESSION['Rolls'];
	}
}




?>