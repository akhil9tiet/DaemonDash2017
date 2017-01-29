<!DOCTYPE html>
<html lang="en"><head>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My School Ranking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
 
 
  </style>
</head>

<body>
 
  <!--<div class="container"> -->

  <div style = 'background-color: #f78181;color:#ffffff' class="jumbotron" align="center">
    
    <h1 > 
     Reward your Volunteers</h1>      
  </div>  
  <div class="col-sm-4">
  <div class="alert alert-info">
   <div class="alert alert-info">
    <strong> Collaboration at a level never imagined:</strong> <br> 1. Non Profits are matched to collaborate with each other <br> 2. Users can join Non Profits based on their mutual interests, location preference and many more detailed parameters <br> 3. Also a user is notified of the events occuring in his or her vicinity. She can go and attend the event. Later we credit her score for these visists for coupons or merchandize swag. <br> 
  </div>

</div>
</div>
<form action="" name="flight_form" method="post">
<div class="container">    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Enter Details</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><ul class="list-group">
          <li class="list-group-item">       User_ID: <input type="text" name="uid"><br></li>
          <li class="list-group-item">        NGO_ID: <input type="text" name="nid"><br></li>
          <li class="list-group-item">   Activity_ID: <input type="text" name="aid"><br></li>
          
        </ul></div>
      </div>
      </div>
         
<meta charset="utf-8">
<meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
<meta name="dcterms.created" content="Fri, 19 Feb 2016 08:32:33 GMT">
<meta name="description" content="">
<meta name="keywords" content=""><title></title>

<style type="text/css">

.a
{
  -moz-border-radius: 15px;
 border-radius: 15px;
    border:solid 1px black;
    padding:5px;
font-family:verdana;
//background-image:url('background.jpg');
}
body {
color:#f78181;
background-color:#111111;
//background-image:url('background.jpg');
background-repeat:no-repeat;
background-size:cover;
}

a { color:#0000FF; }
a:visited { color:#800080; }
a:hover { color:#008000; }
a:active { color:#FF0000; }
.container { 
  width: 49.5%;
  display: table;
}
label {
  line-height: 1.5;
  margin-left .5rem;
  margin-right: 1rem;
  margin-bottom: 0;
  vertical-align: baseline;
  display: table-cell;
}
-->
</style><!--[if IE]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--></head>
<body>

     <div style="position:relative;right:5px;top:2px;">
                         
                <div class="container">
                 <input type="submit" class="btn btn-primary btn-block" name="submit">
                </div>
                        </div>
                     
                </form>
<!--
                        <div style="position:relative;right:5px;top:2px;">
                         
                <div class="container">
                 <input type="submit" class="btn btn-primary btn-block" name="submit">
                </div>
                        </div>
                     
                </form>
                <br><br>
-->
<!--
<script>                
function myFunction() {
    var x = document.getElementById("myDate").value;
    document.getElementById("demo").innerHTML = x;
}
function formAlert() {
    var source = document.getElementsByName('source');
    var length = source.length;
     var src = "";
    for(i=0; i<length; i++)
    {
        if(source[i].checked)
        {
            src = source[i].value;
        }
    }
    var destination = document.getElementsByName('destination');
    var length = destination.length;
    var dest = "";
    for(i=0; i<length; i++)
    {
        if(destination[i].checked)
        {
            dest = destination[i].value;
        }
    }
    alert(""+src+""+dest);    
}
</script>
-->
   
  </div> 
</div>
</body>
<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="ngo";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['submit']) || isset($_POST['Display Coursework'])) {
    // form submitted, now we can look at the data that came through
    // the value inside the brackets comes from the name attribute of the input field. (just like submit above)
   
    $uid=$_POST['uid'];
    $nid=$_POST['nid'];
    $aid=$_POST['aid'];
    
    

$sql1="Insert into user_activity values('5','$uid','$nid','$aid','0')";


if (mysqli_query($conn, $sql1)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

}
?>
</html>