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
                    <li class="active">Entrepreneurship Resource</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
		
		<h2>Entrepreneurship Resource</h2>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Tips on becoming a successful entrepreneur</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
1. Find a role model: You become those who you surround yourself with. This is why it's important to 
have a role model in the area of business you are aiming for. If you can't find any, find those who 
are doing things closest to your area of interest. Starting a business require a lot of 
motivation and emthusiasm. This is why you need to see and read success from your role models. 
Read their books. Go onto YouTube, search for videos about them.<br /><br />

2. Become good at what you want to do: You need to produce something valuable for people. This is 
what people are willing to pay money for. If you want to build a huge business start today and 
not necessarily in the exact area you are interested in. To own run a restaurant one day, start 
now. Try selling homemade nicely packaged fruit juice to your friends and build from there. You will 
learn so many important lessons that will move you towards your goal of becoming a successful 
entrepreneur.<br /><br />

3. You have to be persistent: There will be a lot of challenges along the way but keep going. 
This sounds hard, but it's even harder in practice. But if you really want it, you will make it. 
Keep working on your business. And it helps if you love it. Maintain your passion so you will want 
to work on building your business every chance you get.<br /><br />

4. Take every part of your business seriously: Businesses aren't just about making a product. It 
alse invloves marketing and financial (or cash flow) management. Entrepreneurs are often very 
independent people. It is tempting at times to work extremely 
hard on producing a really good product or service but theses other components are extremely important if 
your business will be successful. Just as it takes skill, talent and  deication to produce 
your product, it also takes skill, talent and dedication to market it or manage the finances. 
It is often adviceable to partner with someone or people who are good in theses areas. Otherwise you 
need to work very hard to gain the experience you lack in theses areas.<br /><br />

So now that you've learn't some important tips on how to start your business, go forth and 
succeed.     
							</div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How to write a Business Plan?</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                Stay tuned!
							</div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Getting your business registration</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Stay tuned!
							</div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">How to write a Service Contract?</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                Stay tuned!
							</div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
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
