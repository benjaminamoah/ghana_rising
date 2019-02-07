<?php
require("showcase_talents/includes/manage_db.php");

$manage_db = new manage_db();

if(isset($_POST['post'])){
	$detail = $_POST['detail'];
	$detail = addslashes($detail);
	if($detail == "Add a description of your video clip, picture or music"){
		$detail = "";
	}
	$date = time();
	
	if(isset($_FILES['file'])){
		$errors= array();
		$file_name = time().$vacancy_id.$_FILES['file']['name'];
		$file_size =$_FILES['file']['size'];
		$file_tmp =$_FILES['file']['tmp_name'];
		$file_type=$_FILES['file']['type'];
		if($file_size > 20097152){
			$errors[]='File size must be less than 2 MB';
		}
				
		$desired_dir="images/showcase_talents";
		if(empty($errors)==true){
			if(is_dir($desired_dir)==false){
				mkdir("$desired_dir", 0700);		// Create directory if it does not exist
			}

			if(is_dir($desired_dir."/".$file_name)==false){
				move_uploaded_file($file_tmp,"images/showcase_talents/".$file_name);
				$media = "images/showcase_talents/".$file_name;
			}
			$media = addslashes($media);
		}else{
			print_r($errors);
		}
		
		if(empty($error)){
			$delete_msg = "<div style='background-color: #ff4; width: 280px; margin: auto; text-align: center; padding:5px;'>Image(s) uploaded successfully!</div>";
		}
	}
		
	if($manage_db->return_query("INSERT INTO posts VALUES(null, '$detail', '$media', '$date')")){
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
	<!-- / input plugin -->
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

	
	<script type="text/javascript">
		function textVanish(){
			var x = document.getElementById("detail");
			if(x.value == "Add a description of your video clip, picture or music"){
					x.value = "";
			}
		}
	</script>
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
                    <li class="active">Showcase Products and Talents</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
		
		<h2>Products and Talents</h2>

        <!-- Projects Row -->
        <div class="row">
		
				<form action="showcase_talents.php" method="POST" enctype="multipart/form-data">
				<div class="form-group" style="background-color: #eee; width:700px; height: 100%; border-radius: 10px">
					<div class="form-group" style="padding: 10px; padding-bottom: 40px;">
						<h4 style="padding: 10px; margin-bottom:0px; margin-top: -10px;">Add pictures / videos / audios</h4>
						<!--<input name="file" id="file-3" type="file" name="files[]" multiple=true style="width: 80px">-->
						<input name="file" id="file-3" type="file" style="width: 80px">
						<input type="text" name="detail" id="detail" onClick="textVanish()" value="Add a description of your video clip, picture or music" style="width: 660px; margin:10px; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px" />
						<input type="image" value="Post" name="post" class="btn btn-info btn-lg" style="height: 35px; padding: 5px; padding-right: 10px; padding-left: 10px; margin-right: 30px; border: none; margin-top: 3px; float: right" />
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


			<div class="form-group" style="width:680px; height: 100%; margin-left: 0px; border-radius: 10px">
				<div class="form-group" style="padding: 10px; padding-bottom: 40px;">
				<?php
				$query = $manage_db->return_query("SELECT * FROM posts ORDER BY post_id DESC");
				while($row = mysql_fetch_array($query)){
					$post_id = $row['post_id'];
					$post = $row['post'];
					$detail = $_POST['detail'];
					$media = $row['media'];
					$date = $row['date'];
					$date = date("d M Y, h m", $date);
					echo "<center>
							<div style='width: 600px; padding: 10px; margin-bottom: 20px; border: 1px solid #ccc;'>";			
					if(substr($media, strlen($media)-3, 3) == "mp4" || substr($media, strlen($media)-3, 3) == "wav"){
						echo "<div style='background-color: #fafafa; width: 580px; border: 1px solid #ccc; overflow: hidden'>";
						echo "<video src='".$media."' controls='on' style='max-width: 750px; height: 400px; border: 1px solid #ccc'></video>";
						echo "</div>";
					}else if(substr($media, strlen($media)-3, 3) == "mp3"){
						echo "<div style='background-color: #fafafa; width: 580px; border: 1px solid #ccc; overflow: hidden'>";
						echo "<audio controls><source src='".$media."' type='audio/mpeg' style='height: 40px; border: 1px solid #ccc' /><source src='".$image_dir."' type='audio/ogg' style='height: 40px; border: 1px solid #ccc' /><source src='".$image_dir."' type='audio/wav' style='height: 40px; border: 1px solid #ccc' /></audio>";
						echo "</div>";
					}else if(substr($media, strlen($media)-3, 3) == "jpg" || substr($media, strlen($media)-3, 3) == "gif" || substr($media, strlen($media)-3, 3) == "png"|| substr($media, strlen($media)-4, 4) == "jpeg"){
						echo "<div style='background-color: #fafafa; width: 580px; border: 1px solid #ccc; overflow: hidden'>";
						echo "<img src='".$media."' style='max-width: 600px; height: 360px; border: 1px solid #ccc' />";
						echo "</div>";
					}else{}
					echo "</div><h5 style='text-align: left; color: #000'>".$detail."</h5>";
					
					/*echo '<div style="text-align: left; margin-top: 15px">'.$conversation.'</div>';
					
					echo '<div id="replies_'.$conversation_id.'" style="text-align: left; margin-top: 15px">';
					
					$query_replies = $manage_db->return_query("SELECT * FROM replies WHERE conversation_id='$conversation_id' ORDER BY reply_id ASC");
					while($row = mysql_fetch_array($query_replies)){
						$name_of = $row['name']; 
						$reply = $row['reply'];
						$replies = "<b>".$name_of." </b>".$reply."<br />";
						echo $replies;
					}
									
					echo '</div>';
						
					echo '<textarea name="reply_text" id="reply_'.$conversation_id.'" onClick="textVanish(\'reply_'.$conversation_id.'\')" style="width: 500px; height: 32px; margin:10px; margin-left: 0px; padding: 5px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; scroll: none">Post your comments...</textarea>
						<input type="hidden" id="name" value="'.$name.'" />
						<input type="submit" value="reply" onClick="postReply('.$conversation_id.')" name="reply" style="background-color: #0af; color: #fff; border: none;position: relative; height: 32px; top: -10px; left: -5px" />
						<!--<div id="ld_'.$upload_id.'"><a onClick="like('.$upload_id.','.$current_user_id.')" style="margin-right: 20px; float: left; cursor: pointer">Like '.$likes.'</a><a onClick="dislike('.$upload_id.','.$current_user_id.')" style="float: left; cursor: pointer">Dislike '.$dislikes.'</a></div>-->						
						</div>*/
					echo '</center>';
				}
				?>				
				</div>
			</div>
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
