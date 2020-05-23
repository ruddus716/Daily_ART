
<?PHP
    $host = 'localhost';
    $user = 'pmauser';
    $password = 'password';
    $dbName = 'opensw_art';
// Create connection
    $conn = new mysqli($host, $user, $password, $dbName);

$sql = "SELECT * FROM  review";
$result = mysqli_query ($conn, $sql);
$return_array = array();
while($row = mysqli_fetch_assoc($result)) {
    $row_array['id'] = (int) $row['id'];
    $row_array['parent'] = (int) $row['parent'];
    $row_array['created'] = $row['created'];

    $row_array['modified'] = $row['modified'];
    $row_array['content'] = $row['content'];
    $row_array['creator'] = (int)$row['creator'];

    $row_array['fullname'] = $row['fullname'];
  //  $row_array['profile_picture_url'] = "data/false.jpg";
    $row_array['created_by_admin'] = false;
    $row_array['created_by_current_user'] = true;
    $row_array['created_by_admin'] = false;
    $row_array['upvote_count'] = 0;
    $row_array['user_has_upvoted'] = false;
    $row_array['is_new'] = false;
    array_push($return_array, $row_array);
    
}
print json_encode($return_array);