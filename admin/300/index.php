<?php
// Check if a weird user agent is being used
if (strpos($_SERVER['HTTP_USER_AGENT'],'Mozilla') !== false) {
header("X-Nothing-2See: here");
} else { echo "<script>alert('I don\'t like what you\'re doing!')</script>";die();}

// Custom Headers
header("X-XSS-Protection: 0");
?>
<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" type="text/css" href="../stylesheets/stylesheet.css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel=
    'stylesheet' type='text/css'>
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />

<!--<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
<script src="../js/html5.js"></script>
<script src="../js/jquery.min.js"></script>

<title>Sys Admin</title>

</head>

<body>

<div id="main" style="padding-left:30px;padding-top:30px;">

    <h1>Sys Admin - Log Viewer</h1>
    <br>
<p>File viewing options</p>
<FORM method="post" action="index.php">
<b>Drop-Down Menu (Single File Selection) </b><br>
File Name
<select name="log">
  <option value="log01">log01</option>
  <option value="log02">log02</option>
  <option value="log03">log03</option>
  <option value="log04">log04</option>
</select>
<input type="submit" value="Submit">
</FORM>
</div>
<?php
    if(isset($_POST["log"]))
    {
      $log = $_POST["log"];
    } 
    if(strlen($log)<25 && strpos($log, 'ping') == false)
    {
       echo(shell_exec("cat `pwd`/" . $_POST["log"] . ".log"));
    }
    else {
       echo "Error, request failed validation checks";
    }
?>

</body>

</html>
