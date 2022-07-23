<?
include 'config.php';

$email = getValue('email', 'str', 'POST', '');
$email = replaceMQ($email);

$companyName = getValue('company', 'str', 'POST', '');
$company = strtolower(removeAccent(replaceMQ($companyName)));

$checkEmail = new db_query("SELECT usc_email FROM user_company WHERE usc_email LIKE '%" . $email . "%'");
$checkComName = new db_query("SELECT usc_company FROM user_company WHERE usc_company LIKE '%" . $companyName . "%'");
$checkPhone = new db_query("SELECT usc_phone FROM user_company WHERE usc_company LIKE '%" . $companyName . "%'");
$sttEmail = mysql_num_rows($checkEmail->result);
$sttCom = mysql_num_rows($checkComName->result);
if ($sttEmail > 0 && $sttCom > 0) {
    echo 3;
    die;
} elseif ($sttEmail > 0 && $sttCom == 0) {
    echo 2;
    die;
} elseif ($sttEmail == 0 && $sttCom > 0) {
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

$gender = getValue('gender', 'int', 'POST', 0);
$gender = (int)$gender;

$aliasCom = explode(' ', $company);
$aliasCom = implode('-', $aliasCom);

$workplace = getValue('workplace', 'int', 'POST', 0);
$workplace = (int)$workplace;

$city = getValue('city', 'int', 'POST', 0);
$city = (int)$city;

$district = getValue('district', 'int', 'POST', 0);
$district = (int)$district;

$skype = getValue('skype', 'str', 'POST', '');
$skype = replaceMQ($skype);

$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$lat = $geo['geoplugin_latitude'];
$long = $geo['geoplugin_longitude'];

$time = time();
$query = new db_query("INSERT INTO user_company(usc_email, usc_name, usc_alias, usc_name_phone, usc_pass, usc_company, usc_skype, usc_city, district_id, usc_create_time, ip_company, usc_lat, usc_long) VALUES ('$email', '$fullname', '$aliasCom', '$phone_number' ,'$password','$companyName','$skype','$city','$district','$time','$user_ip','$lat','$long')");

$id_com = mysql_insert_id();
$_SESSION['id_com'] = $id_com;
$_SESSION['login_id'] = session_id();
$_SESSION['type_login'] = 2;

setcookie("id_com", $id_com, time() + 60 * 60 * 24 * 30,'/');
setcookie("type_login", 2, time() + 60 * 60 * 24 * 30,'/');
