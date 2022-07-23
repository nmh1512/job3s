<?

include 'config.php';

$type = getValue('type', 'int', 'POST', 0);
$type = (int)$type;

$account = getValue('account', 'str', 'POST', '');
$account = replaceMQ($account);

$password = getValue('password', 'str', 'POST', '');
$password = replaceMQ($password);
$password = md5($password);
if ($type == 2) {
    $queryCheck = new db_query("SELECT * FROM user_company WHERE (usc_email = '$account' OR usc_phone = '$account') AND usc_pass = '$password'");
    $check = mysql_num_rows($queryCheck->result);
    if ($check > 0) {
        $data = mysql_fetch_assoc($queryCheck->result);

        $_SESSION['login_id'] = session_id();
        $_SESSION['id_com'] = $data['usc_id'];

        setcookie("id_com", $data['usc_id'], time() + 60 * 60 * 24 * 30,'/');
        setcookie("login_id", session_id(), time() + 60 * 60 * 24 * 30,'/');
        setcookie("type_login", 2, time() + 60 * 60 * 24 * 30,'/');
    } else {
        echo 1;
    }
}
