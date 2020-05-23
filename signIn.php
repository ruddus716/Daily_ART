<html>
<head>
<link href='https://cdn.rawgit.com/openhiun/hangul/14c0f6faa2941116bb53001d6a7dcd5e82300c3f/nanumbarungothic.css' rel='stylesheet' type='text/css'>
<!---------------------------------------------->
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="809152103277-sc68misi9b6725v2agoi1cq2ffsn81lr.apps.googleusercontent.com">
    
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!---------------------------------------------->
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
<?php 
$host = 'localhost';
$user = 'pmauser';
$password = 'password';
$dbName = 'opensw_art';


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
                    <li><a href="SignUp.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="signIn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                </div>

        </nav>
   </div>
<div style="padding:30px"></div>

<h1 style="text-align:center;font-weight:bold; font-size:80px; font-family:'Bebas Neue'; color:#4c8bf5">ARTSTAGRAM</h1>
<div id="circle"></div>
<div style="padding-top:50px">
<div class="center">
<div style="padding-top:10px;">

<!--------google button--------->

<div id="my-signin2"></div>
  <script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSignIn,
        'onfailure': onFailure
      });
    }
    function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());
		console.log(profile);
        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
        //document.write(+profile.getName()+","+profile.getEmail());
        document.getElementById("usrID").value=profile.getGivenName();
        document.getElementById("usrID").value=profile.getFamilyName();
        document.getElementById("Email").value=profile.getEmail();
        ///document.write(document.getElementById("usrID").value);
        //return profile;
        document.form.submit();
        return true;
      }
  </script>
  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
	
	<div style="padding-top:25px"></div>
	<form name='form' action="new.php" method="post">
	<input type="hidden" id="usrID" name="usrID" value="">
	<input type="hidden" id="usrPW" name="usrPW" value="">
	<input type="hidden" id="Email" name="Email" value="">
    </form>
   
    <script>
    

  window.fbAsyncInit = function() {
    FB.init({
      appId: '716306872213242',
      cookie     : true,
      xfbml      : true,
      version    : 'v5.0'
    });

    FB.AppEvents.logPageView();

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-----------------fb-------------->

<div id="dashdiv"></div>------------- Or -------------</div>
<div style="padding-top:20px;"></div>

<input type="button" id="btn" value="Sign in with Email" onClick="location.href='signIn2.php'">
<div><div style="padding-top:20px;"></div>
<div id="dashdiv"></div>------------ Sign Up -----------</div>
<div style="padding-top:20px;"></div>

<input type="button" id="btn" value="Sign Up" onClick="location.href='SignUp2.php'">
    </div>




</body>
</html>