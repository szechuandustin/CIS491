<!DOCTYPE HTML>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Homepage</title>
    </head>
    
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="#">Nothing Comes to Mind</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="profile.php">Profile Home Page</a></li>
                              <li><a href="settings.php">Settings</a></li>
                              <li><a href="delete.php">Delete</a></li>
                            </ul>
                        </li>
                        <li><a href="datatable.php">Data Table</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="container"> Hello World</h1>
        <footer>
            <nav class="navbar navbar-default navbar-fixed-bottom">
                <ul class="nav navbar-nav">
                    
                </ul>
                <p class="navbar-text">CIS 491: Secure Web Applications</p>
            </nav>
        </footer>
    </body>
</html>