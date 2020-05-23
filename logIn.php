<html>
<head>
<style>
.center {
width:250px;
height:50px;
text-align:center;
margin:0 auto;
}
.button {
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
  font-family:Roboto-Medium;
}

.email{
  background-color: #FFFFFF;
  color:#48494d;
  border-color:gray;
}

.hoverEmail:hover{ 
background-color:gray;
color:#FFFFFF;
}
</style>
<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Username and password sent from form in HTML
    $usrID = $_POST['usrID'];
    $usrPW = md5($_POST['usrPW']);
    $host = 'localhost';
    $user = 'pmauser';
    $password = 'password';
    $dbName = 'opensw_art';
    
    // Create connection
    $db = new mysqli($host, $user, $password, $dbName);
    
    $select_query = "SELECT * FROM login WHERE usrID='$usrID' and usrPW='$usrPW'";    
    $result = mysqli_query($db, $select_query);
    $query="UPDATE login SET active=0";
    mysqli_query($db, $query);
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
    //$active = $row['active'];
    //echo($active);

    /*if ($row) {
 //       session_register($usrID);
        $_SESSION['usrID'] = $usrID;
        if(!isset($_SESSION[$usrID]))
            header('Location: ./main.html');
            //$query="UPDATE login SET active=0 WHERE usrID='$usrID' and usrPW='$usrPW'";
    } else {
        //$query="UPDATE login SET active=1 WHERE usrID='$usrID' and usrPW='$usrPW'";
        echo("잘못된 아이디나 비밀번호 입니다.");
        //header('Location: ./signIn2.html');
    }*/
}

?>
</head>
<body>

<div class=center><div style="padding-top:50px">
<?php
    if ($row) {
    //       session_register($usrID);
    $_SESSION['usrID'] = $usrID;
    if(!isset($_SESSION[$usrID]))
        header('Location: ./main.php');
        $query="UPDATE login SET active=1 WHERE usrID='$usrID' and usrPW='$usrPW'";
        mysqli_query($db, $query);
    } else {
        //$query="UPDATE login SET active=1 WHERE usrID='$usrID' and usrPW='$usrPW'";
        echo("잘못된 아이디나 비밀번호 입니다.");
    //header('Location: ./signIn2.html');
    }
?>
</div>
<div class="center">
<div style="padding-top:30px;">
<input type="button" class="button email hoverEmail" value="돌아가기" onClick="location.href='signIn2.php'">
</div>
</body>
</html>