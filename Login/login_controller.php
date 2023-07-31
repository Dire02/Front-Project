<?php

session_start();

if( isset( $_POST['submit'] ) ){
    // پردازش اطلاعات ورود
    //var_dump( $_POST );
    include '../phps/settings.php';
    include '../phps/db.php';
    include '../phps/security.php';
    include '../phps/functions.php';

    // 1. connect to DB - mysql - mysqli - PDO
    $dbc = new db( $dbhost, $dbuser, $dbpass, $dbname ); // mysqli_connect

    // 2. create query
    $sql =	"SELECT * FROM users WHERE name = ?";

    // 3. execute query
    $result = $dbc -> query( $sql, $_POST['username']);    
	$user = $result -> fetchArray();
    if( isset($user['pass']) && $user['pass'] == $_POST['password'] ){ // user authentication passed
        
        $uid = $user['id'];
        Authentication :: login( $uid );

        $roll = $user['Rolls'];
        Authorization :: role($roll);

        // redirect to dashboard
        echo 'با موفقیت انجام شد ';
        redirect('../home/home_controller.php');
    }
    else{
        echo 'name/pass incorrect';
    }

}
else{
    include 'login_view.php';
}
?>