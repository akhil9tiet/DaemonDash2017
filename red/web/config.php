<?php
// set database credentials
define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'login_system');
 
// set site path and redirect URL
/* make sure the url end with a trailing slash */
define("SITE_URL", "http://localhost/inglorious/red/web/indexuser.php");
/* the page where you will be redirected for authorzation */
define("http://localhost/inglorious/red/web/page1.php", SITE_URL."login.php");
 
/* * ***** Google related activities start ** */
define("CLIENT_ID", "262454471281-sojo43k9sd403ktlrd2gsljr49metr0g.apps.googleusercontent.com"); 
define("CLIENT_SECRET", "VgA2Z8JovLZOA9DN6p8l_TBC");
 
// retreive information from user based on scope/permission
define("SCOPE", 'https://www.googleapis.com/auth/userinfo.email '.
		'https://www.googleapis.com/auth/userinfo.profile' );
 
/* logout both from Google and your site **/
define("LOGOUT_URL", "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=". urlencode(SITE_URL."logout.php"));




?>


<?php
// set database credentials
define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'login_system');
 
// set site path and redirect URL
/* make sure the url end with a trailing slash */
define("SITE_URL", "http://localhost/inglorious/red/web/indexuser.php");
/* the page where you will be redirected for authorzation */
define("http://localhost/inglorious/red/web/page1.php", SITE_URL."login.php");
 
/* * ***** Google related activities start ** */
define("CLIENT_ID", "262454471281-sojo43k9sd403ktlrd2gsljr49metr0g.apps.googleusercontent.com"); 
define("CLIENT_SECRET", "VgA2Z8JovLZOA9DN6p8l_TBC");
 
// retreive information from user based on scope/permission
define("SCOPE", 'https://www.googleapis.com/auth/userinfo.email '.
        'https://www.googleapis.com/auth/userinfo.profile' );
 
/* logout both from Google and your site **/
define("LOGOUT_URL", "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=". urlencode(SITE_URL."logout.php"));




?>

