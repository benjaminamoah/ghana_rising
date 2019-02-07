<?php
require("discuss/includes/manage_db.php");

$manage_db = new manage_db();

if(isset($_POST['post'])){
	$applicant_name = $_POST['applicant_name'];
	$vacancy_id = $_POST['vacancy_id'];
	$date = time();
	
	if(isset($_FILES['cv'])){
		$errors= array();
		$file_name = time().$vacancy_id.$_FILES['cv']['name'];
		$file_size =$_FILES['cv']['size'];
		$file_tmp =$_FILES['cv']['tmp_name'];
		$file_type=$_FILES['cv']['type'];
		if($file_size > 20097152){
			$errors[]='File size must be less than 2 MB';
		}
				
		$desired_dir="cvs";
		if(empty($errors)==true){
			if(is_dir($desired_dir)==false){
				mkdir("$desired_dir", 0700);		// Create directory if it does not exist
			}

			if(is_dir($desired_dir."/".$file_name)==false){
				move_uploaded_file($file_tmp,"cvs/".$file_name);
				$cv_dir = "cvs/".$file_name;
			}
			$cv_dir = addslashes($cv_dir);
		}else{
			print_r($errors);
		}
		
		if(empty($error)){
			$delete_msg = "<div style='background-color: #ff4; width: 280px; margin: auto; text-align: center; padding:5px;'>Image(s) uploaded successfully!</div>";
		}
	}
		
	if($manage_db->return_query("INSERT INTO applications VALUES(null, '$applicant_name', '$vacancy_id', '$cv_dir', '$date')")){
		$cv_posted = $cv_posted."<div style='background-color: #0af; border: 4px solid #09f; border-radius: 5px; margin-left: 60px; margin: 5px; font-weight: bold; width: 350px; height: 45px; padding: 10px; color: #fff; text-align: center'>Application submitted successfully!</div>";
	}
}
?>

<?php
require("includes/manage_db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Young Resource - Helping you with Info</title>

    <!-- Bootstrap Core CSS -->
	<link href="input_plugin/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
	<script src="input_plugin/js/jquery-1.12.4.min.js"></script>
	<script src="input_plugin/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
	<script src="input_plugin/js/plugins/sortable.min.js" type="text/javascript"></script>
	<script src="input_plugin/js/plugins/purify.min.js" type="text/javascript"></script>
	<script src="input_plugin/js/fileinput.min.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="input_plugin/themes/fa/fa.js"></script>
	<script src="input_plugin/js/locales/<lang>.js"></script>
    <!-- Bootstrap Core CSS -->
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Ghana Rising</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="the_site.php">The Site</a>
                    </li>
                    <li>
                        <a href="donate.php">Donate</a>
                    </li>
                    <li>
                        <a href="feedback.php">Feedback</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><img src="images/logo.png" style="margin-top:-30px" />
                    <small>Best Resource for Young Ghanaians</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Conversations</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<h2>Conversations</h2>
		
        <!-- Projects Row -->
        <div class="row" style="width: 1200px">

		<form action="home.php" method="POST" enctype="multipart/form-data">
			<div class="form-group" style="background-color: #eee; width:500px; height: 100%; border-radius: 10px; float: left">
				<div class="form-group" style="padding: 10px; padding-bottom: 40px;">
					<input type="text" name="comment" value="Give your two cents ..." style="width: 460px; margin:10px; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px" />
					<h4 style="padding: 10px; margin-bottom:0px; margin-top: -10px;">Add pictures / videos / audios</h4>
					<input id="file-3" type="file" name="files[]" multiple=true style="width: 80px">
					<hr />
					<input type="image" value="Post" name="post" class="btn btn-info btn-lg" style="height: 35px; padding: 5px; padding-right: 10px; padding-left: 10px; margin-right: 30px; border: none; margin-top: 3px; float: right" />
				</div>
			</div>
			<div class="form-group" style="width:600px; height: 100%; margin-left: 20px; border: 1px solid #ccc; border-radius: 10px; float: left">
				<div class="form-group" style="padding: 10px; padding-bottom: 40px;">
				
				</div>
			</div>
			<script type="text/javascript">
			$("#file-3").fileinput({
				showUpload: false,
				showCaption: false,
				browseClass: "btn btn-primary",
				fileType: "any",
				previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
			});
			</script>
			</form>
		</div>
        <!-- /.row -->

        <!-- Footer -->
       <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy;<?php echo date(Y); ?> Ghana Rising</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
