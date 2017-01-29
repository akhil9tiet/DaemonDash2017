<!DOCTYPE html>
<html lang="en"><head>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NPO Connect</title>
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

<style type="text/css">
table.hovertable {
  font-family: verdana,arial,sans-serif;
  font-size:11px;
  color:#333333;
  border-width: 1px;
  border-color: #999999;
  border-collapse: collapse;
}
table.hovertable th {
  background-color:#c3dde0;
  border-width: 1px;
  padding: 8px;
  border-style: solid;
  border-color: #a9c6c9;
}
table.hovertable tr {
  background-color:#d4e3e5;
}
table.hovertable td {
  border-width: 1px;
  padding: 8px;
  border-style: solid;
  border-color: #a9c6c9;
}


</style>

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
color:#000000;
background-color:#12292F;
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
</style>
</head>

<body>
 
  <!--<div class="container"> -->

  <div style = 'background-color: #f78181;color:#ffffff' class="jumbotron" align="center">
    
    <h1> 
     Connect NPO to NPO at Non Profit Connect</h1>      
  </div>  
  
</div>
<form action="" name="flight_form" method="post">
    
<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Enter Interests:</a>
 <?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="ngo";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql=mysqli_query($conn,"SELECT distinct Domain FROM non_profit_organization");

$select= '<select id="start" name="start">';
while($rs=mysqli_fetch_array($sql)){
  $x=1;
      $select.='<option value="'.$rs['Domain'].'">'.$rs['Domain'].'</option>';
  }

$select.='</select>';
echo $select;

?>
        </h4>
      </div>
      
</div>    
     <div style="position:relative;right:5px;top:2px;">
                         
                <div class="container">
                 <input type="submit" class="btn btn-primary btn-block" name="submit">
                </div>
                        </div>
                     
  
                </form>

</body>

<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="ngo";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


//$query = "select U.uname as 'University Name',u.City,u.State,u.Website,u.UEmailID as 'E-Mail ID' from [BUDT758_DB_Student_001.MySchoolRankings.University] U inner join [BUDT758_DB_Student_001.MySchoolRankings.Program] P on u.UID=p.UID where u.uregion='Northeast' and p.PCat='MSIS' "; 

//$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
$a="hovertable";
$b="center";
$x=1;
if(isset($_POST['submit']) || isset($_POST['Display Coursework'])) {
    // form submitted, now we can look at the data that came through
    // the value inside the brackets comes from the name attribute of the input field. (just like submit above)
   
    $interests=$_POST['start'];
    

    // Now you can do whatever with this variable.


echo '<br><br><br>';


$sql="Select p.Name,p.Domain,p.Location,p.Size,p.WebURL,p.Phone_No,p.Chairperson from non_profit_organization p where p.interests like '%".$interests."%'";

      $result = mysqli_query($conn, $sql);

echo "<table class=". $a." align=".$b.">"; 
echo "<tr><td><b>Organization Name</b></td><td><b>Domain</b></td><td><b>Location</b></td><td><b>Size</b></td><td><b>WebURL</b></td><td><b>Phone_No</b></td><td><b>Chairperson</b></td></tr>";


    // output data of each row
    while($row = mysqli_fetch_array($result)) 
    {
      //Creates a loop to loop through results
echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['Domain'] ."</td><td>" . $row['Location'] ."</td><td>" . $row['Size'] ."</td><td>" . $row['WebURL'] ."</td><td>" . $row['Phone_No'] ."</td><td>" . $row['Chairperson'] ."</td></tr>";  //$row['index'] the index here is a field name

}


echo "</table>";

}

?>