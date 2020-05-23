<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>SignUp</h1>
    <?php
    
    if(!isset($_POST['usrID'])||!isset($_POST['pw'])||!isset($_POST['email'])){
    echo "<p>You have not entered all the required details.<br />
         Please go back and try again</p>";
    
    exit;
    }
    
    $usrID=$_POST['usrID'];
    $usrPW=md5($_POST['pw']);
    
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
    $query="INSERT INTO login (usrID, usrPW,email,year,month,day) VALUES (?,?,?,?,?,?)";
    $stmt=$db->prepare($query);
    $stmt->bind_param('sssddd',$usrID,$usrPW,$email,$year,$month,$day);
    $stmt->execute();
    if($stmt->affected_rows > 0){
//        echo "<p>Sign up completed! go Back and sign in :D</p>";
        echo("<script>location.replace('./main.php');</script>");        
    }else{
        echo "<p>An error has occurred.<br/>
                Please retry.</p>";
    }
    ?>
</body>
</html>