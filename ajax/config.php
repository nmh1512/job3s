<?
if(!isset($_SESSION))
{
    session_start();
   
}
require_once("../functions/functions.php");
ob_start();
require_once("../functions/function_rewrite.php");
require_once("../classes/database.php");
require_once("../functions/pagebreak.php");
require_once("../functions/simple_html_dom.php");
// require_once("../data/array_font_end.php");
date_default_timezone_set('Asia/Ho_Chi_Minh');
// $domain = "https://dev7.tinnhanh365.vn";


$ver = 1;

//print_r($_SESSION);

// if (!isset($_COOKIE['acc_token']) || !isset($_COOKIE['role']) || !isset($_COOKIE['rf_token'])) {
//     header('Location: /dang-xuat.html');
//     exit;
// }
// // Tài khoản quyền nhân viên
// if ( isset($_COOKIE['role']) && $_COOKIE['role'] == 2) {
// // Đã đăng nhập và tắt trình duyệt vào lại
//     if (!isset($_SESSION['ep_id'])) {
//         $token= $_COOKIE['acc_token'];
//         $curl = curl_init();
//         $data = array();
//         curl_setopt($curl, CURLOPT_POST, 1);
//         curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//         curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

//         curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//         curl_setopt($curl, CURLOPT_URL, 'https://chamcong.24hpay.vn/service/user_info_employee.php');
//         curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//         curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//         curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token));

//         $response = curl_exec($curl);
//         curl_close($curl);
        
//         $data_tt = json_decode($response,true);

//         if ($data_tt != '' && $data_tt['code'] != 401) {

//             // acc_token còn hạn trả về kết quả thông tin user
//             $time_now = time();
//             $tt_user = $data_tt['data']['user_info_result'];
//             $_SESSION['access_token']=$_COOKIE['acc_token'];
//             $_SESSION['refresh_token']=$_COOKIE['rf_token'];
//             $_SESSION['ep_id']=$tt_user['ep_id'];
//             $_SESSION['ep_name']=$tt_user['ep_name'];
//             $_SESSION['ep_phone']=$tt_user['ep_phone'];
//             $_SESSION['ep_image']=$tt_user['ep_image'];
//             $_SESSION['ep_address']=$tt_user['ep_address'];
//             $_SESSION['ep_authentic']=$tt_user['ep_authentic'];
//             $_SESSION['ep_email']=$tt_user['ep_email'];
//             $_SESSION['role_id']=$tt_user['role_id'];
//             $_SESSION['position_id']=$tt_user['position_id'];
//             $_SESSION['user_com_id']=$tt_user['com_id'];
//             $_SESSION['dep_id']=$tt_user['dep_id'];
//             $_SESSION['com_name']=$tt_user['com_name'];
//             $_SESSION['quyen']='2';
//         }else{
//             // acc_token hết hạn truyền refresh_token qua api lấy thông tin nv và cập nhật acc_token , refresh_token mới

//             $curl = curl_init();
//             $data2 = array(
//                 'refresh_token' => $_COOKIE['rf_token']
//             );
//             curl_setopt($curl, CURLOPT_POST, 1);
//             curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//             curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

//             curl_setopt($curl, CURLOPT_POSTFIELDS, $data2);
//             curl_setopt($curl, CURLOPT_URL, 'https://chamcong.24hpay.vn/service/refresh_token.php');
//             curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//             curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//             $response = curl_exec($curl);
//             curl_close($curl);
//             $data_token = json_decode($response,true);

//             $time_now = time();
//             if ($data_token != '' && $data_token['error']['code'] != '') {
//             $tt_user = $data_token['data']['user_info'];
//             $_SESSION['access_token']=$data_tt['data']['access_token'];
//             $_SESSION['refresh_token']=$data_tt['data']['refresh_token'];
//             $_SESSION['ep_id']=$tt_user['ep_id'];
//             $_SESSION['ep_name']=$tt_user['ep_name'];
//             $_SESSION['ep_phone']=$tt_user['ep_phone'];
//             $_SESSION['ep_image']=$tt_user['ep_image'];
//             $_SESSION['ep_address']=$tt_user['ep_address'];
//             $_SESSION['ep_authentic']=$tt_user['ep_authentic'];
//             $_SESSION['ep_email']=$tt_user['ep_email'];
//             $_SESSION['role_id']=$tt_user['role_id'];
//             $_SESSION['position_id']=$tt_user['position_id'];
//             $_SESSION['user_com_id']=$tt_user['com_id'];
//             $_SESSION['dep_id']=$tt_user['dep_id'];
//             $_SESSION['com_name']=$tt_user['com_name'];
//             $_SESSION['quyen']='2';

//             setcookie("acc_token", "", time()-3600);
//             setcookie("rf_token", "", time()-3600);
//             setcookie("role", "", time()-3600);
//             setcookie("user", "", time()-3600);
//             setcookie("permission", "", time()-3600);
//             setcookie("acc_token", $data_token['data']['access_token'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//             setcookie("rf_token", $data_token['data']['refresh_token'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//             // Lưu quyền người dùng
//             setcookie("permission", $tt_user['role_id'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//             // Lưu người dùng đăng nhập mục đích gì
//             setcookie("role", '2', time() + (86400 * 7), "/",".tinnhanh365.vn");
//             setcookie("user", $tt_user['ep_id'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//             }else{
//                 header('Location: /dang-xuat.html');
//                 exit;
//             }
//         }
//     }else{
//         // Cả 2 cùng đăng nhập sẽ lấy theo time_login lớn hơn
//         if (isset($_COOKIE['user']) && ($_COOKIE['user'] != $_SESSION['ep_id'])) {
//             $token= $_COOKIE['acc_token'];
//             $curl = curl_init();
//             $data = array();
//             curl_setopt($curl, CURLOPT_POST, 1);
//             curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//             curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

//             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//             curl_setopt($curl, CURLOPT_URL, 'https://chamcong.24hpay.vn/service/user_info_employee.php');
//             curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//             curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//             curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token));

//             $response = curl_exec($curl);
//             curl_close($curl);
//             $data_tt = json_decode($response,true);

//             if ($data_tt != '' && $data_tt['code'] != 401) {
//                 $time_now = time();
//                 // acc_token còn hạn trả về kết quả thông tin user
//                 session_unset();
//                 session_destroy();
//                 $tt_user = $data_tt['data']['user_info_result'];
//                 $_SESSION['access_token']=$_COOKIE['acc_token'];
//                 $_SESSION['refresh_token']=$_COOKIE['rf_token'];
//                 $_SESSION['ep_id']=$tt_user['ep_id'];
//                 $_SESSION['ep_name']=$tt_user['ep_name'];
//                 $_SESSION['ep_phone']=$tt_user['ep_phone'];
//                 $_SESSION['ep_image']=$tt_user['ep_image'];
//                 $_SESSION['ep_address']=$tt_user['ep_address'];
//                 $_SESSION['ep_authentic']=$tt_user['ep_authentic'];
//                 $_SESSION['ep_email']=$tt_user['ep_email'];
//                 $_SESSION['role_id']=$tt_user['role_id'];
//                 $_SESSION['position_id']=$tt_user['position_id'];
//                 $_SESSION['user_com_id']=$tt_user['com_id'];
//                 $_SESSION['dep_id']=$tt_user['dep_id'];
//                 $_SESSION['com_name']=$tt_user['com_name'];
//                 $_SESSION['quyen']='2';
//             }else{
//                 // acc_token hết hạn truyền refresh_token qua api lấy thông tin nv và cập nhật acc_token , refresh_token mới

//                 $curl = curl_init();
//                 $data2 = array(
//                     'refresh_token' => $_COOKIE['rf_token']
//                 );
//                 curl_setopt($curl, CURLOPT_POST, 1);
//                 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//                 curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

//                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data2);
//                 curl_setopt($curl, CURLOPT_URL, 'https://chamcong.24hpay.vn/service/refresh_token.php');
//                 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//                 curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//                 $response = curl_exec($curl);
//                 curl_close($curl);
//                 $data_token = json_decode($response,true);
//                 if ($data_token != '' && $data_token['error']['code'] != '') {
//                 session_unset();
//                 session_destroy();
//                 $time_now = time();
//                 $tt_user = $data_token['data']['user_info'];
//                 $_SESSION['access_token']=$data_tt['data']['access_token'];
//                 $_SESSION['refresh_token']=$data_tt['data']['refresh_token'];
//                 $_SESSION['ep_id']=$tt_user['ep_id'];
//                 $_SESSION['ep_name']=$tt_user['ep_name'];
//                 $_SESSION['ep_phone']=$tt_user['ep_phone'];
//                 $_SESSION['ep_image']=$tt_user['ep_image'];
//                 $_SESSION['ep_address']=$tt_user['ep_address'];
//                 $_SESSION['ep_authentic']=$tt_user['ep_authentic'];
//                 $_SESSION['ep_email']=$tt_user['ep_email'];
//                 $_SESSION['role_id']=$tt_user['role_id'];
//                 $_SESSION['position_id']=$tt_user['position_id'];
//                 $_SESSION['user_com_id']=$tt_user['com_id'];
//                 $_SESSION['dep_id']=$tt_user['dep_id'];
//                 $_SESSION['com_name']=$tt_user['com_name'];
//                 $_SESSION['quyen']='2';

//                 setcookie("acc_token", "", time()-3600);
//                 setcookie("rf_token", "", time()-3600);
//                 setcookie("role", "", time()-3600);
//                 setcookie("permission", "", time()-3600);
//                 setcookie("user", "", time()-3600);
//                 setcookie("acc_token", $data_token['data']['access_token'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//                 setcookie("rf_token", $data_token['data']['refresh_token'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//                 // Lưu quyền người dùng
//                 setcookie("permission", $tt_user['role_id'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//                 // Lưu người dùng đăng nhập mục đích gì
//                 setcookie("role", '2', time() + (86400 * 7), "/",".tinnhanh365.vn");
//                 setcookie("user", $tt_user['ep_id'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//                 }else{
//                 header('Location: /dang-xuat.html');
//                 exit;
//             }
//             }
//         }
//     }
// }
// // Tài khoản quyền công ty
// if ( isset($_COOKIE['role']) && $_COOKIE['role'] == 1) {

//     if (!isset($_SESSION['com_id'])) {
//         $token= $_COOKIE['acc_token'];
//         $curl = curl_init();
//         $data = array();
//         curl_setopt($curl, CURLOPT_POST, 1);
//         curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//         curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

//         curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//         curl_setopt($curl, CURLOPT_URL, 'https://chamcong.24hpay.vn/service/user_info_company.php');
//         curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//         curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//         curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token));

//         $response = curl_exec($curl);
//         curl_close($curl);
//         $data_tt = json_decode($response,true);

//         if ($data_tt != '' && $data_tt['code'] != 401) {

//             // acc_token còn hạn trả về kết quả thông tin user
//             session_unset();
//             session_destroy();
//             $time_now = time();
//             $tt_user = $data_tt['data']['user_info_result'];
//             $_SESSION['access_token']=$_COOKIE['acc_token'];
//             $_SESSION['refresh_token']=$_COOKIE['rf_token'];
//             $_SESSION['com_id']=$tt_user['com_id'];
//             $_SESSION['com_name']=$tt_user['com_name'];
//             $_SESSION['com_phone']=$tt_user['com_phone'];
//             $_SESSION['com_logo']=$tt_user['com_logo'];
//             $_SESSION['com_address']=$tt_user['com_address'];
//             $_SESSION['com_authentic']=$tt_user['com_authentic'];
//             $_SESSION['com_email']=$tt_user['com_email'];
//             $_SESSION['com_role_id']=$tt_user['com_role_id'];
//             $_SESSION['com_qr_logo']=$tt_user['com_qr_logo'];
//             $_SESSION['quyen']='1';
//         }else{

//             // acc_token hết hạn truyền refresh_token qua api lấy thông tin nv và cập nhật acc_token , refresh_token mới

//             $curl = curl_init();
//             $data2 = array(
//                 'refresh_token' => $_COOKIE['rf_token']
//             );
//             curl_setopt($curl, CURLOPT_POST, 1);
//             curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//             curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

//             curl_setopt($curl, CURLOPT_POSTFIELDS, $data2);
//             curl_setopt($curl, CURLOPT_URL, 'https://chamcong.24hpay.vn/service/refresh_token.php');
//             curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//             curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//             $response = curl_exec($curl);
//             curl_close($curl);
//             $data_token = json_decode($response,true);
//             if ($data_token != '' && $data_token['error']['code'] != '') {
//             session_unset();
//             session_destroy();
//             $time_now = time();
//             $tt_user = $data_tt['data']['user_info'];
//             $_SESSION['access_token']=$data_tt['data']['access_token'];
//             $_SESSION['refresh_token']=$data_tt['data']['refresh_token'];
//             $_SESSION['com_id']=$tt_user['com_id'];
//             $_SESSION['com_name']=$tt_user['com_name'];
//             $_SESSION['com_phone']=$tt_user['com_phone'];
//             $_SESSION['com_logo']=$tt_user['com_logo'];
//             $_SESSION['com_address']=$tt_user['com_address'];
//             $_SESSION['com_authentic']=$tt_user['com_authentic'];
//             $_SESSION['com_email']=$tt_user['com_email'];
//             $_SESSION['com_role_id']=$tt_user['com_role_id'];
//             $_SESSION['com_qr_logo']=$tt_user['com_qr_logo'];
//             $_SESSION['quyen']='1';

//             setcookie("acc_token", "", time()-3600);
//             setcookie("rf_token", "", time()-3600);
//             setcookie("role", "", time()-3600);
//             setcookie("permission", "", time()-3600);
//             setcookie("user", "", time()-3600);
//             setcookie("acc_token", $data_token['data']['access_token'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//             setcookie("rf_token", $data_token['data']['refresh_token'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//             // Lưu quyền người dùng
//             setcookie("permission", $tt_user['com_role_id'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//             // Lưu người dùng đăng nhập mục đích gì
//             setcookie("role", '1', time() + (86400 * 7), "/",".tinnhanh365.vn");
//             setcookie("user", $tt_user['com_id'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//             }else{
//                 header('Location: /dang-xuat.html');
//                 exit;
//             }
//         }
//     }else{
//         if(isset($_COOKIE['user']) && $_COOKIE['user'] != $_SESSION['com_id']){
//             $token= $_COOKIE['acc_token'];
//             $curl = curl_init();
//             $data = array();
//             curl_setopt($curl, CURLOPT_POST, 1);
//             curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//             curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

//             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//             curl_setopt($curl, CURLOPT_URL, 'https://chamcong.24hpay.vn/service/user_info_company.php');
//             curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//             curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//             curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token));

//             $response = curl_exec($curl);
//             curl_close($curl);
//             $data_tt = json_decode($response,true);

//             if ($data_tt != '' && $data_tt['code'] != 401) {

//                 // acc_token còn hạn trả về kết quả thông tin user
//                 $time_now = time();
//                 $tt_user = $data_tt['data']['user_info_result'];
//                 $_SESSION['access_token']=$_COOKIE['acc_token'];
//                 $_SESSION['refresh_token']=$_COOKIE['rf_token'];
//                 $_SESSION['com_id']=$tt_user['com_id'];
//                 $_SESSION['com_name']=$tt_user['com_name'];
//                 $_SESSION['com_phone']=$tt_user['com_phone'];
//                 $_SESSION['com_logo']=$tt_user['com_logo'];
//                 $_SESSION['com_address']=$tt_user['com_address'];
//                 $_SESSION['com_authentic']=$tt_user['com_authentic'];
//                 $_SESSION['com_email']=$tt_user['com_email'];
//                 $_SESSION['com_role_id']=$tt_user['com_role_id'];
//                 $_SESSION['com_qr_logo']=$tt_user['com_qr_logo'];
//                 $_SESSION['quyen']='1';
//             }else{

//                 // acc_token hết hạn truyền refresh_token qua api lấy thông tin nv và cập nhật acc_token , refresh_token mới

//                 $curl = curl_init();
//                 $data2 = array(
//                     'refresh_token' => $_COOKIE['rf_token']
//                 );
//                 curl_setopt($curl, CURLOPT_POST, 1);
//                 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//                 curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

//                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data2);
//                 curl_setopt($curl, CURLOPT_URL, 'https://chamcong.24hpay.vn/service/refresh_token.php');
//                 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//                 curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//                 $response = curl_exec($curl);
//                 curl_close($curl);
//                 $data_token = json_decode($response,true);
//                 if ($data_token != '' && $data_token['error']['code'] != '') {
//                 $tt_user = $data_tt['data']['user_info'];
//                 $_SESSION['access_token']=$data_tt['data']['access_token'];
//                 $_SESSION['refresh_token']=$data_tt['data']['refresh_token'];
//                 $_SESSION['com_id']=$tt_user['com_id'];
//                 $_SESSION['com_name']=$tt_user['com_name'];
//                 $_SESSION['com_phone']=$tt_user['com_phone'];
//                 $_SESSION['com_logo']=$tt_user['com_logo'];
//                 $_SESSION['com_address']=$tt_user['com_address'];
//                 $_SESSION['com_authentic']=$tt_user['com_authentic'];
//                 $_SESSION['com_email']=$tt_user['com_email'];
//                 $_SESSION['com_role_id']=$tt_user['com_role_id'];
//                 $_SESSION['com_qr_logo']=$tt_user['com_qr_logo'];
//                 $_SESSION['quyen']='1';

//                 setcookie("acc_token", "", time()-3600);
//                 setcookie("rf_token", "", time()-3600);
//                 setcookie("role", "", time()-3600);
//                 setcookie("permission", "", time()-3600);
//                 setcookie("user", "", time()-3600);
//                 setcookie("acc_token", $data_token['data']['access_token'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//                 setcookie("rf_token", $data_token['data']['refresh_token'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//                 // Lưu quyền người dùng
//                 setcookie("permission", $tt_user['com_role_id'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//                 // Lưu người dùng đăng nhập mục đích gì
//                 setcookie("role", '1', time() + (86400 * 7), "/",".tinnhanh365.vn");
//                 setcookie("user", $tt_user['com_id'], time() + (86400 * 7), "/",".tinnhanh365.vn");
//                 }else{
//                 header('Location: /dang-xuat.html');
//                 exit;
//             }
//             }
//         }
//     }
// }

// if(isset($_SESSION['com_id']) && $_SESSION['quyen']==1){
//     $usc_id = $_SESSION['com_id'];
//     $use_id = 0;
//     $use_name = $_SESSION['com_name'];
//     $nv_dep_chinhanh = null;
// }

// elseif (isset($_SESSION['user_com_id']) && $_SESSION['quyen']==2){
//     $usc_id = $_SESSION['user_com_id'];
//     $use_id = $_SESSION['ep_id'];
//     $use_name = $_SESSION['ep_name'];
//     $nv_dep_chinhanh = $_SESSION['dep_id'];
// }

// $data_list_nv = '';
// if ($data_list_nv == '') {
//     if (isset($_SESSION['quyen']) && $_SESSION['quyen'] == 1) {
//         $curl = curl_init();
//         $token = $_SESSION['access_token'];
//         curl_setopt($curl, CURLOPT_URL, 'https://chamcong.24hpay.vn/service/list_all_employee_of_company.php');
//         curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//         curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//         curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token));
//         $response = curl_exec($curl);
//         curl_close($curl);

//         $data_list = json_decode($response,true);

//         $data_list_nv =$data_list['data']['items'];
//     }
//     elseif (isset($_SESSION['quyen']) && ($_SESSION['quyen'] == 2)) {
//         $curl = curl_init();
//         $token = $_SESSION['access_token'];
//         curl_setopt($curl, CURLOPT_URL, 'https://chamcong.24hpay.vn/service/list_all_my_partner.php?get_all=true');
//         curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//         curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//         curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token));
//         $response = curl_exec($curl);
//         curl_close($curl);

//         $data_list = json_decode($response,true);
//         $data_list_nv =$data_list['data']['items'];
//     }
// }

// // PHÒNG BAN
// $curl_dep = curl_init();
// curl_setopt($curl_dep, CURLOPT_URL, "https://chamcong.24hpay.vn/service/list_department.php?id_com=".$usc_id);
// curl_setopt($curl_dep, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($curl_dep, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
// curl_setopt($curl_dep, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token));
// $res_dep = curl_exec($curl_dep);
// curl_close($curl_dep);
// $dep_this_cty = json_decode($res_dep,true);
// $arr_dep = $dep_this_cty['data']['items'];


// ?>