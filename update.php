<!DOCTYPE html>
<html>
<head>
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
    <meta charset="utf-8" />
    <style>
table {
	padding-top: 20px;
	margin: 0 auto;
}

.textinput {
	width: 200px;
	height: 25px;
}

select {
	height: 30px;
}

.btn2 {
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
.btn2:hover{ 
background-color:gray;
color:#FFFFFF;
}
.center {
        width:250px;
        height:50px;
        text-align:center;
        margin:0 auto;
        }
        
        #box{
          border: none;
          width:100%;
          height:70px;
          margin-left:0px;
          text-align: center;
          text-decoration: none;
          font-size: 16px;
          font-weight:bold;
          color:black;
          padding:0px;
          font-family:Roboto-Medium;
          background-color:lightgray;
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
                 <div class="container-fluid">
                <div id=login name=login>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="config.php"><span class="glyphicon glyphicon-user"></span><?php echo($row['usrID']);?></a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                </ul>
                </div>
            <div id=logout name=logout>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="SignUp2.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="signIn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                </div>

                <div id="app-title" class="navbar-header">
                    <a href="#">ARTSTAGRAM</a>
                </div>
                <ul id="nav" class="nav navbar-nav" style="font-family: 'NanumBarunGothic', 'serif';">
                    <li class="navitem"><a href="gallery.php">나의 갤러리</a></li>
                    <li class="active navitem"><a href="main.php">Home</a></li>
                    <li class="navitem"><a href="colorSearch.html">탐색</a></li>
                    <li class="navitem"><a href="index_time.php">포럼</a></li>
                 </ul>
            </div>

        </nav>
   </div>
    <h1></h1>
    <?php
     
    $pw=md5($_POST['pw']);
    $email=$_POST['email'];
    $year=$_POST['year'];
    $month=$_POST['month'];
    $day=$_POST['day'];
    
    /*echo($usrID);
    echo($usrPW);
    echo($email);
    
    echo($day);
    echo($year);
    echo($month);
    */
    $year=doubleval($year);
    $month=doubleval($month);
    $day=doubleval($day);
        
    $usrID = $_POST['usrID'];
    $usrPW = md5($_POST['usrPW']);
    $host = 'localhost';
    $user = 'pmauser';
    $password = 'password';
    $dbName = 'opensw_art';
    
    
    // Create connection
    $db = new mysqli($host, $user, $password, $dbName);
    
    
    if(mysqli_connect_errno()){
        echo "<p>Error: Could not connect to database.<br />
             Please try again later.</p>";
        exit;
    }
    $query = "SELECT * FROM login WHERE active=1";
    $result=mysqli_query($db, $query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    ?>
    <div class=center id=box><?php
    if($row['usrPW']!=$pw){
        echo "<p>비밀번호가 틀렸습니다. 다시 시도해 주세요</p>";
        $s=1;
    }
    else{
        $query="UPDATE login SET email='$email',year='$year',month='$month',day='$day' WHERE active=1";
        mysqli_query($db, $query);
    if($row['email']!=$email||$row['year']!=$year||$row['month']!=$month||$row['day']!=$day){
        echo "<p>회원정보 변경이 완료되었습니다:D</p>";
    }else{
        echo "<p>변경된 정보가 없습니다.</p>";
    }}
    ?></div>
    
</body>
<div style="padding:10px; float:left;">
	&nbsp<input type="button" class="btn2" onClick="location.href='config.php'" value="회원정보 수정으로 돌아가기">
</div><div style="padding:10px;  float:left;">	<input type="button" class="btn2" onClick="location.href='main.php'" value="메인 화면으로 돌아가기">
	</div>
</html>