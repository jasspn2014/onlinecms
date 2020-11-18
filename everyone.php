<?php
	session_start();
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
?>

<!DOCTYPE html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Welcome to College Management system</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery-1.11.0.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>

<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

<link href = "css/menubar_style.css" rel = "stylesheet" type = text/css>
</head>

<body>

    <div class="logout_btn">
        <a href="index.php" class="btn btn-primary btn-large">Logout <i class="icon-white icon-check"></i></a>
    </div>

    

    <div class="dropdownmenu_container">
          <?php
          include './drop_down_menu.php';
          ?>
    </div>

	
		

			<div class="container_show_post">
				<?php
   						if($tag=="home" or $tag=="")
							  include("home.php");
              elseif($tag=="student_entry")
                  include("forms_entry/Students_Entry.php");
              elseif($tag=="teachers_entry")
                  include("forms_entry/Teachers_Entry.php");
              elseif($tag=="score_entry")
                  include("forms_entry/Score_Entry.php");
              elseif($tag=="subject_entry")
                  include("forms_entry/Subject_Entry.php");
              elseif($tag=="faculties_entry")
                  include("forms_entry/Faculties_Entry.php");
              elseif($tag=="susers_entry")
                  include("forms_entry/Users_Entry.php");
              elseif($tag=="view_students")
                  include("view_forms/View_Students.php");
              elseif($tag=="view_teachers")
                include("view_forms/View_Teachers.php");
              elseif($tag=="view_subjects")
                include("view_forms/View_Subjects.php");
              elseif($tag=="view_scores")
                include("view_forms/View_Scores.php");
              elseif($tag=="view_users")
                include("view_forms/View_Users.php");
              elseif($tag=="view_faculties")
                include("view_forms/View_Faculties.php");
              elseif($tag=="test_score")
                include("view_forms/test_Scores.php");
          ?>
        </div>



</body>
</html>
