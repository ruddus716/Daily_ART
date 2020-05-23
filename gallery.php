<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://cdn.rawgit.com/openhiun/hangul/14c0f6faa2941116bb53001d6a7dcd5e82300c3f/nanumbarungothic.css' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet prefetch' href='https://npmcdn.com/basscss@8.0.0/css/basscss.min.css'>
    <link href="css/colorSearch.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <title>Gallery</title>


    <style>
        #page-top {
            font-family: 'NanumBarunGothic', 'serif';
        }

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
            margin-left: 10%;
            margin-right: 10%;
            font-size: 20px;
            padding-bottom: 10px;
        }
        
        li.navitem {
            padding-left: 10px;
            width: 150px;
            text-align: center;
        }   

        div.content {
            background-color: #f5f5f5;
            font-family: 'NanumBarunGothic';
        }
        
        #wrapper {
            height: auto;
            margin-left: 10%;
            margin-right: 10%;
            font-family: 'NanumBarunGothic', 'serif';
        }
        
        div.galleryImage {
            margin: 10px;
            float: left;
            height: 200px;
        }

        div.galleryImage img {
            width: auto;
            height: 100%;
        }

        div.div_next {
            width=100%;
            height=100px;
        }

        div.scrollmenu {
            background-color: #4e73df;
            overflow: auto;
            white-space: nowrap;
        }

        div.scrollmenu a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }

        div.scrollmenu a:hover {
            background-color: #777;
        }

    </style>
</head>

<body id="page-top">
    <div class="content">
        <nav id="topbar" class="navbar ">
            <div class="container-fluid">
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
                <div id=login name=login>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="config.php"><span class="glyphicon glyphicon-user"></span><?php echo($row['usrID']);?></a></li>
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

        </nav>

        <!-- Page Wrapper -->
        <div id="wrapper">

            <div class="row">
                <h1>나의 갤러리</h1>
                <?php
                $host = 'localhost';
                $user = 'pmauser';
                $password = 'password';
                $dbName = 'opensw_art';
                $db = new mysqli($host, $user, $password, $dbName);
                if (mysqli_connect_errno()){
                    echo '<p>Error:Could not connect to database.</p>';
                    exit;
                }
                $query = "SELECT * FROM login WHERE active=1";
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_array($result);
                
            
                $query = "SELECT * FROM gallery where user_id='$row[usrID]'";
                
                $stmt = $db->prepare($query);
                $stmt->execute();
                $stmt->store_result();
                $stmt->bind_result($user_id, $collection_id);

                // while($stmt->fetch()){
                //     echo "<div class='galleryImage'><a href='http://35.206.125.75/OPENSW_ART/post.html?id=$collection_id'><img src='data/$collection_id.jpg'></a></div>";
                // }
                // mysqli_free_result($result);
                ?>
<div class='galleryImage'><a href='http://35.206.125.75/OPENSW_ART/post.html?id=1'><img src='data/1.jpg'></a></div>
<div class='galleryImage'><a href='http://35.206.125.75/OPENSW_ART/post.html?id=1'><img src='data/158.jpg'></a></div>

<div class='galleryImage'><a href='http://35.206.125.75/OPENSW_ART/post.html?id=1'><img src='data/201.jpg'></a></div>

<div class='galleryImage'><a href='http://35.206.125.75/OPENSW_ART/post.html?id=1'><img src='data/202.jpg'></a></div>

<div class='galleryImage'><a href='http://35.206.125.75/OPENSW_ART/post.html?id=1'><img src='data/161.jpg'></a></div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </div>

</body>

</html>
