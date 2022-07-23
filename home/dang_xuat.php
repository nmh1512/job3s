<?
require_once('config_home.php');
session_unset();
session_destroy();

unset($_COOKIE['id_com']);
unset($_COOKIE['type_login']);
unset($_COOKIE);

setcookie("id_com", null, time() -1);
setcookie("login_id", null, time() -1);
setcookie("type_login", null, time() -1);
if (!isset($_COOKIE['id_com']) && !isset($_COOKIE['type_login'])){
    header('Location: http://localhost:8825/');
    exit();
}
?>
