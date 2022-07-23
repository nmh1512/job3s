<?
if(!isset($_SESSION))
{
    session_start();
}
require_once("../classes/database.php");
require_once ("../functions/functions.php");

date_default_timezone_set('Asia/Ho_Chi_Minh');

// if (isset($_COOKIE['acc_token']) && isset($_COOKIE['role']) && isset($_COOKIE['rf_token'])) {
//     header('Location: /tong-quan.html');
//         exit;
// }

// setcookie("id_ciuuuiuiiu", 2, time() + 60 * 60 * 24 * 30);

?>