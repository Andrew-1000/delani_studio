<?php
session_start();
$statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
unset($_SESSION['msg']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Signika+Negative" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <title>Delani</title>
</head>

<body>
    
  <div class="headerMain">
    <div class="container">
      <div class="jumbotron" style="background-image: url(img/h_img.jpg)" class="img-fluid">
        <div class="row1">
          <img id="headerImg1" src="img/logo.png" alt="Delani_logo">
          <h1>WELCOME</h1>
          <p class="paragraph1">TO DELANI STUDIO</p>
          <p class="para">AMAZING PEOPLE ARE MAKING AMAZING DESIGNS IN A FUN ENVIRONMENT</p>
          <img id="headerImg2" src="img/mouse_click.png" alt="Mouse_click">
        </div>
      </div>
    </div>
  </div>
  <div class="aboutUs">
    <div class="container">
      <div class="row">
        <h1 class="h1whitebg">ABOUT US</h1>
        <p class="paragraph2">When you work with us you are part of a team of committed collaboratos. All aspects of our software development process are intergrated, iknteractive <br>and agile</p>
        <p class="paragraph2">Our approach unifies design, development and product management to create exceptional products.</p>
        <p class="paragraph2">We start each project by understanding your business goals, the user's needs and the product requiremnets </p>
        <p class="paragraph2">Then we help translate them into effective and elegant solutions.</p>
      </div>
    </div>
  </div>
  <div class="services">
    <div class="container">
      <div class="row3" style="background-image: url( img/s_img.jpg)">
        <h1>SERVICES</h1>
        <p class=" para">Before we sign a contract or write a line of code our team will spend the necessary time needed to understand your product vision</p>
        <p class="para">The outcome of this scoping session is a proposal or high-level statement of work</p>
        <p class="para">based on your requirments, we can provide a complete offering or just the pieces you need.</p>
      </div>
    </div>
  </div>
  <div class="whatWeDo">
    <h1 class="h1whitebg">WHAT WE DO</h1>
    <div class="container">
      <div class="row4">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p id="Design"> <img id="designLgo" src="img/design_icon.png" class="img-fluid" alt="Dev_logo">DESIGN</p>
          <div class="toggleDesignLogo">
            <h1 class="h1whitebg">Design</h1>
            <p>Our design practice offers a full range of services including brand strategy, interaction and visual design and user experience testing. Throughout your project, our designers create and implement visual design and workflows, solicit
              user feedback and work with you to make sure what gets built is what is needed.</p>
          </div>
        </div>
        <br>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p id="Develop"><img id="devLogo" src="img/dev_icon.png" class="img-fluid" alt="Dev_logo">DEVELOPMENT</p>
          <div class="toggleDevLogo">
            <h1 class="h1whitebg">Development</h1>
            <p>Our design practice offers a full range of services including brand strategy, interaction and visual design and user experience testing. Throughout your project, our designers create and implement visual design and workflows, solicit
              user feedback and work with you to make sure what gets built is what is needed.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p id="Product"><img id="productLogo" src="img/product_icon.png" class="img-fluid " alt="Product_logo">PRODUCT MANAGEMENT</p>
          <div class="toggleProductLogo">
            <h1 class="h1whitebg">Product Management</h1>
            <p>Planning and development is iterative. Because we are constantly coding and testing, the products we build are always ready to go live. This iterative process allows for changes as business requirements evolve.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="portfolio">
    <h1 class="h1whitebg">PORTFOLIO</h1>
    <div class="container">
      <div class="row5">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="hvrbox">
              <img src="img/work1.jpg" class="hvrbox-layer_bottom">
              <div class="hvrbox-layer_top hvrbox-layer_scale">
                <div class="hvrbox-text">Website to connect programmers</div>
              </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="hvrbox">
            <img src="img/work2.jpg" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top hvrbox-layer_scale">
                <div class="hvrbox-text"> Website for animations</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="hvrbox">
              <img src="img/work3.jpg" class="hvrbox-layer_bottom">
              <div class="hvrbox-layer_top hvrbox-layer_scale">
                  <div class="hvrbox-text"> Security guard company</div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="hvrbox">
                <img src="img/work4.jpg" class="hvrbox-layer_bottom">
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text"> Stalled project</div>
                </div>
              </div>
            </div>
      </div>
      <div class="row5">
          <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="hvrbox">
                <img src="img/work5.jpg" class="hvrbox-layer_bottom">
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text"> Social Networking Website</div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="hvrbox">
                  <img src="img/work6.jpg" class="hvrbox-layer_bottom">
                  <div class="hvrbox-layer_top hvrbox-layer_scale">
                      <div class="hvrbox-text"> Media Production website</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12">
                  <div class="hvrbox">
                    <img src="img/work7.jpg" class="hvrbox-layer_bottom">
                    <div class="hvrbox-layer_top hvrbox-layer_scale">
                        <div class="hvrbox-text"> Site for carpenters on there products</div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="hvrbox">
                      <img src="img/work8.jpg" class="hvrbox-layer_bottom">
                      <div class="hvrbox-layer_top hvrbox-layer_scale">
                          <div class="hvrbox-text"> Restaurant website</div>
                      </div>
                    </div>
              </div>
      </div>
    </div>
  </div>
  <div class="contactUs">
    <div class="container">
      <div class="row7" style="background-image: url(img/c_img.jpg)">
        <h1>CONTACT US</h1>
        <?php echo $statusMsg;?>
        <form method="POST" action="function.php" id="mailchimp">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name = "name" class="form-control" id="nameInput" placeholder="Name..." Required>
            </div>
            <div class="form-group col-md-6">
              <input type="email" name = "email" class="form-control" id="exampleFormControlInput1" placeholder="Email..." Required>
            </div>
            <div class="form-group">
              <textarea class="form-control form-control-lg" id="messageInput" name="message" rows="5" cols="100" placeholder="Your message here..." Required></textarea>
            </div>
          </div>
          <div class="form-group">
            <input type="button" value="Submit" name="submit" class="btn-primary">
          </div>
          
        </form>
       
      </div>
    </div>
  </div>
  <footer>
    <div class="footer">
      <ul>
        <li><a href="#"><img src="img/behance.png" alt=""></a></li>
        <li><a href="#"><img src="img/dribble.png" alt=""></a></li>
        <li><a href="#"><img src="img/facebook.png" alt=""></a></li>
        <li><a href="#"><img src="img/flickr.png" alt=""></a></li>
        <li><a href="#"><img src="img/g_plus.png" alt=""></a></li>
        <li><a href="#"><img src="img/pinterest.png" alt=""></a></li>
        <li><a href="#"><img src="img/you_tube.png" alt=""></a></li>
        <li><a href="#"><img src="img/skype.png" alt=""></a></li>
        <li><a href="#"><img src="img/stumble_upon.png" alt=""></a></li>
      </ul>
      <p class="paragraph2">DELANI STUDIO <br>2019</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <script src="js/script.js" type="text/javascript"></script>
</body>

</html>