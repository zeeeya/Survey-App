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

<style>
  .test {
  animation: MoveUpDown 1s linear infinite;
  position: absolute;
  left: 0;
  bottom: 0;
}

@keyframes MoveUpDown {
  0% {
    bottom: 0;
  }
  50% {
    bottom: 100px;
  }
  100% {
    bottom: 0;
  }
}
</style>
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <a href="survey.php" ><img class="img-fluid" src="img/survey.png" title="click the icon to begin survey" alt=""></a>
        <div class="intro-text">
          <!--<span class="name">&#8679;</span>-->
          <span class="name">Start Survey</span>
          <hr class="star-light">
          <span class="skills">SurveyApp.com</span>
        </div>
      </div>
    </header>

    

    <!-- Contact Section
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Contact Me</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
             To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. 
             The form should work on most web servers, but if the form is not working you may need to configure your web server differently. \
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> -->

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
