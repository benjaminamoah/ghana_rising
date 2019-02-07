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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
	#portal{
		background-color: #eeeeee;
		border: 1px solid #ccc; 
		height: 250px; 
		padding: 5px;
	}
	
	.row{
		
	}
	</style>
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
            </div>
			<h3>Donate: It's Easy</h3><br />
			<h3 style="margin: 10px; margin-bottom: 0px"><small>If you think this is a great and important project and you want it to continue, 
			please send a donation as soon as you can. No amount is too small. You can send your donations through MTN Mobile Money. 
			Simply go to any MTN Mobile Money agent and ask them to send your money to the number <b>0540466704</b>. Please call this same number to verify that 
			your money has been sent.</small></h3><br />
			<h3 style="margin: 10px; margin-top: 0px"><small>If you are a business or organization and you would like to sponsor this project, please call Benjamin Amoah 
			on <b>0540466704</b>. This is one of the ways you can take real action to give this country a brighter future by empowering
			its young people with all the information they will need to navigate life and to be productive citizens of Ghana.</small></h3><br />
        </div>
        <!-- /.row -->

        <hr>

        <!-- Page Heading -->
        <div class="row">
			<center><img src="images/donate_banner.png" /></center>
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
