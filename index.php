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
			<h3 style="margin: 10px"><small>All you need to navigate life as a young person in Ghana; 
			Online school, after school guide on National Service and CV writing, 
			job search engine, relationship advice, services and rentals for weddings, 
			upcoming events, new skills and self-improvement, showcasing talents and much more.
			Don't feel lost. Ghana Rising's got you!</small></h3><br />
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item" id="portal">
                <a href="studyitem/index.php">
                    <img class="img-responsive" src="images/1.png" alt="">
					<center><h4 style="color: #000">Online School: JHS and SHS Subjects</h4></center>
                </a>
            </div>
            <div class="col-md-3 portfolio-item" id="portal">
                <a href="after_school.php">
                    <img class="img-responsive" src="images/2.png" alt="">
					<center><h4 style="color: #000">Preparing for after School: Writing your CV / Internships / Applying for further studies / And more</h4></center>
                </a>
            </div>
            <div class="col-md-3 portfolio-item" id="portal">
                <a href="entrepreneurship.php">
                    <img class="img-responsive" src="images/3.png" alt="">
					<center><h4 style="color: #000">Entrepreneurship Resource: Business Plan, contract / Business registration in Ghana</h4></center>
                </a>
            </div>
            <div class="col-md-3 portfolio-item" id="portal">
                <a href="job_search/index.php">
                    <img class="img-responsive" src="images/4.png" alt="">
					<center><h4 style="color: #000">Job Search Engine: Post Jobs / Upload your CV to an employer</h4></center>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item" id="portal">
                <a href="events.php">
                    <img class="img-responsive" src="images/5.png" alt="">
					<center><h4 style="color: #000">Events: Know what's up all year!</h4></center>
                </a>
            </div>
            <div class="col-md-3 portfolio-item" id="portal">
                <a href="discuss/index.php">
                    <img class="img-responsive" src="images/6.png" alt="">
					<center><h4 style="color: #000">Join the Talk about Important Issues</h4></center>
                </a>
            </div>
            <div class="col-md-3 portfolio-item" id="portal">
                <a href="new_skills.php">
                    <img class="img-responsive" src="images/7.png" alt="">
					<center><h4 style="color: #000">Learn a New Skills: New languages / Website development / And more...</h4></center>
                </a>
            </div>
            <div class="col-md-3 portfolio-item" id="portal">
                <a href="relationships.php">
                    <img class="img-responsive" src="images/8.png" alt="">
					<center><h4 style="color: #000">Relationship Tips / Rentals for weddings</h4></center>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item" id="portal">
                <a href="showcase_talents.php">
                    <img class="img-responsive" src="images/9.png" alt="">
					<center><h4 style="color: #000">Stage Your Products and Talent: Music / Clothes / Art / And more...</h4></center>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

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
