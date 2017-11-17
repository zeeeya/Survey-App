<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Survey-App</title>
    <link rel="icon" type="image/png" href="img/survey.png">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="nav-link js-scroll-trigger" style="color: white" href="#">Hi! Guest</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signup.php">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   <!-- Header -->
    <header class="masthead">
       <!-- Contact Section -->
      <h2 class="text-center">Survey</h2>
        <hr class="star-primary"> 
        
        <div class="container" style="width: 5in">
          <form action="index.php" method="post">
            <h5>Thank you for visiting Survey-App.</h5>
            <p style="font-size: 15px">To help us maintain a high quality of service, please provide us with feedback by filling in the information below.</p>
            <hr style="height: 1px">
                <div style="text-align: justify;">
                <span>Where did you learn about our website?</span>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp;Friend</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp;Search engine results</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp;Email advertisement</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp;Web advertisement</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp;Paper advertisement</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp; Others <input type="text" name="text" class=" input-sm"></label>
                </div>
                </div>
                <hr style="height: 1px">
                <div style="text-align: justify;">
                <span>About how often do you visit our website?</span>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp;More tha once a day</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp;Once a day</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp;Several times a week</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp;Once a week</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp;Several times a month</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp; Once a month</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="optradio">&nbsp;&nbsp; This is my first visit</label>
                </div>
                </div>
                <hr style="height: 1px">
                <div class="form-group">
                  <span>Were there any features or functionalities that you felt were missing or should be added?</span>
                  <textarea type="text" name="text" id="text" class="form-control input-sm"> </textarea>
                </div>
                <hr style="height: 1px">
                <div style="text-align: justify;">
                <span>Overall, how satisfied were you with your visit?</span>
                <div>
                <label class="radio-inline">
                <input type="radio" name="optradio">&nbsp;Very Satisfied&nbsp;
                <input type="radio" name="optradio">&nbsp;Satisfied&nbsp;
                <input type="radio" name="optradio">&nbsp;Dissatisfied&nbsp;
                <input type="radio" name="optradio">&nbsp;Very Dissatisfied&nbsp;
                </label>
                </div>
                </div>
                <hr style="height: 1px">
                <div style="text-align: justify;">
                <span>How likely are you visit us again?</span>
                <div>
                <label class="radio-inline">
                <input type="radio" name="optradio">&nbsp;Very Likely&nbsp;
                <input type="radio" name="optradio">&nbsp;Likely&nbsp;
                <input type="radio" name="optradio">&nbsp;Unlikely&nbsp;
                <input type="radio" name="optradio">&nbsp;Very Unlikely
                </label>
                </div>
                </div>
                <hr style="height: 1px">
                <div class="form-group">
                  <span>Comments or Suggestions</span>
                  <textarea type="text" name="text" id="text" class="form-control input-sm"> </textarea>
                </div>
                
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton" style="cursor: pointer;">OK</button>
              
              </form>
        </div>
      </header>
    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Your Website 2017
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>

</html>
