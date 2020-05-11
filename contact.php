<!DOCTYPE html>
<html lang="en">
   <?php 
      require 'connection.php'; 
      require_once "template/head.php"; 
   ?>
	<body>
     
         <!-- the menu starts here -->
        <?php  require_once "template/menu.php"; ?>
         <!-- the banner start here -->
      <div class="container-fluid">
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
            <div class="col-md-4 col-sm-12 contactProfile">
               <img src="images/user.png">
               <p><strong>Front End Developer<br> Graphics Designer</strong></p>
               <a href="CV.pdf" id="resume">Resume</a>
            </div>
            <aside class="col-md-4 col-sm-12">
               <div class="checkMe">
                  <h5>You can contact me on the following social media</h5>
                  <a href="https://www.facebook.com/oderinlo.ezekiel" target="_blank"><img src="images/facebook.png" title="Facebook"></a>
                  <a href="https://twitter.com/AnuOderinlo" target="_blank"><img src="images/twitter.png" title="Twitter"></a>
                  <a href="https://www.linkedin.com/in/anuoluwapo-ezekiel-oderinlo-731b2465/" target="_blank" title="Linkedin"><img src="images/linkedin.png"></a>
               </div class="checkMe">
               <div class="checkMe">
                  <h5>Feel free to check out my work</h5>
                  <a href="https://github.com/AnuOderinlo" target="_blank"><img src="images/github.png" target="_blank" title="Github"></a>
               </div>
               <div class="checkMe">
                  <h5>If you don't mind, you could send me an email</h5>
                  <a href="mailto:oderinloanuoluwapo@gmail.com" target="_blank"><img src="images/email.png" title="Email"></a>
               </div>
            </aside>
            <div class="col-md-4 col-sm-12">
               <div class="checkMe" id="hireMe">
                  <h3>Hire me!</h3>
                  <p>Do you need a design? Probably you need someone to manage your website or blog. Please request for a quote by filling the form below</p>
               </div>
               <div>
                  <form class="form" method="post" action="contact.php">
                     <?php 
                     if (isset($_POST['submit'])) {
                        $success = ($name && $email && $phoneNumber) ? "<p style='color: green; font-size: 20px'>Request successfully submitted</p>" : "<p style='color: red; font-size: 20px'>All fields are required</p>";
                        echo $success;
                     }
                        
                     ?>
                     <div class="form-group">                      
                        <label for="name">Name: <i style="color: red">*</i></label>
                        <input type="text" value="<?php echo $name ?>" name="name" class="form-control" id="name">
                        <span id="errorName"></span>

                     </div>
                     <div class="form-group">
                        <label for="email">Email: <i style="color: red">*</i></label>
                        <input type="email" name="email" value="<?php echo $email ?>" class="form-control" id="email">
                        <span id="errorEmail"></span>
                     </div>
                     <div class="form-group">
                        <label for="phone">Phone Number: <i style="color: red">*</i></label>
                        <input type="text" name="phoneNumber" value="<?php echo $phoneNumber ?>" class="form-control" id="phone">
                        <span id="errorPhone"></span>
                     </div>
                     <div class="form-group">
                        <label for="phone">What type of work do you need:</label>
                        <select name="workToDo" class="form-control" id="sel1">
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
                     <input type="submit" value="submit" name="submit" class="btn btn-primary" id="submit">
                  </form>
               </div>
            </div>
         </div>
            


      </div>
      
     <?php 
      require_once'template/footer.php'; 
      ?>  
	</body>
</html>