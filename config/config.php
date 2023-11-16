<?php
/* 
| Developed by: Tauseef Ahmad
| Last Upate: 13-12-2020 04:46 PM
| Facebook: www.facebook.com/ahmadlogs
| Twitter: www.twitter.com/ahmadlogs
| YouTube: https://www.youtube.com/channel/UCOXYfOHgu-C-UfGyDcu5sYw/
| Blog: https://ahmadlogs.wordpress.com/
 */

// Include the autoloader provided in the SDK

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

require_once(__DIR__ . '../Facebook/autoload.php');

define('APP_ID', '855590069399649');
define('APP_SECRET', '9e564f1f7e340932ea2e9266027ec5e2');
define('API_VERSION', 'v2.5');
define('FB_BASE_URL', 'http://localhost/RottenPopcorn');

define('BASE_URL', 'YOUR_WEBSITE_URL');

if (!session_id()) {
    session_start();
}


// Call Facebook API
$fb = new Facebook\Facebook([
    'app_id' => APP_ID,
    'app_secret' => APP_SECRET,
    'default_graph_version' => API_VERSION,
]);


// Get redirect login helper
$fb_helper = $fb->getRedirectLoginHelper();


// Try to get access token
try {
    if (isset($_SESSION['facebook_access_token'])) {
        $accessToken = $_SESSION['facebook_access_token'];
    } else {
        $accessToken = $fb_helper->getAccessToken();
    }
} catch (FacebookResponseException $e) {
    echo 'Facebook API Error: ' . $e->getMessage();
    exit;
} catch (FacebookSDKException $e) {
    echo 'Facebook SDK Error: ' . $e->getMessage();
    exit;
}
