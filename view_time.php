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
          <li class="navitem"><a href="#">Home</a></li>
          <li class="navitem"><a href="colorSearch.html">탐색</a></li>
          <li class="navitem"><a href="index_time.php">포럼</a></li>
        </ul>
      </div>

    </nav>
  </head>
  <body>


    <?php
    $sql = " SELECT * FROM forum_time";
    $resource = mysqli_query( $conn, $sql);
    $row = mysqli_fetch_assoc( $resource )

    ?>
    <!-- 게시판 -->
    <div class="container">
      <div class="row">
        <table class="table table-striped"
        style="text-align: center; border: 1px solid #dddddd">
        <thead>
          <tr>
            <th colspan="3"
            style="background-color: #eeeeee; text-align: center;">글 보기 </th>
          </tr>
        </thead>
        <tbody>

        <tr>
          <td style="width: 20%;"> 글 제목 </td>
          <td colspan="2">12월 전시회 : 로코코로 떠나다</td>
        </tr>
        <tr>
          <td>작성자</td>  
          <td colspan="2">test</td>
        </tr>
        <tr>
          <td>작성일</td>  
          <td colspan="2">2019-12-17 15:39:40</td>
        </tr>
        <tr>
          <td>내용</td> 
          <td colspan="2" style="min-height: 200px; text-align: left;">
            
<첫째주 12/02(월) ~ 12/08(일)>

 
[삼성동 코엑스(Coex) 전시회]

http://seoul.designfestival.co.kr/

행사명 : 제18회 서울디지인페스티펄

일   정 : 2019.12.04(수) ~ 12.08(일), 총 5일간

장   소 : 삼성동 코엑스(Coex) Hall C

입장료 : 12,000원

 

[일산 킨텍스(KINTEX) 전시회]

http://techfin.asia/2019/
 
행사명 : 테크핀 아시아 2019

일   정 : 2019.12.05(목) ~ 12.06(금), 총 2일간

장   소 : 일산 킨텍스(KINTEX) 제2전시장, Hall 6

입장료 : 5,000원


          </td>
        </tr>

      </tbody>
    </table>  
    <a href = "index_time.php" class="btn btn-primary pull-right">목록</a>

  </div>
</div>
</body>
</html>