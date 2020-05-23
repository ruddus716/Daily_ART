
<?PHP
    $host = 'localhost';
    $user = 'pmauser';
    $password = 'password';
    $dbName = 'opensw_art';
// Create connection
    $conn = new mysqli($host, $user, $password, $dbName);

$sql = "select * from Collection order by rand() limit 3";
$result = mysqli_query ($conn, $sql);
$return_array = array();
while($row = mysqli_fetch_assoc($result)) {
    $row_array['id'] = $row['id'];
    array_push($return_array, $row_array);
}
echo json_encode($return_array);