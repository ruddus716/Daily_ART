
<?PHP
    $host = 'localhost';
    $user = 'pmauser';
    $password = 'password';
    $dbName = 'opensw_art';
// Create connection
    $conn = new mysqli($host, $user, $password, $dbName);
$search ="고흐";
echo $search ;
$sql = "SELECT * FROM  Collection WHERE title  LIKE '%".$search."%' OR description  LIKE '%".$search."%' OR artist  LIKE '%".$search."%' OR times  LIKE '%".$search."%' OR tag  LIKE '%".$search."%'"; 
echo $sql ;
$result = mysqli_query ($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];
  }