
<html >
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

  </head>

    <body>
    <style>
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
			width: 100%;
		}

		div.content {
			background-color: #f5f5f5;
			font-family: 'NanumBarunGothic';
		}
  </style>
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
    <div class="content">
		<nav id="topbar" class="navbar ">
		  <div class="container-fluid">
			<div id=login name=login>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="config.php"><span class="glyphicon glyphicon-user"></span><?php echo($row['usrID']);?></a>
				</li>
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
	  </div>
	  </nav>
  
	</div>
    
<div style="margin-right: 10%;margin-left: 5%;">

<?PHP
    $host = 'localhost';
    $user = 'pmauser';
    $password = 'password';
    $dbName = 'opensw_art';
// Create connection
    $conn = new mysqli($host, $user, $password, $dbName);
$search =$_POST['search']; 
echo '<h2>'.$search.'</h2>' ;
$sql = "SELECT * FROM  Collection WHERE title  LIKE '%".$search."%' OR description  LIKE '%".$search."%' OR artist  LIKE '%".$search."%' OR times  LIKE '%".$search."%' OR tag  LIKE '%".$search."%'"; 
$result = mysqli_query ($conn, $sql);
while($row = mysqli_fetch_array($result)) {

    echo '<a style = "font-size:35px" href="http://35.206.125.75/OPENSW_ART/post.html?id='.$row['id'].'">'.$row['title'].'</a>';
    echo '<br><img style = "width: 100px; height: 100px", src=data/'.$row['id'].'.jpg></img><br>';
 //   echo $row['description'];
    echo '<br>';
    echo '<br>';
  }
?>
  </div>