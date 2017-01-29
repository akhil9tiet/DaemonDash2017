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



<!-- Add login URL in index.php -->
 <a class="btn btn-block btn-social btn-google-plus" href="login.php">
 <i class="fa fa-google-plus"></i> Login with Google
 </a>























<?php/*
$provider = new League\OAuth2\Client\Provider\Google([
    'clientId'     => '262454471281-sojo43k9sd403ktlrd2gsljr49metr0g.apps.googleusercontent.com',
    'clientSecret' => 'VgA2Z8JovLZOA9DN6p8l_TBC',
    'redirectUri'  => 'http://localhost/inglorious/red/web/index.html',
    'hostedDomain' => 'https://example.com',
]);

if (!empty($_GET['error'])) {

    // Got an error, probably user denied access
    exit('Got error: ' . htmlspecialchars($_GET['error'], ENT_QUOTES, 'UTF-8'));

} elseif (empty($_GET['code'])) {

    // If we don't have an authorization code then get one
    $authUrl = $provider->getAuthorizationUrl();
    $_SESSION['oauth2state'] = $provider->getState();
    header('Location: ' . $authUrl);
    exit;

} elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

    // State is invalid, possible CSRF attack in progress
    unset($_SESSION['oauth2state']);
    exit('Invalid state');

} else {

    // Try to get an access token (using the authorization code grant)
    $token = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
    ]);

    // Optional: Now you have a token you can look up a users profile data
    try {

        // We got an access token, let's now get the owner details
        $ownerDetails = $provider->getResourceOwner($token);

        // Use these details to create a new profile
        printf('Hello %s!', $ownerDetails->getFirstName());

    } catch (Exception $e) {

        // Failed to get user details
        exit('Something went wrong: ' . $e->getMessage());

    }

    // Use this to interact with an API on the users behalf
    echo $token->getToken();

    // Use this to get a new access token if the old one expires
    echo $token->getRefreshToken();

    // Number of seconds until the access token will expire, and need refreshing
    echo $token->getExpires();
}
*/
 ?>
</html>
