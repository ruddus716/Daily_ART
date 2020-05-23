<html>
<head>

<link href='https://cdn.rawgit.com/openhiun/hangul/14c0f6faa2941116bb53001d6a7dcd5e82300c3f/nanumbarungothic.css' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <?php 
    $host = 'localhost';
    $user = 'loginid';
    $password = 'login123';
    $dbName = 'login';
    
    // Create connection
    $db = new mysqli($host, $user, $password, $dbName);
    
    $query = "SELECT * FROM login WHERE active=1";    
    $result=mysqli_query($db, $query);
	if (!$result) {
        printf("Error: %s\n", mysqli_error($db));
        exit();
    }
	if(mysqli_connect_errno()){
        echo "<p>Error: Could not connect to database.<br />
             Please try again later.</p>";
        exit;
    }  
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);    
	if(isset($row)){
	    ?>
	    <style type="text/css"> #login{display:true;} #logout{display:none;}</style>
	<?php }
	else{
	    ?>
	    <style type="text/css"> #login{display:none;} #logout{display:true;}</style>
	<?php
	}
	?>
<style>
#circle {
width:300px;
height:300px;
border-radius:50%;
text-align:center;
margin:0 auto;
box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 0.8);
background-image:url("https://upload.wikimedia.org/wikipedia/commons/6/68/Vincent_van_Gogh_-_Almond_blossom_-_Google_Art_Project.jpg");
background-size:500px;
}

.textInput {
  border: none;
  width:240px;
  height:50px;
  border-width:1px;
  border-style:solid;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:-10px;
  box-shadow: 0px 0px 10px -6px rgba(0, 0, 0, 0.8);
  padding:10px;
  font-family:'NanumBarunGothic';
}

.center {
width:250px;
height:50px;
text-align:center;
margin:0 auto;
}

#btn {
  border: none;
  width:240px;
  height:50px;
  border-width:1px;
  border-style:solid;
  margin-left:-10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-weight:bold;
  cursor: pointer;
  box-shadow: 0px 0px 10px -6px rgba(0, 0, 0, 0.8);
  padding:0px;
 font-family: 'Nanum Barun Gothic';
   background-color: #FFFFFF;
  color:#48494d;
  border-color:gray;
}
#btn:hover{ 
background-color:gray;
color:#FFFFFF;
}
#dashdiv{
    width:300x;
    margin:0px auto;
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://cdn.rawgit.com/openhiun/hangul/14c0f6faa2941116bb53001d6a7dcd5e82300c3f/nanumbarungothic.css' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet prefetch' href='https://npmcdn.com/basscss@8.0.0/css/basscss.min.css'>
    <link href="css/colorSearch.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <title>ARTSTAGRAM</title>

    <style>
        #page-top {
            font-family: 'NanumBarunGothic', 'serif';
        }

        #app-title {
            font-family: 'Bebas Neue';
            color: #4e85f4;
            font-size: 80px;
            width: 100%;
            text-align: center;
        }

        #topbar {
            background-color: white;
            border: 0;
            box-shadow: 1px 1px 10px 10px #cccccc;
        }

        #nav {
            margin-left: 10%;
            margin-right: 10%;
            font-size: 20px;
            padding-bottom: 10px;
        }

        li.navitem {
            padding-left: 5px;
            width: 150px;
            text-align: center;
        }

        div.content {
            background-color: #f5f5f5;
            font-family: 'NanumBarunGothic';
        }

    </style>
</head>

<body id="page-top">
    <div class="content">
        <nav id="topbar" class="navbar ">
            <div class="container-fluid">
            <div style="width:700px; padding-top:5px; margin-left:-100px;float:left;">
                <ul id="nav" class="nav navbar-nav" style="font-family: 'NanumBarunGothic', 'serif';">
                    <li class="active navitem"><a href="main.php">Home</a></li>
                    <li class="navitem"><a href="colorSearch.html">탐색</a></li>
                    <li class="navitem"><a href="index_time.php">포럼</a></li>
                </ul>
                </div>
            <div id=login name=login style="float:right;">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="config.php"><span class="glyphicon glyphicon-user"></span><?php echo($row['usrID']);?></a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                </ul>
                </div>
            <div id=logout name=logout style="float:right;">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="SignUp2.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="signIn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                </div>

            </div>

        </nav>
   </div>
<div style="padding:30px"></div>

<div style="padding:30px"></div>
<h1 style="text-align:center;font-weight:bold; font-size:80px; font-family:'Bebas Neue'; color:#4c8bf5">ARTSTAGRAM</h1>

<div id="circle"></div>
<div style="padding-top:50px">
<div class="center">
<div style="padding-top:10px;">

<form name="test" onSubmit="register();"action="login.php" method="post">
    
            <table>
                <tr>
                    <td><input type="text" class="textinput" name="usrID" value="ID" onclick="this.value='';"></td>
                </tr>
                <tr>
                    <td><input type="password" class="textinput" name="usrPW"  value="password"  onclick="this.value='';" name="pw"></td>
                </tr>
                <tr>
<td><div style="padding-top:20px;"></td>

                </tr>
<tr><td>

    </td></tr>
                <tr>
	<td><input type="submit" id="btn" value="Sign in"></td>
                </tr>


</table>


</form>
    


</div>
</body>
</html>