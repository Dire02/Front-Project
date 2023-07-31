
<?php
session_start();
include 'settings.php';
include 'db.php';
include 'security.php';

$userid = $_GET['id'];
$dbc = new db( $dbhost, $dbuser, $dbpass, $dbname );
$sql =	"DELETE  FROM messages
WHERE id = ?";
$result = $dbc -> query( $sql, $userid );
$dbc -> close();

echo "
<center>
<label style='background-color: aquamarine;width: 100%;align-content: center;font-size: 20px;'>
عملیات حذف با موفقیت انجام شد
</label>
</center>
 ";		 

?>








