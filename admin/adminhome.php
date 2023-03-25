<?php
  session_start();
  if(!$_SESSION["isAdmin"]){
    header('Location: ../adminhome.php');
  }

?>

</body>
</html>
<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="./adminhome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>EASY</span> ENGLISH</p>
  <a href="adminhome.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="../showcontact.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Contact User</a>
  <a href="../addCourses.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Add Courses</a>
  <a href="addquiz.php"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Add Quiz</a>
</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<p>ADMIN <span></span></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	
	<div class="col-div-3">
		<div class="box">
			<a href="../showcontact.php">
			<p><br/><span>Contact Users</span></p>
			<i class="fa fa-users box-icon"></i>
			</a>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
    <a href="../addCourses.php">
			<p><br/><span>Add Courses</span></p>
			<i class="fa fa-list box-icon"></i>
			</a>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
		<a href="./addquiz.php">
			<p><br/><span>Add Quiz</span></p>
			<i class="fa fa-tasks box-icon"></i>
			</a>
		</div>
	</div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>

</body>


</html>
