<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../application/css/bootstrap.css" crossorigin="anonymous">
  <!-- X3DOM.css -->
  <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">
  <!-- Lets have some fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <!-- fancyBox3 -->
  <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">


  <title>Coca Cola Virtual Museum</title>

</head>

<body id="bodyColor">
  <!-- The 3D App header -->
  <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">

    <!-- Brand -->
    <div class="logo">
      <a id="navLogo" class="navbar-brand" href="#">
        <h1>1oca</h1>
        <h2>Cola</h2>
        <h3>Journey</h3>
        <p>Refreshing the world, one story at a time</p>
      </a>
    </div>
    <!-- Navbar Menu Icon -->
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- link Menu Icon button to the links class navbar-collapse selector] -->
    <div class="collapse navbar-collapse">
      <!-- Links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a id="navHome" class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom"
            title="About Coca Cola" data-content="Find out more about investing in Coca Cola.">ABOUT</a>
        </li>
        <li class="nav-item">
          <a id="navModels" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom"
            title="X3D Models" data-content="Take a look at the drinks!">MODELS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">CONTACT</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts
      -->
  <div class="container-fluid">
    <!-- This is the home page contents -->
    <div id="home" class="main_contents">
      <div class="row">
        <div class="col-sm-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../application/assets/images/main_coca_cola.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <div id="title_home"></div>
                  <div id="subTitle_home"></div>
                  <div id="description_home"></div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../application/assets/images/main_sprite.jpg" alt="Second slide">
                <div id="title_home"></div>
                <div id="subTitle_home"></div>
                <div id="description_home"></div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../application/assets/images/main_dr_pepper.jpg" alt="Third slide">
                <div id="title_home"></div>
                <div id="subTitle_home"></div>
                <div id="description_home"></div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <!-- A row to hold three cards for the Coke, Sprite and Pepper contents -->
      <div class="row">
        <div class="col-sm-4">
          <div class="card img-narrow">
            <a href="../application/assets/images/render_images/coca_cola/2.png" data-fancybox
              data-caption="My 3D Coke Can Render">
              <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/coca_cola.jpg"
                alt="Coca Cola">
            </a>
            <div class="card-body">
              <div id="title_left" class="card-title drinksText"></div>
              <div id="subTitle_left" class="card-subtitle drinksText"></div>
              <div id="description_left" class="card-text drinksText"></div>
              <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola"
                class="btn btn-primary btn-responsive">Find out more ...</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <a href="../application/assets/images/render_images/sprite/6.png" data-fancybox
              data-caption="My 3D Sprite Bottle Render" class="img-narrow">
              <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/sprite.jpg"
                alt="Sprite">
            </a>
            <div class="card-body">
              <div id="title_centre" class="card-title drinksText"></div>
              <div id="subTitle_centre" class="card-subtitle drinksText"></div>
              <div id="description_centre" class="card-text drinksText"></div>
              <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Find out
                more ...</a>
            </div>

          </div>
        </div>

        <div class="col-sm-4">
          <div class="card img-narrow">
            <a href="../application/assets/images/render_images/dr_pepper/11.png" data-fancybox
              data-caption="My 3D Dr Pepper Bottle Render" class="thumbnail">
              <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/dr_pepper.jpg"
                alt="Dr Pepper">
            </a>
            <div class="card-body">
              <div id="title_right" class="card-title drinksText"></div>
              <div id="subTitle_right" class="card-subtitle drinksText"></div>
              <div id="description_right" class="card-text drinksText"></div>
              <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper"
                class="btn btn-primary btn-responsive">Find out more ...</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End home page contents-->

    <!-- About page contents-->
    <div id="about">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <div class="card text-center">
            <div class="card-header">
              <div id="about1Title" class="about1Title"></div>
              </div>
              <div class="card-body">
                <div id="about1Description" class="about1Description"></div>
              </div>
          </div>
          <div class="card">
            <img src="../application/assets/images/coca_cola_sales.jpg">
          </div>
          <div class="card text-center">
            <div class="card-header">
              <div id="about2Title" class="about2Title"></div>
              </div>
              <div class="card-body">
                <div id="about2Description" class="about2Description"></div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <!-- This is the content for X3D models and 3D Image Gallery -->
    <div id="models" class="main_contents" style="display:none;">
      <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
      <div class="row">
        <!-- X3D Model -->
        <div class="col-sm-8">
          <div class="card text-left">
            <div class="card-header">
              <h2 style="text-align:left;">
                X3D Models
                <span style="float:right;">
                  Dark mode recommended!
                </span>
              </h2>
            </div>
            <div class="card-body">
              <!-- X3D Models -->
              <div>
                <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                <button type="button" class="btn btn-danger btn-responsive"
                  onMouseUp="cokeScene(); cokeDescription();">Coca Cola</button>
                <button type="button" class="btn btn-success btn-responsive"
                  onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                <button type="button" class="btn btn-info btn-responsive"
                  onMouseUP="pepperScene(); pepperDescription();">Dr Pepper</button>

                <!-- Place the X3D code here -->
                <div class="model3D">
                  <x3d id="model">
                    <scene>
                      <Switch whichChoice="0" id='SceneSwitch'>
                        <transform>
                          <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                            url="../application/assets/x3d/coca_cola.x3d"> </inline>
                        </transform>
                        <transform>
                          <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                            url="../application/assets/x3d/sprite.x3d"> </inline>
                        </transform>
                        <transform>
                          <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                            url="../application/assets/x3d/dr_pepper.x3d"> </inline>
                        </transform>
                      </Switch>
                    </scene>
                  </x3d>
                </div>
                <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- 3D image gallery -->
        <div class="col-sm-4">
          <div class="card text-center">
            <div class="card-header">
            <h2 style="text-align:center;">
                The X3D Gallery
              </h2>
            </div>
            <div id="galleryCocaColaDescription" class="card-body">
              <div class="card-title title_coca_cola_gallery coca_cola_text"></div>
              <div class="gallery" id="coca_cola_gallery"></div>
              <div class="card-text coca_cola_description_gallery drinksText"></div>
            </div>
            <div id="gallerySpriteDescription" class="card-body">
              <div class="card-title title_sprite_gallery drinksText"></div>
              <div class="gallery" id="sprite_gallery"></div>
              <div class="card-text sprite_description_gallery drinksText"></div>
            </div>
            <div id="galleryDrPepperDescription" class="card-body">
              <div class="card-title title_dr_pepper_gallery drinksText"></div>
              <div class="gallery" id="dr_pepper_gallery"></div>
              <div class="card-text dr_pepper_description_gallery drinksText"></div>
            </div>
          </div> <!-- End gallery card -->
          <div class="card text-left">
            <div class="card-body">
              <div class="card-Title x3dCamera_Subtitle drinksText">
                <h3>Camera Views</h3>
              </div>
              <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Front</a>
              <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
              <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraTop();">Top</a>
              <a href="#" class="btn btn-warning btn-responsive" onclick="cameraBottom();">Bottom</a>
              <div class="card-text x3dCameraDescription drinksText">
                <p>These buttons to change the camera angles.</p>
              </div>
            </div>
          </div>
          <div class="card text-left">
            <div class="card-body">
              <div class="card-Title x3dRendersubtitle drinksText">
                <h3>Render and Lighting Options</h3>
              </div>
              <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
              <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
              <div class="card-text x3dRenderDescription drinksText">
                <p>Use these buttons to enable wireframe view or change the headlight.</p>
              </div>
            </div>
          </div>
        </div> <!-- End gallery column -->
      </div> <!-- End row for X3D Model and Gallery -->
    </div>
    <!-- Row to hold one card to hold the coke descriptive text, etc.-->
    <div id="cokeDescription" class="row" style="display:none;">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_coke" class="card-title drinksText"></div>
            <div id="subTitle_coke" class="card-subtitle drinksText"></div>
            <div id="description_coke" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit
              Coca Cola</a>
          </div>
        </div>
      </div>
    </div> <!-- End coke description contents -->
    <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
    <div id="spriteDescription" class="row" style="display:none;">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_sprite" class="card-title drinksText"></div>
            <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
            <div id="description_sprite" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit
              Sprite</a>
          </div>
        </div>
      </div>
    </div> <!-- End sprite description contents -->
    <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
    <div id="pepperDescription" class="row" style="display:none;">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_pepper" class="card-title drinksText"></div>
            <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
            <div id="description_pepper" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit
              Dr Pepper.</a>
          </div>
        </div>
      </div>
    </div> <!-- End pepper description contents -->
  </div> <!-- End 3D App SPA Contents -->

  <nav id="footerColor" class="navbar navbar-expand-sm footer">
    <div class="container-fluid">
      <div class="navbar-text float-left copyright">
        <p>&copy 2023 3D Apps</p>
      </div>
      <div class="navbar-text float-right">
        <p>Change theme: <a href="javascript:light()">Light</a> | <a
              href="javascript:dark()">Dark</a></p>
      </div>
    </div>
  </nav>
  <!-- My 3D App modals -->
  <!-- Contact modal -->
  <!-- The Modal -->
  <div class="modal fade" id="contactModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">3D App Contact Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <p>Ekin Zorel, Email: ez63@sussex.ac.uk</p>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../application/js/jquery-3.4.1.js" crossorigin="anonymous"></script>
  <script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <!-- Custom JavaScript code for your 3d App -->
  <script src="../application/js/custom.js" crossorigin="anonymous"></script>
  <!-- JavaScript to swap for SPA and restyle -->
  <script src="../application/js/swap_restyle.js"></script>
  <!-- Include the x3dom JavaScript -->
  <script type='text/javascript' src='../application/js/x3dom.js'></script>
  <!-- JavaScript and PHP based Gallery generator  -->
  <script type="text/javascript" src="../application/js/gallery_generator.js"></script>
  <script type="text/javascript" src="../application/js/gallery_generator1.js"></script>
  <script type="text/javascript" src="../application/js/gallery_generator2.js"></script>
  <!-- JQuery code to get content data from a backend JSON file -->
  <script src="../application/js/getJsonData.js"></script>
  <!-- JavaScript model interactions -->
  <script src="../application/js/modelInteractions.js"></script>
  <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
  <script src="../application/js/jquery.fancybox.min.js"></script>
</body>

</html>