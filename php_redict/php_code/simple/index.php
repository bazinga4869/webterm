<?php
header("Content-Type: text/html;charset=gb2312");

echo <<<HTML
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<form class="form-horizontal" role="form" action="check.php" method="post">
 		<div class="form-group">
		    <label for="account" class="col-sm-2 control-label">ÕËºÅ</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="account" name="account" placeholder="ÇëÊäÈëÕËºÅ">
		    </div>
		</div>
		<div class="form-group">
		    <label for="password" class="col-sm-2 control-label">ÃÜÂë</label>
		    <div class="col-sm-8">
		      <input type="password" class="form-control" id="password" name="password" placeholder="ÇëÊäÈëÃÜÂë">
		    </div>
		  </div>
		<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-8">
		      <button type="submit" class="btn btn-default">µÇÂ¼</button>
		    </div>
		</div>
	</form>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
HTML;

