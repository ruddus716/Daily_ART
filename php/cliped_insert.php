
<?PHP
    $host = 'localhost';
    $user = 'pmauser';
    $password = 'password';
    $dbName = 'opensw_art';
// Create connection
    $conn = new mysqli($host, $user, $password, $dbName);
    $id ="open";
    $content  = $_POST['c_id'];

    //$userHasUpvoted  = $_POST['userHasUpvoted'];

    $sql = "INSERT INTO gallery(user_id, collection_id) VALUES ('".$id."','".$content."')";
    mysqli_query ($conn, $sql);

    
    
    

?>