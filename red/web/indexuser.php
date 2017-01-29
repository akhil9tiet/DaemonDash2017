<?php
set_time_limit(0);
ini_set('default_socket_timeout',300);
session_start();
/*.............Instagram API Keys.............*/
define("clientID",'752a1fea6ed846c3bcae710738d53e2b');
define("clientSecret",'a495c1e7e38443aeb609a153cc0c96a8');
define("redirectURI",'http://localhost/inglorious/red/web/page1.php');

function connectToInstagram($url){
    $ch= curl_init();
    curl_setopt_array($ch,array(
        CURLOPT_URL=>$url,
        CURLOPT_RETURNTRANSFER=>true,
        CURLOPT_SSL_VERIFYPEER=>false,
        CURLOPT_SSL_VERIFYHOST=>2 //this means we wont really verify the host
    ));
    $result=curl_exec($ch);
    curl_close($ch);
    return $result;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Red Ui Kit a Ui Kits Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Non Profit Connect" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- radio-buttons -->
<link rel="stylesheet" href="css/sky-forms.css">
<!-- //radio-buttons -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,900,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
    
<body>
    <!-- ui-kit -->
        <div class="ui-kit">
            <div class="container">
                <h1><i class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></i>Non Profit<span>Connect</span></h1>
                <div class="ui-kit-grids">
                    

                    <div class="col-md-6 ui-kit-grid-left">
                        <div class="login-form">
                            <form>
                                <a class="btn btn-primary" href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID;?>&redirect_uri=<?php echo redirectURI;?>&response_type=code" role="button">Login as a volunteer on Instagram</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- //ui-kit -->
</body>

</html>

