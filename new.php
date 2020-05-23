<!DOCTYPE html>

<html lang="en">
<head onload="init()">
    <meta charset="utf-8" />
    <?php
     
    $usrID=$_POST['usrID'];
    $usrPW=$_POST['usrPW'];
    $email=$_POST['Email'];
    /*
    echo($id);
    echo($email);
    
    echo($usrID);
    echo($usrPW);
    echo($email);
    
    echo($day);
    echo($year);
    echo($month);
    */
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
    $query="INSERT INTO login (usrID,email) VALUES (?,?)";
    $stmt=$db->prepare($query);
    $stmt->bind_param('ss',$usrID,$email);
    $stmt->execute();
    if($stmt->affected_rows > 0){
        $query="UPDATE login SET active=0";
        mysqli_query($db, $query);
        $query="UPDATE login SET active=1 WHERE usrID='$usrID'";
        mysqli_query($db, $query);
        
        echo("<script>location.replace('./main.php');</script>");
    }else{
        echo "<p>An error has occurred.<br/>
                Please retry.</p>";
    }
    ?>
    </head>
    <body>
    </body>
</html>
