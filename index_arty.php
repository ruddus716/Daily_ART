<?php
include 'db.php';
session_start();
?>
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

  <!-- Bootstrap core CSS -->
  <link href="css/forum.css" rel="stylesheet">

  <title>ARTSTAGRAM</title>

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

    #others-gallery {
      width: 100%;
      height: auto;
    }

    div.row {
      height: auto;
      overflow: auto;
      margin-bottom: 20px;
    }

    div.signupRecomImage {
      margin: 10px;
      float: left;
      height: 300px;
    }

    div.signupRecomImage img {
      width: auto;
      height: 100%;
    }

    div.scrollmenu {
      background-color: #4e85f4;
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

    .rounded-circle {
      border-radius: 50%;
      margin: 10px;
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
          <li class="navitem"><a href="index_time.php">포럼</a></li>
        </ul>
      </div>

    </nav>
  </head>
<body>

  <ul class="tab">
    <li data-tab="tab1"><a href="index_time.php">시대별</a></li>
    <li class="current" data-tab="tab2"><a href="#">작가별</a></li>
  </ul>
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th> 번호 </th>
            <th> 게시글 제목 </th>
            <th> 작성시간 </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = " SELECT * FROM forum_arty";
          $resource = mysqli_query( $conn, $sql);

          $num = 1;
          while( $row = mysqli_fetch_assoc( $resource ) ) {
            print "<tr>";
            print "<th scope='row'>$num</th>";
            print "<td><a href=view_arty.php>$row[title]</td>";
            print "<td>$row[date]</td>";
            print "</tr>";
            $num++;
          }

          print "<tr>";
          print "<td colspan=4 align=center>";

          print "</td>";
          print "</tr>";
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="container">
    <form class="navbar-form navbar-right" method=POST action=write_arty.php>
      <button type="submit" class="btn btn-primary pull-right">글쓰기</button>
    </form>
  </div>
</body>
</html>