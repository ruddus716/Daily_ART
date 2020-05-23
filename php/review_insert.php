
<?PHP
    $host = 'localhost';
    $user = 'pmauser';
    $password = 'password';
    $dbName = 'opensw_art';
// Create connection
    $conn = new mysqli($host, $user, $password, $dbName);


    $content  = $_POST['content'];
    $modified  = $_POST['modified'];
    $created  = $_POST['created'];
    $parent  = $_POST['parent'];
    //$profileImg  = $_POST['profileImg'];
    $fullname  = $_POST['fullname'];
    //$createdByCurrentUser  = $_POST['createdByCurrentUser'];
    $upvote  = $_POST['upvote'];
    //$userHasUpvoted  = $_POST['userHasUpvoted'];

    $sql = "INSERT INTO review(content, parent, created, modified, fullname, upvote_count) VALUES ('".$content."','".$parent."','".$created."','".$modified."','".$fullname."','".$upvote_count."')";
 echo     $sql;
    mysqli_query ($conn, $sql);

    
    
    

?>