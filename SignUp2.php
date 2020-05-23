<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8" />

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
<script type="text/javascript">
	function register() {
		var id = document.getElementById("usrID");
		var pw = document.getElementById("usrPW");
		var pw2 = document.getElementById("usrPW2");
		var email = document.getElementById("email");
		//var idt = document.getElementById("idchk");
		if (id.value == "") {
			alert("ID를 입력하세요.");
			return false;
		} else if (pw.value == "") {
			alert("패스워드를 입력하세요.");
			return false;
		} else if (pw.value.length > 12 || pw.value.length < 8) {
			alert("패스워드는 8자 이상 12자 이하로 입력해주세요.");
			return false;
		} else if (pw.value != pw2.value) {
			alert("재확인 패스워드를 제대로 입력해주세요.");
			return false;
		} else if (email.value == "" || email.value == "이메일을 입력해 주세요.") {
			alert("이메일을 입력해주세요.");
			return false;
		} else {
			return true;
		}
		/*else {
		    document.test.submit();
		    alert("회원 가입을 축하합니다." );
		}*/
	}
	function reWrite() {
		document.test.reset();
		alert("다시 입력하세요.");
	}
	function change() {
		alert("ID가 변경되었습니다.");
	}
</script>
<style>

table {
	padding-top: 20px;
	margin: 0 auto;
}

.textinput {
	width: 200px;
	height: 25px;
}

select {
	height: 30px;
}

.btn2 {
	border: none;
  width:80px;
  height:30px;
  border-width:1px;
  border-style:solid;
  margin-left:-10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  cursor: pointer;
  box-shadow: 0px 0px 10px -6px rgba(0, 0, 0, 0.8);
  padding:0px;
 font-family: 'Nanum Barun Gothic';
   background-color: #FFFFFF;
  color:#48494d;
  border-color:gray;
}
.btn2:hover{ 
background-color:gray;
color:#FFFFFF;
}
#div{

}
tr{
height:35px;
}
</style>
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
            padding-left: 5px;
            width: 150px;
            text-align: center;
        }

        div.content {
            background-color: #f5f5f5;
            font-family: 'NanumBarunGothic';
        }

    </style>
</head>

<body id="page-top">
    <div class="content">
        <nav id="topbar" class="navbar ">
            <div class="container-fluid">
            <div style="width:1300px; padding-top:5px; margin-left:-100px;float:left;">
                <ul id="nav" class="nav navbar-nav" style="font-family: 'NanumBarunGothic', 'serif';">
                    <li class="navitem"><a href="gallery.php">나의 갤러리</a></li>
                    <li class="active navitem"><a href="main.php">Home</a></li>
                    <li class="navitem"><a href="colorSearch.html">탐색</a></li>
                    <li class="navitem"><a href="index_time.php">포럼</a></li>
                </ul>
                </div>

                <div id=login name=login style="float:right;">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="config.php"><span class="glyphicon glyphicon-user"></span><?php echo($row['usrID']);?></a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                </ul>
                </div>
            <div id=logout name=logout style="float:right;">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="SignUp.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="signIn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                </div>


        </nav>
   </div>


		<form name="test" onSubmit="return register();" onReset="reWrite();"
			action="signUp.php" method="post">
			<fieldset>
				<div id="div" style="font-size:25px; font-weight:bold;"><center>Sign Up</center></div>
				<hr></hr>
				<table>

					<tr>
						<td>ID</td>
						<td><input type="text" class="textinput" id="usrID"
							name="usrID" value="" onclick="this.value='';"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" class="textinput" id="usrPW"
							name="pw"></td>
					</tr>
					<tr>
						<td>Password 재확인</td>
						<td><input type="password" class="textinput" id="usrPW2"
							name="pw2"></td>
					</tr>

					<tr>
						<td>생년월일</td>
						<td><select name="year" id="year">
								<OPTION>1901</OPTION>
								<OPTION>1902</OPTION>
								<OPTION>1903</OPTION>
								<OPTION>1904</OPTION>
								<OPTION>1905</OPTION>
								<OPTION>1906</OPTION>
								<OPTION>1907</OPTION>
								<OPTION>1908</OPTION>
								<OPTION>1909</OPTION>
								<OPTION>1910</OPTION>
								<OPTION>1911</OPTION>
								<OPTION>1912</OPTION>
								<OPTION>1913</OPTION>
								<OPTION>1914</OPTION>
								<OPTION>1915</OPTION>
								<OPTION>1916</OPTION>
								<OPTION>1917</OPTION>
								<OPTION>1918</OPTION>
								<OPTION>1919</OPTION>
								<OPTION>1920</OPTION>
								<OPTION>1921</OPTION>
								<OPTION>1922</OPTION>
								<OPTION>1923</OPTION>
								<OPTION>1924</OPTION>
								<OPTION>1925</OPTION>
								<OPTION>1926</OPTION>
								<OPTION>1927</OPTION>
								<OPTION>1928</OPTION>
								<OPTION>1929</OPTION>
								<OPTION>1930</OPTION>
								<OPTION>1931</OPTION>
								<OPTION>1932</OPTION>
								<OPTION>1933</OPTION>
								<OPTION>1934</OPTION>
								<OPTION>1935</OPTION>
								<OPTION>1936</OPTION>
								<OPTION>1937</OPTION>
								<OPTION>1938</OPTION>
								<OPTION>1939</OPTION>
								<OPTION>1940</OPTION>
								<OPTION>1941</OPTION>
								<OPTION>1942</OPTION>
								<OPTION>1943</OPTION>
								<OPTION>1944</OPTION>
								<OPTION>1945</OPTION>
								<OPTION>1946</OPTION>
								<OPTION>1947</OPTION>
								<OPTION>1948</OPTION>
								<OPTION>1949</OPTION>
								<OPTION>1950</OPTION>
								<OPTION>1951</OPTION>
								<OPTION>1952</OPTION>
								<OPTION>1953</OPTION>
								<OPTION>1954</OPTION>
								<OPTION>1955</OPTION>
								<OPTION>1956</OPTION>
								<OPTION>1957</OPTION>
								<OPTION>1958</OPTION>
								<OPTION>1959</OPTION>
								<OPTION>1960</OPTION>
								<OPTION>1961</OPTION>
								<OPTION>1962</OPTION>
								<OPTION>1963</OPTION>
								<OPTION>1964</OPTION>
								<OPTION>1965</OPTION>
								<OPTION>1966</OPTION>
								<OPTION>1967</OPTION>
								<OPTION>1968</OPTION>
								<OPTION>1969</OPTION>
								<OPTION>1970</OPTION>
								<OPTION>1971</OPTION>
								<OPTION>1972</OPTION>
								<OPTION>1973</OPTION>
								<OPTION>1974</OPTION>
								<OPTION>1975</OPTION>
								<OPTION>1976</OPTION>
								<OPTION>1977</OPTION>
								<OPTION>1978</OPTION>
								<OPTION>1979</OPTION>
								<OPTION>1980</OPTION>
								<OPTION>1981</OPTION>
								<OPTION>1982</OPTION>
								<OPTION>1983</OPTION>
								<OPTION>1984</OPTION>
								<OPTION>1985</OPTION>
								<OPTION>1986</OPTION>
								<OPTION>1987</OPTION>
								<OPTION>1988</OPTION>
								<OPTION>1989</OPTION>
								<OPTION>1990</OPTION>
								<OPTION>1991</OPTION>
								<OPTION>1992</OPTION>
								<OPTION>1993</OPTION>
								<OPTION>1994</OPTION>
								<OPTION>1995</OPTION>
								<OPTION>1996</OPTION>
								<OPTION>1997</OPTION>
								<OPTION>1998</OPTION>
								<OPTION>1999</OPTION>
								<OPTION>2000</OPTION>
								<OPTION>2001</OPTION>
								<OPTION>2002</OPTION>
								<OPTION>2003</OPTION>
								<OPTION>2004</OPTION>
								<OPTION>2005</OPTION>
								<OPTION>2006</OPTION>
								<OPTION>2007</OPTION>
								<OPTION>2008</OPTION>
								<OPTION>2009</OPTION>
								<OPTION>2010</OPTION>
								<OPTION>2011</OPTION>
								<OPTION>2012</OPTION>
								<OPTION>2013</OPTION>
								<OPTION>2014</OPTION>
								<OPTION>2015</OPTION>
								<OPTION>2016</OPTION>
								<OPTION>2017</OPTION>
								<OPTION>2018</OPTION>
								<OPTION>2019</OPTION>
						</select>년&nbsp <select name="month" id="month">
								<OPTION>1</OPTION>
								<OPTION>2</OPTION>
								<OPTION>3</OPTION>
								<OPTION>4</OPTION>
								<OPTION>5</OPTION>
								<OPTION>6</OPTION>
								<OPTION>7</OPTION>
								<OPTION>8</OPTION>
								<OPTION>9</OPTION>
								<OPTION>10</OPTION>
								<OPTION>11</OPTION>
								<OPTION>12</OPTION>
						</select>월&nbsp <select name="day" id="day">
								<OPTION>1</OPTION>
								<OPTION>2</OPTION>
								<OPTION>3</OPTION>
								<OPTION>4</OPTION>
								<OPTION>5</OPTION>
								<OPTION>6</OPTION>
								<OPTION>7</OPTION>
								<OPTION>8</OPTION>
								<OPTION>9</OPTION>
								<OPTION>10</OPTION>
								<OPTION>11</OPTION>
								<OPTION>12</OPTION>
								<OPTION>13</OPTION>
								<OPTION>14</OPTION>
								<OPTION>15</OPTION>
								<OPTION>16</OPTION>
								<OPTION>17</OPTION>
								<OPTION>18</OPTION>
								<OPTION>19</OPTION>
								<OPTION>20</OPTION>
								<OPTION>21</OPTION>
								<OPTION>22</OPTION>
								<OPTION>23</OPTION>
								<OPTION>24</OPTION>
								<OPTION>25</OPTION>
								<OPTION>26</OPTION>
								<OPTION>27</OPTION>
								<OPTION>28</OPTION>
								<OPTION>29</OPTION>
								<OPTION>30</OPTION>
								<OPTION>31</OPTION>
						</select>일</td>
					</tr>
					<tr>
						<td>이메일</td>
						<td><input type="text" class="textinput" id="email"
							name="email" value="이메일을 입력해 주세요." onclick="this.value='';">
					</tr>
					<tr>
					<td><div style="padding:10px"></div></td>
					</tr>
					<tr>
						<td style="width:130px;"></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" class="btn2" id="signup"
							value="signup">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" class="btn2"
							name="btn2" value="reset"></td>
					</tr>
					<tr>
					<td><div style="padding:10px"></div></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>
