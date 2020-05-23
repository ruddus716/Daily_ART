
<?PHP
    $host = 'localhost';
    $user = 'pmauser';
    $password = 'password';
    $dbName = 'opensw_art';
// Create connection
    $conn = new mysqli($host, $user, $password, $dbName);
$id =$_POST["id"];

$sql = "SELECT * FROM  Collection WHERE id  = '".$id ."'";
$result = mysqli_query ($conn, $sql);
$return_array = array();
while($row = mysqli_fetch_assoc($result)) {
    $row_array['title'] = $row['title'];
    $row_array['description'] =  $row['description'];
    $row_array['color'] = $row['color'];

    $row_array['year'] = $row['year'];
    $row_array['artist'] = $row['artist'];
    $row_array['times'] = $row['times'];

    $row_array['tag'] = $row['tag'];

    array_push($return_array, $row_array);
    
}
print json_encode($return_array);