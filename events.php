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
                    <li class="active">Events: Holidays, Public Events</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
		
		<h2>Events this Year and Beyond</h2><br />

        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">National Holidays 2016</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
								<div style="width: 60%;">
									<div style="">
										<h3><div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Holiday</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Date</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Day</div></h3>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">New Year's Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">January 1</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Friday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Independence Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">March 6</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Sunday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Independence Day (observed)</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">March 7</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Monday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Good Friday</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">March 25</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Friday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Easter Monday</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">March 28</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Monday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">May Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">May 1</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Sunday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">May Day (observed)</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">May 2</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Monday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">African Umity Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">May 25</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Wednesday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Republic Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">July 1</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Friday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Eid ul-Fitr</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">July 6</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Wednesday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Eidul-Adha</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">September 11</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Sunday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Founder's Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">September 21</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Wednesday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Farmer's Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">December 2</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Friday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Christmas Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">December 25</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Sunday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Boxing Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">December 26</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Monday</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">National Holidays 2017</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                            <div style="width: 60%;">
									<div style="">
										<h3><div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Holiday</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Date</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Date</div></h3>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">New Year's Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">January 1</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Sunday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">New Year's Holiday</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">January 2</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Monday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Independence Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">March 6</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Monday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Good Friday</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">April 14</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Friday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Easter Monday</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">April 17</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Monday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">May Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">May 1</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Monday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">African Umity Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">May 25</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Thursday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Eid ul-Fitr</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">June 26</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Monday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Republic Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">July 3</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Monday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Eidul-Adha</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">September 1</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Friday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Founder's Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">September 21</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Thursday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Farmer's Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">December 1</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Friday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Christmas Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">December 25</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Monday</div>
									</div>
									<div style="">
										<div style="border: 1px solid #ccc; border-radius: 5px; width: 40%; float: left; padding: 10px">Boxing Day</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">December 26</div><div style="border: 1px solid #ccc; border-radius: 5px; width: 30%; float: left; padding: 10px">Tuesday</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
				</div>
			</div>
        </div>
        <!-- /.row -->
		<hr />

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
