<?php
ob_start();
$description = "For 25years Morehouse's Africa Awareness week (AAW) has engaged the students of Morehouse in projects on the continent of Africa.";
$logo_directory = "/logo-2.png";
$logo_directory2 = "/logo.png";
$site_name = "Africa Awareness Conference 2023";
$dummy = "dummy.png";
$fbid = "2213158278782711";
session_start();
// die("Critical Maintenance in progress");
#Define App Path
define("D_PATH", dirname(dirname(__FILE__)));
CONST APP_PATH = D_PATH."/v1";
#load database
#load Controllers(functions)
include D_PATH."/.env/config.php";
#load routes
require APP_PATH."/models/model.php";
require APP_PATH."/controllers/controller.php";
//require APP_PATH."/auth/auth_controller/controller.php";
#load routes
// require APP_PATH."/routes/router.php";




//include APP_PATH."/admc_ext/ext_route/router.php";
//include APP_PATH."/payment/payment_router/router.php";
//include APP_PATH."/ajax/ajax_router/router.php";
//include APP_PATH."/demo/demo_router/router.php";
// include APP_PATH."/auth/auth_router/router.php";
//include APP_PATH."/routes/ajax_router.php";
//include APP_PATH."/routes/admin_router.php";
include APP_PATH."/routes/router.php";
// include the home page;
// include APP_PATH."/views/home.php";

 ?>
