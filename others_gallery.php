<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
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
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>

                <div id="app-title" class="navbar-header">
                    <a href="#">ARTSTAGRAM</a>
                </div>
                <ul id="nav" class="nav navbar-nav" style="font-family: 'NanumBarunGothic', 'serif';">
                    <li class="navitem"><a href="gallery.php">나의 갤러리</a></li>
                    <li class="navitem"><a href="main.php">Home</a></li>
                    <li class="navitem"><a href="colorSearch.html">탐색</a></li>
                    <li class="navitem"><a href="#">포럼</a></li>
                </ul>
            </div>

        </nav>
        <!-- Page Wrapper -->
        <div id="wrapper">
            <div class="row">
                <?php
                $usrID = $_GET["user"];
                
                echo "<h1>".$usrID."님의 갤러리</h1>";
            
                $host = 'localhost';
                $user = 'pmauser';
                $password = 'password';
                $dbName = 'opensw_art';
                $db = new mysqli($host, $user, $password, $dbName);
                if (mysqli_connect_errno()){
                    echo '<p>Error:Could not connect to database.</p>';
                    exit;
                }
            
                $query = "SELECT * FROM gallery where user_id='$usrID'";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_array($result)){
                    echo "<div class='galleryImage'><a href='http://35.206.125.75/OPENSW_ART/post.html?id=$row[collection_id]'><img src='data/$row[collection_id].jpg'></a></div>";
                }
                mysqli_free_result($result);
                ?>

            </div>
        </div>
        <!-- /.container-fluid -->
    </div>

</body>

</html>
