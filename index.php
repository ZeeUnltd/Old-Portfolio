<!DOCTYPE html>
<html>
<title>Zee's Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style media="screen">

body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}

@media only screen and (max-width: 768px) {#main {margin-left: 0}
.sec1 #tv-logo {
  width:42%; top:10rem; left: 20rem;
}
}

@media only screen and (max-width: 320px) {
  .sec1 #tv-logo {
    width:40%; top:20rem; left: 8rem;
  }
}

@media only screen and (max-width: 425px) {
  .sec1 #tv-logo {
    width:42%; top:20rem; left: 10rem;
  }
}

@media only screen and (max-width: 1024px) {
  .sec1 #tv-logo {
    width:42%; top:9rem; left: 26rem;
  }
}

@media only screen and (max-width: 500px) {

}
/* footer Image position*/

.footer-logo {
  width: 150px;
  height: auto;
}
.w3-theme-d3 {color:#fff !important; background-color:#b7180a !important}

/*#contact, footer{
padding-left: 50px;
}*/

header img.image, .image-nav{
  filter: grayscale(500%);
  width:50%; height:auto;
}

header img:hover,.image-nav:hover{
  filter: grayscale(0%);
}

.w3-jumbo{
  -webkit-animation-duration: 3s; /* Safari 4.0 - 8.0 */
  animation-duration: 3s;
}
.pclass, #tv-logo{
  -webkit-animation-duration: 3.5s; /* Safari 4.0 - 8.0 */
  animation-duration: 3.5s;
}
.sec1 img{width: 98%;}
.sec1 #tv-logo{
  width: 40%;
  position: absolute;
  top: 8rem;
  left: 24rem;
}

#caro{
  background-image: url(zeeUnltd-08-01.png);
  background-position: center;
  background-repeat: no-repeat;
  padding: 15px;
  background-size: contain;
}

.footer-logo{
  vertical-align: sub;
}

footer p{
  margin-bottom: -9px;
}

</style>
<body class="w3-white">

  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-yellow w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="./zee_img.JPG" class="image-nav w3-animate-zoom" style="width:100%" alt="Owner's Profile Photo">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>ABOUT</p>
    </a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>PHOTOS</p>
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->

  <!-- Nav for mobile device *small and Medium Sizes -->
  <div class="w3-yellow w3-bar-block">
    <div class="" id="mySidebar" style="display:none">
      <button class="w3-bar-item w3-button w3-xlarge w3-hide-large"
      onclick="w3_close()">Close &#9776;</button>
      <a href="#about" class="w3-bar-item w3-button w3-mobile w3-hover-border-black">ABOUT</a>
      <a href="#photos" class="w3-bar-item w3-button w3-mobile w3-hover-border-black">PORTFOLIO</a>
      <a href="#contact" class="w3-bar-item w3-button w3-mobile w3-hover-border-black">CONTACT</a>
      <img src="./zee_img.JPG" class="image-nav w3-animate-zoom " style='width:60%; padding:0px 50px 10px 50px;'; alt="Owner's Profile Photo">
    </div>

    <div class="w3-bar w3-hide-medium w3-hide-large" style="">
      <button class="w3-button w3-yellow w3-xlarge ham" onclick="w3_open()">&#9776;</button>
    </div>
  </div>
  <!--**End Nav for mobile device *small and Medium Sizes -->



  <!-- Page Content -->
  <div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-dark" id="home">
      <h3 class="w3-jumbo w3-animate-top" ><span class="w3-hide-small w3-text-black">I'm</span> Gafar Azeez.</h3>
      <p class="w3-animate-right pclass" id="data-st"> <span class="w3-hide-small">A</span> Web Developer.</p>
      <!-- <img src="./zee_img.JPG" class="image w3-circle w3-animate-right" alt="Owner's photo"> -->
    </header>


    <!--  Carousel -->
    <div class="w3-container" >
      <div class="w3-center sec1" >
        <!-- <img src="image-lg-1.png" alt="computer" id="caro" class="w3-animate-left">
        <img src="ZeeUnltd-logo.png" alt="company logo" id="tv-logo" class="w3-animate-zoom w3-padding w3-display-middle"> -->
        <ul>
          <li>
            <img src="image-lg-1.png" alt="computer" id="caro" class="w3-animate-left">
          </li>
          <!-- <li>
          <img src="zeeUnltd-08-01.png" alt="company logo" id="tv-logo" class="w3-animate-zoom  w3-padding">
        </li> -->
      </ul>
    </div>
    <div class="w3-container w3-black w3-center w3-xxxlarge sec2 w3-text-bold w3-text-yellow ">
      <p> Best of Web Designs </p> <h3>For your Brand Imagery</h3> <h2>Be Bold and Beautiful</h2>
      <!-- <img src="image-lg-1.png" alt="computer" > -->
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-black w3-padding-64" id="about">
    <h2 class="w3-text-black">Bio</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Gafar Azeez recently graduated from the Lagos State University with a Bachelor’s Degree in Computer Science. He is really passionate about programming and wants to be a Software Programmer, as He is always ready to learn. He has Designed websites like: Wrapcity.ng, Nesh.com.ng and hoping to improve on knowledge.
    </p>
    <h3 class="w3-padding-16 w3-text-black">Slack Username</h3>
    <p class="">@Zee</p>
    <br>



    <!-- Testimonials -->
    <a href="https://github.com/ZeeUnltd/php_test">

      <h3 class="w3-padding-24 w3-text-black">Click for Stage 1 Repository </h3>
    </a>

    <!-- End About Section -->
  </div>

  <!-- Portfolio Section -->

  <!-- </div> -->
  <!-- End Portfolio Section -->


  <!-- Contact Section -->
  <div class="w3-padding w3-content w3-text-grey w3-padding-64" id="contact">
    <h2 class="w3-text-black">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-black w3-xxlarge w3-margin-right"></i> Lagos, Nigeria</p>
      <p><i class="fa fa-phone fa-fw w3-text-black w3-xxlarge w3-margin-right"></i> Phone: 08030470290</p>
      <p><i class="fa fa-envelope fa-fw w3-text-black w3-xxlarge w3-margin-right"> </i> Email: azegaf@mail.com</p>
    </div><br><p>Lets get in touch. Send me a message:</p>



    <form action="index.php" method="post" >
      <?php
      include('db.php');
      $msg = '';
      $msgClass = '';

      if(array_key_exists('submit', $_POST)){

        $error = [];

        $data      =  array(
          "name"    => $_POST['name'],
          "message" => $_POST['message'],
          "email"   => $_POST['email']
        );

        $filters      =  array(
          "name"      => array(
            "filter"  => FILTER_CALLBACK,
            "options" => "ucfirst"
          ),
          "email" => FILTER_VALIDATE_EMAIL
          ,
          "message"       => array(
            "filter"      => FILTER_SANITIZE_SPECIAL_CHARS,
            "options"     => array(
              "min_range" => 1,
              "max_range" => 220
            )
          ));
          $input = filter_var_array($data, $filters);
          if(!empty($input['name']) && !empty($input['email']) && !empty($input['message'])){
            if(filter_var($input['email'], $filters['email']) === false){
              // Failed
              $msg = 'Please use a valid email';
              $msgClass = 'w3-theme-d3';
            }

            else {
              // Passed
              $name= $input['name'];
              $email= $input['email'];
              $message= $input['message'] .' : '. $_POST['subject'];


              $form = $conn->prepare("INSERT INTO clients (name, email, message, reg_time) VALUES (:na, :em, :me, NOW())" ) or die;
              $update = [ ':na'=> $name,
                          ':em'=> $email,
                          ':me'=> $message];
              //$form->bindParam($update);
              $form->execute($update);

              // Passed
      				$toEmail = 'azegaf@gmail.com';
      				$subject = 'Contact Request From '.$name;
      				$body = '<h2>Contact Request</h2>
      					<h4>Name</h4><p>'.$name.'</p>
      					<h4>Email</h4><p>'.$email.'</p>
      					<h4>Message</h4><p>'.$message.'</p>
      				';

      				// Email Headers
      				$headers = "MIME-Version: 1.0" ."\r\n";
      				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

      				// Additional Headers
      				$headers .= "From: " .$name. "<".$email.">". "\r\n";

      				if(mail($toEmail, $subject, $body, $headers)){
      					// Email Sent
      					// $msg = 'Your email has been sent';
      					// $msgClass = 'alert-success';

              $msg= "Successfully Submitted! Thank You  ".$name .'!';
              $msgClass = "w3-green";
              //echo $name .' '. $email. ' '. $message;
            }
          }

          }else {
            $msg = 'Please Complete the form with a valid email and try again<br><small> Your message is impotant to me</small>';
            $msgClass = 'w3-theme-d3';
          }
        }
        ?>
        <?php if($msg != ""):
          echo '<div class="w3-container '.$msgClass.' "> <h3><p>'.$msg.'</p></h3>
          </div>'; ?>
        <?php endif; ?>


        <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required="" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" name="subject" value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : ''; ?>"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" name="message" value="<?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?>"></p>
        <p>

          <button class="w3-button w3-yellow w3-hover-black w3-text-dark w3-padding-large" type="submit" name="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
      <!-- End Contact Section -->

    </div>

    <!-- Footer -->
    <footer class="w3-content w3-container w3-padding w3-text-grey w3-xlarge">

      <p class="w3-medium"><a href="https://www.twitter.com/zeeunltd"  class="w3-hover-text-yellow w3-text-black">©2017 ZeeUnltd <img class ="footer-logo w3-round"src="zeeUnltd.png" alt=" Zee Unlimited Company Logo"></p></a>

      <!-- To Make link show on a new window =====> target="_blank" -->
      <!-- End footer -->
    </footer>
  </div>
  <!-- END PAGE CONTENT -->

  <script>

  function w3_open() {
    document.getElementById("mySidebar").style.width = "100%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementsByClassName('ham')[0].style.display= "none";
  }
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementsByClassName('ham')[0].style.display= "block";
  }
</script>
</body>
</html>
