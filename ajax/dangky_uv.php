<?
include 'config.php';

$email = getValue('email', 'str', 'POST', '');
$email = replaceMQ($email);

$companyName = getValue('company', 'str', 'POST', '');
$company = strtolower(removeAccent(replaceMQ($companyName)));

$checkEmail = new db_query("SELECT use_email FROM user WHERE use_email LIKE '%" . $email . "%'");

$sttEmail = mysql_num_rows($checkEmail->result);
if ($sttEmail > 0) {
    echo 1;
    die;
} 
$password = getValue('password', 'str', 'POST', '');
$password = replaceMQ($password);
$password = md5($password);

$fullname = getValue('fullname', 'str', 'POST', '');
$fullname = ucwords(replaceMQ($fullname));

$phone_number = getValue('phone_number', 'str', 'POST', '');
$phone_number = replaceMQ($phone_number);

$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$lat = $geo['geoplugin_latitude'];
$long = $geo['geoplugin_longitude'];

$time = time();
$query = new db_query("INSERT INTO user(use_email, use_first_name, use_pass, use_create_time, use_phone, use_lat, use_long) VALUES ('$email', '$fullname', '$password','$time', '$lat','$long')");

$user = mysql_insert_id();
$_SESSION['id_user'] = $user;
$_SESSION['login_id'] = session_id();
$_SESSION['type_login'] = 1;

setcookie("id_com", $id_com, time() + 60 * 60 * 24 * 30,'/');
setcookie("id_user", $user, time() + 60 * 60 * 24 * 30,'/');
setcookie("type_login", 1, time() + 60 * 60 * 24 * 30,'/');
