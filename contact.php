<!DOCTYPE html>
<html lang="en">
	<head>
	   <meta charset="utf-8">
	   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	   <title>Contact</title>

	   <!-- Bootstrap -->
	   <link href="css/bootstrap.min.css" rel="stylesheet">
	   <link href="css/style.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">

	   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	   <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	   <![endif]-->
      <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
	</head>
	<body>
      <div class="container-fluid">
         <!-- the menu starts here -->
         <div class="row bg-info">
            <div class="navbar-header">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="col" id="menu">
               <ul class="nav justify-content-center">
                  <li class="nav-item"><a href="index.php" class="nav-link disabled">MEET ME</a></li>
                  <li class="nav-item"><a href="contact.php" class="nav-link disabled">CONTACT</a></li>
                  <li class="nav-item"><a href="blog.php" class="nav-link disabled">BLOG</a></li>
               </ul>
            </div>
         </div>
         <!-- the banner start here -->
         <div class="row">
            <div class="col" id="anuHead">
               <h2>Hi! I'm</h2>
               <h1 id="myName"></h1>
            </div>
         </div>
         <!-- the content starts here -->
         <div class="row">
            <div class="col-md-12">
               <h1 id="contactMe">Contact Me</h1>
            </div>
         </div>
         <div class="row">
            <div class="col contactProfile">
               <img src="images/user.png">
               <p><strong>Front End Developer<br> Graphics Designer</strong></p>
               <a href="CV.pdf" id="resume">Resume</a>
            </div>
            <aside class="col">
               <div class="checkMe">
                  <h5>You can contact me on the following social media</h5>
                  <a href="https://www.facebook.com/oderinlo.ezekiel" target="_blank"><img src="images/facebook.png" title="Facebook"></a>
                  <a href="https://twitter.com/AnuOderinlo" target="_blank"><img src="images/twitter.png" title="Twitter"></a>
                  <a href="https://www.linkedin.com/in/anuoluwapo-ezekiel-oderinlo-731b2465/" target="_blank" title="Linkedin"><img src="images/linkedin.png"></a>
               </div class="checkMe">
               <div class="checkMe">
                  <h5>Feel free to check out my work</h5>
                  <a href="https://github.com/SincerityDesign" target="_blank"><img src="images/github.png" target="_blank" title="Github"></a>
               </div>
               <div class="checkMe">
                  <h5>If you don't mind, you could send me an email</h5>
                  <a href="mailto:oderinloanuoluwapo@gmail.com" target="_blank"><img src="images/email.png" title="Email"></a>
               </div>
            </aside>
            <div class="col">
               <div class="checkMe" id="hireMe">
                  <h3>Hire me!</h3>
                  <p>Do you need a design? Probably you need someone to manage your website or blog. Please request for a quote by filling the form below</p>
               </div>
               <div>
                  <form class="form" action="#">
                     <div class="form-group">
                        <label for="name">Name: <i style="color: red">*</i></label>
                        <input type="text" class="form-control" id="name">
                        <span id="errorName"></span>
                     </div>
                     <div class="form-group">
                        <label for="email">Email: <i style="color: red">*</i></label>
                        <input type="email" class="form-control" id="email">
                        <span id="errorEmail"></span>
                     </div>
                     <div class="form-group">
                        <label for="phone">Phone Number: <i style="color: red">*</i></label>
                        <input type="text" class="form-control" id="phone">
                        <span id="errorPhone"></span>
                     </div>
                     <div class="form-group">
                        <label for="phone">What type of work do you need:</label>
                        <select class="form-control" id="sel1">
                           <option>Gaphics design</option>
                           <option>Web design</option>
                           <option>Website Maintenance/Management</option>
                           <option>Others</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="text">Description or details!</label>
                        <textarea type="text" class="form-control" id="text"></textarea>
                     </div>
                     <!-- <div class="form-group">
                        <div class="g-recaptcha form-control" data-sitekey="6LePvmkUAAAAAPPsUfZXPrD-FMWDgAZ-U-O0IRYG"></div>
                     </div> -->
                     <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                  </form>
               </div>
            </div>
         </div>
            


      </div>
      
      <!-- footer starts here -->
      <footer class="container-fluid">
         <div class="row bg-info">
            <div class="col-md-12  footer">
               <a href="mailto:oderinloanuoluwapo@gmail.com"s><img src="images/email.png"></a>
               <a href="https://github.com/SincerityDesign" target="_blank"><img src="images/github.png" target="_blank"></a>
               <a href="https://www.facebook.com/oderinlo.ezekiel" target="_blank"><img src="images/facebook.png"></a>
               <a href="https://twitter.com/AnuOderinlo" target="_blank"><img src="images/twitter.png"></a>
               <a href="https://www.linkedin.com/in/anuoluwapo-ezekiel-oderinlo-731b2465/" target="_blank"><img src="images/linkedin.png"></a>
               <p>&copy;Your name, 2018</p>
            </div>
         </div>
      </footer>
      
      <script type="text/javascript" src="js/script.js"></script>

	   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
	</body>
</html>